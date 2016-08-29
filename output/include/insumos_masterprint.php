<?php
include_once(getabspath("include/insumos_settings.php"));

function DisplayMasterTableInfo_insumos($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="insumos";

//$strSQL = "SELECT id,   codigo,   nombre,   contenido,   componente,   cantidad,   presentacion,   existencia_minima,   existencia_actual,   descripcion  FROM insumos ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["insumos_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="detalle_servicio")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Código".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="detalle_cirugia")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Código".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="detalle_compra")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Código".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="lotes")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Código".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="solicitud_medicamento")
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
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["codigo"]));
	

//	codigo - 
			$xt->assign("codigo_mastervalue", $viewControls->showDBValue("codigo", $data, $keylink));

//	nombre - 
			$xt->assign("nombre_mastervalue", $viewControls->showDBValue("nombre", $data, $keylink));

//	contenido - Number
			$xt->assign("contenido_mastervalue", $viewControls->showDBValue("contenido", $data, $keylink));

//	componente - 
			$xt->assign("componente_mastervalue", $viewControls->showDBValue("componente", $data, $keylink));

//	cantidad - Number
			$xt->assign("cantidad_mastervalue", $viewControls->showDBValue("cantidad", $data, $keylink));

//	presentacion - 
			$xt->assign("presentacion_mastervalue", $viewControls->showDBValue("presentacion", $data, $keylink));

//	existencia_minima - Number
			$xt->assign("existencia_minima_mastervalue", $viewControls->showDBValue("existencia_minima", $data, $keylink));

//	existencia_actual - Number
			$xt->assign("existencia_actual_mastervalue", $viewControls->showDBValue("existencia_actual", $data, $keylink));

//	descripcion - 
			$xt->assign("descripcion_mastervalue", $viewControls->showDBValue("descripcion", $data, $keylink));
	$xt->display("insumos_masterprint.htm");
	$strTableName=$oldTableName;

}

?>