<?php
$dalTablelotes = array();
$dalTablelotes["id"] = array("type"=>3,"varname"=>"id");
$dalTablelotes["codigo"] = array("type"=>200,"varname"=>"codigo");
$dalTablelotes["produccion"] = array("type"=>7,"varname"=>"produccion");
$dalTablelotes["caducidad"] = array("type"=>7,"varname"=>"caducidad");
$dalTablelotes["expirado"] = array("type"=>16,"varname"=>"expirado");
$dalTablelotes["proveedor"] = array("type"=>3,"varname"=>"proveedor");
$dalTablelotes["insumo"] = array("type"=>3,"varname"=>"insumo");
$dalTablelotes["cantidad"] = array("type"=>5,"varname"=>"cantidad");
$dalTablelotes["precio"] = array("type"=>5,"varname"=>"precio");
$dalTablelotes["costo"] = array("type"=>5,"varname"=>"costo");
	$dalTablelotes["id"]["key"]=true;
$dal_info["lotes"]=&$dalTablelotes;

?>