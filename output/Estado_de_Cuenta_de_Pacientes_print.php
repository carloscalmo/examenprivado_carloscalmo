<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include('classes/searchclause.php');

if (@$_REQUEST["format"]!="excel" && @$_REQUEST["format"]!="word") 
	add_nocache_headers();

include("include/Estado_de_Cuenta_de_Pacientes_variables.php");

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(CheckPermissionsEvent($strTableName, 'P') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	echo "<p>"."No tiene permiso para acceder a esta tabla"." <a href=\"login.php\">"."Regresar a la página de conexión"."</a></p>";
	return;
}

$cipherer = new RunnerCipherer($strTableName);

include('include/xtempl.php');
include 'classes/runnerpage.php';
$xt = new Xtempl();

$layout = new TLayout("report_print","Rounded1BlueWave","MobileBlueWave");
$layout->blocks["top"] = array();
$layout->containers["pdf"] = array();

$layout->containers["pdf"][] = array("name"=>"printpdf","block"=>"","substyle"=>1);


$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"report_print","block"=>"","substyle"=>1);


$layout->skins["grid"] = "empty";
$layout->blocks["top"][] = "grid";$page_layouts["Estado_de_Cuenta_de_Pacientes_rprint"] = $layout;


$id = postvalue("id") != "" ? postvalue("id") : 1;

//array of params for classes
$params = array("pageType" => PAGE_RPRINT, "id" =>$id, "tName"=>$strTableName);
$params["templatefile"] = "Estado_de_Cuenta_de_Pacientes_rprint.htm";
$params["xt"] = &$xt;
$pageObject = new RunnerPage($params);
$pageObject->AddJSFile("include/lang/".getLangFileName(mlang_getcurrentlang()).".js");

// add button events if exist
$pageObject->addButtonHandlers();

$sessionPrefix = $strTableName;

$cross_table = 0;

if($cross_table)
{
	include("classes/crosstable_report.php");
//	include("include/reportfunctions.php");
}

//	Before Process event
if($eventObj->exists("BeforeProcessPrint"))
	$eventObj->BeforeProcessPrint($conn, $pageObject);
	
$forExport = false;

if (@$_REQUEST["format"]=="excel")
{
	$forExport = true;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=Estado_de_Cuenta_de_Pacientes.xls");
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
}
else if (@$_REQUEST["format"]=="word")
{
	$forExport = true;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=Estado_de_Cuenta_de_Pacientes.doc");
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
}

if(!$_SESSION[$sessionPrefix."_pagenumber"])
	$_SESSION[$sessionPrefix."_pagenumber"]=1;
	
if(!$_SESSION[$sessionPrefix."_pagesize"])
	$_SESSION[$sessionPrefix."_pagesize"]=30;

$PageSize=$_SESSION[$sessionPrefix."_pagesize"];
$bAll = isset($_REQUEST["all"]) && $_REQUEST["all"];
$pagestart = ($_SESSION[$sessionPrefix."_pagenumber"]-1)*$_SESSION[$sessionPrefix."_pagesize"];

if (@$_REQUEST["format"])
{
	//$forExport = true;
	// read stylesheet file
	//$cssdata = myfile_get_contents(getabspath("include/style.css"), "r");
	//$xt->assign("cssdata",$cssdata);
	$xt->assign("stylesheetlink",false);
	//$bAll=false;
}
else
{
	$xt->assign("stylesheetlink",true);	
}

$strWhereClause = @$_SESSION[$sessionPrefix."_where"];

$strSQL = $gQuery->gSQLWhere($strWhereClause);

if($eventObj->exists("BeforeQueryPrint"))
	$eventObj->BeforeQueryPrint($strSQL,$strWhereClause,$strOrderBy, $pageObject);

$strSQL = $gQuery->gSQLWhere($strWhereClause);
LogInfo($strSQL);

//////////////////////////////////////////////////////////////////////////////////////
if(isset($_REQUEST['a']) && $_REQUEST['a'] == 'advsearch')
	$search = true;
else
	$search = false;

include('classes/reportlib.php');

