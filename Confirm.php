<?php
require_once('Database/header.php');
if($_GET['id'] == -1)
{
    header('Location: google-login-api/index2.php');  
}
?>
<style>
.pricing__title
{
    color: #333 !important;
    text-align: left !important;
}
</style>
<?php
       
       if(isset($_GET['id'])){
           //1. name of village admin - $firstname
    //       $loggedin = TRUE;
     $ids = $_GET['id'];
    
           //selected a patient
         
          $usr_info = queryMysql("SELECT * FROM admin WHERE id = '$ids' ");
     	  $row = $usr_info->fetch_array(MYSQLI_ASSOC);
    // 	  $usr = $row['google_name'];
  
    
    
    
 
           $p_name = $row['patient_name'];
           $p_id = $row['id'];
          
           $usr_info1 = queryMysql("SELECT * FROM patient_description WHERE patient_id='$ids' ORDER BY id DESC");
           $row1 = $usr_info1->fetch_array(MYSQLI_ASSOC);
           
           if($p_l_s != ' '){
           $p_l_s = $row1['last_prescription'];
           }else
           {
               $p_l_s='';
           }
           
           
    //       $email = $row['google_email'];
    //       $phon = $row['price'];
    //       $typ = $row['description'];
       }
       
    ?>
<html>
<?php include('head.php');?>
<style>
input
{
    display: block;
    padding: 10px;
    border: 0px solid #DDD;
    color: #666;
    width: 30%;
}
</style>
<body>
    <?php
        include ('header_checker.php');
    ?>
    
<a href="../index.php"><h1 style="margin-top: 3%;"><strong style="padding: 0 40px; font-size: larger;">Medical Consultations Online</strong></h1></a>

<?php
    if(isset($_GET['id'])){
    ?>
    <!--<div id="1" style="display: none;"><?php echo $email;?></div>-->
<!-- Top Navigation -->
       <!--Form Starts -->
      <div class="pricing__item" style="    float: left;
    width: 400px;
    padding: 4%;
    background: white;
    margin-left: 27%;
    margin-top: 6%;
    box-shadow: 0 0 10px .1px;
    width: 50%;
     height: 350px; 
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
    opacity: 0.9;">
          <!--<h1 class="pricing__title" style="text-align: center;    color: #666;"><?php echo ucfirst($typ);?></h1><br />-->
                            <h3 class="pricing__title" style="text-align: center;    color: #666;    margin-bottom: 3%;"><label style="text-align: left; color: #000;">Village Admin:</label><i> <?php echo ucfirst($firstname);?></i></h3>
                            <h3 class="pricing__title" style="text-align: center;    color: #666;    margin-bottom: 3%;"><label style="text-align: left;">Patient Name:</label><i> <?php echo ucfirst($p_name);?></i></h3>
                           <?php if($p_l_s != ''){?>
                            <h3 class="pricing__title" style="text-align: center;    color: #666;    margin-bottom: 3%;"><label style="text-align: left;">Last Prescription: </label><br><br><p><i><?php echo ucfirst($p_l_s);?></i></p></h3>
                            <?php }?>
                           
                          
                           <?php $_SESSION['patient'] = $p_id;?>
                            <!--<div class="pricing__price"><span class="pricing__currency"></span></div>-->
                            <!--<p class="pricing__sentence"><?php echo $typ;?></p>-->
                         
                            <!-- Hangout Button -->
                            <!--<div class="google_hangout" id="google_hangout" style="text-align: center; margin-top:6%;">-->
                            <!--    <div id="placeholder-div"></div> -->
                            <!--</div>-->
                            
                         <section class="main clearfix">
			
				<div class="fleft">
					<select id="cd-dropdown" style="width: 100%;
    height: 10%;
    font-weight: 700;
    font-size: large;margin-left: 30%;" name="cd-dropdown" class="cd-select" onchange="javascript:location.href = this.value;">
						<option value="#" selected>Select a speciality</option>
						<option value="/gastro.php" class="icon-monkey">Gastrointestinal</option>
						<option value="/eye.php" class="icon-bear">Eye and Ear Care</option>
						<option value="/cold.php" class="icon-squirrel">Cold, Cough and Allergies</option>
						<option value="/aches.php" class="icon-squirrel">Aches and Pains</option>
					
					</select>
				</div>
			</section>
			
                          </div>
       <!--Form Ends -->
       <?php }?>

<!-- Translate -->
	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<script>
 var email=document.getElementById("1").innerHTML;
(function() {
  var po = document.createElement('script'); 
  po.type = 'text/javascript'; 
  po.async = true;
  po.src = 'https://apis.google.com/js/platform.js?onload=renderButtons';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

function renderButtons(){
  gapi.hangout.render('placeholder-div', {
    'render': 'createhangout',
     'invites':"[{ id : " + email + ", invite_type : 'EMAIL' }]",
    'widget_size': 72
  });
}
</script>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34160351-1']);
_gaq.push(['_trackPageview']);
(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34160351-1']);
_gaq.push(['_trackPageview']);
(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</body>    
</html>
