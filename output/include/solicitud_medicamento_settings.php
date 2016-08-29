<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasolicitud_medicamento = array();
	$tdatasolicitud_medicamento[".NumberOfChars"] = 80; 
	$tdatasolicitud_medicamento[".ShortName"] = "solicitud_medicamento";
	$tdatasolicitud_medicamento[".OwnerID"] = "";
	$tdatasolicitud_medicamento[".OriginalTable"] = "solicitud_medicamento";

//	field labels
$fieldLabelssolicitud_medicamento = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssolicitud_medicamento["Spanish"] = array();
	$fieldToolTipssolicitud_medicamento["Spanish"] = array();
	$fieldLabelssolicitud_medicamento["Spanish"]["id"] = "Id";
	$fieldToolTipssolicitud_medicamento["Spanish"]["id"] = "";
	$fieldLabelssolicitud_medicamento["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipssolicitud_medicamento["Spanish"]["fecha"] = "";
	$fieldLabelssolicitud_medicamento["Spanish"]["consulta_id"] = "Código de consulta";
	$fieldToolTipssolicitud_medicamento["Spanish"]["consulta_id"] = "";
	$fieldLabelssolicitud_medicamento["Spanish"]["responsable"] = "Médico Responsable";
	$fieldToolTipssolicitud_medicamento["Spanish"]["responsable"] = "";
	$fieldLabelssolicitud_medicamento["Spanish"]["medicamento_id"] = "Código de medicamento";
	$fieldToolTipssolicitud_medicamento["Spanish"]["medicamento_id"] = "";
	$fieldLabelssolicitud_medicamento["Spanish"]["lote_id"] = "Código de lote";
	$fieldToolTipssolicitud_medicamento["Spanish"]["lote_id"] = "";
	$fieldLabelssolicitud_medicamento["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipssolicitud_medicamento["Spanish"]["cantidad"] = "";
	if (count($fieldToolTipssolicitud_medicamento["Spanish"]))
		$tdatasolicitud_medicamento[".isUseToolTips"] = true;
}
	
	
	$tdatasolicitud_medicamento[".NCSearch"] = true;



$tdatasolicitud_medicamento[".shortTableName"] = "solicitud_medicamento";
$tdatasolicitud_medicamento[".nSecOptions"] = 0;
$tdatasolicitud_medicamento[".recsPerRowList"] = 1;
$tdatasolicitud_medicamento[".mainTableOwnerID"] = "";
$tdatasolicitud_medicamento[".moveNext"] = 1;
$tdatasolicitud_medicamento[".nType"] = 0;

$tdatasolicitud_medicamento[".strOriginalTableName"] = "solicitud_medicamento";




$tdatasolicitud_medicamento[".showAddInPopup"] = true;

$tdatasolicitud_medicamento[".showEditInPopup"] = true;

$tdatasolicitud_medicamento[".showViewInPopup"] = true;

$tdatasolicitud_medicamento[".fieldsForRegister"] = array();

$tdatasolicitud_medicamento[".listAjax"] = false;

	$tdatasolicitud_medicamento[".audit"] = false;

	$tdatasolicitud_medicamento[".locking"] = false;

$tdatasolicitud_medicamento[".listIcons"] = true;
$tdatasolicitud_medicamento[".edit"] = true;
$tdatasolicitud_medicamento[".view"] = true;

$tdatasolicitud_medicamento[".exportTo"] = true;

$tdatasolicitud_medicamento[".printFriendly"] = true;

$tdatasolicitud_medicamento[".delete"] = true;

$tdatasolicitud_medicamento[".showSimpleSearchOptions"] = false;

$tdatasolicitud_medicamento[".showSearchPanel"] = true;

if (isMobile())
	$tdatasolicitud_medicamento[".isUseAjaxSuggest"] = false;
else 
	$tdatasolicitud_medicamento[".isUseAjaxSuggest"] = true;

$tdatasolicitud_medicamento[".rowHighlite"] = true;

// button handlers file names

$tdatasolicitud_medicamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasolicitud_medicamento[".isUseTimeForSearch"] = false;




$tdatasolicitud_medicamento[".allSearchFields"] = array();

$tdatasolicitud_medicamento[".allSearchFields"][] = "fecha";
$tdatasolicitud_medicamento[".allSearchFields"][] = "consulta_id";
$tdatasolicitud_medicamento[".allSearchFields"][] = "responsable";
$tdatasolicitud_medicamento[".allSearchFields"][] = "medicamento_id";
$tdatasolicitud_medicamento[".allSearchFields"][] = "lote_id";
$tdatasolicitud_medicamento[".allSearchFields"][] = "cantidad";

$tdatasolicitud_medicamento[".googleLikeFields"][] = "id";
$tdatasolicitud_medicamento[".googleLikeFields"][] = "fecha";
$tdatasolicitud_medicamento[".googleLikeFields"][] = "consulta_id";
$tdatasolicitud_medicamento[".googleLikeFields"][] = "responsable";
$tdatasolicitud_medicamento[".googleLikeFields"][] = "medicamento_id";
$tdatasolicitud_medicamento[".googleLikeFields"][] = "lote_id";
$tdatasolicitud_medicamento[".googleLikeFields"][] = "cantidad";


$tdatasolicitud_medicamento[".advSearchFields"][] = "fecha";
$tdatasolicitud_medicamento[".advSearchFields"][] = "consulta_id";
$tdatasolicitud_medicamento[".advSearchFields"][] = "responsable";
$tdatasolicitud_medicamento[".advSearchFields"][] = "medicamento_id";
$tdatasolicitud_medicamento[".advSearchFields"][] = "lote_id";
$tdatasolicitud_medicamento[".advSearchFields"][] = "cantidad";

$tdatasolicitud_medicamento[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasolicitud_medicamento[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasolicitud_medicamento[".strOrderBy"] = $tstrOrderBy;

$tdatasolicitud_medicamento[".orderindexes"] = array();

$tdatasolicitud_medicamento[".sqlHead"] = "SELECT id,   fecha,   consulta_id,   responsable,   medicamento_id,   lote_id,   cantidad";
$tdatasolicitud_medicamento[".sqlFrom"] = "FROM solicitud_medicamento";
$tdatasolicitud_medicamento[".sqlWhereExpr"] = "";
$tdatasolicitud_medicamento[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasolicitud_medicamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasolicitud_medicamento[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssolicitud_medicamento = array();
$tableKeyssolicitud_medicamento[] = "id";
$tdatasolicitud_medicamento[".Keys"] = $tableKeyssolicitud_medicamento;

$tdatasolicitud_medicamento[".listFields"] = array();
$tdatasolicitud_medicamento[".listFields"][] = "fecha";
$tdatasolicitud_medicamento[".listFields"][] = "consulta_id";
$tdatasolicitud_medicamento[".listFields"][] = "responsable";
$tdatasolicitud_medicamento[".listFields"][] = "medicamento_id";
$tdatasolicitud_medicamento[".listFields"][] = "lote_id";
$tdatasolicitud_medicamento[".listFields"][] = "cantidad";

$tdatasolicitud_medicamento[".viewFields"] = array();
$tdatasolicitud_medicamento[".viewFields"][] = "fecha";
$tdatasolicitud_medicamento[".viewFields"][] = "consulta_id";
$tdatasolicitud_medicamento[".viewFields"][] = "responsable";
$tdatasolicitud_medicamento[".viewFields"][] = "medicamento_id";
$tdatasolicitud_medicamento[".viewFields"][] = "lote_id";
$tdatasolicitud_medicamento[".viewFields"][] = "cantidad";

$tdatasolicitud_medicamento[".addFields"] = array();
$tdatasolicitud_medicamento[".addFields"][] = "fecha";
$tdatasolicitud_medicamento[".addFields"][] = "consulta_id";
$tdatasolicitud_medicamento[".addFields"][] = "responsable";
$tdatasolicitud_medicamento[".addFields"][] = "medicamento_id";
$tdatasolicitud_medicamento[".addFields"][] = "lote_id";
$tdatasolicitud_medicamento[".addFields"][] = "cantidad";

$tdatasolicitud_medicamento[".inlineAddFields"] = array();

$tdatasolicitud_medicamento[".editFields"] = array();
$tdatasolicitud_medicamento[".editFields"][] = "fecha";
$tdatasolicitud_medicamento[".editFields"][] = "consulta_id";
$tdatasolicitud_medicamento[".editFields"][] = "responsable";
$tdatasolicitud_medicamento[".editFields"][] = "medicamento_id";
$tdatasolicitud_medicamento[".editFields"][] = "lote_id";
$tdatasolicitud_medicamento[".editFields"][] = "cantidad";

$tdatasolicitud_medicamento[".inlineEditFields"] = array();

$tdatasolicitud_medicamento[".exportFields"] = array();
$tdatasolicitud_medicamento[".exportFields"][] = "fecha";
$tdatasolicitud_medicamento[".exportFields"][] = "consulta_id";
$tdatasolicitud_medicamento[".exportFields"][] = "responsable";
$tdatasolicitud_medicamento[".exportFields"][] = "medicamento_id";
$tdatasolicitud_medicamento[".exportFields"][] = "lote_id";
$tdatasolicitud_medicamento[".exportFields"][] = "cantidad";

$tdatasolicitud_medicamento[".printFields"] = array();
$tdatasolicitud_medicamento[".printFields"][] = "fecha";
$tdatasolicitud_medicamento[".printFields"][] = "consulta_id";
$tdatasolicitud_medicamento[".printFields"][] = "responsable";
$tdatasolicitud_medicamento[".printFields"][] = "medicamento_id";
$tdatasolicitud_medicamento[".printFields"][] = "lote_id";
$tdatasolicitud_medicamento[".printFields"][] = "cantidad";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				
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
	
		
		
	$tdatasolicitud_medicamento["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Fecha"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdatasolicitud_medicamento["fecha"] = $fdata;
//	consulta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "consulta_id";
	$fdata["GoodName"] = "consulta_id";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Código de consulta"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
				if(strpos(GetUserPermissions("solicitud_medicamento"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id";
	
		
	$edata["LookupTable"] = "consulta";
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
	
		
		
	$tdatasolicitud_medicamento["consulta_id"] = $fdata;
//	responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "responsable";
	$fdata["GoodName"] = "responsable";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Médico Responsable"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "responsable"; 
		$fdata["FullName"] = "responsable";
	
		
		
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
				if(strpos(GetUserPermissions("solicitud_medicamento"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(nombre,' ',apellido)";
	
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
	
		
		
	$tdatasolicitud_medicamento["responsable"] = $fdata;
//	medicamento_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "medicamento_id";
	$fdata["GoodName"] = "medicamento_id";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Código de medicamento"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "medicamento_id"; 
		$fdata["FullName"] = "medicamento_id";
	
		
		
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
				if(strpos(GetUserPermissions("solicitud_medicamento"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(codigo,' ',nombre)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "insumos";
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
	
		
		
	$tdatasolicitud_medicamento["medicamento_id"] = $fdata;
//	lote_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "lote_id";
	$fdata["GoodName"] = "lote_id";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Código de lote"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lote_id"; 
		$fdata["FullName"] = "lote_id";
	
		
		
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
				if(strpos(GetUserPermissions("solicitud_medicamento"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "codigo";
	
		
	$edata["LookupTable"] = "lotes";
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
	
		
		
	$tdatasolicitud_medicamento["lote_id"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Cantidad"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cantidad"; 
		$fdata["FullName"] = "cantidad";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
	
		
		
	$tdatasolicitud_medicamento["cantidad"] = $fdata;

	
$tables_data["solicitud_medicamento"]=&$tdatasolicitud_medicamento;
$field_labels["solicitud_medicamento"] = &$fieldLabelssolicitud_medicamento;
$fieldToolTips["solicitud_medicamento"] = &$fieldToolTipssolicitud_medicamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["solicitud_medicamento"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["solicitud_medicamento"] = array();

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
	$masterTablesData["solicitud_medicamento"][$mIndex] = $masterParams;	
		$masterTablesData["solicitud_medicamento"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["solicitud_medicamento"][$mIndex]["detailKeys"][]="consulta_id";

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
	$masterTablesData["solicitud_medicamento"][$mIndex] = $masterParams;	
		$masterTablesData["solicitud_medicamento"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["solicitud_medicamento"][$mIndex]["detailKeys"][]="responsable";

$mIndex = 3-1;
			$strOriginalDetailsTable="insumos";
	$masterParams["mDataSourceTable"]="insumos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "insumos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["solicitud_medicamento"][$mIndex] = $masterParams;	
		$masterTablesData["solicitud_medicamento"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["solicitud_medicamento"][$mIndex]["detailKeys"][]="medicamento_id";

$mIndex = 4-1;
			$strOriginalDetailsTable="lotes";
	$masterParams["mDataSourceTable"]="lotes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lotes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["solicitud_medicamento"][$mIndex] = $masterParams;	
		$masterTablesData["solicitud_medicamento"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["solicitud_medicamento"][$mIndex]["detailKeys"][]="lote_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_solicitud_medicamento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   fecha,   consulta_id,   responsable,   medicamento_id,   lote_id,   cantidad";
$proto0["m_strFrom"] = "FROM solicitud_medicamento";
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
	"m_strTable" => "solicitud_medicamento"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "solicitud_medicamento"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "consulta_id",
	"m_strTable" => "solicitud_medicamento"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable",
	"m_strTable" => "solicitud_medicamento"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "medicamento_id",
	"m_strTable" => "solicitud_medicamento"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "lote_id",
	"m_strTable" => "solicitud_medicamento"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "solicitud_medicamento"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "solicitud_medicamento";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "fecha";
$proto20["m_columns"][] = "consulta_id";
$proto20["m_columns"][] = "responsable";
$proto20["m_columns"][] = "medicamento_id";
$proto20["m_columns"][] = "lote_id";
$proto20["m_columns"][] = "cantidad";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_solicitud_medicamento = createSqlQuery_solicitud_medicamento();
							$tdatasolicitud_medicamento[".sqlquery"] = $queryData_solicitud_medicamento;

$tableEvents["solicitud_medicamento"] = new eventsBase;
$tdatasolicitud_medicamento[".hasEvents"] = false;

$cipherer = new RunnerCipherer("solicitud_medicamento");

?>