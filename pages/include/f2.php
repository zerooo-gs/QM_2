<?php
  include 'element.php';
  $p=0;
  $d1=date("Y");
  $d2=date("F", strtotime('m'));
  if(isset($_GET['p']))$p=$_GET['p'];
  $s1=$edbh->prepare('SELECT * FROM call_record WHERE status=:d1 AND active=:d2 AND month=:d3 AND year=:d4 ORDER BY id DESC');
  $s1->execute(['d1'=>1,'d2'=>1,'d3'=>$d2,'d4'=>$d1]);
  while($r1=$s1->fetch()){
    $c=0;
    // print $d1.' - '.$d2;
    if($d1==(explode('-',$r1[5])[1])){}else{$c=1;}
    if($d2!=(explode('-',$r1[5])[0]))$c=1;
    if($c==1)continue;
    $a1=explode(',',$r1[6]);
    for ($i1=0; $i1 < count($a1); $i1++) {
      $dm='../../media/'.$a1[$i1];
      $ott1.='<audio controls controlsList="nodownload"><source src="'.$dm.'" type="audio/wav"></audio><br>';
    }
    $ot.='
      <tr>
        <td>'.$r1[11].'</td>
        <td>'.$r1[1].'</td>
        <td>'.$r1[2].'</td>
        <td>'.$r1[3].'</td>
        <td>'.$r1[4].'</td>
        <td>'.$r1[7].'</td>
        <td>'.$ott1.'</td>
        <td>'.explode('-',$r1[5])[0].'</td>
        <td>'.explode('-',$r1[5])[1].'</td>
      </tr>
    ';
    $ott1='';
  }

  $s1=$edbh=null;

?>