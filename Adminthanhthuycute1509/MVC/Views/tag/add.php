<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
    <?php } ?>
    <form action="?mod=tag&act=store" method="POST" role="form" enctype="multipart/form-data">
        <br>
        <div class="form-outline">
            <input type="text" class="form-control" name="TenTag" />
            <label class="form-label">Tên Tag</label>
        </div>
        <br>
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