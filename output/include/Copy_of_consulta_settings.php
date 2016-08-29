<?php
require_once(getabspath("classes/cipherer.php"));
$tdataCopy_of_consulta = array();
	$tdataCopy_of_consulta[".NumberOfChars"] = 80; 
	$tdataCopy_of_consulta[".ShortName"] = "Copy_of_consulta";
	$tdataCopy_of_consulta[".OwnerID"] = "";
	$tdataCopy_of_consulta[".OriginalTable"] = "consulta";

//	field labels
$fieldLabelsCopy_of_consulta = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCopy_of_consulta["Spanish"] = array();
	$fieldToolTipsCopy_of_consulta["Spanish"] = array();
	$fieldLabelsCopy_of_consulta["Spanish"]["id"] = "Código";
	$fieldToolTipsCopy_of_consulta["Spanish"]["id"] = "";
	$fieldLabelsCopy_of_consulta["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsCopy_of_consulta["Spanish"]["fecha"] = "";
	$fieldLabelsCopy_of_consulta["Spanish"]["paciente"] = "Paciente";
	$fieldToolTipsCopy_of_consulta["Spanish"]["paciente"] = "";
	$fieldLabelsCopy_of_consulta["Spanish"]["tipo_consulta_id"] = "Tipo de Consulta";
	$fieldToolTipsCopy_of_consulta["Spanish"]["tipo_consulta_id"] = "";
	$fieldLabelsCopy_of_consulta["Spanish"]["consulta_id"] = "Consulta Id";
	$fieldToolTipsCopy_of_consulta["Spanish"]["consulta_id"] = "";
	$fieldLabelsCopy_of_consulta["Spanish"]["id1"] = "Id1";
	$fieldToolTipsCopy_of_consulta["Spanish"]["id1"] = "";
	$fieldLabelsCopy_of_consulta["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsCopy_of_consulta["Spanish"]["nombre"] = "";
	$fieldLabelsCopy_of_consulta["Spanish"]["apellido"] = "Apellido";
	$fieldToolTipsCopy_of_consulta["Spanish"]["apellido"] = "";
	$fieldLabelsCopy_of_consulta["Spanish"]["cui"] = "Cui";
	$fieldToolTipsCopy_of_consulta["Spanish"]["cui"] = "";
	if (count($fieldToolTipsCopy_of_consulta["Spanish"]))
		$tdataCopy_of_consulta[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_consulta[".NCSearch"] = true;



$tdataCopy_of_consulta[".shortTableName"] = "Copy_of_consulta";
$tdataCopy_of_consulta[".nSecOptions"] = 0;
$tdataCopy_of_consulta[".recsPerRowList"] = 1;
$tdataCopy_of_consulta[".mainTableOwnerID"] = "";
$tdataCopy_of_consulta[".moveNext"] = 1;
$tdataCopy_of_consulta[".nType"] = 1;

$tdataCopy_of_consulta[".strOriginalTableName"] = "consulta";




$tdataCopy_of_consulta[".showAddInPopup"] = true;

$tdataCopy_of_consulta[".showEditInPopup"] = true;

$tdataCopy_of_consulta[".showViewInPopup"] = true;

$tdataCopy_of_consulta[".fieldsForRegister"] = array();

$tdataCopy_of_consulta[".listAjax"] = false;

	$tdataCopy_of_consulta[".audit"] = false;

	$tdataCopy_of_consulta[".locking"] = false;

$tdataCopy_of_consulta[".listIcons"] = true;
$tdataCopy_of_consulta[".edit"] = true;
$tdataCopy_of_consulta[".inlineEdit"] = true;
$tdataCopy_of_consulta[".inlineAdd"] = true;
$tdataCopy_of_consulta[".view"] = true;

$tdataCopy_of_consulta[".exportTo"] = true;

$tdataCopy_of_consulta[".printFriendly"] = true;

$tdataCopy_of_consulta[".delete"] = true;

$tdataCopy_of_consulta[".showSimpleSearchOptions"] = false;

$tdataCopy_of_consulta[".showSearchPanel"] = true;

if (isMobile())
	$tdataCopy_of_consulta[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_consulta[".isUseAjaxSuggest"] = true;

$tdataCopy_of_consulta[".rowHighlite"] = true;

// button handlers file names

$tdataCopy_of_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_consulta[".isUseTimeForSearch"] = false;




$tdataCopy_of_consulta[".allSearchFields"] = array();

$tdataCopy_of_consulta[".allSearchFields"][] = "id";
$tdataCopy_of_consulta[".allSearchFields"][] = "fecha";
$tdataCopy_of_consulta[".allSearchFields"][] = "paciente";
$tdataCopy_of_consulta[".allSearchFields"][] = "tipo_consulta_id";
$tdataCopy_of_consulta[".allSearchFields"][] = "id1";
$tdataCopy_of_consulta[".allSearchFields"][] = "nombre";
$tdataCopy_of_consulta[".allSearchFields"][] = "apellido";
$tdataCopy_of_consulta[".allSearchFields"][] = "cui";

$tdataCopy_of_consulta[".googleLikeFields"][] = "id";
$tdataCopy_of_consulta[".googleLikeFields"][] = "fecha";
$tdataCopy_of_consulta[".googleLikeFields"][] = "paciente";
$tdataCopy_of_consulta[".googleLikeFields"][] = "tipo_consulta_id";
$tdataCopy_of_consulta[".googleLikeFields"][] = "id1";
$tdataCopy_of_consulta[".googleLikeFields"][] = "nombre";
$tdataCopy_of_consulta[".googleLikeFields"][] = "apellido";
$tdataCopy_of_consulta[".googleLikeFields"][] = "cui";


$tdataCopy_of_consulta[".advSearchFields"][] = "id";
$tdataCopy_of_consulta[".advSearchFields"][] = "fecha";
$tdataCopy_of_consulta[".advSearchFields"][] = "paciente";
$tdataCopy_of_consulta[".advSearchFields"][] = "tipo_consulta_id";
$tdataCopy_of_consulta[".advSearchFields"][] = "id1";
$tdataCopy_of_consulta[".advSearchFields"][] = "nombre";
$tdataCopy_of_consulta[".advSearchFields"][] = "apellido";
$tdataCopy_of_consulta[".advSearchFields"][] = "cui";

$tdataCopy_of_consulta[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataCopy_of_consulta[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_consulta[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_consulta[".orderindexes"] = array();

$tdataCopy_of_consulta[".sqlHead"] = "SELECT consulta.id,  consulta.fecha,  consulta.paciente,  consulta.tipo_consulta_id,  persona.id AS id1,  persona.nombre,  persona.apellido,  persona.cui";
$tdataCopy_of_consulta[".sqlFrom"] = "FROM consulta  INNER JOIN persona ON persona.id = consulta.paciente";
$tdataCopy_of_consulta[".sqlWhereExpr"] = "";
$tdataCopy_of_consulta[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_consulta[".arrGroupsPerPage"] = $arrGPP;

$tableKeysCopy_of_consulta = array();
$tableKeysCopy_of_consulta[] = "id";
$tdataCopy_of_consulta[".Keys"] = $tableKeysCopy_of_consulta;

$tdataCopy_of_consulta[".listFields"] = array();
$tdataCopy_of_consulta[".listFields"][] = "id";
$tdataCopy_of_consulta[".listFields"][] = "fecha";
$tdataCopy_of_consulta[".listFields"][] = "paciente";
$tdataCopy_of_consulta[".listFields"][] = "tipo_consulta_id";
$tdataCopy_of_consulta[".listFields"][] = "id1";
$tdataCopy_of_consulta[".listFields"][] = "nombre";
$tdataCopy_of_consulta[".listFields"][] = "apellido";
$tdataCopy_of_consulta[".listFields"][] = "cui";

$tdataCopy_of_consulta[".viewFields"] = array();
$tdataCopy_of_consulta[".viewFields"][] = "id";
$tdataCopy_of_consulta[".viewFields"][] = "fecha";
$tdataCopy_of_consulta[".viewFields"][] = "paciente";
$tdataCopy_of_consulta[".viewFields"][] = "tipo_consulta_id";
$tdataCopy_of_consulta[".viewFields"][] = "id1";
$tdataCopy_of_consulta[".viewFields"][] = "nombre";
$tdataCopy_of_consulta[".viewFields"][] = "apellido";
$tdataCopy_of_consulta[".viewFields"][] = "cui";

$tdataCopy_of_consulta[".addFields"] = array();
$tdataCopy_of_consulta[".addFields"][] = "fecha";
$tdataCopy_of_consulta[".addFields"][] = "paciente";
$tdataCopy_of_consulta[".addFields"][] = "tipo_consulta_id";

$tdataCopy_of_consulta[".inlineAddFields"] = array();
$tdataCopy_of_consulta[".inlineAddFields"][] = "fecha";
$tdataCopy_of_consulta[".inlineAddFields"][] = "paciente";
$tdataCopy_of_consulta[".inlineAddFields"][] = "tipo_consulta_id";
$tdataCopy_of_consulta[".inlineAddFields"][] = "id1";
$tdataCopy_of_consulta[".inlineAddFields"][] = "nombre";
$tdataCopy_of_consulta[".inlineAddFields"][] = "apellido";
$tdataCopy_of_consulta[".inlineAddFields"][] = "cui";

$tdataCopy_of_consulta[".editFields"] = array();
$tdataCopy_of_consulta[".editFields"][] = "fecha";
$tdataCopy_of_consulta[".editFields"][] = "paciente";
$tdataCopy_of_consulta[".editFields"][] = "tipo_consulta_id";

$tdataCopy_of_consulta[".inlineEditFields"] = array();
$tdataCopy_of_consulta[".inlineEditFields"][] = "fecha";
$tdataCopy_of_consulta[".inlineEditFields"][] = "paciente";
$tdataCopy_of_consulta[".inlineEditFields"][] = "tipo_consulta_id";
$tdataCopy_of_consulta[".inlineEditFields"][] = "id1";
$tdataCopy_of_consulta[".inlineEditFields"][] = "nombre";
$tdataCopy_of_consulta[".inlineEditFields"][] = "apellido";
$tdataCopy_of_consulta[".inlineEditFields"][] = "cui";

$tdataCopy_of_consulta[".exportFields"] = array();
$tdataCopy_of_consulta[".exportFields"][] = "id";
$tdataCopy_of_consulta[".exportFields"][] = "fecha";
$tdataCopy_of_consulta[".exportFields"][] = "paciente";
$tdataCopy_of_consulta[".exportFields"][] = "tipo_consulta_id";
$tdataCopy_of_consulta[".exportFields"][] = "id1";
$tdataCopy_of_consulta[".exportFields"][] = "nombre";
$tdataCopy_of_consulta[".exportFields"][] = "apellido";
$tdataCopy_of_consulta[".exportFields"][] = "cui";

$tdataCopy_of_consulta[".printFields"] = array();
$tdataCopy_of_consulta[".printFields"][] = "id";
$tdataCopy_of_consulta[".printFields"][] = "fecha";
$tdataCopy_of_consulta[".printFields"][] = "paciente";
$tdataCopy_of_consulta[".printFields"][] = "tipo_consulta_id";
$tdataCopy_of_consulta[".printFields"][] = "id1";
$tdataCopy_of_consulta[".printFields"][] = "nombre";
$tdataCopy_of_consulta[".printFields"][] = "apellido";
$tdataCopy_of_consulta[".printFields"][] = "cui";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "consulta.id";
	
		
		
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
	
		
		
	$tdataCopy_of_consulta["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "consulta";
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
		$fdata["FullName"] = "consulta.fecha";
	
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataCopy_of_consulta["fecha"] = $fdata;
//	paciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "paciente";
	$fdata["GoodName"] = "paciente";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Paciente"; 
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
	
		$fdata["strField"] = "paciente"; 
		$fdata["FullName"] = "consulta.paciente";
	
		
		
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
	
		
		
	$tdataCopy_of_consulta["paciente"] = $fdata;
//	tipo_consulta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tipo_consulta_id";
	$fdata["GoodName"] = "tipo_consulta_id";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Tipo de Consulta"; 
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
	
		$fdata["strField"] = "tipo_consulta_id"; 
		$fdata["FullName"] = "consulta.tipo_consulta_id";
	
		
		
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
	
		
		
	$tdataCopy_of_consulta["tipo_consulta_id"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Id1"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "persona.id";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataCopy_of_consulta["id1"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Nombre"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "persona.nombre";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataCopy_of_consulta["nombre"] = $fdata;
//	apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "apellido";
	$fdata["GoodName"] = "apellido";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Apellido"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "apellido"; 
		$fdata["FullName"] = "persona.apellido";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataCopy_of_consulta["apellido"] = $fdata;
//	cui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cui";
	$fdata["GoodName"] = "cui";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Cui"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cui"; 
		$fdata["FullName"] = "persona.cui";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataCopy_of_consulta["cui"] = $fdata;

	
$tables_data["Copy of consulta"]=&$tdataCopy_of_consulta;
$field_labels["Copy_of_consulta"] = &$fieldLabelsCopy_of_consulta;
$fieldToolTips["Copy of consulta"] = &$fieldToolTipsCopy_of_consulta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of consulta"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of consulta"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "consulta.id,  consulta.fecha,  consulta.paciente,  consulta.tipo_consulta_id,  persona.id AS id1,  persona.nombre,  persona.apellido,  persona.cui";
$proto0["m_strFrom"] = "FROM consulta  INNER JOIN persona ON persona.id = consulta.paciente";
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
	"m_strTable" => "consulta"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "consulta"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "paciente",
	"m_strTable" => "consulta"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_consulta_id",
	"m_strTable" => "consulta"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "persona"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "persona"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido",
	"m_strTable" => "persona"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "cui",
	"m_strTable" => "persona"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "consulta";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "fecha";
$proto22["m_columns"][] = "paciente";
$proto22["m_columns"][] = "estado_retirada";
$proto22["m_columns"][] = "medico_encargado";
$proto22["m_columns"][] = "diagnostico_id";
$proto22["m_columns"][] = "tipo_consulta_id";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_INNERJOIN";
			$proto26=array();
$proto26["m_strName"] = "persona";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "nombre";
$proto26["m_columns"][] = "apellido";
$proto26["m_columns"][] = "fecha_nacimiento";
$proto26["m_columns"][] = "cui";
$proto26["m_columns"][] = "direccion";
$proto26["m_columns"][] = "telefono";
$proto26["m_columns"][] = "nit";
$proto26["m_columns"][] = "genero_id";
$proto26["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "persona.id = consulta.paciente";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "persona"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= consulta.paciente";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Copy_of_consulta = createSqlQuery_Copy_of_consulta();
								$tdataCopy_of_consulta[".sqlquery"] = $queryData_Copy_of_consulta;

$tableEvents["Copy of consulta"] = new eventsBase;
$tdataCopy_of_consulta[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of consulta");

?>