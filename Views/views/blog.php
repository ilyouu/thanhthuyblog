<!-- ======================= main_wrapper start ========================== -->
<section class="main_wrapper section_padding">
    <div class="container">
        <div class="row">

            <!-- this code is for blog_left_content -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog_left_content">

                    <div class="main_content_left">
                        <div class="col-md-6 col-sm-6">

                            <?php foreach ($bloglefts as $blogleft) { ?>
                            <div class="single_blog padding_bottom">

                                <div class="single_blog_top">
                                    <a href="?blog=<?=$blogleft['MaBaiViet']?>"><img
                                            src="public/<?=$blogleft['HinhAnh']?>" alt="<?php echo strip_tags($blogleft['TieuDe']);?>"></a>
                                    <div class="mark_left">
                                        <p><a href="?blog=<?=$blogleft['MaBaiViet']?>"><?=$blogleft['TenTag']?></a></p>
                                    </div>
                                    <div class="mark_right">
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div> <!-- single_blog_top end -->

                                <div class="single_blog_content">

                                    <div class="single_blog_bottom">
                                        <h2 class="blog_headings"><a
                                                href="?blog=<?=$blogleft['MaBaiViet']?>"><?=$blogleft['TieuDe']?></a>
                                        </h2>
                                        <div class="single_blog_meta">
                                            <ul>
                                                <li><a href="?blog=<?=$blogleft['MaBaiViet']?>"><span
                                                            class="icon-calendar"></span><?=$blogleft['NgayCapNhat']?></a>
                                                </li>
                                                <li><a href="?blog=<?=$blogleft['MaBaiViet']?>"><span
                                                            class="icon-chat"></span><?=$blogleft['BinhLuan']?> Bình
                                                        luận</a></li>
                                                <li><a href="?blog=<?=$blogleft['MaBaiViet']?>"><span
                                                            class="icon-heart"></span><?=$blogleft['LuotThich']?> Lượt
                                                        thích</a></li>
                                            </ul>
                                        </div>
                                        <?= substr($blogleft['NoiDung'] ,0, 500); ?></b>...
                                    </div> <!-- single_blog_bottom end -->

                                    <div class="single_blog_footer">
                                        <p><a href="?blog=<?=$blogleft['MaBaiViet']?>"><b>Nhấp vào đây để đọc tiếp
                                                    nha</b> <i class="fa fa-long-arrow-right"></i> </a></p>
                                        <span class="footer_social">
                                            <span class="footer_share">Chia sẻ :</span>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="facebook"><i class="fa fa-facebook"
                                                    style="color: #0d6efd"></i></a>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="twitter"><i class="fa fa-twitter"
                                                    style="color: #0dcaf0"></i></a>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="google-plus"><i class="fa fa-google-plus"
                                                    style="color: #dc3545"></i></a>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="tumblr"><i class="fa fa-tumblr"
                                                    style="color:#2c0073"></i></a>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="linkedin"><i class="fa fa-linkedin"
                                                    style="color: #6610f2"></i></a>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="pinterest"><i class="fa fa-pinterest-p"
                                                    style="color: #b00026"></i></a>
                                        </span>
                                    </div> <!-- single_blog_footer end -->

                                </div> <!-- single_blog_content end -->

                            </div> <!-- single_blog end -->

                            <?php } ?>



                        </div>
                    </div> <!-- main_content_left end -->



                    <div class="main_content_right">
                        <div class="col-md-6 col-sm-6">

                            <?php foreach ($blogrights as $blogright) { ?>
                            <div class="single_blog padding_bottom">

                                <div class="single_blog_top">
                                    <a href="?blog=<?=$blogright['MaBaiViet']?>"><img
                                            src="public/<?=$blogright['HinhAnh']?>" alt="<?php echo strip_tags($blogright['TieuDe']);?>"></a>
                                    <div class="mark_left">
                                        <p><a href="?blog=<?=$blogright['MaBaiViet']?>"><?=$blogright['TenTag']?></a>
                                        </p>
                                    </div>
                                    <div class="mark_right">
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div> <!-- single_blog_top end -->

                                <div class="single_blog_content">

                                    <div class="single_blog_bottom">
                                        <h2 class="blog_headings"><a
                                                href="?blog=<?=$blogright['MaBaiViet']?>"><?=$blogright['TieuDe']?></a>
                                        </h2>
                                        <div class="single_blog_meta">
                                            <ul>
                                                <li><a href="?blog=<?=$blogright['MaBaiViet']?>"><span
                                                            class="icon-calendar"></span><?=$blogright['NgayCapNhat']?></a>
                                                </li>
                                                <li><a href="?blog=<?=$blogright['MaBaiViet']?>"><span
                                                            class="icon-chat"></span><?=$blogright['BinhLuan']?> Bình
                                                        luận</a></li>
                                                <li><a href="?blog=<?=$blogright['MaBaiViet']?>"><span
                                                            class="icon-heart"></span><?=$blogright['LuotThich']?> Lượt
                                                        thích</a></li>
                                            </ul>
                                        </div>
                                        <?= substr($blogright['NoiDung'] ,0, 500); ?></b>...
                                    </div> <!-- single_blog_bottom end -->

                                    <div class="single_blog_footer">
                                        <p><a href="?blog=<?=$blogright['MaBaiViet']?>"><b>Nhấp vào đây để đọc tiếp
                                                    nha</b> <i class="fa fa-long-arrow-right"></i> </a></p>
                                        <span class="footer_social">
                                            <span class="footer_share">Chia sẻ :</span>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="facebook"><i class="fa fa-facebook"
                                                    style="color: #0d6efd"></i></a>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="twitter"><i class="fa fa-twitter"
                                                    style="color: #0dcaf0"></i></a>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="google-plus"><i class="fa fa-google-plus"
                                                    style="color: #dc3545"></i></a>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="tumblr"><i class="fa fa-tumblr"
                                                    style="color:#2c0073"></i></a>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="linkedin"><i class="fa fa-linkedin"
                                                    style="color: #6610f2"></i></a>
                                            <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip"
                                                data-placement="top" title="pinterest"><i class="fa fa-pinterest-p"
                                                    style="color: #b00026"></i></a>
                                        </span>
                                    </div> <!-- single_blog_footer end -->

                                </div> <!-- single_blog_content end -->

                            </div> <!-- single_blog end -->

                            <?php } ?>


                        </div> <!-- col-md-6 end -->
                    </div> <!-- main_content_right end -->






                    <style>
                    .pageno {
                        background-color: #2ECC71;
                        width: 30px;
                        height: 30px;
                        border-radius: 50%;
                        color: #FFFFFF;
                        padding: 5px;
                        margin: auto;
                    }
                    .pagenonumber {
                        background-color: #2ECC71;
                        width: 30px;
                        height: 30px;
                        border-radius: 50%;
                        color: #FFFFFF;
                        padding: 6px;
                        padding-left: 10px;
                        padding-right: 10px;
                        margin: auto;
                    }
                    </style>


                    <div class="col-md-12 col-sm-12">
                        <div class="pagination_area">
                            <ul>
                                <li class="previous_arrow">
                                    <?php if ($paginations['pageno'] > 1 && $paginations['total_page'] > 1){ ?>
                                    <a href="?page=blog&pageno=<?=($paginations['pageno']-1)?>">
                                        <div class="pageno">
                                            <i class="fa fa-angle-left"></i>
                                        </div>
                                    </a>

                                    <?php } else { ?>
                                    <div class="pageno"><i class="fa fa-angle-left"></i></div>
                                    <?php } ?>
                                </li>

                                <li>
                                    <?php for ($i = 1; $i <= $paginations['total_page']; $i++){ ?>
                                    <?php if ($i == $paginations['pageno']){ ?>
                                    <span class="pagenonumber"><?=$i?></span>
                                    <?php } else { ?>
                                    <a href="?page=blog&pageno=<?=$i?>"><span class="pagenonumber"><?=$i?></span></a>
                                    <?php } ?>
                                    <?php } ?>
                                </li>

                                <li class="next_arrow">
                                    <?php if ($paginations['pageno'] < $paginations['total_page'] && $paginations['total_page'] > 1){ ?>
                                    <a href="?page=blog&pageno=<?=($paginations['pageno']+1)?>">
                                        <div class="pageno">
                                            <i class="fa fa-angle-right"></i>
                                        </div>
                                    </a>

                                    <?php } else { ?>
                                        <div class="pageno"><i class="fa fa-angle-right"></i></div>
                                    <?php } ?>
                                </li>
                            </ul>
                        </div> <!-- pagination end -->
                    </div> <!-- col-md-12 end -->



                    <div class="col-md-12 col-sm-12" style="margin-top: 50px">
                        <div class="single_blog padding_bottom">

                            <div class="single_blog_content">
                                <div class="single_blog_form">
                                    <p>Gửi lời nhắn khi có <span>Bài viết mới</span></p>
                                    <form action="#" method="post">
                                        <input type="email" placeholder="Nhập địa chỉ email của bạn...">
                                        <input type="submit" value="OK NHA">
                                    </form>
                                </div>
                            </div> <!-- single_blog_content end -->

                        </div> <!-- single_blog end -->
                    </div> <!-- col-md-12 end -->




                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="blog_right_content">

                            <div class="row">

                                <div class="col-md-4 col-sm-6 col-xs-12">

                                    <div class="single_widget widget_padding_botttm">
                                        <div class="single_widget_content">
                                            <h3 class="widget_headings">Chủ đề</h3>
                                            <div class="single_widget_catagories fix">
                                                <ul>
                                                    <?php foreach ($tags as $tag) { ?>
                                                    <li><a href=""><span
                                                                class="catogorie_name"><?=$tag['TenTag']?></span><span
                                                                class="catagorie_count"><?php echo(rand(0,12)) ?></span></a>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div> <!-- single_widget_content end -->
                                    </div> <!-- singel_widget end -->

                                    <div class="single_widget widget_padding_botttm">
                                        <div class="single_widget_content">
                                            <h3 class="widget_headings">Bài viết gần đây</h3>
                                            <div class="singel_widget_recentpost">

                                                <?php foreach ($right4recents as $right4recent) { ?>
                                                <div class="recentpost_list fix">
                                                    <a href="?blog=<?=$right4recent['MaBaiViet']?>">
                                                        <div class="f_left"
                                                            style="background-image: url('public/<?=$right4recent['HinhAnh']?>'); width:46px; height:46px; background-size: cover;">
                                                        </div>
                                                    </a>
                                                    <p class="sub_widget_headings"><a
                                                            href="?blog=<?=$right4recent['MaBaiViet']?>"><?=$right4recent['TieuDe']?></a>
                                                        <span><i
                                                                class="icon-calendar "></i><?=$right4recent['NgayCapNhat']?></span>
                                                    </p>
                                                </div> <!-- recentpost_list end -->
                                                <?php } ?>

                                            </div>
                                        </div> <!-- single_widget_content end -->
                                    </div> <!-- single_widget end -->

                                </div> <!-- col-md-4 end -->

                                <div class="col-md-4 col-sm-6 col-xs-12">

                                    <div class="single_widget widget_padding_botttm">
                                        <div class="single_widget_content">
                                            <div class="singel_widget_tab">

                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="active"><a href="#product_1" data-toggle="tab">Nổi
                                                            bật</a></li>
                                                    <li><a href="#product_2" data-toggle="tab">Bình luận</a></li>
                                                    <li><a href="#product_3" data-toggle="tab">Tags</a></li>
                                                </ul>

                                                <div class="product_list_wrapper tab-content">

                                                    <div class="product_list tab-pane active fade in" id="product_1">
                                                        <?php foreach ($right3blogs as $right3blog) { ?>
                                                        <div class="single_product_list fix">

                                                            <a href="?blog=<?=$right3blog['MaBaiViet']?>">
                                                                <div class="f_left"
                                                                    style="background-image: url('public/<?=$right3blog['HinhAnh']?>'); width:70px; height:70px; background-size: cover;">
                                                                </div>
                                                            </a>
                                                            <p class="sub_widget_headings"><a
                                                                    href="?blog=<?=$right3blog['MaBaiViet']?>"><?=$right3blog['TieuDe']?></a>
                                                                <span><i
                                                                        class="icon-calendar "></i><?=$right3blog['NgayCapNhat']?></span>
                                                            </p>
                                                        </div> <!-- single_product_list end -->
                                                        <?php } ?>
                                                    </div> <!-- product_list end -->

                                                    <div class="product_list tab-pane fade" id="product_2">
                                                        <?php foreach ($right3comments as $right3comment) { ?>
                                                        <div class="single_product_list fix">
                                                            <a href="?blog=<?=$right3comment['MaBaiViet']?>">
                                                                <div class="f_left"
                                                                    style="background-image: url('public/<?=$right3comment['HinhAnh']?>'); width:70px; height:70px; background-size: cover;">
                                                                </div>
                                                            </a>
                                                            <p class="sub_widget_headings"><a
                                                                    href="?blog=<?=$right3comment['MaBaiViet']?>"><?=$right3comment['TieuDe']?></a>
                                                                <span><i
                                                                        class="icon-calendar "></i><?=$right3comment['NgayCapNhat']?></span>
                                                            </p>
                                                        </div> <!-- single_product_list end -->
                                                        <?php } ?>
                                                    </div> <!-- product_list end -->

                                                    <div class="product_list tab-pane fade" id="product_3">
                                                        <?php foreach ($right3tags as $right3tag) { ?>
                                                        <div class="single_product_list fix">
                                                            <a href="?blog=<?=$right3tag['MaBaiViet']?>">
                                                                <div class="f_left"
                                                                    style="background-image: url('public/<?=$right3tag['HinhAnh']?>'); width:70px; height:70px; background-size: cover;">
                                                                </div>
                                                            </a>
                                                            <p class="sub_widget_headings"><a
                                                                    href="?blog=<?=$right3tag['MaBaiViet']?>"><?=$right3tag['TieuDe']?></a>
                                                                <span><i
                                                                        class="icon-calendar "></i><?=$right3tag['NgayCapNhat']?></span>
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
                                            <h3 class="widget_headings">Đánh giá</h3>
                                            <div class="single_widget_review">

                                                <div class="single_widget_review_list fix">
                                                    <a href="#"><img src="public/img/danhgia.png" alt="thanhthuyblog" class="f_left"
                                                            width="50"></a>
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
                                                    <a href="#"><img src="public/img/danhgia.png" alt="thanhthuyblog" class="f_left"
                                                            width="50"></a>
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
                                                    <a href="#"><img src="public/img/danhgia.png" alt="thanhthuyblog" class="f_left"
                                                            width="50"></a>
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
                                                    <a href="#"><img src="public/img/danhgia.png" alt="thanhthuyblog" class="f_left"
                                                            width="50"></a>
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


                                </div> <!-- col-md-4 end -->

                                <div class="col-md-4 col-sm-12 col-xs-12">

                                    <?php foreach ($gioithieus as $gioithieu) { ?>
                                    <div class="single_widget widget_padding_botttm">
                                        <div class="single_widget_content">
                                            <h3 class="widget_headings">Giới thiệu về mình</h3>
                                            <a href="?page=gioithieu"><img src="public/<?=$gioithieu['HinhAnh1']?>"
                                                    alt="<?php echo strip_tags($gioithieu['GioiThieuNgan']);?>"></a>
                                            <div class="single_widget_about">
            
                                                <?=$gioithieu['GioiThieuNgan']?>
                                                <div class="about_social">
                                                    <a href="https://www.facebook.com/nhok.jimmy.18"><i
                                                            class="fa fa-facebook" style="color: #0d6efd"></i></a>
                                                    <a href="https://www.facebook.com/nhok.jimmy.18"><i
                                                            class="fa fa-twitter" style="color: #0dcaf0"></i></a>
                                                    <a href="https://www.facebook.com/nhok.jimmy.18"><i
                                                            class="fa fa-google-plus" style="color: #dc3545"></i></a>
                                                    <a href="https://www.facebook.com/nhok.jimmy.18"><i
                                                            class="fa fa-linkedin" style="color:#2c0073"></i></a>
                                                </div>
                                            </div> <!-- single_widget_about end -->
                                        </div> <!-- single_widget_content end -->
                                    </div> <!-- single_widget end -->

                                    <?php } ?>
                                </div> <!-- col-md-4 end -->

                            </div>

                        </div> <!-- blog_right_content -->
                    </div>



                </div> <!-- blog_left_content end -->
            </div> <!-- col-md-12 end -->

        </div> <!-- row end -->
    </div> <!-- container end -->
</section>
<!-- ======================= main_wrapper end ========================== -->