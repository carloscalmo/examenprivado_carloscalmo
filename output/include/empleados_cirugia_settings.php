<?php
require_once(getabspath("classes/cipherer.php"));
$tdataempleados_cirugia = array();
	$tdataempleados_cirugia[".NumberOfChars"] = 80; 
	$tdataempleados_cirugia[".ShortName"] = "empleados_cirugia";
	$tdataempleados_cirugia[".OwnerID"] = "";
	$tdataempleados_cirugia[".OriginalTable"] = "empleados_cirugia";

//	field labels
$fieldLabelsempleados_cirugia = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempleados_cirugia["Spanish"] = array();
	$fieldToolTipsempleados_cirugia["Spanish"] = array();
	$fieldLabelsempleados_cirugia["Spanish"]["id"] = "Código";
	$fieldToolTipsempleados_cirugia["Spanish"]["id"] = "";
	$fieldLabelsempleados_cirugia["Spanish"]["empleado_id"] = "Empleado";
	$fieldToolTipsempleados_cirugia["Spanish"]["empleado_id"] = "";
	$fieldLabelsempleados_cirugia["Spanish"]["cirugia_id"] = "Código de Cirugía";
	$fieldToolTipsempleados_cirugia["Spanish"]["cirugia_id"] = "";
	if (count($fieldToolTipsempleados_cirugia["Spanish"]))
		$tdataempleados_cirugia[".isUseToolTips"] = true;
}
	
	
	$tdataempleados_cirugia[".NCSearch"] = true;



$tdataempleados_cirugia[".shortTableName"] = "empleados_cirugia";
$tdataempleados_cirugia[".nSecOptions"] = 0;
$tdataempleados_cirugia[".recsPerRowList"] = 1;
$tdataempleados_cirugia[".mainTableOwnerID"] = "";
$tdataempleados_cirugia[".moveNext"] = 1;
$tdataempleados_cirugia[".nType"] = 0;

$tdataempleados_cirugia[".strOriginalTableName"] = "empleados_cirugia";




$tdataempleados_cirugia[".showAddInPopup"] = true;

$tdataempleados_cirugia[".showEditInPopup"] = true;

$tdataempleados_cirugia[".showViewInPopup"] = true;

$tdataempleados_cirugia[".fieldsForRegister"] = array();

$tdataempleados_cirugia[".listAjax"] = false;

	$tdataempleados_cirugia[".audit"] = true;

	$tdataempleados_cirugia[".locking"] = false;

$tdataempleados_cirugia[".listIcons"] = true;
$tdataempleados_cirugia[".edit"] = true;
$tdataempleados_cirugia[".view"] = true;



$tdataempleados_cirugia[".delete"] = true;

$tdataempleados_cirugia[".showSimpleSearchOptions"] = false;

$tdataempleados_cirugia[".showSearchPanel"] = true;

if (isMobile())
	$tdataempleados_cirugia[".isUseAjaxSuggest"] = false;
else 
	$tdataempleados_cirugia[".isUseAjaxSuggest"] = true;

$tdataempleados_cirugia[".rowHighlite"] = true;

// button handlers file names

