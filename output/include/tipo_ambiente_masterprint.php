<?php
include_once(getabspath("include/tipo_ambiente_settings.php"));

function DisplayMasterTableInfo_tipo_ambiente($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="tipo_ambiente";

//$strSQL = "SELECT idtipo_ambiente,   nombre,   Precio  FROM tipo_ambiente ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["tipo_ambiente_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="ambiente")
{
		$where.= GetFullFieldName("idtipo_ambiente", "", false)."=".$cipherer->MakeDBValue("idtipo_ambiente",$keys[1-1], "", "", true);
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idtipo_ambiente"]));
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["nombre"]));
	

//	idtipo_ambiente - 
			$xt->assign("idtipo_ambiente_mastervalue", $viewControls->showDBValue("idtipo_ambiente", $data, $keylink));

//	nombre - 
			$xt->assign("nombre_mastervalue", $viewControls->showDBValue("nombre", $data, $keylink));

//	Precio - 
			$xt->assign("Precio_mastervalue", $viewControls->showDBValue("Precio", $data, $keylink));
	$xt->display("tipo_ambiente_masterprint.htm");
	$strTableName=$oldTableName;

}

?>