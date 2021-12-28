<a href="?mod=gioithieu&act=add" type="button" class="btn btn-primary">Tạo giới thiệu mới</a>
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
      <th scope="col">Công việc</th>
      <th scope="col">Giới thiệu ngắn</th>
      <!-- <th scope="col">Giới thiệu chi tiết</th> -->
      <th scope="col">Thay đổi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        
        <td><?= $row['CongViec'] ?></td>
        <td><?= $row['GioiThieuNgan'] ?></td>
        <!-- <td><?= $row['MoTa'] ?></td> -->
        <td>
          <a href="?mod=gioithieu&act=detail&id=<?= $row['MaGioiThieu'] ?>" class="btn btn-success">Xem</a>
          <a href="?mod=gioithieu&act=edit&id=<?= $row['MaGioiThieu'] ?>" class="btn btn-warning">Sửa</a>
          <a href="?mod=gioithieu&act=delete&id=<?= $row['MaGioiThieu'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>