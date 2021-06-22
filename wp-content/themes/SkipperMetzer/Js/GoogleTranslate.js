<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>Google Translation</title>
</head>
<body>
    <form id="form1" runat="server">
    <div id="google_translate_element" style="display: none">
    </div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false }, 'google_translate_element');
        }
    </script>
    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
        type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        function translateLanguage(lang) {

            var $frame = $('.goog-te-menu-frame:first');
            if (!$frame.size()) {
                alert("Error: Could not find Google translate frame.");
                return false;
            }
            $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
            return false;
        }
    </script>
    <ul>
        <li><a href="javascript:;" id="German" onclick="translateLanguage(this.id);"><span>German </span>
            <img src="img/flags/germany_flag.jpg" alt="" /></a> </li>
        <li><a href="javascript:;" id="Italian" onclick="translateLanguage(this.id);"><span>Italian
        </span>
            <img src="img/flags/italy_flag.jpg" alt="" /></a> </li>
        <li><a href="javascript:;" id="Hindi" onclick="translateLanguage(this.id);"><span>Hindi </span>
            <img src="img/flags/india_flag.png" alt="" /></a> </li>
        <li><a href="javascript:;" id="French" onclick="translateLanguage(this.id);"><span>French </span>
            <img src="img/flags/french_flag.jpg" alt="" /></a> </li>
        <li><a href="javascript:;" id="Spanish" onclick="translateLanguage(this.id);"><span>Spanish
        </span>
            <img src="img/flags/spain_flag.jpg" alt="" /></a> </li>
        <li><a href="javascript:;" id="Russian" onclick="translateLanguage(this.id);"><span>Russian
        </span>
            <img src="img/flags/russia_flag.jpg" alt="" /></a> </li>
    </ul>
    <div>
        In this article we explain how to translate the web page into different language
        using google translator. We create a custom country list with flag and call the
        google translator code using javascript custom code. The benifit of this custom
        list is than we can hide the google translator widget and use all the language to
        translate the web page.
    </div>
    </form>
</body>
</html>