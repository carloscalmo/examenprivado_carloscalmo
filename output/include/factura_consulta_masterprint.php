<?php
include_once(getabspath("include/factura_consulta_settings.php"));

function DisplayMasterTableInfo_factura_consulta($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="factura_consulta";

//$strSQL = "SELECT id,   numero_factura,   consulta_id,   cliente_id,   fecha,   monto  FROM factura_consulta ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["factura_consulta_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="abonos_clientes")
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

//	numero_factura - 
			$xt->assign("numero_factura_mastervalue", $viewControls->showDBValue("numero_factura", $data, $keylink));

//	consulta_id - 
			$xt->assign("consulta_id_mastervalue", $viewControls->showDBValue("consulta_id", $data, $keylink));

//	cliente_id - 
			$xt->assign("cliente_id_mastervalue", $viewControls->showDBValue("cliente_id", $data, $keylink));

//	fecha - Short Date
			$xt->assign("fecha_mastervalue", $viewControls->showDBValue("fecha", $data, $keylink));

//	monto - Number
			$xt->assign("monto_mastervalue", $viewControls->showDBValue("monto", $data, $keylink));
	$xt->display("factura_consulta_masterprint.htm");
	$strTableName=$oldTableName;

}

?>