<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * use Common\Model 这块可以不需要使用，框架默认会加载里面的内容
 */
class LoginController extends Controller {

    public function index(){
        // admin.php?c=index
        return $this->display();
    }

    public function check(){
        print_r($_POST);
    }
}