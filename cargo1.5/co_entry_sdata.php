<?php
include'dbconfig.php';
$conn = opencon();
echo"db connected";
$vt1 = $_GET["co_exporter"];
$vt2 = $_GET["co_consignee"];
$vt3 = $_GET['co_otremarks'];
$vt4 = $_GET['co_notify'];
$vt5 = $_GET['co_precare'];
$vt6 = $_GET['co_recipt'];
$vt7 = $_GET['co_vessno'];
$vt8= $_GET['co_flno'];
$vt9 = $_GET['co_pol'];
$vt10= $_GET['co_pod'];
$vt11= $_GET['co_finaldes'];

 echo$vt11;
// $vpro = $_GET['jprofit'];
$query="insert into tblcoo(coexport,coconsigne,coremarks,conotify,coprecare,coreceipt,covsno,coflno,copol,copod,cofinal)values('$vt1','$vt2','$vt3','$vt4','$vt5','$vt6','$vt7','$vt8','$vt9','$vt10','$vt11')";
echo$query;
$qrexe = $conn->query($query);

?>