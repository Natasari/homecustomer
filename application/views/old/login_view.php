<!DOCTYPE html>
<!-- saved from url=(0074)http://cdn2.mosaicpro.biz/social/php/admin/login.html?lang=en&v=v2.0.1-rc1 -->
<html class="paceCounter paceSocial app js flexbox flexboxlegacy no-touch rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent"><!-- <![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Social Admin Template (v2.0.1-rc1)</title>
</head>
<body >								
		<form method="post" action="<?php echo site_url('login/do_login'); ?>">
		<div class="innerLR">
			<input class="form-control text-center bg-gray" type="text" name="username" id="username" placeholder="Username" value="<?php echo set_value('username'); ?>"/>
			<div class="kotak"><?php echo form_error('username'); ?></div>
			
			<input class="form-control text-center bg-gray" type="password" name="password" id="password" placeholder="Enter Password" value="<?php echo set_value('password'); ?>"/>
			<div class="kotak"><?php echo form_error('password'); ?></div>
		
		<div class="innerT">
		<button type="submit" class="btn btn-primary btn-block">Log In
		<i class="fa fa-fw fa-unlock-alt"></i>
		</button>
		
		</div>
		</form>
		</body>
</html>
