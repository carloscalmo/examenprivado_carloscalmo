<?php
$dalTableabonos_proveedores = array();
$dalTableabonos_proveedores["id"] = array("type"=>3,"varname"=>"id");
$dalTableabonos_proveedores["fecha"] = array("type"=>7,"varname"=>"fecha");
$dalTableabonos_proveedores["monto"] = array("type"=>5,"varname"=>"monto");
$dalTableabonos_proveedores["observaciones"] = array("type"=>200,"varname"=>"observaciones");
$dalTableabonos_proveedores["factura"] = array("type"=>3,"varname"=>"factura");
	$dalTableabonos_proveedores["id"]["key"]=true;
$dal_info["abonos_proveedores"]=&$dalTableabonos_proveedores;

?>