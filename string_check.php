<html>
 <body>
  <form method=post action=#>
   enter 1st string::
   <input type="text" name="y"><br>
  enter 2st string::
   <input type="text" name="y1"><br>
   <input type="submit" value="check string"><br> 
  </form>
 </body>
</html>

<?php
 $p=$_POST["y"];
 $q=$_POST["y1"];
 $a=strcmp($p,$q);
 
  if($a==0)
  printf("string are equal");
  else if($a<0)
  printf("first string greater=%s",$p);
 else
  printf("second string greater=%s",$q);
?>