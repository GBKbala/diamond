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
$qr="insert into in_pay (ipinvo,ipamount,ipshipname,ipshipinvoice,ipshipinvoice_date,ipstatus,ipremarks,ippay_mode,ippay_date)values('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9')";
if ($conn->query($qr)==True){
echo$qr;
header("location:in_pay_display.php");
}else{
echo"Error:" .$qr."<br>". $conn->error;
}

?>
