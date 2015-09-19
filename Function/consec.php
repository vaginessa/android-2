<?php
if(isset($_REQUEST)){
  $userd = "root";
  $userp = "123";
  $datab = "android";
  $local = "localhost";

  $conna = mysql_connect($local,$userd,$userp)or die ("Error Cant connect");
  if($conna !=0){
    $selo = mysql_select_db($datab,$conna)or die ("Error Cant connect"); 
  }
}
else{die();}
?>