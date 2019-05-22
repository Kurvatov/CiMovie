<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css'); ?>">

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/index.js"></script>
</head>

<body>
    <?php if ($title == 'Home') : ?>
        <nav class="navbar navbar-expand-sm" id="mynavbar-transparent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ciMovie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>movies">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>series">Series</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <?php if (empty($this->session->userdata('logged_in'))) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
                    </li>
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in') === true) : ?>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="btn-drop">
                            <i class="fas fa-user"></i> <?php echo $this->session->userdata('name'); ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>management/addmovie"><i class="fas fa-plus"></i> Add Movie</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>management/addserie"><i class="fas fa-plus"></i> Add Serie</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>users/edit_password"><i class="fas fa-key"></i> Edit Password</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>users/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </div>
                <?php endif; ?>
            </ul>
        </nav>
    <?php endif; ?>
    <?php if ($title != 'Home') : ?>
        <nav class="navbar navbar-expand-sm" id="mynavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ciMovie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>movies">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>series">Series</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <?php if (empty($this->session->userdata('logged_in'))) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
                    </li>
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in')) : ?>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="btn-drop">
                            <i class="fas fa-user"></i> <?php echo $this->session->userdata('name'); ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>management/addmovie"><i class="fas fa-plus"></i> Add Movie</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>management/addserie"><i class="fas fa-plus"></i> Add Serie</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>users/edit_password"><i class="fas fa-key"></i> Edit Password</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>users/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </div>
                <?php endif; ?>
            </ul>
        </nav>
    <?php endif; ?>