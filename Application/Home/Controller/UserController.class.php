<?php
namespace Home\Controller;
use Think\Controller;


class UserController extends Controller {

	public function login(){

		$username = $_Post['username'];
		$password = $_Post['password'];

		echo $username,$password;

	}
   
}   
