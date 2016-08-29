<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacirugia = array();
	$tdatacirugia[".NumberOfChars"] = 80; 
	$tdatacirugia[".ShortName"] = "cirugia";
	$tdatacirugia[".OwnerID"] = "";
	$tdatacirugia[".OriginalTable"] = "cirugia";

//	field labels
$fieldLabelscirugia = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscirugia["Spanish"] = array();
	$fieldToolTipscirugia["Spanish"] = array();
	$fieldLabelscirugia["Spanish"]["id"] = "Código";
	$fieldToolTipscirugia["Spanish"]["id"] = "";
	$fieldLabelscirugia["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipscirugia["Spanish"]["fecha"] = "";
	$fieldLabelscirugia["Spanish"]["encargado"] = "Encargado";
	$fieldToolTipscirugia["Spanish"]["encargado"] = "";
	$fieldLabelscirugia["Spanish"]["ambiente_id"] = "Tipo de Ambiente";
	$fieldToolTipscirugia["Spanish"]["ambiente_id"] = "";
	$fieldLabelscirugia["Spanish"]["idtipo_cirugia"] = "Tipo de Cirugía";
	$fieldToolTipscirugia["Spanish"]["idtipo_cirugia"] = "";
	$fieldLabelscirugia["Spanish"]["consulta_id"] = "Paciente";
	$fieldToolTipscirugia["Spanish"]["consulta_id"] = "";
	if (count($fieldToolTipscirugia["Spanish"]))
		$tdatacirugia[".isUseToolTips"] = true;
}
	
	
	$tdatacirugia[".NCSearch"] = true;



$tdatacirugia[".shortTableName"] = "cirugia";
$tdatacirugia[".nSecOptions"] = 0;
$tdatacirugia[".recsPerRowList"] = 1;
$tdatacirugia[".mainTableOwnerID"] = "";
$tdatacirugia[".moveNext"] = 1;
$tdatacirugia[".nType"] = 0;

$tdatacirugia[".strOriginalTableName"] = "cirugia";




$tdatacirugia[".showAddInPopup"] = true;

$tdatacirugia[".showEditInPopup"] = true;

$tdatacirugia[".showViewInPopup"] = true;

$tdatacirugia[".fieldsForRegister"] = array();

$tdatacirugia[".listAjax"] = false;

	$tdatacirugia[".audit"] = true;

	$tdatacirugia[".locking"] = false;

$tdatacirugia[".listIcons"] = true;
$tdatacirugia[".edit"] = true;
$tdatacirugia[".view"] = true;


$tdatacirugia[".printFriendly"] = true;

$tdatacirugia[".delete"] = true;

$tdatacirugia[".showSimpleSearchOptions"] = false;

$tdatacirugia[".showSearchPanel"] = true;

if (isMobile())
	$tdatacirugia[".isUseAjaxSuggest"] = false;
else 
	$tdatacirugia[".isUseAjaxSuggest"] = true;

$tdatacirugia[".rowHighlite"] = true;

// button handlers file names

$tdatacirugia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacirugia[".isUseTimeForSearch"] = false;



$tdatacirugia[".useDetailsPreview"] = true;

$tdatacirugia[".allSearchFields"] = array();

$tdatacirugia[".allSearchFields"][] = "id";
$tdatacirugia[".allSearchFields"][] = "idtipo_cirugia";
$tdatacirugia[".allSearchFields"][] = "consulta_id";
$tdatacirugia[".allSearchFields"][] = "fecha";
$tdatacirugia[".allSearchFields"][] = "encargado";
$tdatacirugia[".allSearchFields"][] = "ambiente_id";

$tdatacirugia[".googleLikeFields"][] = "id";
$tdatacirugia[".googleLikeFields"][] = "fecha";
$tdatacirugia[".googleLikeFields"][] = "encargado";
$tdatacirugia[".googleLikeFields"][] = "ambiente_id";
$tdatacirugia[".googleLikeFields"][] = "idtipo_cirugia";
$tdatacirugia[".googleLikeFields"][] = "consulta_id";


