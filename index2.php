<?php
require_once('Database/header.php');
?>
<html>
<?php include('head.php');?>
 

<body>
    <?php
        include ('header_checker.php');
    ?>
<a href="../index.php"><h1 style="margin-top: 3%;"><strong style=" padding: 0 40px; font-size: larger;">Medical Consultations Online</strong></h1></a>

<?php if($worker == "doctor" && $status == "online"){?>
<div id="not" style="       float: left;
    padding: 1%;
    background: white;
    margin-top: 2%;
    height: 100%;">
<h3>Patient Information:</h3>
<div id="load_post" style="cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"></div>
</div>
<?php }?>

<!-- Top Navigation -->
<?php
if(($loggedin && $worker != "doctor") || !$loggedin){
?>
            	<section class="main clearfix">
			
				<div class="fleft">
					<select id="cd-dropdown" style="margin: 50%;width: 100%;height: 7%;font-weight: 700; font-size: large;" name="cd-dropdown" class="cd-select" onchange="javascript:location.href = this.value;">
						<option value="#" selected>Select a speciality</option>
						<option value="#" class="icon-monkey">Gastrointestinal</option>
						<option value="#" class="icon-bear">Eye and Ear Care</option>
						<option value="#" class="icon-squirrel">Cold, Cough and Allerfies</option>
						<option value="#" class="icon-squirrel">Aches and Pains</option>
					
					</select>
				</div>
			</section>
<?php } else if($loggedin && $worker == "doctor" && $status == "online"){?>

<textarea rows="4" cols="50" style="margin: 10%;
    height: 50%;
    font-size: large;">
Prescription Pad
</textarea>

<?php }?>




	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>   

</html>
