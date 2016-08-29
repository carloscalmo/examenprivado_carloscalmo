<?php
$dalTablehospitalizacion = array();
$dalTablehospitalizacion["id"] = array("type"=>3,"varname"=>"id");
$dalTablehospitalizacion["numero_cama"] = array("type"=>3,"varname"=>"numero_cama");
$dalTablehospitalizacion["ambiente_id"] = array("type"=>3,"varname"=>"ambiente_id");
$dalTablehospitalizacion["consulta_id"] = array("type"=>3,"varname"=>"consulta_id");
$dalTablehospitalizacion["fecha_ingreso"] = array("type"=>7,"varname"=>"fecha_ingreso");
$dalTablehospitalizacion["fecha_egreso"] = array("type"=>7,"varname"=>"fecha_egreso");
	$dalTablehospitalizacion["id"]["key"]=true;
$dal_info["hospitalizacion"]=&$dalTablehospitalizacion;

?>