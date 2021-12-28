<?php
require_once("MVC/Models/gioithieu.php");
class GioiThieuController
{
	var $gioithieu_model;
	function __construct()
	{
		$this->gioithieu_model = new GioiThieu();
	}

	public function list()
	{
		$data = array();
		$data = $this->gioithieu_model->All(); 
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/list.php');
	}

	public function add()
	{
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/add.php');
	}
	public function store()
	{
        $target_dir = "../public/img/gioithieu/";  // thư mục chứa file upload

		$HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["HinhAnh1"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 = "img/gioithieu/" .basename($_FILES["HinhAnh1"]["name"]);
        }

        $HinhAnh2 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh2"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh2"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh2 =  "img/gioithieu/" . basename($_FILES["HinhAnh2"]["name"]);
        }

        $HinhAnh3 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh3"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh3"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh3 =  "img/gioithieu/" . basename($_FILES["HinhAnh3"]["name"]);
        }

		$data = array(
			'HinhAnh1' => $HinhAnh1,
			'HinhAnh2' => $HinhAnh2,
			'HinhAnh3' => $HinhAnh3,
            'CongViec' =>  $_POST['CongViec'],
            'GioiThieuNgan' =>  $_POST['GioiThieuNgan'],
			'MoTa' =>  $_POST['MoTa'],
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->gioithieu_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->gioithieu_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/detail.php');
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->gioithieu_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->gioithieu_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/edit.php');
	}
	public function update()
	{
        $target_dir = "../public/img/gioithieu/";  // thư mục chứa file upload

        $HinhAnh1 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh1"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh1"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["HinhAnh1"]["name"]));
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh1 = "img/gioithieu/" .basename($_FILES["HinhAnh1"]["name"]);
        }

        $HinhAnh2 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh2"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh2"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh2 =  "img/gioithieu/" . basename($_FILES["HinhAnh2"]["name"]);
        }

        $HinhAnh3 = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh3"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["HinhAnh3"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh3 =  "img/gioithieu/" . basename($_FILES["HinhAnh3"]["name"]);
        }

		$data = array(
			'MaGioiThieu' => $_POST['MaGioiThieu'],
			'HinhAnh1' => $HinhAnh1,
			'HinhAnh2' => $HinhAnh2,
			'HinhAnh3' => $HinhAnh3,
            'CongViec' =>  $_POST['CongViec'],
            'GioiThieuNgan' =>  $_POST['GioiThieuNgan'],
			'MoTa' =>  $_POST['MoTa'],
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($HinhAnh1 == "") {
            unset($data['HinhAnh1']);
        }
        if ($HinhAnh2 == "") {
            unset($data['HinhAnh2']);
        }
        if ($HinhAnh3 == "") {
            unset($data['HinhAnh3']);
        }
		$this->gioithieu_model->update($data);
	}
}
