<?php
require_once("Models/model.php");
class Controller
{
    var $blog_model;

    public function __construct()
    {
       $this->model = new model();
    }
    
    function trangchu()
    {
        $gioithieus = array();
		$gioithieus = $this->model->gioithieu();

        $tags = array();
		$tags = $this->model->tag();

        $right3blogs = array();
		$right3blogs = $this->model->right3blog();

        $right3comments = array();
		$right3comments = $this->model->right3comment();

        $right3tags = array();
		$right3tags = $this->model->right3tag();

        $right4recents = array();
		$right4recents = $this->model->right4recent();

        $right9days = array();
		$right9days = $this->model->right9day();

        $titleweb['titleweb'] = '';

        $banners = array();
		$banners = $this->model->banner();

        $baiviets = array();
		$baiviets = $this->model->trangchu();

        require_once('Views/index.php');
    }

    function blog()
    {
        $gioithieus = array();
		$gioithieus = $this->model->gioithieu();
        
        $tags = array();
		$tags = $this->model->tag();

        $right3blogs = array();
		$right3blogs = $this->model->right3blog();

        $right3comments = array();
		$right3comments = $this->model->right3comment();

        $right3tags = array();
		$right3tags = $this->model->right3tag();

        $right4recents = array();
		$right4recents = $this->model->right4recent();

        $right9days = array();
		$right9days = $this->model->right9day();

        $paginations = array();
		$paginations = $this->model->pagination();
        
        $titleweb['titleweb'] = 'Blog';

        $bloglefts = array();
		$bloglefts = $this->model->blogleft();

        $blogrights = array();
		$blogrights = $this->model->blogright();

        $baiviets = array();
		$baiviets = $this->model->blog();
        require_once('Views/index.php');
    }

    function singleblog()
    {
        $gioithieus = array();
		$gioithieus = $this->model->gioithieu();
        
        $tags = array();
		$tags = $this->model->tag();

        $right3blogs = array();
		$right3blogs = $this->model->right3blog();

        $right3comments = array();
		$right3comments = $this->model->right3comment();

        $right3tags = array();
		$right3tags = $this->model->right3tag();

        $right4recents = array();
		$right4recents = $this->model->right4recent();

        $right9days = array();
		$right9days = $this->model->right9day();



        $baiviets = array();
		$baiviets = $this->model->blog();

        $id = isset($_GET['blog']) ? $_GET['blog'] : 1;
        foreach($baiviets as $bai){
            if($bai['MaBaiViet'] == $id){
                $baiviet = $bai;
            }
        }

        $titleweb['titleweb'] = $baiviet['TieuDe'];

        require_once('Views/index.php');
    }
    
    function gioithieu()
    {
        $gioithieus = array();
		$gioithieus = $this->model->gioithieu();

        $tags = array();
		$tags = $this->model->tag();

        $right3blogs = array();
		$right3blogs = $this->model->right3blog();

        $right3comments = array();
		$right3comments = $this->model->right3comment();

        $right3tags = array();
		$right3tags = $this->model->right3tag();

        $right4recents = array();
		$right4recents = $this->model->right4recent();

        $right9days = array();
		$right9days = $this->model->right9day();

        $titleweb['titleweb'] = 'Giới thiệu';

        $baiviets = array();
		$baiviets = $this->model->trangchu();
        require_once('Views/index.php');
    }

    function lienhe()
    {
        $gioithieus = array();
		$gioithieus = $this->model->gioithieu();

        $tags = array();
		$tags = $this->model->tag();

        $right3blogs = array();
		$right3blogs = $this->model->right3blog();

        $right3comments = array();
		$right3comments = $this->model->right3comment();

        $right3tags = array();
		$right3tags = $this->model->right3tag();

        $right4recents = array();
		$right4recents = $this->model->right4recent();

        $right9days = array();
		$right9days = $this->model->right9day();

        $titleweb['titleweb'] = 'Liên hệ';

        $baiviets = array();
		$baiviets = $this->model->trangchu();
        require_once('Views/index.php');
    }
    
}