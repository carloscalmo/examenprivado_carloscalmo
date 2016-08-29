<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/persona_variables.php");
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
$layout->blocks["top"][] = "details";$page_layouts["persona_view"] = $layout;




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
	header("Location: persona_list.php?a=return");
	exit();
}

$out = "";
$first = true;
$fieldsArr = array();
$arr = array();
$arr['fName'] = "nombre";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("nombre");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "apellido";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("apellido");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "cui";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("cui");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "direccion";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("direccion");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "municipio_id";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("municipio_id");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "telefono";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("telefono");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "nit";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("nit");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "fecha_nacimiento";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("fecha_nacimiento");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "genero_id";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("genero_id");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("id", $data)));
	$xt->assign("show_key2", htmlspecialchars($pageObject->showDBValue("cui", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["id"]));
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["cui"]));

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
//apellido - 
	
	$value = $pageObject->showDBValue("apellido", $data, $keylink);
	if($mainTableOwnerID=="apellido")
		$ownerIdValue=$value;
	$xt->assign("apellido_value",$value);
	if(!$pageObject->isAppearOnTabs("apellido"))
		$xt->assign("apellido_fieldblock",true);
	else
		$xt->assign("apellido_tabfieldblock",true);
////////////////////////////////////////////
//cui - 
	
	$value = $pageObject->showDBValue("cui", $data, $keylink);
	if($mainTableOwnerID=="cui")
		$ownerIdValue=$value;
	$xt->assign("cui_value",$value);
	if(!$pageObject->isAppearOnTabs("cui"))
		$xt->assign("cui_fieldblock",true);
	else
		$xt->assign("cui_tabfieldblock",true);
////////////////////////////////////////////
//direccion - 
	
	$value = $pageObject->showDBValue("direccion", $data, $keylink);
	if($mainTableOwnerID=="direccion")
		$ownerIdValue=$value;
	$xt->assign("direccion_value",$value);
	if(!$pageObject->isAppearOnTabs("direccion"))
		$xt->assign("direccion_fieldblock",true);
	else
		$xt->assign("direccion_tabfieldblock",true);
////////////////////////////////////////////
//municipio_id - 
	
	$value = $pageObject->showDBValue("municipio_id", $data, $keylink);
	if($mainTableOwnerID=="municipio_id")
		$ownerIdValue=$value;
	$xt->assign("municipio_id_value",$value);
	if(!$pageObject->isAppearOnTabs("municipio_id"))
		$xt->assign("municipio_id_fieldblock",true);
	else
		$xt->assign("municipio_id_tabfieldblock",true);
////////////////////////////////////////////
//telefono - 
	
	$value = $pageObject->showDBValue("telefono", $data, $keylink);
	if($mainTableOwnerID=="telefono")
		$ownerIdValue=$value;
	$xt->assign("telefono_value",$value);
	if(!$pageObject->isAppearOnTabs("telefono"))
		$xt->assign("telefono_fieldblock",true);
	else
		$xt->assign("telefono_tabfieldblock",true);
////////////////////////////////////////////
//nit - 
	
	$value = $pageObject->showDBValue("nit", $data, $keylink);
	if($mainTableOwnerID=="nit")
		$ownerIdValue=$value;
	$xt->assign("nit_value",$value);
	if(!$pageObject->isAppearOnTabs("nit"))
		$xt->assign("nit_fieldblock",true);
	else
		$xt->assign("nit_tabfieldblock",true);
////////////////////////////////////////////
//fecha_nacimiento - Short Date
	
	$value = $pageObject->showDBValue("fecha_nacimiento", $data, $keylink);
	if($mainTableOwnerID=="fecha_nacimiento")
		$ownerIdValue=$value;
	$xt->assign("fecha_nacimiento_value",$value);
	if(!$pageObject->isAppearOnTabs("fecha_nacimiento"))
		$xt->assign("fecha_nacimiento_fieldblock",true);
	else
		$xt->assign("fecha_nacimiento_tabfieldblock",true);
////////////////////////////////////////////
//genero_id - 
	
	$value = $pageObject->showDBValue("genero_id", $data, $keylink);
	if($mainTableOwnerID=="genero_id")
		$ownerIdValue=$value;
	$xt->assign("genero_id_value",$value);
	if(!$pageObject->isAppearOnTabs("genero_id"))
		$xt->assign("genero_id_fieldblock",true);
	else
		$xt->assign("genero_id_tabfieldblock",true);

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
		$options['masterTable'] = "persona";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "persona";
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
	$strTableName = "persona";
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
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='persona_edit.php?".$editlink."'\"");

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