// array with all params
$params = array();
$params['sessionPrefix'] = $sessionPrefix;
// report table info
$params['tName'] = $strTableName;
$params['repGroupFieldsCount'] = 1;
$params['repPageSummary'] = 0;
$params['repGlobalSummary'] = 0;
$params['repLayout'] = 0;
$params['showGroupSummaryCount'] = 0;
$params['repShowDet'] = 0;
$params['mode'] = MODE_PRINT;


// report field info
$repGroupFields = array();
$groupField = array();
$groupField['strGroupField'] = "Código de consulta";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 1;
$groupField['strGroupField'] = "Código de consulta";
$groupField['showGroupSummary'] = "0";
$repGroupFields[] = $groupField;
$params['repGroupFields'] = &$repGroupFields;



// current table key fields
$params['tKeyFields'] = $pageObject->pSet->getTableKeys();
// if any field used for totals
$params['isExistTotalFields'] = false;
// table fields list


$params['fieldsArr'] = array();
$fieldArr = array();
$fieldArr['name'] = "Código de consulta";
//'fName' added for maps
$fieldArr['fName'] = "Código de consulta";
$fieldArr['label'] = "Código de consulta";
$fieldArr['goodName'] = "C_digo_de_consulta";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Código Personal";
//'fName' added for maps
$fieldArr['fName'] = "Código Personal";
$fieldArr['label'] = "Código Personal";
$fieldArr['goodName'] = "C_digo_Personal";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Código Único de Identificación";
//'fName' added for maps
$fieldArr['fName'] = "Código Único de Identificación";
$fieldArr['label'] = "Código Único de Identificación";
$fieldArr['goodName'] = "C_digo__nico_de_Identificaci_n";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Paciente";
//'fName' added for maps
$fieldArr['fName'] = "Paciente";
$fieldArr['label'] = "Paciente";
$fieldArr['goodName'] = "Paciente";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "NIT";
//'fName' added for maps
$fieldArr['fName'] = "NIT";
$fieldArr['label'] = "NIT";
$fieldArr['goodName'] = "NIT";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Dirección";
//'fName' added for maps
$fieldArr['fName'] = "Dirección";
$fieldArr['label'] = "Dirección";
$fieldArr['goodName'] = "Direcci_n";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Teléfono";
//'fName' added for maps
$fieldArr['fName'] = "Teléfono";
$fieldArr['label'] = "Teléfono";
$fieldArr['goodName'] = "Tel_fono";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Fecha";
//'fName' added for maps
$fieldArr['fName'] = "Fecha";
$fieldArr['label'] = "Fecha";
$fieldArr['goodName'] = "Fecha";
$fieldArr['repPage'] = "1";
$fieldArr['viewFormat'] = "Short Date";
$fieldArr['editFormat'] = "Date";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Tipo de consulta";
//'fName' added for maps
$fieldArr['fName'] = "Tipo de consulta";
$fieldArr['label'] = "Tipo de consulta";
$fieldArr['goodName'] = "Tipo_de_consulta";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Médico Encargado";
//'fName' added for maps
$fieldArr['fName'] = "Médico Encargado";
$fieldArr['label'] = "Médico Encargado";
$fieldArr['goodName'] = "M_dico_Encargado";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Número de Factura";
//'fName' added for maps
$fieldArr['fName'] = "Número de Factura";
$fieldArr['label'] = "Número de Factura";
$fieldArr['goodName'] = "N_mero_de_Factura";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Costo de los Servicios";
//'fName' added for maps
$fieldArr['fName'] = "Costo de los Servicios";
$fieldArr['label'] = "Costo de los Servicios";
$fieldArr['goodName'] = "Costo_de_los_Servicios";
$fieldArr['repPage'] = "1";
$fieldArr['viewFormat'] = "Number";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Total Abonado";
//'fName' added for maps
$fieldArr['fName'] = "Total Abonado";
$fieldArr['label'] = "Total Abonado";
$fieldArr['goodName'] = "Total_Abonado";
$fieldArr['repPage'] = "1";
$fieldArr['viewFormat'] = "Number";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;

