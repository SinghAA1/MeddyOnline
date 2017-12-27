<?php

if ($loggedin) {
     
                      
                
    
?>
    <!-- <span class="right">
      <a class="icon footer-icon icon-je" style="margin-top: 8px !important;" href="<?php echo $profile_url;?>">
        <img class="time" src="<?php echo $profile_top_image;?>" width="35" height="35">
        </img>
      </a>
    </span> -->
    
    <span class="right" style="float:right; padding: 0 20px;">
        <a class="codrops-icon"  href="profile.php">
            <span id="username" style=" color: white; font-weight: 800;"><?php echo $user;?></span>
        </a>
    </span>
    
    <!--<span class="right" style="float:right; padding: 0 20px; color: white; font-weight: 800;">-->
    <!--    <a class="codrops-icon"  id="modal_trigger_2" href="#">-->
    <!--        <span  style=" color: white; font-weight: 800;">Edit</span>-->
    <!--    </a>-->
    <!--</span>-->
    
    <?php if($worker == 'admin'){?>
         <span class="right" style="float:right; padding: 0 20px; color: font-white; weight: 800;">
            <a class="codrops-icon"  id="modal_trigger_2" href="patients.php">
                <span  style=" color: white; font-weight: 800;">Patients</span>
            </a>
        </span>
    <?php }?>
    <span class="right" style="float:right; padding: 0 20px; color: white; font-weight: 800;">
        <a class="codrops-icon"  href="google-login-api/logout.php">
            <span  style=" color: white; font-weight: 800;">Logout</span>
        </a>
    </span>
    <?php
   
} else
    {
        ?>
    
    <span class="right" style="float:right; padding: 0 20px; color: white; font-weight: 800;"><a id="modal_trigger"  href="google-login-api/index.php" class="bt"  style=" color: white; font-weight: 800;">Login/Register</a></span>
   
    <?php
  
}

?>

 <span class="right" style="float:right; padding: 0 20px; color: white; font-weight: 800;" id="google_translate_element"></span>


