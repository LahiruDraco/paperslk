<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<!-- InstanceBeginEditable name="head" --><title>Upload a Paper</title>
<?php include('../variables.php'); ?>
<link href="../styles/styles.css" rel="stylesheet" type="text/css" />
<link href="../styles/fileuploader.css" rel="stylesheet" type="text/css">	
<style type="text/css">
#main_container{
	font-size: 1em;
}


</style>
<script src="fileuploader.js" type="text/javascript"></script>
<script type="text/javascript">
window.onload = init;

function init(){
var uploader = new qq.FileUploader({
	// pass the dom node (ex. $(selector)[0] for jQuery users)
	element: document.getElementById('file-uploader'),
	// path to server-side upload script
	action: './Uploaded_Files/UploadHandler.php',
	
	allowedExtensions: ['pdf','doc','docx','jpg','jpeg'],
	
	debug:true,
	
	params: {
            NotDirectAccess: true,
        }
});
}
</script>

<!-- InstanceEndEditable -->
<link href="<?php echo $siteroot; ?>styles/custom-menu.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="headWrap">
 <div id="headpanel">
  <div id="logo"></div>
  <div id="menu">
   <!--<ul>
    <li><a href="<?php echo $siteroot; ?>" style="colors:#00B318;">Home</a></li>
    <li><a href="<?php echo $siteroot; ?>Past-Papers/GCE/AL"  style="colors:#DE0000;">A/L Papers</a></li>
    <li><a href="<?php echo $siteroot; ?>Past-Papers/GCE/OL"  style="colors:#007ADE;">O/L Papers</a></li>
    <li><a href="<?php echo $siteroot; ?>Community"  style="colors:#60DE00;" >Community</a></li>
    <li><a href="<?php echo $siteroot; ?>Contact-Us" style="colors:#DE5900;">Contact Us</a></li>
   </ul>-->
   <ul class="DDMenu DDMenum">
	<li><a href="<?php echo $siteroot; ?>">Home</a></li>
	<li><a href="<?php echo $siteroot; ?>Past-Papers/GCE/AL"><span>A/L Past Papers</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul class="DDMenum">
		<li><a href="<?php echo $siteroot; ?>Past-Papers/GCE/AL/English"><span>English Medium</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul class="DDMenum">
		<li><a href="<?php echo $siteroot; ?>Past-Papers/GCE/AL/English/Biology">Biology</a></li>
		<li><a href="<?php echo $siteroot; ?>Past-Papers/GCE/AL/English/Physics">Physics</a></li>
	</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
		<li><a href="<?php echo $siteroot; ?>Past-Papers/GCE/AL/Sinhala">Sinhala Medium</a></li>
	</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	<li><a href="<?php echo $siteroot; ?>Past-Papers/GCE/OL/"><span>O/L Past Papers</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul class="DDMenum">
		<li><a href="<?php echo $siteroot; ?>Past-Papers/GCE/OL/English">English Medium</a></li>
		<li><a href="<?php echo $siteroot; ?>Past-Papers/GCE/OL/Sinhala">Sinhala Medium</a></li>
	</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	<li><a href="<?php echo $siteroot; ?>Community">Community</a></li>
	<li><a href="<?php echo $siteroot; ?>Contact-Us">Contact Us</a></li>
	</ul>
  </div>
 </div>
</div>

<!-- ********************************* CONTENT START *******************************************-->

<div id="contentWrap">
    <div id="contentPanel">
    <div>
        <div id="leftPanel">
        <div class="toplinks">
          <h2>About Us</h2>
          <h3>Infiniti Solutions</h3>
          <p>The <b>paperslk</b> website is a 100% non-profit effort to create a rich online presence for the Sri Lankan Student Community. <a href="<?php echo $siteroot; ?>About-Us/">Read More >></a></p>
          <p><a href="">Advertise Here</a></p>
        </div>
        <!-- InstanceBeginEditable name="LeftPanel" -->
    <div class="toplinks">
      
    </div>
  <!-- InstanceEndEditable -->
        	<div class="adblock">
            AD BLOCK
            </div>
         <!-- InstanceBeginEditable name="LeftPanel2" -->   
		<!-- InstanceEndEditable -->
   	<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpaperslk&amp;width=270&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:290px;" allowTransparency="true"></iframe>
        </div>
        <div id="middlePanel">
        <!-- InstanceBeginEditable name="MainContent" -->
     <h2>Paperslk</h2>
     <h3>No. 1 Source for Sri Lankan Papers</h3>
     <h2>&nbsp;</h2>
     <h2>Past Paper Upload</h2>
     <p>If you have any past papers to submit, please go forward and use the multi-file uploader given below. Javascript should be enabled for the uploader to work. Max. File Size is <b>2MB</b></p>
     <p></p>
     <br />

     <div id="main_container">
	<div id="file-uploader">
        <noscript>
            <p>Please enable JavaScript to use file uploader.</p>
            <!-- or put a simple form for upload here -->
        </noscript>

	</div>
	</div>
   <!-- InstanceEndEditable -->
        </div>
    <div class="clearer"></div>
    </div>
    </div>
</div>

<!-- *********************************** FOOOTER START ******************************************-->

<div id="footWrap">
 <div id="footPanel">
  <div id="footNav">
   <ul>
    <li><a  style="color:#DE5900;" href="<?php echo $siteroot; ?>">Home</a></li>
    <li><div class="blank">|</div></li>
    <li><a style="color:#60DE00;" href="<?php echo $siteroot; ?>Past-Papers/GCE/AL">A/L</a></li>
    <li><div class="blank">|</div></li>
    <li><a style="color:#007ADE;" href="<?php echo $siteroot; ?>Past-Papers/GCE/OL">O/L</a></li>
  	<li><div class="blank">|</div></li>
    <li><a  style="color:#DE0000;"  href="<?php echo $siteroot; ?>Contact-Us">Contact Us</a></li>
 	<li><div class="blank">|</div></li>
    <li><a  style="color:#751AAD;"  href="<?php echo $siteroot; ?>Upload">Submit a Paper</a></li>
 	<li><div class="blank">|</div></li>
    <li><a style="color:#00B318;" href="">© Copyright Infiniti Solutions </a></li>
    <li><img src="" ></img></li>
   </ul>
  </div>
 </div>
</div>
</body>
<!-- InstanceEnd --></html>

