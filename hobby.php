<html>
  <body>
   <form method="post" action=#>
    select hobbies:<br>
    <input type="checkbox" name="c1" value="problem solving">problem solving<br>
     <input type="checkbox" name="c2" value="coding">coding<br>
     <input type="checkbox" name="c3" value="drawing">drawing<br>
     <input type="submit">
    </form>
  </body>
</html>

<?php
 $a=$_POST["c1"];
 $b=$_POST["c2"];
 $c=$_POST["c3"];
 printf("HOBBIES ARE=<br>%s <br> %s <br> %s",$a,$b,$c);
?>