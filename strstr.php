<html>
 <body>
  <form method="post" action="#">
   enter a original string::
   <input type="text" name="t1"><br>
    enter a  substring::
   <input type="text" name="t2"><br>
   <input type="submit">
 </body>
</html>

<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$k=strstr($s1,$s2);
if($k==false)
  echo("<br> string not found");
else
  echo("<br> string is found=$k");

?>