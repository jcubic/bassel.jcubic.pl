<?php

require('utils.php');

?><!DOCTYPE html>
<html>
    <head>
        <title>Bassel Badge</title>
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png"/>
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32"/>
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16"/>
        <link rel="manifest" href="/manifest.json"/>
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5"/>
        <meta name="theme-color" content="#ffffff"/>
        <style>
h1 {
    margin: 0;
    text-align: center;
}
.hashtag a, .hashtag a:visited{
    color: #FF2747;
    font-weight: bold;
}
.hashtag a:hover {
    text-decoration: underline;
}
img + p {
    margin-top: 10px;
}
p {
    margin: 5px 0;
    float: right;
    clear: right;
    text-align: right;
    margin-right: 20px;
}
img {
    float: left;
}
body {
    margin: 10px;
}
a {
    text-decoration: none;
}
a, a:visited {
    color: black;
}
.text {
    position: absolute;
    text-align: right;
    right: 20px;
    top: 62px;
}
.source {
    position: absolute;
    left: 5px;
    bottom: 5px;
    width: 10px;
    font-weight: bold;
}
.source::before, .source::after {
    display: inline;
}
.source::before {
    content: "<";
}
.source::after {
    content: ">";
}
</style>
    </head>
    <body>
        <a href="http://freebassel.org/">
            <h1>Bassel Khartabil</h1>
            <img src="https://openclipart.org/image/100px/svg_to_png/243593/freebassel-2016-red-square.png"/>
            <div class="text">
              <p>Executed by Syrian Gov.</p>
              <p><?= get("http://api.freebassel.org/executed/", "unknown") ?> day ago</p>
              <p class="hashtag">
                <a href="https://twitter.com/freebassel" target="_top">@freebassel</a>
              </p>
            </div>
            <a target="_top" class="source" href="http://bassel.jcubic.pl"></a>
        </a>
        <!-- Piwik -->
        <script type="text/javascript">
         if (location.host == 'bassel.jcubic.pl') {
             var _paq = _paq || [];
             _paq.push(["setDomains", ["*.bassel.jcubic.pl"]]);
             _paq.push(['trackPageView']);
             _paq.push(['enableLinkTracking']);
             (function() {
                 var u="//piwik.jcubic.pl/";
                 _paq.push(['setTrackerUrl', u+'piwik.php']);
                 _paq.push(['setSiteId', 7]);
                 var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                 g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
             })();
         }
        </script>
        <noscript><p><img src="//piwik.jcubic.pl/piwik.php?idsite=7" style="border:0;" alt="" /></p></noscript>
        <!-- End Piwik Code -->
    </body>
</html>