$tdataempleados_cirugia[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempleados_cirugia[".isUseTimeForSearch"] = false;




$tdataempleados_cirugia[".allSearchFields"] = array();

$tdataempleados_cirugia[".allSearchFields"][] = "id";
$tdataempleados_cirugia[".allSearchFields"][] = "empleado_id";
$tdataempleados_cirugia[".allSearchFields"][] = "cirugia_id";

$tdataempleados_cirugia[".googleLikeFields"][] = "id";
$tdataempleados_cirugia[".googleLikeFields"][] = "empleado_id";
$tdataempleados_cirugia[".googleLikeFields"][] = "cirugia_id";


$tdataempleados_cirugia[".advSearchFields"][] = "id";
$tdataempleados_cirugia[".advSearchFields"][] = "empleado_id";
$tdataempleados_cirugia[".advSearchFields"][] = "cirugia_id";

$tdataempleados_cirugia[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataempleados_cirugia[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempleados_cirugia[".strOrderBy"] = $tstrOrderBy;

$tdataempleados_cirugia[".orderindexes"] = array();

$tdataempleados_cirugia[".sqlHead"] = "SELECT id,   empleado_id,   cirugia_id";
$tdataempleados_cirugia[".sqlFrom"] = "FROM empleados_cirugia";
$tdataempleados_cirugia[".sqlWhereExpr"] = "";
$tdataempleados_cirugia[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempleados_cirugia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempleados_cirugia[".arrGroupsPerPage"] = $arrGPP;

$tableKeysempleados_cirugia = array();
$tableKeysempleados_cirugia[] = "id";
$tableKeysempleados_cirugia[] = "cirugia_id";
$tdataempleados_cirugia[".Keys"] = $tableKeysempleados_cirugia;

$tdataempleados_cirugia[".listFields"] = array();
$tdataempleados_cirugia[".listFields"][] = "id";
$tdataempleados_cirugia[".listFields"][] = "empleado_id";
$tdataempleados_cirugia[".listFields"][] = "cirugia_id";

$tdataempleados_cirugia[".viewFields"] = array();
$tdataempleados_cirugia[".viewFields"][] = "id";
$tdataempleados_cirugia[".viewFields"][] = "empleado_id";
$tdataempleados_cirugia[".viewFields"][] = "cirugia_id";

$tdataempleados_cirugia[".addFields"] = array();
$tdataempleados_cirugia[".addFields"][] = "empleado_id";
$tdataempleados_cirugia[".addFields"][] = "cirugia_id";

$tdataempleados_cirugia[".inlineAddFields"] = array();

$tdataempleados_cirugia[".editFields"] = array();
$tdataempleados_cirugia[".editFields"][] = "empleado_id";
$tdataempleados_cirugia[".editFields"][] = "cirugia_id";

$tdataempleados_cirugia[".inlineEditFields"] = array();

$tdataempleados_cirugia[".exportFields"] = array();

$tdataempleados_cirugia[".printFields"] = array();
$tdataempleados_cirugia[".printFields"][] = "id";
$tdataempleados_cirugia[".printFields"][] = "empleado_id";
$tdataempleados_cirugia[".printFields"][] = "cirugia_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "empleados_cirugia";
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
	
		
		
	$tdataempleados_cirugia["id"] = $fdata;
//	empleado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "empleado_id";
	$fdata["GoodName"] = "empleado_id";
	$fdata["ownerTable"] = "empleados_cirugia";
	$fdata["Label"] = "Empleado"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "empleado_id"; 
		$fdata["FullName"] = "empleado_id";
	
		
		
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
				if(strpos(GetUserPermissions("empleados_cirugia"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(nombre,' ',apellido)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "persona";
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
	
		
		
	$tdataempleados_cirugia["empleado_id"] = $fdata;
//	cirugia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cirugia_id";
	$fdata["GoodName"] = "cirugia_id";
	$fdata["ownerTable"] = "empleados_cirugia";
	$fdata["Label"] = "Código de Cirugía"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "cirugia_id"; 
		$fdata["FullName"] = "cirugia_id";
	
		
		
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
				if(strpos(GetUserPermissions("empleados_cirugia"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = " concat(cirugia.id,' ' ,tipo_cirugia.nombre,' ',cirugia.fecha) 
";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "Copy of cirugia";
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
	
		
		
	$tdataempleados_cirugia["cirugia_id"] = $fdata;

	
$tables_data["empleados_cirugia"]=&$tdataempleados_cirugia;
$field_labels["empleados_cirugia"] = &$fieldLabelsempleados_cirugia;
$fieldToolTips["empleados_cirugia"] = &$fieldToolTipsempleados_cirugia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empleados_cirugia"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["empleados_cirugia"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="cirugia";
	$masterParams["mDataSourceTable"]="cirugia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cirugia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["empleados_cirugia"][$mIndex] = $masterParams;	
		$masterTablesData["empleados_cirugia"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["empleados_cirugia"][$mIndex]["detailKeys"][]="cirugia_id";

$mIndex = 2-1;
			$strOriginalDetailsTable="empleado";
	$masterParams["mDataSourceTable"]="empleado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "empleado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["empleados_cirugia"][$mIndex] = $masterParams;	
		$masterTablesData["empleados_cirugia"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["empleados_cirugia"][$mIndex]["detailKeys"][]="empleado_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empleados_cirugia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   empleado_id,   cirugia_id";
$proto0["m_strFrom"] = "FROM empleados_cirugia";
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
	"m_strTable" => "empleados_cirugia"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "empleado_id",
	"m_strTable" => "empleados_cirugia"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cirugia_id",
	"m_strTable" => "empleados_cirugia"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "empleados_cirugia";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "empleado_id";
$proto12["m_columns"][] = "cirugia_id";
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
$queryData_empleados_cirugia = createSqlQuery_empleados_cirugia();
			$tdataempleados_cirugia[".sqlquery"] = $queryData_empleados_cirugia;

$tableEvents["empleados_cirugia"] = new eventsBase;
$tdataempleados_cirugia[".hasEvents"] = false;

$cipherer = new RunnerCipherer("empleados_cirugia");

?>