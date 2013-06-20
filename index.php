<?php

echo '<h1>Assorted Wickets</h1>' . "\n";

$images = array(
   'cricketstumps.jpg',
   'apachewicket.png'
);
foreach ($images as $image) {
    showWicket($image);
}

function showWicket($image) {
    $imageurl = 'images/' . $image;
    $imagesize = getimagesize($imageurl);
    echo 'This is a wicket picture. It is ' . $imagesize[0] . 'x' . $imagesize[1] . ' pixels and its mime type is ' . $imagesize['mime'] . '<br/>' . "\n";
    echo '<img src="' . $imageurl . '"><br/><br/>' . "\n";
    echo '<hr>' . "\n";
}
