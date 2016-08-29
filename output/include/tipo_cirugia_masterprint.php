<?php
include_once(getabspath("include/tipo_cirugia_settings.php"));

function DisplayMasterTableInfo_tipo_cirugia($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="tipo_cirugia";

//$strSQL = "SELECT idtipo_cirugia,   nombre,   descripcion,   precio  FROM tipo_cirugia ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["tipo_cirugia_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="cirugia")
{
		$where.= GetFullFieldName("idtipo_cirugia", "", false)."=".$cipherer->MakeDBValue("idtipo_cirugia",$keys[1-1], "", "", true);
	$showKeys .= " "."Código".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="detalle_cirugia")
{
		$where.= GetFullFieldName("idtipo_cirugia", "", false)."=".$cipherer->MakeDBValue("idtipo_cirugia",$keys[1-1], "", "", true);
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idtipo_cirugia"]));
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["nombre"]));
	

//	idtipo_cirugia - 
			$xt->assign("idtipo_cirugia_mastervalue", $viewControls->showDBValue("idtipo_cirugia", $data, $keylink));

//	nombre - 
			$xt->assign("nombre_mastervalue", $viewControls->showDBValue("nombre", $data, $keylink));

//	descripcion - 
			$xt->assign("descripcion_mastervalue", $viewControls->showDBValue("descripcion", $data, $keylink));

//	precio - Number
			$xt->assign("precio_mastervalue", $viewControls->showDBValue("precio", $data, $keylink));
	$xt->display("tipo_cirugia_masterprint.htm");
	$strTableName=$oldTableName;

}

?>