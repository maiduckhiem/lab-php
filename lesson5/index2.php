<?php
$arr1= [1,2,4,5];
$arr1[]='ngagaga';
array_push($arr1, false);
array_unshift($arr1,true);

array_splice($arr1,1,0,['nncjcj','ạgjannj']);
echo '<pre>';
var_dump($arr1);

?>