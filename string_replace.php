<html>
 <body>
  <form method="post" action="#">
   enter string1::
  <input type="text" name="t1"><br>
   enter string2::
  <input type="text" name="t2"><br>
  enter string3::
  <input type="text" name="t3"><br>
  <input type="submit">
  </form>
 </body>
</html>

<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$s3=$_POST["t3"];
$k=str_replace($s2,$s3,$s1);
echo("<br>replace string is=$k");
?>