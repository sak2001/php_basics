<?php

$str = "This is a String <br>";

echo $str;
$len = strlen($str);
echo ("The length of this string is ") . $len . "Thank You <br>" . "number of word count" . str_word_count($str);
// echo $len;
?>