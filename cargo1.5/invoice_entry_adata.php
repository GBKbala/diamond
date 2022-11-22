<?php
include'dbconfig.php';
$conn = opencon();
// echo"db connected";
$vbno = $_GET['jbino'];
$vt1 = $_GET['jadmno'];
$vt2 = $_GET['janpack'];
$vt3 = $_GET['jadinfo'];
$vt4 = $_GET['jadqty'];
$vt5 = $_GET['jadrate'];
echo$vt2;
for ($i=0; $i<count($vt2); $i++)
{
      $query="insert into tbldetails
      (dino,dmno,dnpack,dinfo,dqty,drate)values('$vbno','$vt1[$i]','$vt2[$i]','$vt3[$i]','$vt4[$i]','$vt5[$i]')";
      echo$query;
      $qrexe = $conn->query($query);

    // $upqr = "select * from tblstock where tagno = '$vt2[$i]'";
    // echo$upqr;
    // $upqrexe = $conn->query($upqr);
    // while($feupqr = $upqrexe->fetch_assoc())
    // {
    //     if($vt1[$i]=='Gold'){
    //     $fup = $feupqr['netwt'];        
    //     $newqty = $fup - $vt6[$i];    
    //     $setqr = "update tblstock set netwt='$newqty' where tagno='$vt2[$i]'"; 
    //     }
    //     elseif($vt1[$i]=='Silver'){
    //     $fup = $feupqr['grwt'];   
    //     $newqty = $fup - $vt4[$i];       
    //     $setqr = "update tblstock set grwt='$newqty' where tagno='$vt2[$i]'";  
    //     }
    //     echo$setqr;
    // }

    // echo"New stock=".$newqty;
    // $setqr = "update tblstock set grwt='$newqty' where tagno='$vt2[$i]'";
    // echo$setqr;
    // $setqrexe = $conn->query($setqr);
}
// header('Location: sales_print.php?bno=$vbno');
// echo"working";
?>