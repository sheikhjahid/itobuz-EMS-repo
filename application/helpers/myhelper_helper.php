<?php 

	function pr($data,$flag=0)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		if($flag==1)
		{
			die();
		}
	}//end of function

	function getHeader()
	{
		require_once '../views/layout/header.php';
	}//end of function
	

