<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadepartamento = array();
	$tdatadepartamento[".NumberOfChars"] = 80; 
	$tdatadepartamento[".ShortName"] = "departamento";
	$tdatadepartamento[".OwnerID"] = "";
	$tdatadepartamento[".OriginalTable"] = "departamento";

//	field labels
$fieldLabelsdepartamento = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdepartamento["Spanish"] = array();
	$fieldToolTipsdepartamento["Spanish"] = array();
	$fieldLabelsdepartamento["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsdepartamento["Spanish"]["nombre"] = "";
	$fieldLabelsdepartamento["Spanish"]["id"] = "Código";
	$fieldToolTipsdepartamento["Spanish"]["id"] = "";
	$fieldLabelsdepartamento["Spanish"]["municipio_id"] = "Municipio Id";
	$fieldToolTipsdepartamento["Spanish"]["municipio_id"] = "";
	if (count($fieldToolTipsdepartamento["Spanish"]))
		$tdatadepartamento[".isUseToolTips"] = true;
}
	
	
	$tdatadepartamento[".NCSearch"] = true;



$tdatadepartamento[".shortTableName"] = "departamento";
$tdatadepartamento[".nSecOptions"] = 0;
$tdatadepartamento[".recsPerRowList"] = 1;
$tdatadepartamento[".mainTableOwnerID"] = "";
$tdatadepartamento[".moveNext"] = 1;
$tdatadepartamento[".nType"] = 0;

$tdatadepartamento[".strOriginalTableName"] = "departamento";




$tdatadepartamento[".showAddInPopup"] = true;

$tdatadepartamento[".showEditInPopup"] = true;

$tdatadepartamento[".showViewInPopup"] = true;

$tdatadepartamento[".fieldsForRegister"] = array();

$tdatadepartamento[".listAjax"] = false;

	$tdatadepartamento[".audit"] = true;

	$tdatadepartamento[".locking"] = false;

$tdatadepartamento[".listIcons"] = true;
$tdatadepartamento[".edit"] = true;
$tdatadepartamento[".view"] = true;



$tdatadepartamento[".delete"] = true;

$tdatadepartamento[".showSimpleSearchOptions"] = false;

$tdatadepartamento[".showSearchPanel"] = true;

if (isMobile())
	$tdatadepartamento[".isUseAjaxSuggest"] = false;
else 
	$tdatadepartamento[".isUseAjaxSuggest"] = true;

$tdatadepartamento[".rowHighlite"] = true;

// button handlers file names

$tdatadepartamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartamento[".isUseTimeForSearch"] = false;



$tdatadepartamento[".useDetailsPreview"] = true;

$tdatadepartamento[".allSearchFields"] = array();

$tdatadepartamento[".allSearchFields"][] = "id";
$tdatadepartamento[".allSearchFields"][] = "nombre";

$tdatadepartamento[".googleLikeFields"][] = "id";
$tdatadepartamento[".googleLikeFields"][] = "nombre";


$tdatadepartamento[".advSearchFields"][] = "nombre";

$tdatadepartamento[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatadepartamento[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadepartamento[".strOrderBy"] = $tstrOrderBy;

$tdatadepartamento[".orderindexes"] = array();

$tdatadepartamento[".sqlHead"] = "SELECT id,   nombre";
$tdatadepartamento[".sqlFrom"] = "FROM departamento";
$tdatadepartamento[".sqlWhereExpr"] = "";
$tdatadepartamento[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartamento[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdepartamento = array();
$tableKeysdepartamento[] = "id";
$tableKeysdepartamento[] = "nombre";
$tdatadepartamento[".Keys"] = $tableKeysdepartamento;

$tdatadepartamento[".listFields"] = array();
$tdatadepartamento[".listFields"][] = "nombre";

$tdatadepartamento[".viewFields"] = array();
$tdatadepartamento[".viewFields"][] = "nombre";

$tdatadepartamento[".addFields"] = array();
$tdatadepartamento[".addFields"][] = "nombre";

$tdatadepartamento[".inlineAddFields"] = array();

$tdatadepartamento[".editFields"] = array();
$tdatadepartamento[".editFields"][] = "nombre";

$tdatadepartamento[".inlineEditFields"] = array();

$tdatadepartamento[".exportFields"] = array();

$tdatadepartamento[".printFields"] = array();
$tdatadepartamento[".printFields"][] = "nombre";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "departamento";
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
	
		
		
	$tdatadepartamento["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "departamento";
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
	
		
		
	$tdatadepartamento["nombre"] = $fdata;

	
$tables_data["departamento"]=&$tdatadepartamento;
$field_labels["departamento"] = &$fieldLabelsdepartamento;
$fieldToolTips["departamento"] = &$fieldToolTipsdepartamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["departamento"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="municipio";
	$detailsParam["dDataSourceTable"]="municipio";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="municipio";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["departamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["departamento"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["departamento"][$dIndex]["detailKeys"][]="departamento";

	
// tables which are master tables for current table (detail)
$masterTablesData["departamento"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_departamento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nombre";
$proto0["m_strFrom"] = "FROM departamento";
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
	"m_strTable" => "departamento"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "departamento"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "departamento";
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
$queryData_departamento = createSqlQuery_departamento();
		$tdatadepartamento[".sqlquery"] = $queryData_departamento;

$tableEvents["departamento"] = new eventsBase;
$tdatadepartamento[".hasEvents"] = false;

$cipherer = new RunnerCipherer("departamento");

?>