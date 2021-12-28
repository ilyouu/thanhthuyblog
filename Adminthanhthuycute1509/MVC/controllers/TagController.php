<?php
require_once("MVC/Models/tag.php");
class TagController
{
	var $tag_model;
	function __construct()
	{
		$this->tag_model = new Tag();
	}

	public function list()
	{
		$data = array();
		$data = $this->tag_model->All(); 

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
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian = date('Y-m-d H:i:s');

		$data = array(
            'TenTag' =>  $_POST['TenTag'],
            'NgayTao' =>  $ThoiGian,
		);

		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->tag_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->tag_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/detail.php');
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->tag_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->tag_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/edit.php');
	}
	public function update()
	{
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian = date('Y-m-d H:i:s');

		$data = array(
            'MaTag' => $_POST['MaTag'],
            'TenTag' =>  $_POST['TenTag'],
            'NgayTao' =>  $ThoiGian,
		);
		
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        
		$this->tag_model->update($data);
	}
}
