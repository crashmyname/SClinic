<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Clinic Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= asset('stisla-1-2.2.0/dist/assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('stisla-1-2.2.0/dist/assets/modules/fontawesome/css/all.min.css') ?>">
    <link rel="stylesheet"
        href="<?= $_ENV['ROUTE_PREFIX'] . '/node_modules/bootstrap-icons/font/bootstrap-icons.min.css' ?>">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= asset('stisla-1-2.2.0/dist/assets/modules/jqvmap/dist/jqvmap.min.css') ?>">
    <link rel="stylesheet"
        href="<?= asset('stisla-1-2.2.0/dist/assets/modules/weather-icon/css/weather-icons.min.css') ?>">
    <link rel="stylesheet"
        href="<?= asset('stisla-1-2.2.0/dist/assets/modules/weather-icon/css/weather-icons-wind.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('stisla-1-2.2.0/dist/assets/modules/summernote/summernote-bs4.css') ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= asset('stisla-1-2.2.0/dist/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= asset('stisla-1-2.2.0/dist/assets/css/components.css') ?>">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                    <div class="search-element">

                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= asset('stisla-1-2.2.0/dist/assets/img/avatar/avatar-1.png') ?>"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Clinic Apps</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">CA</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MENU</li>
                        <li><a class="nav-link" href="<?= $_ENV['ROUTE_PREFIX'] ?>/"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-columns"></i> <span>Master Data</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= $_ENV['ROUTE_PREFIX'] ?>/obat"><i
                                            class="bi bi-capsule"></i>Data Obat</a></li>
                                <li><a class="nav-link" href="<?= $_ENV['ROUTE_PREFIX'] ?>/alat"><i
                                            class="bi bi-gear-wide-connected"></i>Data Alat</a></li>
                                <li><a class="nav-link" href="<?= $_ENV['ROUTE_PREFIX'] ?>/user"><i
                                            class="bi bi-person-plus-fill"></i>Data User</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Data HW</span></a>
                        </li>
                        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Data Permintaan
                                    Obat</span></a></li>
                        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Excess
                                    Data</span></a></li>
                        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Data Peminjaman
                                    Alat</span></a></li>
                        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Karyawan
                                    Istirahat</span></a></li>
                        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Data
                                    MCU</span></a></li>
                        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Rekam
                                    Medis</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                                <span>Report</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
                                <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
                                <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                                <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
                            </ul>
                        </li>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <?= $content ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2023 <div class="bullet"></div> Develop By <a
                        href="mailto:fadliazkaprayogi1@gmail.com&subject=Buat Aplikasi&body=Dear Fadly, %0A %0A
          Saya ingin membuat aplikasi apakah kamu bersedia? %0A %0A
          Nama : %0A %0A
          Terima kasih %0A
          ">Fadli
                        Azka Prayogi</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/jquery.min.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/popper.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/tooltip.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/moment.min.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/js/stisla.js') ?>"></script>

    <!-- JS Libraies -->
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/chart.min.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/summernote/summernote-bs4.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') ?>"></script>

    <!-- Page Specific JS File -->
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/js/page/index-0.js') ?>"></script>

    <!-- Template JS File -->
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/js/scripts.js') ?>"></script>
    <script src="<?= asset('stisla-1-2.2.0/dist/assets/js/custom.js') ?>"></script>
</body>

</html>
