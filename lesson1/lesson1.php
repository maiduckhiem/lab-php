<!-- <?php
$name = 'nguyen van a';

$upperName = strtoupper($name);
$lowerName = strtoupper($name);

for($i = 0 ; $i < strlen($name);$i++){
    echo (ucwords($name)) .'<br>';
}
?> -->

<!-- <?php
$name = "nguyen mInh";

$correctName="";
for($i=0;$i < strlen($name);$i++){
    $kytu = $name[$i];
    if($i === 0 || $name[$i-1] ==" "){
        $letter = strtoupper($kytu);
    }else{
        $letter = strtolower($kytu);
    }
    $correctName .= $letter;
}
echo $correctName;
?> -->
<?php
$number;
for ($i = 0 ; $i < 10 ; $i++){
    $number[$i] = rand(1,100); 
}
 for ($i = 0 ; $i < 10 ; $i++){
     echo $number[$i].'<br>';
 }
 for($i = 0 ; $i < 10 ; $i++){
     if($number[$i]%3 == 0 && $number[$i]%5 == 0){
        echo $number[$i];
     }
 }
?>