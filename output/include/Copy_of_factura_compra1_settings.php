<?php
require_once(getabspath("classes/cipherer.php"));
$tdataCopy_of_factura_compra1 = array();
	$tdataCopy_of_factura_compra1[".NumberOfChars"] = 80; 
	$tdataCopy_of_factura_compra1[".ShortName"] = "Copy_of_factura_compra1";
	$tdataCopy_of_factura_compra1[".OwnerID"] = "";
	$tdataCopy_of_factura_compra1[".OriginalTable"] = "factura_compra";

//	field labels
$fieldLabelsCopy_of_factura_compra1 = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCopy_of_factura_compra1["Spanish"] = array();
	$fieldToolTipsCopy_of_factura_compra1["Spanish"] = array();
	$fieldLabelsCopy_of_factura_compra1["Spanish"]["id"] = "Código";
	$fieldToolTipsCopy_of_factura_compra1["Spanish"]["id"] = "";
	$fieldLabelsCopy_of_factura_compra1["Spanish"]["numero_factura"] = "Numero de Factura";
	$fieldToolTipsCopy_of_factura_compra1["Spanish"]["numero_factura"] = "";
	$fieldLabelsCopy_of_factura_compra1["Spanish"][""] = "";
	$fieldToolTipsCopy_of_factura_compra1["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra1["Spanish"][""] = "Factura Compra";
	$fieldToolTipsCopy_of_factura_compra1["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra1["Spanish"][""] = "";
	$fieldToolTipsCopy_of_factura_compra1["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra1["Spanish"][""] = "Factura Compra";
	$fieldToolTipsCopy_of_factura_compra1["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra1["Spanish"][""] = "";
	$fieldToolTipsCopy_of_factura_compra1["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra1["Spanish"][""] = "Factura Compra";
	$fieldToolTipsCopy_of_factura_compra1["Spanish"][""] = "";
	$fieldLabelsCopy_of_factura_compra1["Spanish"]["factura"] = "Factura";
	$fieldToolTipsCopy_of_factura_compra1["Spanish"]["factura"] = "";
	$fieldLabelsCopy_of_factura_compra1["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsCopy_of_factura_compra1["Spanish"]["nombre"] = "";
	if (count($fieldToolTipsCopy_of_factura_compra1["Spanish"]))
		$tdataCopy_of_factura_compra1[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_factura_compra1[".NCSearch"] = true;



$tdataCopy_of_factura_compra1[".shortTableName"] = "Copy_of_factura_compra1";
$tdataCopy_of_factura_compra1[".nSecOptions"] = 0;
$tdataCopy_of_factura_compra1[".recsPerRowList"] = 1;
$tdataCopy_of_factura_compra1[".mainTableOwnerID"] = "";
$tdataCopy_of_factura_compra1[".moveNext"] = 1;
$tdataCopy_of_factura_compra1[".nType"] = 1;

$tdataCopy_of_factura_compra1[".strOriginalTableName"] = "factura_compra";




$tdataCopy_of_factura_compra1[".showAddInPopup"] = true;

$tdataCopy_of_factura_compra1[".showEditInPopup"] = true;

$tdataCopy_of_factura_compra1[".showViewInPopup"] = true;

$tdataCopy_of_factura_compra1[".fieldsForRegister"] = array();

$tdataCopy_of_factura_compra1[".listAjax"] = false;

	$tdataCopy_of_factura_compra1[".audit"] = false;

	$tdataCopy_of_factura_compra1[".locking"] = false;

$tdataCopy_of_factura_compra1[".listIcons"] = true;
$tdataCopy_of_factura_compra1[".edit"] = true;
$tdataCopy_of_factura_compra1[".inlineEdit"] = true;
$tdataCopy_of_factura_compra1[".inlineAdd"] = true;
$tdataCopy_of_factura_compra1[".view"] = true;

$tdataCopy_of_factura_compra1[".exportTo"] = true;

$tdataCopy_of_factura_compra1[".printFriendly"] = true;

$tdataCopy_of_factura_compra1[".delete"] = true;

$tdataCopy_of_factura_compra1[".showSimpleSearchOptions"] = false;

$tdataCopy_of_factura_compra1[".showSearchPanel"] = true;

if (isMobile())
	$tdataCopy_of_factura_compra1[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_factura_compra1[".isUseAjaxSuggest"] = true;

$tdataCopy_of_factura_compra1[".rowHighlite"] = true;

// button handlers file names

$tdataCopy_of_factura_compra1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_factura_compra1[".isUseTimeForSearch"] = false;




$tdataCopy_of_factura_compra1[".allSearchFields"] = array();

$tdataCopy_of_factura_compra1[".allSearchFields"][] = "id";
$tdataCopy_of_factura_compra1[".allSearchFields"][] = "numero_factura";
$tdataCopy_of_factura_compra1[".allSearchFields"][] = "nombre";

$tdataCopy_of_factura_compra1[".googleLikeFields"][] = "id";
$tdataCopy_of_factura_compra1[".googleLikeFields"][] = "numero_factura";
$tdataCopy_of_factura_compra1[".googleLikeFields"][] = "nombre";


$tdataCopy_of_factura_compra1[".advSearchFields"][] = "id";
$tdataCopy_of_factura_compra1[".advSearchFields"][] = "numero_factura";
$tdataCopy_of_factura_compra1[".advSearchFields"][] = "nombre";

$tdataCopy_of_factura_compra1[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataCopy_of_factura_compra1[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_factura_compra1[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_factura_compra1[".orderindexes"] = array();

$tdataCopy_of_factura_compra1[".sqlHead"] = "SELECT factura_compra.id,  factura_compra.numero_factura,  proveedores.nombre";
$tdataCopy_of_factura_compra1[".sqlFrom"] = "FROM factura_compra  INNER JOIN proveedores ON factura_compra.proveedor = proveedores.id";
$tdataCopy_of_factura_compra1[".sqlWhereExpr"] = "";
$tdataCopy_of_factura_compra1[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_factura_compra1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_factura_compra1[".arrGroupsPerPage"] = $arrGPP;

$tableKeysCopy_of_factura_compra1 = array();
$tableKeysCopy_of_factura_compra1[] = "id";
$tdataCopy_of_factura_compra1[".Keys"] = $tableKeysCopy_of_factura_compra1;

$tdataCopy_of_factura_compra1[".listFields"] = array();
$tdataCopy_of_factura_compra1[".listFields"][] = "id";
$tdataCopy_of_factura_compra1[".listFields"][] = "numero_factura";
$tdataCopy_of_factura_compra1[".listFields"][] = "nombre";

$tdataCopy_of_factura_compra1[".viewFields"] = array();
$tdataCopy_of_factura_compra1[".viewFields"][] = "id";
$tdataCopy_of_factura_compra1[".viewFields"][] = "numero_factura";
$tdataCopy_of_factura_compra1[".viewFields"][] = "nombre";

$tdataCopy_of_factura_compra1[".addFields"] = array();
$tdataCopy_of_factura_compra1[".addFields"][] = "numero_factura";

$tdataCopy_of_factura_compra1[".inlineAddFields"] = array();
$tdataCopy_of_factura_compra1[".inlineAddFields"][] = "numero_factura";
$tdataCopy_of_factura_compra1[".inlineAddFields"][] = "nombre";

$tdataCopy_of_factura_compra1[".editFields"] = array();
$tdataCopy_of_factura_compra1[".editFields"][] = "numero_factura";

$tdataCopy_of_factura_compra1[".inlineEditFields"] = array();
$tdataCopy_of_factura_compra1[".inlineEditFields"][] = "numero_factura";
$tdataCopy_of_factura_compra1[".inlineEditFields"][] = "nombre";

$tdataCopy_of_factura_compra1[".exportFields"] = array();
$tdataCopy_of_factura_compra1[".exportFields"][] = "id";
$tdataCopy_of_factura_compra1[".exportFields"][] = "numero_factura";
$tdataCopy_of_factura_compra1[".exportFields"][] = "nombre";

$tdataCopy_of_factura_compra1[".printFields"] = array();
$tdataCopy_of_factura_compra1[".printFields"][] = "id";
$tdataCopy_of_factura_compra1[".printFields"][] = "numero_factura";
$tdataCopy_of_factura_compra1[".printFields"][] = "nombre";

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
	
		
		
	$tdataCopy_of_factura_compra1["id"] = $fdata;
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
	
		
		
	$tdataCopy_of_factura_compra1["numero_factura"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
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
	
		
		
	$tdataCopy_of_factura_compra1["nombre"] = $fdata;

	
$tables_data["Copy of factura_compra1"]=&$tdataCopy_of_factura_compra1;
$field_labels["Copy_of_factura_compra1"] = &$fieldLabelsCopy_of_factura_compra1;
$fieldToolTips["Copy of factura_compra1"] = &$fieldToolTipsCopy_of_factura_compra1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of factura_compra1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of factura_compra1"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_factura_compra1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "factura_compra.id,  factura_compra.numero_factura,  proveedores.nombre";
$proto0["m_strFrom"] = "FROM factura_compra  INNER JOIN proveedores ON factura_compra.proveedor = proveedores.id";
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
	"m_strName" => "nombre",
	"m_strTable" => "proveedores"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "factura_compra";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "numero_factura";
$proto12["m_columns"][] = "fecha";
$proto12["m_columns"][] = "total_factura";
$proto12["m_columns"][] = "proveedor";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
												$proto15=array();
$proto15["m_link"] = "SQLL_INNERJOIN";
			$proto16=array();
$proto16["m_strName"] = "proveedores";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "nombre";
$proto16["m_columns"][] = "descripcion";
$proto16["m_columns"][] = "direccion";
$proto16["m_columns"][] = "saldo";
$proto16["m_columns"][] = "nit";
$proto16["m_columns"][] = "telefono";
$proto16["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "factura_compra.proveedor = proveedores.id";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "factura_compra"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "= proveedores.id";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Copy_of_factura_compra1 = createSqlQuery_Copy_of_factura_compra1();
			$tdataCopy_of_factura_compra1[".sqlquery"] = $queryData_Copy_of_factura_compra1;

$tableEvents["Copy of factura_compra1"] = new eventsBase;
$tdataCopy_of_factura_compra1[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of factura_compra1");

?>