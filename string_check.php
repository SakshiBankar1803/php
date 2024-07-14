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


/*
<?php
$s1=$_POST["y"];
$s2=$_POST["y1"];
$a=strncmp($s1,$s2,4);

if($a>0)
  echo("$s1 is greater");
else if($a<0)
  echo("$s2 is greater");
else
  echo("strings are same");
  

?>
*/
