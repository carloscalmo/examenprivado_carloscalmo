<?php
require_once(getabspath("classes/cipherer.php"));
$tdataHistorial_de_ventas = array();
	$tdataHistorial_de_ventas[".NumberOfChars"] = 80; 
	$tdataHistorial_de_ventas[".ShortName"] = "Historial_de_ventas";
	$tdataHistorial_de_ventas[".OwnerID"] = "";
	$tdataHistorial_de_ventas[".OriginalTable"] = "solicitud_medicamento";

//	field labels
$fieldLabelsHistorial_de_ventas = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsHistorial_de_ventas["Spanish"] = array();
	$fieldToolTipsHistorial_de_ventas["Spanish"] = array();
	$fieldLabelsHistorial_de_ventas["Spanish"]["id"] = "Código de Venta";
	$fieldToolTipsHistorial_de_ventas["Spanish"]["id"] = "";
	$fieldLabelsHistorial_de_ventas["Spanish"]["fecha"] = "Fecha de Venta";
	$fieldToolTipsHistorial_de_ventas["Spanish"]["fecha"] = "";
	$fieldLabelsHistorial_de_ventas["Spanish"]["cantidad"] = "Cantidad Vendida";
	$fieldToolTipsHistorial_de_ventas["Spanish"]["cantidad"] = "";
	$fieldLabelsHistorial_de_ventas["Spanish"]["codigo"] = "Codigo de Barras";
	$fieldToolTipsHistorial_de_ventas["Spanish"]["codigo"] = "";
	$fieldLabelsHistorial_de_ventas["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsHistorial_de_ventas["Spanish"]["nombre"] = "";
	$fieldLabelsHistorial_de_ventas["Spanish"]["medicamento_id"] = "Código de Producto";
	$fieldToolTipsHistorial_de_ventas["Spanish"]["medicamento_id"] = "";
	$fieldLabelsHistorial_de_ventas["Spanish"]["precio"] = "Precio";
	$fieldToolTipsHistorial_de_ventas["Spanish"]["precio"] = "";
	$fieldLabelsHistorial_de_ventas["Spanish"]["nombre1"] = "Proveedor";
	$fieldToolTipsHistorial_de_ventas["Spanish"]["nombre1"] = "";
	$fieldLabelsHistorial_de_ventas["Spanish"]["contenido"] = "Contenido";
	$fieldToolTipsHistorial_de_ventas["Spanish"]["contenido"] = "";
	if (count($fieldToolTipsHistorial_de_ventas["Spanish"]))
		$tdataHistorial_de_ventas[".isUseToolTips"] = true;
}
	
	
	$tdataHistorial_de_ventas[".NCSearch"] = true;



$tdataHistorial_de_ventas[".shortTableName"] = "Historial_de_ventas";
$tdataHistorial_de_ventas[".nSecOptions"] = 0;
$tdataHistorial_de_ventas[".recsPerRowList"] = 1;
$tdataHistorial_de_ventas[".mainTableOwnerID"] = "";
$tdataHistorial_de_ventas[".moveNext"] = 1;
$tdataHistorial_de_ventas[".nType"] = 1;

$tdataHistorial_de_ventas[".strOriginalTableName"] = "solicitud_medicamento";




$tdataHistorial_de_ventas[".showAddInPopup"] = true;

$tdataHistorial_de_ventas[".showEditInPopup"] = true;

$tdataHistorial_de_ventas[".showViewInPopup"] = true;

$tdataHistorial_de_ventas[".fieldsForRegister"] = array();

$tdataHistorial_de_ventas[".listAjax"] = false;

	$tdataHistorial_de_ventas[".audit"] = true;

	$tdataHistorial_de_ventas[".locking"] = false;

$tdataHistorial_de_ventas[".listIcons"] = true;

$tdataHistorial_de_ventas[".exportTo"] = true;

$tdataHistorial_de_ventas[".printFriendly"] = true;


