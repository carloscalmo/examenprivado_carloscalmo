<?php
include_once(getabspath("include/usuarios_settings.php"));

function DisplayMasterTableInfo_usuarios($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="usuarios";

//$strSQL = "SELECT id,   nombre,   `contraseña`,   fecha_inicio,   fecha_fin,   baja,   empleado_id,   Rol  FROM usuarios ";

	$cipherer = new RunnerCipherer($strTableName);
	$settings = new ProjectSettings($strTableName, PAGE_PRINT);
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

$where="";

global $pageObject, $page_styles, $page_layouts, $page_layout_names, $container_styles;
$layout = new TLayout("masterprint","Rounded1BlueWave","MobileBlueWave");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["usuarios_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="descarga_inventario_expirado")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Código".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if(!$where)
{
	$strTableName=$oldTableName;
	return;
}
	$str = SecuritySQL("Export");
	if(strlen($str))
		$where.=" and ".$str;
	
	$strWhere = whereAdd($masterQuery->m_where->toSql($masterQuery),$where);
	if(strlen($strWhere))
		$strWhere=" where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL=AddWhere($strSQL,$where);

	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName=$oldTableName;
		return;
	}
	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["nombre"]));
	$keylink.="&key3=".htmlspecialchars(rawurlencode(@$data["empleado_id"]));
	

//	id - 
			$xt->assign("id_mastervalue", $viewControls->showDBValue("id", $data, $keylink));

//	nombre - 
			$xt->assign("nombre_mastervalue", $viewControls->showDBValue("nombre", $data, $keylink));

//	contraseña - 
			$xt->assign("contrase_a_mastervalue", $viewControls->showDBValue("contraseña", $data, $keylink));

//	fecha_inicio - Short Date
			$xt->assign("fecha_inicio_mastervalue", $viewControls->showDBValue("fecha_inicio", $data, $keylink));

//	fecha_fin - Short Date
			$xt->assign("fecha_fin_mastervalue", $viewControls->showDBValue("fecha_fin", $data, $keylink));

//	baja - Checkbox
			$xt->assign("baja_mastervalue", $viewControls->showDBValue("baja", $data, $keylink));

//	empleado_id - 
			$xt->assign("empleado_id_mastervalue", $viewControls->showDBValue("empleado_id", $data, $keylink));

//	Rol - 
			$xt->assign("Rol_mastervalue", $viewControls->showDBValue("Rol", $data, $keylink));
	$xt->display("usuarios_masterprint.htm");
	$strTableName=$oldTableName;

}

?>