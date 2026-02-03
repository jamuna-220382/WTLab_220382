<?php 
$str="hello word";
$int=34;
$flo=34.43;
$bool=TRUE;
$arr=array($str,$int,$flo,$bool);
echo "string is $str<br>";
echo "integer is $int<br>";
echo "float is $flo<br>";
echo "boolean is $bool<br>";
echo "array is";
print_r($arr);
function fun1() : int {
    $int1=45;
    return int1;
}
$re=fun1();
echo "<br>$re";
$sum=$int+$int1;
echo "sum using global variable and local variable which is in a function";

?>