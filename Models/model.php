<?php
require_once("connection.php");
class model
{
    var $conn;
    var $table;
    var $contens;

    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    
    function trangchu()
    {
        $query = "select * from baiviet where TrangThai=1 ORDER BY LuotThich DESC LIMIT 5";
        require("result.php");
        return $data;
    }

    function blog()
    {
        $query = "select * from baiviet where TrangThai=1";
        require("result.php");
        return $data;
    }

    function pagination()
    {
        $pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;

        $limit = 6;
        
        $q = $this->conn->query("SELECT * FROM baiviet where TrangThai=1");
        $total_title = array();
        while ($row = $q->fetch_assoc()) { $total_title[] = $row; }
        $total_page = ceil(count($total_title)/$limit);

        if ($pageno > $total_page){ $pageno = $total_page;
        } else if ($pageno < 1){ $pageno = 1; }
        $start = ($pageno - 1) * $limit;

        $data['pageno'] = $pageno;
        $data['total_page'] = $total_page;

        return $data;
    }
    
    function blogleft()
    {
        $limit = 3;
        $pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
        
        $q = $this->conn->query("SELECT * FROM baiviet where TrangThai=1");
        $total_title = array();
        while ($row = $q->fetch_assoc()) { $total_title[] = $row; }
        $total_page = ceil(count($total_title)/$limit);

        if ($pageno > $total_page){ $pageno = $total_page;
        } else if ($pageno < 1){ $pageno = 1; }
        $start = ($pageno - 1) * $limit;

        $query = "select * from baiviet where TrangThai=1 and MaBaiViet%2!=0 LIMIT $start, $limit";
        require("result.php");
        return $data;
    }

    function blogright()
    {
        $limit = 3;
        $pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
        
        $q = $this->conn->query("SELECT * FROM baiviet where TrangThai=1");
        $total_title = array();
        while ($row = $q->fetch_assoc()) { $total_title[] = $row; }
        $total_page = ceil(count($total_title)/$limit);

        if ($pageno > $total_page){ $pageno = $total_page;
        } else if ($pageno < 1){ $pageno = 1; }
        $start = ($pageno - 1) * $limit;

        $query = "select * from baiviet where TrangThai=1 and MaBaiViet%2=0 LIMIT $start, $limit";
        require("result.php");
        return $data;
    }

    function banner()
    {
        $query = "select * from banner";
        require("result.php");
        return $data;
    }

    function tag()
    {
        $query = "select * from tag";
        require("result.php");
        return $data;
    }

    function gioithieu()
    {
        $query = "select * from gioithieu Orders LIMIT 1";
        require("result.php");
        return $data;
    }

    function singleblog($id)
    {
        $query = "select * from baiviet where MaBaiViet = $id";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    // right-content

    function right3blog()
    {
        $query = "select * from baiviet where TrangThai=1 ORDER BY LuotThich DESC LIMIT 3";
        require("result.php");
        return $data;
    }

    function right3comment()
    {
        $query = "select * from baiviet where TrangThai=1 ORDER BY BinhLuan DESC LIMIT 3";
        require("result.php");
        return $data;
    }

    function right3tag()
    {
        $query = "select * from baiviet where TrangThai=1 ORDER BY TenTag ASC LIMIT 3";
        require("result.php");
        return $data;
    }

    function right4recent()
    {
        $query = "select * from baiviet where TrangThai=1 ORDER BY NgayCapNhat DESC LIMIT 4";
        require("result.php");
        return $data;
    }

    function right9day()
    {
        $query = "select * from baiviet where TrangThai=1 ORDER BY NgayCapNhat DESC LIMIT 9";
        require("result.php");
        return $data;
    }

    function cvVN($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
    
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
        $str = preg_replace("/(Đ)/", 'd', $str);
        $str = preg_replace("/(B)/", 'c', $str);
        $str = preg_replace("/(C)/", 'c', $str);
        $str = preg_replace("/(D)/", 'd', $str);
        $str = preg_replace("/(G)/", 'g', $str);
        $str = preg_replace("/(H)/", 'h', $str);
        $str = preg_replace("/(I)/", 'i', $str);
        $str = preg_replace("/(K)/", 'k', $str);
        $str = preg_replace("/(L)/", 'l', $str);
        $str = preg_replace("/(M)/", 'm', $str);
        $str = preg_replace("/(N)/", 'n', $str);
        $str = preg_replace("/(P)/", 'p', $str);
        $str = preg_replace("/(Q)/", 'q', $str);
        $str = preg_replace("/(R)/", 'r', $str);
        $str = preg_replace("/(S)/", 's', $str);
        $str = preg_replace("/(T)/", 't', $str);
        $str = preg_replace("/(V)/", 'v', $str);
        $str = preg_replace("/(X)/", 'x', $str);
        $str = preg_replace("/(Y)/", 'y', $str);
        $str = preg_replace("/(Z)/", 'z', $str);
        $str = preg_replace("/(J)/", 'j', $str);
        $str = preg_replace("/(W)/", 'w', $str);
        $str = preg_replace("/(F)/", 'f', $str);

        $str = preg_replace("/( )/", '-', $str);
        $str = preg_replace("/(,)/", '', $str);
        $str = preg_replace("/(_)/", '-', $str);
        $str = preg_replace("/(~)/", '-', $str);
        $str = preg_replace("/(-----)/", '-', $str);
        $str = preg_replace("/(----)/", '-', $str);
        $str = preg_replace("/(---)/", '-', $str);
        $str = preg_replace("/(--)/", '-', $str);

        return $str;
    }

}