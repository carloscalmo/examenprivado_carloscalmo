<?php
$dalTableambiente = array();
$dalTableambiente["id"] = array("type"=>3,"varname"=>"id");
$dalTableambiente["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTableambiente["capacidad"] = array("type"=>3,"varname"=>"capacidad");
$dalTableambiente["idtipo_ambiente"] = array("type"=>3,"varname"=>"idtipo_ambiente");
	$dalTableambiente["id"]["key"]=true;
$dal_info["ambiente"]=&$dalTableambiente;

?>