<html>
  <body>
   <form method="post" action="#">
    enter string1::
   <input type="text" name="t1"> <br>
   enter string 2::
   <input type="text" name="t2"> <br>
   <input type="submit">
   </form>
  </body>
</html>

<?php

  $s1=$_POST["t1"];
  $s2=$_POST["t2"];
  $s3=$s1.$s2;
 echo("concatnated string=".$s3);


?>