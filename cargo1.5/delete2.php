<?php
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
$pid=$_REQUEST['id'];
$qr="Delete from ship2 where sno='$pid'";
$res=mysqli_query($conn,$qr) or die(mysqli_error());
header("location:outgoing_display.php");
?>