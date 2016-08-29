<?php
require_once(getabspath("classes/cipherer.php"));
$tdatalotes = array();
	$tdatalotes[".NumberOfChars"] = 80; 
	$tdatalotes[".ShortName"] = "lotes";
	$tdatalotes[".OwnerID"] = "";
	$tdatalotes[".OriginalTable"] = "lotes";

//	field labels
$fieldLabelslotes = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslotes["Spanish"] = array();
	$fieldToolTipslotes["Spanish"] = array();
	$fieldLabelslotes["Spanish"]["id"] = "Id";
	$fieldToolTipslotes["Spanish"]["id"] = "";
	$fieldLabelslotes["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipslotes["Spanish"]["codigo"] = "";
	$fieldLabelslotes["Spanish"]["produccion"] = "Produccion";
	$fieldToolTipslotes["Spanish"]["produccion"] = "";
	$fieldLabelslotes["Spanish"]["caducidad"] = "Caducidad";
	$fieldToolTipslotes["Spanish"]["caducidad"] = "";
	$fieldLabelslotes["Spanish"]["expirado"] = "Expirado";
	$fieldToolTipslotes["Spanish"]["expirado"] = "";
	$fieldLabelslotes["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipslotes["Spanish"]["proveedor"] = "";
	$fieldLabelslotes["Spanish"]["insumo"] = "Insumo";
	$fieldToolTipslotes["Spanish"]["insumo"] = "";
	$fieldLabelslotes["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipslotes["Spanish"]["cantidad"] = "";
	$fieldLabelslotes["Spanish"]["precio"] = "Precio";
	$fieldToolTipslotes["Spanish"]["precio"] = "";
	$fieldLabelslotes["Spanish"]["costo"] = "Costo";
	$fieldToolTipslotes["Spanish"]["costo"] = "";
	$fieldLabelslotes["Spanish"]["lotes"] = "Lotes";
	$fieldToolTipslotes["Spanish"]["lotes"] = "";
	$fieldLabelslotes["Spanish"]["lote_id"] = "Lote Id";
	$fieldToolTipslotes["Spanish"]["lote_id"] = "";
	if (count($fieldToolTipslotes["Spanish"]))
		$tdatalotes[".isUseToolTips"] = true;
}
	
	
	$tdatalotes[".NCSearch"] = true;



$tdatalotes[".shortTableName"] = "lotes";
$tdatalotes[".nSecOptions"] = 0;
$tdatalotes[".recsPerRowList"] = 1;
$tdatalotes[".mainTableOwnerID"] = "";
$tdatalotes[".moveNext"] = 1;
$tdatalotes[".nType"] = 0;

$tdatalotes[".strOriginalTableName"] = "lotes";




$tdatalotes[".showAddInPopup"] = true;

$tdatalotes[".showEditInPopup"] = true;

$tdatalotes[".showViewInPopup"] = true;

$tdatalotes[".fieldsForRegister"] = array();

$tdatalotes[".listAjax"] = false;

	$tdatalotes[".audit"] = true;

	$tdatalotes[".locking"] = false;

$tdatalotes[".listIcons"] = true;
$tdatalotes[".edit"] = true;
$tdatalotes[".inlineAdd"] = true;
$tdatalotes[".view"] = true;


$tdatalotes[".printFriendly"] = true;

$tdatalotes[".delete"] = true;

$tdatalotes[".showSimpleSearchOptions"] = false;

$tdatalotes[".showSearchPanel"] = true;

if (isMobile())
	$tdatalotes[".isUseAjaxSuggest"] = false;
else 
	$tdatalotes[".isUseAjaxSuggest"] = true;

$tdatalotes[".rowHighlite"] = true;

// button handlers file names

$tdatalotes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalotes[".isUseTimeForSearch"] = false;



$tdatalotes[".useDetailsPreview"] = true;

$tdatalotes[".allSearchFields"] = array();

$tdatalotes[".allSearchFields"][] = "id";
$tdatalotes[".allSearchFields"][] = "codigo";
$tdatalotes[".allSearchFields"][] = "produccion";
$tdatalotes[".allSearchFields"][] = "caducidad";
$tdatalotes[".allSearchFields"][] = "expirado";
$tdatalotes[".allSearchFields"][] = "proveedor";
$tdatalotes[".allSearchFields"][] = "insumo";
$tdatalotes[".allSearchFields"][] = "cantidad";
$tdatalotes[".allSearchFields"][] = "precio";
$tdatalotes[".allSearchFields"][] = "costo";

$tdatalotes[".googleLikeFields"][] = "id";
$tdatalotes[".googleLikeFields"][] = "codigo";
$tdatalotes[".googleLikeFields"][] = "produccion";
$tdatalotes[".googleLikeFields"][] = "caducidad";
$tdatalotes[".googleLikeFields"][] = "expirado";
$tdatalotes[".googleLikeFields"][] = "proveedor";
$tdatalotes[".googleLikeFields"][] = "insumo";
$tdatalotes[".googleLikeFields"][] = "cantidad";
$tdatalotes[".googleLikeFields"][] = "precio";
$tdatalotes[".googleLikeFields"][] = "costo";


$tdatalotes[".advSearchFields"][] = "id";
$tdatalotes[".advSearchFields"][] = "codigo";
$tdatalotes[".advSearchFields"][] = "produccion";
$tdatalotes[".advSearchFields"][] = "caducidad";
$tdatalotes[".advSearchFields"][] = "expirado";
$tdatalotes[".advSearchFields"][] = "proveedor";
$tdatalotes[".advSearchFields"][] = "insumo";
$tdatalotes[".advSearchFields"][] = "cantidad";
$tdatalotes[".advSearchFields"][] = "precio";
$tdatalotes[".advSearchFields"][] = "costo";

$tdatalotes[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
			


$tdatalotes[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalotes[".strOrderBy"] = $tstrOrderBy;

$tdatalotes[".orderindexes"] = array();

$tdatalotes[".sqlHead"] = "SELECT id,   codigo,   produccion,   caducidad,   expirado,   proveedor,   insumo,   cantidad,   precio,   costo";
$tdatalotes[".sqlFrom"] = "FROM lotes";
$tdatalotes[".sqlWhereExpr"] = "";
$tdatalotes[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalotes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalotes[".arrGroupsPerPage"] = $arrGPP;

$tableKeyslotes = array();
$tableKeyslotes[] = "id";
$tdatalotes[".Keys"] = $tableKeyslotes;

$tdatalotes[".listFields"] = array();
$tdatalotes[".listFields"][] = "id";
$tdatalotes[".listFields"][] = "codigo";
$tdatalotes[".listFields"][] = "produccion";
$tdatalotes[".listFields"][] = "caducidad";
$tdatalotes[".listFields"][] = "expirado";
$tdatalotes[".listFields"][] = "proveedor";
$tdatalotes[".listFields"][] = "insumo";
$tdatalotes[".listFields"][] = "cantidad";
$tdatalotes[".listFields"][] = "precio";
$tdatalotes[".listFields"][] = "costo";

$tdatalotes[".viewFields"] = array();
$tdatalotes[".viewFields"][] = "id";
$tdatalotes[".viewFields"][] = "codigo";
$tdatalotes[".viewFields"][] = "produccion";
$tdatalotes[".viewFields"][] = "caducidad";
$tdatalotes[".viewFields"][] = "expirado";
$tdatalotes[".viewFields"][] = "proveedor";
$tdatalotes[".viewFields"][] = "insumo";
$tdatalotes[".viewFields"][] = "cantidad";
$tdatalotes[".viewFields"][] = "precio";
$tdatalotes[".viewFields"][] = "costo";

$tdatalotes[".addFields"] = array();
$tdatalotes[".addFields"][] = "codigo";
$tdatalotes[".addFields"][] = "produccion";
$tdatalotes[".addFields"][] = "caducidad";
$tdatalotes[".addFields"][] = "expirado";
$tdatalotes[".addFields"][] = "proveedor";
$tdatalotes[".addFields"][] = "insumo";
$tdatalotes[".addFields"][] = "cantidad";
$tdatalotes[".addFields"][] = "precio";
$tdatalotes[".addFields"][] = "costo";

$tdatalotes[".inlineAddFields"] = array();

$tdatalotes[".editFields"] = array();
$tdatalotes[".editFields"][] = "codigo";
$tdatalotes[".editFields"][] = "produccion";
$tdatalotes[".editFields"][] = "caducidad";
$tdatalotes[".editFields"][] = "expirado";
$tdatalotes[".editFields"][] = "proveedor";
$tdatalotes[".editFields"][] = "insumo";
$tdatalotes[".editFields"][] = "cantidad";
$tdatalotes[".editFields"][] = "precio";
$tdatalotes[".editFields"][] = "costo";

$tdatalotes[".inlineEditFields"] = array();

$tdatalotes[".exportFields"] = array();

$tdatalotes[".printFields"] = array();
$tdatalotes[".printFields"][] = "id";
$tdatalotes[".printFields"][] = "codigo";
$tdatalotes[".printFields"][] = "produccion";
$tdatalotes[".printFields"][] = "caducidad";
$tdatalotes[".printFields"][] = "expirado";
$tdatalotes[".printFields"][] = "proveedor";
$tdatalotes[".printFields"][] = "insumo";
$tdatalotes[".printFields"][] = "cantidad";
$tdatalotes[".printFields"][] = "precio";
$tdatalotes[".printFields"][] = "costo";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Id"; 
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
	
		
		
	$tdatalotes["id"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Codigo"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "codigo"; 
		$fdata["FullName"] = "codigo";
	
		
		
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatalotes["codigo"] = $fdata;
//	produccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "produccion";
	$fdata["GoodName"] = "produccion";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Produccion"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "produccion"; 
		$fdata["FullName"] = "produccion";
	
		
		
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
	
		
		
	$tdatalotes["produccion"] = $fdata;
//	caducidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "caducidad";
	$fdata["GoodName"] = "caducidad";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Caducidad"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "caducidad"; 
		$fdata["FullName"] = "caducidad";
	
		
		
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
	
		
		
	$tdatalotes["caducidad"] = $fdata;
//	expirado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "expirado";
	$fdata["GoodName"] = "expirado";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Expirado"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "expirado"; 
		$fdata["FullName"] = "expirado";
	
		
		
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
	
		
		
	$tdatalotes["expirado"] = $fdata;
//	proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "proveedor";
	$fdata["GoodName"] = "proveedor";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Proveedor"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "proveedor"; 
		$fdata["FullName"] = "proveedor";
	
		
		
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
				if(strpos(GetUserPermissions("lotes"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = " concat(nombre,' ',nit) 
";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "proveedores";
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
	
		
		
	$tdatalotes["proveedor"] = $fdata;
//	insumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "insumo";
	$fdata["GoodName"] = "insumo";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Insumo"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "insumo"; 
		$fdata["FullName"] = "insumo";
	
		
		
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
				if(strpos(GetUserPermissions("lotes"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = " concat(codigo,' ',nombre) 
";
	
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
	
		
		
	$tdatalotes["insumo"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Cantidad"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
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
	
		
		
	$tdatalotes["cantidad"] = $fdata;
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Precio"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "precio"; 
		$fdata["FullName"] = "precio";
	
		
		
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
	
		
		
	$tdatalotes["precio"] = $fdata;
//	costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "costo";
	$fdata["GoodName"] = "costo";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Costo"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "costo"; 
		$fdata["FullName"] = "costo";
	
		
		
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
	
		
		
	$tdatalotes["costo"] = $fdata;

	
$tables_data["lotes"]=&$tdatalotes;
$field_labels["lotes"] = &$fieldLabelslotes;
$fieldToolTips["lotes"] = &$fieldToolTipslotes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lotes"] = array();
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
		
	$detailsTablesData["lotes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lotes"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["lotes"][$dIndex]["detailKeys"][]="lotes";

$dIndex = 2-1;
			$strOriginalDetailsTable="detalle_compra";
	$detailsParam["dDataSourceTable"]="detalle_compra";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="detalle_compra";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["lotes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lotes"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["lotes"][$dIndex]["detailKeys"][]="lote";

$dIndex = 3-1;
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
		
	$detailsTablesData["lotes"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["lotes"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["lotes"][$dIndex]["detailKeys"][]="lote_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["lotes"] = array();

$mIndex = 1-1;
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
	$masterTablesData["lotes"][$mIndex] = $masterParams;	
		$masterTablesData["lotes"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["lotes"][$mIndex]["detailKeys"][]="insumo";

$mIndex = 2-1;
			$strOriginalDetailsTable="proveedores";
	$masterParams["mDataSourceTable"]="proveedores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "proveedores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["lotes"][$mIndex] = $masterParams;	
		$masterTablesData["lotes"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["lotes"][$mIndex]["detailKeys"][]="proveedor";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lotes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   codigo,   produccion,   caducidad,   expirado,   proveedor,   insumo,   cantidad,   precio,   costo";
$proto0["m_strFrom"] = "FROM lotes";
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
	"m_strTable" => "lotes"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "lotes"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "produccion",
	"m_strTable" => "lotes"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "caducidad",
	"m_strTable" => "lotes"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "expirado",
	"m_strTable" => "lotes"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "lotes"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "insumo",
	"m_strTable" => "lotes"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "lotes"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "lotes"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "costo",
	"m_strTable" => "lotes"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "lotes";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "codigo";
$proto26["m_columns"][] = "produccion";
$proto26["m_columns"][] = "caducidad";
$proto26["m_columns"][] = "expirado";
$proto26["m_columns"][] = "proveedor";
$proto26["m_columns"][] = "insumo";
$proto26["m_columns"][] = "cantidad";
$proto26["m_columns"][] = "precio";
$proto26["m_columns"][] = "costo";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
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
$queryData_lotes = createSqlQuery_lotes();
										$tdatalotes[".sqlquery"] = $queryData_lotes;

$tableEvents["lotes"] = new eventsBase;
$tdatalotes[".hasEvents"] = false;

$cipherer = new RunnerCipherer("lotes");

?>