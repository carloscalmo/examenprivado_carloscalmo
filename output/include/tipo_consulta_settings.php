<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatipo_consulta = array();
	$tdatatipo_consulta[".NumberOfChars"] = 80; 
	$tdatatipo_consulta[".ShortName"] = "tipo_consulta";
	$tdatatipo_consulta[".OwnerID"] = "";
	$tdatatipo_consulta[".OriginalTable"] = "tipo_consulta";

//	field labels
$fieldLabelstipo_consulta = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_consulta["Spanish"] = array();
	$fieldToolTipstipo_consulta["Spanish"] = array();
	$fieldLabelstipo_consulta["Spanish"]["id"] = "Código";
	$fieldToolTipstipo_consulta["Spanish"]["id"] = "";
	$fieldLabelstipo_consulta["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipstipo_consulta["Spanish"]["nombre"] = "";
	$fieldLabelstipo_consulta["Spanish"]["precio"] = "Precio";
	$fieldToolTipstipo_consulta["Spanish"]["precio"] = "";
	$fieldLabelstipo_consulta["Spanish"]["tipo_consulta_id"] = "Tipo Consulta Id";
	$fieldToolTipstipo_consulta["Spanish"]["tipo_consulta_id"] = "";
	if (count($fieldToolTipstipo_consulta["Spanish"]))
		$tdatatipo_consulta[".isUseToolTips"] = true;
}
	
	
	$tdatatipo_consulta[".NCSearch"] = true;



$tdatatipo_consulta[".shortTableName"] = "tipo_consulta";
$tdatatipo_consulta[".nSecOptions"] = 0;
$tdatatipo_consulta[".recsPerRowList"] = 1;
$tdatatipo_consulta[".mainTableOwnerID"] = "";
$tdatatipo_consulta[".moveNext"] = 1;
$tdatatipo_consulta[".nType"] = 0;

$tdatatipo_consulta[".strOriginalTableName"] = "tipo_consulta";




$tdatatipo_consulta[".showAddInPopup"] = true;

$tdatatipo_consulta[".showEditInPopup"] = true;

$tdatatipo_consulta[".showViewInPopup"] = true;

$tdatatipo_consulta[".fieldsForRegister"] = array();

$tdatatipo_consulta[".listAjax"] = false;

	$tdatatipo_consulta[".audit"] = true;

	$tdatatipo_consulta[".locking"] = false;

$tdatatipo_consulta[".listIcons"] = true;
$tdatatipo_consulta[".edit"] = true;
$tdatatipo_consulta[".view"] = true;


$tdatatipo_consulta[".printFriendly"] = true;

$tdatatipo_consulta[".delete"] = true;

$tdatatipo_consulta[".showSimpleSearchOptions"] = false;

$tdatatipo_consulta[".showSearchPanel"] = true;

if (isMobile())
	$tdatatipo_consulta[".isUseAjaxSuggest"] = false;
else 
	$tdatatipo_consulta[".isUseAjaxSuggest"] = true;

$tdatatipo_consulta[".rowHighlite"] = true;

// button handlers file names

$tdatatipo_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_consulta[".isUseTimeForSearch"] = false;



$tdatatipo_consulta[".useDetailsPreview"] = true;

$tdatatipo_consulta[".allSearchFields"] = array();

$tdatatipo_consulta[".allSearchFields"][] = "id";
$tdatatipo_consulta[".allSearchFields"][] = "nombre";
$tdatatipo_consulta[".allSearchFields"][] = "precio";

$tdatatipo_consulta[".googleLikeFields"][] = "id";
$tdatatipo_consulta[".googleLikeFields"][] = "nombre";
$tdatatipo_consulta[".googleLikeFields"][] = "precio";


$tdatatipo_consulta[".advSearchFields"][] = "id";
$tdatatipo_consulta[".advSearchFields"][] = "nombre";
$tdatatipo_consulta[".advSearchFields"][] = "precio";

$tdatatipo_consulta[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatatipo_consulta[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipo_consulta[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_consulta[".orderindexes"] = array();

$tdatatipo_consulta[".sqlHead"] = "SELECT id,   nombre,   precio";
$tdatatipo_consulta[".sqlFrom"] = "FROM tipo_consulta";
$tdatatipo_consulta[".sqlWhereExpr"] = "";
$tdatatipo_consulta[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_consulta[".arrGroupsPerPage"] = $arrGPP;

$tableKeystipo_consulta = array();
$tableKeystipo_consulta[] = "id";
$tableKeystipo_consulta[] = "nombre";
$tdatatipo_consulta[".Keys"] = $tableKeystipo_consulta;

$tdatatipo_consulta[".listFields"] = array();
$tdatatipo_consulta[".listFields"][] = "id";
$tdatatipo_consulta[".listFields"][] = "nombre";
$tdatatipo_consulta[".listFields"][] = "precio";

$tdatatipo_consulta[".viewFields"] = array();
$tdatatipo_consulta[".viewFields"][] = "id";
$tdatatipo_consulta[".viewFields"][] = "nombre";
$tdatatipo_consulta[".viewFields"][] = "precio";

$tdatatipo_consulta[".addFields"] = array();
$tdatatipo_consulta[".addFields"][] = "nombre";
$tdatatipo_consulta[".addFields"][] = "precio";

$tdatatipo_consulta[".inlineAddFields"] = array();

$tdatatipo_consulta[".editFields"] = array();
$tdatatipo_consulta[".editFields"][] = "nombre";
$tdatatipo_consulta[".editFields"][] = "precio";

$tdatatipo_consulta[".inlineEditFields"] = array();

$tdatatipo_consulta[".exportFields"] = array();

$tdatatipo_consulta[".printFields"] = array();
$tdatatipo_consulta[".printFields"][] = "id";
$tdatatipo_consulta[".printFields"][] = "nombre";
$tdatatipo_consulta[".printFields"][] = "precio";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tipo_consulta";
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
	
		
		
	$tdatatipo_consulta["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "tipo_consulta";
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
	
		
		
	$tdatatipo_consulta["nombre"] = $fdata;
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "tipo_consulta";
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
	
		
		
	$tdatatipo_consulta["precio"] = $fdata;

	
$tables_data["tipo_consulta"]=&$tdatatipo_consulta;
$field_labels["tipo_consulta"] = &$fieldLabelstipo_consulta;
$fieldToolTips["tipo_consulta"] = &$fieldToolTipstipo_consulta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipo_consulta"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="consulta";
	$detailsParam["dDataSourceTable"]="consulta";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="consulta";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["tipo_consulta"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["tipo_consulta"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["tipo_consulta"][$dIndex]["detailKeys"][]="tipo_consulta_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["tipo_consulta"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipo_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nombre,   precio";
$proto0["m_strFrom"] = "FROM tipo_consulta";
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
	"m_strTable" => "tipo_consulta"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "tipo_consulta"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "tipo_consulta"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "tipo_consulta";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "nombre";
$proto12["m_columns"][] = "precio";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_consulta = createSqlQuery_tipo_consulta();
			$tdatatipo_consulta[".sqlquery"] = $queryData_tipo_consulta;

$tableEvents["tipo_consulta"] = new eventsBase;
$tdatatipo_consulta[".hasEvents"] = false;

$cipherer = new RunnerCipherer("tipo_consulta");

?>