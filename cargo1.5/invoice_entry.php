<!doctype html>
<html class="no-js" lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
<body>
<?php
// include("nav.php");
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
    include("nav.php");
    ?>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
  <body>
    <center>
<div class="alert alert-dark" role="alert">
    <div class="form-select-list">
      <select id="inv_title" class="form-control custom-select-value" name="account">
        <option>- Select Invoice Title -</option>
        <option value="PROFOMA INVOICE">PROFOMA INVOICE </option>
        <option value="PACKING LIST">PACKING LIST</option>
        <!-- <option>Select 4</option> -->
      </select>
    </div>
</div>
</center>
<div class="alert alert-danger" role="alert"><center>
 Please fill in the information below.The field labels marked with* are required input fields.
</center>
</div>
<div class="container overflow-hidden">
<div class="row">
  <div class="col">
    DATE :
    <input type="date"   value="<?php echo date('Y-m-d'); ?>" id="bdate" class="form-control">
  </div>
  <div class="col">
    Invoice No :
    <input type="text" id="bino" class="form-control">
  </div>
   <div class="col">
    Exporter :
      <div class="form-select-list">
      <select class="form-control custom-select-value" name="account" id="bexporter">
        <option>- Select one -</option>
<?php
$qr2=mysqli_query($conn,"select distinct(name) from ship1 where name!=''");
while($dt2=mysqli_fetch_array($qr2))
{
  ?>

        <option value="<?php echo$dt2['name']; ?>"><?php echo $dt2['name']; } ?></option>
        <!-- <option>Select 3</option> -->
        <!-- <option>Select 4</option> -->
      </select><a href="exporter_entry.php">+ AddNew</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    VESSEL/FLIGHT NO:
    <input type="text" id="bflightno" class="form-control">
  </div>
<!--   <div class="col">
     No : -->
    <input type="hidden" id="bvessno" class="form-control">
  <!-- </div> -->
   <div class="col">
    Consignee :

     <div class="form-select-list">
      <select class="form-control custom-select-value" name="account" id="bconsignee">
        <option>- Select one -</option>
<?php
$qr1=mysqli_query($conn,"select distinct(name) from ship where name!=''");
while($dt1=mysqli_fetch_array($qr1))
{        
  ?>
        <option value="<?php echo$dt1['name']; ?>"><?php echo$dt1['name']; } ?></option>
        <!-- <option>Select 3</option> -->
        <!-- <option>Select 4</option> -->
      </select><a href="importer_entry.php">+ AddNew</a>
    </div>

    <!-- <input type="text" id="bconsignee" class="form-control"> -->
  </div>
</div>

</div>
<br>
<div class="alert alert-dark" role="alert">
    <div class="alert alert-danger" role="alert">
    <center>Please Select these before adding any product.</center>
    </div>
<div class="row">
  <div class="col">
    PRE-CARRIAGE BY:
    <input type="text" id="borigin" class="form-control">
  </div>
  <div class="col">
    PLACE OF RECEIPT BY:
    <input type="text"  id="bdesign" class="form-control">
  </div>
   <div class="col">
    Payment Term's:
    <textarea id="ex_payterm" class="form-control" > </textarea>
  </div> 
</div>
</div>
 <div class="alert alert-dark" role="alert">
  <div class="container overflow-hidden">
  <div class="row">
  <div class="col">
    Marks & No
   <input type="text" id="markno" class="form-control">
  </div>
  <div class="col">
    No of Packages
   <input type="text" id="pack" class="form-control">
  </div>
  <div class="col">
    Description of Goods
    <input type="text" id="desc" class="form-control">
  </div>
  <div class="col">
     Quantity
    <input type="text" id="quantity" class="form-control">
</div>
<div class="col">
     Rate
    <input type="text" id="rate" class="form-control">
</div>
<div class="col">
       Total
    <input type="text" id="total" class="form-control">
</div>
<div class="col">
  <br>
   <svg xmlns="http://www.w3.org/2000/svg" id="btnnext" width="36" height="42" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
