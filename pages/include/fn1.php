<?php
  include 'element.php';
  $id=$_POST['id'];
  $i=$_POST['i'];
  $ot1=0;
  if($i==1){
    $s1=$edbh->prepare('UPDATE call_record SET status=:d1 WHERE id=:d2 AND active=:d3');
    $ar1=['d1'=>0,'d2'=>$id,'d3'=>1];
    if($s1->execute($ar1)){
      $ot1=1;
    }
  }
  $s1=$edbh=null;
  print $ot1;

?>