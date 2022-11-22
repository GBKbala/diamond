<?php
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
$vdate=$_POST['date'];
$vsupplier=$_POST['supplier'];
$vcargo=$_POST['cargo'];
$vpackage=$_POST['package'];
$vnetweight=$_POST['netweight'];
$vgsweight=$_POST['gsweight'];
$vsbno=$_POST['sbno'];
$vbcno=$_POST['bcno'];
$vvessel=$_POST['vessel'];
$vdischarge=$_POST['discharge'];
$vex1 = $_POST['ex_1'];
$qr="insert into ship2 (date,supplier,cargo,package,netweight,gsweight,sbno,bcno,vessel,discharge,blno)values('$vdate','$vsupplier','$vcargo','$vpackage','$vnetweight','$vgsweight','$vsbno','$vbcno','$vvessel','$vdischarge','$vex1')";
if ($conn->query($qr)==True){
// echo$qr;
header("location:outgoing_display.php");
}else{
echo"Error:" .$qr."<br>". $conn->error;
}

?>
