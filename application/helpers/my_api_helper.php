<?php
function remove_unknown_fields($raw_data,$unexpected_fields){
	$new_data=array();
	foreach($raw_data as $field_name=>$field_value){
		if($field_value!=""&&in_array($field_name,array_values($unexpected_fields))){
			$new_data[$field_name]=$field_value;
		}
	}
	return $new_data;
}
?>