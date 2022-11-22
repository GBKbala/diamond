<?php
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
$pid=$_REQUEST['id'];
$qr="Delete from ship where sno='$pid'";
echo$qr;
$res=mysqli_query($conn,$qr) or die(mysqli_error());
header("location:importer_display.php");
?>