<!doctype html>
<html class="no-js" lang="en">

<head>
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS
        ============================================ -->
</head>

<body>
    <?php
    include("nav.php");
    $server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
    ?>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Invoice <span class="table-project-n">Data</span> Table</h1>
                                                                        
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
                                            <option value="">Export Basic</option>
                                            <option value="all">Export All</option>
                                            <option value="selected">Export Selected</option>
                                        </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                               <th data-field="name" data-editable="true">Date</th>
                                                <th data-field="email" data-editable="true">Bill No</th>
                                <!--                 <th data-field="phone" data-editable="true">Exporter</th> -->
                                                <!-- <th data-field="task" data-editable="true">Consignee</th> -->
                                                <th data-field="date" data-editable="true">Party Name</th>
                                                <th data-field="helo" data-editable="false">Bill Amt</th>
                                                <th data-field="p2" data-editable="false">CGST</th>
                                                <th data-field="p3" data-editable="false">SGST</th>
                                             <th data-field="p4" data-editable="false">Total Tax</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
$i="select * from tbltaxable_temp where temp_bno!=''";
$ir=mysqli_query($conn,$i);
while($it=mysqli_fetch_array($ir))
{
    $va = $it['temp_bno'];
    // echo$va;

$qr=mysqli_query($conn,"select * from tbltaxbill where tbno='$va'");
while($dt=mysqli_fetch_array($qr))
{
    $tbno = $dt['tbno'];
    $tdt = $dt['tbdate'];
?>
                                            <tr>
<td><?php echo date("d/m/Y", strtotime($tdt)); ?></td>

<td><?php echo $dt['tbno'];?></td>

<?php
$qr0=mysqli_query($conn,"select tpart,tamt from tbltaxdetails where tbno='$va'");
// echo "select tpart,tamt from tbltaxdetails where tbno='$va'";
while($dt0=mysqli_fetch_array($qr0)){
    if($dt0['tpart']=="CGST 9%"){
        $cgstamt=$dt0['tamt'];
    }
    else if($dt0['tpart']=="SGST 9%"){
        $sgstamt=$dt0['tamt'];
    }
}

$qr2=mysqli_query($conn,"select sum(tamt)as tot from tbltaxdetails where tbno='$tbno'");
while($dt2=mysqli_fetch_array($qr2))
{
    ?>
<td><?php echo $dt['tbto'];   ?></td>
<td><?php echo $dt2['tot'];   ?></td>
<td><?php echo $cgstamt ; ?></td>
<td><?php echo $sgstamt ; ?></td>
<td><?php echo $sgstamt+$cgstamt ; }?></td>

</tr>
<?php
}

}

?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
</body>
<?php
include("fotter.php");
?>
</html>