<?php
$response = array();
$hasErrors = FALSE;

// get values from form
$username = $_POST['username'];
$email = htmlspecialchars_decode($_POST['email'], ENT_QUOTES);
$password = $_POST['password'];

// validate username
if ($username == "") {
	$response['errEmptyUsername'] = "Please fill out username.";
}

// validate email
if ($email == "") {
	$response['errEmptyEmail'] = "Please fill out email.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$response['errInvalidEmail'] = 'Please enter a valid email address';
}

// validate password
if ($password == "") {
	$response['errEmptyPassword'] = "Password cannot be empty.";
}

if (count($response) > 0) {
	$hasErrors = TRUE;
}
	
$response['hasErrors'] = $hasErrors;

// send response
echo json_encode($response);
?>
