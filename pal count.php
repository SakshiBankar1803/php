<html>
 <body>
  <form method="post" action="#">
   enter string1::
  <input type="text" name="t1"><br>
  <input type="radio" name="r1" value="1">count total vowels()<br>
  <input type="radio" name="r1" value="2">check palindrome<br>
  <input type="submit">
  </form>
 </body>
</html>

<?php
$s1=$_POST["t1"];
$ch=$_POST["r1"];
 switch($ch)
{
  case 1 : count_vol($s1);
           break;
  case 2 : pal($s1);
           break;
 default :echo("invalid choice");
  
}

function count_vol($s1)
{
  $c=0;$c1=0;$c2=0;$c3=0;$c4=0;
  for($i=0;$i<strlen($s1);$i++)
  {
    if($s1[$i]=='a' ||$s1[$i]=='A')
      $c++;
    if($s1[$i]=='e' ||$s1[$i]=='E')
      $c1++;
    if($s1[$i]=='i' ||$s1[$i]=='I')
      $c2++;
    if($s1[$i]=='o' ||$s1[$i]=='O')
      $c3++;
    if($s1[$i]=='u' ||$s1[$i]=='U')
      $c4++;
  }
  echo("<br> total a count=".$c);
  echo("<br> total e count=".$c1);
  echo("<br> total i count=".$c2);
  echo("<br> total o count=".$c3);
  echo("<br> total u count=".$c4);
}

 
function pal($s1)
{
 $f=0;
 for($i=0,$j=strlen($s1)-1;$i<strlen($s1);$i++,$j--)
 {
   if($s1[$i]!=$s1[$j])
   {
     $f=1;
     break;
   }
 }
 if($f==0)
  echo("<br> palindrome string");
 else
  echo("<br> not palindrome string");
}

?>