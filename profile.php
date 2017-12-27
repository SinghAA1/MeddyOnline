<?php
require_once('Database/header.php');
if($_GET['id'] == -1)
{
    header('Location: google-login-api/index2.php');  
}
?>
<?php
       
       if(isset($_GET['id'])){
    //       $loggedin = TRUE;
    //       $ids = $_GET['id'];
    //       $user_info = queryMysql("SELECT * FROM google_users WHERE google_id = '$ids' ");
    // 	  $row = $user_info->fetch_array(MYSQLI_ASSOC);
    // 	  $user = $row['google_name'];
    //       $firstname = $row['google_name'];
    //       $email_id = $row['google_email'];
    //       $worker = $row['worker'];
    //      $phone = $row['price'];
    //       $type = $row['description'];
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
    width: 70%;
   
}
</style>
<body>
    <?php
        include ('header_checker.php');
    ?>
    
<a href="../index.php"><h1 style="margin-top: 3%;"><strong style="padding: 0 40px; font-size: larger;">Medical Consultations Online</strong></h1></a>

<?php
    if(!isset($_GET['id'])){
    ?>
<!-- Top Navigation -->
       <!--Form Starts -->
       <form method='post' action="edit_submit.php" enctype="multipart/form-data" style="    margin-top: 8%;
    margin-left: 30%;"> 
           <!-- unordered list of items in the form -->
           <ul id="login" class="top-menu-bar" style="list-style: none;">
               <div class="edit_setup" style="    box-shadow: 0 0 10px .1px;
    width: 50%;
    height: 350px;
    position: absolute;
    margin: auto;
    /* top: 0; */
    /* left: 0; */
    /* right: 0; */
    /* bottom: 0; */
    background-color: #eee;
    border-radius: 6px;
    overflow: hidden;
    padding: 20;
    opacity: 0.9;">
                   
                   <!--<div class="column-3">-->
                       <div id="column-3" style="float: left;
    position: relative;
    min-height: 1px;
    width: 40%;
}">
                          <li>
                             <h3><label style="text-align: left;">Name</label></h3>
                             <input type="text" name="firstname" value="<?php echo $firstname;?>" id = "sname"/>
                             <br />
                          </li>
                          <?php if($worker == "doctor"){?>
                            <li>
                             <h3><label style="text-align: left;">Type</label></h3>
                             <input type="text" name="description" value="<?php echo $type;?>" id = "sdesc"/>
                             <br />
                          </li>
                          <?php }?>
                           <li>
                             <h3><label style="text-align: left;">Email</label></h3>
                             <input type="email" name="email" value="<?php echo $email_id;?>" id = "firstname_edit"/>
                             <br />
                          </li>
                          <li>
                             <h3><label style="text-align: left;">Phone</label></h3>
                             <input type="text" name="phone" value="<?php echo $phone;?>" id = "phone_edit"/>
                             <br />
                          </li>
                      </div>
                          <div id="column-3" style="float: left;
    position: relative;
    min-height: 1px;
    width: 40%;
}">
                                  <li>
                                    <h3>Occupation</h3> <br>
                                    <div class="online" style="float: left;
                margin-right: 5%;">
               <input type="radio" name="worker" <?php if (isset($worker) && $worker=="doctor") echo "checked";?>  value="doctor"><strong>Doctor</strong></div>
               
               <input type="radio" name="worker" <?php if (isset($worker) && $worker=="admin") echo "checked";?>  value="admin"><strong>Village Administrator</strong>
                                </li>
                                <br>
                                <br>
                                <?php if($worker == "doctor"){?>
                                 <li>
                                    <h3>Status</h3> <br>
                                    <div class="online" style="float: left;
                margin-right: 5%;">
               <input type="radio" name="status" <?php if (isset($status) && $status=="online") echo "checked";?>  value="online"><strong>Online</strong>
                                    </div>
                                    
               <input type="radio" name="status" <?php if (isset($status) && $status=="offline") echo "checked";?>  value="offline"><strong>Offline</strong>
                                </li>
                                <?php }?>
                                 <br>
                 <input type='submit' value='Save' id="submit_Button_this" style="border-radius: 6px; color: #333"/>
                        </div>
                    <!--</div> -->
                   
                     
              
              
                
             </div>
        
              
           </ul>
        </form>
       <!--Form Ends -->
       <?php }?>

	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>    
</html>
