<?php
$arrayName = array(
	'<a>', 
	'</a>',
	'<div>',
	'<p>',
	'<i>',
	'<i>',
	'</i>',
	'</i>',
	'</p>',
	'</div>',
	'<span>',
	'</span>' 
);
 $result = rambler($arrayName);
 print_r ($result);
function rambler($array){
$current_tag = array();
	foreach ($array as $tag) {
		if (!empty($current_tag) && check_pair_tags(end($current_tag), $tag)){
			array_pop($current_tag);
		}else {
			$current_tag[] = $tag;
		}
	}
	if (empty($current_tag))
	{
		return "успех";
	}
	else 
	{
		return "не успех";
	}
}
function check_pair_tags($first_tag, $second_tag)
{	
	if ($first_tag != $second_tag && $first_tag == str_replace('</', '<', $second_tag ))
	{
		return true;
	}
	else{
		return false;
	}
}