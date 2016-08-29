<?php
require_once(getabspath("classes/cipherer.php"));
$tdataProducto_Caducados = array();
	$tdataProducto_Caducados[".NumberOfChars"] = 80; 
	$tdataProducto_Caducados[".ShortName"] = "Producto_Caducados";
	$tdataProducto_Caducados[".OwnerID"] = "";
	$tdataProducto_Caducados[".OriginalTable"] = "lotes";

//	field labels
$fieldLabelsProducto_Caducados = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsProducto_Caducados["Spanish"] = array();
	$fieldToolTipsProducto_Caducados["Spanish"] = array();
	$fieldLabelsProducto_Caducados["Spanish"]["id"] = "Código de Lote";
	$fieldToolTipsProducto_Caducados["Spanish"]["id"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["codigo"] = "Código de Producto";
	$fieldToolTipsProducto_Caducados["Spanish"]["codigo"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["produccion"] = "Fecha de Producción";
	$fieldToolTipsProducto_Caducados["Spanish"]["produccion"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["caducidad"] = "Fecha de Caducidad";
	$fieldToolTipsProducto_Caducados["Spanish"]["caducidad"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["expirado"] = "Expirado";
	$fieldToolTipsProducto_Caducados["Spanish"]["expirado"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipsProducto_Caducados["Spanish"]["proveedor"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["lotes"] = "Lotes";
	$fieldToolTipsProducto_Caducados["Spanish"]["lotes"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["lote_id"] = "Lote Id";
	$fieldToolTipsProducto_Caducados["Spanish"]["lote_id"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsProducto_Caducados["Spanish"]["nombre"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["existencia_minima"] = "Existencia Minima";
	$fieldToolTipsProducto_Caducados["Spanish"]["existencia_minima"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["existencia_actual"] = "Existencia Actual";
	$fieldToolTipsProducto_Caducados["Spanish"]["existencia_actual"] = "";
	$fieldLabelsProducto_Caducados["Spanish"]["tama_o_lote"] = "Tamaño actual del lote";
	$fieldToolTipsProducto_Caducados["Spanish"]["tamaño_lote"] = "";
	if (count($fieldToolTipsProducto_Caducados["Spanish"]))
		$tdataProducto_Caducados[".isUseToolTips"] = true;
}
	
	
	$tdataProducto_Caducados[".NCSearch"] = true;



$tdataProducto_Caducados[".shortTableName"] = "Producto_Caducados";
$tdataProducto_Caducados[".nSecOptions"] = 0;
$tdataProducto_Caducados[".recsPerRowList"] = 1;
$tdataProducto_Caducados[".mainTableOwnerID"] = "";
$tdataProducto_Caducados[".moveNext"] = 1;
$tdataProducto_Caducados[".nType"] = 1;

$tdataProducto_Caducados[".strOriginalTableName"] = "lotes";




$tdataProducto_Caducados[".showAddInPopup"] = true;

$tdataProducto_Caducados[".showEditInPopup"] = true;

$tdataProducto_Caducados[".showViewInPopup"] = true;

$tdataProducto_Caducados[".fieldsForRegister"] = array();

$tdataProducto_Caducados[".listAjax"] = false;

	$tdataProducto_Caducados[".audit"] = true;

	$tdataProducto_Caducados[".locking"] = false;

$tdataProducto_Caducados[".listIcons"] = true;

$tdataProducto_Caducados[".exportTo"] = true;

$tdataProducto_Caducados[".printFriendly"] = true;


$tdataProducto_Caducados[".showSimpleSearchOptions"] = false;

$tdataProducto_Caducados[".showSearchPanel"] = true;

if (isMobile())
	$tdataProducto_Caducados[".isUseAjaxSuggest"] = false;
else 
	$tdataProducto_Caducados[".isUseAjaxSuggest"] = true;

$tdataProducto_Caducados[".rowHighlite"] = true;

// button handlers file names

$tdataProducto_Caducados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataProducto_Caducados[".isUseTimeForSearch"] = false;




$tdataProducto_Caducados[".allSearchFields"] = array();

$tdataProducto_Caducados[".allSearchFields"][] = "tamaño_lote";
$tdataProducto_Caducados[".allSearchFields"][] = "id";
$tdataProducto_Caducados[".allSearchFields"][] = "codigo";
$tdataProducto_Caducados[".allSearchFields"][] = "nombre";
$tdataProducto_Caducados[".allSearchFields"][] = "produccion";
$tdataProducto_Caducados[".allSearchFields"][] = "caducidad";
$tdataProducto_Caducados[".allSearchFields"][] = "proveedor";
$tdataProducto_Caducados[".allSearchFields"][] = "existencia_minima";
$tdataProducto_Caducados[".allSearchFields"][] = "existencia_actual";
$tdataProducto_Caducados[".allSearchFields"][] = "expirado";

$tdataProducto_Caducados[".googleLikeFields"][] = "id";
$tdataProducto_Caducados[".googleLikeFields"][] = "codigo";
$tdataProducto_Caducados[".googleLikeFields"][] = "nombre";
$tdataProducto_Caducados[".googleLikeFields"][] = "produccion";
$tdataProducto_Caducados[".googleLikeFields"][] = "caducidad";
$tdataProducto_Caducados[".googleLikeFields"][] = "tamaño_lote";
$tdataProducto_Caducados[".googleLikeFields"][] = "proveedor";
$tdataProducto_Caducados[".googleLikeFields"][] = "existencia_minima";
$tdataProducto_Caducados[".googleLikeFields"][] = "existencia_actual";
$tdataProducto_Caducados[".googleLikeFields"][] = "expirado";


$tdataProducto_Caducados[".advSearchFields"][] = "tamaño_lote";
$tdataProducto_Caducados[".advSearchFields"][] = "id";
$tdataProducto_Caducados[".advSearchFields"][] = "codigo";
$tdataProducto_Caducados[".advSearchFields"][] = "nombre";
$tdataProducto_Caducados[".advSearchFields"][] = "produccion";
$tdataProducto_Caducados[".advSearchFields"][] = "caducidad";
$tdataProducto_Caducados[".advSearchFields"][] = "proveedor";
$tdataProducto_Caducados[".advSearchFields"][] = "existencia_minima";
$tdataProducto_Caducados[".advSearchFields"][] = "existencia_actual";
$tdataProducto_Caducados[".advSearchFields"][] = "expirado";

$tdataProducto_Caducados[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataProducto_Caducados[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY `l`.`caducidad`  ASC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataProducto_Caducados[".strOrderBy"] = $tstrOrderBy;

$tdataProducto_Caducados[".orderindexes"] = array();
$tdataProducto_Caducados[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "l.caducidad");

$tdataProducto_Caducados[".sqlHead"] = "SELECT l.id, i.codigo, i.nombre, l.produccion, l.caducidad, l.cantidad as tamaño_lote, p.nombre as proveedor, i.existencia_minima, i.existencia_actual, l.expirado";
$tdataProducto_Caducados[".sqlFrom"] = "FROM lotes l    INNER JOIN insumos i ON l.insumo = i.id  INNER JOIN proveedores p ON l.proveedor = p.id";
$tdataProducto_Caducados[".sqlWhereExpr"] = "";
$tdataProducto_Caducados[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataProducto_Caducados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataProducto_Caducados[".arrGroupsPerPage"] = $arrGPP;

$tableKeysProducto_Caducados = array();
$tableKeysProducto_Caducados[] = "id";
$tdataProducto_Caducados[".Keys"] = $tableKeysProducto_Caducados;

$tdataProducto_Caducados[".listFields"] = array();
$tdataProducto_Caducados[".listFields"][] = "id";
$tdataProducto_Caducados[".listFields"][] = "codigo";
$tdataProducto_Caducados[".listFields"][] = "nombre";
$tdataProducto_Caducados[".listFields"][] = "produccion";
$tdataProducto_Caducados[".listFields"][] = "caducidad";
$tdataProducto_Caducados[".listFields"][] = "proveedor";
$tdataProducto_Caducados[".listFields"][] = "tamaño_lote";
$tdataProducto_Caducados[".listFields"][] = "existencia_minima";
$tdataProducto_Caducados[".listFields"][] = "existencia_actual";
$tdataProducto_Caducados[".listFields"][] = "expirado";

$tdataProducto_Caducados[".viewFields"] = array();

$tdataProducto_Caducados[".addFields"] = array();

$tdataProducto_Caducados[".inlineAddFields"] = array();

$tdataProducto_Caducados[".editFields"] = array();

$tdataProducto_Caducados[".inlineEditFields"] = array();

$tdataProducto_Caducados[".exportFields"] = array();
$tdataProducto_Caducados[".exportFields"][] = "tamaño_lote";
$tdataProducto_Caducados[".exportFields"][] = "id";
$tdataProducto_Caducados[".exportFields"][] = "codigo";
$tdataProducto_Caducados[".exportFields"][] = "nombre";
$tdataProducto_Caducados[".exportFields"][] = "produccion";
$tdataProducto_Caducados[".exportFields"][] = "caducidad";
$tdataProducto_Caducados[".exportFields"][] = "proveedor";
$tdataProducto_Caducados[".exportFields"][] = "existencia_minima";
$tdataProducto_Caducados[".exportFields"][] = "existencia_actual";
$tdataProducto_Caducados[".exportFields"][] = "expirado";

$tdataProducto_Caducados[".printFields"] = array();
$tdataProducto_Caducados[".printFields"][] = "tamaño_lote";
$tdataProducto_Caducados[".printFields"][] = "id";
$tdataProducto_Caducados[".printFields"][] = "codigo";
$tdataProducto_Caducados[".printFields"][] = "nombre";
$tdataProducto_Caducados[".printFields"][] = "produccion";
$tdataProducto_Caducados[".printFields"][] = "caducidad";
$tdataProducto_Caducados[".printFields"][] = "proveedor";
$tdataProducto_Caducados[".printFields"][] = "existencia_minima";
$tdataProducto_Caducados[".printFields"][] = "existencia_actual";
$tdataProducto_Caducados[".printFields"][] = "expirado";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Código de Lote"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "l.id";
	
		
		
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
	
		
		
	$tdataProducto_Caducados["id"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Código de Producto"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "codigo"; 
		$fdata["FullName"] = "i.codigo";
	
		
		
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
	
		
		
	$tdataProducto_Caducados["codigo"] = $fdata;
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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "i.nombre";
	
		
		
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
	
		
		
	$tdataProducto_Caducados["nombre"] = $fdata;
//	produccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "produccion";
	$fdata["GoodName"] = "produccion";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Fecha de Producción"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "produccion"; 
		$fdata["FullName"] = "l.produccion";
	
		
		
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
	
		
		
	$tdataProducto_Caducados["produccion"] = $fdata;
//	caducidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "caducidad";
	$fdata["GoodName"] = "caducidad";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Fecha de Caducidad"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "caducidad"; 
		$fdata["FullName"] = "l.caducidad";
	
		
		
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
	
		
		
	$tdataProducto_Caducados["caducidad"] = $fdata;
//	tamaño_lote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tamaño_lote";
	$fdata["GoodName"] = "tama_o_lote";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Tamaño actual del lote"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cantidad"; 
		$fdata["FullName"] = "l.cantidad";
	
		
		
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
	
		
		
	$tdataProducto_Caducados["tamaño_lote"] = $fdata;
//	proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "proveedor";
	$fdata["GoodName"] = "proveedor";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = "Proveedor"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "p.nombre";
	
		
		
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
				if(strpos(GetUserPermissions("Producto_Caducados"), 'S') !== false)
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
	
		
		
	$tdataProducto_Caducados["proveedor"] = $fdata;
//	existencia_minima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "existencia_minima";
	$fdata["GoodName"] = "existencia_minima";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Existencia Minima"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "existencia_minima"; 
		$fdata["FullName"] = "i.existencia_minima";
	
		
		
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
	
		
		
	$tdataProducto_Caducados["existencia_minima"] = $fdata;
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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "existencia_actual"; 
		$fdata["FullName"] = "i.existencia_actual";
	
		
		
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
	
		
		
	$tdataProducto_Caducados["existencia_actual"] = $fdata;
//	expirado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "expirado";
	$fdata["GoodName"] = "expirado";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Expirado"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "expirado"; 
		$fdata["FullName"] = "l.expirado";
	
		
		
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
	
		
		
	$tdataProducto_Caducados["expirado"] = $fdata;

	
$tables_data["Producto_Caducados"]=&$tdataProducto_Caducados;
$field_labels["Producto_Caducados"] = &$fieldLabelsProducto_Caducados;
$fieldToolTips["Producto_Caducados"] = &$fieldToolTipsProducto_Caducados;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Producto_Caducados"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Producto_Caducados"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Producto_Caducados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "l.id, i.codigo, i.nombre, l.produccion, l.caducidad, l.cantidad as tamaño_lote, p.nombre as proveedor, i.existencia_minima, i.existencia_actual, l.expirado";
$proto0["m_strFrom"] = "FROM lotes l    INNER JOIN insumos i ON l.insumo = i.id  INNER JOIN proveedores p ON l.proveedor = p.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `l`.`caducidad`  ASC";
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
	"m_strTable" => "l"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "i"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "i"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "produccion",
	"m_strTable" => "l"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "caducidad",
	"m_strTable" => "l"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "l"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "tamaño_lote";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "p"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "proveedor";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "existencia_minima",
	"m_strTable" => "i"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "existencia_actual",
	"m_strTable" => "i"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "expirado",
	"m_strTable" => "l"
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
$proto25["m_alias"] = "l";
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
												$proto29=array();
$proto29["m_link"] = "SQLL_INNERJOIN";
			$proto30=array();
$proto30["m_strName"] = "insumos";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "codigo";
$proto30["m_columns"][] = "nombre";
$proto30["m_columns"][] = "contenido";
$proto30["m_columns"][] = "componente";
$proto30["m_columns"][] = "cantidad";
$proto30["m_columns"][] = "presentacion";
$proto30["m_columns"][] = "existencia_minima";
$proto30["m_columns"][] = "existencia_actual";
$proto30["m_columns"][] = "descripcion";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "i";
$proto31=array();
$proto31["m_sql"] = "l.insumo = i.id";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "insumo",
	"m_strTable" => "l"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "= i.id";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_INNERJOIN";
			$proto34=array();
$proto34["m_strName"] = "proveedores";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "id";
$proto34["m_columns"][] = "nombre";
$proto34["m_columns"][] = "descripcion";
$proto34["m_columns"][] = "direccion";
$proto34["m_columns"][] = "saldo";
$proto34["m_columns"][] = "nit";
$proto34["m_columns"][] = "telefono";
$proto34["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_alias"] = "p";
$proto35=array();
$proto35["m_sql"] = "l.proveedor = p.id";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "l"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= p.id";
$proto35["m_havingmode"] = "0";
$proto35["m_inBrackets"] = "0";
$proto35["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "caducidad",
	"m_strTable" => "l"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 1;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Producto_Caducados = createSqlQuery_Producto_Caducados();
										$tdataProducto_Caducados[".sqlquery"] = $queryData_Producto_Caducados;

$tableEvents["Producto_Caducados"] = new eventsBase;
$tdataProducto_Caducados[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Producto_Caducados");

?>