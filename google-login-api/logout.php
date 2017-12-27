<?php //  logout.php
  require_once '../Database/header.php';

  if (isset($_SESSION['id']))
  {
    destroySession();

  
    echo '<script>window.location = "../index.php";</script>';
         
        
  }
  else echo "<div class='main'><br>" .
            "You cannot log out because you are not logged in";
?>

    <br><br></div>
  </body>
</html>