</div>
</div>
</div>
</div>
<br>
<br>
<div class="alert alert-primary" role="alert">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">M&No</th>
      <th scope="col"> No & Kind of Packages</th>
      <th scope="col">Description of Goods</th>
      <th scope="col"> Quantity</th>
      <th scope="col">Rate</th>
       <th scope="col">Total</th>
       <!-- <th scope="col">EDIT</th> -->
       <th scope="col">DELETE</th>

    </tr>
  </thead>
  <tbody>
<!--     <tr>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td> -->
      <!-- <td><span class="material-symbols-outlined" style="font-size: 2em;"> edit_note </span></td> -->
      <!-- <td><span class="material-symbols-outlined" style="font-size: 2em;"> delete </span></td> -->
    <!-- </tr> -->
<!--     <tr>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td><span class="material-symbols-outlined" style="font-size: 2em;"> edit_note </span></td>
      <td><span class="material-symbols-outlined" style="font-size: 2em;"> delete </span></td>
    </tr> -->
  </tbody>
</table>
</div>
<div class="alert alert-dark" role="alert">
<div class="container overflow-hidden">
  <div class="row">
  <div class="col">
    Freight Rate
    <input type="text" id="bfrate" class="form-control">
  </div>
  <div class="col">
    Insurance
    <input type="text" id="binsure" class="form-control">
  </div>
   <div class="col">
    FOB Value
    <input type="text" id="bfob" class="form-control">
  </div> 

<!--    <div class="col">
    <br>
  <center><input class="btn btn-primary" type="submit" id="btnsave" value="submit">
<input class="btn btn-primary" type="reset" value="Reset"></center>
</div> -->

</div>
</div>
</div>




<!-- <div class="alert alert-danger" role="alert">
<div class="container overflow-hidden">
  <div class="row">
  <div class="col">
    Each Bag Net WT.(KGS)
    <input type="text" class="form-control">
  </div>
  <div class="col">
    Each Bag Gross WT.(KGS)
    <input type="text" class="form-control">
  </div>
   <div class="col">
    Total Bag Gross WT.(MTS)
    <input type="text" class="form-control">
  </div>
   <div class="col">
    Total Bag Net WT.(MTS)
    <input type="text" class="form-control">
  </div>
</div>
</div> -->

<div class="alert alert-dark" role="alert">
<div class="container overflow-hidden">
  <div class="row">
  <div class="col">
  Total.Bags
    <input type="text" id="totbags" class="form-control">
  </div>
  <div class="col">
  Sl.No.Bags
    <input type="text" id="slnobag" class="form-control">
  </div>
   <div class="col">
   NET.WT
    <input type="text" id="netwt" class="form-control">
  </div> 
   <div class="col">
  GROSS.WT
    <input type="text" id="grwt" class="form-control">
  </div>   

<!--    <div class="col">
    <br>
  <center><input class="btn btn-primary" type="submit" id="btnsave" value="submit">
<input class="btn btn-primary" type="reset" value="Reset"></center>
</div> -->

</div>
</div>
</div>



<div class="alert alert-dark" role="alert">
  <div class="container overflow-hidden">
  <div class="row">
  <div class="col">
    CONTAINER NO:
   <input type="text" id="ex_con_no" class="form-control">
  </div>
  <div class="col">
    ARN:
   <input type="text" id="ex_arn" class="form-control">
  </div>
  <div class="col">
    Date:
    <input type="date" value="<?php echo date('Y-m-d'); ?>"  id="ex_dte" class="form-control">
  </div>
  <div class="col">
     IEC No:
    <input type="text" id="ex_iec" class="form-control">
</div>
<div class="col">
     PAN:
    <input type="text" id="ex_pan" class="form-control">
</div>
<div class="col">
       GST NO:
    <input type="text" id="ex_gst" class="form-control">
</div>
<div class="col">
     <div class="col">
    <br>
  <center><input class="btn btn-primary" type="submit" id="btnsave" value="submit">
<input class="btn btn-primary" type="reset" value="Reset"></center>
</div>
</div>
</div>
</div>
</div>

