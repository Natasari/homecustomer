<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet">
	</head>
	<body>
<div id="login">
  <div id="triangle"></div>
  <h1>Log in</h1>
  <form method="post" action="<?php echo site_url('login/do_login') ?>">
    <input type="text" class="teks" name="username" placeholder="Username" value="<?php echo set_value('username');?>"/>
    <div class="kotak"><?php echo form_error('username'); ?></div>
    <input type="password" name="password" placeholder="Password" value="<?php echo set_value('password');?>"/>
    <div class="kotak"><?php echo form_error('password')?></div>
    <input type="submit" value="Log in" />
  </form>
</div>
      
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	</body>
</html>