$pageObject->setGoogleMapsParams($params['fieldsArr']);

$pageObject->searchClauseObj->parseRequest();	

$strSecuritySql = SecuritySQL("Search", $strTableName);
$gsqlWhereExpr = whereAdd($gQuery->WhereToSql(), $strSecuritySql);

if($cross_table)
{
	
	$cross_array = array();
	$t="Estado_de_Cuenta_de_Pacientes";
	$cross_array["tables"][]=$t;
	foreach($repGroupFields as $ind=>$value)
	{
		$cross_array["group_fields"][$ind]["name"]=$value["strGroupField"];
		$cross_array["group_fields"][$ind]["int_type"]=$value["groupInterval"];
		$cross_array["group_fields"][$ind]["group_type"]="all";
	}
	$sum_x = 0;
	$sum_y = 0;
	if($sum_x || $sum_y)
		$cross_array["group_fields"][$ind+1]["sum_total"] = true;
	else
		$cross_array["group_fields"][$ind+1]["sum_total"] = false;
	if($sum_x)
		$cross_array["group_fields"][$ind+1]["sum_x"]=true;
	else
		$cross_array["group_fields"][$ind+1]["sum_x"]=false;
	if($sum_y)
		$cross_array["group_fields"][$ind+1]["sum_y"]=true;
	else
		$cross_array["group_fields"][$ind+1]["sum_y"]=false;
	
	foreach($params["fieldsArr"] as $ind=>$value)
	{
		$cross_array["totals"][$value["name"]]["name"]=$value["name"];
		$cross_array["totals"][$value["name"]]["label"]=$value["label"];
		if($value["totalMax"])
			$cross_array["totals"][$value["name"]]["max"]=true;
		else
			$cross_array["totals"][$value["name"]]["max"]=false;
		if($value["totalMin"])
			$cross_array["totals"][$value["name"]]["min"]=true;
		else
			$cross_array["totals"][$value["name"]]["min"]=false;
		if($value["totalSum"])
			$cross_array["totals"][$value["name"]]["sum"]=true;
		else
			$cross_array["totals"][$value["name"]]["sum"]=false;
		if($value["totalAvg"])
			$cross_array["totals"][$value["name"]]["avg"]=true;
		else
			$cross_array["totals"][$value["name"]]["avg"]=false;
	}
		
	$strWhereClause = $pageObject->searchClauseObj->getWhere($pageObject->pSet->getListOfFieldsByExprType(false), $pageObject->controls);
	$strHavingClause = $pageObject->searchClauseObj->getWhere($pageObject->pSet->getListOfFieldsByExprType(true), $pageObject->controls);
	
	$strSecuritySql = SecuritySQL("Search", $pageObject->tName);
	$strWhereClause = whereAdd($strWhereClause, $strSecuritySql);

	$strSQL = $gQuery->gSQLWhere_having_fromQuery("", $strWhereClause, $strHavingClause);
	

	$cross_array=array("tables"=>$cross_array["tables"],"group_fields"=>$cross_array["group_fields"],"totals"=>$cross_array["totals"],
		"table_type"=>"project", "fromWizard" => true);
	$crosstableObj = new CrossTableReport($cross_array);
	if(postvalue("crosstable_refresh"))
	{
		$crosstableObj->ajax_refresh_crosstable();
		exit();
	}
	
	$xt->assign("report_cross_header",$crosstableObj->getPrintCrossHeader(postvalue("axis_x"),postvalue("axis_y"),postvalue("field"),postvalue("group_func")));
	$xt->assign("select_attr","onchange='refresh_crosstable(true);return false;'");
	$xt->assign("select_group_x",$crosstableObj->getGroupFields("x"));
	$xt->assign("select_group_y",$crosstableObj->getGroupFields("y"));
	$xt->assign("select_group_attr","onchange=refresh_group('".postvalue("rname")."');");
	$grid_row["data"]=$crosstableObj->getCrossTableData();
	$arr_res=$crosstableObj->getValuesControl();
	$res=$arr_res[0];
	$first_field=$arr_res[1];
	if($res)
	{
		$xt->assign("select_data",$res);
		$xt->assign("group_func",$crosstableObj->getRadioGroupFunctions($first_field,postvalue("group_func")));
		$arr_value=$crosstableObj->getSelectedValue();
		$field=$arr_value[postvalue("field")];
		$group_func=$crosstableObj->getTotalsName($crosstableObj->getGroupFunction($field,postvalue("group_func")));
		$xt->assign("totals",$group_func);
	}
	if(count($grid_row["data"])>0)
	{
		$xt->assign("grid_row",$grid_row);
		$xt->assignbyref("group_header",$crosstableObj->getCrossTableHeader());
		$xt->assignbyref("col_summary",$crosstableObj->getCrossTableSummary());	
		$xt->assignbyref("total_summary",$crosstableObj->getTotalSummary());
		if($sum_x || $sum_y)
			$xt->assign("cross_totals",true);
	}
	$pages[0]['grid_row'] = $grid_row;
	$pages[0]['begin'] = "<div name=page class=printpage>";
	$pages[0]['end'] = "</div>";
	$xt->assign("pageno",1);
	$xt->assign("maxpages",1);
}
else
{
	$rb = new Report(array($gQuery->HeadToSql(), $gQuery->FromToSql(), $strWhereClause, $gQuery->GroupByToSql(), $gQuery->HavingToSql())
		, $pageObject->pSet->GetTableData(".orderindexes"), $pageObject->searchClauseObj, $conn, $PageSize, 30, $params, $pageObject);
	$rb->forExport = $forExport;

	$_SESSION[$sessionPrefix.'_advsearch'] = serialize($pageObject->searchClauseObj);

	$arrReport = $rb->getReport($bAll ? -1 : $pagestart);
	//////////////////////////////////////////////////////////////////////////////////////
	$pages=array();
	if($pagestart == -1 || $bAll)
	{
		$pages = $rb->getPages();
		for($i = 0; $i < count($pages); $i++)
		{
			$pages[$i]['grid_row'] = array("data" => $arrReport['list'][$i]);
			$pages[$i]['begin'] = ($i < count($pages) - 1) ? "<div name=\"page\" class=\"printpage\">" : "<div name=page>";
			$pages[$i]['end'] = "</div>";
			$pages[$i]['pageno'] = $i+1;
		}
		$xt->assign("maxpages",count($pages));
	}
	else
	{
		$pages[0]['grid_row'] = array("data" => $arrReport['list']);
		$pages[0]['begin'] = "<div name=page>";
		$pages[0]['end'] = "</div>";
		$xt->assign("pageno",$_SESSION[$sessionPrefix."_pagenumber"]);
		$xt->assign("maxpages",$arrReport['maxpages']);
	}

	foreach($arrReport['page'] as $key => $value)
		$xt->assign($key, $value);

	
	$mypage = $_SESSION[$sessionPrefix."_pagenumber"];
	$maxpages = count($pages);
}
$xt->assign_loopsection("pages", $pages);



