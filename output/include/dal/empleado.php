<?php
$dalTableempleado = array();
$dalTableempleado["id"] = array("type"=>3,"varname"=>"id");
$dalTableempleado["profesion"] = array("type"=>200,"varname"=>"profesion");
$dalTableempleado["puesto_id"] = array("type"=>3,"varname"=>"puesto_id");
$dalTableempleado["persona_id"] = array("type"=>3,"varname"=>"persona_id");
	$dalTableempleado["id"]["key"]=true;
$dal_info["empleado"]=&$dalTableempleado;

?>