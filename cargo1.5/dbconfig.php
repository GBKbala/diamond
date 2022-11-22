<?php
function opencon()
 {
    $servername = "localhost"; //localhost
    $username = "root"; //usrname
    $password = ""; //password
    $db = "insert";
    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
 }
// function stonecgst($bno)
// {
// 	$qr="select * from tblsalpro where sbillno='$bno'";
// 	$conn = opencon();
// 	$eqr = $conn->query($qr);
// 	while($fqr=$eqr->fetch_assoc())
// 	{
// 		$ans = $fqr['sstone'];
// 		$rate= $fqr['srate'];
// 		$cgst=$ans*0.125*$rate;
// 	}
// 	return $cgst;
// }

// function stonesgst($bno)
// {
// 	$qr="select * from tblsalpro where sbillno='$bno'";
// 	$conn = opencon();
// 	$eqr = $conn->query($qr);
// 	while($fqr=$eqr->fetch_assoc())
// 	{
// 		$ans = $fqr['sstone'];
// 		$rate= $fqr['srate'];
// 		$cgst=$ans*0.125*$rate;
// 	}
// 	return $sgst;
// }
?>