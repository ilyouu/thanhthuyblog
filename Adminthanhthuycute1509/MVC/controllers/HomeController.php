<?php
require_once("MVC/Models/home.php");
class HomeController
{
	var $home_model;
	function __construct()
	{
		$this->home_model = new Home();
	}

	public function list()
	{
		require_once("MVC/Views/Admin/index.php");
	}

	
}
