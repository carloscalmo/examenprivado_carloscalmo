<?php
$dalTableabonos_clientes = array();
$dalTableabonos_clientes["id"] = array("type"=>3,"varname"=>"id");
$dalTableabonos_clientes["fecha"] = array("type"=>7,"varname"=>"fecha");
$dalTableabonos_clientes["monto"] = array("type"=>5,"varname"=>"monto");
$dalTableabonos_clientes["observaciones"] = array("type"=>200,"varname"=>"observaciones");
$dalTableabonos_clientes["factura_servicio_id"] = array("type"=>3,"varname"=>"factura_servicio_id");
	$dalTableabonos_clientes["id"]["key"]=true;
$dal_info["abonos_clientes"]=&$dalTableabonos_clientes;

?>