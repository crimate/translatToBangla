<?php

function translate($str){
$searchVal = array("1", "2", "3","4","5","6","7","8","9","0");
$replaceVal = array("১", "২", "৩","৪","৫","৬","৭","৮","৯","০");

//str_replace(search,replace,input)

$numStr = str_replace($searchVal,$replaceVal,$str);

$enMonth = array("January","February","March","April","May","June","July","August","September","October","November","December");
$bnMonth = array("জানুয়ারী","ফেব্রুয়ারী","মার্চ","এপ্রিল","মে","জুন","জুলাই","আগস্ট","সেপ্টেম্বর","অক্টোবর","নভেম্বর","ডিসেম্বর");

$date = str_replace($enMonth,$bnMonth,$numStr);

return $date;
}

?>
