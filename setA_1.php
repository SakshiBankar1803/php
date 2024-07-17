<html>
 <body>
  <form method="post" action="#">
   Enter a number1::
  <input type="text" name="t1"><br>
   Enter a number2::
  <input type="text" name="t2"><br>
  <input type="submit">
  </form>
 </body>
</html>

<?php
$a=$_POST["t1"];
$b=$_POST["t2"];

mod($a,$b);
sum($a);
fact($b);
power($a,$b);

function mod($a,$b)
{
  echo("<br> mod of two nos::".($a%$b));
}

function sum($a)
{
  $s=0;
 for($i=1;$i<=$a;$i++)
{
  $s=$s+$i;
}
echo("<br> sum of first $a nos=".$s); 
}

function fact($b)
{
   $s=1;
 for($i=1;$i<=$b;$i++)
  $s=$s*$i;

echo("<br> factorial of $b nos=".$s); 
}

function power($a,$b)
{
  echo("<br> base to power=".pow($a,$b));
}

?>