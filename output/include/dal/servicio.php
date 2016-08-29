<?php
$dalTableservicio = array();
$dalTableservicio["id"] = array("type"=>3,"varname"=>"id");
$dalTableservicio["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTableservicio["descripcion"] = array("type"=>200,"varname"=>"descripcion");
$dalTableservicio["precio"] = array("type"=>5,"varname"=>"precio");
	$dalTableservicio["id"]["key"]=true;
$dal_info["servicio"]=&$dalTableservicio;

?>