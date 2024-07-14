<html>
 <body>
  <form method=post action=#>
   enter 1 no::
   <input type="number" name="t1"><br>
   enter 2 no::
   <input type="number" name="t2"><br>
   <input type="submit" value="larger num"><br> 
  </form>
 </body>
</html>

<?php
 $a=$_POST["t1"];
 $b=$_POST["t2"];
  if($a>$b)
   echo("first is max");
  else
   echo("second is max");
?>