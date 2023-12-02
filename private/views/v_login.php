<?php $this->view('includes/v_header') ?>
        
<div class="container-fluid">
    <form method="post">
    <div class="p-2 mx-auto shadow rounded" style="margin-top: 20px; width: 100%; max-width: 310px">
        <h2 style="text-align: center;">School</h2>
        <img src="<?=ROOT?>/assets/logo2.jpg" class="border border-primary d-block mx-auto rounded-circle" style="height: 150px;">
        <h3>Login</h3>

        <?php if (count($errors)>0): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Errors:</strong>
                <?php foreach($errors as $error): ?>
                <Br> <?=$error?>
                <?php endforeach; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <input class="form-control" value="<?=get_var('email')?>" type="email" name="email" placeholder="Email">
        <br>
        <input class="form-control" value="<?=get_var('password')?>" type="password" name="password" placeholder="Password">
        <br>
        <button class="btn btn-primary">Login</button>
    </div>
    </form>
</div>

<?php $this->view('includes/v_footer') ?>