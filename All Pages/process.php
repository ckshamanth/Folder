<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$title = $_POST['title'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$check_in_out = $_POST['check_in_out'];
	$guests = $_POST['guests'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];

	// Store the form data in session variables
	session_start();
	$_SESSION['booking'] = [
		'title' => $title,
		'first_name' => $first_name,
		'last_name' => $last_name,
		'check_in_out' => $check_in_out,
		'guests' => $guests,
		'email' => $email,
		'mobile' => $mobile
	];

	// Redirect to the confirmation page
	header('Location: booking-confirm.html');
	exit;
}
?>
