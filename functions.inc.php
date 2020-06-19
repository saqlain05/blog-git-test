<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function get_product($con,$limit='',$product_id='',$search_str=''){
	$sql="select * from blog";
	
	if($product_id!=''){
		$sql.=" and product.id=$product_id ";
	}
	
	if($search_str!=''){
		$sql.=" and (blog.title like '%$search_str%' or blog.text like '%$search_str%') ";
	}
	
	if($limit!=''){
		$sql.=" limit $limit";
	}
	//echo $sql;
	$res=mysqli_query($con,$sql);
	$data=array();
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;
}



// function wishlist_add($con,$uid,$pid){
// 	$added_on=date('Y-m-d h:i:s');
// 	mysqli_query($con,"insert into wishlist(user_id,product_id,added_on) values('$uid','$pid','$added_on')");
// }
?>