<?php
$dalTabledetalle_servicio = array();
$dalTabledetalle_servicio["id"] = array("type"=>3,"varname"=>"id");
$dalTabledetalle_servicio["cantidad"] = array("type"=>5,"varname"=>"cantidad");
$dalTabledetalle_servicio["servicio_id"] = array("type"=>3,"varname"=>"servicio_id");
$dalTabledetalle_servicio["insumos_id"] = array("type"=>3,"varname"=>"insumos_id");
	$dalTabledetalle_servicio["id"]["key"]=true;
$dal_info["detalle_servicio"]=&$dalTabledetalle_servicio;

?>