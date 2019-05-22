<br>
<br>
<br>
<h1 class="text-center"><?= $title; ?></h1>
<?php if($this->session->flashdata('password_updated')): ?>
        <?php echo '<p class="alert alert-success col-md-3 mx-auto">'.$this->session->flashdata('password_updated').'</p>'; ?>
      <?php endif; ?>

<?php echo form_open('users/edit_password'); ?>
<div class="col-md-3 mx-auto">

    <div class="form-group">
    
        <label>Old Password</label>
        <input type="password" class="form-control" name="old-password" placeholder="Old Password">
        <?php echo '<small class="error">'.form_error('old-password').'</small>'; ?>
    </div>
    <div class="form-group">
        <label>New Password</label>
        <input type="password" class="form-control" name="new-password" placeholder="New Password">
        <?php echo '<small class="error">'.form_error('new-password').'</small>'; ?>
    </div>
    <div class="form-group">
        <label>Repeat New Password</label>
        <input type="password" class="form-control" name="new-password2" placeholder="Repeat New Password">
        <?php echo '<small class="error">'.form_error('new-password2').'</small>'; ?>
    </div>
    <div class="form-group">
        <button type="sumbit" class="btn btn-primary btn-block">Edit Password</button>
    </div>
</div>
<?php echo form_close(); ?> 