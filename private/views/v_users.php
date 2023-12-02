<?php $this->view('includes/v_header')?>
<?php $this->view('includes/v_navbar')?>
	
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php $this->view('includes/v_crumbs') ?>
    <div class="card-group justify-content-center">

        <?php foreach ($rows as $row):?>
        <div class="card m-2 shadow" style="max-width: 14rem;min-width: 14rem;">
            <img src="<?=ASSETS?>/profile.jpeg" class="card-img-top" alt="Card img cap">
                <div class="card-body">
                    <h5 class="card-title"><?=$row->firstname?> <?=$row->lastname?></h5>
                    <p class="card-text"><?=str_replace("_", " ",$row->rank)?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
        </div>
        <?php endforeach; ?>
    </div>
	</div>

	<?php 
	?>
<?php $this->view('includes/v_footer')?>