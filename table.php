<html>
 <body>
  <form method=post action=#>
   enter number::
   <input type="number" name="t1"><br>
   <input type="submit" value="table"><br> 
  </form>
 </body>
</html>

<?php
 $a=$_POST["t1"];
 
  for($i=1;$i<=10;$i++)
   echo("<br>".$a*$i);
?>