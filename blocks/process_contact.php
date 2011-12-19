<?php

$valid = true;

// set the required fields
$check_fields = array('name', 'email', 'message');

$invalid_fields = array();

// check the fields one by one
foreach($check_fields as $field){
	if($_POST[$field] == ''){
		$valid = false;
		$invalid_fields[] = $field;
	}
}


// set the message to display
$contact_message = '';

if(!$valid){
	$contact_message = '<div class="alert-message error">Please enter your ' . implode(', ', $invalid_fields) . '</div>';
} else {

	$contact_message = "<div class='alert-message success'>Thanks for getting in touch, " . str_replace("\'", "'", $_POST['name']) . ". We will contact you shortly.</div>";


	mysql_connect('localhost','lsa_db','snub96}NKVD');
	@mysql_select_db('lsa_main') or die( "Sorry, there was an issue saving your message.");
	$insert = "'INSERT INTO `mail` ('name', 'email', 'phone', 'message'', 'timestamp') 
		VALUES ('".mysql_escape_string($_POST['name'])."', 
			'".mysql_escape_string($_POST['email'])."', 
			'".mysql_escape_string($_POST['phone'])."', 
			'".mysql_escape_string($_POST['message'])."', 
			".time().")";
			
	mysql_query($insert);
	mysql_close();


	// send admin the email
	$content = '';
	foreach($_POST as $key => $val){
		$content .= $key . ": " . $val . "\r\n
";
		unset($_POST[$key]);
	}

	$headers = 'From: ' $config['email_from'] . "\r\n";

	mail($config['email_to'], 'Message from LSA Partners Website', $content, $headers);
//	mail('cduell@gmail.com', 'Message from LSA Partners Website', $content, $headers);

	
}


// display the form plus message
include('contact_form.php');
