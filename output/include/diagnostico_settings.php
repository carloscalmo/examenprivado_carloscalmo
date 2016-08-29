<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadiagnostico = array();
	$tdatadiagnostico[".NumberOfChars"] = 80; 
	$tdatadiagnostico[".ShortName"] = "diagnostico";
	$tdatadiagnostico[".OwnerID"] = "";
	$tdatadiagnostico[".OriginalTable"] = "diagnostico";

//	field labels
$fieldLabelsdiagnostico = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdiagnostico["Spanish"] = array();
	$fieldToolTipsdiagnostico["Spanish"] = array();
	$fieldLabelsdiagnostico["Spanish"]["id"] = "Código";
	$fieldToolTipsdiagnostico["Spanish"]["id"] = "";
	$fieldLabelsdiagnostico["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsdiagnostico["Spanish"]["nombre"] = "";
	$fieldLabelsdiagnostico["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsdiagnostico["Spanish"]["descripcion"] = "";
	$fieldLabelsdiagnostico["Spanish"]["diagnostico_id"] = "Diagnostico Id";
	$fieldToolTipsdiagnostico["Spanish"]["diagnostico_id"] = "";
	if (count($fieldToolTipsdiagnostico["Spanish"]))
		$tdatadiagnostico[".isUseToolTips"] = true;
}
	
	
	$tdatadiagnostico[".NCSearch"] = true;



$tdatadiagnostico[".shortTableName"] = "diagnostico";
$tdatadiagnostico[".nSecOptions"] = 0;
$tdatadiagnostico[".recsPerRowList"] = 1;
$tdatadiagnostico[".mainTableOwnerID"] = "";
$tdatadiagnostico[".moveNext"] = 1;
$tdatadiagnostico[".nType"] = 0;

$tdatadiagnostico[".strOriginalTableName"] = "diagnostico";




$tdatadiagnostico[".showAddInPopup"] = true;

$tdatadiagnostico[".showEditInPopup"] = true;

$tdatadiagnostico[".showViewInPopup"] = true;

$tdatadiagnostico[".fieldsForRegister"] = array();

$tdatadiagnostico[".listAjax"] = false;

	$tdatadiagnostico[".audit"] = true;

	$tdatadiagnostico[".locking"] = false;

$tdatadiagnostico[".listIcons"] = true;
$tdatadiagnostico[".edit"] = true;
$tdatadiagnostico[".inlineAdd"] = true;
$tdatadiagnostico[".view"] = true;



$tdatadiagnostico[".delete"] = true;

$tdatadiagnostico[".showSimpleSearchOptions"] = false;

$tdatadiagnostico[".showSearchPanel"] = true;

if (isMobile())
	$tdatadiagnostico[".isUseAjaxSuggest"] = false;
else 
	$tdatadiagnostico[".isUseAjaxSuggest"] = true;

$tdatadiagnostico[".rowHighlite"] = true;

// button handlers file names

$tdatadiagnostico[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadiagnostico[".isUseTimeForSearch"] = false;



$tdatadiagnostico[".useDetailsPreview"] = true;

$tdatadiagnostico[".allSearchFields"] = array();

$tdatadiagnostico[".allSearchFields"][] = "id";
$tdatadiagnostico[".allSearchFields"][] = "nombre";
$tdatadiagnostico[".allSearchFields"][] = "descripcion";

$tdatadiagnostico[".googleLikeFields"][] = "id";
$tdatadiagnostico[".googleLikeFields"][] = "nombre";
$tdatadiagnostico[".googleLikeFields"][] = "descripcion";


$tdatadiagnostico[".advSearchFields"][] = "nombre";
$tdatadiagnostico[".advSearchFields"][] = "descripcion";

$tdatadiagnostico[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatadiagnostico[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadiagnostico[".strOrderBy"] = $tstrOrderBy;

$tdatadiagnostico[".orderindexes"] = array();

$tdatadiagnostico[".sqlHead"] = "SELECT id,   nombre,   descripcion";
$tdatadiagnostico[".sqlFrom"] = "FROM diagnostico";
$tdatadiagnostico[".sqlWhereExpr"] = "";
$tdatadiagnostico[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadiagnostico[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadiagnostico[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdiagnostico = array();
$tableKeysdiagnostico[] = "id";
$tableKeysdiagnostico[] = "nombre";
$tdatadiagnostico[".Keys"] = $tableKeysdiagnostico;

$tdatadiagnostico[".listFields"] = array();
$tdatadiagnostico[".listFields"][] = "nombre";
$tdatadiagnostico[".listFields"][] = "descripcion";

$tdatadiagnostico[".viewFields"] = array();
$tdatadiagnostico[".viewFields"][] = "nombre";
$tdatadiagnostico[".viewFields"][] = "descripcion";

$tdatadiagnostico[".addFields"] = array();
$tdatadiagnostico[".addFields"][] = "nombre";
$tdatadiagnostico[".addFields"][] = "descripcion";

$tdatadiagnostico[".inlineAddFields"] = array();

$tdatadiagnostico[".editFields"] = array();
$tdatadiagnostico[".editFields"][] = "nombre";
$tdatadiagnostico[".editFields"][] = "descripcion";

$tdatadiagnostico[".inlineEditFields"] = array();

$tdatadiagnostico[".exportFields"] = array();

$tdatadiagnostico[".printFields"] = array();
$tdatadiagnostico[".printFields"][] = "nombre";
$tdatadiagnostico[".printFields"][] = "descripcion";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "diagnostico";
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
	
		
		
	$tdatadiagnostico["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "diagnostico";
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
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadiagnostico["nombre"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "diagnostico";
	$fdata["Label"] = "Descripcion"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "descripcion"; 
		$fdata["FullName"] = "descripcion";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadiagnostico["descripcion"] = $fdata;

	
$tables_data["diagnostico"]=&$tdatadiagnostico;
$field_labels["diagnostico"] = &$fieldLabelsdiagnostico;
$fieldToolTips["diagnostico"] = &$fieldToolTipsdiagnostico;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["diagnostico"] = array();
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
		
	$detailsTablesData["diagnostico"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["diagnostico"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["diagnostico"][$dIndex]["detailKeys"][]="diagnostico_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["diagnostico"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_diagnostico()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nombre,   descripcion";
$proto0["m_strFrom"] = "FROM diagnostico";
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
	"m_strTable" => "diagnostico"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "diagnostico"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "diagnostico"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "diagnostico";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "nombre";
$proto12["m_columns"][] = "descripcion";
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
$queryData_diagnostico = createSqlQuery_diagnostico();
			$tdatadiagnostico[".sqlquery"] = $queryData_diagnostico;

$tableEvents["diagnostico"] = new eventsBase;
$tdatadiagnostico[".hasEvents"] = false;

$cipherer = new RunnerCipherer("diagnostico");

?>