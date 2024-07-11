<html>
  <body>
  <form method=post action=#>
  NAME::
  <input type="text" name="t1"><br>
   ADDERSS::
  <textarea name="t2"> </textarea><br>
   phn no::
  <input type="number" name="t3"><br>
 date::
 <input type="date" name="t4"><br>
 gender::
  <input type="radio" name="r1" value="female">female
  <input type="radio" name="r1" value="male">male<br>
<input type="submit" value="click here">
  </form>
 </body>
</html>

<?php
$n=$_POST["t1"];
$a=$_POST["t2"];
$p=$_POST["t3"];
$g=$_POST["r1"];
$b=$_POST["t4"];

printf("<br> name=%s",$n);
printf("<br> address=%s",$a);
printf("<br> phone number=%s",$p);
printf("<br> gender=%s",$g);
printf("<br> birth date=%s",$b);

?>
