<!DOCTYPE html>
<html>
<body>
<table border="3">
<tr>

<td>NAME</td>
<td>MOBILE NO</td>
<td>EMAIL</td>
<td>ADDRESS</td>
<td>DISTRICT</td>
<td>STATE</td>
<td>COUNTRY</td>
<td>GST NO</td>
<td>REMARK</td>
<td>EDIT</td>
</tr>
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
$qr="Insert into ship (name,mobile,email,address,district,state,country,gst,remark)values('$vname','$vmobile','$vemail','$vaddress','$vdistrict','$vstate','$vcountry','$vgst','$vremark')";
if ($conn->query($qr)==True){
// echo"Record ok inserted";
header("location:importer_display.php");
}else{
echo"Error:" .$qr."<br>". $conn->error;
}
$qr=mysqli_query($conn,"select * from ship");
while($dt=mysqli_fetch_array($qr))
{
?>
<tr><td><?php echo $dt['name'];?></td>
<td><?php echo $dt['mobile'];?></td>
<td><?php echo $dt['email'];?></td>
<td><?php echo $dt['address'];?></td>
<td><?php echo $dt['district'];?></td>
<td><?php echo $dt['state'];?></td>
<td><?php echo $dt['country'];?></td>
<td><?php echo $dt['gst'];?></td>
<td><?php echo $dt['remark'];?></td>

   <td><a href=" ?id=<?php echo$dt['sno'];?>"><i class="fas fa-edit"></a></i></td>

</tr>
<?php
}
?>
</table>
</body>
</html>