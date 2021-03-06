<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

include("include/Estado_de_Cuenta_de_Pacientes_variables.php");

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(CheckPermissionsEvent($strTableName, 'P') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Export"))
{
	echo "<p>"."No tiene permiso para acceder a esta tabla"."<a href=\"login.php\">"."Regresar a la página de conexión"."</a></p>";
	return;
}

$layout = new TLayout("export2","Rounded1BlueWave","MobileBlueWave");
$layout->blocks["top"] = array();
$layout->containers["export"] = array();

$layout->containers["export"][] = array("name"=>"exportheader","block"=>"","substyle"=>2);


$layout->containers["export"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"range");


$layout->containers["range"] = array();

$layout->containers["range"][] = array("name"=>"exprange_header","block"=>"rangeheader_block","substyle"=>1);


$layout->containers["range"][] = array("name"=>"exprange","block"=>"range_block","substyle"=>1);


$layout->skins["range"] = "fields";

$layout->containers["export"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"expoutput_header","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"expoutput","block"=>"","substyle"=>1);


$layout->skins["fields"] = "fields";

$layout->containers["export"][] = array("name"=>"expbuttons","block"=>"","substyle"=>2);


$layout->skins["export"] = "1";
$layout->blocks["top"][] = "export";$page_layouts["Estado_de_Cuenta_de_Pacientes_export"] = $layout;


// Modify query: remove blob fields from fieldlist.
// Blob fields on an export page are shown using imager.php (for example).
// They don't need to be selected from DB in export.php itself.
//$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

$cipherer = new RunnerCipherer($strTableName);

$strWhereClause = "";
$strHavingClause = "";
$strSearchCriteria = "and";
$selected_recs = array();
$options = "1";

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;

$phpVersion = (int)substr(phpversion(), 0, 1); 
if($phpVersion > 4)
{
	include("include/export_functions.php");
	$xt->assign("groupExcel", true);
}
else
	$xt->assign("excel", true);

//array of params for classes
$params = array("pageType" => PAGE_EXPORT, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
if(!$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery"))
	$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

//	Before Process event
if($eventObj->exists("BeforeProcessExport"))
	$eventObj->BeforeProcessExport($conn, $pageObject);

if (@$_REQUEST["a"]!="")
{
	$options = "";
	$sWhere = "1=0";	

//	process selection
	$selected_recs = array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<0)
				continue;
			$keys = array();
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}


	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause = @$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause = @$_SESSION[$strTableName."_where"];
	$strHavingClause = @$_SESSION[$strTableName."_having"];
	$strSearchCriteria = @$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}

$mypage = 1;
if(@$_REQUEST["type"])
{
//	order by
	$strOrderBy = $_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy = $gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if($eventObj->exists("BeforeQueryExport"))
		$eventObj->BeforeQueryExport($strSQL,$strWhereClause,$strOrderBy, $pageObject);
//	Rebuild SQL if needed
	if($strSQL!=$strSQLbak)
	{
//	changed $strSQL - old style	
		$numrows=GetRowCount($strSQL);
	}
	else
	{
		$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
		$strSQL.=" ".trim($strOrderBy);
		$rowcount=false;
		if($eventObj->exists("ListGetRowCount"))
		{
			$masterKeysReq=array();
			for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
				$masterKeysReq[] = $_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount = $eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
		}
		if($rowcount !== false)
			$numrows = $rowcount;
		else
			$numrows = $gQuery->gSQLRowCount($strWhereClause,$strHavingClause,$strSearchCriteria);
	}
	LogInfo($strSQL);

//	 Pagination:

	$nPageSize = 0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if(!$nPageSize)
			$nPageSize = $gSettings->getInitialPageSize();
				
		if($nPageSize<0)
			$nPageSize = 0;
			
		if($nPageSize>0)
		{
			if($numrows<=($mypage-1)*$nPageSize)
				$mypage = ceil($numrows/$nPageSize);
		
			if(!$mypage)
				$mypage = 1;
			
					$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
		}
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
	{
		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		require_once getabspath('classes/orderclause.php');
		$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
		for($i = 0; $i < count($fieldList); $i++)
		{
			$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
			$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
		}
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $pageObject);
	}
	if($listarray!==false)
		$rs = $listarray;
	elseif($nPageSize>0)
	{
					$rs = db_query($strSQL,$conn);
	}
	else
		$rs = db_query($strSQL,$conn);

	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	if(substr(@$_REQUEST["type"],0,5)=="excel")
	{
//	remove grouping
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SMONGROUPING"]="0";
				if($phpVersion > 4)
			ExportToExcel($cipherer, $pageObject);
		else
			ExportToExcel_old($cipherer);
	}
	else if(@$_REQUEST["type"]=="word")
	{
		ExportToWord($cipherer);
	}
	else if(@$_REQUEST["type"]=="xml")
	{
		ExportToXML($cipherer);
	}
	else if(@$_REQUEST["type"]=="csv")
	{
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SDECIMAL"]=".";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		$locale_info["LOCALE_SMONDECIMALSEP"]=".";
		ExportToCSV($cipherer);
	}
	db_close($conn);
	return;
}

// add button events if exist
$pageObject->addButtonHandlers();

if($options)
{
	$xt->assign("rangeheader_block",true);
	$xt->assign("range_block",true);
}

$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
$pageObject->addCommonJs();

$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->display("Estado_de_Cuenta_de_Pacientes_export.htm");

function ExportToExcel_old($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=Estado_de_Cuenta_de_Pacientes.xls");

	echo "<html>";
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToWord($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=Estado_de_Cuenta_de_Pacientes.doc");

	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToXML($cipherer)
{
	global $nPageSize,$rs,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: text/xml");
	header("Content-Disposition: attachment;Filename=Estado_de_Cuenta_de_Pacientes.xml");
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);	
	//if(!$row)
	//	return;
		
	global $cCharset;
	
	echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
	echo "<table>\r\n";
	$i = 0;
	$pageObject->viewControls->forExport = "xml";
	while((!$nPageSize || $i<$nPageSize) && $row)
	{
		$values = array();
			$values["Código Personal"] = $pageObject->showDBValue("Código Personal", $row);
			$values["Código Único de Identificación"] = $pageObject->showDBValue("Código Único de Identificación", $row);
			$values["Paciente"] = $pageObject->showDBValue("Paciente", $row);
			$values["NIT"] = $pageObject->showDBValue("NIT", $row);
			$values["Dirección"] = $pageObject->showDBValue("Dirección", $row);
			$values["Teléfono"] = $pageObject->showDBValue("Teléfono", $row);
			$values["Código de consulta"] = $pageObject->showDBValue("Código de consulta", $row);
			$values["Fecha"] = $pageObject->showDBValue("Fecha", $row);
			$values["Tipo de consulta"] = $pageObject->showDBValue("Tipo de consulta", $row);
			$values["Médico Encargado"] = $pageObject->showDBValue("Médico Encargado", $row);
			$values["Número de Factura"] = $pageObject->showDBValue("Número de Factura", $row);
			$values["Costo de los Servicios"] = $pageObject->showDBValue("Costo de los Servicios", $row);
			$values["Total Abonado"] = $pageObject->showDBValue("Total Abonado", $row);
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		
		if ($eventRes)
		{
			$i++;
			echo "<row>\r\n";
			foreach ($values as $fName => $val)
			{
				$field = htmlspecialchars(XMLNameEncode($fName));
				echo "<".$field.">";
				echo $values[$fName];
				echo "</".$field.">\r\n";
			}
			echo "</row>\r\n";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	echo "</table>\r\n";
}

function ExportToCSV($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=Estado_de_Cuenta_de_Pacientes.csv");
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);

// write header
	$outstr = "";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Código Personal\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Código Único de Identificación\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Paciente\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"NIT\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Dirección\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Teléfono\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Código de consulta\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Fecha\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Tipo de consulta\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Médico Encargado\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Número de Factura\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Costo de los Servicios\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Total Abonado\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["Código Personal"] = $pageObject->getViewControl("Código Personal")->showDBValue($row, "");
			$values["Código Único de Identificación"] = $pageObject->getViewControl("Código Único de Identificación")->showDBValue($row, "");
			$values["Paciente"] = $pageObject->getViewControl("Paciente")->showDBValue($row, "");
			$values["NIT"] = $pageObject->getViewControl("NIT")->showDBValue($row, "");
			$values["Dirección"] = $pageObject->getViewControl("Dirección")->showDBValue($row, "");
			$values["Teléfono"] = $pageObject->getViewControl("Teléfono")->showDBValue($row, "");
			$values["Código de consulta"] = $pageObject->getViewControl("Código de consulta")->showDBValue($row, "");
			$values["Fecha"] = $pageObject->getViewControl("Fecha")->showDBValue($row, "");
			$values["Tipo de consulta"] = $pageObject->getViewControl("Tipo de consulta")->showDBValue($row, "");
			$values["Médico Encargado"] = $pageObject->getViewControl("Médico Encargado")->showDBValue($row, "");
			$values["Número de Factura"] = $pageObject->getViewControl("Número de Factura")->showDBValue($row, "");
			$values["Costo de los Servicios"] = $row["Costo de los Servicios"];
			$values["Total Abonado"] = $row["Total Abonado"];

		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row,$values, $pageObject);
		}
		if ($eventRes)
		{
			$outstr="";
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Código Personal"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Código Único de Identificación"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Paciente"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["NIT"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Dirección"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Teléfono"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Código de consulta"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Fecha"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Tipo de consulta"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Médico Encargado"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Número de Factura"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Costo de los Servicios"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Total Abonado"]).'"';
			echo $outstr;
		}
		
		$iNumberOfRows++;
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
			
		if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
			echo "\r\n";
	}
}

