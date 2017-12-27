<?php
require_once('Database/header.php');
$result = queryMysql("SELECT * FROM admin WHERE google_id = '$id'");	
//counting the number of rows in the database
$num    = $result->num_rows;
?>
<html>
    
<?php include('head.php');?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" />

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
$(document).ready(function(){
    $('#example_paginate').hide();
});
</script>
<script>
$(document).ready(function(){
    $("#7").click(function(){
    $(".edit_setup").show();
});
});
</script>

<style>
.dataTables_filter, #example_filter
{
        float: left !important;
    font-weight: bold;
    margin-left: 5%;
}
.dataTables_length,.dataTables_info
{
    display: none !important;
}
#example_wrapper
{
    margin-top: 5% !important;
}
</style>
<style>
.inp
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

<!-- Top Navigation -->
            
            	<!-- Table starts here -->
            	<table id="example" class="display" cellspacing="0" width="50%" style="    width: 50%;
    box-shadow: 0 0 10px .1px;
    width: 50%;
    /* height: 350px; */
    /* position: absolute; */
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
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Phone</th>
                        
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if ($num>0)
                        {
                            //for every row in the databas  
                             for ($j = 0 ; $j < $num ; ++$j)
                        	 {
                        	     $row = $result->fetch_array(MYSQLI_ASSOC);
                	             $p_name = ucfirst($row['patient_name']);
                	             $p_age = $row['patient_age'];
                	             $p_numb = $row['patient_number'];
                	             $p_id = $row['id'];
                	             echo "<tr onclick=location.href='Confirm.php?id=".$p_id."'>";
                	             echo "<td>$p_name</td>";
                	             echo "<td>$p_age</td>";
                	             echo "<td>$p_numb</td>";
                	             echo "</tr>";
                        	 }
                        }?>
                      
                    </tbody>
                </table>
    <!-- Table ends here -->            
                <a href="#" id="7" class="button" style="    display: block;
    padding: 10px;
    border: 2px solid #000;
    width: 50%;
    background: #DDD;
    color: black;
    margin-left: 25%;
    font-weight: 600;
    margin-top: 2%;">Add a patient</a>
    
<!-- form to add a new patient -->
<!--Form Starts -->
       <form method='post' action="patient_submit.php" enctype="multipart/form-data" style="    margin-top: 8%;
    margin-left: 30%;"> 
           <!-- unordered list of items in the form -->
           <ul id="login" class="top-menu-bar" style="list-style: none;">
               <div class="edit_setup" style="display: none;  box-shadow: 0px 0px 10px 0.1px;
    width: 50%;
    /* height: 350px; */
    /* position: absolute; */
    /* margin: auto; */
    border-radius: 6px;
    overflow: hidden;
    padding: 20px;
    opacity: 0.9;
    background-color: rgb(238, 238, 238);margin-top: -10%;">
                   
                   <!--<div class="column-3">-->
                       <div id="column-3" style="float: left;
    position: relative;
    min-height: 1px;
    width: 40%;
}">
                          <li>
                             <h3><label style="text-align: left;">Name</label></h3>
                              <input type="text" name="name"  id = "sname"/>
                             <br />
                          </li>
                        
                            <li>
                             <h3><label style="text-align: left;">Age</label></h3>
                             <input type="text" name="age"/>
                             <br />
                          </li>
                      
                           
                          <li>
                             <h3><label style="text-align: left;">Phone</label></h3>
                             <input type="text" name="phone"/>
                             <br />
                          </li>
                          <li>
                           <input type='submit' style="    display: block;
    padding: 10px;
    border: 0px solid #DDD;
    color: #666;
    width: 70%;     margin-top: 7%;" value='Save' id="submit_Button_this"/>
                           <br />
                          </li>
                      </div>
                      
                                 
                                
                
                        
                    <!--</div> -->
                   
                     
              
              
                
             </div>
        
              
           </ul>
        </form>
       <!--Form Ends -->
<!-- end form -->


	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</div>
   
</html>
