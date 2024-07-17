<html>
 <body>
  <form method="post" action="#">
   Enter a string::
  <input type="text" name="t1"><br>
  <input type="submit">
  </form>
 </body>
</html>

<?php
$s=$_POST["t1"];
$s2=rtrim($s);
$s1=ltrim($s);
$s3=trim($s);
echo("<br>left trim string=".$s1);
echo("<br>right trim string=".$s2);
echo("<br> trim string=".$s3);

?>