$tdataHistorial_de_ventas[".showSimpleSearchOptions"] = false;

$tdataHistorial_de_ventas[".showSearchPanel"] = true;

if (isMobile())
	$tdataHistorial_de_ventas[".isUseAjaxSuggest"] = false;
else 
	$tdataHistorial_de_ventas[".isUseAjaxSuggest"] = true;

$tdataHistorial_de_ventas[".rowHighlite"] = true;

// button handlers file names

$tdataHistorial_de_ventas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataHistorial_de_ventas[".isUseTimeForSearch"] = false;




$tdataHistorial_de_ventas[".allSearchFields"] = array();

$tdataHistorial_de_ventas[".allSearchFields"][] = "id";
$tdataHistorial_de_ventas[".allSearchFields"][] = "fecha";
$tdataHistorial_de_ventas[".allSearchFields"][] = "medicamento_id";
$tdataHistorial_de_ventas[".allSearchFields"][] = "codigo";
$tdataHistorial_de_ventas[".allSearchFields"][] = "nombre";
$tdataHistorial_de_ventas[".allSearchFields"][] = "contenido";
$tdataHistorial_de_ventas[".allSearchFields"][] = "cantidad";
$tdataHistorial_de_ventas[".allSearchFields"][] = "precio";
$tdataHistorial_de_ventas[".allSearchFields"][] = "nombre1";

$tdataHistorial_de_ventas[".googleLikeFields"][] = "id";
$tdataHistorial_de_ventas[".googleLikeFields"][] = "fecha";
$tdataHistorial_de_ventas[".googleLikeFields"][] = "medicamento_id";
$tdataHistorial_de_ventas[".googleLikeFields"][] = "cantidad";
$tdataHistorial_de_ventas[".googleLikeFields"][] = "codigo";
$tdataHistorial_de_ventas[".googleLikeFields"][] = "nombre";
$tdataHistorial_de_ventas[".googleLikeFields"][] = "precio";
$tdataHistorial_de_ventas[".googleLikeFields"][] = "nombre1";
$tdataHistorial_de_ventas[".googleLikeFields"][] = "contenido";


$tdataHistorial_de_ventas[".advSearchFields"][] = "id";
$tdataHistorial_de_ventas[".advSearchFields"][] = "fecha";
$tdataHistorial_de_ventas[".advSearchFields"][] = "medicamento_id";
$tdataHistorial_de_ventas[".advSearchFields"][] = "codigo";
$tdataHistorial_de_ventas[".advSearchFields"][] = "nombre";
$tdataHistorial_de_ventas[".advSearchFields"][] = "contenido";
$tdataHistorial_de_ventas[".advSearchFields"][] = "cantidad";
$tdataHistorial_de_ventas[".advSearchFields"][] = "precio";
$tdataHistorial_de_ventas[".advSearchFields"][] = "nombre1";

