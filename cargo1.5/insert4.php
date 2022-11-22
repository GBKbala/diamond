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
$qr="insert into out_pay (opinvo,opamount,opshipname,opshipinvoice,opshipdate,opstatus,opremarks,oppay_mode,oppay_date,opto)values('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10')";
//echo$qr;
if ($conn->query($qr)==True){
//echo$qr;
header("location:out_pay_display.php");
}else{
echo"Error:" .$qr."<br>". $conn->error;
}

?>
