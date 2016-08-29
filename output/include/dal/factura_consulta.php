<?php
$dalTablefactura_consulta = array();
$dalTablefactura_consulta["id"] = array("type"=>3,"varname"=>"id");
$dalTablefactura_consulta["numero_factura"] = array("type"=>200,"varname"=>"numero_factura");
$dalTablefactura_consulta["consulta_id"] = array("type"=>3,"varname"=>"consulta_id");
$dalTablefactura_consulta["cliente_id"] = array("type"=>3,"varname"=>"cliente_id");
$dalTablefactura_consulta["fecha"] = array("type"=>7,"varname"=>"fecha");
$dalTablefactura_consulta["monto"] = array("type"=>5,"varname"=>"monto");
	$dalTablefactura_consulta["id"]["key"]=true;
$dal_info["factura_consulta"]=&$dalTablefactura_consulta;

?>