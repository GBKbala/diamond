<?php
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
$p1=$_POST['opinvo'];
$p2=$_POST['opamount'];
$p3=$_POST['opshipname'];
$p4=$_POST['opshipinvoice'];
$p5=$_POST['opshipdate'];
$p6=$_POST['opstatus'];
$p7=$_POST['opremark'];
$p8=$_POST['oppay_mode'];
$p9=$_POST['oppay_date'];
$p10 =$_POST['opto'];
// echo"working";
$qr="update out_pay  set opamount='$p2',opshipname='$p3',opshipinvoice='$p4',opshipdate='$p5',opstatus='$p6',opremarks='$p7',oppay_mode='$p8',oppay_date='$p9',opto='$p10' where opinvo='$p1'";

// echo$qr;
if ($conn->query($qr)==True){
//echo$qr;
header("location:out_pay_display.php");
}else{
echo"Error:" .$qr."<br>". $conn->error;
}

?>
