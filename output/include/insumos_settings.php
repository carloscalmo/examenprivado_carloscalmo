<?php
require_once(getabspath("classes/cipherer.php"));
$tdatainsumos = array();
	$tdatainsumos[".NumberOfChars"] = 80; 
	$tdatainsumos[".ShortName"] = "insumos";
	$tdatainsumos[".OwnerID"] = "";
	$tdatainsumos[".OriginalTable"] = "insumos";

//	field labels
$fieldLabelsinsumos = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinsumos["Spanish"] = array();
	$fieldToolTipsinsumos["Spanish"] = array();
	$fieldLabelsinsumos["Spanish"]["id"] = "Código";
	$fieldToolTipsinsumos["Spanish"]["id"] = "";
	$fieldLabelsinsumos["Spanish"]["codigo"] = "Código de Barras";
	$fieldToolTipsinsumos["Spanish"]["codigo"] = "";
	$fieldLabelsinsumos["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsinsumos["Spanish"]["nombre"] = "";
	$fieldLabelsinsumos["Spanish"]["contenido"] = "Contenido";
	$fieldToolTipsinsumos["Spanish"]["contenido"] = "";
	$fieldLabelsinsumos["Spanish"]["componente"] = "Componente";
	$fieldToolTipsinsumos["Spanish"]["componente"] = "";
	$fieldLabelsinsumos["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsinsumos["Spanish"]["cantidad"] = "";
	$fieldLabelsinsumos["Spanish"]["presentacion"] = "Presentacion";
	$fieldToolTipsinsumos["Spanish"]["presentacion"] = "";
	$fieldLabelsinsumos["Spanish"]["existencia_minima"] = "Existencia Mínima";
	$fieldToolTipsinsumos["Spanish"]["existencia_minima"] = "";
	$fieldLabelsinsumos["Spanish"]["existencia_actual"] = "Existencia Actual";
	$fieldToolTipsinsumos["Spanish"]["existencia_actual"] = "";
	$fieldLabelsinsumos["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsinsumos["Spanish"]["descripcion"] = "";
	$fieldLabelsinsumos["Spanish"]["insumos_id"] = "Insumos Id";
	$fieldToolTipsinsumos["Spanish"]["insumos_id"] = "";
	$fieldLabelsinsumos["Spanish"]["producto"] = "Producto";
	$fieldToolTipsinsumos["Spanish"]["producto"] = "";
	$fieldLabelsinsumos["Spanish"]["insumo"] = "Insumo";
	$fieldToolTipsinsumos["Spanish"]["insumo"] = "";
	$fieldLabelsinsumos["Spanish"]["medicamento_id"] = "Medicamento Id";
	$fieldToolTipsinsumos["Spanish"]["medicamento_id"] = "";
	if (count($fieldToolTipsinsumos["Spanish"]))
		$tdatainsumos[".isUseToolTips"] = true;
}
	
	
	$tdatainsumos[".NCSearch"] = true;



$tdatainsumos[".shortTableName"] = "insumos";
$tdatainsumos[".nSecOptions"] = 0;
$tdatainsumos[".recsPerRowList"] = 1;
$tdatainsumos[".mainTableOwnerID"] = "";
$tdatainsumos[".moveNext"] = 1;
$tdatainsumos[".nType"] = 0;

$tdatainsumos[".strOriginalTableName"] = "insumos";




$tdatainsumos[".showAddInPopup"] = true;

$tdatainsumos[".showEditInPopup"] = true;

$tdatainsumos[".showViewInPopup"] = true;

$tdatainsumos[".fieldsForRegister"] = array();

$tdatainsumos[".listAjax"] = false;

	$tdatainsumos[".audit"] = true;

	$tdatainsumos[".locking"] = false;

$tdatainsumos[".listIcons"] = true;
$tdatainsumos[".edit"] = true;
$tdatainsumos[".inlineAdd"] = true;
$tdatainsumos[".view"] = true;


$tdatainsumos[".printFriendly"] = true;

$tdatainsumos[".delete"] = true;

$tdatainsumos[".showSimpleSearchOptions"] = false;

$tdatainsumos[".showSearchPanel"] = true;

if (isMobile())
	$tdatainsumos[".isUseAjaxSuggest"] = false;
else 
	$tdatainsumos[".isUseAjaxSuggest"] = true;

$tdatainsumos[".rowHighlite"] = true;

// button handlers file names

$tdatainsumos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsumos[".isUseTimeForSearch"] = false;



$tdatainsumos[".useDetailsPreview"] = true;

$tdatainsumos[".allSearchFields"] = array();

$tdatainsumos[".allSearchFields"][] = "id";
$tdatainsumos[".allSearchFields"][] = "codigo";
$tdatainsumos[".allSearchFields"][] = "nombre";
$tdatainsumos[".allSearchFields"][] = "componente";
$tdatainsumos[".allSearchFields"][] = "contenido";
$tdatainsumos[".allSearchFields"][] = "presentacion";
$tdatainsumos[".allSearchFields"][] = "cantidad";
$tdatainsumos[".allSearchFields"][] = "existencia_actual";
$tdatainsumos[".allSearchFields"][] = "existencia_minima";
$tdatainsumos[".allSearchFields"][] = "descripcion";

$tdatainsumos[".googleLikeFields"][] = "id";
$tdatainsumos[".googleLikeFields"][] = "codigo";
$tdatainsumos[".googleLikeFields"][] = "nombre";
$tdatainsumos[".googleLikeFields"][] = "contenido";
$tdatainsumos[".googleLikeFields"][] = "componente";
$tdatainsumos[".googleLikeFields"][] = "cantidad";
$tdatainsumos[".googleLikeFields"][] = "presentacion";
$tdatainsumos[".googleLikeFields"][] = "existencia_minima";
$tdatainsumos[".googleLikeFields"][] = "existencia_actual";
$tdatainsumos[".googleLikeFields"][] = "descripcion";


$tdatainsumos[".advSearchFields"][] = "codigo";
$tdatainsumos[".advSearchFields"][] = "nombre";
$tdatainsumos[".advSearchFields"][] = "componente";
$tdatainsumos[".advSearchFields"][] = "contenido";
$tdatainsumos[".advSearchFields"][] = "presentacion";
$tdatainsumos[".advSearchFields"][] = "cantidad";
$tdatainsumos[".advSearchFields"][] = "existencia_actual";
$tdatainsumos[".advSearchFields"][] = "existencia_minima";
$tdatainsumos[".advSearchFields"][] = "descripcion";

$tdatainsumos[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
					


$tdatainsumos[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsumos[".strOrderBy"] = $tstrOrderBy;

$tdatainsumos[".orderindexes"] = array();

$tdatainsumos[".sqlHead"] = "SELECT id,   codigo,   nombre,   contenido,   componente,   cantidad,   presentacion,   existencia_minima,   existencia_actual,   descripcion";
$tdatainsumos[".sqlFrom"] = "FROM insumos";
$tdatainsumos[".sqlWhereExpr"] = "";
$tdatainsumos[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainsumos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsumos[".arrGroupsPerPage"] = $arrGPP;

$tableKeysinsumos = array();
$tableKeysinsumos[] = "id";
$tableKeysinsumos[] = "codigo";
$tdatainsumos[".Keys"] = $tableKeysinsumos;

$tdatainsumos[".listFields"] = array();
$tdatainsumos[".listFields"][] = "codigo";
$tdatainsumos[".listFields"][] = "nombre";
$tdatainsumos[".listFields"][] = "componente";
$tdatainsumos[".listFields"][] = "contenido";
$tdatainsumos[".listFields"][] = "presentacion";
$tdatainsumos[".listFields"][] = "cantidad";
$tdatainsumos[".listFields"][] = "existencia_actual";
$tdatainsumos[".listFields"][] = "existencia_minima";
$tdatainsumos[".listFields"][] = "descripcion";

$tdatainsumos[".viewFields"] = array();
$tdatainsumos[".viewFields"][] = "codigo";
$tdatainsumos[".viewFields"][] = "nombre";
$tdatainsumos[".viewFields"][] = "componente";
$tdatainsumos[".viewFields"][] = "contenido";
$tdatainsumos[".viewFields"][] = "presentacion";
$tdatainsumos[".viewFields"][] = "cantidad";
$tdatainsumos[".viewFields"][] = "existencia_actual";
$tdatainsumos[".viewFields"][] = "existencia_minima";
$tdatainsumos[".viewFields"][] = "descripcion";

$tdatainsumos[".addFields"] = array();
$tdatainsumos[".addFields"][] = "codigo";
$tdatainsumos[".addFields"][] = "nombre";
$tdatainsumos[".addFields"][] = "componente";
$tdatainsumos[".addFields"][] = "contenido";
$tdatainsumos[".addFields"][] = "presentacion";
$tdatainsumos[".addFields"][] = "cantidad";
$tdatainsumos[".addFields"][] = "existencia_actual";
$tdatainsumos[".addFields"][] = "existencia_minima";
$tdatainsumos[".addFields"][] = "descripcion";

$tdatainsumos[".inlineAddFields"] = array();

$tdatainsumos[".editFields"] = array();
$tdatainsumos[".editFields"][] = "codigo";
$tdatainsumos[".editFields"][] = "nombre";
$tdatainsumos[".editFields"][] = "componente";
$tdatainsumos[".editFields"][] = "contenido";
$tdatainsumos[".editFields"][] = "presentacion";
$tdatainsumos[".editFields"][] = "cantidad";
$tdatainsumos[".editFields"][] = "existencia_actual";
$tdatainsumos[".editFields"][] = "existencia_minima";
$tdatainsumos[".editFields"][] = "descripcion";

$tdatainsumos[".inlineEditFields"] = array();

$tdatainsumos[".exportFields"] = array();

$tdatainsumos[".printFields"] = array();
$tdatainsumos[".printFields"][] = "codigo";
$tdatainsumos[".printFields"][] = "nombre";
$tdatainsumos[".printFields"][] = "componente";
$tdatainsumos[".printFields"][] = "contenido";
$tdatainsumos[".printFields"][] = "presentacion";
$tdatainsumos[".printFields"][] = "cantidad";
$tdatainsumos[".printFields"][] = "existencia_actual";
$tdatainsumos[".printFields"][] = "existencia_minima";
$tdatainsumos[".printFields"][] = "descripcion";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatainsumos["id"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Código de Barras"; 
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
			$edata["EditParams"].= " maxlength=45";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatainsumos["codigo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "insumos";
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
			$edata["EditParams"].= " maxlength=45";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatainsumos["nombre"] = $fdata;
//	contenido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contenido";
	$fdata["GoodName"] = "contenido";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Contenido"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "contenido"; 
		$fdata["FullName"] = "contenido";
	
		
		
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
	
		
		
	$tdatainsumos["contenido"] = $fdata;
//	componente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "componente";
	$fdata["GoodName"] = "componente";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Componente"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "componente"; 
		$fdata["FullName"] = "componente";
	
		
		
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
	
		
		
	$tdatainsumos["componente"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "insumos";
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
	
		
		
	$tdatainsumos["cantidad"] = $fdata;
//	presentacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "presentacion";
	$fdata["GoodName"] = "presentacion";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Presentacion"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "presentacion"; 
		$fdata["FullName"] = "presentacion";
	
		
		
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
	
		
		
	$tdatainsumos["presentacion"] = $fdata;
//	existencia_minima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "existencia_minima";
	$fdata["GoodName"] = "existencia_minima";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Existencia Mínima"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "existencia_minima"; 
		$fdata["FullName"] = "existencia_minima";
	
		
		
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
	
		
		
	$tdatainsumos["existencia_minima"] = $fdata;
//	existencia_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "existencia_actual";
	$fdata["GoodName"] = "existencia_actual";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Existencia Actual"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "existencia_actual"; 
		$fdata["FullName"] = "existencia_actual";
	
		
		
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
	
		
		
	$tdatainsumos["existencia_actual"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Descripcion"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "descripcion"; 
		$fdata["FullName"] = "descripcion";
	
		
		
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
	
		
		
	$tdatainsumos["descripcion"] = $fdata;

	
$tables_data["insumos"]=&$tdatainsumos;
$field_labels["insumos"] = &$fieldLabelsinsumos;
$fieldToolTips["insumos"] = &$fieldToolTipsinsumos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insumos"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="detalle_servicio";
	$detailsParam["dDataSourceTable"]="detalle_servicio";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="detalle_servicio";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["insumos"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["insumos"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["insumos"][$dIndex]["detailKeys"][]="insumos_id";

$dIndex = 2-1;
			$strOriginalDetailsTable="detalle_cirugia";
	$detailsParam["dDataSourceTable"]="detalle_cirugia";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="detalle_cirugia";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["insumos"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["insumos"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["insumos"][$dIndex]["detailKeys"][]="insumos_id";

$dIndex = 3-1;
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
		
	$detailsTablesData["insumos"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["insumos"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["insumos"][$dIndex]["detailKeys"][]="producto";

$dIndex = 4-1;
			$strOriginalDetailsTable="lotes";
	$detailsParam["dDataSourceTable"]="lotes";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="lotes";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["insumos"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["insumos"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["insumos"][$dIndex]["detailKeys"][]="insumo";

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
		
	$detailsTablesData["insumos"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["insumos"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["insumos"][$dIndex]["detailKeys"][]="medicamento_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["insumos"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insumos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   codigo,   nombre,   contenido,   componente,   cantidad,   presentacion,   existencia_minima,   existencia_actual,   descripcion";
$proto0["m_strFrom"] = "FROM insumos";
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
	"m_strTable" => "insumos"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "insumos"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "insumos"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "contenido",
	"m_strTable" => "insumos"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "componente",
	"m_strTable" => "insumos"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "insumos"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "presentacion",
	"m_strTable" => "insumos"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "existencia_minima",
	"m_strTable" => "insumos"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "existencia_actual",
	"m_strTable" => "insumos"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "insumos"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "insumos";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "codigo";
$proto26["m_columns"][] = "nombre";
$proto26["m_columns"][] = "contenido";
$proto26["m_columns"][] = "componente";
$proto26["m_columns"][] = "cantidad";
$proto26["m_columns"][] = "presentacion";
$proto26["m_columns"][] = "existencia_minima";
$proto26["m_columns"][] = "existencia_actual";
$proto26["m_columns"][] = "descripcion";
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
$queryData_insumos = createSqlQuery_insumos();
										$tdatainsumos[".sqlquery"] = $queryData_insumos;

$tableEvents["insumos"] = new eventsBase;
$tdatainsumos[".hasEvents"] = false;

$cipherer = new RunnerCipherer("insumos");

?>