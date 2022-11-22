
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
$qr="Insert into ship1 (name,mobile,email,address,district,state,country,gst,remark)values('$vname','$vmobile','$vemail','$vaddress','$vdistrict','$vstate','$vcountry','$vgst','$vremark')";
if ($conn->query($qr)==True){
// echo"Record ok inserted";
header("location:exporter_display.php");
}else{
echo"Error:" .$qr."<br>". $conn->error;
}

?>