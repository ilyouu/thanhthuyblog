<div class="blog_right_content">

    <?php foreach ($gioithieus as $gioithieu) { ?>
    <div class="single_widget widget_padding_botttm">
        <div class="single_widget_content">
            <h3 class="widget_headings">Giới thiệu về mình</h3>
            <a href="?page=gioithieu"><img src="public/<?=$gioithieu['HinhAnh1']?>" alt="<?php echo strip_tags($gioithieu['GioiThieuNgan']);?>"></a>
            <div class="single_widget_about">
                <?=$gioithieu['GioiThieuNgan']?>
                <div class="about_social">
                    <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-facebook"
                            style="color: #0d6efd"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-twitter"
                            style="color: #0dcaf0"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-google-plus"
                            style="color: #dc3545"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-linkedin"
                            style="color:#2c0073"></i></a>
                </div>
            </div> <!-- single_widget_about end -->
        </div> <!-- single_widget_content end -->
    </div> <!-- single_widget end -->

    <?php } ?>

    <div class="single_widget widget_padding_botttm">
        <div class="single_widget_content">
            <h3 class="widget_headings">Tìm kiếm</h3>
            <div class="single_widget_form fix">
                <form action="#" method="post">
                    <input type="search" placeholder="Tìm kiếm">
                </form>
                <a href="#"><i class="fa fa-search"></i></a>
            </div>
        </div> <!-- single_widget_content end -->
    </div> <!-- singel_widget end -->


    <div class="single_widget widget_padding_botttm">
        <div class="single_widget_content">
            <h3 class="widget_headings">Chủ đề</h3>
            <div class="single_widget_catagories fix">
                <ul>
                    <?php foreach ($tags as $tag) { ?>
                    <li><a href=""><span class="catogorie_name"><?=$tag['TenTag']?></span><span
                                class="catagorie_count"><?php echo(rand(0,12)) ?></span></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div> <!-- single_widget_content end -->
    </div> <!-- singel_widget end -->


    <div class="single_widget widget_padding_botttm">
        <div class="single_widget_content">
            <div class="singel_widget_tab">

                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#product_1" data-toggle="tab">Nổi bật</a></li>
                    <li><a href="#product_2" data-toggle="tab">Bình luận</a></li>
                    <li><a href="#product_3" data-toggle="tab">Tags</a></li>
                </ul>

                <div class="product_list_wrapper tab-content">

                    <div class="product_list tab-pane active fade in" id="product_1">
                        <?php foreach ($right3blogs as $right3blog) { ?>
                        <div class="single_product_list fix">
                            
                            <a href="?blog=<?=$right3blog['MaBaiViet']?>"><div class="f_left" style="background-image: url('public/<?=$right3blog['HinhAnh']?>'); width:70px; height:70px; background-size: cover;"></div></a>
                            <p class="sub_widget_headings"><a
                                    href="?blog=<?=$right3blog['MaBaiViet']?>"><?=$right3blog['TieuDe']?></a>
                                <span><i class="icon-calendar "></i><?=$right3blog['NgayCapNhat']?></span>
                            </p>
                        </div> <!-- single_product_list end -->
                        <?php } ?>
                    </div> <!-- product_list end -->

                    <div class="product_list tab-pane fade" id="product_2">
                        <?php foreach ($right3comments as $right3comment) { ?>
                        <div class="single_product_list fix">
                            <a href="?blog=<?=$right3comment['MaBaiViet']?>"><div class="f_left" style="background-image: url('public/<?=$right3comment['HinhAnh']?>'); width:70px; height:70px; background-size: cover;"></div></a>
                            <p class="sub_widget_headings"><a
                                    href="?blog=<?=$right3comment['MaBaiViet']?>"><?=$right3comment['TieuDe']?></a>
                                <span><i class="icon-calendar "></i><?=$right3comment['NgayCapNhat']?></span>
                            </p>
                        </div> <!-- single_product_list end -->
                        <?php } ?>
                    </div> <!-- product_list end -->

                    <div class="product_list tab-pane fade" id="product_3">
                        <?php foreach ($right3tags as $right3tag) { ?>
                        <div class="single_product_list fix">
                            <a href="?blog=<?=$right3tag['MaBaiViet']?>"><div class="f_left" style="background-image: url('public/<?=$right3tag['HinhAnh']?>'); width:70px; height:70px; background-size: cover;"></div></a>
                            <p class="sub_widget_headings"><a
                                    href="?blog=<?=$right3tag['MaBaiViet']?>"><?=$right3tag['TieuDe']?></a>
                                <span><i class="icon-calendar "></i><?=$right3tag['NgayCapNhat']?></span>
                            </p>
                        </div>
                        <?php } ?>
                        <!-- single_product_list end -->
                    </div> <!-- product_list end -->

                </div> <!-- product_list_wrapper end -->

            </div> <!-- singel_widget_tab end -->
        </div> <!-- single_widget_content end -->
    </div> <!-- single_widget end -->



    <div class="single_widget widget_padding_botttm">
        <div class="single_widget_content">
            <h3 class="widget_headings">Bài viết gần đây</h3>
            <div class="singel_widget_recentpost">

                <?php foreach ($right4recents as $right4recent) { ?>
                <div class="recentpost_list fix">
                    <a href="?blog=<?=$right4recent['MaBaiViet']?>"><div class="f_left" style="background-image: url('public/<?=$right4recent['HinhAnh']?>'); width:46px; height:46px; background-size: cover;"></div></a>
                    <p class="sub_widget_headings"><a
                            href="?blog=<?=$right4recent['MaBaiViet']?>"><?=$right4recent['TieuDe']?></a>
                        <span><i class="icon-calendar "></i><?=$right4recent['NgayCapNhat']?></span>
                    </p>
                </div> <!-- recentpost_list end -->
                <?php } ?>

            </div>
        </div> <!-- single_widget_content end -->
    </div> <!-- single_widget end -->



    <div class="single_widget widget_padding_botttm">
        <div class="single_widget_content">
            <h3 class="widget_headings">Đánh giá</h3>
            <div class="single_widget_review">

                <div class="single_widget_review_list fix">
                    <a href="#"><img src="public/img/danhgia.png" alt="thanhthuyblog" class="f_left" width="50"></a>
                    <p class="sub_widget_headings">
                        <a href="#">Cảm ơn ^^</a>
                        <span>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </p>
                </div> <!-- single_widget_review_list end -->

                <div class="single_widget_review_list fix">
                    <a href="#"><img src="public/img/danhgia.png" alt="thanhthuyblog" class="f_left" width="50"></a>
                    <p class="sub_widget_headings">
                        <a href="#">Bài viết rất bổ ích.</a>
                        <span>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                        </span>
                    </p>
                </div> <!-- single_widget_review_list end -->

                <div class="single_widget_review_list fix">
                    <a href="#"><img src="public/img/danhgia.png" alt="thanh thuy blog" class="f_left" width="50"></a>
                    <p class="sub_widget_headings">
                        <a href="#">Bạn viết rất dễ hiểu</a>
                        <span>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                        </span>
                    </p>
                </div> <!-- single_widget_review_list end -->

                <div class="single_widget_review_list fix">
                    <a href="#"><img src="public/img/danhgia.png" alt="thanh thùy blog" class="f_left" width="50"></a>
                    <p class="sub_widget_headings">
                        <a href="#">Hay</a>
                        <span>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </p>
                </div> <!-- single_widget_review_list end -->

            </div>
        </div> <!-- single_widget_content end -->
    </div> <!-- single_widget end -->


    <div class="single_widget widget_padding_botttm">
        <div class="single_widget_content">
            <h3 class="widget_headings">Cấu trúc thời gian</h3>
            <center>
                <div class="single_widget_archive">
                    <ul>
                    <?php foreach ($right9days as $right9day) { ?>
                        <li><a href="?blog=<?=$right9day['MaBaiViet']?>"><?=$right9day['NgayCapNhat']?></a></li>
                    <?php } ?>
                    </ul>
                </div>
            </center>
        </div> <!-- single_widget_content end -->
    </div> <!-- single_widget end -->


</div>