$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
$pageObject->addCommonJs();

//if(GetGlobalData("openPDFFileDirectly", true))
//	$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"include/pdfinitlink.js\"></script>";
//else
	$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"include/pdf.js\"></script>";
$pagename = $_SERVER["REQUEST_URI"];
if(!$pagename)
{
	$pagename=basename(__file__);
	$params="";
	foreach($_GET as $k=>$v)
	{
		if(strlen($params))
			$params.="&";
		$params.=rawurlencode($k)."=".rawurlencode($v);
	}
	if(strlen($params))
		$pagename.="?".$params;
}
if(strpos($pagename,"?")===false)
	$pagename.="?pdf=1";
else
	$pagename.="&pdf=1";


$pageObject->body["begin"].="<script>".
	"\nvar TEXT_PDF_BUILD1='".jsreplace("")."';".
	"\nvar TEXT_PDF_BUILD2='".jsreplace("")."';".
	"</script>";

if(!postvalue("pdf"))
{
	$xt->assign("pdflink_block", @$_REQUEST["format"]!="pdf");
	$pageObject->body["end"] .= "<script> var page = '".jsreplace($pagename)."';</script>";
}
/*$pdf_block = array();
if(count($pages))
	$pages[0]["pdf_block"]=&$pdf_block;*/

