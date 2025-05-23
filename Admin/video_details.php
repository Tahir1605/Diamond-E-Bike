<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Video</title>
    <link rel="stylesheet" href="add_video.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="video_details.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <link rel="stylesheet" href="logout_modal.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->



        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="img/logo/scooter.png">
                </div>
                <div class="sidebar-brand-text mx-3" style="margin-top: 15px;">Diamond
                    <p style="font-size:12px;">E-Bike</p>
                </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active sidebar">
                <div class="bg-dark py-2 rounded operations-menu">
                    <h6 class="collapse-header operations-header">
                        <i class="fas fa-cogs icon"></i> <!-- Added icon for Manage Operations -->
                        <span class="menu-text">Manage Operations</span>
                    </h6>
                    <a class="collapse-item" href="add_scooty_1.php">
                        <i class="fas fa-motorcycle icon"></i><span class="menu-text">Add new scooty</span>
                    </a>
                    <!-- <a class="collapse-item" href="add_toto.html">
                        <i class="fas fa-car icon"></i><span class="menu-text">Add new Toto</span>
                    </a>
                    <a class="collapse-item" href="add_other_products.html">
                        <i class="fas fa-box icon"></i><span class="menu-text">Add Other Products</span>
                    </a> -->
                    <a class="collapse-item" href="query.php">
                        <i class="fas fa-question-circle icon"></i><span class="menu-text">Queries</span>
                    </a>
                    <a class="collapse-item" href="review.php">
                        <i class="fas fa-comments icon"></i><span class="menu-text">Reviews</span>
                    </a>
                    <a class="collapse-item" href="contact.php">
                        <i class="fas fa-envelope icon"></i><span class="menu-text">Contact</span>
                    </a>
                    <a class="collapse-item" href="add_video.php">
                        <i class="fas fa-video icon"></i><span class="menu-text">Add video</span>
                    </a>
                </div>
            </li>
        </ul>

        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small"><?php echo $_SESSION["hello"] ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profiles.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);" onclick="showLogoutModal();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                  </a>  
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->
                <!-- Container Fluid -->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Video</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item">Operations</li>
                            <li class="breadcrumb-item active" aria-current="page">Video</li>
                        </ol>
                    </div>





                    <?php include("video_details-1.php"); ?>





                    <!-- Modal Logout -->
                    <div class="modal" id="logoutModal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal()"></span>
                            <h2>Confirm Logout </h2>
                            <p>Are you sure you want to logout?</p>
                            <div class="modal-buttons">
                                <button class="btn-confirm" onclick="confirmLogout()">Logout</button>
                                <button class="btn-cancel" onclick="hideLogoutModal()">Cancel</button>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Container Fluid -->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy;
                            <script> document.write(new Date().getFullYear()); </script> - developed by <b><a
                                    href="https://github.com/Tahir1605" target="_blank">Tahirul islam</a></b>
                        </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    <script src="js/index.js"></script>
    <script>
        function showFileName() {
            const fileInput = document.getElementById('video');
            const fileName = document.getElementById('file-name');

            if (fileInput.files.length > 0) {
                fileName.textContent = fileInput.files[0].name;
            } else {
                fileName.textContent = "Choose a video";
            }
        }

    </script>


    <script src="my_js/logout_modal.js"></script>
</body>

</html>