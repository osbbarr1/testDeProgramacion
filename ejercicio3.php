<?php

if($_POST)
	{	
		$num1 = $_POST
		['numero1'];
                echo $num1  ."   __   ";
		 
	}
        if ($num1 <100 && $num1 >9)
        {
            $d1=$num1%10;
            echo $d1  ."  d1 __   ";
            $num1=$num1/10;
            echo $num1  ."  num1 __   ";
            $d2=$num1%10;
            echo $d2  ."  d2 __   ";
            if ($d1%2==0 && $d2%2==0){
                echo ("el promedio de los digitos de:  ".$num1." es :".(($d1+$d2)/2));
            }
            else{
                echo "no es par el numero ingresado";
            }
         }

?>


