<?php
require_once(getabspath("classes/cipherer.php"));
$tdatausuarios = array();
	$tdatausuarios[".NumberOfChars"] = 80; 
	$tdatausuarios[".ShortName"] = "usuarios";
	$tdatausuarios[".OwnerID"] = "";
	$tdatausuarios[".OriginalTable"] = "usuarios";

//	field labels
$fieldLabelsusuarios = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuarios["Spanish"] = array();
	$fieldToolTipsusuarios["Spanish"] = array();
	$fieldLabelsusuarios["Spanish"]["id"] = "Código";
	$fieldToolTipsusuarios["Spanish"]["id"] = "";
	$fieldLabelsusuarios["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsusuarios["Spanish"]["nombre"] = "";
	$fieldLabelsusuarios["Spanish"]["contrase_a"] = "Contraseña";
	$fieldToolTipsusuarios["Spanish"]["contraseña"] = "";
	$fieldLabelsusuarios["Spanish"]["fecha_inicio"] = "Fecha de Inicio";
	$fieldToolTipsusuarios["Spanish"]["fecha_inicio"] = "";
	$fieldLabelsusuarios["Spanish"]["fecha_fin"] = "Fecha de Baja";
	$fieldToolTipsusuarios["Spanish"]["fecha_fin"] = "";
	$fieldLabelsusuarios["Spanish"]["baja"] = "Baja";
	$fieldToolTipsusuarios["Spanish"]["baja"] = "";
	$fieldLabelsusuarios["Spanish"]["empleado_id"] = "Empleado";
	$fieldToolTipsusuarios["Spanish"]["empleado_id"] = "";
	$fieldLabelsusuarios["Spanish"]["Rol"] = "Rol";
	$fieldToolTipsusuarios["Spanish"]["Rol"] = "";
	if (count($fieldToolTipsusuarios["Spanish"]))
		$tdatausuarios[".isUseToolTips"] = true;
}
	
	
	$tdatausuarios[".NCSearch"] = true;



$tdatausuarios[".shortTableName"] = "usuarios";
$tdatausuarios[".nSecOptions"] = 0;
$tdatausuarios[".recsPerRowList"] = 1;
$tdatausuarios[".mainTableOwnerID"] = "";
$tdatausuarios[".moveNext"] = 1;
$tdatausuarios[".nType"] = 0;

$tdatausuarios[".strOriginalTableName"] = "usuarios";




$tdatausuarios[".showAddInPopup"] = true;

$tdatausuarios[".showEditInPopup"] = true;

$tdatausuarios[".showViewInPopup"] = true;

$tdatausuarios[".fieldsForRegister"] = array();

$tdatausuarios[".listAjax"] = false;

	$tdatausuarios[".audit"] = true;

	$tdatausuarios[".locking"] = false;

$tdatausuarios[".listIcons"] = true;
$tdatausuarios[".edit"] = true;
$tdatausuarios[".view"] = true;


$tdatausuarios[".printFriendly"] = true;

$tdatausuarios[".delete"] = true;

$tdatausuarios[".showSimpleSearchOptions"] = false;

$tdatausuarios[".showSearchPanel"] = true;

if (isMobile())
	$tdatausuarios[".isUseAjaxSuggest"] = false;
else 
	$tdatausuarios[".isUseAjaxSuggest"] = true;

$tdatausuarios[".rowHighlite"] = true;

// button handlers file names

$tdatausuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios[".isUseTimeForSearch"] = false;



$tdatausuarios[".useDetailsPreview"] = true;

$tdatausuarios[".allSearchFields"] = array();

$tdatausuarios[".allSearchFields"][] = "Rol";
$tdatausuarios[".allSearchFields"][] = "nombre";
$tdatausuarios[".allSearchFields"][] = "contraseña";
$tdatausuarios[".allSearchFields"][] = "empleado_id";
$tdatausuarios[".allSearchFields"][] = "fecha_inicio";
$tdatausuarios[".allSearchFields"][] = "fecha_fin";
$tdatausuarios[".allSearchFields"][] = "baja";

