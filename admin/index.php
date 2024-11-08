<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);
require_once "layout/header.php";
require_once "layout/sidebar.php";
?>
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../images/LogoVn1.png" alt="AdminLTELogo" height="60" width="60">
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
        <?php require_once "config/router.php"; ?>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php require_once "layout/mainfooter.php"; ?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<?php require_once "layout/footer.php"; ?>