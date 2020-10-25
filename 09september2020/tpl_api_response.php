<?php 
/* Template Name: API RESPONSE */
?>

<?php get_header();?>

<?php

// Given Link -- "http://ec2-15-207-89-27.ap-south-1.compute.amazonaws.com:8080/bookslot/list?jobId=13173&mobileNumber=8310039860"

// Dummy Link -- "https://reqres.in/api/users?page=2"

$api_url = 'https://reqres.in/api/users?page=2';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);

	echo ("<pre>");
	print_r($response_data);
	echo ("</pre>");
?>


<?php get_footer();?>

