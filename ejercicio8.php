<?php
$cateto1=$_POST['numero1'];
$cateto2=$_POST['numero2'];
$hipotenusa=  sqrt((pow($cateto1, 1))+(pow($cateto2,2)));

echo $hipotenusa;

?>