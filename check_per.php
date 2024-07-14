<html>
 <body>
  <form method="post" action="#">
   enter percentage::
   <input type="number" name="t1"><br>
   <input type="submit" value="show"><br> 
  </form>
 </body>
</html>

<?php
 $a=$_POST["t1"];
 
  if($a<=40)
   echo("fail=".$a);
  else if($a>50 && $a<60)
   echo("pass class=".$a);
  else if($a>60 && $a<70)
   echo("second class=".$a);
 else if($a>70)
  echo("first class=".$a);
 else
  echo("distiction=".$a);
?>