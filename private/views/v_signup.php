<?php $this->view('includes/v_header') ?>

<?php
    print_r($errors);
?>
        
<div class="container-fluid">
    <form method="post">
        <div class="p-2 mx-auto shadow rounded" style="margin-top: 20px; width: 100%; max-width: 310px">
        <h2 style="text-align: center;">School</h2>
        <img src="<?=ROOT?>/assets/logo2.jpg" class="border border-primary d-block mx-auto rounded-circle" style="height: 150px;">
        <h3>Add user</h3>
        <input class="my-3 form-control" value="<?=get_var('firstname')?>" type="firstname" name="firstname" placeholder="First Name">
        <input class="my-3 form-control" value="<?=get_var('lasttname')?>" type="lastname" name="lastname" placeholder="Last Name">
        <input class="my-3 form-control" value="<?=get_var('email')?>" type="email" name="email" placeholder="Email">

        <select class ="my-2 form-control" name="gender">
            <option <?=get_select('gender','')?> value="">--Select a Gender--</option>
            <option <?=get_select('gender','male')?> value="male">Male</option>
            <option <?=get_select('gender','female')?> value="female">Female</option>
        </select>
        <select class ="my-2 form-control" name="rank">
            <option <?=get_select('rank','')?> value="">--Select a Rank--</option>
            <option <?=get_select('rank','student')?> value="student">Student</option>
            <option <?=get_select('rank','reception')?> value="reception">Reception</option>
            <option <?=get_select('rank','lecture')?> value="lecture">Lecture</option>
            <option <?=get_select('rank','admin')?> value="admin">Admin</option>
            <option <?=get_select('rank','super_admin')?> value="super_admin">Super Admin</option>
        </select>

        <input class="my-3 form-control" value="<?=get_var('password')?>" type="text" name="password" placeholder="Password">
        <input class="my-3 form-control" value="<?=get_var('password2')?>" type="text" name="password2" placeholder="Retype Password">
        <br>
        <button class="btn btn-primary float-end">Add</button>
        <button type="button" class="btn btn-danger">Cancel</button>
    </div>
    </form>
</div>

<?php $this->view('includes/v_footer') ?>