<?php
require_once(getabspath("classes/cipherer.php"));
$tdataconsulta = array();
	$tdataconsulta[".NumberOfChars"] = 80; 
	$tdataconsulta[".ShortName"] = "consulta";
	$tdataconsulta[".OwnerID"] = "";
	$tdataconsulta[".OriginalTable"] = "consulta";

//	field labels
$fieldLabelsconsulta = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulta["Spanish"] = array();
	$fieldToolTipsconsulta["Spanish"] = array();
	$fieldLabelsconsulta["Spanish"]["id"] = "Código";
	$fieldToolTipsconsulta["Spanish"]["id"] = "";
	$fieldLabelsconsulta["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsconsulta["Spanish"]["fecha"] = "";
	$fieldLabelsconsulta["Spanish"]["paciente"] = "Paciente";
	$fieldToolTipsconsulta["Spanish"]["paciente"] = "";
	$fieldLabelsconsulta["Spanish"]["estado_retirada"] = "Estado Retirada";
	$fieldToolTipsconsulta["Spanish"]["estado_retirada"] = "";
	$fieldLabelsconsulta["Spanish"]["medico_encargado"] = "Medico Encargado";
	$fieldToolTipsconsulta["Spanish"]["medico_encargado"] = "";
	$fieldLabelsconsulta["Spanish"]["diagnostico_id"] = "Diagnostico";
	$fieldToolTipsconsulta["Spanish"]["diagnostico_id"] = "";
	$fieldLabelsconsulta["Spanish"]["tipo_consulta_id"] = "Tipo de Consulta";
	$fieldToolTipsconsulta["Spanish"]["tipo_consulta_id"] = "";
	$fieldLabelsconsulta["Spanish"]["consulta_id"] = "Consulta Id";
	$fieldToolTipsconsulta["Spanish"]["consulta_id"] = "";
	if (count($fieldToolTipsconsulta["Spanish"]))
		$tdataconsulta[".isUseToolTips"] = true;
}
	
	
	$tdataconsulta[".NCSearch"] = true;



$tdataconsulta[".shortTableName"] = "consulta";
$tdataconsulta[".nSecOptions"] = 0;
$tdataconsulta[".recsPerRowList"] = 1;
$tdataconsulta[".mainTableOwnerID"] = "";
$tdataconsulta[".moveNext"] = 1;
$tdataconsulta[".nType"] = 0;

$tdataconsulta[".strOriginalTableName"] = "consulta";




$tdataconsulta[".showAddInPopup"] = true;

$tdataconsulta[".showEditInPopup"] = true;

$tdataconsulta[".showViewInPopup"] = true;

$tdataconsulta[".fieldsForRegister"] = array();

$tdataconsulta[".listAjax"] = false;

	$tdataconsulta[".audit"] = true;

	$tdataconsulta[".locking"] = false;

$tdataconsulta[".listIcons"] = true;
$tdataconsulta[".edit"] = true;
$tdataconsulta[".view"] = true;


$tdataconsulta[".printFriendly"] = true;

$tdataconsulta[".delete"] = true;

$tdataconsulta[".showSimpleSearchOptions"] = false;

$tdataconsulta[".showSearchPanel"] = true;

if (isMobile())
	$tdataconsulta[".isUseAjaxSuggest"] = false;
else 
	$tdataconsulta[".isUseAjaxSuggest"] = true;

$tdataconsulta[".rowHighlite"] = true;

// button handlers file names

$tdataconsulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulta[".isUseTimeForSearch"] = false;



$tdataconsulta[".useDetailsPreview"] = true;

$tdataconsulta[".allSearchFields"] = array();

$tdataconsulta[".allSearchFields"][] = "id";
$tdataconsulta[".allSearchFields"][] = "tipo_consulta_id";
$tdataconsulta[".allSearchFields"][] = "paciente";
$tdataconsulta[".allSearchFields"][] = "fecha";
$tdataconsulta[".allSearchFields"][] = "medico_encargado";
$tdataconsulta[".allSearchFields"][] = "diagnostico_id";
$tdataconsulta[".allSearchFields"][] = "estado_retirada";

$tdataconsulta[".googleLikeFields"][] = "id";
$tdataconsulta[".googleLikeFields"][] = "fecha";
$tdataconsulta[".googleLikeFields"][] = "paciente";
$tdataconsulta[".googleLikeFields"][] = "estado_retirada";
$tdataconsulta[".googleLikeFields"][] = "medico_encargado";
$tdataconsulta[".googleLikeFields"][] = "diagnostico_id";
$tdataconsulta[".googleLikeFields"][] = "tipo_consulta_id";


