<?php
$a=array(10,20,30,40,50);

s_insert($a);
s_del($a);
//s_disp($a);
q_insert($a);
q_del($a);
//q_disp($a);

function s_insert($a)
{
  print_r($a);
  array_push($a,45);
 echo("<br> after push::");
  print_r($a);
}

function s_del($a)
{
 echo("<br><br>");
 print_r($a);
 $v=array_pop($a);
 echo("<br> poped value=$v");
 echo("<br> after pop::");
  print_r($a);
}


function q_insert($a)
{
  echo("<br><br>");
  print_r($a);
  array_unshift($a,89);
 echo("<br> after unshift::");
  print_r($a);
}

function q_del($a)
{
 echo("<br><br>");
 print_r($a);
 $v=array_shift($a);
 echo("<br> shift value=$v");
 echo("<br> after shift::");
  print_r($a);
}

 
?>