</div>
</body>
<?php
include("fotter.php");
?>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    var cnt=0;
    $("#btnnext").click(function(){
          //alert("hello");
      var package = $("#pack").val();
      var jmarkno = $("#markno").val();
      var desc = $("#desc").val();
      var quantity = $("#quantity").val();
      var rate = $("#rate").val();
      var total = $("#total").val();

      //alert(package);
      //alert(desc);
      cnt=cnt+1
      var x ="<tr id='tdfirst'><td>"+cnt+"</td><td class='ct1'>"+jmarkno+"</td><td class='ct2'>"+package+"</td><td class='ct3'>"+desc+"</td><td class='ct4'>"+quantity+"</td><td class='ct5'>"+rate+"</td><td>"+total+"</td><td><span class='material-symbols-outlined' style='font-size:2em;'>delete</span></td></tr>";

      $(".table").append(x);
      $("#markno").val("");
      $("#pack").val("");
      $("#desc").val("");
      $("#quantity").val("");
      $("#rate").val("");
      $("#total").val("");
      $("#markno").focus();                        

    });




  });
</script>


<script>
$("table").on('click', '#tdfirst', function() {
    var currentRow = $(this).closest("tr");
    // alert("working");
    if (confirm('Are you sure ?')) {
        $(this).remove();
    }

});
</script>

<script>
$(document).ready(function(){
 $("#btnsave").click(function(){   
  let jbdate = $("#bdate").val();
  let jbino = $("#bino").val();
  let jbexporter = $("#bexporter").val();
  let jborigin = $("#borigin").val();
  let jbdesign = $("#bdesign").val();
  let jbfrate = $("#bfrate").val();
  let jbinsure = $("#binsure").val();
  let jbfob = $("#bfob").val();
  let jbconsignee = $("#bconsignee").val();
  let jbvessno = $("#bvessno").val();
  let jbflno = $("#bflightno").val();
  let jex1 = $("#ex_payterm").val();
  let jex2 = $("#ex_con_no").val();
  let jex3 = $("#ex_arn").val();
  let jex4 = $("#ex_dte").val();
  let jex5 = $("#ex_iec").val();
  let jex6 = $("#ex_pan").val();
  let jex7 = $("#ex_gst").val();
  let jex8 = $("#inv_title").val();  
  let t1 = $("#totbags").val();
  let t2 = $("#slnobag").val();
  let t3 = $("#netwt").val();
  let t4= $("#grwt").val();


  // alert(jex8+"value 2"+jex7);

    //alert("working");


  // let jadino = [];
  let jadmno= [];
  let janpack = [];
  let jadinfo = [];
  let jadqty = [];
  let jadrate = [];

   $('.ct1').each(function(){
    jadmno.push($(this).text());
  });
   // alert(jadmno);
 $('.ct2').each(function(){
    janpack.push($(this).text());
  });
 $('.ct3').each(function(){
  jadinfo.push($(this).text());
 });
 $('.ct4').each(function(){
  jadqty.push($(this).text());
 });
 $('.ct5').each(function(){
  jadrate.push($(this).text())
 });

    $.ajax({
      url: "invoice_entry_adata.php",
      method: "GET",
      data: {jbino:jbino, jadmno:jadmno, janpack:janpack, jadinfo:jadinfo, jadqty:jadqty, jadrate:jadrate},
      success:function(response){
          // alert("anbe sivam=>" + jbino);
          window.location.href='invoice_display.php';
        
      }
  });

     $.ajax({
                url: "invoice_entry_sdata.php",
                method: "GET",
                data: {jbdate:jbdate, jbino:jbino, jbexporter:jbexporter, jborigin:jborigin, jbdesign:jbdesign, jbfrate:jbfrate, jbinsure:jbinsure, jbfob:jbfob, jbconsignee:jbconsignee, jbvessno:jbvessno, jbflno:jbflno, jex1:jex1, jex2:jex2, jex3:jex3, jex4:jex4, jex5:jex5, jex6:jex6, jex7:jex7, jex8:jex8, t1:t1, t2:t2, t3:t3, t4:t4},

                success:function(data){
                    // alert("2ndajax");
                   
                }
                });

 });

});
</script>

<script type="text/javascript">
  $(document).ready(function(){

    $("#rate").keyup(function(){
    // var ch = $("#total").val();
    // if(ch==""){
    //         $("#total").val('0');
    // }
      var qty = $("#quantity").val();
      var rate = $("#rate").val();
      var ans = parseInt(qty)*parseInt(rate);
      $("#total").val(ans);
    });
  });
</script>