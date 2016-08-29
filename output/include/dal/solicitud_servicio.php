<?php
$dalTablesolicitud_servicio = array();
$dalTablesolicitud_servicio["id"] = array("type"=>3,"varname"=>"id");
$dalTablesolicitud_servicio["fecha"] = array("type"=>7,"varname"=>"fecha");
$dalTablesolicitud_servicio["consulta_id"] = array("type"=>3,"varname"=>"consulta_id");
$dalTablesolicitud_servicio["servicio_id"] = array("type"=>3,"varname"=>"servicio_id");
$dalTablesolicitud_servicio["solicitante"] = array("type"=>3,"varname"=>"solicitante");
	$dalTablesolicitud_servicio["id"]["key"]=true;
$dal_info["solicitud_servicio"]=&$dalTablesolicitud_servicio;

?>