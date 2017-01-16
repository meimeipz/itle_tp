<?php
namespace Home\Controller;
use Think\Controller;

//header("content-type:text/html;charset=utf-8");
class UserController extends Controller {

	public function login(){

		$userName=$_Post['userName'];

		$passWord=$_Post['passWord'];

		echo $userName,$passWord;



		/*
		if(isset($_Post['userName'])&&isset($_Post['passWord'])){

			echo '提交成功';
		}else{
			echo '提交失败';
		}
		*/

	}
   
}   
