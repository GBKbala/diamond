
<?php
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
$vid=$_POST['idno'];
$vname=$_POST['name'];
$vmobile=$_POST['mobile'];
$vemail=$_POST['email'];
$vaddress=$_POST['address'];
$vdistrict=$_POST['district'];
$vstate=$_POST['state'];
$vcountry=$_POST['country'];
// $vgst=$_POST['gst'];
$vremark=$_POST['remark'];
$qr="update tblnotify set name='$vname', mobile='$vmobile', email='$vemail', address='$vaddress', district='$vdistrict',state='$vstate', country='$vcountry',remark='$vremark' where sno='$vid'";
if ($conn->query($qr)==True){
// echo"Record ok inserted";
header("location:buyer_display.php");
}else{
echo"Error:" .$qr."<br>". $conn->error;
}
?>