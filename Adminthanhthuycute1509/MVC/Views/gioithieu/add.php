<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
    <?php } ?>
    <form action="?mod=gioithieu&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for=""><b>Hình ảnh 1</b></label>
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1">
        </div>

        <div class="form-group">
            <label for=""><b>Hình ảnh 2</b></label>
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh2">
        </div>

        <div class="form-group">
            <label for=""><b>Hình ảnh 3</b></label>
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh3">
        </div>
        
        <br>
        <div class="form-outline">
            <input type="text" class="form-control" name="CongViec" />
            <label class="form-label">Công việc (không viết cũng được)</label>
        </div>
        <br>
        
        <label for=""><b>Viết ngắn gọn về bản thân</b> (khoảng 4 dòng)</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote" placeholder="" name="GioiThieuNgan"></textarea>
        </div>

        <label for=""><b>Viết chi tiết bản thân</b></label>
        <div class="form-group">
            <textarea class="form-control" id="summernote2" placeholder="" name="MoTa"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Xong</button>
    </form>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });

    $(document).ready(function() {
        $('#summernote2').summernote();
    });
    </script>
</table>