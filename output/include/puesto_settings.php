<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapuesto = array();
	$tdatapuesto[".NumberOfChars"] = 80; 
	$tdatapuesto[".ShortName"] = "puesto";
	$tdatapuesto[".OwnerID"] = "";
	$tdatapuesto[".OriginalTable"] = "puesto";

//	field labels
$fieldLabelspuesto = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspuesto["Spanish"] = array();
	$fieldToolTipspuesto["Spanish"] = array();
	$fieldLabelspuesto["Spanish"]["id"] = "Código";
	$fieldToolTipspuesto["Spanish"]["id"] = "";
	$fieldLabelspuesto["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipspuesto["Spanish"]["nombre"] = "";
	$fieldLabelspuesto["Spanish"]["salario"] = "Salario";
	$fieldToolTipspuesto["Spanish"]["salario"] = "";
	$fieldLabelspuesto["Spanish"]["puesto_id"] = "Puesto Id";
	$fieldToolTipspuesto["Spanish"]["puesto_id"] = "";
	if (count($fieldToolTipspuesto["Spanish"]))
		$tdatapuesto[".isUseToolTips"] = true;
}
	
	
	$tdatapuesto[".NCSearch"] = true;



$tdatapuesto[".shortTableName"] = "puesto";
$tdatapuesto[".nSecOptions"] = 0;
$tdatapuesto[".recsPerRowList"] = 1;
$tdatapuesto[".mainTableOwnerID"] = "";
$tdatapuesto[".moveNext"] = 1;
$tdatapuesto[".nType"] = 0;

$tdatapuesto[".strOriginalTableName"] = "puesto";




$tdatapuesto[".showAddInPopup"] = true;

$tdatapuesto[".showEditInPopup"] = true;

$tdatapuesto[".showViewInPopup"] = true;

$tdatapuesto[".fieldsForRegister"] = array();

$tdatapuesto[".listAjax"] = false;

	$tdatapuesto[".audit"] = true;

	$tdatapuesto[".locking"] = false;

$tdatapuesto[".listIcons"] = true;
$tdatapuesto[".edit"] = true;
$tdatapuesto[".inlineAdd"] = true;
$tdatapuesto[".view"] = true;


$tdatapuesto[".printFriendly"] = true;

$tdatapuesto[".delete"] = true;

$tdatapuesto[".showSimpleSearchOptions"] = false;

$tdatapuesto[".showSearchPanel"] = true;

if (isMobile())
	$tdatapuesto[".isUseAjaxSuggest"] = false;
else 
	$tdatapuesto[".isUseAjaxSuggest"] = true;

$tdatapuesto[".rowHighlite"] = true;

// button handlers file names

$tdatapuesto[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapuesto[".isUseTimeForSearch"] = false;



$tdatapuesto[".useDetailsPreview"] = true;

$tdatapuesto[".allSearchFields"] = array();

$tdatapuesto[".allSearchFields"][] = "id";
$tdatapuesto[".allSearchFields"][] = "nombre";
$tdatapuesto[".allSearchFields"][] = "salario";

$tdatapuesto[".googleLikeFields"][] = "id";
$tdatapuesto[".googleLikeFields"][] = "nombre";
$tdatapuesto[".googleLikeFields"][] = "salario";


$tdatapuesto[".advSearchFields"][] = "id";
$tdatapuesto[".advSearchFields"][] = "nombre";
$tdatapuesto[".advSearchFields"][] = "salario";

$tdatapuesto[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatapuesto[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapuesto[".strOrderBy"] = $tstrOrderBy;

$tdatapuesto[".orderindexes"] = array();

$tdatapuesto[".sqlHead"] = "SELECT id,   nombre,   salario";
$tdatapuesto[".sqlFrom"] = "FROM puesto";
$tdatapuesto[".sqlWhereExpr"] = "";
$tdatapuesto[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapuesto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapuesto[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspuesto = array();
$tableKeyspuesto[] = "id";
$tableKeyspuesto[] = "nombre";
$tdatapuesto[".Keys"] = $tableKeyspuesto;

$tdatapuesto[".listFields"] = array();
$tdatapuesto[".listFields"][] = "id";
$tdatapuesto[".listFields"][] = "nombre";
$tdatapuesto[".listFields"][] = "salario";

$tdatapuesto[".viewFields"] = array();
$tdatapuesto[".viewFields"][] = "id";
$tdatapuesto[".viewFields"][] = "nombre";
$tdatapuesto[".viewFields"][] = "salario";

$tdatapuesto[".addFields"] = array();
$tdatapuesto[".addFields"][] = "nombre";
$tdatapuesto[".addFields"][] = "salario";

$tdatapuesto[".inlineAddFields"] = array();

$tdatapuesto[".editFields"] = array();
$tdatapuesto[".editFields"][] = "nombre";
$tdatapuesto[".editFields"][] = "salario";

$tdatapuesto[".inlineEditFields"] = array();

$tdatapuesto[".exportFields"] = array();

$tdatapuesto[".printFields"] = array();
$tdatapuesto[".printFields"][] = "id";
$tdatapuesto[".printFields"][] = "nombre";
$tdatapuesto[".printFields"][] = "salario";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "puesto";
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
	
		
		
	$tdatapuesto["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "puesto";
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
	
		
		
	$tdatapuesto["nombre"] = $fdata;
//	salario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "salario";
	$fdata["GoodName"] = "salario";
	$fdata["ownerTable"] = "puesto";
	$fdata["Label"] = "Salario"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "salario"; 
		$fdata["FullName"] = "salario";
	
		
		
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
	
		
		
	$tdatapuesto["salario"] = $fdata;

	
$tables_data["puesto"]=&$tdatapuesto;
$field_labels["puesto"] = &$fieldLabelspuesto;
$fieldToolTips["puesto"] = &$fieldToolTipspuesto;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["puesto"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="empleado";
	$detailsParam["dDataSourceTable"]="empleado";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="empleado";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["puesto"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["puesto"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["puesto"][$dIndex]["detailKeys"][]="puesto_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["puesto"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_puesto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nombre,   salario";
$proto0["m_strFrom"] = "FROM puesto";
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
	"m_strTable" => "puesto"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "puesto"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "salario",
	"m_strTable" => "puesto"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "puesto";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "nombre";
$proto12["m_columns"][] = "salario";
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
$queryData_puesto = createSqlQuery_puesto();
			$tdatapuesto[".sqlquery"] = $queryData_puesto;

$tableEvents["puesto"] = new eventsBase;
$tdatapuesto[".hasEvents"] = false;

$cipherer = new RunnerCipherer("puesto");

?>