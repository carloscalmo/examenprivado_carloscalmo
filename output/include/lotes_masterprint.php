<?php
include_once(getabspath("include/lotes_settings.php"));

function DisplayMasterTableInfo_lotes($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="lotes";

//$strSQL = "SELECT id,   codigo,   produccion,   caducidad,   expirado,   proveedor,   insumo,   cantidad,   precio,   costo  FROM lotes ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["lotes_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="descarga_inventario_expirado")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="detalle_compra")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="solicitud_medicamento")
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
	

//	id - 
			$xt->assign("id_mastervalue", $viewControls->showDBValue("id", $data, $keylink));

//	codigo - 
			$xt->assign("codigo_mastervalue", $viewControls->showDBValue("codigo", $data, $keylink));

//	produccion - Short Date
			$xt->assign("produccion_mastervalue", $viewControls->showDBValue("produccion", $data, $keylink));

//	caducidad - Short Date
			$xt->assign("caducidad_mastervalue", $viewControls->showDBValue("caducidad", $data, $keylink));

//	expirado - Checkbox
			$xt->assign("expirado_mastervalue", $viewControls->showDBValue("expirado", $data, $keylink));

//	proveedor - 
			$xt->assign("proveedor_mastervalue", $viewControls->showDBValue("proveedor", $data, $keylink));

//	insumo - 
			$xt->assign("insumo_mastervalue", $viewControls->showDBValue("insumo", $data, $keylink));

//	cantidad - Number
			$xt->assign("cantidad_mastervalue", $viewControls->showDBValue("cantidad", $data, $keylink));

//	precio - Number
			$xt->assign("precio_mastervalue", $viewControls->showDBValue("precio", $data, $keylink));

//	costo - Number
			$xt->assign("costo_mastervalue", $viewControls->showDBValue("costo", $data, $keylink));
	$xt->display("lotes_masterprint.htm");
	$strTableName=$oldTableName;

}

?>