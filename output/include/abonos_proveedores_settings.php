<?php
require_once(getabspath("classes/cipherer.php"));
$tdataabonos_proveedores = array();
	$tdataabonos_proveedores[".NumberOfChars"] = 80; 
	$tdataabonos_proveedores[".ShortName"] = "abonos_proveedores";
	$tdataabonos_proveedores[".OwnerID"] = "";
	$tdataabonos_proveedores[".OriginalTable"] = "abonos_proveedores";

//	field labels
$fieldLabelsabonos_proveedores = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsabonos_proveedores["Spanish"] = array();
	$fieldToolTipsabonos_proveedores["Spanish"] = array();
	$fieldLabelsabonos_proveedores["Spanish"]["id"] = "Código";
	$fieldToolTipsabonos_proveedores["Spanish"]["id"] = "";
	$fieldLabelsabonos_proveedores["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsabonos_proveedores["Spanish"]["fecha"] = "";
	$fieldLabelsabonos_proveedores["Spanish"]["monto"] = "Monto";
	$fieldToolTipsabonos_proveedores["Spanish"]["monto"] = "";
	$fieldLabelsabonos_proveedores["Spanish"]["observaciones"] = "Observaciones";
	$fieldToolTipsabonos_proveedores["Spanish"]["observaciones"] = "";
	$fieldLabelsabonos_proveedores["Spanish"]["factura"] = "Factura";
	$fieldToolTipsabonos_proveedores["Spanish"]["factura"] = "";
	if (count($fieldToolTipsabonos_proveedores["Spanish"]))
		$tdataabonos_proveedores[".isUseToolTips"] = true;
}
	
	
	$tdataabonos_proveedores[".NCSearch"] = true;



$tdataabonos_proveedores[".shortTableName"] = "abonos_proveedores";
$tdataabonos_proveedores[".nSecOptions"] = 0;
$tdataabonos_proveedores[".recsPerRowList"] = 1;
$tdataabonos_proveedores[".mainTableOwnerID"] = "";
$tdataabonos_proveedores[".moveNext"] = 1;
$tdataabonos_proveedores[".nType"] = 0;

$tdataabonos_proveedores[".strOriginalTableName"] = "abonos_proveedores";




$tdataabonos_proveedores[".showAddInPopup"] = true;

$tdataabonos_proveedores[".showEditInPopup"] = true;

$tdataabonos_proveedores[".showViewInPopup"] = true;

$tdataabonos_proveedores[".fieldsForRegister"] = array();

$tdataabonos_proveedores[".listAjax"] = false;

	$tdataabonos_proveedores[".audit"] = true;

	$tdataabonos_proveedores[".locking"] = false;

$tdataabonos_proveedores[".listIcons"] = true;
$tdataabonos_proveedores[".edit"] = true;
$tdataabonos_proveedores[".view"] = true;


$tdataabonos_proveedores[".printFriendly"] = true;

$tdataabonos_proveedores[".delete"] = true;

$tdataabonos_proveedores[".showSimpleSearchOptions"] = false;

$tdataabonos_proveedores[".showSearchPanel"] = true;

if (isMobile())
	$tdataabonos_proveedores[".isUseAjaxSuggest"] = false;
else 
	$tdataabonos_proveedores[".isUseAjaxSuggest"] = true;

$tdataabonos_proveedores[".rowHighlite"] = true;

// button handlers file names

$tdataabonos_proveedores[".addPageEvents"] = false;

// use timepicker for search panel
$tdataabonos_proveedores[".isUseTimeForSearch"] = false;




$tdataabonos_proveedores[".allSearchFields"] = array();

$tdataabonos_proveedores[".allSearchFields"][] = "id";
$tdataabonos_proveedores[".allSearchFields"][] = "factura";
$tdataabonos_proveedores[".allSearchFields"][] = "fecha";
$tdataabonos_proveedores[".allSearchFields"][] = "monto";
$tdataabonos_proveedores[".allSearchFields"][] = "observaciones";

$tdataabonos_proveedores[".googleLikeFields"][] = "id";
$tdataabonos_proveedores[".googleLikeFields"][] = "fecha";
$tdataabonos_proveedores[".googleLikeFields"][] = "monto";
$tdataabonos_proveedores[".googleLikeFields"][] = "observaciones";
$tdataabonos_proveedores[".googleLikeFields"][] = "factura";


$tdataabonos_proveedores[".advSearchFields"][] = "id";
$tdataabonos_proveedores[".advSearchFields"][] = "factura";
$tdataabonos_proveedores[".advSearchFields"][] = "fecha";
$tdataabonos_proveedores[".advSearchFields"][] = "monto";
$tdataabonos_proveedores[".advSearchFields"][] = "observaciones";

