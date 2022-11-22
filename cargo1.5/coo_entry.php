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

<div class="alert alert-danger" role="alert"><center>
 Please fill in the information below.The field labels marked with* are required input fields.
</center>
</div>
<div class="container overflow-hidden">

<div class="row">
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
<?php
$qr2=mysqli_query($conn,"select count(cooino)as cn from tblcoo where cooino!=''");
while($dt2=mysqli_fetch_array($qr2))
{
  ?>
    <input type="hidden" id="coo_ino" value="<?php echo$dt2['cn']+1; } ?>" class="form-control">

  </div>
</div>
<div class="row">
   <div class="col">
    Other Remarks:
    <textarea id="otremarks" class="form-control" > </textarea>
  </div> 
<!--   <div class="col">
    Invoice No :
    <input type="text" id="bino" class="form-control">
  </div> -->
   <div class="col">
    Notify :

      <div class="form-select-list">
      <select class="form-control custom-select-value" name="account" id="notify">
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

</div>

<br>

<div class="alert alert-dark" role="alert">
    <div class="alert alert-danger" role="alert">
    <center>Please Select these before adding any product.</center>
    </div>
<div class="row">
  <div class="col">
    PRE-CARRIAGE BY:
    <input type="text" id="carriage" class="form-control">
  </div>
  <div class="col">
    PLACE OF RECEIPT BY:
    <input type="text"  id="recipt" class="form-control">
  </div>
  <div class="col">
    Vessel No:
    <input type="text"  id="vessno" class="form-control">
  </div>
  <div class="col">
    Flight No:
    <input type="text"  id="flno" class="form-control">
  </div>  
</div><br>
<div class="row">
  <div class="col">
    Port of Loading
    <input type="text" id="load" class="form-control">
  </div>
  <div class="col">
    Port of Discharge:
    <input type="text"  id="discharge" class="form-control">
  </div>
  <div class="col">
    Final Destination:
    <input type="text"  id="destiny" class="form-control">
  </div>
</div>
</div>
 <div class="alert alert-dark" role="alert">
  <div class="container overflow-hidden">
  <div class="row">
  <div class="col">
    Marks & No
    <textarea id="markno" class="form-control" > </textarea>
  </div>
<!--   <div class="col">
    No of Packages
   <input type="text" id="pack" class="form-control">
  </div>-->  
  <div class="col">
    Description of Goods
    <textarea id="desc" class="form-control" > </textarea>
  </div>
  <div class="col">
     Quantity
    <textarea id="quantity" class="form-control" > </textarea>
</div>
<div class="col">
     Value
    <textarea id="value" class="form-control" > </textarea>
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
      <!-- <th scope="col">S.NO</th> -->
      <th scope="col">M&No</th>
      <!-- <th scope="col"> No & Kind of Packages</th> -->
      <th scope="col">Description of Goods</th>
      <th scope="col"> Quantity</th>
      <th scope="col">Value</th>
       <!-- <th scope="col">Total</th> -->
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
      // var package = $("#pack").val();
      var jmarkno = $("#markno").val();
      var desc = $("#desc").val();
      var quantity = $("#quantity").val();
      var value = $("#value").val();
      // var total = $("#total").val();

      //alert(package);
      //alert(desc);
      // cnt=cnt+1
      var x ="<tr id='tdfirst'><td class='ct1'>"+jmarkno+"</td><td class='ct2'>"+desc+"</td><td class='ct3'>"+quantity+"</td><td class='ct4'>"+value+"</td><td><span class='material-symbols-outlined' style='font-size:2em;'>delete</span></td></tr>";

      $(".table").append(x);
      $("#markno").val("");
      // $("#pack").val("");
      $("#desc").val("");
      $("#quantity").val("");
      $("#value").val("");
      // $("#total").val("");
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

  let jcoo_ino = $("#coo_ino").val();
  let jadmno= [];
  let jadinfo = [];
  let jadqty = [];
  let jadvalue = [];

   $('.ct1').each(function(){
    jadmno.push($(this).text());
  });
   // alert(jadmno);
 $('.ct2').each(function(){
    jadinfo.push($(this).text());
  });
 $('.ct3').each(function(){
  jadqty.push($(this).text());
 });
 $('.ct4').each(function(){
  jadvalue.push($(this).text());
  // alert(jadvalue);
 });


    $.ajax({
      url: "coo_entry_adata.php",
      method: "GET",
      data: {jcoo_ino:jcoo_ino, jadmno:jadmno, jadinfo:jadinfo, jadqty:jadqty, jadvalue:jadvalue},
      success:function(response){
          //alert("anbe sivam, coo=>" + jadmno);
          //window.location.href='invoice_display.php';
        
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

<script type="text/javascript">
  $(document).ready(function(){
    $("#btnsave").click(function(){
      // alert("working");
      let co_exporter = $("#bexporter").val();
      let co_consignee = $("#bconsignee").val();
      let co_otremarks = $("#otremarks").val();
      let co_notify = $("#notify").val();
      let co_precare = $("#carriage").val();
      let co_recipt = $("#recipt").val();
      let co_vessno = $("#vessno").val();
      let co_flno = $("#flno").val();
      let co_pol = $("#load").val();
      let co_pod = $("#discharge").val();
      let co_finaldes = $("#destiny").val();
      //alert("data collected");
    $.ajax({
      url :"co_entry_sdata.php",
      method :"GET",
      data :{co_exporter:co_exporter, co_consignee:co_consignee, co_otremarks:co_otremarks, co_notify:co_notify, co_precare:co_precare, co_recipt:co_recipt, co_vessno:co_vessno, co_flno:co_flno, co_pol:co_pol, co_pod:co_pod, co_finaldes:co_finaldes},
      success :function(response){
        //alert("ajax_co_entry");
      }

    });
  });
});
</script>