$tdataHistorial_de_ventas[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataHistorial_de_ventas[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataHistorial_de_ventas[".strOrderBy"] = $tstrOrderBy;

$tdataHistorial_de_ventas[".orderindexes"] = array();

$tdataHistorial_de_ventas[".sqlHead"] = "SELECT solicitud_medicamento.id,  solicitud_medicamento.fecha,  solicitud_medicamento.medicamento_id,  solicitud_medicamento.cantidad,  insumos.codigo,  insumos.nombre,  lotes.precio,  proveedores.nombre AS nombre1,  insumos.contenido";
$tdataHistorial_de_ventas[".sqlFrom"] = "FROM solicitud_medicamento  INNER JOIN insumos ON solicitud_medicamento.medicamento_id = insumos.id  INNER JOIN lotes ON insumos.id = lotes.insumo  INNER JOIN proveedores ON lotes.proveedor = proveedores.id";
$tdataHistorial_de_ventas[".sqlWhereExpr"] = "";
$tdataHistorial_de_ventas[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataHistorial_de_ventas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataHistorial_de_ventas[".arrGroupsPerPage"] = $arrGPP;

$tableKeysHistorial_de_ventas = array();
$tableKeysHistorial_de_ventas[] = "id";
$tdataHistorial_de_ventas[".Keys"] = $tableKeysHistorial_de_ventas;

$tdataHistorial_de_ventas[".listFields"] = array();
$tdataHistorial_de_ventas[".listFields"][] = "id";
$tdataHistorial_de_ventas[".listFields"][] = "fecha";
$tdataHistorial_de_ventas[".listFields"][] = "medicamento_id";
$tdataHistorial_de_ventas[".listFields"][] = "codigo";
$tdataHistorial_de_ventas[".listFields"][] = "nombre";
$tdataHistorial_de_ventas[".listFields"][] = "contenido";
$tdataHistorial_de_ventas[".listFields"][] = "cantidad";
$tdataHistorial_de_ventas[".listFields"][] = "precio";
$tdataHistorial_de_ventas[".listFields"][] = "nombre1";

$tdataHistorial_de_ventas[".viewFields"] = array();

$tdataHistorial_de_ventas[".addFields"] = array();

$tdataHistorial_de_ventas[".inlineAddFields"] = array();

$tdataHistorial_de_ventas[".editFields"] = array();

$tdataHistorial_de_ventas[".inlineEditFields"] = array();

$tdataHistorial_de_ventas[".exportFields"] = array();
$tdataHistorial_de_ventas[".exportFields"][] = "id";
$tdataHistorial_de_ventas[".exportFields"][] = "fecha";
$tdataHistorial_de_ventas[".exportFields"][] = "medicamento_id";
$tdataHistorial_de_ventas[".exportFields"][] = "codigo";
$tdataHistorial_de_ventas[".exportFields"][] = "nombre";
$tdataHistorial_de_ventas[".exportFields"][] = "contenido";
$tdataHistorial_de_ventas[".exportFields"][] = "cantidad";
$tdataHistorial_de_ventas[".exportFields"][] = "precio";
$tdataHistorial_de_ventas[".exportFields"][] = "nombre1";

$tdataHistorial_de_ventas[".printFields"] = array();
$tdataHistorial_de_ventas[".printFields"][] = "id";
$tdataHistorial_de_ventas[".printFields"][] = "fecha";
$tdataHistorial_de_ventas[".printFields"][] = "medicamento_id";
$tdataHistorial_de_ventas[".printFields"][] = "codigo";
$tdataHistorial_de_ventas[".printFields"][] = "nombre";
$tdataHistorial_de_ventas[".printFields"][] = "contenido";
$tdataHistorial_de_ventas[".printFields"][] = "cantidad";
$tdataHistorial_de_ventas[".printFields"][] = "precio";
$tdataHistorial_de_ventas[".printFields"][] = "nombre1";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Código de Venta"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "solicitud_medicamento.id";
	
		
		
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
	
		
		
	$tdataHistorial_de_ventas["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Fecha de Venta"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha"; 
		$fdata["FullName"] = "solicitud_medicamento.fecha";
	
		
		
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
	
		
		
	$tdataHistorial_de_ventas["fecha"] = $fdata;
//	medicamento_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "medicamento_id";
	$fdata["GoodName"] = "medicamento_id";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Código de Producto"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "medicamento_id"; 
		$fdata["FullName"] = "solicitud_medicamento.medicamento_id";
	
		
		
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
	
		
		
	$tdataHistorial_de_ventas["medicamento_id"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Cantidad Vendida"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cantidad"; 
		$fdata["FullName"] = "solicitud_medicamento.cantidad";
	
		
		
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
	
		
		
	$tdataHistorial_de_ventas["cantidad"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Codigo de Barras"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdataHistorial_de_ventas["codigo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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
	
		
		
	$tdataHistorial_de_ventas["nombre"] = $fdata;
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
	
		
		
	$tdataHistorial_de_ventas["precio"] = $fdata;
//	nombre1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nombre1";
	$fdata["GoodName"] = "nombre1";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = "Proveedor"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataHistorial_de_ventas["nombre1"] = $fdata;
//	contenido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "contenido";
	$fdata["GoodName"] = "contenido";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Contenido"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "contenido"; 
		$fdata["FullName"] = "insumos.contenido";
	
		
		
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
	
		
		
	$tdataHistorial_de_ventas["contenido"] = $fdata;

	
$tables_data["Historial de ventas"]=&$tdataHistorial_de_ventas;
$field_labels["Historial_de_ventas"] = &$fieldLabelsHistorial_de_ventas;
$fieldToolTips["Historial de ventas"] = &$fieldToolTipsHistorial_de_ventas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Historial de ventas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Historial de ventas"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Historial_de_ventas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "solicitud_medicamento.id,  solicitud_medicamento.fecha,  solicitud_medicamento.medicamento_id,  solicitud_medicamento.cantidad,  insumos.codigo,  insumos.nombre,  lotes.precio,  proveedores.nombre AS nombre1,  insumos.contenido";
$proto0["m_strFrom"] = "FROM solicitud_medicamento  INNER JOIN insumos ON solicitud_medicamento.medicamento_id = insumos.id  INNER JOIN lotes ON insumos.id = lotes.insumo  INNER JOIN proveedores ON lotes.proveedor = proveedores.id";
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
	"m_strName" => "medicamento_id",
	"m_strTable" => "solicitud_medicamento"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "solicitud_medicamento"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "insumos"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "insumos"
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
	"m_strName" => "nombre",
	"m_strTable" => "proveedores"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "nombre1";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "contenido",
	"m_strTable" => "insumos"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "solicitud_medicamento";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "fecha";
$proto24["m_columns"][] = "consulta_id";
$proto24["m_columns"][] = "responsable";
$proto24["m_columns"][] = "medicamento_id";
$proto24["m_columns"][] = "lote_id";
$proto24["m_columns"][] = "cantidad";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = "0";
$proto25["m_inBrackets"] = "0";
$proto25["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
												$proto27=array();
$proto27["m_link"] = "SQLL_INNERJOIN";
			$proto28=array();
$proto28["m_strName"] = "insumos";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id";
$proto28["m_columns"][] = "codigo";
$proto28["m_columns"][] = "nombre";
$proto28["m_columns"][] = "contenido";
$proto28["m_columns"][] = "componente";
$proto28["m_columns"][] = "cantidad";
$proto28["m_columns"][] = "presentacion";
$proto28["m_columns"][] = "existencia_minima";
$proto28["m_columns"][] = "existencia_actual";
$proto28["m_columns"][] = "descripcion";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "solicitud_medicamento.medicamento_id = insumos.id";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "medicamento_id",
	"m_strTable" => "solicitud_medicamento"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= insumos.id";
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
$proto32["m_strName"] = "lotes";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id";
$proto32["m_columns"][] = "codigo";
$proto32["m_columns"][] = "produccion";
$proto32["m_columns"][] = "caducidad";
$proto32["m_columns"][] = "expirado";
$proto32["m_columns"][] = "proveedor";
$proto32["m_columns"][] = "insumo";
$proto32["m_columns"][] = "cantidad";
$proto32["m_columns"][] = "precio";
$proto32["m_columns"][] = "costo";
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
$proto37["m_sql"] = "lotes.proveedor = proveedores.id";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "lotes"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= proveedores.id";
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
$queryData_Historial_de_ventas = createSqlQuery_Historial_de_ventas();
									$tdataHistorial_de_ventas[".sqlquery"] = $queryData_Historial_de_ventas;

$tableEvents["Historial de ventas"] = new eventsBase;
$tdataHistorial_de_ventas[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Historial de ventas");

?>