$tdataabonos_proveedores[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataabonos_proveedores[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataabonos_proveedores[".strOrderBy"] = $tstrOrderBy;

$tdataabonos_proveedores[".orderindexes"] = array();

$tdataabonos_proveedores[".sqlHead"] = "SELECT id,   fecha,   monto,   observaciones,   factura";
$tdataabonos_proveedores[".sqlFrom"] = "FROM abonos_proveedores";
$tdataabonos_proveedores[".sqlWhereExpr"] = "";
$tdataabonos_proveedores[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataabonos_proveedores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataabonos_proveedores[".arrGroupsPerPage"] = $arrGPP;

$tableKeysabonos_proveedores = array();
$tableKeysabonos_proveedores[] = "id";
$tableKeysabonos_proveedores[] = "factura";
$tdataabonos_proveedores[".Keys"] = $tableKeysabonos_proveedores;

$tdataabonos_proveedores[".listFields"] = array();
$tdataabonos_proveedores[".listFields"][] = "id";
$tdataabonos_proveedores[".listFields"][] = "factura";
$tdataabonos_proveedores[".listFields"][] = "fecha";
$tdataabonos_proveedores[".listFields"][] = "monto";
$tdataabonos_proveedores[".listFields"][] = "observaciones";

$tdataabonos_proveedores[".viewFields"] = array();
$tdataabonos_proveedores[".viewFields"][] = "id";
$tdataabonos_proveedores[".viewFields"][] = "factura";
$tdataabonos_proveedores[".viewFields"][] = "fecha";
$tdataabonos_proveedores[".viewFields"][] = "monto";
$tdataabonos_proveedores[".viewFields"][] = "observaciones";

$tdataabonos_proveedores[".addFields"] = array();
$tdataabonos_proveedores[".addFields"][] = "factura";
$tdataabonos_proveedores[".addFields"][] = "fecha";
$tdataabonos_proveedores[".addFields"][] = "monto";
$tdataabonos_proveedores[".addFields"][] = "observaciones";

$tdataabonos_proveedores[".inlineAddFields"] = array();

$tdataabonos_proveedores[".editFields"] = array();
$tdataabonos_proveedores[".editFields"][] = "factura";
$tdataabonos_proveedores[".editFields"][] = "fecha";
$tdataabonos_proveedores[".editFields"][] = "monto";
$tdataabonos_proveedores[".editFields"][] = "observaciones";

$tdataabonos_proveedores[".inlineEditFields"] = array();

$tdataabonos_proveedores[".exportFields"] = array();

$tdataabonos_proveedores[".printFields"] = array();
$tdataabonos_proveedores[".printFields"][] = "id";
$tdataabonos_proveedores[".printFields"][] = "factura";
$tdataabonos_proveedores[".printFields"][] = "fecha";
$tdataabonos_proveedores[".printFields"][] = "monto";
$tdataabonos_proveedores[".printFields"][] = "observaciones";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "abonos_proveedores";
	$fdata["Label"] = "Código"; 
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
	
		
		
	$tdataabonos_proveedores["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "abonos_proveedores";
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
	
		
		
	$tdataabonos_proveedores["fecha"] = $fdata;
//	monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "monto";
	$fdata["GoodName"] = "monto";
	$fdata["ownerTable"] = "abonos_proveedores";
	$fdata["Label"] = "Monto"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "monto"; 
		$fdata["FullName"] = "monto";
	
		
		
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
	
		
		
	$tdataabonos_proveedores["monto"] = $fdata;
//	observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "observaciones";
	$fdata["GoodName"] = "observaciones";
	$fdata["ownerTable"] = "abonos_proveedores";
	$fdata["Label"] = "Observaciones"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "observaciones"; 
		$fdata["FullName"] = "observaciones";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataabonos_proveedores["observaciones"] = $fdata;
//	factura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "factura";
	$fdata["GoodName"] = "factura";
	$fdata["ownerTable"] = "abonos_proveedores";
	$fdata["Label"] = "Factura"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "factura"; 
		$fdata["FullName"] = "factura";
	
		
		
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
				if(strpos(GetUserPermissions("abonos_proveedores"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = " concat(numero_factura,' ',nombre) 
";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "Copy of factura_compra1";
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
	
		
		
	$tdataabonos_proveedores["factura"] = $fdata;

	
$tables_data["abonos_proveedores"]=&$tdataabonos_proveedores;
$field_labels["abonos_proveedores"] = &$fieldLabelsabonos_proveedores;
$fieldToolTips["abonos_proveedores"] = &$fieldToolTipsabonos_proveedores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["abonos_proveedores"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["abonos_proveedores"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="factura_compra";
	$masterParams["mDataSourceTable"]="factura_compra";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "factura_compra";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["abonos_proveedores"][$mIndex] = $masterParams;	
		$masterTablesData["abonos_proveedores"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["abonos_proveedores"][$mIndex]["detailKeys"][]="factura";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_abonos_proveedores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   fecha,   monto,   observaciones,   factura";
$proto0["m_strFrom"] = "FROM abonos_proveedores";
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
	"m_strTable" => "abonos_proveedores"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "abonos_proveedores"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "abonos_proveedores"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones",
	"m_strTable" => "abonos_proveedores"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "factura",
	"m_strTable" => "abonos_proveedores"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "abonos_proveedores";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "fecha";
$proto16["m_columns"][] = "monto";
$proto16["m_columns"][] = "observaciones";
$proto16["m_columns"][] = "factura";
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
$queryData_abonos_proveedores = createSqlQuery_abonos_proveedores();
					$tdataabonos_proveedores[".sqlquery"] = $queryData_abonos_proveedores;

$tableEvents["abonos_proveedores"] = new eventsBase;
$tdataabonos_proveedores[".hasEvents"] = false;

$cipherer = new RunnerCipherer("abonos_proveedores");

?>