function WriteTableData($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);
//	if(!$row)
//		return;
// write header
	echo "<tr>";
	if($_REQUEST["type"]=="excel")
	{
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Código Personal").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Código Único de Identificación").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Paciente").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("NIT").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Dirección").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Teléfono").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Código de consulta").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Fecha").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tipo de consulta").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Médico Encargado").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Número de Factura").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Costo de los Servicios").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Total Abonado").'</td>';	
	}
	else
	{
		echo "<td>"."Código Personal"."</td>";
		echo "<td>"."Código Único de Identificación"."</td>";
		echo "<td>"."Paciente"."</td>";
		echo "<td>"."NIT"."</td>";
		echo "<td>"."Dirección"."</td>";
		echo "<td>"."Teléfono"."</td>";
		echo "<td>"."Código de consulta"."</td>";
		echo "<td>"."Fecha"."</td>";
		echo "<td>"."Tipo de consulta"."</td>";
		echo "<td>"."Médico Encargado"."</td>";
		echo "<td>"."Número de Factura"."</td>";
		echo "<td>"."Costo de los Servicios"."</td>";
		echo "<td>"."Total Abonado"."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["Código Personal"] = $pageObject->getViewControl("Código Personal")->showDBValue($row, "");
					$values["Código Único de Identificación"] = $pageObject->getViewControl("Código Único de Identificación")->showDBValue($row, "");
					$values["Paciente"] = $pageObject->getViewControl("Paciente")->showDBValue($row, "");
					$values["NIT"] = $pageObject->getViewControl("NIT")->showDBValue($row, "");
					$values["Dirección"] = $pageObject->getViewControl("Dirección")->showDBValue($row, "");
					$values["Teléfono"] = $pageObject->getViewControl("Teléfono")->showDBValue($row, "");
					$values["Código de consulta"] = $pageObject->getViewControl("Código de consulta")->showDBValue($row, "");
					$values["Fecha"] = $pageObject->getViewControl("Fecha")->showDBValue($row, "");
					$values["Tipo de consulta"] = $pageObject->getViewControl("Tipo de consulta")->showDBValue($row, "");
					$values["Médico Encargado"] = $pageObject->getViewControl("Médico Encargado")->showDBValue($row, "");
					$values["Número de Factura"] = $pageObject->getViewControl("Número de Factura")->showDBValue($row, "");
					$values["Costo de los Servicios"] = $pageObject->getViewControl("Costo de los Servicios")->showDBValue($row, "");
					$values["Total Abonado"] = $pageObject->getViewControl("Total Abonado")->showDBValue($row, "");
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";
		
							echo '<td>';
			
									echo $values["Código Personal"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Código Único de Identificación"]);
					else
						echo $values["Código Único de Identificación"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Paciente"]);
					else
						echo $values["Paciente"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["NIT"]);
					else
						echo $values["NIT"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Dirección"]);
					else
						echo $values["Dirección"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Teléfono"]);
					else
						echo $values["Teléfono"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Código de consulta"];
			echo '</td>';
							echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Fecha"]);
					else
						echo $values["Fecha"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Tipo de consulta"]);
					else
						echo $values["Tipo de consulta"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Médico Encargado"]);
					else
						echo $values["Médico Encargado"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Número de Factura"]);
					else
						echo $values["Número de Factura"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Costo de los Servicios"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Total Abonado"];
			echo '</td>';
			echo "</tr>";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	
}

function XMLNameEncode($strValue)
{
	$search = array(" ","#","'","/","\\","(",")",",","[");
	$ret = str_replace($search,"",$strValue);
	$search = array("]","+","\"","-","_","|","}","{","=");
	$ret = str_replace($search,"",$ret);
	return $ret;
}

function PrepareForExcel($ret)
{
	//$ret = htmlspecialchars($str); commented for bug #6823
	if (substr($ret,0,1)== "=") 
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals, $totalsFields, $data)
{
	for($i = 0; $i < count($totalsFields); $i ++) 
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT') 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time") 
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']]["value"] += $time[2]+$time[1]*60 + $time[0]*3600;
		} 
		else 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]+ 0);
		
		if($totalsFields[$i]['totalsType'] == 'AVERAGE')
		{
			if(!is_null($data[$totalsFields[$i]['fName']]) && $data[$totalsFields[$i]['fName']]!=="")
				$totals[$totalsFields[$i]['fName']]['numRows']++;
		}
	}
}
?>
