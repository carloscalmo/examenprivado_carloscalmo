<?php
$dalTableinsumos = array();
$dalTableinsumos["id"] = array("type"=>3,"varname"=>"id");
$dalTableinsumos["codigo"] = array("type"=>200,"varname"=>"codigo");
$dalTableinsumos["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTableinsumos["contenido"] = array("type"=>5,"varname"=>"contenido");
$dalTableinsumos["componente"] = array("type"=>200,"varname"=>"componente");
$dalTableinsumos["cantidad"] = array("type"=>5,"varname"=>"cantidad");
$dalTableinsumos["presentacion"] = array("type"=>200,"varname"=>"presentacion");
$dalTableinsumos["existencia_minima"] = array("type"=>5,"varname"=>"existencia_minima");
$dalTableinsumos["existencia_actual"] = array("type"=>5,"varname"=>"existencia_actual");
$dalTableinsumos["descripcion"] = array("type"=>200,"varname"=>"descripcion");
	$dalTableinsumos["id"]["key"]=true;
$dal_info["insumos"]=&$dalTableinsumos;

?>