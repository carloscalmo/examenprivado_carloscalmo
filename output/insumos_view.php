<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/insumos_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view3","Rounded1BlueWave","MobileBlueWave");
$layout->blocks["top"] = array();
$layout->containers["pdf"] = array();

$layout->containers["pdf"][] = array("name"=>"viewpdf","block"=>"","substyle"=>1);


$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["insumos_view"] = $layout;




//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: insumos_list.php?a=return");
	exit();
}

$out = "";
$first = true;
$fieldsArr = array();
$arr = array();
$arr['fName'] = "codigo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("codigo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "nombre";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("nombre");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "componente";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("componente");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "contenido";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("contenido");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "presentacion";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("presentacion");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "cantidad";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("cantidad");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "existencia_actual";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("existencia_actual");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "existencia_minima";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("existencia_minima");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "descripcion";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("descripcion");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("id", $data)));
	$xt->assign("show_key2", htmlspecialchars($pageObject->showDBValue("codigo", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["codigo"]));

////////////////////////////////////////////
//codigo - 
	
	$value = $pageObject->showDBValue("codigo", $data, $keylink);
	if($mainTableOwnerID=="codigo")
		$ownerIdValue=$value;
	$xt->assign("codigo_value",$value);
	if(!$pageObject->isAppearOnTabs("codigo"))
		$xt->assign("codigo_fieldblock",true);
	else
		$xt->assign("codigo_tabfieldblock",true);
////////////////////////////////////////////
//nombre - 
	
	$value = $pageObject->showDBValue("nombre", $data, $keylink);
	if($mainTableOwnerID=="nombre")
		$ownerIdValue=$value;
	$xt->assign("nombre_value",$value);
	if(!$pageObject->isAppearOnTabs("nombre"))
		$xt->assign("nombre_fieldblock",true);
	else
		$xt->assign("nombre_tabfieldblock",true);
////////////////////////////////////////////
//componente - 
	
	$value = $pageObject->showDBValue("componente", $data, $keylink);
	if($mainTableOwnerID=="componente")
		$ownerIdValue=$value;
	$xt->assign("componente_value",$value);
	if(!$pageObject->isAppearOnTabs("componente"))
		$xt->assign("componente_fieldblock",true);
	else
		$xt->assign("componente_tabfieldblock",true);
////////////////////////////////////////////
//contenido - Number
	
	$value = $pageObject->showDBValue("contenido", $data, $keylink);
	if($mainTableOwnerID=="contenido")
		$ownerIdValue=$value;
	$xt->assign("contenido_value",$value);
	if(!$pageObject->isAppearOnTabs("contenido"))
		$xt->assign("contenido_fieldblock",true);
	else
		$xt->assign("contenido_tabfieldblock",true);
////////////////////////////////////////////
//presentacion - 
	
	$value = $pageObject->showDBValue("presentacion", $data, $keylink);
	if($mainTableOwnerID=="presentacion")
		$ownerIdValue=$value;
	$xt->assign("presentacion_value",$value);
	if(!$pageObject->isAppearOnTabs("presentacion"))
		$xt->assign("presentacion_fieldblock",true);
	else
		$xt->assign("presentacion_tabfieldblock",true);
////////////////////////////////////////////
//cantidad - Number
	
	$value = $pageObject->showDBValue("cantidad", $data, $keylink);
	if($mainTableOwnerID=="cantidad")
		$ownerIdValue=$value;
	$xt->assign("cantidad_value",$value);
	if(!$pageObject->isAppearOnTabs("cantidad"))
		$xt->assign("cantidad_fieldblock",true);
	else
		$xt->assign("cantidad_tabfieldblock",true);
////////////////////////////////////////////
//existencia_actual - Number
	
	$value = $pageObject->showDBValue("existencia_actual", $data, $keylink);
	if($mainTableOwnerID=="existencia_actual")
		$ownerIdValue=$value;
	$xt->assign("existencia_actual_value",$value);
	if(!$pageObject->isAppearOnTabs("existencia_actual"))
		$xt->assign("existencia_actual_fieldblock",true);
	else
		$xt->assign("existencia_actual_tabfieldblock",true);
////////////////////////////////////////////
//existencia_minima - Number
	
	$value = $pageObject->showDBValue("existencia_minima", $data, $keylink);
	if($mainTableOwnerID=="existencia_minima")
		$ownerIdValue=$value;
	$xt->assign("existencia_minima_value",$value);
	if(!$pageObject->isAppearOnTabs("existencia_minima"))
		$xt->assign("existencia_minima_fieldblock",true);
	else
		$xt->assign("existencia_minima_tabfieldblock",true);
////////////////////////////////////////////
//descripcion - 
	
	$value = $pageObject->showDBValue("descripcion", $data, $keylink);
	if($mainTableOwnerID=="descripcion")
		$ownerIdValue=$value;
	$xt->assign("descripcion_value",$value);
	if(!$pageObject->isAppearOnTabs("descripcion"))
		$xt->assign("descripcion_fieldblock",true);
	else
		$xt->assign("descripcion_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "insumos";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "insumos";
			continue;
		}
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
			}
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "insumos";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!$pdf)
{
	if(!GetGlobalData("openPDFFileDirectly", true))
		$pageObject->AddJSFile("include/pdf.js");
	else 
		$pageObject->AddJSFile("include/pdfinitlink.js");
	if(!$all)
		$xt->assign("pdflink_block",true);

}

if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
	$editkeys["editid2"]=postvalue("editid2");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='insumos_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
	 		$nextlink .="&";
		$nextlink .="editid2=".htmlspecialchars(rawurlencode($next[2-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
			$prevlink .="&";
		$prevlink .="editid2=".htmlspecialchars(rawurlencode($prev[2-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	if($pdf)
	{
		$xt->load_template($pageObject->templatefile);
		$page = $xt->fetch_loaded();
		$pagewidth = postvalue("width")*1.05;
		$landscape=false;
		include("plugins/page2pdf.php");
	}
	break;
}
if($all)
{
	$head="<span name=page>";
	if($eventObj->exists("BeforeShowView"))
		$eventObj->BeforeShowView($xt,$pageObject->templatefile,$data, $pageObject);
	if($oldtemplatefile!=$pageObject->templatefile)
		$xt->load_template($pageObject->templatefile);

	$xt->assign("id",$id);
	$page="";
	if($id==1)
	{
		$head = $head;
		$head = "<html><head>".$xt->fetch_loaded("stylefiles_block")."</head><body>".$head;
	}
	$page .= $xt->fetch_loaded("style_block");
	$page .= $xt->fetch_loaded("body");
	$data=db_fetch_array($rs);
	if($eventObj->exists("ProcessValuesView"))
		$eventObj->ProcessValuesView($data, $pageObject);
	$foot="</span>";
	if($data)
	{
		if(!$pdf)
			$foot.="<div style=\"page-break-after: always\">&nbsp;</div>";
		else
			$foot.="<div style=\"page-break-after: always\">&nbsp;</div>";
	}
	else
		$foot.="</body></html>";
	$page=$head.$page.$foot;
	$id++;

	if(!$pdf)
	{
		echo $page;
	}
	else
	{
		$out.=$page;
	}
}
}

if($all)
{
	if(!$pdf)
		echo "<script>Runner.Pdf.RunPDF();</script>";
	else
	{
		$page=$out;
		$pagewidth = postvalue("width")*1.05;
		$landscape=false;
		include("plugins/page2pdf.php");
	}
}

?>
