<?php
session_start();

    $mod = isset($_GET['mod']) ? $_GET['mod'] : "trangchu";
    $act = isset($_GET['act']) ? $_GET['act'] : "list";
    switch ($mod) {
        case 'baiviet':
            require_once('MVC/controllers/BaiVietController.php');
            $controller_obj = new BaiVietController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;

        case 'gioithieu':
            require_once('MVC/controllers/GioiThieuController.php');
            $controller_obj = new GioiThieuController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;

            case 'tag':
                require_once('MVC/controllers/TagController.php');
                $controller_obj = new TagController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'add':
                        $controller_obj->add();
                        break;
                    case 'store':
                        $controller_obj->store();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    case 'delete':
                        $controller_obj->delete();
                        break;
                    case 'edit':
                        $controller_obj->edit();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;

        case 'banner':
            require_once('MVC/controllers/BannerController.php');
            $controller_obj = new BannerController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;

            case 'trangchu':
                require_once('MVC/controllers/HomeController.php');
                $controller_obj = new HomeController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
        
        default:
            header('location: ?mod=trangchu');
            // require_once('MVC/controllers/LoginController.php');
            // $controller_obj = new LoginController();
            // $controller_obj->admin();
            // break;
    }