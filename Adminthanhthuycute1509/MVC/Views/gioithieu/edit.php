<?php if (isset($_COOKIE['msg'])) { ?>
<div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
</div>
<?php } ?>
<!-- <hr> -->
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=gioithieu&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaGioiThieu" value="<?= $data['MaGioiThieu'] ?>">
        <div class="form-group">
            <label for=""><b>Hình ảnh 1</b></label><br>
            <img src="../public/<?=$data['HinhAnh1']?>" class="border" width="300px"><br>
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1" value="<?=$data['HinhAnh1']?>">
        </div>

        <div class="form-group">
            <label for=""><b>Hình ảnh 2</b></label><br>
            <img src="../public/<?=$data['HinhAnh2']?>" class="border" width="300px"><br>
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh2" value="<?=$data['HinhAnh2']?>">
        </div>

        <div class="form-group">
            <label for=""><b>Hình ảnh 3</b></label><br>
            <img src="../public/<?=$data['HinhAnh3']?>" class="border" width="300px"><br>
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh3" value="<?=$data['HinhAnh3']?>">
        </div>

        <br>
        <div class="form-outline">
            <input type="text" class="form-control" value="<?=$data['CongViec']?>" name="CongViec" />
            <label class="form-label">Công việc (không viết cũng được)</label>
        </div>
        <br>
        
        <label for=""><b>Viết ngắn gọn về bản thân</b> (khoảng 4 dòng)</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote" placeholder="" name="GioiThieuNgan"><?=$data['GioiThieuNgan']?></textarea>
        </div>

        <label for=""><b>Viết chi tiết bản thân</b></label>
        <div class="form-group">
            <textarea class="form-control" id="summernote2" placeholder="" name="MoTa"><?=$data['MoTa']?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Sửa</button>
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