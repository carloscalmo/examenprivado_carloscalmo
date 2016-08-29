<?php
require_once(getabspath("classes/cipherer.php"));
$tdataCopy_of_lotes = array();
	$tdataCopy_of_lotes[".NumberOfChars"] = 80; 
	$tdataCopy_of_lotes[".ShortName"] = "Copy_of_lotes";
	$tdataCopy_of_lotes[".OwnerID"] = "";
	$tdataCopy_of_lotes[".OriginalTable"] = "lotes";

//	field labels
$fieldLabelsCopy_of_lotes = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCopy_of_lotes["Spanish"] = array();
	$fieldToolTipsCopy_of_lotes["Spanish"] = array();
	$fieldLabelsCopy_of_lotes["Spanish"]["id"] = "Id";
	$fieldToolTipsCopy_of_lotes["Spanish"]["id"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipsCopy_of_lotes["Spanish"]["codigo"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["produccion"] = "Produccion";
	$fieldToolTipsCopy_of_lotes["Spanish"]["produccion"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["caducidad"] = "Caducidad";
	$fieldToolTipsCopy_of_lotes["Spanish"]["caducidad"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["expirado"] = "Expirado";
	$fieldToolTipsCopy_of_lotes["Spanish"]["expirado"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipsCopy_of_lotes["Spanish"]["proveedor"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsCopy_of_lotes["Spanish"]["cantidad"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["precio"] = "Precio";
	$fieldToolTipsCopy_of_lotes["Spanish"]["precio"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["costo"] = "Costo";
	$fieldToolTipsCopy_of_lotes["Spanish"]["costo"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["lotes"] = "Lotes";
	$fieldToolTipsCopy_of_lotes["Spanish"]["lotes"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["lote_id"] = "Lote Id";
	$fieldToolTipsCopy_of_lotes["Spanish"]["lote_id"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsCopy_of_lotes["Spanish"]["nombre"] = "";
	$fieldLabelsCopy_of_lotes["Spanish"]["codigo_insumo"] = "Codigo Insumo";
	$fieldToolTipsCopy_of_lotes["Spanish"]["codigo_insumo"] = "";
	if (count($fieldToolTipsCopy_of_lotes["Spanish"]))
		$tdataCopy_of_lotes[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_lotes[".NCSearch"] = true;



$tdataCopy_of_lotes[".shortTableName"] = "Copy_of_lotes";
$tdataCopy_of_lotes[".nSecOptions"] = 0;
$tdataCopy_of_lotes[".recsPerRowList"] = 1;
$tdataCopy_of_lotes[".mainTableOwnerID"] = "";
$tdataCopy_of_lotes[".moveNext"] = 1;
$tdataCopy_of_lotes[".nType"] = 1;

$tdataCopy_of_lotes[".strOriginalTableName"] = "lotes";




$tdataCopy_of_lotes[".showAddInPopup"] = false;

$tdataCopy_of_lotes[".showEditInPopup"] = false;

$tdataCopy_of_lotes[".showViewInPopup"] = false;

$tdataCopy_of_lotes[".fieldsForRegister"] = array();

$tdataCopy_of_lotes[".listAjax"] = false;

	$tdataCopy_of_lotes[".audit"] = false;

	$tdataCopy_of_lotes[".locking"] = false;

$tdataCopy_of_lotes[".listIcons"] = true;
$tdataCopy_of_lotes[".edit"] = true;
$tdataCopy_of_lotes[".inlineEdit"] = true;
$tdataCopy_of_lotes[".inlineAdd"] = true;
$tdataCopy_of_lotes[".view"] = true;

$tdataCopy_of_lotes[".exportTo"] = true;

$tdataCopy_of_lotes[".printFriendly"] = true;

$tdataCopy_of_lotes[".delete"] = true;

$tdataCopy_of_lotes[".showSimpleSearchOptions"] = false;

$tdataCopy_of_lotes[".showSearchPanel"] = true;

if (isMobile())
	$tdataCopy_of_lotes[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_lotes[".isUseAjaxSuggest"] = true;

$tdataCopy_of_lotes[".rowHighlite"] = true;

// button handlers file names

$tdataCopy_of_lotes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_lotes[".isUseTimeForSearch"] = false;




$tdataCopy_of_lotes[".allSearchFields"] = array();

$tdataCopy_of_lotes[".allSearchFields"][] = "id";
$tdataCopy_of_lotes[".allSearchFields"][] = "codigo";
$tdataCopy_of_lotes[".allSearchFields"][] = "produccion";
$tdataCopy_of_lotes[".allSearchFields"][] = "caducidad";
$tdataCopy_of_lotes[".allSearchFields"][] = "expirado";
$tdataCopy_of_lotes[".allSearchFields"][] = "cantidad";
$tdataCopy_of_lotes[".allSearchFields"][] = "precio";
$tdataCopy_of_lotes[".allSearchFields"][] = "costo";
$tdataCopy_of_lotes[".allSearchFields"][] = "nombre";
$tdataCopy_of_lotes[".allSearchFields"][] = "codigo_insumo";
$tdataCopy_of_lotes[".allSearchFields"][] = "proveedor";

$tdataCopy_of_lotes[".googleLikeFields"][] = "id";
$tdataCopy_of_lotes[".googleLikeFields"][] = "codigo";
$tdataCopy_of_lotes[".googleLikeFields"][] = "produccion";
$tdataCopy_of_lotes[".googleLikeFields"][] = "caducidad";
$tdataCopy_of_lotes[".googleLikeFields"][] = "expirado";
$tdataCopy_of_lotes[".googleLikeFields"][] = "cantidad";
$tdataCopy_of_lotes[".googleLikeFields"][] = "precio";
$tdataCopy_of_lotes[".googleLikeFields"][] = "costo";
$tdataCopy_of_lotes[".googleLikeFields"][] = "nombre";
$tdataCopy_of_lotes[".googleLikeFields"][] = "codigo_insumo";
$tdataCopy_of_lotes[".googleLikeFields"][] = "proveedor";


$tdataCopy_of_lotes[".advSearchFields"][] = "id";
$tdataCopy_of_lotes[".advSearchFields"][] = "codigo";
$tdataCopy_of_lotes[".advSearchFields"][] = "produccion";
$tdataCopy_of_lotes[".advSearchFields"][] = "caducidad";
$tdataCopy_of_lotes[".advSearchFields"][] = "expirado";
$tdataCopy_of_lotes[".advSearchFields"][] = "cantidad";
$tdataCopy_of_lotes[".advSearchFields"][] = "precio";
$tdataCopy_of_lotes[".advSearchFields"][] = "costo";
$tdataCopy_of_lotes[".advSearchFields"][] = "nombre";
$tdataCopy_of_lotes[".advSearchFields"][] = "codigo_insumo";
$tdataCopy_of_lotes[".advSearchFields"][] = "proveedor";

$tdataCopy_of_lotes[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataCopy_of_lotes[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_lotes[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_lotes[".orderindexes"] = array();

$tdataCopy_of_lotes[".sqlHead"] = "SELECT lotes.id,  lotes.codigo,  lotes.produccion,  lotes.caducidad,  lotes.expirado,  lotes.cantidad,  lotes.precio,  lotes.costo,  insumos.nombre,  insumos.codigo AS codigo_insumo,  proveedores.nombre AS proveedor";
$tdataCopy_of_lotes[".sqlFrom"] = "FROM lotes  INNER JOIN insumos ON insumos.id = lotes.insumo  INNER JOIN proveedores ON proveedores.id = lotes.proveedor";
$tdataCopy_of_lotes[".sqlWhereExpr"] = "expirado = 0";
$tdataCopy_of_lotes[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_lotes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_lotes[".arrGroupsPerPage"] = $arrGPP;

$tableKeysCopy_of_lotes = array();
$tableKeysCopy_of_lotes[] = "id";
$tdataCopy_of_lotes[".Keys"] = $tableKeysCopy_of_lotes;

$tdataCopy_of_lotes[".listFields"] = array();
$tdataCopy_of_lotes[".listFields"][] = "id";
$tdataCopy_of_lotes[".listFields"][] = "codigo";
$tdataCopy_of_lotes[".listFields"][] = "produccion";
$tdataCopy_of_lotes[".listFields"][] = "caducidad";
$tdataCopy_of_lotes[".listFields"][] = "expirado";
$tdataCopy_of_lotes[".listFields"][] = "cantidad";
$tdataCopy_of_lotes[".listFields"][] = "precio";
$tdataCopy_of_lotes[".listFields"][] = "costo";
$tdataCopy_of_lotes[".listFields"][] = "nombre";
$tdataCopy_of_lotes[".listFields"][] = "codigo_insumo";
$tdataCopy_of_lotes[".listFields"][] = "proveedor";

$tdataCopy_of_lotes[".viewFields"] = array();
$tdataCopy_of_lotes[".viewFields"][] = "id";
$tdataCopy_of_lotes[".viewFields"][] = "codigo";
$tdataCopy_of_lotes[".viewFields"][] = "produccion";
$tdataCopy_of_lotes[".viewFields"][] = "caducidad";
$tdataCopy_of_lotes[".viewFields"][] = "expirado";
$tdataCopy_of_lotes[".viewFields"][] = "cantidad";
$tdataCopy_of_lotes[".viewFields"][] = "precio";
$tdataCopy_of_lotes[".viewFields"][] = "costo";
$tdataCopy_of_lotes[".viewFields"][] = "nombre";
$tdataCopy_of_lotes[".viewFields"][] = "codigo_insumo";
$tdataCopy_of_lotes[".viewFields"][] = "proveedor";

$tdataCopy_of_lotes[".addFields"] = array();
$tdataCopy_of_lotes[".addFields"][] = "codigo";
$tdataCopy_of_lotes[".addFields"][] = "produccion";
$tdataCopy_of_lotes[".addFields"][] = "caducidad";
$tdataCopy_of_lotes[".addFields"][] = "expirado";
$tdataCopy_of_lotes[".addFields"][] = "cantidad";
$tdataCopy_of_lotes[".addFields"][] = "precio";
$tdataCopy_of_lotes[".addFields"][] = "costo";
$tdataCopy_of_lotes[".addFields"][] = "proveedor";

$tdataCopy_of_lotes[".inlineAddFields"] = array();
$tdataCopy_of_lotes[".inlineAddFields"][] = "codigo";
$tdataCopy_of_lotes[".inlineAddFields"][] = "produccion";
$tdataCopy_of_lotes[".inlineAddFields"][] = "caducidad";
$tdataCopy_of_lotes[".inlineAddFields"][] = "expirado";
$tdataCopy_of_lotes[".inlineAddFields"][] = "cantidad";
$tdataCopy_of_lotes[".inlineAddFields"][] = "precio";
$tdataCopy_of_lotes[".inlineAddFields"][] = "costo";
$tdataCopy_of_lotes[".inlineAddFields"][] = "nombre";
$tdataCopy_of_lotes[".inlineAddFields"][] = "codigo_insumo";
$tdataCopy_of_lotes[".inlineAddFields"][] = "proveedor";

$tdataCopy_of_lotes[".editFields"] = array();
$tdataCopy_of_lotes[".editFields"][] = "codigo";
$tdataCopy_of_lotes[".editFields"][] = "produccion";
$tdataCopy_of_lotes[".editFields"][] = "caducidad";
$tdataCopy_of_lotes[".editFields"][] = "expirado";
$tdataCopy_of_lotes[".editFields"][] = "cantidad";
$tdataCopy_of_lotes[".editFields"][] = "precio";
$tdataCopy_of_lotes[".editFields"][] = "costo";
$tdataCopy_of_lotes[".editFields"][] = "proveedor";

$tdataCopy_of_lotes[".inlineEditFields"] = array();
$tdataCopy_of_lotes[".inlineEditFields"][] = "codigo";
$tdataCopy_of_lotes[".inlineEditFields"][] = "produccion";
$tdataCopy_of_lotes[".inlineEditFields"][] = "caducidad";
$tdataCopy_of_lotes[".inlineEditFields"][] = "expirado";
$tdataCopy_of_lotes[".inlineEditFields"][] = "cantidad";
$tdataCopy_of_lotes[".inlineEditFields"][] = "precio";
$tdataCopy_of_lotes[".inlineEditFields"][] = "costo";
$tdataCopy_of_lotes[".inlineEditFields"][] = "nombre";
$tdataCopy_of_lotes[".inlineEditFields"][] = "codigo_insumo";
$tdataCopy_of_lotes[".inlineEditFields"][] = "proveedor";

$tdataCopy_of_lotes[".exportFields"] = array();
$tdataCopy_of_lotes[".exportFields"][] = "id";
$tdataCopy_of_lotes[".exportFields"][] = "codigo";
$tdataCopy_of_lotes[".exportFields"][] = "produccion";
$tdataCopy_of_lotes[".exportFields"][] = "caducidad";
$tdataCopy_of_lotes[".exportFields"][] = "expirado";
$tdataCopy_of_lotes[".exportFields"][] = "cantidad";
$tdataCopy_of_lotes[".exportFields"][] = "precio";
$tdataCopy_of_lotes[".exportFields"][] = "costo";
$tdataCopy_of_lotes[".exportFields"][] = "nombre";
$tdataCopy_of_lotes[".exportFields"][] = "codigo_insumo";
$tdataCopy_of_lotes[".exportFields"][] = "proveedor";

$tdataCopy_of_lotes[".printFields"] = array();
$tdataCopy_of_lotes[".printFields"][] = "id";
$tdataCopy_of_lotes[".printFields"][] = "codigo";
$tdataCopy_of_lotes[".printFields"][] = "produccion";
$tdataCopy_of_lotes[".printFields"][] = "caducidad";
$tdataCopy_of_lotes[".printFields"][] = "expirado";
$tdataCopy_of_lotes[".printFields"][] = "cantidad";
$tdataCopy_of_lotes[".printFields"][] = "precio";
$tdataCopy_of_lotes[".printFields"][] = "costo";
$tdataCopy_of_lotes[".printFields"][] = "nombre";
$tdataCopy_of_lotes[".printFields"][] = "codigo_insumo";
$tdataCopy_of_lotes[".printFields"][] = "proveedor";

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
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "lotes.id";
	
		
		
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
	
		
		
	$tdataCopy_of_lotes["id"] = $fdata;
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "codigo"; 
		$fdata["FullName"] = "lotes.codigo";
	
		
		
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
	
		
		
	$tdataCopy_of_lotes["codigo"] = $fdata;
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "produccion"; 
		$fdata["FullName"] = "lotes.produccion";
	
		
		
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
	
		
		
	$tdataCopy_of_lotes["produccion"] = $fdata;
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "caducidad"; 
		$fdata["FullName"] = "lotes.caducidad";
	
		
		
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
	
		
		
	$tdataCopy_of_lotes["caducidad"] = $fdata;
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "expirado"; 
		$fdata["FullName"] = "lotes.expirado";
	
		
		
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
	
		
		
	$tdataCopy_of_lotes["expirado"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Cantidad"; 
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
	
		$fdata["strField"] = "cantidad"; 
		$fdata["FullName"] = "lotes.cantidad";
	
		
		
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
	
		
		
	$tdataCopy_of_lotes["cantidad"] = $fdata;
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Precio"; 
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
	
		$fdata["strField"] = "precio"; 
		$fdata["FullName"] = "lotes.precio";
	
		
		
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
	
		
		
	$tdataCopy_of_lotes["precio"] = $fdata;
//	costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "costo";
	$fdata["GoodName"] = "costo";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Costo"; 
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
	
		$fdata["strField"] = "costo"; 
		$fdata["FullName"] = "lotes.costo";
	
		
		
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
	
		
		
	$tdataCopy_of_lotes["costo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "insumos";
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
		$fdata["FullName"] = "insumos.nombre";
	
		
		
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
	
		
		
	$tdataCopy_of_lotes["nombre"] = $fdata;
//	codigo_insumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "codigo_insumo";
	$fdata["GoodName"] = "codigo_insumo";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Codigo Insumo"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "codigo"; 
		$fdata["FullName"] = "insumos.codigo";
	
		
		
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
	
		
		
	$tdataCopy_of_lotes["codigo_insumo"] = $fdata;
//	proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "proveedor";
	$fdata["GoodName"] = "proveedor";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = "Proveedor"; 
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
	
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "proveedores.nombre";
	
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataCopy_of_lotes["proveedor"] = $fdata;

	
$tables_data["Copy of lotes"]=&$tdataCopy_of_lotes;
$field_labels["Copy_of_lotes"] = &$fieldLabelsCopy_of_lotes;
$fieldToolTips["Copy of lotes"] = &$fieldToolTipsCopy_of_lotes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of lotes"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of lotes"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_lotes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "lotes.id,  lotes.codigo,  lotes.produccion,  lotes.caducidad,  lotes.expirado,  lotes.cantidad,  lotes.precio,  lotes.costo,  insumos.nombre,  insumos.codigo AS codigo_insumo,  proveedores.nombre AS proveedor";
$proto0["m_strFrom"] = "FROM lotes  INNER JOIN insumos ON insumos.id = lotes.insumo  INNER JOIN proveedores ON proveedores.id = lotes.proveedor";
$proto0["m_strWhere"] = "expirado = 0";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "expirado = 0";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "expirado",
	"m_strTable" => "lotes"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "= 0";
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
	"m_strName" => "cantidad",
	"m_strTable" => "lotes"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "lotes"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "costo",
	"m_strTable" => "lotes"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "insumos"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "insumos"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "codigo_insumo";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "proveedores"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "proveedor";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "lotes";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id";
$proto28["m_columns"][] = "codigo";
$proto28["m_columns"][] = "produccion";
$proto28["m_columns"][] = "caducidad";
$proto28["m_columns"][] = "expirado";
$proto28["m_columns"][] = "proveedor";
$proto28["m_columns"][] = "insumo";
$proto28["m_columns"][] = "cantidad";
$proto28["m_columns"][] = "precio";
$proto28["m_columns"][] = "costo";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_INNERJOIN";
			$proto32=array();
$proto32["m_strName"] = "insumos";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id";
$proto32["m_columns"][] = "codigo";
$proto32["m_columns"][] = "nombre";
$proto32["m_columns"][] = "contenido";
$proto32["m_columns"][] = "componente";
$proto32["m_columns"][] = "cantidad";
$proto32["m_columns"][] = "presentacion";
$proto32["m_columns"][] = "existencia_minima";
$proto32["m_columns"][] = "existencia_actual";
$proto32["m_columns"][] = "descripcion";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_alias"] = "";
$proto33=array();
$proto33["m_sql"] = "insumos.id = lotes.insumo";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "insumos"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= lotes.insumo";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
												$proto35=array();
$proto35["m_link"] = "SQLL_INNERJOIN";
			$proto36=array();
$proto36["m_strName"] = "proveedores";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "id";
$proto36["m_columns"][] = "nombre";
$proto36["m_columns"][] = "descripcion";
$proto36["m_columns"][] = "direccion";
$proto36["m_columns"][] = "saldo";
$proto36["m_columns"][] = "nit";
$proto36["m_columns"][] = "telefono";
$proto36["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_alias"] = "";
$proto37=array();
$proto37["m_sql"] = "proveedores.id = lotes.proveedor";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "proveedores"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= lotes.proveedor";
$proto37["m_havingmode"] = "0";
$proto37["m_inBrackets"] = "0";
$proto37["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Copy_of_lotes = createSqlQuery_Copy_of_lotes();
											$tdataCopy_of_lotes[".sqlquery"] = $queryData_Copy_of_lotes;

$tableEvents["Copy of lotes"] = new eventsBase;
$tdataCopy_of_lotes[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of lotes");

?>