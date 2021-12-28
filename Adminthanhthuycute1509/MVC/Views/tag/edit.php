<?php if (isset($_COOKIE['msg'])) { ?>
<div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
</div>
<?php } ?>
<!-- <hr> -->
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=tag&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaTag" value="<?= $data['MaTag'] ?>">
        <br>
        <div class="form-outline">
            <input type="text" class="form-control" value="<?=$data['TenTag']?>" name="TenTag" />
            <label class="form-label">Tên Tag</label>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
    
</table>