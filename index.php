<?php

function get($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $agent = "bassel.jcubic.pl";
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($curl);
    return $data;
}


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
.hashtag {
    color: #FF2747;
    font-weight: bold;
}
img + p {
    margin-top: 10px;
}
p {
    margin: 5px 0;
    float: right;
    clear: right;
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
</style>
    </head>
    <body>
    <?php if (preg_match("/bassel\.jcubic\.pl/", $_SERVER['HTTP_REFERER'])) { ?>
        <a href="http://freebassel.org/">
            <h1>Bassel Khartabil</h1>
            <img src="https://openclipart.org/image/100px/svg_to_png/243593/freebassel-2016-red-square.png"/>
            <p>Missing for <?= get("http://api.freebassel.org/disappeared/") ?> days</p>
            <p class="hashtag">#disappeared</p>
            <p>In Prison for <?= get("http://api.freebassel.org/days/") ?> days</p>
            <p class="hashtag">#Freebassel</p>
        </a>
    <?php } else { ?>
    <iframe src="http://bassel.jcubic.pl" width="300" height="170" style="border: 1px solid black"></iframe>
    <textarea cols="50" rows="10"><iframe src="http://bassel.jcubic.pl" width="300" height="170" style="border: 1px solid black"/></textarea>
    <a href="https://github.com/jcubic/bassel.jcubic.pl"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>
    <?php } ?>
    </body>
</html>
