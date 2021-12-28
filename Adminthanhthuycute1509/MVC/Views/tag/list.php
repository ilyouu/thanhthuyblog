<a href="?mod=tag&act=add" type="button" class="btn btn-primary">Thêm tag mới</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="99%">
  <thead>
    <tr>
      <!-- <th scope="col">Hình Ảnh</th> -->
      <th scope="col">ID Tag</th>
      <th scope="col">Tên Tag</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Thay đổi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        
        <td><?= $row['MaTag'] ?></td>
        <td><?= $row['TenTag'] ?></td>
        <td><?= $row['NgayTao'] ?></td>
        <td>
          <a href="?mod=tag&act=edit&id=<?= $row['MaTag'] ?>" class="btn btn-warning">Sửa</a>
          <a href="?mod=tag&act=delete&id=<?= $row['MaTag'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>