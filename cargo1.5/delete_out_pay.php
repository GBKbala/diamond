<?php
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
$pid=$_REQUEST['id'];
$qr="Delete from out_pay where opinvo='$pid'";
$res=mysqli_query($conn,$qr) or die(mysqli_error());
header("location:out_pay_display.php");
?>