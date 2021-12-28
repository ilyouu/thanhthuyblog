<header class="header_area">

    <section class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <a href="?page=trangchu">
                            <img src="public/img/thanhthuyblog.png" alt="thanh thuy blog">
                        </a>
                    </div>
                </div>
            </div> <!-- row end -->
        </div> <!-- container end -->
    </section> <!-- header_top section end -->

    <section class="header_bottom">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-7">

                    <div class="mainmenu">

                         <!-- navbar-header end -->

                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">

                                <?php $page = isset($_GET['page']) ? $_GET['page'] : ""; ?>

                                <li <?php if($page == 'trangchu'){ ?> class="active" <?php } ?>>
                                    <a href="?page=trangchu">Trang chủ<i class="fa fa-angle-right submenu_up"></i></a>
                                </li>
                                <li <?php if($page == 'blog' || $page == ''){ ?> class="active" <?php } ?>>
                                    <a href="?page=blog">Blog</a>
                                </li>
                                <li <?php if($page == 'gioithieu'){ ?> class="active" <?php } ?>>
                                    <a href="?page=gioithieu">Giới thiệu về mình</a>
                                </li>
                                <li <?php if($page == 'lienhe'){ ?> class="active" <?php } ?>>
                                    <a href="?page=lienhe">Liên hệ</a>
                                </li>
                            </ul>
                        </div><!-- navbar-collapse end -->

                    </div> <!-- mainmenu end -->

                </div>

                <div class="col-md-4 col-sm-5">
                    <div class="header_social_icon">
                        <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-facebook" style="color: #0d6efd"></i></a>
                        <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-twitter" style="color: #0dcaf0"></i></a>
                        <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-google-plus" style="color: #dc3545"></i></a>
                        <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-tumblr" style="color:#2c0073"></i></a>
                        <form action="#" method="post">
                            <input type="search" placeholder="Tìm kiếm">
                        </form>
                    </div>
                </div>

            </div> <!-- row end -->
        </div> <!-- container end -->
    </section> <!-- header_bottom section end -->

</header>