<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?> - Dashboard</title>
    <meta name="description" content="System Informasi Pertanian Bangka Belitung">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sarmuni, S.Kom | 085711899949">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/template_neura/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url(); ?>assets/template_neura/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="<?= base_url(); ?>assets/template_neura/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>assets/template_neura/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/template_neura/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/template_neura/plugins/datatables/datatables.min.css" />
    <link href="<?= base_url(); ?>assets/template_neura/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- END CSS for this page -->
</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="" class="logo">
                    <img alt="Logo" src="<?= base_url(); ?>assets/template_neura/images/logo.png" />
                    <span>Antaran Logistik</span>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">12</span>Mailbox</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Doe</b>
                                    <span>New message received</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>Michael Smith</b>
                                    <span>New message received</span>
                                    <small class="text-muted">18 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Lenons</b>
                                    <span>New message received</span>
                                    <small class="text-muted">Yesterday, 18:27</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="mail-all.html" class="dropdown-item notify-item notify-all">
                                View All Messages
                            </a>

                        </div>

                    </li>

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="<?= base_url(); ?>assets/template_neura/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>John Doe</b>
                                    <span>User registration</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="<?= base_url(); ?>assets/template_neura/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michael Cox</b>
                                    <span>Task 2 completed</span>
                                    <small class="text-muted">12 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="<?= base_url(); ?>assets/template_neura/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michelle Dolores</b>
                                    <span>New job completed</span>
                                    <small class="text-muted">35 minutes ago</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="#" class="dropdown-item notify-item notify-all">
                                View All Allerts
                            </a>

                        </div>
                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-sm">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>Settings</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 1</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 2</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 3</b>
                                </p>
                            </a>

                        </div>

                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <img src="<?= base_url(); ?>assets/template_neura/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small>Hello, <?php echo $user['fullname']; ?></small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="<?= base_url('account_user/profile'); ?>" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item notify-item tombol-logout">
                                <i class="fas fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar Menu-->
        <?php include_once "menu_sidebar.php"; ?>
        <!-- End Sidebar Menu-->

        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Dashboard</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active"><?php echo $title; ?></li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>

                            <!-- <div class="alert alert-warning">
                                <h6 class="mb-3">You can use the <b>free versions</b> in your personal or commercial projects as long as you keep our footer link and text ("Powered by Bootstrap24.com") in ALL admin template files.</h6>
                                <h5>Advantages for PRO / EXTENDED version:</h5>

                                <h6 class="mb-3 text-success">
                                    - Get for FREE dynamic version (PHP version) and save over 50 hours of work. <br>
                                    - You can remove footer "powered by" credits and add your own company copyright details. <br>
                                    - With Pro and Extended version you have free support via support tickets. 
                                </h6>
                                <a class="btn btn-success" href="pro.html">More info</a>
                            </div> -->

                        </div>
                    </div>
                    <!-- end row -->


                    <!-- Dhasboard -->

                    <!-- End Dhasboard -->
                    <?php echo $contents; ?>


                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <footer class="footer">
            <span class="text-right">
                Copyright @ <?php echo date('Y'); ?> <a target="_blank" href="#">PT. Antaran Logistik</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                <!-- Powered by <a target="_blank" href="https://bootstrap24.com" title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a> -->
                Rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  ' Version <strong>' . CI_VERSION . '</strong>' : '' ?>
            </span>
        </footer>

        <script src="<?= base_url(); ?>assets/template_neura/js/modernizr.min.js"></script>
        <script src="<?= base_url(); ?>assets/template_neura/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/template_neura/js/moment.min.js"></script>

        <script src="<?= base_url(); ?>assets/template_neura/js/popper.min.js"></script>
        <script src="<?= base_url(); ?>assets/template_neura/js/bootstrap.min.js"></script>

        <script src="<?= base_url(); ?>assets/template_neura/js/detect.js"></script>
        <script src="<?= base_url(); ?>assets/template_neura/js/fastclick.js"></script>
        <script src="<?= base_url(); ?>assets/template_neura/js/jquery.blockUI.js"></script>
        <script src="<?= base_url(); ?>assets/template_neura/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="<?= base_url(); ?>assets/template_neura/js/admin.js"></script>

    </div>
    <!-- END main -->

    <!-- BEGIN Java Script for this page -->
    <script src="<?= base_url(); ?>assets/template_neura/plugins/chart.js/Chart.min.js"></script>
    <script src="<?= base_url(); ?>assets/template_neura/plugins/datatables/datatables.min.js"></script>

    <!-- Counter-Up-->
    <script src="<?= base_url(); ?>assets/template_neura/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?= base_url(); ?>assets/template_neura/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- dataTabled data -->
    <script src="<?= base_url(); ?>assets/template_neura/data/data_datatables.js"></script>

    <!-- Charts data -->
    <script src="<?= base_url(); ?>assets/template_neura/data/data_charts_dashboard.js"></script>
    <script src="<?= base_url(); ?>assets/template_neura/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/myscript.js"></script>
    <!-- BEGIN Java Script for this page -->
    <script src="<?= base_url(); ?>assets/template_neura/plugins/select2/js/select2.min.js"></script>

    <!-- END Java Script for this page -->
    <script>
        $(document).on('ready', function() {
            // data-tables
            $('#dataTable').DataTable();

            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        });
        $(document).on('ready', function() {
            $('.select2').select2();
        });
    </script>
    <!-- END Java Script for this page -->


    <script type="text/javascript">
        $(function() {

            $.ajaxSetup({
                type: "POST",
                url: "<?php echo base_url('pelanggan/ambil_data'); ?>",
                cache: false,
            });

            $("#provinsi").change(function() {

                var value = $(this).val();
                if (value > 0) {
                    $.ajax({
                        data: {
                            modul: 'kabupaten',
                            id: value
                        },
                        success: function(respond) {
                            $("#kabupaten-kota").html(respond);
                        }
                    })
                }

            });


            $("#kabupaten-kota").change(function() {
                var value = $(this).val();
                if (value > 0) {
                    $.ajax({
                        data: {
                            modul: 'kecamatan',
                            id: value
                        },
                        success: function(respond) {
                            $("#kecamatan").html(respond);
                        }
                    })
                }
            });

            $("#kecamatan").change(function() {
                var value = $(this).val();
                if (value > 0) {
                    $.ajax({
                        data: {
                            modul: 'kelurahan',
                            id: value
                        },
                        success: function(respond) {
                            $("#kelurahan-desa").html(respond);
                        }
                    })
                }
            });
        });
    </script>

    <script>
        $(function() {

            $.ajaxSetup({
                type: "POST",
                url: "<?php echo base_url('pelanggan/ambil_data_barang'); ?>",
                cache: false,
            });

            $("#nama_barang").change(function() {

                var value = $(this).val();
                if (value > 0) {
                    $.ajax({
                        data: {
                            modul1: 'id_barang',
                            id: value
                        },
                        success: function(respond) {
                            $("#id_barang").html(respond);
                        }
                    })
                }

            });

        });
    </script>

</body>

</html>