<?php

namespace phuongdev89\simplehtmldom;
/**
 * Created by phuongdev89.
 * @author  Phuong
 * @email   phuongdev89@gmail.com
 * @date    5/2/2016
 * @time    1:32 AM
 * @property string accept           Belongs to <input>    Specifies the types of files that the server accepts (only
 *           for type="file").
 * @property string accesskey        Global Attributes    Specifies a shortcut key to activate/focus an element.
 * @property string action           Belongs to <form>    Specifies where to send the form-data when a form is
 *           submitted.
 * @property string alt              Belongs to <area>, <img>, <input>    Specifies an alternate text when the original
 *           element fails to display.
 * @property string async            Belongs to <script>    Specifies that the script is executed asynchronously (only
 *           for external scripts).
 * @property string autocomplete     Belongs to <form>, <input>    Specifies whether the <form> or the <input> element
 *           should have autocomplete enabled.
 * @property string autofocus        Belongs to <button>, <input>, <keygen>, <select>, <textarea>    Specifies that the
 *           element should automatically get focus when the page loads.
 * @property string autoplay         Belongs to <audio>, <video>    Specifies that the audio/video will start playing
 *           as soon as it is ready
 * @property string challenge        Belongs to <keygen>    Specifies that the value of the <keygen> element should be
 *           challenged when submitted.
 * @property string charset          Belongs to <meta>, <script>    Specifies the character encoding.
 * @property string checked          Belongs to <input>    Specifies that an <input> element should be pre-selected
 *           when the page loads (for type="checkbox" or type="radio").
 * @property string cite             Belongs to <blockquote>, <del>, <ins>, <q>    Specifies a URL which explains the
 *           quote/deleted/inserted text.
 * @property string class            Global Attributes    Specifies one or more classnames for an element (refers to a
 *           class in a style sheet).
 * @property string cols             Belongs to <textarea>    Specifies the visible width of a text area.
 * @property string colspan          Belongs to <td>, <th>    Specifies the number of columns a table cell should span
 * @property string content          Belongs to <meta>    Gives the value associated with the http-equiv or name
 *           attribute
 * @property string contenteditable  Global Attributes    Specifies whether the content of an element is editable or
 *           not.
 * @property string contextmenu      Global Attributes    Specifies a context menu for an element. The context menu
 *           appears when a user right-clicks on the element.
 * @property string controls         Belongs to <audio>, <video>    Specifies that audio/video controls should be
 *           displayed (such as a play/pause button etc).
 * @property string coords           Belongs to <area>    Specifies the coordinates of the area.
 * @property string data             Belongs to <object>    Specifies the URL of the resource to be used by the object.
 * @property string datetime         Belongs to <del>, <ins>, <time>    Specifies the date and time.
 * @property string default          Belongs to <track>    Specifies that the track is to be enabled if the user's
 *           preferences do not indicate that another track would be more appropriate.
 * @property string defer            Belongs to <script>    Specifies that the script is executed when the page has
 *           finished parsing (only for external scripts).
 * @property string dir              Global Attributes    Specifies the text direction for the content in an element.
 * @property string dirname          Belongs to <input>, <textarea>    Specifies that the text direction will be
 *           submitted.
 * @property string disabled         Belongs to <button>, <fieldset>, <input>, <keygen>, <optgroup>, <option>,
 *           <select>, <textarea>    Specifies that a the specified element/group of elements should be disabled.
 * @property string download         Belongs to <a>, <area>    Specifies that the target will be downloaded when a user
 *           clicks on the hyperlink.
 * @property string draggable        Global Attributes    Specifies whether an element is draggable or not.
 * @property string dropzone         Global Attributes    Specifies whether the dragged data is copied, moved, or
 *           linked, when dropped.
 * @property string enctype          Belongs to <form>    Specifies how the form-data should be encoded when submitting
 *           it to the server (only for method="post").
 * @property string for              Belongs to <label>, <output>    Specifies which form element(s) a
 *           label/calculation is bound to.
 * @property string form             Belongs to <button>, <fieldset>, <input>, <keygen>, <label>, <meter>, <object>,
 *           <output>, <select>, <textarea>    Specifies the name of the form the element belongs to
 * @property string formaction       Belongs to <button>, <input>    Specifies where to send the form-data when a form
 *           is submitted. Only for type="submit".
 * @property string headers          Belongs to <td>, <th>    Specifies one or more headers cells a cell is related to.
 * @property string height           Belongs to <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>
 *           Specifies the height of the element.
 * @property string hidden           Global Attributes    Specifies that an element is not yet, or is no longer,
 *           relevant.
 * @property string high             Belongs to <meter>    Specifies the range that is considered to be a high value.
 * @property string href             Belongs to <a>, <area>, <base>, <link>    Specifies the URL of the page the link
 *           goes to.
 * @property string hreflang         Belongs to <a>, <area>, <link>    Specifies the language of the linked document.
 * @property string id               Global Attributes    Specifies a unique id for an element.
 * @property string ismap            Belongs to <img>    Specifies an image as a server-side image-map.
 * @property string keytype          Belongs to <keygen>    Specifies the security algorithm of the key.
 * @property string kind             Belongs to <track>    Specifies the kind of text track.
 * @property string label            Belongs to <track>    Specifies the title of the text track.
 * @property string lang             Global Attributes    Specifies the language of the element's content.
 * @property string list             Belongs to <input>    Refers to a <datalist> element that contains pre-defined
 *           options for an <input> element.
 * @property string loop             Belongs to <audio>, <video>    Specifies that the audio/video will start over
 *           again, every time it is finished.
 * @property string low              Belongs to <meter>    Specifies the range that is considered to be a low value.
 * @property string manifest         Belongs to <html>    Specifies the address of the document's cache manifest (for
 *           offline browsing).
 * @property string max              Belongs to <input>, <meter>, <progress>    Specifies the maximum value.
 * @property string maxlength        Belongs to <input>, <textarea>    Specifies the maximum number of characters
 *           allowed in an element.
 * @property string media            Belongs to <a>, <area>, <link>, <source>, <style>    Specifies what media/device
 *           the linked document is optimized for.
 * @property string method           Belongs to <form>    Specifies the HTTP method to use when sending form-data.
 * @property string min              Belongs to <input>, <meter>    Specifies a minimum value.
 * @property string multiple         Belongs to <input>, <select>    Specifies that a user can enter more than one
 *           value.
 * @property string muted            Belongs to <video>    Specifies that the audio output of the video should be
 *           muted.
 * @property string name             Belongs to <button>, <fieldset>, <form>, <iframe>, <input>, <keygen>, <map>,
 *           <meta>, <object>, <output>, <param>, <select>, <textarea>    Specifies the name of the element.
 * @property string novalidate       Belongs to <form>    Specifies that the form should not be validated when
 *           submitted.
 * @property string onabort          Belongs to <audio>, <embed>, <img>, <object>, <video>    Script to be run on
 *           abort.
 * @property string onafterprint     Belongs to <body>    Script to be run after the document is printed.
 * @property string onbeforeprint    Belongs to <body>    Script to be run before the document is printed
 * @property string onbeforeunload   Belongs to <body>    Script to be run when the document is about to be unloaded.
 * @property string onblur           All visible elements.    Script to be run when the element loses focus.
 * @property string oncanplay        Belongs to <audio>, <embed>, <object>, <video>    Script to be run when a file is
 *           ready to start playing (when it has buffered enough to begin).
 * @property string oncanplaythrough Belongs to <audio>, <video>    Script to be run when a file can be played all the
 *           way to the end without pausing for buffering.
 * @property string onchange         All visible elements.    Script to be run when the value of the element is
 *           changed.
 * @property string onclick          All visible elements.    Script to be run when the element is being clicked.
 * @property string oncontextmenu    All visible elements.    Script to be run when a context menu is triggered
 * @property string oncopy           All visible elements.    Script to be run when the content of the element is being
 *           copied.
 * @property string oncuechange      Belongs to <track>    Script to be run when the cue changes in a <track> element
 * @property string oncut            All visible elements.    Script to be run when the content of the element is being
 *           cut.
 * @property string ondblclick       All visible elements.    Script to be run when the element is being
 *           double-clicked.
 * @property string ondrag           All visible elements.    Script to be run at the end of a drag operation.
 * @property string ondragend        All visible elements.    Script to be run at the end of a drag operation.
 * @property string ondragenter      All visible elements.    Script to be run when an element has been dragged to a
 *           valid drop target.
 * @property string ondragleave      All visible elements.    Script to be run when an element leaves a valid drop
 *           target
 * @property string ondragover       All visible elements.    Script to be run when an element is being dragged over a
 *           valid drop target.
 * @property string ondragstart      All visible elements.    Script to be run at the start of a drag operation.
 * @property string ondrop           All visible elements.    Script to be run when dragged element is being dropped.
 * @property string ondurationchange Belongs to <audio>, <video>    Script to be run when the length of the media
 *           changes
 * @property string onemptied        Belongs to <audio>, <video>    Script to be run when something bad happens and the
 *           file is suddenly unavailable (like unexpectedly disconnects).
 * @property string onended          Belongs to <audio>, <video>    Script to be run when the media has reach the end
 *           (a useful event for messages like "thanks for listening")
 * @property string onerror          Belongs to <audio>, <body>, <embed>, <img>, <object>, <script>, <style>, <video>
 *            Script to be run when an error occurs.
 * @property string onfocus          All visible elements.    Script to be run when the element gets focus.
 * @property string onhashchange     Belongs to <body>    Script to be run when there has been changes to the anchor
 *           part of the a URL.
 * @property string oninput          All visible elements.    Script to be run when the element gets user input.
 * @property string oninvalid        All visible elements.    Script to be run when the element is invalid.
 * @property string onkeydown        All visible elements.    Script to be run when a user is pressing a key.
 * @property string onkeypress       All visible elements.    Script to be run when a user presses a key.
 * @property string onkeyup          All visible elements.    Script to be run when a user releases a key.
 * @property string onload           Belongs to <body>, <iframe>, <img>, <input>, <link>, <script>, <style>    Script
 *           to be run when the element is finished loading.
 * @property string onloadeddata     Belongs to <audio>, <video>    Script to be run when media data is loaded
 * @property string onloadedmetadata Belongs to <audio>, <video>    Script to be run when meta data (like dimensions
 *           and duration) are loaded.
 * @property string onloadstart      Belongs to <audio>, <video>    Script to be run just as the file begins to load
 *           before anything is actually loaded.
 * @property string onmousedown      All visible elements.    Script to be run when a mouse button is pressed down on
 *           an element.
 * @property string onmousemove      All visible elements.    Script to be run as long as the  mouse pointer is moving
 *           over an element.
 * @property string onmouseout       All visible elements.    Script to be run when a mouse pointer moves ot of an
 *           element.
 * @property string onmouseover      All visible elements.    Script to be run when a mouse pointer moves over an
 *           element.
 * @property string onmouseup        All visible elements.    Script to be run when a mouse button is released over an
 *           element.
 * @property string onmousewheel     All visible elements.    Script to be run when a mouse wheel is being scrolled
 *           over an element.
 * @property string onoffline        Belongs to <body>    Script to be run when the browser starts to work offline
 * @property string ononline         Belongs to <body>    Script to be run when the browser starts to work online
 * @property string onpagehide       Belongs to <body>    Script to be run when a user navigates away from a page.
 * @property string onpageshow       Belongs to <body>    Script to be run when a user navigates to a page
 * @property string onpaste          All visible elements.    Script to be run when the user pastes som content in an
 *           elements
 * @property string onpause          Belongs to <audio>, <video>    Script to be run when the media is paused either by
 *           the user or programmatically.
 * @property string onplay           Belongs to <audio>, <video>    Script to be run when the media is ready to start
 *           playing.
 * @property string onplaying        Belongs to <audio>, <video>    Script to be run when the media actually has
 *           started playing.
 * @property string onpopstate       Belongs to <body>    Script to be run when the window's history changes.
 * @property string onprogress       Belongs to <audio>, <video>    Script to be run when the browser is in the process
 *           of getting the media data
 * @property string onratechange     Belongs to <audio>, <video>    Script to be run each time the playback rate
 *           changes (like when a user switches to a slow motion or fast forward mode).
 * @property string onreset          Belongs to <form>    Script to be run when a reset button in a form is clicked.
 * @property string onresize         Belongs to <body>    Script to be run when the browser window is being resized.
 * @property string onscroll         All visible elements.    Script to be run when an element's scrollbar is being
 *           scrolled.
 * @property string onsearch         Belongs to <input>    Script to be run when the user writes something in a search
 *           field (for <input="search">).
 * @property string onseeked         Belongs to <audio>, <video>    Script to be run when the seeking attribute is set
 *           to false indicating that seeking has ended.
 * @property string onseeking        Belongs to <audio>, <video>    Script to be run when the seeking attribute is set
 *           to true indicating that seeking is active
 * @property string onselect         All visible elements.    Script to be run when the element gets selected.
 * @property string onshow           Belongs to <menu>    Script to be run when a <menu> element is shown as a context
 *           menu
 * @property string onstalled        Belongs to <audio>, <video>    Script to be run when the browser is unable to
 *           fetch the media data for whatever reason.
 * @property string onstorage        Belongs to <body>    Script to be run when a Web Storage area is updated.
 * @property string onsubmit         Belongs to <form>    Script to be run when a for is submitted.
 * @property string onsuspend        Belongs to <audio>, <video>    Script to be run when fetching the media data is
 *           stopped before it is completely loaded for whatever reason.
 * @property string ontimeupdate     Belongs to <audio>, <video>    Script to be run when the playing position has
 *           changed (like when the user fast forwards to a different point in the media)
 * @property string ontoggle         Belongs to <details>    Script to be run when the user opens or closes the
 *           <details> element.
 * @property string onunload         Belongs to <body>    Script to be run when a page has unloaded (or the browser
 *           window has been closed)
 * @property string onvolumechange   Belongs to <audio>, <video>    Script to be run each time the volume is changed
 *           which (includes setting the volume to "mute").
 * @property string onwaiting        Belongs to <audio>, <video>    Script to be run when the media has paused but is
 *           expected to resume (like when the media pauses to buffer more data).
 * @property string onwheel          All visible elements.    Script to be run when the mouse wheel rolls up or down
 *           over an element.
 * @property string open             Belongs to <details>    Specifies that the details should be visible (open) to the
 *           user
 * @property string optimum          Belongs to <meter>    Specifies what value is the optimal value for the gauge.
 * @property string pattern          Belongs to <input>    Specifies a regular expression that an <input> element's
 *           value is checked against.
 * @property string placeholder      Belongs to <input>, <textarea>    Specifies a short hint that describes the
 *           expected value of the element.
 * @property string poster           Belongs to <video>    Specifies an image to be shown while the video is
 *           downloading, or until the user hits the play button.
 * @property string preload          Belongs to <audio>, <video>    Specifies if and how the author thinks the
 *           audio/video should be loaded when the page loads
 * @property string readonly         Belongs to <input>, <textarea>    Specifies that the element is read-only
 * @property string rel              Belongs to <a>, <area>, <link>    Specifies the relationship between the current
 *           document and the linked document.
 * @property string required         Belongs to <input>, <select>, <textarea>    Specifies that the element must be
 *           filled out before submitting the form.
 * @property string reversed         Belongs to <ol>    Specifies that the list order should be descending (9,8,7...).
 * @property string rows             Belongs to <textarea>    Specifies the visible number of lines in a text area.
 * @property string rowspan          Belongs to <td>, <th>    Specifies the number of rows a table cell should span
 * @property string sandbox          Belongs to <iframe>    Enables an extra set of restrictions for the content in an
 *           <iframe>
 * @property string scope            Belongs to <th>    Specifies whether a header cell is a header for a column, row,
 *           or group of columns or rows.
 * @property string scoped           Belongs to <style>    Specifies that the styles only apply to this element's
 *           parent element and that element's child elements
 * @property string selected         Belongs to <option>    Specifies that an option should be pre-selected when the
 *           page loads.
 * @property string shape            Belongs to <area>    Specifies the shape of the area.
 * @property string size             Belongs to <input>, <select>    Specifies the width, in characters (for <input>)
 *           or specifies the number of visible options (for <select>)
 * @property string sizes            Belongs to <link>    Specifies the size of the linked resource.
 * @property string span             Belongs to <col>, <colgroup>    Specifies the number of columns to span.
 * @property string spellcheck       Global Attributes    Specifies whether the element is to have its spelling and
 *           grammar checked or not.
 * @property string src              Belongs to <audio>, <embed>, <iframe>, <img>, <input>, <script>, <source>,
 *           <track>, <video>    Specifies the URL of the media file.
 * @property string srcdoc           Belongs to <iframe>    Specifies the HTML content of the page to show in the
 *           <iframe>.
 * @property string srclang          Belongs to <track>    Specifies the language of the track text data (required if
 *           kind="subtitles").
 * @property string start            Belongs to <ol>    Specifies the start value of an ordered list.
 * @property string step             Belongs to <input>    Specifies the legal number intervals for an input field.
 * @property string style            Global Attributes    Specifies an inline CSS style for an element.
 * @property string tabindex         Global Attributes    Specifies the tabbing order of an element.
 * @property string target           Belongs to <a>, <area>, <base>, <form>    Specifies the target for where to open
 *           the linked document or where to submit the form.
 * @property string title            Global Attributes    Specifies extra information about an element.
 * @property string translate        Global Attributes    Specifies whether the content of an element should be
 *           translated or not.
 * @property string type             Belongs to <button>, <embed>, <input>, <link>, <menu>, <object>, <script>,
 *           <source>, <style>    Specifies the type of element.
 * @property string usemap           Belongs to <img>, <object>    Specifies an image as a client-side image-map.
 * @property string value            Belongs to <button>, <input>, <li>, <option>, <progress>, <param>    Specifies the
 *           value of the element.
 * @property string width            Belongs to <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>
 *           Specifies the width of the element.
 * @property string wrap             Belongs to <textarea>    Specifies how the text in a text area is to be wrapped
 *           when submitted in a form.
 * */
class html
{
}
