<div class="blog_left_content">

    <?php foreach ($baiviets as $baiviet) { ?>
    <div class="single_blog padding_bottom">

        <div class="single_blog_top">
            <a href="?blog=<?=$baiviet['MaBaiViet']?>"><img src="public/<?=$baiviet['HinhAnh']?>" alt=""></a>
            <div class="mark_left">
                <p><a href="?blog=<?=$baiviet['MaBaiViet']?>"><?=$baiviet['TenTag']?></a></p>
            </div>
            <div class="mark_right">
                <i class="fa fa-star"></i>
            </div>
        </div> <!-- single_blog_top end -->

        <div class="single_blog_content">

            <div class="single_blog_bottom">
                <h2 class="blog_headings"><a href="?blog=<?=$baiviet['MaBaiViet']?>"><?=$baiviet['TieuDe']?></a></h2>
                <div class="single_blog_meta">
                    <ul>
                        <li><a href="?blog=<?=$baiviet['MaBaiViet']?>"><span class="icon-profile-male"></span>Thanh Thùy</a></li>
                        <li><a href="?blog=<?=$baiviet['MaBaiViet']?>"><span class="icon-calendar"></span><?=$baiviet['NgayCapNhat']?></a>
                        </li>
                        <li><a href="?blog=<?=$baiviet['MaBaiViet']?>"><span class="icon-chat"></span><?=$baiviet['BinhLuan']?> Bình luận</a></li>
                        <li><a href="?blog=<?=$baiviet['MaBaiViet']?>"><span class="icon-heart"></span><?=$baiviet['LuotThich']?> Lượt thích</a></li>
                    </ul>
                </div>
                <?= substr($baiviet['NoiDung'] ,0, 700); ?></b>...
            </div> <!-- single_blog_bottom end -->

            <div class="single_blog_footer">
                <p><a href="?blog=<?=$baiviet['MaBaiViet']?>"><b>Nhấp vào đây để đọc tiếp nha</b> <i
                            class="fa fa-long-arrow-right"></i> </a></p>
                <span class="footer_social">
                    <span class="footer_share">Chia sẻ :</span>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook"
                            style="color: #0d6efd"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter"
                            style="color: #0dcaf0"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top" title="google-plus"><i
                            class="fa fa-google-plus" style="color: #dc3545"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top" title="tumblr"><i class="fa fa-tumblr"
                            style="color:#2c0073"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top" title="linkedin"><i class="fa fa-linkedin"
                            style="color: #6610f2"></i></a>
                    <a href="https://www.facebook.com/nhok.jimmy.18" data-toggle="tooltip" data-placement="top" title="pinterest"><i
                            class="fa fa-pinterest-p" style="color: #b00026"></i></a>
                </span>
            </div> <!-- single_blog_footer end -->

        </div> <!-- single_blog_content end -->

    </div> <!-- single_blog end -->
    <?php } ?>



    <div class="single_blog padding_bottom">

        <div class="single_blog_content">
            <div class="single_blog_form">
                <p>Nhắc khi có <span>Bài viết mới</span></p>
                <form action="#" method="post">
                    <input type="email" placeholder="Nhập địa chỉ email của bạn...">
                    <input type="submit" value="OK NHA">
                </form>
            </div>
        </div> <!-- single_blog_content end -->

    </div> <!-- single_blog end -->


</div>