<?php
	date_default_timezone_set('America/Chicago');
	$timestamp = date('D, F dS \a\t h\:i a e');
	$name = Input::get ('name');
	$email = Input::get('email');
	$phone = Input::get ('phone');
	$company = Input::get ('company');
	$message = Input::get ('message');
	$date_time = $timestamp;
	$userIpAddress = Request::getClientIp();
?>
 
<h1><?php echo ($name); ?></h1>
<h2><?php echo ($email);?></h2>
<h2><?php echo($phone);?></h2>
<h2><?php echo ($company); ?></h2>
<h3><?php echo($date_time);?> | <?php echo($userIpAddress);?></h3>
<p><?php echo ($message);?></p>