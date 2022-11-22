<?php
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);

$vname=$_POST['name'];
$vmobile=$_POST['mobile'];
$vemail=$_POST['email'];
$vaddress=$_POST['address'];
$vdistrict=$_POST['district'];
$vstate=$_POST['state'];
$vcountry=$_POST['country'];
$vgst=$_POST['gst'];
$vremark=$_POST['remark'];
$qr="update ship set name='$vname',mobile='$vmobile',email='$vemail' ,address='$vaddress', district='$vdistrict',country='$vcountry',gst='$vgst',remark='$vremark' where sno='$vpid'";
if ($conn->query($qr)==True) {

header("location:edit.php");
  }else

 {
  echo "Error:" .$qr. "<br>".$conn->error;
  }
?>