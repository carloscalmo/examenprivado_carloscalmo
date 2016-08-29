<?php
require_once(getabspath("classes/cipherer.php"));
$tdataHistorial_de_compras = array();
	$tdataHistorial_de_compras[".NumberOfChars"] = 80; 
	$tdataHistorial_de_compras[".ShortName"] = "Historial_de_compras";
	$tdataHistorial_de_compras[".OwnerID"] = "";
	$tdataHistorial_de_compras[".OriginalTable"] = "insumos";

//	field labels
$fieldLabelsHistorial_de_compras = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsHistorial_de_compras["Spanish"] = array();
	$fieldToolTipsHistorial_de_compras["Spanish"] = array();
	$fieldLabelsHistorial_de_compras["Spanish"]["id"] = "Código de Producto";
	$fieldToolTipsHistorial_de_compras["Spanish"]["id"] = "";
	$fieldLabelsHistorial_de_compras["Spanish"]["codigo"] = "Código de Barras";
	$fieldToolTipsHistorial_de_compras["Spanish"]["codigo"] = "";
	$fieldLabelsHistorial_de_compras["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsHistorial_de_compras["Spanish"]["nombre"] = "";
	$fieldLabelsHistorial_de_compras["Spanish"]["insumos_id"] = "Insumos Id";
	$fieldToolTipsHistorial_de_compras["Spanish"]["insumos_id"] = "";
	$fieldLabelsHistorial_de_compras["Spanish"]["producto"] = "Producto";
	$fieldToolTipsHistorial_de_compras["Spanish"]["producto"] = "";
	$fieldLabelsHistorial_de_compras["Spanish"]["insumo"] = "Insumo";
	$fieldToolTipsHistorial_de_compras["Spanish"]["insumo"] = "";
	$fieldLabelsHistorial_de_compras["Spanish"]["medicamento_id"] = "Medicamento Id";
	$fieldToolTipsHistorial_de_compras["Spanish"]["medicamento_id"] = "";
	$fieldLabelsHistorial_de_compras["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsHistorial_de_compras["Spanish"]["fecha"] = "";
	$fieldLabelsHistorial_de_compras["Spanish"]["numero_factura"] = "Numero Factura";
	$fieldToolTipsHistorial_de_compras["Spanish"]["numero_factura"] = "";
	$fieldLabelsHistorial_de_compras["Spanish"]["precio"] = "Precio";
	$fieldToolTipsHistorial_de_compras["Spanish"]["precio"] = "";
	$fieldLabelsHistorial_de_compras["Spanish"]["caducidad"] = "Fecha de Caducidad";
	$fieldToolTipsHistorial_de_compras["Spanish"]["caducidad"] = "";
	if (count($fieldToolTipsHistorial_de_compras["Spanish"]))
		$tdataHistorial_de_compras[".isUseToolTips"] = true;
}
	
	
	$tdataHistorial_de_compras[".NCSearch"] = true;



$tdataHistorial_de_compras[".shortTableName"] = "Historial_de_compras";
$tdataHistorial_de_compras[".nSecOptions"] = 0;
$tdataHistorial_de_compras[".recsPerRowList"] = 1;
$tdataHistorial_de_compras[".mainTableOwnerID"] = "";
$tdataHistorial_de_compras[".moveNext"] = 1;
$tdataHistorial_de_compras[".nType"] = 1;

$tdataHistorial_de_compras[".strOriginalTableName"] = "insumos";




$tdataHistorial_de_compras[".showAddInPopup"] = true;

$tdataHistorial_de_compras[".showEditInPopup"] = true;

$tdataHistorial_de_compras[".showViewInPopup"] = true;

$tdataHistorial_de_compras[".fieldsForRegister"] = array();

$tdataHistorial_de_compras[".listAjax"] = false;

	$tdataHistorial_de_compras[".audit"] = true;

	$tdataHistorial_de_compras[".locking"] = false;

$tdataHistorial_de_compras[".listIcons"] = true;

$tdataHistorial_de_compras[".exportTo"] = true;

$tdataHistorial_de_compras[".printFriendly"] = true;


$tdataHistorial_de_compras[".showSimpleSearchOptions"] = false;

$tdataHistorial_de_compras[".showSearchPanel"] = true;

if (isMobile())
	$tdataHistorial_de_compras[".isUseAjaxSuggest"] = false;
else 
	$tdataHistorial_de_compras[".isUseAjaxSuggest"] = true;

$tdataHistorial_de_compras[".rowHighlite"] = true;

// button handlers file names

$tdataHistorial_de_compras[".addPageEvents"] = false;

// use timepicker for search panel
$tdataHistorial_de_compras[".isUseTimeForSearch"] = false;




$tdataHistorial_de_compras[".allSearchFields"] = array();

$tdataHistorial_de_compras[".allSearchFields"][] = "id";
$tdataHistorial_de_compras[".allSearchFields"][] = "codigo";
$tdataHistorial_de_compras[".allSearchFields"][] = "nombre";
$tdataHistorial_de_compras[".allSearchFields"][] = "fecha";
$tdataHistorial_de_compras[".allSearchFields"][] = "numero_factura";
$tdataHistorial_de_compras[".allSearchFields"][] = "precio";
$tdataHistorial_de_compras[".allSearchFields"][] = "caducidad";

$tdataHistorial_de_compras[".googleLikeFields"][] = "id";
$tdataHistorial_de_compras[".googleLikeFields"][] = "fecha";
$tdataHistorial_de_compras[".googleLikeFields"][] = "numero_factura";
$tdataHistorial_de_compras[".googleLikeFields"][] = "codigo";
$tdataHistorial_de_compras[".googleLikeFields"][] = "nombre";
$tdataHistorial_de_compras[".googleLikeFields"][] = "precio";
$tdataHistorial_de_compras[".googleLikeFields"][] = "caducidad";


$tdataHistorial_de_compras[".advSearchFields"][] = "id";
$tdataHistorial_de_compras[".advSearchFields"][] = "codigo";
$tdataHistorial_de_compras[".advSearchFields"][] = "nombre";
$tdataHistorial_de_compras[".advSearchFields"][] = "fecha";
$tdataHistorial_de_compras[".advSearchFields"][] = "numero_factura";
$tdataHistorial_de_compras[".advSearchFields"][] = "precio";
$tdataHistorial_de_compras[".advSearchFields"][] = "caducidad";

$tdataHistorial_de_compras[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataHistorial_de_compras[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataHistorial_de_compras[".strOrderBy"] = $tstrOrderBy;

$tdataHistorial_de_compras[".orderindexes"] = array();

$tdataHistorial_de_compras[".sqlHead"] = "SELECT i.id,  fc.fecha,  fc.numero_factura,  i.codigo,  i.nombre,  l.precio,  l.caducidad";
$tdataHistorial_de_compras[".sqlFrom"] = "FROM factura_compra AS fc  INNER JOIN detalle_compra AS dc ON fc.id = dc.factura_compra  INNER JOIN insumos AS i ON dc.producto = i.id  INNER JOIN lotes AS l ON dc.lote = l.id  INNER JOIN proveedores AS p ON l.proveedor = p.id";
$tdataHistorial_de_compras[".sqlWhereExpr"] = "";
$tdataHistorial_de_compras[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataHistorial_de_compras[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataHistorial_de_compras[".arrGroupsPerPage"] = $arrGPP;

$tableKeysHistorial_de_compras = array();
$tableKeysHistorial_de_compras[] = "id";
$tdataHistorial_de_compras[".Keys"] = $tableKeysHistorial_de_compras;

$tdataHistorial_de_compras[".listFields"] = array();
$tdataHistorial_de_compras[".listFields"][] = "id";
$tdataHistorial_de_compras[".listFields"][] = "codigo";
$tdataHistorial_de_compras[".listFields"][] = "nombre";
$tdataHistorial_de_compras[".listFields"][] = "fecha";
$tdataHistorial_de_compras[".listFields"][] = "numero_factura";
$tdataHistorial_de_compras[".listFields"][] = "precio";
$tdataHistorial_de_compras[".listFields"][] = "caducidad";

$tdataHistorial_de_compras[".viewFields"] = array();

$tdataHistorial_de_compras[".addFields"] = array();

$tdataHistorial_de_compras[".inlineAddFields"] = array();

$tdataHistorial_de_compras[".editFields"] = array();

$tdataHistorial_de_compras[".inlineEditFields"] = array();

$tdataHistorial_de_compras[".exportFields"] = array();
$tdataHistorial_de_compras[".exportFields"][] = "id";
$tdataHistorial_de_compras[".exportFields"][] = "codigo";
$tdataHistorial_de_compras[".exportFields"][] = "nombre";
$tdataHistorial_de_compras[".exportFields"][] = "fecha";
$tdataHistorial_de_compras[".exportFields"][] = "numero_factura";
$tdataHistorial_de_compras[".exportFields"][] = "precio";
$tdataHistorial_de_compras[".exportFields"][] = "caducidad";

$tdataHistorial_de_compras[".printFields"] = array();
$tdataHistorial_de_compras[".printFields"][] = "id";
$tdataHistorial_de_compras[".printFields"][] = "codigo";
$tdataHistorial_de_compras[".printFields"][] = "nombre";
$tdataHistorial_de_compras[".printFields"][] = "fecha";
$tdataHistorial_de_compras[".printFields"][] = "numero_factura";
$tdataHistorial_de_compras[".printFields"][] = "precio";
$tdataHistorial_de_compras[".printFields"][] = "caducidad";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Código de Producto"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "i.id";
	
		
		
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
	
		
		
	$tdataHistorial_de_compras["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "factura_compra";
	$fdata["Label"] = "Fecha"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha"; 
		$fdata["FullName"] = "fc.fecha";
	
		
		
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
	
		
		
	$tdataHistorial_de_compras["fecha"] = $fdata;
//	numero_factura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero_factura";
	$fdata["GoodName"] = "numero_factura";
	$fdata["ownerTable"] = "factura_compra";
	$fdata["Label"] = "Numero Factura"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "numero_factura"; 
		$fdata["FullName"] = "fc.numero_factura";
	
		
		
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
	
		
		
	$tdataHistorial_de_compras["numero_factura"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Código de Barras"; 
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
			$edata["EditParams"].= " maxlength=45";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataHistorial_de_compras["codigo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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
			$edata["EditParams"].= " maxlength=45";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataHistorial_de_compras["nombre"] = $fdata;
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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
		$fdata["FullName"] = "l.precio";
	
		
		
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
	
		
		
	$tdataHistorial_de_compras["precio"] = $fdata;
//	caducidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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
	
		
		
	$tdataHistorial_de_compras["caducidad"] = $fdata;

	
$tables_data["Historial de compras"]=&$tdataHistorial_de_compras;
$field_labels["Historial_de_compras"] = &$fieldLabelsHistorial_de_compras;
$fieldToolTips["Historial de compras"] = &$fieldToolTipsHistorial_de_compras;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Historial de compras"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Historial de compras"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Historial_de_compras()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "i.id,  fc.fecha,  fc.numero_factura,  i.codigo,  i.nombre,  l.precio,  l.caducidad";
$proto0["m_strFrom"] = "FROM factura_compra AS fc  INNER JOIN detalle_compra AS dc ON fc.id = dc.factura_compra  INNER JOIN insumos AS i ON dc.producto = i.id  INNER JOIN lotes AS l ON dc.lote = l.id  INNER JOIN proveedores AS p ON l.proveedor = p.id";
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
	"m_strTable" => "i"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "fc"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_factura",
	"m_strTable" => "fc"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "i"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "i"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "l"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "caducidad",
	"m_strTable" => "l"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "factura_compra";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "numero_factura";
$proto20["m_columns"][] = "fecha";
$proto20["m_columns"][] = "total_factura";
$proto20["m_columns"][] = "proveedor";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "fc";
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
												$proto23=array();
$proto23["m_link"] = "SQLL_INNERJOIN";
			$proto24=array();
$proto24["m_strName"] = "detalle_compra";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "producto";
$proto24["m_columns"][] = "lote";
$proto24["m_columns"][] = "cantidad";
$proto24["m_columns"][] = "factura_compra";
$proto24["m_columns"][] = "costo";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "dc";
$proto25=array();
$proto25["m_sql"] = "fc.id = dc.factura_compra";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "fc"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "= dc.factura_compra";
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
$proto27["m_alias"] = "i";
$proto29=array();
$proto29["m_sql"] = "dc.producto = i.id";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "producto",
	"m_strTable" => "dc"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= i.id";
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
$proto31["m_alias"] = "l";
$proto33=array();
$proto33["m_sql"] = "dc.lote = l.id";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "lote",
	"m_strTable" => "dc"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= l.id";
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
$proto35["m_alias"] = "p";
$proto37=array();
$proto37["m_sql"] = "l.proveedor = p.id";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "l"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= p.id";
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
$queryData_Historial_de_compras = createSqlQuery_Historial_de_compras();
							$tdataHistorial_de_compras[".sqlquery"] = $queryData_Historial_de_compras;

$tableEvents["Historial de compras"] = new eventsBase;
$tdataHistorial_de_compras[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Historial de compras");

?>