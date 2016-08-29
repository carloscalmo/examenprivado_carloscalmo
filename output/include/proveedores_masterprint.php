<?php
include_once(getabspath("include/proveedores_settings.php"));

function DisplayMasterTableInfo_proveedores($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="proveedores";

//$strSQL = "SELECT id,   nombre,   descripcion,   direccion,   saldo,   nit,   telefono,   municipio_id  FROM proveedores ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["proveedores_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="factura_compra")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="lotes")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
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
	$keylink.="&key3=".htmlspecialchars(rawurlencode(@$data["nit"]));
	

//	nombre - 
			$xt->assign("nombre_mastervalue", $viewControls->showDBValue("nombre", $data, $keylink));

//	descripcion - 
			$xt->assign("descripcion_mastervalue", $viewControls->showDBValue("descripcion", $data, $keylink));

//	direccion - 
			$xt->assign("direccion_mastervalue", $viewControls->showDBValue("direccion", $data, $keylink));

//	saldo - Number
			$xt->assign("saldo_mastervalue", $viewControls->showDBValue("saldo", $data, $keylink));

//	nit - 
			$xt->assign("nit_mastervalue", $viewControls->showDBValue("nit", $data, $keylink));

//	telefono - 
			$xt->assign("telefono_mastervalue", $viewControls->showDBValue("telefono", $data, $keylink));

//	municipio_id - 
			$xt->assign("municipio_id_mastervalue", $viewControls->showDBValue("municipio_id", $data, $keylink));
	$xt->display("proveedores_masterprint.htm");
	$strTableName=$oldTableName;

}

?>