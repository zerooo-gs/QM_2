<?php
  include 'element.php';
  $p=0;
  if(isset($_POST['i']))$p=$_POST['i'];
  if($p==1){
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $d3=$_POST['d3'];
    // print $d1.' ** '.$d2.' ** '.$d3;
    $s1=$edbh->prepare('SELECT * FROM call_record WHERE status=:d1 AND active=:d2 AND month=:d3 AND year=:d4 ORDER BY id DESC');
    $s1->execute(['d1'=>1,'d2'=>1,'d3'=>$d2,'d4'=>$d1]);
    $ot='
      <table class="table table-bordered table-striped table-hover js-basic-example dataTable exp1" id="exp1">
        <thead>
          <tr>
            <th>#</th>
            <th>Agent</th>
            <th>Agent ID</th>
            <th>Calling No.</th>
            <th>Weakness Fatal</th>
            <th>Description</th>
            <th>Call Recording</th>
            <th>Month</th>
            <th>Year</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>#</th>
            <th>Agent</th>
            <th>Agent ID</th>
            <th>Calling No.</th>
            <th>Weakness Fatal</th>
            <th>Description</th>
            <th>Call Recording</th>
            <th>Month</th>
            <th>Year</th>
          </tr>
        </tfoot>
        <tbody class="bx-11">
    ';
    while($r1=$s1->fetch()){
      $c=0;
      if($d1==(explode('-',$r1[5])[1])){}else{$c=1;}
      if($d2!=(explode('-',$r1[5])[0]))$c=1;
      if($d3!=0){if($d3!=$r1[4])$c=1;}
      if($c==1)continue;
      $a1=explode(',',$r1[6]);
      for ($i1=0; $i1 < count($a1); $i1++) {
        $dm='../../media/'.$a1[$i1];
        $ott1.='<audio controls controlsList="nodownload"><source src="'.$dm.'" type="audio/wav"></audio><br>';
      }
      $ot.='
        <tr>
          <td>'.$r1[0].'</td>
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
    $ot.='
      </tbody>
    </table>
    ';
  }
  
  print $ot.'///';
  $s1=$edbh=null;

?>