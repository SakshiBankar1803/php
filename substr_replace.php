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

$p=substr_replace($s1,"",5,7);
echo("<br>$p");
$q=substr_replace($s1,$s2,5,0);
echo("<br>$q");
$r=substr_replace($s1,$s2,5,7);
echo("<br>$r");
$s=substr_replace($s1,$s2,5);
echo("<br>$s");

?>