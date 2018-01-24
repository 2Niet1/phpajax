<?php

function Get_translate($content){ // API 中的 keyfrom 和 key 换成你自己的 keyfrom 和 key 
		$cityname = 1; $key = 'key';$cityname=$content ;$dtype = 'json'; $format=1;
		$content = urlencode($content); 
		 $url = "xxxxxxx?cityname=".$cityname."&dtype".$dtype."$format".$format."&key=".$key;
		$list = file_get_contents($url); $js_de = json_decode($list,true); 
		return $js_de; 
 } 
$content=$_GET['content'];

if($content!=NULL){
	$new_content = Get_translate($content); 
	echo json_encode($new_content); 
}else{
	echo "Nothing!"; 
}

?>