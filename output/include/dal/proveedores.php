<?php
$dalTableproveedores = array();
$dalTableproveedores["id"] = array("type"=>3,"varname"=>"id");
$dalTableproveedores["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTableproveedores["descripcion"] = array("type"=>200,"varname"=>"descripcion");
$dalTableproveedores["direccion"] = array("type"=>200,"varname"=>"direccion");
$dalTableproveedores["saldo"] = array("type"=>5,"varname"=>"saldo");
$dalTableproveedores["nit"] = array("type"=>200,"varname"=>"nit");
$dalTableproveedores["telefono"] = array("type"=>200,"varname"=>"telefono");
$dalTableproveedores["municipio_id"] = array("type"=>3,"varname"=>"municipio_id");
	$dalTableproveedores["id"]["key"]=true;
$dal_info["proveedores"]=&$dalTableproveedores;

?>