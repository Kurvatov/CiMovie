

<br>
<br>
<br>
    <h1 class="text-center"><?= $title; ?></h1>

        <?php echo form_open('users/login'); ?>
    <div class="col-md-3 mx-auto">
    <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>
            <div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
            <?php echo '<small class="error">'.form_error('username').'</small>'; ?>
            </div>
            <div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
            <?php echo '<small class="error">'.form_error('password').'</small>'; ?> 
            <a href="<?php echo base_url(); ?>users/retrieve_password">Forgot Password?</a>
            </div>
           
            <div class="form-group">
				<button type="sumbit" class="btn btn-primary btn-block">Log In</button>
            </div>
</div>
<?php echo form_close(); ?>