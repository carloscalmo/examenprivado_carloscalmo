<?php
$dalTablepersona = array();
$dalTablepersona["id"] = array("type"=>3,"varname"=>"id");
$dalTablepersona["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTablepersona["apellido"] = array("type"=>200,"varname"=>"apellido");
$dalTablepersona["fecha_nacimiento"] = array("type"=>7,"varname"=>"fecha_nacimiento");
$dalTablepersona["cui"] = array("type"=>200,"varname"=>"cui");
$dalTablepersona["direccion"] = array("type"=>200,"varname"=>"direccion");
$dalTablepersona["telefono"] = array("type"=>200,"varname"=>"telefono");
$dalTablepersona["nit"] = array("type"=>200,"varname"=>"nit");
$dalTablepersona["genero_id"] = array("type"=>3,"varname"=>"genero_id");
$dalTablepersona["municipio_id"] = array("type"=>3,"varname"=>"municipio_id");
	$dalTablepersona["id"]["key"]=true;
$dal_info["persona"]=&$dalTablepersona;

?>