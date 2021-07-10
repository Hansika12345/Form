<?php
    $str = "this is";
    echo $str. "<br>";
    $len = strlen($str);
    echo "The length of this string is " .$len.  ".Thankyou<br>";
    echo "The word count of this string is " .str_word_count($str).  ".Thankyou<br>";

    echo "The reversed string is " .strrev($str).  ".Thankyou<br>";

    echo "The search for is in  this string is " .strpos($str, "is").  ".Thankyou<br>";

    echo "The replaced is in  this string is " .str_replace("is", "at", $str).  ".Thankyou<br>";
   // echo $len;

    // "." i.e dot in  php is the string concatenation in php
?>