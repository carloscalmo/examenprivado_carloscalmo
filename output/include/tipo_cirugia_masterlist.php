<?php
include_once(getabspath("include/tipo_cirugia_settings.php"));

function DisplayMasterTableInfo_tipo_cirugia($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "tipo_cirugia";
	
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["tipo_cirugia_masterlist"] = $layout;


if($detailtable == "cirugia")
{
		$where.= GetFullFieldName("idtipo_cirugia", "", false)."=".$cipherer->MakeDBValue("idtipo_cirugia",$keys[1-1], "", "", true);
	$showKeys .= " "."Código".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
if($detailtable == "detalle_cirugia")
{
		$where.= GetFullFieldName("idtipo_cirugia", "", false)."=".$cipherer->MakeDBValue("idtipo_cirugia",$keys[1-1], "", "", true);
	$showKeys .= " "."Código".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idtipo_cirugia"]));
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["nombre"]));
	

//	idtipo_cirugia - 
			$value="";

					$xt->assign("idtipo_cirugia_mastervalue", $viewControls->showDBValue("idtipo_cirugia", $data, $keylink));

//	nombre - 
			$value="";

					$xt->assign("nombre_mastervalue", $viewControls->showDBValue("nombre", $data, $keylink));

//	descripcion - 
			$value="";

					$xt->assign("descripcion_mastervalue", $viewControls->showDBValue("descripcion", $data, $keylink));

//	precio - Number
			$value="";

					$xt->assign("precio_mastervalue", $viewControls->showDBValue("precio", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("tipo_cirugia", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("tipo_cirugia_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>