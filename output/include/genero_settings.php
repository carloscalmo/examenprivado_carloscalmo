<?php
require_once(getabspath("classes/cipherer.php"));
$tdatagenero = array();
	$tdatagenero[".NumberOfChars"] = 80; 
	$tdatagenero[".ShortName"] = "genero";
	$tdatagenero[".OwnerID"] = "";
	$tdatagenero[".OriginalTable"] = "genero";

//	field labels
$fieldLabelsgenero = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgenero["Spanish"] = array();
	$fieldToolTipsgenero["Spanish"] = array();
	$fieldLabelsgenero["Spanish"]["id"] = "Id";
	$fieldToolTipsgenero["Spanish"]["id"] = "";
	$fieldLabelsgenero["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsgenero["Spanish"]["nombre"] = "";
	if (count($fieldToolTipsgenero["Spanish"]))
		$tdatagenero[".isUseToolTips"] = true;
}
	
	
	$tdatagenero[".NCSearch"] = true;



$tdatagenero[".shortTableName"] = "genero";
$tdatagenero[".nSecOptions"] = 0;
$tdatagenero[".recsPerRowList"] = 1;
$tdatagenero[".mainTableOwnerID"] = "";
$tdatagenero[".moveNext"] = 1;
$tdatagenero[".nType"] = 0;

$tdatagenero[".strOriginalTableName"] = "genero";




$tdatagenero[".showAddInPopup"] = true;

$tdatagenero[".showEditInPopup"] = true;

$tdatagenero[".showViewInPopup"] = true;

$tdatagenero[".fieldsForRegister"] = array();

$tdatagenero[".listAjax"] = false;

	$tdatagenero[".audit"] = true;

	$tdatagenero[".locking"] = false;

$tdatagenero[".listIcons"] = true;
$tdatagenero[".edit"] = true;
$tdatagenero[".view"] = true;



$tdatagenero[".delete"] = true;

$tdatagenero[".showSimpleSearchOptions"] = false;

$tdatagenero[".showSearchPanel"] = true;

if (isMobile())
	$tdatagenero[".isUseAjaxSuggest"] = false;
else 
	$tdatagenero[".isUseAjaxSuggest"] = true;

$tdatagenero[".rowHighlite"] = true;

// button handlers file names

$tdatagenero[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagenero[".isUseTimeForSearch"] = false;



$tdatagenero[".useDetailsPreview"] = true;

$tdatagenero[".allSearchFields"] = array();

$tdatagenero[".allSearchFields"][] = "id";
$tdatagenero[".allSearchFields"][] = "nombre";

$tdatagenero[".googleLikeFields"][] = "id";
$tdatagenero[".googleLikeFields"][] = "nombre";


$tdatagenero[".advSearchFields"][] = "id";
$tdatagenero[".advSearchFields"][] = "nombre";

$tdatagenero[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatagenero[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagenero[".strOrderBy"] = $tstrOrderBy;

$tdatagenero[".orderindexes"] = array();

$tdatagenero[".sqlHead"] = "SELECT id,   nombre";
$tdatagenero[".sqlFrom"] = "FROM genero";
$tdatagenero[".sqlWhereExpr"] = "";
$tdatagenero[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagenero[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagenero[".arrGroupsPerPage"] = $arrGPP;

$tableKeysgenero = array();
$tableKeysgenero[] = "id";
$tdatagenero[".Keys"] = $tableKeysgenero;

$tdatagenero[".listFields"] = array();
$tdatagenero[".listFields"][] = "id";
$tdatagenero[".listFields"][] = "nombre";

$tdatagenero[".viewFields"] = array();
$tdatagenero[".viewFields"][] = "id";
$tdatagenero[".viewFields"][] = "nombre";

$tdatagenero[".addFields"] = array();
$tdatagenero[".addFields"][] = "nombre";

$tdatagenero[".inlineAddFields"] = array();
$tdatagenero[".inlineAddFields"][] = "nombre";

$tdatagenero[".editFields"] = array();
$tdatagenero[".editFields"][] = "nombre";

$tdatagenero[".inlineEditFields"] = array();
$tdatagenero[".inlineEditFields"][] = "nombre";

$tdatagenero[".exportFields"] = array();
$tdatagenero[".exportFields"][] = "id";
$tdatagenero[".exportFields"][] = "nombre";

$tdatagenero[".printFields"] = array();
$tdatagenero[".printFields"][] = "id";
$tdatagenero[".printFields"][] = "nombre";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "genero";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdatagenero["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "genero";
	$fdata["Label"] = "Nombre"; 
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
	
		
		
	$tdatagenero["nombre"] = $fdata;

	
$tables_data["genero"]=&$tdatagenero;
$field_labels["genero"] = &$fieldLabelsgenero;
$fieldToolTips["genero"] = &$fieldToolTipsgenero;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["genero"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="persona";
	$detailsParam["dDataSourceTable"]="persona";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="persona";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["genero"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["genero"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["genero"][$dIndex]["detailKeys"][]="genero_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["genero"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_genero()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nombre";
$proto0["m_strFrom"] = "FROM genero";
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
	"m_strTable" => "genero"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "genero"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "genero";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "nombre";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_genero = createSqlQuery_genero();
		$tdatagenero[".sqlquery"] = $queryData_genero;

$tableEvents["genero"] = new eventsBase;
$tdatagenero[".hasEvents"] = false;

$cipherer = new RunnerCipherer("genero");

?>