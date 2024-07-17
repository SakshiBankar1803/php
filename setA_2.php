<html>
 <body>
  <form method="post" action="#">
   enter a string::
   <input type="text" name="t1"><br>
   <input type="radio" name="r1" value="1">count vowels<br>
   <input type="radio" name="r1" value="2">string length<br>
   <input type="radio" name="r1" value="3">lower case and title case<br>
   <input type="radio" name="r1" value="4">padding the string<br>
   <input type="radio" name="r1" value="5">remove whitespaces<br>
   <input type="radio" name="r1" value="6">reverse string<br>
   <input type="submit">

  </form>
 </body>
</html>

<?php
 $s1=$_POST["t1"];
 $ch=$_POST["r1"];
 
function count($s1)
{
  $c=0;
 for($i=0;$i<strlen($s1);$i++)
 {
  if($s1[$i]=='a' ||$s1[$i]=='e' ||$s1[$i]=='i' ||$s1[$i]=='o' ||$s1[$i]=='u')
   $c=$c+1;
 }
 echo("<br> total vowel count=".$c);
}

function length($s1)
{
  $c=0;
  for($i=0;isset($s1[$i]);$i++)
  {
    $c++;
  }
 echo("<br> string length=".$c);
}
 switch($ch)
{
  case 1 :count($s1);
          break;
  case 2 :length($s1);
          break;
  case 3 :echo("<br>lowercase string=".strtolower($s1));
          echo("<br>title case string=".ucwords($s1));
          break;
  case 4 :$s=str_pad($s1,10,"*",STR_PAD_BOTH);
          echo("<br> padding of given string=".$s);
           break;
  case 5 :$s=trim($s1);
          echo("<br> remove whitespaces of string=".$s);
          break;
  case 6 :$s=strrev($s1);
          echo("<br>reverse string=".$s);
          break;
 default :echo("invalid choice....");
}
?>