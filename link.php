<?php
	function create_connection()
	{
		$link=mysqli_connect("localhost","root","12345678")
			or die("建立連結失敗".mysqli_connect_error());
		mysqli_query($link,"SET NAMES utf8");
		return $link;
	}
	
	function run_sql($link,$database,$sql) //1.連結 2.資料庫 3.語法
	{
		mysqli_select_db($link,$database) or die("開啟資料庫失敗!".mysqli_connect_error($link));
		$result=mysqli_query($link,$sql);
		return $result;
	}
?>
		
		