<div class="blog_left_content">


    <?php foreach ($gioithieus as $gioithieu) { ?>
    <div class="single_blog padding_bottom">

        <div class="single_blog_top about_page_top">
            <div class="slides_lists">
                <div id="about_page_slider" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#about_page_slider" data-slide-to="0" class="active"></li>
                        <li data-target="#about_page_slider" data-slide-to="1"></li>
                        <li data-target="#about_page_slider" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img src="public/<?=$gioithieu['HinhAnh1']?>" alt="thanhthuyblog">
                        </div> <!-- item end -->

                        <div class="item">
                            <img src="public/<?=$gioithieu['HinhAnh2']?>" alt="thanh thùy blog">
                        </div> <!-- item end -->

                        <div class="item">
                            <img src="public/<?=$gioithieu['HinhAnh3']?>" alt="thanh thùy blog">
                        </div> <!-- item end -->

                    </div> <!-- carousel-inner endf -->

                    <!-- Controls -->
                    <a class="left slider_left" href="#about_page_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right slider_right" href="#about_page_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                    </a>

                </div> <!-- carousel end -->

            </div> <!-- slides_lists end -->
        </div> <!-- single_blog_top end -->

        <div class="single_blog_content about_page_content">

            <div class="single_blog_bottom">
                <h2 class="blog_headings"><a href="#">Phan Thị Thanh Thùy</a></h2>
                <div class="single_blog_meta">
                    <ul>
                        <li><?=$gioithieu['CongViec']?></li>
                        <li>Sinh nhật - 15 / 09 / 1999</li>
                    </ul>
                </div>
                <?= $gioithieu['MoTa'] ?>
            </div> <!-- single_blog_bottom end -->

            <div class="single_blog_footer">
                <span>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top"
                        title="facebook"><i class="fa fa-facebook" style="color: #0d6efd"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top"
                        title="twitter"><i class="fa fa-twitter" style="color: #0dcaf0"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top"
                        title="google-plus"><i class="fa fa-google-plus" style="color: #dc3545"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top"
                        title="tumblr"><i class="fa fa-tumblr" style="color:#2c0073"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top"
                        title="linkedin"><i class="fa fa-linkedin" style="color: #6610f2"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top"
                        title="pinterest"><i class="fa fa-pinterest-p" style="color: #b00026"></i></a>
                </span>
            </div> <!-- single_blog_footer end -->

        </div> <!-- single_blog_content end -->

    </div> <!-- single_blog end -->

    <?php } ?>







    <div class="single_blog padding_bottom">

        <div class="single_blog_content single_blog_page_might_like_lists">
            <div class="row">
                <h2>Những Bài Viết Được Yêu Thích Nhất Của Mình</h2>
                <?php foreach ($right3blogs as $right3blog) { ?>
                <div class="col-sm-4">
                    <div class="single_blog_page_might_like">
                        <a href="?blog=<?=$right3blog['MaBaiViet']?>">
                            <div style="background-image: url('public/<?=$right3blog['HinhAnh']?>'); width:208px; height:136px; background-size: cover;"></div>
                        </a>
                        <h3><a href="?blog=<?=$right3blog['MaBaiViet']?>"><?=$right3blog['TieuDe']?></a></h3>
                        <p><span class="icon-profile-male"></span> Thanh Thùy</p>
                    </div>
                </div>
                <?php } ?>

            </div> <!-- row end -->
        </div> <!-- single_blog_content end -->

    </div> <!-- single_blog end -->

</div>