<?php
$arr1=array();
$arr2=array(10,20,15);
$arr3=array(10,'hello','petr');
echo '<b>'.$arr3[1].'</b>'.'<br>';
$arr1=[10,20,30];
$arr4=['name'=>'Bobby','age'=>25];
 for($i=0;$i<10;$i++)
 {
     echo $arr2[$i].'<br>';
 }
// print_r(array_keys($arr4));
 foreach ($arr4 as $key=>$value){
     echo $key.'='.$value.'<br>';
 }
//
//inputOpen();
//  inputTag('text','login', 'form-control');
// inputButton();
// inputClose();

