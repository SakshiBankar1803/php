<html>
 <body>
  <form method=post action=#>
   enter number::
   <input type="number" name="t1"><br>
   <input type="submit" value="check"><br> 
  </form>
 </body>
</html>

<?php
 $a=$_POST["t1"];
 
  if($a>0)
   echo("positive num");
  else if($a<0)
   echo("negative num");
 else
   echo("num is zero");
?>