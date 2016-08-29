<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatipo_ambiente = array();
	$tdatatipo_ambiente[".NumberOfChars"] = 80; 
	$tdatatipo_ambiente[".ShortName"] = "tipo_ambiente";
	$tdatatipo_ambiente[".OwnerID"] = "";
	$tdatatipo_ambiente[".OriginalTable"] = "tipo_ambiente";

//	field labels
$fieldLabelstipo_ambiente = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_ambiente["Spanish"] = array();
	$fieldToolTipstipo_ambiente["Spanish"] = array();
	$fieldLabelstipo_ambiente["Spanish"]["idtipo_ambiente"] = "Código";
	$fieldToolTipstipo_ambiente["Spanish"]["idtipo_ambiente"] = "";
	$fieldLabelstipo_ambiente["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipstipo_ambiente["Spanish"]["nombre"] = "";
	$fieldLabelstipo_ambiente["Spanish"]["Precio"] = "Precio";
	$fieldToolTipstipo_ambiente["Spanish"]["Precio"] = "";
	if (count($fieldToolTipstipo_ambiente["Spanish"]))
		$tdatatipo_ambiente[".isUseToolTips"] = true;
}
	
	
	$tdatatipo_ambiente[".NCSearch"] = true;



$tdatatipo_ambiente[".shortTableName"] = "tipo_ambiente";
$tdatatipo_ambiente[".nSecOptions"] = 0;
$tdatatipo_ambiente[".recsPerRowList"] = 1;
$tdatatipo_ambiente[".mainTableOwnerID"] = "";
$tdatatipo_ambiente[".moveNext"] = 1;
$tdatatipo_ambiente[".nType"] = 0;

$tdatatipo_ambiente[".strOriginalTableName"] = "tipo_ambiente";




$tdatatipo_ambiente[".showAddInPopup"] = true;

$tdatatipo_ambiente[".showEditInPopup"] = true;

$tdatatipo_ambiente[".showViewInPopup"] = true;

$tdatatipo_ambiente[".fieldsForRegister"] = array();

$tdatatipo_ambiente[".listAjax"] = false;

	$tdatatipo_ambiente[".audit"] = true;

	$tdatatipo_ambiente[".locking"] = false;

$tdatatipo_ambiente[".listIcons"] = true;
$tdatatipo_ambiente[".edit"] = true;
$tdatatipo_ambiente[".view"] = true;


$tdatatipo_ambiente[".printFriendly"] = true;

$tdatatipo_ambiente[".delete"] = true;

$tdatatipo_ambiente[".showSimpleSearchOptions"] = false;

$tdatatipo_ambiente[".showSearchPanel"] = true;

if (isMobile())
	$tdatatipo_ambiente[".isUseAjaxSuggest"] = false;
else 
	$tdatatipo_ambiente[".isUseAjaxSuggest"] = true;

$tdatatipo_ambiente[".rowHighlite"] = true;

// button handlers file names

