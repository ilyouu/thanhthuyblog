<?php if (isset($_COOKIE['msg'])) { ?>
<div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
</div>
<?php } ?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=baiviet&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaBaiViet" value="<?= $data['MaBaiViet'] ?>">
        <br>
        <div class="form-group">
            <label for=""><b>Tiêu đề bài viết:</b></label>
            <input type="text" class="form-control" id="" placeholder="" name="TieuDe" value="<?=$data['TieuDe']?>">
        </div>

        <div class="form-group">
            <label for=""><b>Ảnh bìa bài viết:</b></label><br>
            <img src="../public/<?=$data['HinhAnh']?>" width="300px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh" value="<?=$data['HinhAnh']?>">
        </div>

        <div class="form-group">
            <label for="cars"><b>Chọn tag:</b></label>
            <select id="" name="TenTag" class="form-control">
                <option value=""></option>
                <?php foreach ($tags as $tag) { ?>
                <option value="<?= $tag['TenTag'] ?>" <?php if($tag['TenTag'] == $data['TenTag']){ ?> selected
                    <?php } ?>><?=$tag['TenTag'] ?></option>
                <?php } ?>
            </select>
        </div>

        <label for=""><b>Nội dung bài viết:</b></label>
        <div class="form-group">
            <textarea class="form-control" id="summernote3" placeholder=""
                name="NoiDung"><?=$data['NoiDung']?></textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="TrangThai"
                <?=($data['TrangThai']==1)?'checked':''?> />
            <label class="form-check-label" for="flexCheckChecked">
                Cho phép hiện thị bài viết này
            </label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Ok Luôn</button>
    </form>
    <script>
    $(document).ready(function() {
        $('#summernote3').summernote();
    });
    </script>
</table>