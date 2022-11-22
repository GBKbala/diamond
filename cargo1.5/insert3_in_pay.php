<?php
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
$p1=$_POST['ipinvo'];
$p2=$_POST['ipamount'];
$p3=$_POST['ipshipname'];
$p4=$_POST['ipshipinvoice'];
$p5=$_POST['ipinvoice_date'];
$p6=$_POST['ipstatus'];
$p7=$_POST['ipremark'];
$p8=$_POST['ippay_mode'];
$p9=$_POST['ippay_date'];
// $vdischarge=$_POST['discharge'];
// $vex1 = $_POST['ex_1'];
$qr="update in_pay set ipamount='$p2',ipshipname='$p3',ipshipinvoice='$p4',ipshipinvoice_date='$p5',ipstatus='$p6',ipremarks='$p7',ippay_mode='$p8',ippay_date='$p9' where ipinvo='$p1'";
if ($conn->query($qr)==True){
echo$qr;
header("location:in_pay_display.php");
}else{
echo"Error:" .$qr."<br>". $conn->error;
}

?>
