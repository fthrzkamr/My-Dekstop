<?php
session_start();
if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit();
}
include_once($_SERVER['DOCUMENT_ROOT'] . '/asset_dfm/config.php');

?>
<!-- Header dan Sidebar -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dua Farma Mahakarsa - Dashboard</title>
    <link rel="icon" href="<?= BASE_URL ?>/assets/img/dua.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<div class="header">
    <div class="header-left">
        <a href="<?= BASE_URL ?>/dashboard.php" class="logo">
            <img src="<?= BASE_URL ?>/assets/img/dua.png" alt="Logo"><span> DUA FARMA MAHAKARSA</span>
        </a>
        <a href="<?= BASE_URL ?>/dashboard.php" class="logo logo-small">
            <img src="<?= BASE_URL ?>/assets/img/dua.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <a href="#" id="toggle_btn"><i class="fas fa-align-left"></i></a>
    <a class="mobile_btn" id="mobile_btn"><i class="fas fa-bars"></i></a>

    <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <!-- <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div> -->
                <div class="topnav-dropdown-footer">
                    <a href="#">View all Notifications</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="<?= BASE_URL ?>/assets/img/profiles/monye.jpg" width="31"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="<?= BASE_URL ?>/assets/img/profiles/monye.jpg" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6><?= htmlspecialchars($_SESSION['nama_user']) ?></h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>
    </ul>
</div>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li><a href="<?= BASE_URL ?>/dashboard.php"><i class="fa-solid fa-house"></i> <span>Dashboard</span></a></li>

                <li class="menu-title"><span>Master Data</span></li>
                <li class="submenu">
                    <a href="#"><i class="fa-brands fa-twitch"></i><span> Master Data</span> <span class="menu-arrow "></span></a>
                    <ul>
                        <li><a href="<?= BASE_URL ?>/master_data/dashboard.php">Dashboard</a></li>
                        <li><a href="<?= BASE_URL ?>/master_data/katge_add.php">Tambah Kategori Asset</a></li>
                        <li><a href="<?= BASE_URL ?>/master_data/lokasi_add.php">Tambah Lokasi Asset</a></li>
                    </ul>
                </li>

                <li class="menu-title"><span>Tanah & Bangunan</span></li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-city"></i><span> Tanah & Bangunan</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="<?= BASE_URL ?>/tanah_bangunan/dashboard.php">Dashboard</a></li>
                    </ul>
                </li>

                <li class="menu-title"><span>Kendaraan</span></li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-motorcycle"></i> <span> Kendaraan</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="<?= BASE_URL ?>/kendaraan/tambah_kndr.php">Dashboard</a></li>
                    </ul>
                </li>

                <li class="menu-title"><span>Komputer & Peralatannya</span></li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-computer"></i><span> Komputer & Peralatannya</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="<?= BASE_URL ?>/komputer/dashboard.php">Dashboard</a></li>
                    </ul>
                </li>

                <li class="menu-title"><span>Peralatan Kantor</span></li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-users"></i><span> Peralatan Kantor</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="<?= BASE_URL ?>/komputer/dashboard.php">Dashboard</a></li>
                    </ul>
                </li>


                <li class="menu-title"><span>Peralatan Gudang</span></li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-warehouse"></i><span> Peralatan Gudang</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="<?= BASE_URL ?>/gudang/dashboard.php">Dashboard</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>