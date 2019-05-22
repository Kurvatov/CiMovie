<br>
<br>
<br>

<h2 class="page-title"><?=$title ?></h2>
<?php echo form_open_multipart('management/addmovie'); ?>
<div class="col-md-5 mx-auto">
    
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title">
        <?php echo '<small class="error">' . form_error('title') . '</small>'; ?>
    </div>
    <div class="form-group">
        <label>Rating</label>
        <input type="text" class="form-control" name="rating" placeholder="Rating">
        <?php echo '<small class="error">' . form_error('rating') . '</small>'; ?>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" placeholder="Description"></textarea>
        <?php echo '<small class="error">' . form_error('description') . '</small>'; ?>
    </div>
    <div class="form-group">
        <label>Upload Image</label><br>
        <input type="file" name="userfile" size="20">
    </div>
    <div class="form-button">
        <button type="sumbit" class="btn btn-primary btn-block">Add Movie</button>
    </div>
</div>

<?php echo form_close(); ?>