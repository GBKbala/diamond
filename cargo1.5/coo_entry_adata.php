<?php
include'dbconfig.php';
$conn = opencon();
// echo"db connected";
$vbno = $_GET['jcoo_ino'];
$vt1 = $_GET['jadmno'];
$vt2 = $_GET['jadinfo'];
$vt3 = $_GET['jadqty'];
$vt4 = $_GET['jadvalue'];
// echo$vt2;
for ($i=0; $i<count($vt2); $i++)
{
      $query="insert into tblcoo_details
      (cooino,comarks,codesc,coqty,covalue)values('$vbno','$vt1[$i]','$vt2[$i]','$vt3[$i]','$vt4[$i]')";
      // echo$query;
      $qrexe = $conn->query($query);


}
 header('Location: coo_display.php?jcoo_ino=$vbno');
// echo"working";
?>