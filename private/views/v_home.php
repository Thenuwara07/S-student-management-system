<?php $this->view('includes/v_header')?>
<?php $this->view('includes/v_navbar')?>
	
	<div class="container-fluid">
		<h1><i class="fa fa-plus"></i>This is home</h1>
	</div>

	<?php 

		echo "<pre>";
		print_r($rows);
	?>
<?php $this->view('includes/v_footer')?>