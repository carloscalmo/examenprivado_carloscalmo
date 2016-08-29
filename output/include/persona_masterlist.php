<?php
include_once(getabspath("include/persona_settings.php"));

function DisplayMasterTableInfo_persona($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "persona";
	
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["persona_masterlist"] = $layout;


if($detailtable == "consulta")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
if($detailtable == "empleado")
{
		$where.= GetFullFieldName("id", "", false)."=".$cipherer->MakeDBValue("id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
if($detailtable == "factura_consulta")
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
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["cui"]));
	

//	nombre - 
			$value="";

					$xt->assign("nombre_mastervalue", $viewControls->showDBValue("nombre", $data, $keylink));

//	apellido - 
			$value="";

					$xt->assign("apellido_mastervalue", $viewControls->showDBValue("apellido", $data, $keylink));

//	fecha_nacimiento - Short Date
			$value="";

					$xt->assign("fecha_nacimiento_mastervalue", $viewControls->showDBValue("fecha_nacimiento", $data, $keylink));

//	cui - 
			$value="";

					$xt->assign("cui_mastervalue", $viewControls->showDBValue("cui", $data, $keylink));

//	direccion - 
			$value="";

					$xt->assign("direccion_mastervalue", $viewControls->showDBValue("direccion", $data, $keylink));

//	telefono - 
			$value="";

					$xt->assign("telefono_mastervalue", $viewControls->showDBValue("telefono", $data, $keylink));

//	nit - 
			$value="";

					$xt->assign("nit_mastervalue", $viewControls->showDBValue("nit", $data, $keylink));

//	genero_id - 
			$value="";

					$xt->assign("genero_id_mastervalue", $viewControls->showDBValue("genero_id", $data, $keylink));

//	municipio_id - 
			$value="";

					$xt->assign("municipio_id_mastervalue", $viewControls->showDBValue("municipio_id", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("persona", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("persona_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>