$tdataconsulta[".advSearchFields"][] = "id";
$tdataconsulta[".advSearchFields"][] = "tipo_consulta_id";
$tdataconsulta[".advSearchFields"][] = "paciente";
$tdataconsulta[".advSearchFields"][] = "fecha";
$tdataconsulta[".advSearchFields"][] = "medico_encargado";
$tdataconsulta[".advSearchFields"][] = "diagnostico_id";
$tdataconsulta[".advSearchFields"][] = "estado_retirada";

$tdataconsulta[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
					


$tdataconsulta[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconsulta[".strOrderBy"] = $tstrOrderBy;

$tdataconsulta[".orderindexes"] = array();

$tdataconsulta[".sqlHead"] = "SELECT id,   fecha,   paciente,   estado_retirada,   medico_encargado,   diagnostico_id,   tipo_consulta_id";
$tdataconsulta[".sqlFrom"] = "FROM consulta";
$tdataconsulta[".sqlWhereExpr"] = "";
$tdataconsulta[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulta[".arrGroupsPerPage"] = $arrGPP;

$tableKeysconsulta = array();
$tableKeysconsulta[] = "id";
$tableKeysconsulta[] = "paciente";
$tdataconsulta[".Keys"] = $tableKeysconsulta;

$tdataconsulta[".listFields"] = array();
$tdataconsulta[".listFields"][] = "id";
$tdataconsulta[".listFields"][] = "tipo_consulta_id";
$tdataconsulta[".listFields"][] = "paciente";
$tdataconsulta[".listFields"][] = "fecha";
$tdataconsulta[".listFields"][] = "medico_encargado";
$tdataconsulta[".listFields"][] = "diagnostico_id";
$tdataconsulta[".listFields"][] = "estado_retirada";

$tdataconsulta[".viewFields"] = array();
$tdataconsulta[".viewFields"][] = "id";
$tdataconsulta[".viewFields"][] = "tipo_consulta_id";
$tdataconsulta[".viewFields"][] = "paciente";
$tdataconsulta[".viewFields"][] = "fecha";
$tdataconsulta[".viewFields"][] = "medico_encargado";
$tdataconsulta[".viewFields"][] = "diagnostico_id";
$tdataconsulta[".viewFields"][] = "estado_retirada";

$tdataconsulta[".addFields"] = array();
$tdataconsulta[".addFields"][] = "tipo_consulta_id";
$tdataconsulta[".addFields"][] = "paciente";
$tdataconsulta[".addFields"][] = "fecha";
$tdataconsulta[".addFields"][] = "medico_encargado";
$tdataconsulta[".addFields"][] = "diagnostico_id";
$tdataconsulta[".addFields"][] = "estado_retirada";

$tdataconsulta[".inlineAddFields"] = array();

$tdataconsulta[".editFields"] = array();
$tdataconsulta[".editFields"][] = "tipo_consulta_id";
$tdataconsulta[".editFields"][] = "paciente";
$tdataconsulta[".editFields"][] = "fecha";
$tdataconsulta[".editFields"][] = "medico_encargado";
$tdataconsulta[".editFields"][] = "diagnostico_id";
$tdataconsulta[".editFields"][] = "estado_retirada";

$tdataconsulta[".inlineEditFields"] = array();

$tdataconsulta[".exportFields"] = array();

$tdataconsulta[".printFields"] = array();
$tdataconsulta[".printFields"][] = "id";
$tdataconsulta[".printFields"][] = "tipo_consulta_id";
$tdataconsulta[".printFields"][] = "paciente";
$tdataconsulta[".printFields"][] = "fecha";
$tdataconsulta[".printFields"][] = "medico_encargado";
$tdataconsulta[".printFields"][] = "diagnostico_id";
$tdataconsulta[".printFields"][] = "estado_retirada";

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
	
		
		
	$tdataconsulta["id"] = $fdata;
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
	
		
		
	$tdataconsulta["fecha"] = $fdata;
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
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "paciente"; 
		$fdata["FullName"] = "paciente";
	
		
		
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
				if(strpos(GetUserPermissions("consulta"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(cui,' ',nombre,' ',apellido)";
	
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
	
		
		
	$tdataconsulta["paciente"] = $fdata;
//	estado_retirada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "estado_retirada";
	$fdata["GoodName"] = "estado_retirada";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Estado Retirada"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "estado_retirada"; 
		$fdata["FullName"] = "estado_retirada";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataconsulta["estado_retirada"] = $fdata;
//	medico_encargado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "medico_encargado";
	$fdata["GoodName"] = "medico_encargado";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Medico Encargado"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "medico_encargado"; 
		$fdata["FullName"] = "medico_encargado";
	
		
		
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
				if(strpos(GetUserPermissions("consulta"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CONCAT(nombre,' ',apellido)";
	
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
	
		
		
	$tdataconsulta["medico_encargado"] = $fdata;
//	diagnostico_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "diagnostico_id";
	$fdata["GoodName"] = "diagnostico_id";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Diagnostico"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "diagnostico_id"; 
		$fdata["FullName"] = "diagnostico_id";
	
		
		
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
				if(strpos(GetUserPermissions("consulta"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupTable"] = "diagnostico";
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
	
		
		
	$tdataconsulta["diagnostico_id"] = $fdata;
//	tipo_consulta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_consulta_id";
	$fdata["GoodName"] = "tipo_consulta_id";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Tipo de Consulta"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "tipo_consulta_id"; 
		$fdata["FullName"] = "tipo_consulta_id";
	
		
		
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
				if(strpos(GetUserPermissions("consulta"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupTable"] = "tipo_consulta";
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
	
		
		
	$tdataconsulta["tipo_consulta_id"] = $fdata;

	
$tables_data["consulta"]=&$tdataconsulta;
$field_labels["consulta"] = &$fieldLabelsconsulta;
$fieldToolTips["consulta"] = &$fieldToolTipsconsulta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["consulta"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="cirugia";
	$detailsParam["dDataSourceTable"]="cirugia";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="cirugia";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["consulta"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["consulta"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["consulta"][$dIndex]["detailKeys"][]="consulta_id";

$dIndex = 2-1;
			$strOriginalDetailsTable="hospitalizacion";
	$detailsParam["dDataSourceTable"]="hospitalizacion";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="hospitalizacion";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["consulta"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["consulta"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["consulta"][$dIndex]["detailKeys"][]="consulta_id";

$dIndex = 3-1;
			$strOriginalDetailsTable="solicitud_servicio";
	$detailsParam["dDataSourceTable"]="solicitud_servicio";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="solicitud_servicio";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["consulta"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["consulta"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["consulta"][$dIndex]["detailKeys"][]="consulta_id";

$dIndex = 4-1;
			$strOriginalDetailsTable="factura_consulta";
	$detailsParam["dDataSourceTable"]="factura_consulta";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="factura_consulta";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["consulta"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["consulta"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["consulta"][$dIndex]["detailKeys"][]="consulta_id";

$dIndex = 5-1;
			$strOriginalDetailsTable="solicitud_medicamento";
	$detailsParam["dDataSourceTable"]="solicitud_medicamento";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="solicitud_medicamento";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["consulta"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["consulta"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["consulta"][$dIndex]["detailKeys"][]="consulta_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["consulta"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="diagnostico";
	$masterParams["mDataSourceTable"]="diagnostico";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "diagnostico";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["consulta"][$mIndex] = $masterParams;	
		$masterTablesData["consulta"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["consulta"][$mIndex]["detailKeys"][]="diagnostico_id";

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
	$masterTablesData["consulta"][$mIndex] = $masterParams;	
		$masterTablesData["consulta"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["consulta"][$mIndex]["detailKeys"][]="medico_encargado";

$mIndex = 3-1;
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
	$masterTablesData["consulta"][$mIndex] = $masterParams;	
		$masterTablesData["consulta"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["consulta"][$mIndex]["detailKeys"][]="paciente";

$mIndex = 4-1;
			$strOriginalDetailsTable="tipo_consulta";
	$masterParams["mDataSourceTable"]="tipo_consulta";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tipo_consulta";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["consulta"][$mIndex] = $masterParams;	
		$masterTablesData["consulta"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["consulta"][$mIndex]["detailKeys"][]="tipo_consulta_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   fecha,   paciente,   estado_retirada,   medico_encargado,   diagnostico_id,   tipo_consulta_id";
$proto0["m_strFrom"] = "FROM consulta";
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
	"m_strName" => "estado_retirada",
	"m_strTable" => "consulta"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "medico_encargado",
	"m_strTable" => "consulta"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnostico_id",
	"m_strTable" => "consulta"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_consulta_id",
	"m_strTable" => "consulta"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "consulta";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "fecha";
$proto20["m_columns"][] = "paciente";
$proto20["m_columns"][] = "estado_retirada";
$proto20["m_columns"][] = "medico_encargado";
$proto20["m_columns"][] = "diagnostico_id";
$proto20["m_columns"][] = "tipo_consulta_id";
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
$queryData_consulta = createSqlQuery_consulta();
							$tdataconsulta[".sqlquery"] = $queryData_consulta;

$tableEvents["consulta"] = new eventsBase;
$tdataconsulta[".hasEvents"] = false;

$cipherer = new RunnerCipherer("consulta");

?>