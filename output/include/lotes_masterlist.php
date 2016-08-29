<?php
include_once(getabspath("include/lotes_settings.php"));

function DisplayMasterTableInfo_lotes($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "lotes";
	
	$settings = new ProjectSettings($strTableName, PAGE_LIST);
	$cipherer = new RunnerCipherer($strTableName);
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

$where = "";
$mKeys = array();
$showKeys = "";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;

$layout = new TLayout("masterlist","Rounded1BlueWave","MobileBlueWave");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterlistheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterlistfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["lotes_masterlist"] = $layout;


if($detailtable == "descarga_inventario_expirado")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
if($detailtable == "detalle_compra")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
if($detailtable == "solicitud_medicamento")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
	if(!$where)
	{
		$strTableName = $oldTableName;
		return;
	}
	$str = SecuritySQL("Search");
	if(strlen($str))
		$where.= " and ".$str;

	$strWhere = whereAdd($masterQuery->WhereToSql(),$where);
	if(strlen($strWhere))
		$strWhere = " where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL = AddWhere($strSQL,$where);
	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName = $oldTableName;
		return;
	}
	$keylink = "";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));
	

//	id - 
			$value="";

					$xt->assign("id_mastervalue", $viewControls->showDBValue("id", $data, $keylink));

//	codigo - 
			$value="";

					$xt->assign("codigo_mastervalue", $viewControls->showDBValue("codigo", $data, $keylink));

//	produccion - Short Date
			$value="";

					$xt->assign("produccion_mastervalue", $viewControls->showDBValue("produccion", $data, $keylink));

//	caducidad - Short Date
			$value="";

					$xt->assign("caducidad_mastervalue", $viewControls->showDBValue("caducidad", $data, $keylink));

//	expirado - Checkbox
			$value="";

					$xt->assign("expirado_mastervalue", $viewControls->showDBValue("expirado", $data, $keylink));

//	proveedor - 
			$value="";

					$xt->assign("proveedor_mastervalue", $viewControls->showDBValue("proveedor", $data, $keylink));

//	insumo - 
			$value="";

					$xt->assign("insumo_mastervalue", $viewControls->showDBValue("insumo", $data, $keylink));

//	cantidad - Number
			$value="";

					$xt->assign("cantidad_mastervalue", $viewControls->showDBValue("cantidad", $data, $keylink));

//	precio - Number
			$value="";

					$xt->assign("precio_mastervalue", $viewControls->showDBValue("precio", $data, $keylink));

//	costo - Number
			$value="";

					$xt->assign("costo_mastervalue", $viewControls->showDBValue("costo", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("lotes", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("lotes_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>