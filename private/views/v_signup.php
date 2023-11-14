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
        <input class="my-3 form-control" type="firstname" name="firstname" placeholder="First Name">
        <input class="my-3 form-control" type="lastname" name="lastname" placeholder="Last Name">
        <input class="my-3 form-control" type="email" name="email" placeholder="Email">

        <select class ="my-2 form-control" name="gender">
            <option value="">--Select a Gender--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <select class ="my-2 form-control" name="rank">
            <option value="">--Select a Rank--</option>
            <option value="student">Student</option>
            <option value="reception">Reception</option>
            <option value="lecture">Lecture</option>
            <option value="admin">Admin</option>
            <option value="super_admin">Super Admin</option>
        </select>

        <input class="my-3 form-control" type="text" name="password" placeholder="Password">
        <input class="my-3 form-control" type="text" name="password2" placeholder="Retype Password">
        <br>
        <button class="btn btn-primary float-end">Add</button>
        <button type="button" class="btn btn-danger">Cancel</button>
    </div>
    </form>
</div>

<?php $this->view('includes/v_footer') ?>