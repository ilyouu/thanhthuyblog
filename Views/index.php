<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="description" content="">

    <!-- site title -->
    <title><?php if($titleweb['titleweb'] != ''){echo $titleweb['titleweb'].' | ';} ?>Thanh Thùy Blog</title>

    <!-- necessary for mobile device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--================================================
                            **** CSS ****
        ==================================================-->

    <!--fonts-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- et line icon -->
    <link rel="stylesheet" href="css/et_line.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- animate.css -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- owl_carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- venobox -->
    <link rel="stylesheet" href="css/venobox.css">

    <!--custom-->
    <link rel="stylesheet" href="css/style.css">

    <!-- fevicon -->
    <link rel="shortcut icon" type="image/png" href="public/img/icon-logo.png">

</head>

<body class="index_five">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- this code is for preloader -->
    <div id="preloader">
        <div class="preloader_spinner"> </div>
    </div>


    <!-- ======================= header_area start ========================== -->
    <?php require_once("views/header.php") ?>
    <!-- ======================= header_area end ========================== -->

    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : "trangchu";
        $blog = isset($_GET['blog']) ? $_GET['blog'] : 0;
        if($page == 'blog' && $blog == 0){
            require_once("views/blog.php");
        } else {
    ?>

    <!-- ======================= main_wrapper start ======================= -->
    <section class="main_wrapper section_padding">
        <div class="container">
            <div class="row">

                <!-- this code is for blog_left_content -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <!-- blog_left_content start -->
                    <?php
                        if($blog == 0) {
                            switch ($page) {
                                case 'trangchu':
                                    if($blog == 0) require_once("views/trangchu.php");
                                break;
                                case 'gioithieu':
                                    require_once("views/gioithieu.php");
                                break;
                                case 'lienhe':
                                    require_once("views/lienhe.php");
                                break;
                            }  
                        } else {
                            require_once("views/single-blog.php");
                        }
                    ?>
                    <!-- blog_left_content end -->
                </div> <!-- col-md-8 end -->


                <!-- ********** this code is for blog_right_content ********** -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <?php require_once("views/right-content.php") ?>
                </div> <!-- col-md-4 end -->


            </div> <!-- row end -->
        </div> <!-- container end -->
    </section>
    <!-- ======================= main_wrapper end ========================== -->

    <?php } ?>


    <div class="scroll" style="position:fixed; right:20px; bottom:20px">
        <div class="scroll_top">
            <i class="fa fa-angle-up"></i>
        </div> <!-- scroll_top end -->
    </div>

    <!-- ======================= footer_area start =================== -->
    <?php require_once("views/footer.php"); ?>

    <!-- ======================= footer end ========================== -->


    <!--===============================================
                      **** JS ****
    ================================================-->

    <!-- jquery necessary for all plug in -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- owl_carousel -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- venobox -->
    <script src="js/venobox.min.js"></script>

    <!-- instafeed -->
    <script src="js/instafeed.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- custom -->
    <script src="js/main.js"></script>

</body>

</html>