<html>
 <body>
  <form method="post" action="#">
   ENTER A NUMBER 1::
  <input type="number" name="t1"><br>
  ENTER A NUMBER 2::
  <input type="number" name="t2"><br>
  <input type="radio" name="r1" value="1">Addition<br>
  <input type="radio" name="r1" value="2">Substration<br>
  <input type="radio" name="r1" value="3">Multiplication<br>
  <input type="radio" name="r1" value="4">Division<br>
  <input type="submit">
 </body>
</html>

<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["r1"];
 switch($ch)
{
  case 1 : $c=$a+$b;
           echo("<br> addition=".$c);
           break;
  case 2 : $c=$a-$b;
           echo("<br> substraction=".$c);
           break;
  case 3 : $c=$a*$b;
           echo("<br> multiplication=".$c);
           break;
  case 4 : $c=$a/$b;
           echo("<br> division=".$c);
           break;
  //default :echo("<br> invalid choice");break;
  
}

?>