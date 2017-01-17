<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;


header("content-type:text/html;charset=utf-8");

class UserController extends Controller {

	public function login(){

		$userName=$_POST['userName'];
		$passWord=$_POST['passWord'];

        //判断前台数据是否成功传输到后台
		if(!(isset($userName)&&isset($passWord))){

			$this->error('信息提交失败');
		}

		$user=new UserModel();

        //判断用户名及密码是否存在,存在跳转到主页面,否则提示后调回登录界面
        if($user->logincheck($userName,$passWord)){

            $this->display('main');

        }else{

            $this->error('用户名或密码错误');
        }




	}
   
}   
