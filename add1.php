<html>
  <body>
    <form method="post" action="#">
     enter no 1:
     <input type="text" name="t1"><br>
     enter no 2:
     <input type="text" name="t2"><br>
     <input type="submit" value="addition">
     <input type="reset" value="vanish">
     
   </form>
  </body>
</html>

<?php
  $a=$_POST["t1"];
  $b=$_POST["t2"];
  printf("addition=%d",$a+$b);

?>