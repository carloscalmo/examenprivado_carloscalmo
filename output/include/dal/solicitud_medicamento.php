<?php
$dalTablesolicitud_medicamento = array();
$dalTablesolicitud_medicamento["id"] = array("type"=>3,"varname"=>"id");
$dalTablesolicitud_medicamento["fecha"] = array("type"=>7,"varname"=>"fecha");
$dalTablesolicitud_medicamento["consulta_id"] = array("type"=>3,"varname"=>"consulta_id");
$dalTablesolicitud_medicamento["responsable"] = array("type"=>3,"varname"=>"responsable");
$dalTablesolicitud_medicamento["medicamento_id"] = array("type"=>3,"varname"=>"medicamento_id");
$dalTablesolicitud_medicamento["lote_id"] = array("type"=>3,"varname"=>"lote_id");
$dalTablesolicitud_medicamento["cantidad"] = array("type"=>5,"varname"=>"cantidad");
	$dalTablesolicitud_medicamento["id"]["key"]=true;
$dal_info["solicitud_medicamento"]=&$dalTablesolicitud_medicamento;

?>