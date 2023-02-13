<?php
  include 'element.php';
  $d1=$_POST['e1'];
  $d2=$_POST['e2'];
  $d3=$_POST['e3'];
  $d4=$_POST['e4'];
  $d5=$_POST['e51'].'-'.$_POST['e5'];
  $d6=$_FILES['e6'];
  $d7=$_POST['e7'];
  $d8=$user_id;
  $d9=1;
  $d10=1;
  $d10=1;
  $d11=date('d-m-Y');
  $d12=0;
  $a1=[];
  $total = count($_FILES['e6']['name']);
  for( $i=0 ; $i < $total ; $i++ ) {
    $tmpFilePath = $_FILES['e6']['tmp_name'][$i];
    if ($tmpFilePath != ""){
      $newFilePath = '../../media/' . $_FILES['e6']['name'][$i];
      $newFilePath = '../../media/' . $_FILES['e6']['name'][$i];
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
        array_push($a1,$_FILES['e6']['name'][$i]);
        $d12++;
      }
    }
  }
  $d6=implode(',',$a1);
  $s1=$edbh->prepare('INSERT INTO call_record (agent, agent_id, callnum, rtype, reason, files, descrip, user, status, active, date, count)
                      VALUES (:d1, :d2, :d3, :d4, :d5, :d6, :d7, :d8, :d9, :d10, :d11, :d12)');
  $ar1=['d1'=>$d1,'d2'=>$d2,'d3'=>$d3,'d4'=>$d4,'d5'=>$d5,'d6'=>$d6,'d7'=>$d7,'d8'=>$d8,'d9'=>$d9,'d10'=>$d10,'d11'=>$d11,'d12'=>$d12];
  if($s1->execute($ar1)){
    $ot1=1;
  }
  $s1=$edbh=null;
  print $ot1;

?>