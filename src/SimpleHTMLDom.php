<?php
/**
 * @link      http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license   http://www.yiiframework.com/license/
 */

namespace phuongdev89\simplehtmldom;

use Yii;
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
defined('DEFAULT_TARGET_CHARSET') || define('DEFAULT_TARGET_CHARSET', 'UTF-8');
defined('DEFAULT_BR_TEXT') || define('DEFAULT_BR_TEXT', "\r\n");
defined('DEFAULT_SPAN_TEXT') || define('DEFAULT_SPAN_TEXT', ' ');
defined('MAX_FILE_SIZE') || define('MAX_FILE_SIZE', 60000000);
define('HDOM_SMARTY_AS_TEXT', 1);

/**
 * Inflector pluralizes and singularizes English nouns. It also contains some other useful methods.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @since  2.0
 */
class SimpleHTMLDom extends Inflector
{

    /**
     *
     * @param $url
     * @param $use_include_path
     * @param $context
     * @param $offset
     * @param $maxLen
     * @param $lowercase
     * @param $forceTagsClosed
     * @param $target_charset
     * @param $stripRN
     * @param $defaultBRText
     * @param $defaultSpanText
     * @return false|simple_html_dom
     *
     * @datetime 2/1/2023 4:56 PM
     * @author   Phuong Dev <phuongdev89@gmail.com>
     */
    public static function file_get_html($url, $use_include_path = false, $context = null, $offset = 0, $maxLen = -1, $lowercase = true, $forceTagsClosed = true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN = true, $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT)
    {
        if ($maxLen <= 0) {
            $maxLen = MAX_FILE_SIZE;
        }
        $dom = new simple_html_dom(null, $lowercase, $forceTagsClosed, $target_charset, $stripRN, $defaultBRText, $defaultSpanText);
        /**
         * For sourceforge users: uncomment the next line and comment the
         * retrieve_url_contents line 2 lines down if it is not already done.
         */
        $contents = file_get_contents($url, $use_include_path, $context, $offset, $maxLen);
        // $contents = retrieve_url_contents($url);
        if (empty($contents) || strlen($contents) > $maxLen) {
            $dom->clear();
            return false;
        }
        return $dom->load($contents, $lowercase, $stripRN);
    }

    /**
     *
     * @param $str
     * @param $lowercase
     * @param $forceTagsClosed
     * @param $target_charset
     * @param $stripRN
     * @param $defaultBRText
     * @param $defaultSpanText
     * @return false|simple_html_dom
     *
     * @datetime 2/1/2023 4:56 PM
     * @author   Phuong Dev <phuongdev89@gmail.com>
     */
    public static function str_get_html($str, $lowercase = true, $forceTagsClosed = true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN = true, $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT)
    {
        $dom = new simple_html_dom(null, $lowercase, $forceTagsClosed, $target_charset, $stripRN, $defaultBRText, $defaultSpanText);
        if (empty($str) || strlen($str) > MAX_FILE_SIZE) {
            $dom->clear();
            return false;
        }
        return $dom->load($str, $lowercase, $stripRN);
    }

    /**
     * @param      $node simple_html_dom_node
     */
    public static function dump_html_tree($node)
    {
        $node->dump($node);
    }

    /**
     * @param $url
     *
     * @return mixed
     */
    public static function get_web_page($url)
    {
        extract(parse_url($url));
        $cookie = Yii::getAlias('@runtime/' . $host . '.txt');
        $user_agent = 'Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0';
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_USERAGENT => $user_agent,
            CURLOPT_COOKIEFILE => $cookie,
            CURLOPT_COOKIEJAR => $cookie,
            CURLOPT_HEADER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_AUTOREFERER => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ];
        $ch = curl_init($url);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        $err = curl_errno($ch);
        $errmsg = curl_error($ch);
        $header = curl_getinfo($ch);
        curl_close($ch);
        $header['errno'] = $err;
        $header['errmsg'] = $errmsg;
        $header['content'] = $content;
        return $header;
    }

    /**
     * @param      $code    integer
     * @param      $message string
     * @param null $ret
     */
    public function debug_log($code, $message = null, $ret = null)
    {
        $path = Yii::getAlias('@runtime/') . 'simplehtmldom';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $content = 'Code: ' . $code . '\r\nMessage: ' . $message;
        file_put_contents($path . DIRECTORY_SEPARATOR . md5(time()) . '.dat', $content);
    }
}

