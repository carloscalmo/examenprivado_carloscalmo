<?php
$dalTableconsulta = array();
$dalTableconsulta["id"] = array("type"=>3,"varname"=>"id");
$dalTableconsulta["fecha"] = array("type"=>7,"varname"=>"fecha");
$dalTableconsulta["paciente"] = array("type"=>3,"varname"=>"paciente");
$dalTableconsulta["estado_retirada"] = array("type"=>200,"varname"=>"estado_retirada");
$dalTableconsulta["medico_encargado"] = array("type"=>3,"varname"=>"medico_encargado");
$dalTableconsulta["diagnostico_id"] = array("type"=>3,"varname"=>"diagnostico_id");
$dalTableconsulta["tipo_consulta_id"] = array("type"=>3,"varname"=>"tipo_consulta_id");
	$dalTableconsulta["id"]["key"]=true;
$dal_info["consulta"]=&$dalTableconsulta;

?>