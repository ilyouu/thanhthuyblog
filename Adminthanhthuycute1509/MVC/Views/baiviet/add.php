


<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
    <?php } ?>
    <form action="?mod=baiviet&act=store" method="POST" role="form" enctype="multipart/form-data">
        <br>
        <div class="form-outline">
            <input type="text" class="form-control" name="TieuDe" />
            <label class="form-label">Tiêu đề bài viết</label>
        </div>
        <br>
        <div class="form-group">
            <label for=""><b>Chọn ảnh bìa bài viết:</b></label>
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh">
        </div>

        <div class="form-group">
            <label for="cars"><b>Chọn tag:</b> </label>
            <select id="" name="TenTag" class="form-control">
                <option value=""></option>
                <?php foreach ($tags as $tag) { ?>
                <option value="<?= $tag['TenTag'] ?>"><?=$tag['TenTag'] ?></option>
                <?php } ?>
            </select>
        </div>

        <label for=""><b>Nội dung bài viết:</b></label>
        <div class="form-group">
            <textarea class="form-control" id="summernote3" placeholder="" name="NoiDung"></textarea>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="TrangThai" checked />
            <label class="form-check-label" for="flexCheckChecked">
                Cho phép hiện thị bài viết này
            </label>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Ok luôn</button>
    </form>

    <script>
    $(document).ready(function() {
        $('#summernote3').summernote();
    });
    </script>
</table>

