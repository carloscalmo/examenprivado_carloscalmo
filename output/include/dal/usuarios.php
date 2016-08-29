<?php
$dalTableusuarios = array();
$dalTableusuarios["id"] = array("type"=>3,"varname"=>"id");
$dalTableusuarios["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTableusuarios["contraseña"] = array("type"=>200,"varname"=>"contrase_a");
$dalTableusuarios["fecha_inicio"] = array("type"=>7,"varname"=>"fecha_inicio");
$dalTableusuarios["fecha_fin"] = array("type"=>7,"varname"=>"fecha_fin");
$dalTableusuarios["baja"] = array("type"=>16,"varname"=>"baja");
$dalTableusuarios["empleado_id"] = array("type"=>3,"varname"=>"empleado_id");
$dalTableusuarios["Rol"] = array("type"=>200,"varname"=>"Rol");
	$dalTableusuarios["id"]["key"]=true;
$dal_info["usuarios"]=&$dalTableusuarios;

?>