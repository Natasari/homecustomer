<html lang="en">
<head>
	<meta charset="utf-8">
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.core.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.widget.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.position.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.autocomplete.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery/smoothness/jquery-ui-1.8.21.custom.css"/>
<script type="text/javascript">
	$(document).ready(function(){
		$('#search').autocomplete({
			source: "<?php echo site_url('admin/search?='); ?>"
		});
	});
</script>
</head>
<body>
<input type="text" name="search" id="search" />
</body>
</html>