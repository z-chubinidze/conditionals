<?php

//დავალება: conditionals-1
$age = 12;

if($age >=18 ){

    echo "სრულწლოვანია";
}else{
    echo "არასრულწლოვანია";
}

echo "<br/>";

// დავალება: conditionals-2

$x = 10;
$y = 59;
$z = 46;

if($x > $y && $x > $z){
 echo "უდიდესი რიცხვი არის: $x ";;
}else if($y > $x && $y > $z){
    echo "უდიდესი რიცხვი არის: $y ";
}else{
    echo "უდიდესი რიცხვი არის: $z ";;
}

?>