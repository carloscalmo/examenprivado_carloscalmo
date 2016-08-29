<?php
require_once(getabspath("classes/cipherer.php"));
$tdatafactura_consulta = array();
	$tdatafactura_consulta[".NumberOfChars"] = 80; 
	$tdatafactura_consulta[".ShortName"] = "factura_consulta";
	$tdatafactura_consulta[".OwnerID"] = "";
	$tdatafactura_consulta[".OriginalTable"] = "factura_consulta";

//	field labels
$fieldLabelsfactura_consulta = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfactura_consulta["Spanish"] = array();
	$fieldToolTipsfactura_consulta["Spanish"] = array();
	$fieldLabelsfactura_consulta["Spanish"]["id"] = "Id";
	$fieldToolTipsfactura_consulta["Spanish"]["id"] = "";
	$fieldLabelsfactura_consulta["Spanish"]["numero_factura"] = "Numero Factura";
	$fieldToolTipsfactura_consulta["Spanish"]["numero_factura"] = "";
	$fieldLabelsfactura_consulta["Spanish"]["consulta_id"] = "Consulta Id";
	$fieldToolTipsfactura_consulta["Spanish"]["consulta_id"] = "";
	$fieldLabelsfactura_consulta["Spanish"]["cliente_id"] = "Cliente Id";
	$fieldToolTipsfactura_consulta["Spanish"]["cliente_id"] = "";
	$fieldLabelsfactura_consulta["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsfactura_consulta["Spanish"]["fecha"] = "";
	$fieldLabelsfactura_consulta["Spanish"]["monto"] = "Monto";
	$fieldToolTipsfactura_consulta["Spanish"]["monto"] = "";
	$fieldLabelsfactura_consulta["Spanish"]["factura_servicio_id"] = "Factura Servicio Id";
	$fieldToolTipsfactura_consulta["Spanish"]["factura_servicio_id"] = "";
	if (count($fieldToolTipsfactura_consulta["Spanish"]))
		$tdatafactura_consulta[".isUseToolTips"] = true;
}
	
	
	$tdatafactura_consulta[".NCSearch"] = true;



$tdatafactura_consulta[".shortTableName"] = "factura_consulta";
$tdatafactura_consulta[".nSecOptions"] = 0;
$tdatafactura_consulta[".recsPerRowList"] = 1;
$tdatafactura_consulta[".mainTableOwnerID"] = "";
$tdatafactura_consulta[".moveNext"] = 1;
$tdatafactura_consulta[".nType"] = 0;

$tdatafactura_consulta[".strOriginalTableName"] = "factura_consulta";




$tdatafactura_consulta[".showAddInPopup"] = true;

$tdatafactura_consulta[".showEditInPopup"] = true;

$tdatafactura_consulta[".showViewInPopup"] = true;

$tdatafactura_consulta[".fieldsForRegister"] = array();

$tdatafactura_consulta[".listAjax"] = false;

	$tdatafactura_consulta[".audit"] = false;

	$tdatafactura_consulta[".locking"] = false;

$tdatafactura_consulta[".listIcons"] = true;
$tdatafactura_consulta[".edit"] = true;
$tdatafactura_consulta[".view"] = true;


$tdatafactura_consulta[".printFriendly"] = true;

$tdatafactura_consulta[".delete"] = true;

$tdatafactura_consulta[".showSimpleSearchOptions"] = false;

$tdatafactura_consulta[".showSearchPanel"] = true;

if (isMobile())
	$tdatafactura_consulta[".isUseAjaxSuggest"] = false;
else 
	$tdatafactura_consulta[".isUseAjaxSuggest"] = true;

$tdatafactura_consulta[".rowHighlite"] = true;

// button handlers file names

$tdatafactura_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafactura_consulta[".isUseTimeForSearch"] = false;



$tdatafactura_consulta[".useDetailsPreview"] = true;

$tdatafactura_consulta[".allSearchFields"] = array();

$tdatafactura_consulta[".allSearchFields"][] = "id";
$tdatafactura_consulta[".allSearchFields"][] = "numero_factura";
$tdatafactura_consulta[".allSearchFields"][] = "consulta_id";
$tdatafactura_consulta[".allSearchFields"][] = "cliente_id";
$tdatafactura_consulta[".allSearchFields"][] = "fecha";
$tdatafactura_consulta[".allSearchFields"][] = "monto";

