<html>
 <body>
  <form method=post action=#>
   enter 1 no::
   <input type="number" name="t1"><br>
   enter 2 no::
   <input type="number" name="t2"><br>
  enter 3 no::
   <input type="number" name="t3"><br>
   <input type="submit" value="larger num"><br> 
  </form>
 </body>
</html>

<?php
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 $c=$_POST["t3"];
  if($a>$b && $a>$c)
   echo("first is max=".$a);
  else if($b>$a && $b>$c)
   echo("second is max=".$b);
 else
  echo("third is max=".$c);
?>