<?php
$dalTablefactura_compra = array();
$dalTablefactura_compra["id"] = array("type"=>3,"varname"=>"id");
$dalTablefactura_compra["numero_factura"] = array("type"=>200,"varname"=>"numero_factura");
$dalTablefactura_compra["fecha"] = array("type"=>7,"varname"=>"fecha");
$dalTablefactura_compra["total_factura"] = array("type"=>5,"varname"=>"total_factura");
$dalTablefactura_compra["proveedor"] = array("type"=>3,"varname"=>"proveedor");
	$dalTablefactura_compra["id"]["key"]=true;
$dal_info["factura_compra"]=&$dalTablefactura_compra;

?>