<?php

// over loading
   class Shape {
      const PI = 3.142 ;
      function __call($name,$arg){
         if($name == 'area')
            switch(count($arg)){
               case 0 : return 0 ;
               case 1 : return self::PI * $arg[0] ;
               case 2 : return $arg[0] * $arg[1];
            }
      }
   }
   $circle = new Shape();
   echo $circle->area(4);
   echo "<br/>";
   $rect = new Shape();
   echo $rect->area(8,6);
   echo "<br/>";


// over ridding

   class Base {
      function display() {
         echo "\nBase class function declared final!";
            echo "<br/>";
      }
      function demo() {
         echo "\nBase class function!";
            echo "<br/>";
      }
   }
   class Derived extends Base {
      function demo() {
         echo "\nDerived class function!";
            echo "<br/>";
      }
   }
   $ob = new Base;
   $ob->demo();
   $ob->display();
   $ob2 = new Derived;
   $ob2->demo();
   $ob2->display();





?>