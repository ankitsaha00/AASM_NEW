
<?php
 require_once("../../OOP_CLASS/db-connect/connect.php");
 require_once("../../OOP_CLASS/class/common_class.php");
 require_once("../../OOP_CLASS/function/function.php");
 $server=new Main_Class();
 $server->session_private();
 ?>
<!doctype html>
<html lang="en">


<!-- Mirrored from creatantech.com/demos/codervent/syndron/vertical/public/form-select2 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 20:40:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="../../assets/Admin/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
		<link href="../../assets/Admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="../../assets/Admin/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
		<link href="../../assets/Admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../../assets/Admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../../assets/Admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../../assets/Admin/assets/css/pace.min.css" rel="stylesheet" />
	<script src="../../assets/Admin/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="../../assets/Admin/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/Admin/assets/css/app.css" rel="stylesheet">
	<link href="../../assets/Admin/assets/css/icons.css" rel="stylesheet">

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="../../assets/Admin/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="../../assets/Admin/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="../../assets/Admin/assets/css/header-colors.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="../../assets/Admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    

    <title>AASM Admin </title>
    <style>
     .error{
      color: red;
    }
  </style>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--start header -->
		<!--start header wrapper-->
    <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1" style="background-color: #edf0f5;">
                        <div class="position-relative search-bar-box">
                          <h2 style="text-align: center; font-size:27px; font-family: 'Ubuntu', sans-serif; margin-left:130px;">AASM Admin Panel</h2>
                        </div>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-notifications-list">
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-message-list">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../../assets/Admin/assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0"><?php echo $_SESSION['admin_Name']; ?></p>
                                <p class="designattion mb-0">Admin</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="profile.php"><i class='bx bx-home-circle'></i><span>Change Password</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" onclick="Logout()"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    <!--end header -->