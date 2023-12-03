<?php $this->view('includes/v_header')?>
<?php $this->view('includes/v_navbar')?>
	
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php $this->view('includes/v_crumbs') ?>
    <div class="card-group justify-content-center">

        <?php if ($rows):?>
            <?php foreach ($rows as $row):?>
        
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
	</div>

	<?php 
	?>
<?php $this->view('includes/v_footer')?>