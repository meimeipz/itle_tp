<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//默认定位到登录页面
    public function index(){
        $this->display('index');
        
    }
}