<?php
/**
 * @link      http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license   http://www.yiiframework.com/license/
 */
namespace navatech\simplehtmldom;

use yii\helpers\Inflector;

define('HDOM_TYPE_ELEMENT', 1);
define('HDOM_TYPE_COMMENT', 2);
define('HDOM_TYPE_TEXT', 3);
define('HDOM_TYPE_ENDTAG', 4);
define('HDOM_TYPE_ROOT', 5);
define('HDOM_TYPE_UNKNOWN', 6);
define('HDOM_QUOTE_DOUBLE', 0);
define('HDOM_QUOTE_SINGLE', 1);
define('HDOM_QUOTE_NO', 3);
define('HDOM_INFO_BEGIN', 0);
define('HDOM_INFO_END', 1);
define('HDOM_INFO_QUOTE', 2);
define('HDOM_INFO_SPACE', 3);
define('HDOM_INFO_TEXT', 4);
define('HDOM_INFO_INNER', 5);
define('HDOM_INFO_OUTER', 6);
define('HDOM_INFO_ENDSPACE', 7);
define('DEFAULT_TARGET_CHARSET', 'UTF-8');
define('DEFAULT_BR_TEXT', "\r\n");
define('DEFAULT_SPAN_TEXT', " ");
define('MAX_FILE_SIZE', 600000);

/**
 * Inflector pluralizes and singularizes English nouns. It also contains some other useful methods.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @since  2.0
 */
class SimpleHTMLDom extends Inflector {

	/**
	 * @param        $url
	 * @param bool   $use_include_path
	 * @param null   $context
	 * @param int    $offset
	 * @param bool   $lowercase
	 * @param bool   $forceTagsClosed
	 * @param string $target_charset
	 * @param bool   $stripRN
	 * @param string $defaultBRText
	 * @param string $defaultSpanText
	 *
	 * @return bool|simple_html_dom_node|simple_html_dom
	 */
	public static function file_get_html($url, $use_include_path = false, $context = null, $offset = - 1, $lowercase = true, $forceTagsClosed = true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN = true, $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT) {
		$dom      = new simple_html_dom(null, $lowercase, $forceTagsClosed, $target_charset, $stripRN, $defaultBRText, $defaultSpanText);
		$contents = file_get_contents($url, $use_include_path, $context, $offset);
		if (empty($contents) || strlen($contents) > MAX_FILE_SIZE) {
			return false;
		}
		$dom->load($contents, $lowercase, $stripRN);
		return $dom;
	}

	/**
	 * @param        $str
	 * @param bool   $lowercase
	 * @param bool   $forceTagsClosed
	 * @param string $target_charset
	 * @param bool   $stripRN
	 * @param string $defaultBRText
	 * @param string $defaultSpanText
	 *
	 * @return bool|simple_html_dom_node|simple_html_dom
	 */
	public static function str_get_html($str, $lowercase = true, $forceTagsClosed = true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN = true, $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT) {
		$dom = new simple_html_dom(null, $lowercase, $forceTagsClosed, $target_charset, $stripRN, $defaultBRText, $defaultSpanText);
		if (empty($str) || strlen($str) > MAX_FILE_SIZE) {
			$dom->clear();
			return false;
		}
		$dom->load($str, $lowercase, $stripRN);
		return $dom;
	}

	/**
	 * @param      $node simple_html_dom_node
	 */
	public static function dump_html_tree($node) {
		$node->dump($node);
	}

	/**
	 * @param $url
	 *
	 * @return mixed
	 */
	public static function get_web_page($url) {
		$user_agent = 'Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0';
		$options    = array(
			CURLOPT_CUSTOMREQUEST  => "GET",
			CURLOPT_POST           => false,
			CURLOPT_USERAGENT      => $user_agent,
			CURLOPT_COOKIEFILE     => "cookie.txt",
			CURLOPT_COOKIEJAR      => "cookie.txt",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HEADER         => false,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING       => "",
			CURLOPT_AUTOREFERER    => true,
			CURLOPT_CONNECTTIMEOUT => 120,
			CURLOPT_TIMEOUT        => 120,
			CURLOPT_MAXREDIRS      => 10,
		);
		$ch         = curl_init($url);
		curl_setopt_array($ch, $options);
		$content = curl_exec($ch);
		$err     = curl_errno($ch);
		$errmsg  = curl_error($ch);
		$header  = curl_getinfo($ch);
		curl_close($ch);
		$header['errno']   = $err;
		$header['errmsg']  = $errmsg;
		$header['content'] = $content;
		return $header;
	}

	/**
	 * @param      $code    integer
	 * @param      $message string
	 * @param null $ret
	 */
	public function debug_log($code, $message = null, $ret = null) {
		$path = \Yii::getAlias('@runtime/') . 'simplehtmldom';
		if (!file_exists($path)) {
			mkdir($path, 0777, true);
		}
		$content = 'Code: ' . $code . '\r\nMessage: ' . $message;
		file_put_contents($path . DIRECTORY_SEPARATOR . md5(time()) . '.dat', $content);
	}
}

