<html>
  <body>
  <form method=post action=#>
  enter marks of 1st sub::
  <input type="text" name="t1"><br>
enter marks of 2nd sub::
  <input type="text" name="t2"><br>
enter marks of 3rd sub::
  <input type="text" name="t3"><br>
enter marks of 4th sub::
  <input type="text" name="t4"><br>
enter marks of 5th sub::
  <input type="text" name="t5"><br>

<input type="submit" value="total">
<input type="submit" value="avg">
<input type="reset" value="clear">
  </form>
 </body>
</html>

<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];
$e=$_POST["t5"];
$f=$a+$b+$c+$d+$e;
//$tt=$_POST["f"];
$g=$f/5;
//$per=$_POST["g"];
printf("total marks=%d",$f);
printf("percentage=%f",$g);

?>
