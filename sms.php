<?php
// this line loads the library 
require('/path/to/twilio-php/Services/Twilio.php'); 
 
$account_sid = 'AC15d4a8da9cfdd50c88dc5417ce7e9cb1'; 
$auth_token = '[AuthToken]'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$client->account->messages->create(array( 
	'To' => "+4407557996927", 
	'From' => "+441274451669", 
	'Body' => "Test",   
));
?>