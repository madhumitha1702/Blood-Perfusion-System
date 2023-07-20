<div class="row justify-content-center mb-3">
	<?php $counter=0; if(isset($_GET['msg'])) { ?>
		<div class="col-5 alert alert alert-success alert-dismissible fade show card" id="message">
			<button type="button" class="close" data-dismiss="alert" title="close">&times;</button><?php echo $_GET['msg'];?>
		</div>
	<?php }?>
	<?php if(isset($_GET['error'])) { ?>
		<div class="col-5 alert error alert-danger alert-dismissible fade show card" id="message">
			<button type="button" class="close" data-dismiss="alert" title="close">&times;</button><?php echo $_GET['error'];?>
		</div>
	<?php }?>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$( document ).ready(function(){
	$('#message').fadeIn('slow', function(){
		$('#message').delay(5000).fadeOut(); 
	});
});
</script>