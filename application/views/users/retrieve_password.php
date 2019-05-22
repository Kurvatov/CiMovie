<br>
<br>
<br>
    <h1 class="text-center"><?= $title; ?></h1>

        <?php echo form_open('users/retrieve_password'); ?>
    <div class="col-md-3 mx-auto">
   
            <div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
            <?php echo '<small class="error">'.form_error('username').'</small>'; ?>
            </div>
            <div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
            <?php echo '<small class="error">'.form_error('password').'</small>'; ?> 
            </div>
            <div class="form-group">
				<label>New Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
            </div>
            <div class="form-group">
				<button type="sumbit" class="btn btn-primary btn-block">Log In</button>
            </div>
</div>
<?php echo form_close(); ?>