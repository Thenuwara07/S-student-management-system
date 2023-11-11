<?php $this->view('includes/v_header') ?>
<?php $this->view('includes/v_navbar') ?>
        
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('includes/v_crumbs') ?>
    <div class="row">
        <div class="col-4">
            <img src="<?=ASSETS?>/profile.jpeg" class="border border-primary d-block mx-auto rounded-circle" style="width: 150px;">
            <h3 class="text-center">Pramukha Thenuwara</h3>
        </div>
        <div class="col-8 bg-light p-2">
            <table class="table table-hover table-striped table-borderd">
                <tr><th>First Name:</th><td>Pramukha</td></tr>
                <tr><th>Second Name:</th><td>Thenuwara</td></tr>
                <tr><th>Gender:</th><td>Male</td></tr>
                <tr><th>Date Created:</th><td>2019-02-05</td></tr>
            </table>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-items">
                <a class="nav-link active" href="#">Basic info</a>
            </li>
            <li class="nav-items">
                <a class="nav-link" href="#">Classes</a>
            </li>
            <li class="nav-items">
                <a class="nav-link" href="#">Tests</a>
            </li>
        </ul>
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search">&nbsp</i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </nav>
    </div>
</div>

<?php $this->view('includes/v_footer') ?>
