<!doctype html>
<html class="no-js" lang="">

<head>
</head>

<body>
    <?php
    include("nav.php");
    ?>

        <!-- Advanced Form Start -->
        <div class="advanced-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                        <div class="sparkline8-list res-mg-b-30 nck-ds nk-ds-n-pro">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Input Knob Dial</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="75" class="dial" data-fgcolor="#006DF0" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="25" class="dial" data-fgcolor="#006DF0" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="50" class="dial" data-fgcolor="#006DF0" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="75" class="dial" data-fgcolor="#933EC5" data-width="85" data-height="85" data-cursor="true" data-thickness=".3/">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="25" class="dial" data-fgcolor="#933EC5" data-width="85" data-height="85" data-step="1000" data-min="-15000" data-max="15000" data-displayprevious="true/">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="60" class="dial" data-fgcolor="#933EC5" data-width="85" data-height="85" data-angleoffset="-125" data-anglearc="250">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single">
                                                <input type="text" value="40" class="dial" data-fgcolor="#D80027" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single">
                                                <input type="text" value="77" class="dial" data-fgcolor="#D80027" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single">
                                                <input type="text" value="44" class="dial" data-fgcolor="#D80027" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline9-list nck-ds nk-ds-n-pro">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>ion Range Slider</h1>
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="rangle-slider-single mg-b-20">
                                                <div id="ionrange_1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="rangle-slider-single mg-b-20">
                                                <div id="ionrange_2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="rangle-slider-single mg-b-20">
                                                <div id="ionrange_3"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="rangle-slider-single">
                                                <div id="ionrange_4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="insert_update_data.php" method="POST">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list mt-b-30">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>IMPORTER</h1>
                                </div>
                            </div>
<?php
// include("nav.php");
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn=new mysqli($server,$username,$password,$dbname);
$id=$_GET['id'];
$qr=mysqli_query($conn,"select * from ship where sno=$id");
while($dt=mysqli_fetch_array($qr))
{

?>                            <div class="sparkline12-graph">
                                <div class="input-knob-dial-wrap">
                                    <input type="hidden" value="<?php echo$id; ?>" name="idno">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text"  id="txtfocus" name="name"class="form-control" data-mask="999-99-999-9999-9" value="<?php echo$dt['name'];  ?>">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Mobile Number</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text"name="mobile" class="form-control" data-mask="999 99 999 9999 9" value="<?php echo$dt['mobile'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" name="email" class="form-control" data-mask="999/99/999/9999/9"  value="<?php echo$dt['email'];?>">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Address</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" name="address"class="form-control" data-mask="999.999.999.9999"  value="<?php echo$dt['address'];?>">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>District</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" name="district"class="form-control" data-mask="99-9999999"  value="<?php echo$dt['district'];?>">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>State</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" name="state" class="form-control" data-mask="(999) 999-9999"  value="<?php echo$dt['state'];?>">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Country</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" name="country"class="form-control" data-mask="$ 999,999,999.99"  value="<?php echo$dt['country'];?>">
                                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>GST No</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" name="gst"class="form-control" data-mask="99/99/9999"  value="<?php echo$dt['gst'];?>">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Remark</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner">
                                                <input type="text"name="remark"  value="<?php echo$dt['remarks']; } ?>" class="form-control" data-mask="9999" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline13-list mt-b-30 nk-ds-n-pro">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Range Slider</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="themesaller-forms mg-b-20">
                                                <div class="slider-wrapper purple-slider">
                                                    <div id="slider"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="themesaller-forms mg-b-20">
                                                <div class="slider-wrapper purple-slider">
                                                    <div id="slider1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="themesaller-forms mg-b-20">
                                                <div class="spacer-b16a">
                                                    <label for="amount">Maximum price:</label>
                                                    <input type="text" id="amount" class="slider-input">
                                                </div>
                                                <div class="slider-wrapper yellow-slider">
                                                    <div id="slider2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="themesaller-forms mg-b-20">
                                                <div class="spacer-b16a">
                                                    <label for="bedrooms">Number of bedrooms:</label>
                                                    <input type="text" id="bedrooms" class="slider-input">
                                                </div>
                                                <div class="slider-wrapper blue-slider">
                                                    <div id="slider3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="themesaller-forms mg-b-20">
                                                <div class="spacer-b16a">
                                                    <label for="budget">Project Budget:</label>
                                                    <input type="text" id="budget" class="slider-input">
                                                </div>
                                                <div class="slider-wrapper purple-slider">
                                                    <div id="slider8"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="themesaller-forms mg-b-20">
                                                <div class="spacer-b16a">
                                                    <label for="amounts">Price range:</label>
                                                    <input type="text" id="amounts" class="slider-input">
                                                </div>
                                                <div class="slider-wrapper">
                                                    <div id="slider-range"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="themesaller-forms mg-b-20 mg-t-50">
                                                <div class="slider-wrapper green-slider">
                                                    <div id="slider10"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="themesaller-forms mg-b-20">
                                                <div id="eq" class="slider-group blue-slider">
                                                    <div class="sliderv-wrapper"><span>77</span>
                                                    </div>
                                                    <div class="sliderv-wrapper"><span>55</span>
                                                    </div>
                                                    <div class="sliderv-wrapper"><span>40</span>
                                                    </div>
                                                    <div class="sliderv-wrapper"><span>55</span>
                                                    </div>
                                                    <div class="sliderv-wrapper"><span>77</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="themesaller-forms mg-b-20">
                                                <div id="eq2" class="slider-group purple-slider">
                                                    <div class="sliderv-wrapper"><span>77</span>
                                                    </div>
                                                    <div class="sliderv-wrapper"><span>55</span>
                                                    </div>
                                                    <div class="sliderv-wrapper"><span>40</span>
                                                    </div>
                                                    <div class="sliderv-wrapper"><span>55</span>
                                                    </div>
                                                    <div class="sliderv-wrapper"><span>77</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row dps-tb-ntn">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="themesaller-forms">
                                                <div class="spacer-b16a">
                                                    <label for="sales">Vertical Range:</label>
                                                    <input type="text" id="sales" class="slider-input">
                                                </div>
                                                <div class="sliderv-wrapper green-slider green-left-pro">
                                                    <div id="slider7"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="themesaller-forms">
                                                <div class="spacer-b16a">
                                                    <label for="volume">Vertical:</label>
                                                    <input type="text" id="volume" class="slider-input">
                                                </div>
                                                <div class="sliderv-wrapper black-slider">
                                                    <div id="slider6"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="themesaller-forms">
                                                <div class="spacer-b16a">
                                                    <label for="vtip">Vertical Tooltip:</label>
                                                    <input type="text" id="vtip" class="slider-input">
                                                </div>
                                                <div class="sliderv-wrapper yellow-slider">
                                                    <div id="slider9"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <center>
                                                                <!-- <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left"> -->
                                                                        <button class="btn btn-white" type="submit">Cancel</button>
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button>
                                                                    </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
</body>
<?php
include("fotter.php");
?>

</html>
<script type="text/javascript">
    $(document).ready(function(){
        $("#txtfocus").focus();
    });
</script>