<html>
 <body>
  <form method="post" action="#">
   Enter 1st string::
  <input type="text" name="t1"><br>
  Enter 2nd string::
  <input type="text" name="t2"><br>
  <input type="submit">
  </form>
 </body>
</html>

<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
 sound($s1,$s2);
 meta($s1,$s2);

function sound($s1,$s2)
{
  if(soundex($s1)==soundex($s2))
    echo("strings are same");
  else
    echo("strings are not same");
}

function meta($s1,$s2)
{
  if(metaphone($s1)==metaphone($s2))
    echo("<br>strings are same");
  else
    echo("<br>strings are not same");
}
?>
