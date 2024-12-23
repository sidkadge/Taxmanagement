<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/app.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/components.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href="<?= base_url() ?>public/assets/img/favicon.ico' />
    <link rel=" stylesheet" href="<?= base_url() ?>public/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet"
        href="<?= base_url() ?>public/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

</head>
<style>
/* Style for required field labels */
label.error {
    color: red;
}

.flash-success {
    background-color: #4caf50;
    /* Green */
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    margin-bottom: 10px;
}

/* Styling for flash error message */
.toast.toast-error {
    background-color: #f44336;
    /* Red */
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    margin-bottom: 10px;
}

/* Positioning for flash error message */
.toast-top-right {
    top: 20px;
    right: 20px;
    position: fixed;
    z-index: 9999;
}
</style>

<body>

    <?php
    $uri = new \CodeIgniter\HTTP\URI(current_url(true));
    $pages = $uri->getSegments();
    $page = $uri->getSegment(count($pages));

// echo "<pre>"; print_r($page);exit();
?>
   
    <div id="flash-success-container">
        <?php if (session()->has("success")): ?>
        <div class="flash-success">
            <?= session("success") ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if (session()->has("error")): ?>

    <div id="toast-container" class="toast-top-right">
        <div class="toast toast-error" aria-live="assertive" style="">
            <div class="toast-message">
                <?= session("error") ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                      
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
               
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="<?= base_url() ?>public/assets/img/users/user1.png" class="user-img-radious-style">
                            <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">


                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url() ?>logout" class="dropdown-item has-icon text-danger"> <i
                                    class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">

                    <div class="sidebar-brand">
                    <a href="<?php echo base_url(); ?>AdminDashboard">
                            <img alt="image" src="<?= base_url() ?>public/assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Tax MGT</span>
                        </a>
                    </div>

                    <ul class="sidebar-menu">

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Masters</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url() ?>adduser">Add User</a></li>
                                 <li><a class="nav-link" href="<?= base_url() ?>addzones">Add Zone</a></li>
                                 <li><a class="nav-link" href="<?= base_url() ?>userlist">User List</a></li>   
                            </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown" ><i data-feather="layout"></i><span>Product</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url() ?>addproduct">Add Product</a></li>
                                <li><a class="nav-link" href="<?= base_url() ?>productlist">Product List</a></li>
                            </ul>
                        </li>
                      ]
                      
                    </ul>
                </aside>
            </div>