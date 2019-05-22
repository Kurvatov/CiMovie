

<br>
<br>
<br>
    <h1 class="text-center"><?= $title; ?></h1>

        <?php echo form_open('users/register'); ?>
    <div class="col-md-3 mx-auto">
			<div class="form-group">
				<label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="<?php if(form_error('name') == ''){echo set_value('name');}?>">
            <?php echo '<small class="error">'.form_error('name').'</small>'; ?>
            </div>
            <div class="form-group">
				<label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php if(form_error('username') == ''){echo set_value('username');}?>">
            <?php echo '<small class="error">'.form_error('username').'</small>'; ?>
            </div>
            <div class="form-group">
				<label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(form_error('email') == ''){echo set_value('email');}?>">
            <?php echo '<small class="error">'.form_error('email').'</small>'; ?>
            </div>
            <div class="form-group">
				<label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" >
            <?php echo '<small class="error">'.form_error('password').'</small>'; ?>
            </div>
            <div class="form-group">
				<label>Confirm Password</label>
            <input type="password" class="form-control" name="password2" placeholder="Confirm Password" >
            <?php echo '<small class="error">'.form_error('password2').'</small>'; ?>
            </div>
            <div class="form-group">
				<button type="sumbit" class="btn btn-primary btn-block">Submit</button>
            </div>
</div>
<?php echo form_close(); ?>