<form method="post" action="#">
 enter a no::
 <input type="text" name="t1"><br>
 <input type="submit" value="factorial">
</form>

<?php
$a=$_POST["t1"];
fact($a);
function fact($n)
{
  $f=1;
 for($i=1;$i<=$n;$i++)
    $f=$f*$i;
 
 echo("<br> factorial of no=".$f);
}



?>