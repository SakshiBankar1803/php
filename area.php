
<?php
 function circle($r)
 {
   $a=pi()*$r*$r;
  echo("area of circle=".$a);
 }

 function triangle($b,$h)
 {
   $a=0.5*$b*$h;
  echo("<br>area of triangle=".$a);
 }

circle(3.4);
triangle(4,5);
?>
