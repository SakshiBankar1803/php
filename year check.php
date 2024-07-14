<html>
 <body>
  <form method=post action=#>
   enter year::
   <input type="number" name="y"><br>
   <input type="submit" value="check year"><br> 
  </form>
 </body>
</html>

<?php
 $a=$_POST["y"];
 
  if($a%4==0)
  printf("its a leap year=%d",$a);
  else
  printf("it's not a leap year=%d",$a);
?>