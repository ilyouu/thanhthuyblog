<a href="?mod=baiviet&act=add" type="button" class="btn btn-primary">Thêm bài viết mới</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="99%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã bài viết</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Tag</th>
      <th scope="col">Ngày cập nhật</th>
      <th>Thay đổi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <th scope="row"><?= $row['MaBaiViet'] ?></th>
        <td><?= $row['TieuDe'] ?></td>
        <td><?= $row['TenTag'] ?></td>
        <td><?= $row['NgayCapNhat'] ?></td>
        <td>
          <a href="../index.php?blog=<?= $row['MaBaiViet'] ?>" type="button" class="btn btn-success" target="_blank">Xem</a>
          <a href="?mod=baiviet&act=edit&id=<?= $row['MaBaiViet'] ?>" type="button" class="btn btn-warning">Sửa</a>
          <a href="?mod=baiviet&act=delete&id=<?= $row['MaBaiViet'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>