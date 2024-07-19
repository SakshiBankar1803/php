<html>
 <body>
  <form method="post" action="#">
   enter string1::
  <input type="text" name="t1"><br>
   enter string2::
  <input type="text" name="t2"><br>
  <input type="submit">
  </form>
 </body>
</html>

<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$k=strcmp($s1,$s2);
if($k>0)
  echo("<br> first string greater=$s1");
else if($k<0)
  echo("<br> second string greater=$s2");
else
  echo("<br> strings are same");

echo("<br> uppercase of string1=".strtoupper($s1));
echo("<br> uppercase of string1=".strtolower($s1));

echo("<br> uppercase of string1=".strtoupper($s2));
echo("<br> uppercase of string1=".strtolower($s2));
?>