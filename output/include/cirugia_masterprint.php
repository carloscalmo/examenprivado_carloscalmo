<?php
include_once(getabspath("include/cirugia_settings.php"));

function DisplayMasterTableInfo_cirugia($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="cirugia";

//$strSQL = "SELECT id,   fecha,   encargado,   ambiente_id,   idtipo_cirugia,   consulta_id  FROM cirugia ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["cirugia_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="empleados_cirugia")
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
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["consulta_id"]));
	

//	id - 
			$xt->assign("id_mastervalue", $viewControls->showDBValue("id", $data, $keylink));

//	fecha - Short Date
			$xt->assign("fecha_mastervalue", $viewControls->showDBValue("fecha", $data, $keylink));

//	encargado - 
			$xt->assign("encargado_mastervalue", $viewControls->showDBValue("encargado", $data, $keylink));

//	ambiente_id - 
			$xt->assign("ambiente_id_mastervalue", $viewControls->showDBValue("ambiente_id", $data, $keylink));

//	idtipo_cirugia - 
			$xt->assign("idtipo_cirugia_mastervalue", $viewControls->showDBValue("idtipo_cirugia", $data, $keylink));

//	consulta_id - 
			$xt->assign("consulta_id_mastervalue", $viewControls->showDBValue("consulta_id", $data, $keylink));
	$xt->display("cirugia_masterprint.htm");
	$strTableName=$oldTableName;

}

?>