$tdatatipo_ambiente[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_ambiente[".isUseTimeForSearch"] = false;



$tdatatipo_ambiente[".useDetailsPreview"] = true;

$tdatatipo_ambiente[".allSearchFields"] = array();

$tdatatipo_ambiente[".allSearchFields"][] = "idtipo_ambiente";
$tdatatipo_ambiente[".allSearchFields"][] = "nombre";
$tdatatipo_ambiente[".allSearchFields"][] = "Precio";

$tdatatipo_ambiente[".googleLikeFields"][] = "idtipo_ambiente";
$tdatatipo_ambiente[".googleLikeFields"][] = "nombre";
$tdatatipo_ambiente[".googleLikeFields"][] = "Precio";


$tdatatipo_ambiente[".advSearchFields"][] = "idtipo_ambiente";
$tdatatipo_ambiente[".advSearchFields"][] = "nombre";
$tdatatipo_ambiente[".advSearchFields"][] = "Precio";

$tdatatipo_ambiente[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatatipo_ambiente[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipo_ambiente[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_ambiente[".orderindexes"] = array();

$tdatatipo_ambiente[".sqlHead"] = "SELECT idtipo_ambiente,   nombre,   Precio";
$tdatatipo_ambiente[".sqlFrom"] = "FROM tipo_ambiente";
$tdatatipo_ambiente[".sqlWhereExpr"] = "";
$tdatatipo_ambiente[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_ambiente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_ambiente[".arrGroupsPerPage"] = $arrGPP;

$tableKeystipo_ambiente = array();
$tableKeystipo_ambiente[] = "idtipo_ambiente";
$tableKeystipo_ambiente[] = "nombre";
$tdatatipo_ambiente[".Keys"] = $tableKeystipo_ambiente;

$tdatatipo_ambiente[".listFields"] = array();
$tdatatipo_ambiente[".listFields"][] = "idtipo_ambiente";
$tdatatipo_ambiente[".listFields"][] = "nombre";
$tdatatipo_ambiente[".listFields"][] = "Precio";

$tdatatipo_ambiente[".viewFields"] = array();
$tdatatipo_ambiente[".viewFields"][] = "idtipo_ambiente";
$tdatatipo_ambiente[".viewFields"][] = "nombre";
$tdatatipo_ambiente[".viewFields"][] = "Precio";

$tdatatipo_ambiente[".addFields"] = array();
$tdatatipo_ambiente[".addFields"][] = "nombre";
$tdatatipo_ambiente[".addFields"][] = "Precio";

$tdatatipo_ambiente[".inlineAddFields"] = array();

$tdatatipo_ambiente[".editFields"] = array();
$tdatatipo_ambiente[".editFields"][] = "idtipo_ambiente";
$tdatatipo_ambiente[".editFields"][] = "nombre";
$tdatatipo_ambiente[".editFields"][] = "Precio";

$tdatatipo_ambiente[".inlineEditFields"] = array();

$tdatatipo_ambiente[".exportFields"] = array();

$tdatatipo_ambiente[".printFields"] = array();
$tdatatipo_ambiente[".printFields"][] = "idtipo_ambiente";
$tdatatipo_ambiente[".printFields"][] = "nombre";
$tdatatipo_ambiente[".printFields"][] = "Precio";

//	idtipo_ambiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idtipo_ambiente";
	$fdata["GoodName"] = "idtipo_ambiente";
	$fdata["ownerTable"] = "tipo_ambiente";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "idtipo_ambiente"; 
		$fdata["FullName"] = "idtipo_ambiente";
	
		
		
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
	
		
		
	$tdatatipo_ambiente["idtipo_ambiente"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "tipo_ambiente";
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
	
		
		
	$tdatatipo_ambiente["nombre"] = $fdata;
//	Precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Precio";
	$fdata["GoodName"] = "Precio";
	$fdata["ownerTable"] = "tipo_ambiente";
	$fdata["Label"] = "Precio"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Precio"; 
		$fdata["FullName"] = "Precio";
	
		
		
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
	
		
		
	$tdatatipo_ambiente["Precio"] = $fdata;

	
$tables_data["tipo_ambiente"]=&$tdatatipo_ambiente;
$field_labels["tipo_ambiente"] = &$fieldLabelstipo_ambiente;
$fieldToolTips["tipo_ambiente"] = &$fieldToolTipstipo_ambiente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipo_ambiente"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="ambiente";
	$detailsParam["dDataSourceTable"]="ambiente";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="ambiente";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["tipo_ambiente"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["tipo_ambiente"][$dIndex]["masterKeys"][]="idtipo_ambiente";
		$detailsTablesData["tipo_ambiente"][$dIndex]["detailKeys"][]="idtipo_ambiente";

	
// tables which are master tables for current table (detail)
$masterTablesData["tipo_ambiente"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipo_ambiente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idtipo_ambiente,   nombre,   Precio";
$proto0["m_strFrom"] = "FROM tipo_ambiente";
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
	"m_strName" => "idtipo_ambiente",
	"m_strTable" => "tipo_ambiente"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "tipo_ambiente"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "tipo_ambiente"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "tipo_ambiente";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "idtipo_ambiente";
$proto12["m_columns"][] = "nombre";
$proto12["m_columns"][] = "Precio";
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
$queryData_tipo_ambiente = createSqlQuery_tipo_ambiente();
			$tdatatipo_ambiente[".sqlquery"] = $queryData_tipo_ambiente;

$tableEvents["tipo_ambiente"] = new eventsBase;
$tdatatipo_ambiente[".hasEvents"] = false;

$cipherer = new RunnerCipherer("tipo_ambiente");

?>