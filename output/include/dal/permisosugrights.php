<?php
$dalTablepermisosugrights = array();
$dalTablepermisosugrights["TableName"] = array("type"=>200,"varname"=>"TableName");
$dalTablepermisosugrights["GroupID"] = array("type"=>3,"varname"=>"GroupID");
$dalTablepermisosugrights["AccessMask"] = array("type"=>200,"varname"=>"AccessMask");
	$dalTablepermisosugrights["TableName"]["key"]=true;
	$dalTablepermisosugrights["GroupID"]["key"]=true;
$dal_info["permisosugrights"]=&$dalTablepermisosugrights;

?>