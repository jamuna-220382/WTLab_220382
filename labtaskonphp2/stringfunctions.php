<?php
$str="hello world";
$length=strlen($str); #strlen-count no of characters in a string
echo "length of str is $length <br> ";
$rev=strrev($str);#strrev-reverses a string
echo "reverse of string $str is $rev <br>";
$upper=strtoupper($str);#strtoupper-to convert to uppercase
echo "upper case of string $str is $upper<br>";
$lower=strtolower($str);#strtolower-to convert to lowercase
echo "lower case of string $str is $lower<br>";
$uc=ucfirst($str);#ucfirst-to convert first letter upper case
echo "first letter of string is upper $uc<br>";
$ucw=ucwords($str);#ucwords-to convert every word first letter upper case
echo " first letter of every word is upper $ucw<br>";
$pos=strpos($str,"world");#strpos-to find position of a string
echo "world position in string $pos<br>";#strpos(str,str to find index)
$re=str_replace("world","people",$str);
echo "replaced world with people $re<br>";
$sub=substr($str,0,5);#extracts substring from start index to end index =[0,5)
echo "extracted string is $sub<br>";
echo trim("    hello   ");
echo ltrim("          hello      ");
echo rtrim("       hello  ");
echo "<br>";
$cmp=strcmp("hello","hello");
if($cmp==0){
    echo "STRING IS SAME<br>";
}
else{
    echo "not same<br> ";
}
$wordcount=str_word_count($str);#couts no of words in a string
echo " no of words in string '$str' is $wordcount<br>";
$arr=array("apple","banana","mango");
$arrtostr=implode("-",$arr);
echo " array is ";
print_r($arr);
echo "<br> array converted to string $arrtostr<br>";
$strtoarr=explode(",",$arrtostr);
print_r($strtoarr);
echo "<br> string case compare is same or not <br>";
$cmp2=strcasecmp("HELlo","hello");#strcasecmp - compare two strings without case sensitive -0 strings are same/>0 string1 is greater /<0 string is smaller
print($cmp2);
#htmlspecialchars()  --> converts html special characters into safe text

?>