$tdatafactura_consulta[".googleLikeFields"][] = "id";
$tdatafactura_consulta[".googleLikeFields"][] = "numero_factura";
$tdatafactura_consulta[".googleLikeFields"][] = "consulta_id";
$tdatafactura_consulta[".googleLikeFields"][] = "cliente_id";
$tdatafactura_consulta[".googleLikeFields"][] = "fecha";
$tdatafactura_consulta[".googleLikeFields"][] = "monto";


$tdatafactura_consulta[".advSearchFields"][] = "id";
$tdatafactura_consulta[".advSearchFields"][] = "numero_factura";
$tdatafactura_consulta[".advSearchFields"][] = "consulta_id";
$tdatafactura_consulta[".advSearchFields"][] = "cliente_id";
$tdatafactura_consulta[".advSearchFields"][] = "fecha";
$tdatafactura_consulta[".advSearchFields"][] = "monto";

$tdatafactura_consulta[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatafactura_consulta[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafactura_consulta[".strOrderBy"] = $tstrOrderBy;

$tdatafactura_consulta[".orderindexes"] = array();

$tdatafactura_consulta[".sqlHead"] = "SELECT id,   numero_factura,   consulta_id,   cliente_id,   fecha,   monto";
$tdatafactura_consulta[".sqlFrom"] = "FROM factura_consulta";
$tdatafactura_consulta[".sqlWhereExpr"] = "";
$tdatafactura_consulta[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafactura_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafactura_consulta[".arrGroupsPerPage"] = $arrGPP;

$tableKeysfactura_consulta = array();
$tableKeysfactura_consulta[] = "id";
$tdatafactura_consulta[".Keys"] = $tableKeysfactura_consulta;

$tdatafactura_consulta[".listFields"] = array();
$tdatafactura_consulta[".listFields"][] = "id";
$tdatafactura_consulta[".listFields"][] = "numero_factura";
$tdatafactura_consulta[".listFields"][] = "consulta_id";
$tdatafactura_consulta[".listFields"][] = "cliente_id";
$tdatafactura_consulta[".listFields"][] = "fecha";
$tdatafactura_consulta[".listFields"][] = "monto";

$tdatafactura_consulta[".viewFields"] = array();
$tdatafactura_consulta[".viewFields"][] = "id";
$tdatafactura_consulta[".viewFields"][] = "numero_factura";
$tdatafactura_consulta[".viewFields"][] = "consulta_id";
$tdatafactura_consulta[".viewFields"][] = "cliente_id";
$tdatafactura_consulta[".viewFields"][] = "fecha";
$tdatafactura_consulta[".viewFields"][] = "monto";

$tdatafactura_consulta[".addFields"] = array();
$tdatafactura_consulta[".addFields"][] = "numero_factura";
$tdatafactura_consulta[".addFields"][] = "consulta_id";
$tdatafactura_consulta[".addFields"][] = "cliente_id";
$tdatafactura_consulta[".addFields"][] = "fecha";
$tdatafactura_consulta[".addFields"][] = "monto";

$tdatafactura_consulta[".inlineAddFields"] = array();
$tdatafactura_consulta[".inlineAddFields"][] = "numero_factura";
$tdatafactura_consulta[".inlineAddFields"][] = "consulta_id";
$tdatafactura_consulta[".inlineAddFields"][] = "cliente_id";
$tdatafactura_consulta[".inlineAddFields"][] = "fecha";
$tdatafactura_consulta[".inlineAddFields"][] = "monto";

$tdatafactura_consulta[".editFields"] = array();
$tdatafactura_consulta[".editFields"][] = "numero_factura";
$tdatafactura_consulta[".editFields"][] = "consulta_id";
$tdatafactura_consulta[".editFields"][] = "cliente_id";
$tdatafactura_consulta[".editFields"][] = "fecha";
$tdatafactura_consulta[".editFields"][] = "monto";

$tdatafactura_consulta[".inlineEditFields"] = array();
$tdatafactura_consulta[".inlineEditFields"][] = "numero_factura";
$tdatafactura_consulta[".inlineEditFields"][] = "consulta_id";
$tdatafactura_consulta[".inlineEditFields"][] = "cliente_id";
$tdatafactura_consulta[".inlineEditFields"][] = "fecha";
$tdatafactura_consulta[".inlineEditFields"][] = "monto";

$tdatafactura_consulta[".exportFields"] = array();
$tdatafactura_consulta[".exportFields"][] = "id";
$tdatafactura_consulta[".exportFields"][] = "numero_factura";
$tdatafactura_consulta[".exportFields"][] = "consulta_id";
$tdatafactura_consulta[".exportFields"][] = "cliente_id";
$tdatafactura_consulta[".exportFields"][] = "fecha";
$tdatafactura_consulta[".exportFields"][] = "monto";

$tdatafactura_consulta[".printFields"] = array();
$tdatafactura_consulta[".printFields"][] = "id";
$tdatafactura_consulta[".printFields"][] = "numero_factura";
$tdatafactura_consulta[".printFields"][] = "consulta_id";
$tdatafactura_consulta[".printFields"][] = "cliente_id";
$tdatafactura_consulta[".printFields"][] = "fecha";
$tdatafactura_consulta[".printFields"][] = "monto";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdatafactura_consulta["id"] = $fdata;
//	numero_factura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "numero_factura";
	$fdata["GoodName"] = "numero_factura";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "Numero Factura"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "numero_factura"; 
		$fdata["FullName"] = "numero_factura";
	
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafactura_consulta["numero_factura"] = $fdata;
//	consulta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "consulta_id";
	$fdata["GoodName"] = "consulta_id";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "Consulta Id"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
				if(strpos(GetUserPermissions("factura_consulta"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(consulta.id,' ',persona.nombre,' ',persona.apellido,' ',consulta.fecha) 

";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "Copy of consulta";
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
	
		
		
	$tdatafactura_consulta["consulta_id"] = $fdata;
//	cliente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cliente_id";
	$fdata["GoodName"] = "cliente_id";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "Cliente Id"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cliente_id"; 
		$fdata["FullName"] = "cliente_id";
	
		
		
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
				if(strpos(GetUserPermissions("factura_consulta"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(nit,' ', nombre, apellido)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "persona";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafactura_consulta["cliente_id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "Fecha"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	
		
		
	$tdatafactura_consulta["fecha"] = $fdata;
//	monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "monto";
	$fdata["GoodName"] = "monto";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "Monto"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "monto"; 
		$fdata["FullName"] = "monto";
	
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafactura_consulta["monto"] = $fdata;

	
$tables_data["factura_consulta"]=&$tdatafactura_consulta;
$field_labels["factura_consulta"] = &$fieldLabelsfactura_consulta;
$fieldToolTips["factura_consulta"] = &$fieldToolTipsfactura_consulta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["factura_consulta"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="abonos_clientes";
	$detailsParam["dDataSourceTable"]="abonos_clientes";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="abonos_clientes";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["factura_consulta"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["factura_consulta"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["factura_consulta"][$dIndex]["detailKeys"][]="factura_servicio_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["factura_consulta"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="persona";
	$masterParams["mDataSourceTable"]="persona";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persona";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["factura_consulta"][$mIndex] = $masterParams;	
		$masterTablesData["factura_consulta"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["factura_consulta"][$mIndex]["detailKeys"][]="cliente_id";

$mIndex = 2-1;
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
	$masterTablesData["factura_consulta"][$mIndex] = $masterParams;	
		$masterTablesData["factura_consulta"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["factura_consulta"][$mIndex]["detailKeys"][]="consulta_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_factura_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   numero_factura,   consulta_id,   cliente_id,   fecha,   monto";
$proto0["m_strFrom"] = "FROM factura_consulta";
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
	"m_strTable" => "factura_consulta"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_factura",
	"m_strTable" => "factura_consulta"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "consulta_id",
	"m_strTable" => "factura_consulta"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cliente_id",
	"m_strTable" => "factura_consulta"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "factura_consulta"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "factura_consulta"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "factura_consulta";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "numero_factura";
$proto18["m_columns"][] = "consulta_id";
$proto18["m_columns"][] = "cliente_id";
$proto18["m_columns"][] = "fecha";
$proto18["m_columns"][] = "monto";
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
$queryData_factura_consulta = createSqlQuery_factura_consulta();
						$tdatafactura_consulta[".sqlquery"] = $queryData_factura_consulta;

$tableEvents["factura_consulta"] = new eventsBase;
$tdatafactura_consulta[".hasEvents"] = false;

$cipherer = new RunnerCipherer("factura_consulta");

?>