<?php
$string="sachin is  a good boy";

//to find the length and it also include the white spaces
echo " your string= $string  has ".strlen($string)." letters".'<br>';
echo strlen($string);



//to find the word in this string
echo '<br>';
echo str_word_count($string);


//to reverse the string
echo '<br>';
echo strrev($string);

echo '<br>';
echo strpos($string,"is");


//to replace word from the string
echo '<br>';
echo str_replace("sachin","rohan",$string);
echo '<br>';
//to repeat something

echo '<br>';
echo str_repeat($string,12).'<br>';


?>