//$pageObject->body["end"] .= "<script type=\"text/javascript\">".$pageObject->PrepareJs()."</script>";
	
	
$xt->assignbyref("body",$pageObject->body);
$xt->assign("grid_block",true);
$xt->assign("grid_header",true);

$xt->assign("C_digo_Personal_fieldheader",true);
$xt->assign("C_digo__nico_de_Identificaci_n_fieldheader",true);
$xt->assign("Paciente_fieldheader",true);
$xt->assign("NIT_fieldheader",true);
$xt->assign("Direcci_n_fieldheader",true);
$xt->assign("Tel_fono_fieldheader",true);
$xt->assign("C_digo_de_consulta_fieldheader",true);
$xt->assign("Fecha_fieldheader",true);
$xt->assign("Tipo_de_consulta_fieldheader",true);
$xt->assign("M_dico_Encargado_fieldheader",true);
$xt->assign("N_mero_de_Factura_fieldheader",true);
$xt->assign("Costo_de_los_Servicios_fieldheader",true);
$xt->assign("Total_Abonado_fieldheader",true);

if (@$_REQUEST["format"] && $_REQUEST["format"]!="pdf")
{
	$pages[0]["page_summary"]=false;
	$xt->assign_loopsection("pages",$pages);
	$xt->assign("pdflink_block",false);
	$pageObject->body["begin"]="";
	$pageObject->body["end"]="";
	$xt->assignbyref("body",$pageObject->body);
}

if($eventObj->exists("BeforeShowPrint"))
	$eventObj->BeforeShowPrint($xt,$pageObject->templatefile, $pageObject);

$xt->assign("bodyattrs", 'style="margin:10px;"');

if(!postvalue("pdf"))
{
	if(@$_REQUEST["format"]=="excel" || @$_REQUEST["format"]=="word") 
	{
		$xt->load_template($pageObject->templatefile);
		$contents = $xt->template;
		$pos1=0;
		while($pos1!==false)
		{
			$pos1=stripos($contents,"<link REL=\"stylesheet\"",$pos1);
			if($pos1!==false)
			{
				$pos2=strpos($contents,">",$pos1);
				if(!$pos2==false)
					$contents=substr($contents,0,$pos1).substr($contents,$pos2+1);
				$pos1+=1;
			}
		}
		$pos1=0;
		while($pos1!==false)
		{
			$pos1=stripos($contents,"<link REL=stylesheet",$pos1);
			if($pos1!==false)
			{
				$pos2=strpos($contents,">",$pos1);
				if(!$pos2==false)
					$contents=substr($contents,0,$pos1).substr($contents,$pos2+1);
				$pos1+=1;
			}
		}
		$contents=str_replace("<img src=\"images/spacer.gif\">","",$contents);
		$contents=str_replace("<img src=\"images/spacer.gif\"/>","",$contents);
		$xt->template=$contents;
		xt_process_template($xt,$xt->template);
	}
	else
		$xt->display($pageObject->templatefile);

	if (@$_REQUEST["format"]=="pdf")
	{
		echo("<script>$(window).load(function() { Runner.Pdf.RunPDF();});</script>");
	}	
}
else
{
	$xt->load_template($pageObject->templatefile);
	$page = $xt->fetch_loaded();
	$pagewidth=postvalue("width")*1.05;
	$pageheight=postvalue("height")*1.05;
	$landscape=false;
	if($pagewidth>$pageheight)
	{
		$landscape=true;
		if($pagewidth/$pageheight<297/210)
			$pagewidth = 297/210*$pageheight;
	}
	else
	{
		if($pagewidth/$pageheight<210/297)
			$pagewidth = 210/297*$pageheight;
	}
	include("plugins/page2pdf.php");
}
?>