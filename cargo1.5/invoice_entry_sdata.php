<?php
include'dbconfig.php';
$conn = opencon();
echo"db connected";
$vt1 = $_GET["jbdate"];
$vt2 = $_GET["jbino"];
$vt3 = $_GET['jbexporter'];
$vt4 = $_GET['jborigin'];
$vt5 = $_GET['jbdesign'];
$vt6 = $_GET['jbfrate'];
$vt7 = $_GET['jbinsure'];
$vt8= $_GET['jbfob'];
$vt9 = $_GET['jbconsignee'];
$vt10= $_GET['jbvessno'];
$vt11= $_GET['jbflno'];

$ex1= $_GET['jex1'];
$ex2= $_GET['jex2'];
$ex3= $_GET['jex3'];
$ex4= $_GET['jex4'];
$ex5= $_GET['jex5'];
$ex6= $_GET['jex6'];
$ex7= $_GET['jex7'];
$ex8= $_GET['jex8'];
$pt1=$_GET['t1'];
$pt2=$_GET['t2'];
$pt3=$_GET['t3'];
$pt4=$_GET['t4'];

echo$vt8;
// $vpro = $_GET['jprofit'];
$query="insert into tblbill(bdate,bino,bexporter,borigin,bdesign,bfrate,binsure,bfob,bconsignee,bvessno,bflno,pay_term,con_no,arn,ext_date,iec_no,pan_no,gst_no,inv_title,btotal_bag,bslno_bag,bnet_wt,bgross_wt)values('$vt1','$vt2','$vt3','$vt4','$vt5','$vt6','$vt7','$vt8','$vt9','$vt10','$vt11','$ex1','$ex2','$ex3','$ex4','$ex5','$ex6','$ex7','$ex8','$pt1','$pt2','$pt3','$pt4')";
echo$query;
$qrexe = $conn->query($query);

?>