<?php
namespace Home\Controller;
use Think\Controller;


class PrintController extends Controller {

	public function getimagelog(){

		$model = new \Home\Model\PrintModel();

		$result = $model->getdata();

		echo $result;

		//$this->assign('userid',$result);
		
		//$this->display('print:printlog');


	}
   
}   
