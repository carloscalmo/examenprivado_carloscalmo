<?php
$dalTabledetalle_compra = array();
$dalTabledetalle_compra["id"] = array("type"=>3,"varname"=>"id");
$dalTabledetalle_compra["producto"] = array("type"=>3,"varname"=>"producto");
$dalTabledetalle_compra["lote"] = array("type"=>3,"varname"=>"lote");
$dalTabledetalle_compra["cantidad"] = array("type"=>5,"varname"=>"cantidad");
$dalTabledetalle_compra["factura_compra"] = array("type"=>3,"varname"=>"factura_compra");
$dalTabledetalle_compra["costo"] = array("type"=>5,"varname"=>"costo");
	$dalTabledetalle_compra["id"]["key"]=true;
$dal_info["detalle_compra"]=&$dalTabledetalle_compra;

?>