<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Thanh Thùy Blog</title>

    <link rel="shortcut icon" type="image/png" href="../public/img/icon-logo.png">

    <link href="public/css/./sb-admin-2.min.css" rel="stylesheet" type="text/css">
    <script src="public/vendor/jquery/jquery.min.js"></script>

    <!-- summernote-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- Data table -->
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <style>
    .initialism {
        font-size: 90%;
        text-transform: uppercase
    }

    blockquote {
        padding: 10px 20px;
        margin: 0 0 20px;
        font-size: 17.5px;
        border-left: 5px solid #eee
    }

    blockquote ol:last-child,
    blockquote p:last-child,
    blockquote ul:last-child {
        margin-bottom: 0
    }

    blockquote .small,
    blockquote footer,
    blockquote small {
        display: block;
        font-size: 80%;
        line-height: 1.42857143;
        color: #777
    }

    blockquote .small:before,
    blockquote footer:before,
    blockquote small:before {
        content: "\2014 \00A0"
    }

    .blockquote-reverse,
    blockquote.pull-right {
        padding-right: 15px;
        padding-left: 0;
        text-align: right;
        border-right: 5px solid #eee;
        border-left: 0
    }

    .blockquote-reverse .small:before,
    .blockquote-reverse footer:before,
    .blockquote-reverse small:before,
    blockquote.pull-right .small:before,
    blockquote.pull-right footer:before,
    blockquote.pull-right small:before {
        content: ""
    }

    .blockquote-reverse .small:after,
    .blockquote-reverse footer:after,
    .blockquote-reverse small:after,
    blockquote.pull-right .small:after,
    blockquote.pull-right footer:after,
    blockquote {}
    </style>

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once('menu.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php require_once('header.php') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <?php
                $mod = isset($_GET['mod']) ? $_GET['mod'] : "trangchu";
                echo "Database " . $mod;
                ?>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                $mod = isset($_GET['mod']) ? $_GET['mod'] : "trangchu";
                $act = isset($_GET['act']) ? $_GET['act'] : "list";
                switch ($mod) {
                  case 'baiviet':
                  switch ($act) {
                    case 'list':
                    require_once('MVC/views/baiviet/list.php');
                    break;
                    case 'add':
                    require_once('MVC/views/baiviet/add.php');
                    break;
                    case 'detail':
                    require_once('MVC/views/baiviet/detail.php');
                    break;
                    case 'edit':
                    require_once('MVC/views/baiviet/edit.php');
                    break;
                    default:
                    require_once('MVC/views/baiviet/list.php');
                    break;
                  }
                  break;

                  case 'tag':
                    switch ($act) {
                      case 'list':
                      require_once('MVC/views/tag/list.php');
                      break;
                      case 'add':
                      require_once('MVC/views/tag/add.php');
                      break;
                      case 'edit':
                      require_once('MVC/views/tag/edit.php');
                      break;
                      default:
                      require_once('MVC/views/tag/list.php');
                      break;
                    }
                    break;

                  case 'gioithieu':
                  switch ($act) {
                    case 'list':
                    require_once('MVC/views/gioithieu/list.php');
                    break;
                    case 'add':
                    require_once('MVC/views/gioithieu/add.php');
                    break;
                    case 'detail':
                    require_once('MVC/views/gioithieu/detail.php');
                    break;
                    case 'edit':
                    require_once('MVC/views/gioithieu/edit.php');
                    break;
                    default:
                    require_once('MVC/views/gioithieu/list.php');
                    break;
                  }
                  break;

                  
                  case 'banner':
                  switch ($act) {
                    case 'list':
                    require_once('MVC/views/banner/list.php');
                    break;
                    case 'add':
                    require_once('MVC/views/banner/add.php');
                    break;
                    case 'detail':
                    require_once('MVC/views/banner/detail.php');
                    break;
                    case 'edit':
                    require_once('MVC/views/banner/edit.php');
                    break;
                    default:
                    require_once('MVC/views/banner/list.php');
                    break;
                  }
                  break;
                  
                  case 'trangchu':
                  switch ($act) {
                    case 'list':
                    require_once('MVC/Views/trangchu/trangchu.php');
                    break;
                    default:
                    require_once('MVC/Views/trangchu/trangchu.php');
                    break;
                  }
                  break;
                  
                }
                
                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

            <!-- End of Main Content -->
            <?php require_once('footer.php') ?>



            
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js">
            </script>
            <!-- Bootstrap core JavaScript-->
            <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <!-- <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script> -->

            <!-- Custom scripts for all pages-->
            <script src="public/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="public/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="public/js/demo/chart-area-demo.js"></script>
            <script src="public/js/demo/chart-pie-demo.js"></script>

</body>

</html>