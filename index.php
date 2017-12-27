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
    height: 70%;
    width: 30%;
    margin-left: 3%;
  
    border-style: solid;
    float: left;
    padding: 1%;
    /* background: white; */
    /* margin-top: 2%; */
    /* height: 100%; */
    /* margin-left: 3%; */
    /* border: black 4px; */
    border-style: solid;
    box-shadow: 0 0 10px .1px;
    /* width: 50%; */
    
    /* position: absolute; */
    /* margin: auto; */
    /* top: 0; */
    /* left: 0; */
    /* right: 0; */
    /* bottom: 0; */
    background-color: #eee;
    border-radius: 6px;
    overflow: hidden;
    padding: 20;
    opacity: 0.9;
}">
<h3 style="text-align: center;">Patient Notification</h3>
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
						<option value="-1" selected>Select a speciality</option>
						<option value="/gastro.php" class="icon-monkey">Gastrointestinal</option>
						<option value="/eye.php" class="icon-bear">Eye and Ear Care</option>
						<option value="/cold.php" class="icon-squirrel">Cold, Cough and Allergies</option>
						<option value="/aches.php" class="icon-squirrel">Aches and Pains</option>
					
					</select>
				</div>
			</section>
<?php } else if($loggedin && $worker == "doctor" && $status == "online"){?>


<form id="f" method="GET" action="submit.php" enctype="multipart/form-data" style="margin-top: 8%;
    margin-left: 30%;"> 

<textarea rows="4" name="rows" id="ta" cols="50" style="margin-left: 3%;margin-top: 3%;margin-bottom: 3%;
    height: 54%;
    font-size: large;
    padding: 12; float: left;    box-shadow: 0 0 10px .1px; border-radius: 6px;">
   
    <?php echo "Dr. ".$firstname;?>
    <?php echo date("d/m/y").': ';?>
</textarea>
   <div style="    margin-left: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    height: 50%;
    font-size: large;
    padding: 12;
    float: left;
}">
    <input type='submit' value='Save' id="submit_Button_this" style="display: block;
        padding: 10px;
        border: 0px solid #DDD;
        width: 100%;
        background: #DDD;
        color: #333;
        font-size: initial;
        font-weight: 600;border-radius: 6px;
    }"/>
    <br>
        <a href="http://www.netmeds.com/" id="7" class="button" style="display: block;
        padding: 10px;
        border: 0px solid #DDD;
        background: #DDD;
        color: #333; width: 100%;
        font-weight: 600;border-radius: 6px;">Send to online medical store</a>
    
</div>

</form>

<?php  }?>




	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
$("#7").click(function(){
    $("#not").empty('');
});
</script>

</body>   

</html>
