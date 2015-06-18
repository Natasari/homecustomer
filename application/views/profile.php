<script src="<?php echo base_url();?>assets/js/jquery/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery.ui.core.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery.ui.widget.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery.ui.position.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery.ui.autocomplete.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery/smoothness/jquery-ui-1.8.21.custom.css"/>

<script>
$(function() {
    $.ajax({
        url: "<?php echo site_url('admin');?>",
        type: 'post',
        data: '',
        dataType: 'json',
        success: function(data){
            alert("hai");
        }
    });
    
});
</script>

<input type="text" id="search" />