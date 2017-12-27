<?php
require_once('Database/header.php');
$result = queryMysql("SELECT * FROM google_users WHERE description = 'gastro' AND worker='doctor' AND online='online'");	
//counting the number of rows in the database
$num    = $result->num_rows;
?>
<html>
<?php include('head.php');?>

<body>
    <?php
        include ('header_checker.php');
    ?>
<a href="../index.php"><h1 style="margin-top: 3%;"><strong style="padding: 0 40px; font-size: larger;">Gastrointestinal Consultations</strong></h1></a>

<!-- Top Navigation -->
            <?php
                if ($num>0)
                {
                    //for every row in the databas  
                     for ($j = 0 ; $j < $num ; ++$j)
                	 {
                	     $row = $result->fetch_array(MYSQLI_ASSOC);
                	     $name = ucfirst($row['google_name']);
                	     if($loggedin)
                	      {
                	          $id = $row['google_id'];
                	      }else 
                	      {
                	          $id = -1;
                	      }
                	      ?>
                	      <div class="pricing__item" style="    float: left;
    padding: 1%;
    background: white;
    margin: 2%;">
                            <h3 class="pricing__title" style="text-align: center;    color: #666;"><?php echo 'Dr '.$name;?></h3>
                            <img style="width:200px; height:200px;" src="http://www.orchidfoundation.info/c4dc54dd-india-doctor.png" />
                            <div class="pricing__price"><span class="pricing__currency"></span></div>
                        
                            
                            <button class="pricing__action" style="display: block;
    padding: 10px;
    border: 0px solid #DDD;
    color: #666;
    width: 100%;" onclick="window.location.href='view.php?id=<?php echo $id;?>'">Contact</button>
                          </div>
                        <?php
                	 }
                }
            ?>

	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>    
</html>
