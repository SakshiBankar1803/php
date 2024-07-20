<?php
$a=array("sophia"=>"31","jocab"=>"41","william"=>"39","ramesh"=>"40");
sort_by_value($a);
sort_by_key($a);
dec_val($a);
dec_key($a);

function sort_by_value($a)
{
  sort($a);
 echo("<br>ascending order sort by value::");
 print_r($a);
}
function sort_by_key($a)
{
  ksort($a);
 echo("<br>ascending order sort by key::");
 print_r($a);
}
function dec_val($a)
{
  arsort($a);
 echo("<br>descending order sort by value::");
 print_r($a);
}

function dec_key($a)
{
  krsort($a);
 echo("<br>descending order sort by key::");
 print_r($a);
}
?>