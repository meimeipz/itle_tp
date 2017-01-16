<?php

namespace Home\Model;
use Think\Model;
/**
* 打印统计模型
*/
class PrintModel
{
	
	public function getdata()
	{
		
		
		$link= mssql_connect('imagelog','IT','nzlgipe1@rn');
		if(!$link) die('Something went wrong while connecting to MSSQL!');
		mssql_select_db("ImageLog",$link);
		$sql="select UserID from ImageLog.dbo.Store limit 1";  
		$result = mssql_query($sql, $link); 
		return $result;
	}
}