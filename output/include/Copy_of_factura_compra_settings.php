<?php
require_once(getabspath("classes/cipherer.php"));
$tdataCopy_of_factura_compra = array();
	$tdataCopy_of_factura_compra[".NumberOfChars"] = 80; 
	$tdataCopy_of_factura_compra[".ShortName"] = "Copy_of_factura_compra";
	$tdataCopy_of_factura_compra[".OwnerID"] = "";
	$tdataCopy_of_factura_compra[".OriginalTable"] = "factura_compra";

//	field labels
$fieldLabelsCopy_of_factura_compra = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCopy_of_factura_compra["Spanish"] = array();
	$fieldToolTipsCopy_of_factura_compra["Spanish"] = array();
	$fieldLabelsCopy_of_factura_compra["Spanish"]["id"] = "Código";
	$fieldToolTipsCopy_of_factura_compra["Spanish"]["id"] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"]["numero_factura"] = "Numero de Factura";
	$fieldToolTipsCopy_of_factura_compra["Spanish"]["numero_factura"] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipsCopy_of_factura_compra["Spanish"]["proveedor"] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"][""] = "";
	$fieldToolTipsCopy_of_factura_compra["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"][""] = "Factura Compra";
	$fieldToolTipsCopy_of_factura_compra["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"][""] = "";
	$fieldToolTipsCopy_of_factura_compra["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"][""] = "Factura Compra";
	$fieldToolTipsCopy_of_factura_compra["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"][""] = "";
	$fieldToolTipsCopy_of_factura_compra["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"][""] = "Factura Compra";
	$fieldToolTipsCopy_of_factura_compra["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"]["factura"] = "Factura";
	$fieldToolTipsCopy_of_factura_compra["Spanish"]["factura"] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"]["id1"] = "Id1";
	$fieldToolTipsCopy_of_factura_compra["Spanish"]["id1"] = "";
	$fieldLabelsCopy_of_factura_compra["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsCopy_of_factura_compra["Spanish"]["nombre"] = "";
	if (count($fieldToolTipsCopy_of_factura_compra["Spanish"]))
		$tdataCopy_of_factura_compra[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_factura_compra[".NCSearch"] = true;



$tdataCopy_of_factura_compra[".shortTableName"] = "Copy_of_factura_compra";
$tdataCopy_of_factura_compra[".nSecOptions"] = 0;
$tdataCopy_of_factura_compra[".recsPerRowList"] = 1;
$tdataCopy_of_factura_compra[".mainTableOwnerID"] = "";
$tdataCopy_of_factura_compra[".moveNext"] = 1;
$tdataCopy_of_factura_compra[".nType"] = 1;

$tdataCopy_of_factura_compra[".strOriginalTableName"] = "factura_compra";




$tdataCopy_of_factura_compra[".showAddInPopup"] = true;

$tdataCopy_of_factura_compra[".showEditInPopup"] = true;

$tdataCopy_of_factura_compra[".showViewInPopup"] = true;

$tdataCopy_of_factura_compra[".fieldsForRegister"] = array();

$tdataCopy_of_factura_compra[".listAjax"] = false;

	$tdataCopy_of_factura_compra[".audit"] = false;

	$tdataCopy_of_factura_compra[".locking"] = false;

$tdataCopy_of_factura_compra[".listIcons"] = true;
$tdataCopy_of_factura_compra[".edit"] = true;
$tdataCopy_of_factura_compra[".inlineEdit"] = true;
$tdataCopy_of_factura_compra[".inlineAdd"] = true;
$tdataCopy_of_factura_compra[".view"] = true;

$tdataCopy_of_factura_compra[".exportTo"] = true;

$tdataCopy_of_factura_compra[".printFriendly"] = true;

$tdataCopy_of_factura_compra[".delete"] = true;

$tdataCopy_of_factura_compra[".showSimpleSearchOptions"] = false;

$tdataCopy_of_factura_compra[".showSearchPanel"] = true;

if (isMobile())
	$tdataCopy_of_factura_compra[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_factura_compra[".isUseAjaxSuggest"] = true;

$tdataCopy_of_factura_compra[".rowHighlite"] = true;

// button handlers file names

$tdataCopy_of_factura_compra[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_factura_compra[".isUseTimeForSearch"] = false;




$tdataCopy_of_factura_compra[".allSearchFields"] = array();

$tdataCopy_of_factura_compra[".allSearchFields"][] = "id";
$tdataCopy_of_factura_compra[".allSearchFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".allSearchFields"][] = "proveedor";
$tdataCopy_of_factura_compra[".allSearchFields"][] = "id1";
$tdataCopy_of_factura_compra[".allSearchFields"][] = "nombre";

$tdataCopy_of_factura_compra[".googleLikeFields"][] = "id";
$tdataCopy_of_factura_compra[".googleLikeFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".googleLikeFields"][] = "proveedor";
$tdataCopy_of_factura_compra[".googleLikeFields"][] = "id1";
$tdataCopy_of_factura_compra[".googleLikeFields"][] = "nombre";


$tdataCopy_of_factura_compra[".advSearchFields"][] = "id";
$tdataCopy_of_factura_compra[".advSearchFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".advSearchFields"][] = "proveedor";
$tdataCopy_of_factura_compra[".advSearchFields"][] = "id1";
$tdataCopy_of_factura_compra[".advSearchFields"][] = "nombre";

$tdataCopy_of_factura_compra[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataCopy_of_factura_compra[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_factura_compra[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_factura_compra[".orderindexes"] = array();

$tdataCopy_of_factura_compra[".sqlHead"] = "SELECT factura_compra.id,  factura_compra.numero_factura,  factura_compra.proveedor,  proveedores.id AS id1,  proveedores.nombre";
$tdataCopy_of_factura_compra[".sqlFrom"] = "FROM factura_compra  INNER JOIN proveedores ON proveedores.id = factura_compra.proveedor";
$tdataCopy_of_factura_compra[".sqlWhereExpr"] = "";
$tdataCopy_of_factura_compra[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_factura_compra[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_factura_compra[".arrGroupsPerPage"] = $arrGPP;

$tableKeysCopy_of_factura_compra = array();
$tableKeysCopy_of_factura_compra[] = "id";
$tdataCopy_of_factura_compra[".Keys"] = $tableKeysCopy_of_factura_compra;

$tdataCopy_of_factura_compra[".listFields"] = array();
$tdataCopy_of_factura_compra[".listFields"][] = "id";
$tdataCopy_of_factura_compra[".listFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".listFields"][] = "proveedor";
$tdataCopy_of_factura_compra[".listFields"][] = "id1";
$tdataCopy_of_factura_compra[".listFields"][] = "nombre";

$tdataCopy_of_factura_compra[".viewFields"] = array();
$tdataCopy_of_factura_compra[".viewFields"][] = "id";
$tdataCopy_of_factura_compra[".viewFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".viewFields"][] = "proveedor";
$tdataCopy_of_factura_compra[".viewFields"][] = "id1";
$tdataCopy_of_factura_compra[".viewFields"][] = "nombre";

$tdataCopy_of_factura_compra[".addFields"] = array();
$tdataCopy_of_factura_compra[".addFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".addFields"][] = "proveedor";

$tdataCopy_of_factura_compra[".inlineAddFields"] = array();
$tdataCopy_of_factura_compra[".inlineAddFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".inlineAddFields"][] = "proveedor";
$tdataCopy_of_factura_compra[".inlineAddFields"][] = "id1";
$tdataCopy_of_factura_compra[".inlineAddFields"][] = "nombre";

$tdataCopy_of_factura_compra[".editFields"] = array();
$tdataCopy_of_factura_compra[".editFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".editFields"][] = "proveedor";

$tdataCopy_of_factura_compra[".inlineEditFields"] = array();
$tdataCopy_of_factura_compra[".inlineEditFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".inlineEditFields"][] = "proveedor";
$tdataCopy_of_factura_compra[".inlineEditFields"][] = "id1";
$tdataCopy_of_factura_compra[".inlineEditFields"][] = "nombre";

$tdataCopy_of_factura_compra[".exportFields"] = array();
$tdataCopy_of_factura_compra[".exportFields"][] = "id";
$tdataCopy_of_factura_compra[".exportFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".exportFields"][] = "proveedor";
$tdataCopy_of_factura_compra[".exportFields"][] = "id1";
$tdataCopy_of_factura_compra[".exportFields"][] = "nombre";

$tdataCopy_of_factura_compra[".printFields"] = array();
$tdataCopy_of_factura_compra[".printFields"][] = "id";
$tdataCopy_of_factura_compra[".printFields"][] = "numero_factura";
$tdataCopy_of_factura_compra[".printFields"][] = "proveedor";
$tdataCopy_of_factura_compra[".printFields"][] = "id1";
$tdataCopy_of_factura_compra[".printFields"][] = "nombre";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "factura_compra";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "factura_compra.id";
	
		
		
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
	
		
		
	$tdataCopy_of_factura_compra["id"] = $fdata;
//	numero_factura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "numero_factura";
	$fdata["GoodName"] = "numero_factura";
	$fdata["ownerTable"] = "factura_compra";
	$fdata["Label"] = "Numero de Factura"; 
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
		$fdata["FullName"] = "factura_compra.numero_factura";
	
		
		
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
	
		
		
	$tdataCopy_of_factura_compra["numero_factura"] = $fdata;
//	proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "proveedor";
	$fdata["GoodName"] = "proveedor";
	$fdata["ownerTable"] = "factura_compra";
	$fdata["Label"] = "Proveedor"; 
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
	
		$fdata["strField"] = "proveedor"; 
		$fdata["FullName"] = "factura_compra.proveedor";
	
		
		
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
	
		
		
	$tdataCopy_of_factura_compra["proveedor"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "proveedores";
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
		$fdata["FullName"] = "proveedores.id";
	
		
		
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
	
		
		
	$tdataCopy_of_factura_compra["id1"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "proveedores";
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
	
		
		
	$tdataCopy_of_factura_compra["nombre"] = $fdata;

	
$tables_data["Copy of factura_compra"]=&$tdataCopy_of_factura_compra;
$field_labels["Copy_of_factura_compra"] = &$fieldLabelsCopy_of_factura_compra;
$fieldToolTips["Copy of factura_compra"] = &$fieldToolTipsCopy_of_factura_compra;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of factura_compra"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of factura_compra"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_factura_compra()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "factura_compra.id,  factura_compra.numero_factura,  factura_compra.proveedor,  proveedores.id AS id1,  proveedores.nombre";
$proto0["m_strFrom"] = "FROM factura_compra  INNER JOIN proveedores ON proveedores.id = factura_compra.proveedor";
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
	"m_strTable" => "factura_compra"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_factura",
	"m_strTable" => "factura_compra"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "factura_compra"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "proveedores"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "proveedores"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "factura_compra";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "numero_factura";
$proto16["m_columns"][] = "fecha";
$proto16["m_columns"][] = "total_factura";
$proto16["m_columns"][] = "proveedor";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
												$proto19=array();
$proto19["m_link"] = "SQLL_INNERJOIN";
			$proto20=array();
$proto20["m_strName"] = "proveedores";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "nombre";
$proto20["m_columns"][] = "descripcion";
$proto20["m_columns"][] = "direccion";
$proto20["m_columns"][] = "saldo";
$proto20["m_columns"][] = "nit";
$proto20["m_columns"][] = "telefono";
$proto20["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "proveedores.id = factura_compra.proveedor";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "proveedores"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= factura_compra.proveedor";
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
$queryData_Copy_of_factura_compra = createSqlQuery_Copy_of_factura_compra();
					$tdataCopy_of_factura_compra[".sqlquery"] = $queryData_Copy_of_factura_compra;

$tableEvents["Copy of factura_compra"] = new eventsBase;
$tdataCopy_of_factura_compra[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of factura_compra");

?>