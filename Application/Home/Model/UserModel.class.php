<?php


namespace Home\Model;
use Think\Model;


class UserModel extends Model {

    public function loginCheck($username,$password){



        $user = M('user');

        $rst=$user->where("username='$username' and password='$password'")->find();

        if($rst){

            return true;


        }else{

            return false;
        }


    }
}