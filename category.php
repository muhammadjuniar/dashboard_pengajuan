<?php 
    include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-content scroll-div">
                
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image" />
                        <div class="user-details">
                            <span>User</span>
                            <div id="more-details">Jabatan<i class="fa fa-chevron-down m-l-5"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-unstyled">
                            <li class="list-group-item">
                                <a href="auth-normal-sign-in.html">
                                    <i class="feather icon-log-out m-r-5"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="category.html" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-edit"></i></span><span class="pcoded-mtext">Buat Baru</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="assets/images/logo-rabbani.png" alt="" class="logo-rabbani">
                <img src="assets/images/logo-icon.png" alt="" class="logo-thumb" />
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Kategori Pengajuan</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Kategori</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- table card-1 start -->
                <?php 
                    $query = "SELECT * FROM tipe_main";
                    $res = mysqli_query($connect,$query);
                    if(mysqli_num_rows($res)>0){
                ?>
                <?php while($data = mysqli_fetch_array($res)){ ?>
                <div class="col-md-12 col-xl-6">
                    <!-- widget primary card start -->
                    <a class="category-wrapper btn mb-2 ml-5" data-toggle="collapse" href="#<?php echo $data["tipe_main_name"] ?>" role="button"
                        aria-expanded="false" aria-controls="<?php echo $data["tipe_main_name"] ?>">
                        <div class="col-sm-2 icon">
                            <?php echo $data["icon"] ?>
                        </div>
                        <div class="col-sm-7 content">
                            <div class="text"><?php echo $data["tipe_main_name"] ?></div>
                        </div>
                    </a>
                    <div class="row mb-2 ml-5">
                        <div class="col-sm-8">
                            <div class="collapse multi-collapse mt-2" id="<?php echo $data["tipe_main_name"] ?>">
                                <div class="category-card">
                                    <div class="category-card-body">         
                                        <?php 
                                            $querysub = "SELECT * FROM tipe_main m JOIN tipe_sub s ON m.tipe_main_id=s.tipe_main_id WHERE m.tipe_main_id=s.tipe_main_id";
                                            $ressub = mysqli_query($connect,$querysub);
                                        ?>
                                        <?php foreach($ressub as $rsb  => $mainsub) : ?>
                                        <div class="sub-category" data-toggle="collapse" href="#inventaris"
                                            role="button" aria-expanded="false" aria-controls="inventaris">
                                            <?php echo $mainsub["tipe_sub_name"] ?>
                                        </div>
                                        <div class="collapse multi-collapse mt-2" id="inventaris">
                                            <div class="category-card">
                                                <div class="category-card-body">
                                                    <?php 
                                                        $querysubsub = "SELECT * FROM tipe_sub s JOIN tipe_sub_sub n ON s.tipe_sub_id=n.tipe_sub_id WHERE s.tipe_sub_id=n.tipe_sub_id";
                                                        $ressubsub = mysqli_query($connect,$querysubsub);
                                                        if(mysqli_num_rows($ressubsub)>0){
                                                    ?>
                                                    <?php while($datasubsub = mysqli_fetch_array($ressubsub)){ ?>
                                                    <a href="forms/form_pembelian_inventaris_baru.html">
                                                        <div class="sub-sub-category"><?php echo $datasubsub['tipe_sub_sub_name'] ?></div>
                                                    </a>
                                                    <?php }} ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                        <!-- <a href="forms/form_pembelian_non_inventaris.html">
                                            <div class="sub-category">NON INVENTARIS</div>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget primary card end -->
                </div>
                <?php }} ?>
                <!-- table card-1 end -->
            </div>
            <!-- table card-1 end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="assets/js/plugins/apexcharts.min.js"></script>

    <!-- custom-chart js -->
    <script src="assets/js/pages/dashboard-main.js"></script>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>