<?php
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
$pid=$_REQUEST['id'];



$qr1="Delete from tblquote where qino='$pid'";
$res1=mysqli_query($conn,$qr1) or die(mysqli_error());

$qr2="Delete from tblquote_details1 where jaino='$pid'";
$res2=mysqli_query($conn,$qr2) or die(mysqli_error());

$qr3="Delete from tblquote_details2 where jasino='$pid'";
$res=mysqli_query($conn,$qr3) or die(mysqli_error());

// echo$qr1.",".$qr2.",".$qr3;


header("location:quote_display.php");
?>