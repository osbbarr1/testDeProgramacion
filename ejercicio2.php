<?php
    class A{
        //static $x = array(1,2);
        
        static $x;
        public $y;
        
        public function __construct() {
            $this->x=  array(1,"2");
        }       
        
        
         public function f($z){
            echo $z[1]."<br>";
             $z[1]+=2;
            echo $z[1]."<br>";
            
        }
        
        
        public function g(){
            $a=new A();
            $a->x[0]++;
            
        }
 
}

 class B{
     
     public function main() {
         
         $b=new A();
         $b->y=$b->x;
         $b->f($b->y);
         $b->g();
         
         $r ="oscar";
         $t=5;
         
         echo $r+$t;
         
         echo "hola" + 7;
         echo $b->x[0]." ---- ".$b->x[1]."<br>";
         echo $b->y[0]." ---- ".$b->y[1];
         
                  echo "hello baby"."<br>";
                  
                  echo '<h1 style= "color: red">hola mundo</h1>';
       
     }
}

$r=new B();
$r->main();


?>


