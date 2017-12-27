<?php
require_once('Database/header.php');


$result1 = queryMysql("SELECT * FROM google_users WHERE description = 'interview'");	
//counting the number of rows in the database
$num    = $result1->num_rows;
    

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

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
    <!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <style type="text/css">
    
    body { 
        background-image: url(http://www.freeportcobalt.com/img/world-cobalt-connections-2.jpg); 
        background-repeat: no-repeat; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    </style>
</head>

<body>
    <?php
        include ('header_checker.php');
    ?>
    <a href="../index.php"><h1 style="margin-top: 3%;"><strong style="background-color: black; color: white; padding: 0 20px;">Alyserve - interview Training from the best</strong></h1></a>
    <div class="container">
        
        
        
        <section class="pricing-section bg-11">
        
            <div class="pricing pricing--tenzin">
                
                <!-- for loop this one -->
                <?php
                //so long as the number of rows in the database are not < 1
                if ($result1->num_rows)
                {
                    //for every row in the databas  
                     for ($j = 0 ; $j < $num ; ++$j)
                	 {
                	      $row = $result1->fetch_array(MYSQLI_ASSOC);
                	      $name = $row['google_name'];
                	      $price = $row['price'];
                	       $desc = $row['desc'];
                	      if($loggedin)
                	      {
                	          $id = $row['google_id'];
                	      }else 
                	      {
                	          $id = -1;
                	      }
                	      
                	      ?>
                	      <div class="pricing__item">
                            <h3 class="pricing__title"><?php echo $name;?></h3>
                            <div class="pricing__price"><span class="pricing__currency">$</span><?php echo $price;?></div>
                            <p class="pricing__sentence"><?php echo $desc;?></p>
                            <ul class="pricing__feature-list">
                                <li class="pricing__feature">Basics of computer programming</li>
                                <li class="pricing__feature">Java, C, C++, Language of your choice</li>
                                <li class="pricing__feature"></li>
                                
                            </ul>
                            <button class="pricing__action" onclick="window.location.href='profile.php?id=<?php echo $id;?>'">Contact</button>
                        </div>
                	      <?php
                	 }
                }
                ?>
                
                <!-- -->
                
            </div>
        </section>
        
        
    </div>
    <!-- /container -->
</body>

</html>