$tdatacirugia[".advSearchFields"][] = "id";
$tdatacirugia[".advSearchFields"][] = "idtipo_cirugia";
$tdatacirugia[".advSearchFields"][] = "consulta_id";
$tdatacirugia[".advSearchFields"][] = "fecha";
$tdatacirugia[".advSearchFields"][] = "encargado";
$tdatacirugia[".advSearchFields"][] = "ambiente_id";

$tdatacirugia[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatacirugia[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacirugia[".strOrderBy"] = $tstrOrderBy;

$tdatacirugia[".orderindexes"] = array();

$tdatacirugia[".sqlHead"] = "SELECT id,   fecha,   encargado,   ambiente_id,   idtipo_cirugia,   consulta_id";
$tdatacirugia[".sqlFrom"] = "FROM cirugia";
$tdatacirugia[".sqlWhereExpr"] = "";
$tdatacirugia[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacirugia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacirugia[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscirugia = array();
$tableKeyscirugia[] = "id";
$tableKeyscirugia[] = "consulta_id";
$tdatacirugia[".Keys"] = $tableKeyscirugia;

$tdatacirugia[".listFields"] = array();
$tdatacirugia[".listFields"][] = "id";
$tdatacirugia[".listFields"][] = "idtipo_cirugia";
$tdatacirugia[".listFields"][] = "consulta_id";
$tdatacirugia[".listFields"][] = "fecha";
$tdatacirugia[".listFields"][] = "encargado";
$tdatacirugia[".listFields"][] = "ambiente_id";

$tdatacirugia[".viewFields"] = array();
$tdatacirugia[".viewFields"][] = "id";
$tdatacirugia[".viewFields"][] = "idtipo_cirugia";
$tdatacirugia[".viewFields"][] = "consulta_id";
$tdatacirugia[".viewFields"][] = "fecha";
$tdatacirugia[".viewFields"][] = "encargado";
$tdatacirugia[".viewFields"][] = "ambiente_id";

$tdatacirugia[".addFields"] = array();
$tdatacirugia[".addFields"][] = "idtipo_cirugia";
$tdatacirugia[".addFields"][] = "consulta_id";
$tdatacirugia[".addFields"][] = "fecha";
$tdatacirugia[".addFields"][] = "encargado";
$tdatacirugia[".addFields"][] = "ambiente_id";

$tdatacirugia[".inlineAddFields"] = array();

$tdatacirugia[".editFields"] = array();
$tdatacirugia[".editFields"][] = "idtipo_cirugia";
$tdatacirugia[".editFields"][] = "consulta_id";
$tdatacirugia[".editFields"][] = "fecha";
$tdatacirugia[".editFields"][] = "encargado";
$tdatacirugia[".editFields"][] = "ambiente_id";

$tdatacirugia[".inlineEditFields"] = array();

$tdatacirugia[".exportFields"] = array();

$tdatacirugia[".printFields"] = array();
$tdatacirugia[".printFields"][] = "id";
$tdatacirugia[".printFields"][] = "idtipo_cirugia";
$tdatacirugia[".printFields"][] = "consulta_id";
$tdatacirugia[".printFields"][] = "fecha";
$tdatacirugia[".printFields"][] = "encargado";
$tdatacirugia[".printFields"][] = "ambiente_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cirugia";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacirugia["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "cirugia";
	$fdata["Label"] = "Fecha"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha"; 
		$fdata["FullName"] = "fecha";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacirugia["fecha"] = $fdata;
//	encargado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "encargado";
	$fdata["GoodName"] = "encargado";
	$fdata["ownerTable"] = "cirugia";
	$fdata["Label"] = "Encargado"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "encargado"; 
		$fdata["FullName"] = "encargado";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("cirugia"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "persona_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(nombre,' ',apellido) ";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "Copy of empleado";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacirugia["encargado"] = $fdata;
//	ambiente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ambiente_id";
	$fdata["GoodName"] = "ambiente_id";
	$fdata["ownerTable"] = "cirugia";
	$fdata["Label"] = "Tipo de Ambiente"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "ambiente_id"; 
		$fdata["FullName"] = "ambiente_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("cirugia"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupTable"] = "ambiente";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacirugia["ambiente_id"] = $fdata;
//	idtipo_cirugia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idtipo_cirugia";
	$fdata["GoodName"] = "idtipo_cirugia";
	$fdata["ownerTable"] = "cirugia";
	$fdata["Label"] = "Tipo de Cirugía"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "idtipo_cirugia"; 
		$fdata["FullName"] = "idtipo_cirugia";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("cirugia"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "idtipo_cirugia";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupTable"] = "tipo_cirugia";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacirugia["idtipo_cirugia"] = $fdata;
//	consulta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "consulta_id";
	$fdata["GoodName"] = "consulta_id";
	$fdata["ownerTable"] = "cirugia";
	$fdata["Label"] = "Paciente"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "consulta_id"; 
		$fdata["FullName"] = "consulta_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("cirugia"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(cui,' ',nombre,' ',apellido) ";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "persona";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacirugia["consulta_id"] = $fdata;

	
$tables_data["cirugia"]=&$tdatacirugia;
$field_labels["cirugia"] = &$fieldLabelscirugia;
$fieldToolTips["cirugia"] = &$fieldToolTipscirugia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cirugia"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="empleados_cirugia";
	$detailsParam["dDataSourceTable"]="empleados_cirugia";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="empleados_cirugia";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["cirugia"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["cirugia"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["cirugia"][$dIndex]["detailKeys"][]="cirugia_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["cirugia"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="consulta";
	$masterParams["mDataSourceTable"]="consulta";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "consulta";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["cirugia"][$mIndex] = $masterParams;	
		$masterTablesData["cirugia"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["cirugia"][$mIndex]["detailKeys"][]="consulta_id";

$mIndex = 2-1;
			$strOriginalDetailsTable="empleado";
	$masterParams["mDataSourceTable"]="empleado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "empleado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["cirugia"][$mIndex] = $masterParams;	
		$masterTablesData["cirugia"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["cirugia"][$mIndex]["detailKeys"][]="encargado";

$mIndex = 3-1;
			$strOriginalDetailsTable="tipo_cirugia";
	$masterParams["mDataSourceTable"]="tipo_cirugia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tipo_cirugia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["cirugia"][$mIndex] = $masterParams;	
		$masterTablesData["cirugia"][$mIndex]["masterKeys"][]="idtipo_cirugia";
		$masterTablesData["cirugia"][$mIndex]["detailKeys"][]="idtipo_cirugia";

$mIndex = 4-1;
			$strOriginalDetailsTable="ambiente";
	$masterParams["mDataSourceTable"]="ambiente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ambiente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["cirugia"][$mIndex] = $masterParams;	
		$masterTablesData["cirugia"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["cirugia"][$mIndex]["detailKeys"][]="ambiente_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cirugia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   fecha,   encargado,   ambiente_id,   idtipo_cirugia,   consulta_id";
$proto0["m_strFrom"] = "FROM cirugia";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "cirugia"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "cirugia"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "encargado",
	"m_strTable" => "cirugia"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ambiente_id",
	"m_strTable" => "cirugia"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "idtipo_cirugia",
	"m_strTable" => "cirugia"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "consulta_id",
	"m_strTable" => "cirugia"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "cirugia";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "fecha";
$proto18["m_columns"][] = "encargado";
$proto18["m_columns"][] = "ambiente_id";
$proto18["m_columns"][] = "idtipo_cirugia";
$proto18["m_columns"][] = "consulta_id";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cirugia = createSqlQuery_cirugia();
						$tdatacirugia[".sqlquery"] = $queryData_cirugia;

$tableEvents["cirugia"] = new eventsBase;
$tdatacirugia[".hasEvents"] = false;

$cipherer = new RunnerCipherer("cirugia");

?>