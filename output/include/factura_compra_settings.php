<?php
require_once(getabspath("classes/cipherer.php"));
$tdatafactura_compra = array();
	$tdatafactura_compra[".NumberOfChars"] = 80; 
	$tdatafactura_compra[".ShortName"] = "factura_compra";
	$tdatafactura_compra[".OwnerID"] = "";
	$tdatafactura_compra[".OriginalTable"] = "factura_compra";

//	field labels
$fieldLabelsfactura_compra = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfactura_compra["Spanish"] = array();
	$fieldToolTipsfactura_compra["Spanish"] = array();
	$fieldLabelsfactura_compra["Spanish"]["id"] = "Código";
	$fieldToolTipsfactura_compra["Spanish"]["id"] = "";
	$fieldLabelsfactura_compra["Spanish"]["numero_factura"] = "Numero de Factura";
	$fieldToolTipsfactura_compra["Spanish"]["numero_factura"] = "";
	$fieldLabelsfactura_compra["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsfactura_compra["Spanish"]["fecha"] = "";
	$fieldLabelsfactura_compra["Spanish"]["total_factura"] = "Total";
	$fieldToolTipsfactura_compra["Spanish"]["total_factura"] = "";
	$fieldLabelsfactura_compra["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipsfactura_compra["Spanish"]["proveedor"] = "";
	$fieldLabelsfactura_compra["Spanish"][""] = "";
	$fieldToolTipsfactura_compra["Spanish"][""] = "";
	$fieldLabelsfactura_compra["Spanish"][""] = "Factura Compra";
	$fieldToolTipsfactura_compra["Spanish"][""] = "";
	$fieldLabelsfactura_compra["Spanish"][""] = "";
	$fieldToolTipsfactura_compra["Spanish"][""] = "";
	$fieldLabelsfactura_compra["Spanish"][""] = "Factura Compra";
	$fieldToolTipsfactura_compra["Spanish"][""] = "";
	$fieldLabelsfactura_compra["Spanish"][""] = "";
	$fieldToolTipsfactura_compra["Spanish"][""] = "";
	$fieldLabelsfactura_compra["Spanish"][""] = "Factura Compra";
	$fieldToolTipsfactura_compra["Spanish"][""] = "";
	$fieldLabelsfactura_compra["Spanish"]["factura"] = "Factura";
	$fieldToolTipsfactura_compra["Spanish"]["factura"] = "";
	if (count($fieldToolTipsfactura_compra["Spanish"]))
		$tdatafactura_compra[".isUseToolTips"] = true;
}
	
	
	$tdatafactura_compra[".NCSearch"] = true;



$tdatafactura_compra[".shortTableName"] = "factura_compra";
$tdatafactura_compra[".nSecOptions"] = 0;
$tdatafactura_compra[".recsPerRowList"] = 1;
$tdatafactura_compra[".mainTableOwnerID"] = "";
$tdatafactura_compra[".moveNext"] = 1;
$tdatafactura_compra[".nType"] = 0;

$tdatafactura_compra[".strOriginalTableName"] = "factura_compra";




$tdatafactura_compra[".showAddInPopup"] = true;

$tdatafactura_compra[".showEditInPopup"] = true;

$tdatafactura_compra[".showViewInPopup"] = true;

$tdatafactura_compra[".fieldsForRegister"] = array();

$tdatafactura_compra[".listAjax"] = false;

	$tdatafactura_compra[".audit"] = true;

	$tdatafactura_compra[".locking"] = false;

$tdatafactura_compra[".listIcons"] = true;
$tdatafactura_compra[".edit"] = true;
$tdatafactura_compra[".view"] = true;


$tdatafactura_compra[".printFriendly"] = true;

$tdatafactura_compra[".delete"] = true;

$tdatafactura_compra[".showSimpleSearchOptions"] = false;

$tdatafactura_compra[".showSearchPanel"] = true;

if (isMobile())
	$tdatafactura_compra[".isUseAjaxSuggest"] = false;
else 
	$tdatafactura_compra[".isUseAjaxSuggest"] = true;

$tdatafactura_compra[".rowHighlite"] = true;

// button handlers file names

$tdatafactura_compra[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafactura_compra[".isUseTimeForSearch"] = false;



$tdatafactura_compra[".useDetailsPreview"] = true;

$tdatafactura_compra[".allSearchFields"] = array();

$tdatafactura_compra[".allSearchFields"][] = "id";
$tdatafactura_compra[".allSearchFields"][] = "numero_factura";
$tdatafactura_compra[".allSearchFields"][] = "proveedor";
$tdatafactura_compra[".allSearchFields"][] = "fecha";
$tdatafactura_compra[".allSearchFields"][] = "total_factura";

$tdatafactura_compra[".googleLikeFields"][] = "id";
$tdatafactura_compra[".googleLikeFields"][] = "numero_factura";
$tdatafactura_compra[".googleLikeFields"][] = "fecha";
$tdatafactura_compra[".googleLikeFields"][] = "total_factura";
$tdatafactura_compra[".googleLikeFields"][] = "proveedor";


$tdatafactura_compra[".advSearchFields"][] = "numero_factura";
$tdatafactura_compra[".advSearchFields"][] = "proveedor";
$tdatafactura_compra[".advSearchFields"][] = "fecha";

$tdatafactura_compra[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
		


$tdatafactura_compra[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafactura_compra[".strOrderBy"] = $tstrOrderBy;

$tdatafactura_compra[".orderindexes"] = array();

$tdatafactura_compra[".sqlHead"] = "SELECT id,   numero_factura,   fecha,   total_factura,   proveedor";
$tdatafactura_compra[".sqlFrom"] = "FROM factura_compra";
$tdatafactura_compra[".sqlWhereExpr"] = "";
$tdatafactura_compra[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafactura_compra[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafactura_compra[".arrGroupsPerPage"] = $arrGPP;

$tableKeysfactura_compra = array();
$tableKeysfactura_compra[] = "id";
$tableKeysfactura_compra[] = "numero_factura";
$tdatafactura_compra[".Keys"] = $tableKeysfactura_compra;

$tdatafactura_compra[".listFields"] = array();
$tdatafactura_compra[".listFields"][] = "numero_factura";
$tdatafactura_compra[".listFields"][] = "proveedor";
$tdatafactura_compra[".listFields"][] = "fecha";
$tdatafactura_compra[".listFields"][] = "total_factura";

$tdatafactura_compra[".viewFields"] = array();
$tdatafactura_compra[".viewFields"][] = "numero_factura";
$tdatafactura_compra[".viewFields"][] = "proveedor";
$tdatafactura_compra[".viewFields"][] = "fecha";
$tdatafactura_compra[".viewFields"][] = "total_factura";

$tdatafactura_compra[".addFields"] = array();
$tdatafactura_compra[".addFields"][] = "numero_factura";
$tdatafactura_compra[".addFields"][] = "proveedor";
$tdatafactura_compra[".addFields"][] = "fecha";
$tdatafactura_compra[".addFields"][] = "total_factura";

$tdatafactura_compra[".inlineAddFields"] = array();

$tdatafactura_compra[".editFields"] = array();
$tdatafactura_compra[".editFields"][] = "numero_factura";
$tdatafactura_compra[".editFields"][] = "proveedor";
$tdatafactura_compra[".editFields"][] = "fecha";
$tdatafactura_compra[".editFields"][] = "total_factura";

$tdatafactura_compra[".inlineEditFields"] = array();

$tdatafactura_compra[".exportFields"] = array();

$tdatafactura_compra[".printFields"] = array();
$tdatafactura_compra[".printFields"][] = "numero_factura";
$tdatafactura_compra[".printFields"][] = "proveedor";
$tdatafactura_compra[".printFields"][] = "fecha";
$tdatafactura_compra[".printFields"][] = "total_factura";

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
	
		
		
	$tdatafactura_compra["id"] = $fdata;
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
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "numero_factura"; 
		$fdata["FullName"] = "numero_factura";
	
		
		
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
	
		
		
	$tdatafactura_compra["numero_factura"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "factura_compra";
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
	
		
		
	$tdatafactura_compra["fecha"] = $fdata;
//	total_factura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_factura";
	$fdata["GoodName"] = "total_factura";
	$fdata["ownerTable"] = "factura_compra";
	$fdata["Label"] = "Total"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "total_factura"; 
		$fdata["FullName"] = "total_factura";
	
		
		
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
	
		
		
	$tdatafactura_compra["total_factura"] = $fdata;
//	proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "proveedor";
	$fdata["GoodName"] = "proveedor";
	$fdata["ownerTable"] = "factura_compra";
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
				if(strpos(GetUserPermissions("factura_compra"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(nombre,' ',nit)";
	
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
	
		
		
	$tdatafactura_compra["proveedor"] = $fdata;

	
$tables_data["factura_compra"]=&$tdatafactura_compra;
$field_labels["factura_compra"] = &$fieldLabelsfactura_compra;
$fieldToolTips["factura_compra"] = &$fieldToolTipsfactura_compra;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["factura_compra"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="abonos_proveedores";
	$detailsParam["dDataSourceTable"]="abonos_proveedores";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="abonos_proveedores";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["factura_compra"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["factura_compra"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["factura_compra"][$dIndex]["detailKeys"][]="factura";

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
		
	$detailsTablesData["factura_compra"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["factura_compra"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["factura_compra"][$dIndex]["detailKeys"][]="factura_compra";

	
// tables which are master tables for current table (detail)
$masterTablesData["factura_compra"] = array();

$mIndex = 1-1;
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
	$masterTablesData["factura_compra"][$mIndex] = $masterParams;	
		$masterTablesData["factura_compra"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["factura_compra"][$mIndex]["detailKeys"][]="proveedor";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_factura_compra()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   numero_factura,   fecha,   total_factura,   proveedor";
$proto0["m_strFrom"] = "FROM factura_compra";
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
	"m_strName" => "fecha",
	"m_strTable" => "factura_compra"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "total_factura",
	"m_strTable" => "factura_compra"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "factura_compra"
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_factura_compra = createSqlQuery_factura_compra();
					$tdatafactura_compra[".sqlquery"] = $queryData_factura_compra;

$tableEvents["factura_compra"] = new eventsBase;
$tdatafactura_compra[".hasEvents"] = false;

$cipherer = new RunnerCipherer("factura_compra");

?>