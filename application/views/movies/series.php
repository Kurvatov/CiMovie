<br>
<br>
<br>
<h2 class="page-title"><?=$title; ?></h2>
<div class="container">
<div class="row p-0 m-0 first-row bg-secondary">
    <div class="col-md-1 border d-flex align-items-center justify-content-center font-weight-bold">#</div>
    <div class="col-md-2 border d-flex align-items-center justify-content-center font-weight-bold">Image</div>
    <div class="col-md-2 border d-flex align-items-center justify-content-center font-weight-bold">Title</div>
    <div class="col-md-5 border d-flex align-items-center justify-content-center font-weight-bold">Description</div>
    <div class="col-md-1 border d-flex align-items-center justify-content-center font-weight-bold">Rating</div>
    <div class="col-md-1 border d-flex align-items-center justify-content-center font-weight-bold">Update</div>

</div>




<?php
$counter = 0;
foreach ($series as $serie) :
    ?>
    <div class="row p-0 m-0">
        <div class="col-md-1 border d-flex align-items-center justify-content-center id-series"><?php echo $serie['id']; ?></div>
        <div class="col-md-2 border d-flex align-items-center justify-content-center"><img class="post-thumb" src="<?php echo site_url(); ?>assets/images/<?php echo $serie['img']; ?>"></div>
        <div class="col-md-2 border d-flex align-items-center justify-content-center title-series"><?php echo $serie['title']; ?></div>
        <div class="col-md-5 border d-flex align-items-center justify-content-center body-series"><?php echo $serie['body']; ?></div>
        <div class="col-md-1 border d-flex align-items-center justify-content-center "><span class="rating-series"><?php echo $serie['rating']; ?></span>/10<i class="fa fa-star"></i></div>
        <div class="col-md-1 border d-flex align-items-center justify-content-center">
        <?php if($this->session->userdata('logged_in')):?>
            <div class="button-container">
            <button class="btn btn-success edit-serie mx-auto d-block" value="<?php echo $counter ?>" data-toggle="modal" data-target="#myModal">Edit</button> <br>
            <?php echo form_open('management/delete_serie/'.$serie['id']);?>
                <button type="submit" class="btn btn-danger mx-auto d-block" >Delete</button>
            </form>
        </div>
<?php endif; ?>
        <?php if(empty($this->session->userdata('logged_in'))):?>
            <a href="<?php echo base_url(); ?>users/login">
            <button class="btn btn-primary mx-auto d-block" >Login</button></a>
        <?php endif?>
        </div>
    </div>
    <?php $counter++; ?>
<?php endforeach; ?>
</div>
<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal " id="myModal">
    <div class="modal-dialog">
        <div class="modal-content rounded-0 border-0 shadow-light">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title ml-3">Edit Serie</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <?php echo form_open('management/update_series'); ?>
            <div class="modal-body">
                <input type="hidden" name="id_serie" id="id_serie">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="titulo_serie" id="titulo_serie">
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <input type="text" class="form-control" name="aval_serie" id="aval_serie" >
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="descricao_serie" id="descricao_serie" rows="7"></textarea>
                </div>
                <div class="form-button">
                    <button type="sumbit" class="btn btn-primary btn-block">Edit Serie</button>
                </div>
            </div>
</form>


        </div>
    </div>
</div>