$tdatausuarios[".googleLikeFields"][] = "id";
$tdatausuarios[".googleLikeFields"][] = "nombre";
$tdatausuarios[".googleLikeFields"][] = "contraseña";
$tdatausuarios[".googleLikeFields"][] = "fecha_inicio";
$tdatausuarios[".googleLikeFields"][] = "fecha_fin";
$tdatausuarios[".googleLikeFields"][] = "baja";
$tdatausuarios[".googleLikeFields"][] = "empleado_id";
$tdatausuarios[".googleLikeFields"][] = "Rol";


$tdatausuarios[".advSearchFields"][] = "Rol";
$tdatausuarios[".advSearchFields"][] = "nombre";
$tdatausuarios[".advSearchFields"][] = "contraseña";
$tdatausuarios[".advSearchFields"][] = "empleado_id";
$tdatausuarios[".advSearchFields"][] = "fecha_inicio";
$tdatausuarios[".advSearchFields"][] = "fecha_fin";
$tdatausuarios[".advSearchFields"][] = "baja";

$tdatausuarios[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatausuarios[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausuarios[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios[".orderindexes"] = array();

$tdatausuarios[".sqlHead"] = "SELECT id,   nombre,   `contraseña`,   fecha_inicio,   fecha_fin,   baja,   empleado_id,   Rol";
$tdatausuarios[".sqlFrom"] = "FROM usuarios";
$tdatausuarios[".sqlWhereExpr"] = "";
$tdatausuarios[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios[".arrGroupsPerPage"] = $arrGPP;

$tableKeysusuarios = array();
$tableKeysusuarios[] = "id";
$tableKeysusuarios[] = "nombre";
$tableKeysusuarios[] = "empleado_id";
$tdatausuarios[".Keys"] = $tableKeysusuarios;

$tdatausuarios[".listFields"] = array();
$tdatausuarios[".listFields"][] = "Rol";
$tdatausuarios[".listFields"][] = "nombre";
$tdatausuarios[".listFields"][] = "contraseña";
$tdatausuarios[".listFields"][] = "empleado_id";
$tdatausuarios[".listFields"][] = "fecha_inicio";
$tdatausuarios[".listFields"][] = "fecha_fin";
$tdatausuarios[".listFields"][] = "baja";

$tdatausuarios[".viewFields"] = array();
$tdatausuarios[".viewFields"][] = "Rol";
$tdatausuarios[".viewFields"][] = "nombre";
$tdatausuarios[".viewFields"][] = "contraseña";
$tdatausuarios[".viewFields"][] = "empleado_id";
$tdatausuarios[".viewFields"][] = "fecha_inicio";
$tdatausuarios[".viewFields"][] = "fecha_fin";
$tdatausuarios[".viewFields"][] = "baja";

$tdatausuarios[".addFields"] = array();
$tdatausuarios[".addFields"][] = "Rol";
$tdatausuarios[".addFields"][] = "nombre";
$tdatausuarios[".addFields"][] = "contraseña";
$tdatausuarios[".addFields"][] = "empleado_id";
$tdatausuarios[".addFields"][] = "fecha_inicio";
$tdatausuarios[".addFields"][] = "fecha_fin";
$tdatausuarios[".addFields"][] = "baja";

$tdatausuarios[".inlineAddFields"] = array();

$tdatausuarios[".editFields"] = array();
$tdatausuarios[".editFields"][] = "Rol";
$tdatausuarios[".editFields"][] = "nombre";
$tdatausuarios[".editFields"][] = "contraseña";
$tdatausuarios[".editFields"][] = "empleado_id";
$tdatausuarios[".editFields"][] = "fecha_inicio";
$tdatausuarios[".editFields"][] = "fecha_fin";
$tdatausuarios[".editFields"][] = "baja";

$tdatausuarios[".inlineEditFields"] = array();

$tdatausuarios[".exportFields"] = array();

$tdatausuarios[".printFields"] = array();
$tdatausuarios[".printFields"][] = "Rol";
$tdatausuarios[".printFields"][] = "nombre";
$tdatausuarios[".printFields"][] = "contraseña";
$tdatausuarios[".printFields"][] = "empleado_id";
$tdatausuarios[".printFields"][] = "fecha_inicio";
$tdatausuarios[".printFields"][] = "fecha_fin";
$tdatausuarios[".printFields"][] = "baja";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = "Código"; 
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
	
		
		
	$tdatausuarios["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = "Nombre"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "nombre";
	
		
		
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
			$edata["EditParams"].= " maxlength=15";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatausuarios["nombre"] = $fdata;
//	contraseña
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contraseña";
	$fdata["GoodName"] = "contrase_a";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = "Contraseña"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "contraseña"; 
		$fdata["FullName"] = "`contraseña`";
	
		
		
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
			$edata["EditParams"].= " maxlength=15";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatausuarios["contraseña"] = $fdata;
//	fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_inicio";
	$fdata["GoodName"] = "fecha_inicio";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = "Fecha de Inicio"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha_inicio"; 
		$fdata["FullName"] = "fecha_inicio";
	
		
		
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
	
		
		
	$tdatausuarios["fecha_inicio"] = $fdata;
//	fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_fin";
	$fdata["GoodName"] = "fecha_fin";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = "Fecha de Baja"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha_fin"; 
		$fdata["FullName"] = "fecha_fin";
	
		
		
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
	
		
		
	$tdatausuarios["fecha_fin"] = $fdata;
//	baja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "baja";
	$fdata["GoodName"] = "baja";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = "Baja"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "baja"; 
		$fdata["FullName"] = "baja";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatausuarios["baja"] = $fdata;
//	empleado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "empleado_id";
	$fdata["GoodName"] = "empleado_id";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = "Empleado"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "empleado_id"; 
		$fdata["FullName"] = "empleado_id";
	
		
		
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
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "id_empleado";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(nombre,' ',apellido)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "Copy of empleado4";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
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
	
		
		
	$tdatausuarios["empleado_id"] = $fdata;
//	Rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Rol";
	$fdata["GoodName"] = "Rol";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = "Rol"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Rol"; 
		$fdata["FullName"] = "Rol";
	
		
		
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
	
		
		
	$tdatausuarios["Rol"] = $fdata;

	
$tables_data["usuarios"]=&$tdatausuarios;
$field_labels["usuarios"] = &$fieldLabelsusuarios;
$fieldToolTips["usuarios"] = &$fieldToolTipsusuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usuarios"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="descarga_inventario_expirado";
	$detailsParam["dDataSourceTable"]="descarga_inventario_expirado";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="descarga_inventario_expirado";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["usuarios"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["usuarios"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["usuarios"][$dIndex]["detailKeys"][]="responsable";

	
// tables which are master tables for current table (detail)
$masterTablesData["usuarios"] = array();

$mIndex = 1-1;
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
	$masterTablesData["usuarios"][$mIndex] = $masterParams;	
		$masterTablesData["usuarios"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["usuarios"][$mIndex]["detailKeys"][]="empleado_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nombre,   `contraseña`,   fecha_inicio,   fecha_fin,   baja,   empleado_id,   Rol";
$proto0["m_strFrom"] = "FROM usuarios";
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
	"m_strTable" => "usuarios"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "usuarios"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "contraseña",
	"m_strTable" => "usuarios"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_inicio",
	"m_strTable" => "usuarios"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_fin",
	"m_strTable" => "usuarios"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "baja",
	"m_strTable" => "usuarios"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "empleado_id",
	"m_strTable" => "usuarios"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Rol",
	"m_strTable" => "usuarios"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "usuarios";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "nombre";
$proto22["m_columns"][] = "contraseña";
$proto22["m_columns"][] = "fecha_inicio";
$proto22["m_columns"][] = "fecha_fin";
$proto22["m_columns"][] = "baja";
$proto22["m_columns"][] = "empleado_id";
$proto22["m_columns"][] = "Rol";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios = createSqlQuery_usuarios();
								$tdatausuarios[".sqlquery"] = $queryData_usuarios;

$tableEvents["usuarios"] = new eventsBase;
$tdatausuarios[".hasEvents"] = false;

$cipherer = new RunnerCipherer("usuarios");

?>