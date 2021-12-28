<title>test</title>
<div class="blog_left_content">

    <div class="single_blog padding_bottom">
        <div class="single_blog_top">
            <a href="?blog=<?=$right3blog['MaBaiViet']?>"><img src="public/<?=$baiviet['HinhAnh']?>" alt="<?php echo strip_tags($baiviet['TieuDe']);?>"></a>
            <div class="mark_left">
                <p><a href="?blog=<?=$right3blog['MaBaiViet']?>"><?=$baiviet['TenTag']?></a></p>
            </div>
            <div class="mark_right">
                <i class="fa fa-star"></i>
            </div>
        </div> <!-- single_blog_top end -->
        <div class="single_blog_content">

            <div class="single_blog_bottom">
                <h2 class="blog_headings"><a href="?blog=<?=$right3blog['MaBaiViet']?>"><?=$baiviet['TieuDe']?></a></h2>
                <div class="single_blog_meta">
                    <ul>
                        <li><a href="#"><span class="icon-profile-male"></span>Thanh Thùy</a></li>
                        <li><a href="#"><span class="icon-calendar"></span><?=$baiviet['NgayCapNhat']?></a></li>
                        <li><a href="#"><span class="icon-chat"></span><?=$baiviet['BinhLuan']?> Bình luân</a></li>
                        <li><a href="#"><span class="icon-heart"></span><?=$baiviet['LuotThich']?> Lượt thích</a></li>
                    </ul>
                </div>
                <?=$baiviet['NoiDung']?>
                <!-- <blockquote class="single_blog_page_quote">
                    Chúc các bạn luôn hạnh phúc nhé!
                </blockquote> -->

            </div> <!-- single_blog_bottom end -->

            <div class="single_blog_footer">
                <span class="footer_social">
                    <span class="footer_share">Chia sẻ bài viết này :</span>
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

    <div class="single_blog padding_bottom">

        <div class="single_blog_content single_blog_page_author">
            <h3>Tác giả<span>Thanh Thùy</span></h3>
            <?php foreach ($gioithieus as $gioithieu) { ?>
            <div class="single_blog_page_author_img">
                <a href="#">
                    <div class="f_left"
                        style="background-image: url('public/<?=$gioithieu['HinhAnh1']?>'); width:115px; height:115px; background-size: cover;">
                    </div>
                </a>
            </div>
            <div class="single_blog_page_author_para">
                <?=$gioithieu['GioiThieuNgan']?>
            </div>
            <?php } ?>
            <br><br><br>

            <div class="single_blog_page_author_social">
                <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-facebook"
                        style="color: #0d6efd"></i></a>
                <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-twitter"
                        style="color: #0dcaf0"></i></a>
                <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-google-plus"
                        style="color: #dc3545"></i></a>
                <a href="https://www.facebook.com/nhok.jimmy.18"><i class="fa fa-linkedin"
                        style="color:#2c0073"></i></a>
            </div>
        </div> <!-- single_blog_content end -->

    </div> <!-- single_blog end -->

    <div class="single_blog padding_bottom">

        <div class="single_blog_content single_blog_page_might_like_lists">
            <div class="row">
                <h2>Có Thể Bạn Cũng Thích Những Bài Viết Này</h2>
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

    <div class="single_blog padding_bottom">

        <div class="single_blog_content single_blog_page_comments_lists">
            <h2>Bình luận về bài viết</h2>
            <div class="single_blog_page_single_comments">
                <div class="singel_blog_page_commentars">
                    <a href="#"><img src="public/img/commentators.jpg" alt="thanh thùy"></a>
                </div>
                <div class="single_blog_page_comments_content">
                    <h3><a href="#">Trà My</a> <span class="icon-calendar"></span> <span>2021-12-26 15:02:39
                            pm</span></h3>
                    <p>Bài viết hay, đúng điều mình đang tìm hiểu, cảm ơn bạn nhé. </p>
                    <p class="reply"><a href="#">Trả lời</a></p>
                </div>
            </div> <!-- single_blog_page_single_comments end -->

            <div class="single_blog_page_single_comments even">
                <div class="singel_blog_page_commentars">
                    <a href="#"><img src="public/img/commentators.jpg" alt="thanh thuy"></a>
                </div>
                <div class="single_blog_page_comments_content">
                    <h3><a href="#">Khánh Toàn</a> <span class="icon-calendar"></span> <span>2021-10-25 11:03:19
                            am</span></h3>
                    <p>Bạn gì ơi cho mình xin info với :>. </p>
                    <p class="reply"><a href="#">Trả lời</a></p>
                </div>
            </div> <!-- single_blog_page_single_comments end -->

            <div class="single_blog_page_single_comments">
                <div class="singel_blog_page_commentars">
                    <a href="#"><img src="public/img/commentators.jpg" alt="blog"></a>
                </div>
                <div class="single_blog_page_comments_content">
                    <h3><a href="#">Kiều Mai</a> <span class="icon-calendar"></span> <span>2021-11-22 22:02:34
                            pm</span></h3>
                    <p>Bài viết rất bổ ích. </p>
                    <p class="reply"><a href="#">Trả lời</a></p>
                </div>
            </div> <!-- single_blog_page_single_comments end -->


            <div class="single_blog_page_form">
                <h2>Để lại bình luận</h2>
                <form action="#" method="post">
                    <input type="text" placeholder="Tên: ">
                    <input type="email" placeholder="Email: ">
                    <input type="text" placeholder="Website: " id="website">
                    <textarea placeholder="Bình luận của bạn: "></textarea>
                    <input type="submit" value="ĐĂNG BÌNH LUẬN">
                </form>
            </div> <!-- single_blog_page_form end -->


        </div> <!-- single_blog_content end -->

    </div> <!-- single_blog end -->


</div>