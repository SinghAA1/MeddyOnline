<?php
require_once('Database/header.php');
if($_GET['id'] == -1)
{
    header('Location: google-login-api/index.php');  
}
?>
<html>
<head>    
	  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inspiration for Pricing Tables | Codrops</title>
    <meta name="description" content="Various styles and inspiration for responsive, flexbox-based HTML pricing tables" />
    <meta name="keywords" content="pricing table, inspiration, ui, modern, responsive, flexbox, html, component" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sahitya:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css1/normalize.css" />
     <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css1/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css1/icons.css" />
    <link rel="stylesheet" type="text/css" href="css1/component.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
		
    <style type="text/css">
    
    body { 
       body { 
         background-image: url(http://digiscope.diagnozit.com/images/doctor_stethoscope.jpg); 
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
      
    }
    }
/*    html { */
        
/*  background: url(images/bg.jpg) no-repeat center center fixed; */
/*  -webkit-background-size: cover;*/
/*  -moz-background-size: cover;*/
/*  -o-background-size: cover;*/
/*  background-size: cover;*/
/*}*/
    
    </style>
</head>

<body>
    <?php
        include ('header_checker.php');
       if(isset($_GET['id'])){
          $loggedin = TRUE;
          $ids = $_GET['id'];
          $user_info = queryMysql("SELECT * FROM google_users WHERE google_id = '$ids' ");
    	  $row = $user_info->fetch_array(MYSQLI_ASSOC);
    	  $user = $row['google_name'];
          $firstname = $row['google_name'];
          $email_id = $row['google_email'];
          $worker = $row['worker'];
          $price = $row['price'];
          $desc = $row['desc'];
       }
    ?>
    
<a href="../index.php"><h1 style="margin-top: 3%;"><strong style=" color: white; padding: 0 20px;">Medical Consultations Online</strong></h1></a>

<div class="container">
        
        
        
        <section class="pricing-section bg-11">
        
            <div class="pricing pricing--tenzin">
                
              
                	      <div class="pricing__item">
                            <h3 class="pricing__title"><?php echo $user;?></h3>
                            <h3 class="pricing__title">Email id: <?php echo $email_id;?></h3>
                            <div class="pricing__price"><span class="pricing__currency"></span>BA2 5JA</div>
                            <p class="pricing__sentence"><?php echo $desc;?></p>
                            <ul class="pricing__feature-list">
                                <!--<li class="pricing__feature">Basics of computer programming</li>-->
                                <!--<li class="pricing__feature">Java, C, C++, Language of your choice</li>-->
                                <li class="pricing__feature"></li>
                                
                            </ul>
                            <?php   if(isset($_GET['id']) && ($_GET['id'] != $_SESSION['id'])){?>
                            <div class="google_hangout" id="google_hangout">
                                <div id="placeholder-div"></div> 
                            </div>
                            <?php }?>
                        </div>
                	  
                
                <!-- -->
                
            </div>
        </section>
        
        
    </div>
   
    
    
  <div id="1" style="display: none;"><?php echo $email_id;?></div>
  
  <!--<div class="settings">-->

  <!--      <div class="row">-->
  <!--        <div class="question">-->
  <!--          Status-->
  <!--        </div>-->
  <!--        <div class="switch">-->
  <!--          <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">-->
  <!--          <label for="cmn-toggle-1"></label>-->
  <!--        </div>-->
  <!--      </div><!-- /row -->-->
  <!--</div>-->
  
<!-- Top Navigation -->
            
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
