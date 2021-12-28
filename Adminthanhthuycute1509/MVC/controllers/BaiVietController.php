
<?php
require_once("MVC/Models/baiviet.php");
class BaiVietController
{
	var $baiviet_model;
	function __construct()
	{
		$this->baiviet_model = new BaiViet();
	}

	public function list()
	{
		$data = array();
		$data = $this->baiviet_model->All(); 
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/list.php');
	}

	public function add()
	{
		$tags = array();
		$tags = $this->baiviet_model->tag();
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/add.php');
	}
	public function store()
	{
        $target_dir = "../public/img/baiviet/";  // thư mục chứa file upload

		$HinhAnh = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["HinhAnh"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh = "img/baiviet/" .basename($_FILES["HinhAnh"]["name"]);
        }

		$TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian = date('Y-m-d H:i:s');

		$data = array(
			'HinhAnh' => $HinhAnh,
            'TieuDe' =>  $_POST['TieuDe'],
			'TenTag' =>  $_POST['TenTag'],
            'NoiDung' =>  $_POST['NoiDung'],
            'LuotThich' =>  "0",
            'BinhLuan' =>  "0",
            'TrangThai' =>  $TrangThai,
            'NgayTao' => $ThoiGian,
            'NgayCapNhat' => $ThoiGian,
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->baiviet_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->baiviet_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/detail.php');
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->baiviet_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$tags = array();
		$tags = $this->baiviet_model->tag();

		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->baiviet_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/edit.php');
	}
	public function update()
	{
        $target_dir = "../public/img/gioithieu/";  // thư mục chứa file upload

        $HinhAnh = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["HinhAnh"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh = "img/gioithieu/" .basename($_FILES["HinhAnh"]["name"]);
        }

		$TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian = date('Y-m-d H:i:s');

		$data = array(
			'MaBaiViet' => $_POST['MaBaiViet'],
			'HinhAnh' => $HinhAnh,
            'TieuDe' =>  $_POST['TieuDe'],
			'TenTag' =>  $_POST['TenTag'],
            'NoiDung' =>  $_POST['NoiDung'],
            'TrangThai' =>  $TrangThai,
            'NgayCapNhat' => $ThoiGian,
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($HinhAnh == "") {
            unset($data['HinhAnh']);
        }
        
		$this->baiviet_model->update($data);
	}
}
