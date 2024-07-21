<html>
 <body>
  <form method="post" action="#">
   enter string1::
  <input type="text" name="t1"><br>
   enter string2::
  <input type="text" name="t2"><br>
  <input type="radio" name="r1" value="1">compare using strcmp()<br>
  <input type="radio" name="r1" value="2">compare using operator ==<br>
  <input type="radio" name="r1" value="3">append the string<br>
  <input type="submit">
  </form>
 </body>
</html>

<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$ch=$_POST["r1"];
 switch($ch)
{
  case 1 : compare($s1,$s2);
           break;
  case 2 : com($s1,$s2);
           break;
  case 3 : concat($s1,$s2);
           break;
 case 3 : rev($s1,$s2);
           break;
}

function compare($s1,$s2)
{
 $k=strcmp($s1,$s2);
 if($k>0)
  echo("<br> first string greater=$s1");
else if($k<0)
  echo("<br> second string greater=$s2");
else
  echo("<br> strings are same");
}

 
function concat($s1,$s2)
{
  $s3=$s1.$s2;
 echo("concatnated string=".$s3);
}

function com($s1,$s2)
{
  if($s1==$s2)
    echo("<br> strings are equal");
  else
    echo("<br> string not same");
}
/*function rev($s1,$s2)
{
  $p=$_POST
}*/


?>