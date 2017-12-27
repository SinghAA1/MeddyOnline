<?php
require_once('Database/header.php');
if($_GET['id'] == -1)
{
    header('Location: google-login-api/index.php');  
}
?>
<?php
       
       if(isset($_GET['id'])){
          $loggedin = TRUE;
          $ids = $_GET['id'];
          $usr_info = queryMysql("SELECT * FROM google_users WHERE google_id = '$ids' ");
    	  $row = $usr_info->fetch_array(MYSQLI_ASSOC);
    	  $usr = $row['google_name'];
          $fname = $row['google_name'];
          $email = $row['google_email'];
          $phon = $row['price'];
          $typ = $row['description'];
          $current_p = $row['current_patient'];
       }
       
    ?>
<html>
<?php include('head.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


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
    <div id="1" style="display: none;"><?php echo $email;?></div>
<!-- Top Navigation -->
       <!--Form Starts -->
      <div class="pricing__item" style="float: left;
    padding: 4%;
    background: white;
    margin-left: 37%;
    margin-top: 6%;">
          <h1 class="pricing__title" style="text-align: center;    color: #666;"><?php echo ucfirst($typ);?></h1><br />
                     
                            <h3 class="pricing__title" style="text-align: center;    color: #666;    margin-bottom: 3%;"><?php echo 'Dr '.ucfirst($fname);?></h3>
                            <img style="width:200px; height:200px;" src="http://www.orchidfoundation.info/c4dc54dd-india-doctor.png" />
                            <div class="pricing__price"><span class="pricing__currency"></span></div>
                            <!--<p class="pricing__sentence"><?php echo $typ;?></p>-->
                         
                            <!-- Hangout Button -->
                            
                             <?php $patient = $_SESSION['patient'];?>
                            
                          
                            <div class="google_hangout" id="google_hangout" style="text-align: center; margin-top:6%;">
                                <div id="placeholder-div"></div> 
                                <form method='post' action="dbsubmit.php?ids=<?php echo $ids;?>&&patient=<?php echo $patient;?>" enctype="multipart/form-data" style="    margin-top: 5%;
    margin-left: 40%;">
                                    <input type='submit' style="width: 100%; margin-left: -30%;" value='Send patient Info' id="submit_Button_this"/>
                                    </form>
                                
                                
                                <!-- send patient session data to doctor $ids  -->
                               
                                
                                <?php
                                
                                // queryMysql("UPDATE google_users SET current_patient=$patient WHERE google_id='$id'");
                                ?>
                                
                            </div>
                       
                           
                            
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
