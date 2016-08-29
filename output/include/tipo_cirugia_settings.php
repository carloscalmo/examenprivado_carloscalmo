<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatipo_cirugia = array();
	$tdatatipo_cirugia[".NumberOfChars"] = 80; 
	$tdatatipo_cirugia[".ShortName"] = "tipo_cirugia";
	$tdatatipo_cirugia[".OwnerID"] = "";
	$tdatatipo_cirugia[".OriginalTable"] = "tipo_cirugia";

//	field labels
$fieldLabelstipo_cirugia = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_cirugia["Spanish"] = array();
	$fieldToolTipstipo_cirugia["Spanish"] = array();
	$fieldLabelstipo_cirugia["Spanish"]["idtipo_cirugia"] = "Código";
	$fieldToolTipstipo_cirugia["Spanish"]["idtipo_cirugia"] = "";
	$fieldLabelstipo_cirugia["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipstipo_cirugia["Spanish"]["nombre"] = "";
	$fieldLabelstipo_cirugia["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipstipo_cirugia["Spanish"]["descripcion"] = "";
	$fieldLabelstipo_cirugia["Spanish"]["precio"] = "Precio";
	$fieldToolTipstipo_cirugia["Spanish"]["precio"] = "";
	if (count($fieldToolTipstipo_cirugia["Spanish"]))
		$tdatatipo_cirugia[".isUseToolTips"] = true;
}
	
	
	$tdatatipo_cirugia[".NCSearch"] = true;



$tdatatipo_cirugia[".shortTableName"] = "tipo_cirugia";
$tdatatipo_cirugia[".nSecOptions"] = 0;
$tdatatipo_cirugia[".recsPerRowList"] = 1;
$tdatatipo_cirugia[".mainTableOwnerID"] = "";
$tdatatipo_cirugia[".moveNext"] = 1;
$tdatatipo_cirugia[".nType"] = 0;

$tdatatipo_cirugia[".strOriginalTableName"] = "tipo_cirugia";




$tdatatipo_cirugia[".showAddInPopup"] = true;

$tdatatipo_cirugia[".showEditInPopup"] = true;

$tdatatipo_cirugia[".showViewInPopup"] = true;

$tdatatipo_cirugia[".fieldsForRegister"] = array();

$tdatatipo_cirugia[".listAjax"] = false;

	$tdatatipo_cirugia[".audit"] = true;

	$tdatatipo_cirugia[".locking"] = false;

$tdatatipo_cirugia[".listIcons"] = true;
$tdatatipo_cirugia[".edit"] = true;
$tdatatipo_cirugia[".view"] = true;


$tdatatipo_cirugia[".printFriendly"] = true;

$tdatatipo_cirugia[".delete"] = true;

$tdatatipo_cirugia[".showSimpleSearchOptions"] = false;

$tdatatipo_cirugia[".showSearchPanel"] = true;

if (isMobile())
	$tdatatipo_cirugia[".isUseAjaxSuggest"] = false;
else 
	$tdatatipo_cirugia[".isUseAjaxSuggest"] = true;

$tdatatipo_cirugia[".rowHighlite"] = true;

// button handlers file names

$tdatatipo_cirugia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_cirugia[".isUseTimeForSearch"] = false;



$tdatatipo_cirugia[".useDetailsPreview"] = true;

$tdatatipo_cirugia[".allSearchFields"] = array();

$tdatatipo_cirugia[".allSearchFields"][] = "idtipo_cirugia";
$tdatatipo_cirugia[".allSearchFields"][] = "nombre";
$tdatatipo_cirugia[".allSearchFields"][] = "descripcion";
$tdatatipo_cirugia[".allSearchFields"][] = "precio";

$tdatatipo_cirugia[".googleLikeFields"][] = "idtipo_cirugia";
$tdatatipo_cirugia[".googleLikeFields"][] = "nombre";
$tdatatipo_cirugia[".googleLikeFields"][] = "descripcion";
$tdatatipo_cirugia[".googleLikeFields"][] = "precio";


$tdatatipo_cirugia[".advSearchFields"][] = "idtipo_cirugia";
$tdatatipo_cirugia[".advSearchFields"][] = "nombre";
$tdatatipo_cirugia[".advSearchFields"][] = "descripcion";
$tdatatipo_cirugia[".advSearchFields"][] = "precio";

$tdatatipo_cirugia[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
		


$tdatatipo_cirugia[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipo_cirugia[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_cirugia[".orderindexes"] = array();

$tdatatipo_cirugia[".sqlHead"] = "SELECT idtipo_cirugia,   nombre,   descripcion,   precio";
$tdatatipo_cirugia[".sqlFrom"] = "FROM tipo_cirugia";
$tdatatipo_cirugia[".sqlWhereExpr"] = "";
$tdatatipo_cirugia[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_cirugia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_cirugia[".arrGroupsPerPage"] = $arrGPP;

$tableKeystipo_cirugia = array();
$tableKeystipo_cirugia[] = "idtipo_cirugia";
$tableKeystipo_cirugia[] = "nombre";
$tdatatipo_cirugia[".Keys"] = $tableKeystipo_cirugia;

$tdatatipo_cirugia[".listFields"] = array();
$tdatatipo_cirugia[".listFields"][] = "idtipo_cirugia";
$tdatatipo_cirugia[".listFields"][] = "nombre";
$tdatatipo_cirugia[".listFields"][] = "descripcion";
$tdatatipo_cirugia[".listFields"][] = "precio";

$tdatatipo_cirugia[".viewFields"] = array();
$tdatatipo_cirugia[".viewFields"][] = "idtipo_cirugia";
$tdatatipo_cirugia[".viewFields"][] = "nombre";
$tdatatipo_cirugia[".viewFields"][] = "descripcion";
$tdatatipo_cirugia[".viewFields"][] = "precio";

$tdatatipo_cirugia[".addFields"] = array();
$tdatatipo_cirugia[".addFields"][] = "nombre";
$tdatatipo_cirugia[".addFields"][] = "descripcion";
$tdatatipo_cirugia[".addFields"][] = "precio";

$tdatatipo_cirugia[".inlineAddFields"] = array();

$tdatatipo_cirugia[".editFields"] = array();
$tdatatipo_cirugia[".editFields"][] = "nombre";
$tdatatipo_cirugia[".editFields"][] = "descripcion";
$tdatatipo_cirugia[".editFields"][] = "precio";

$tdatatipo_cirugia[".inlineEditFields"] = array();

$tdatatipo_cirugia[".exportFields"] = array();

$tdatatipo_cirugia[".printFields"] = array();
$tdatatipo_cirugia[".printFields"][] = "idtipo_cirugia";
$tdatatipo_cirugia[".printFields"][] = "nombre";
$tdatatipo_cirugia[".printFields"][] = "descripcion";
$tdatatipo_cirugia[".printFields"][] = "precio";

//	idtipo_cirugia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idtipo_cirugia";
	$fdata["GoodName"] = "idtipo_cirugia";
	$fdata["ownerTable"] = "tipo_cirugia";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "idtipo_cirugia"; 
		$fdata["FullName"] = "idtipo_cirugia";
	
		
		
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
	
		
		
	$tdatatipo_cirugia["idtipo_cirugia"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "tipo_cirugia";
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
	
		
		
	$tdatatipo_cirugia["nombre"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "tipo_cirugia";
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
			$edata["EditParams"].= " maxlength=45";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatipo_cirugia["descripcion"] = $fdata;
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "tipo_cirugia";
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
	
		
		
	$tdatatipo_cirugia["precio"] = $fdata;

	
$tables_data["tipo_cirugia"]=&$tdatatipo_cirugia;
$field_labels["tipo_cirugia"] = &$fieldLabelstipo_cirugia;
$fieldToolTips["tipo_cirugia"] = &$fieldToolTipstipo_cirugia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipo_cirugia"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="cirugia";
	$detailsParam["dDataSourceTable"]="cirugia";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="cirugia";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["tipo_cirugia"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["tipo_cirugia"][$dIndex]["masterKeys"][]="idtipo_cirugia";
		$detailsTablesData["tipo_cirugia"][$dIndex]["detailKeys"][]="idtipo_cirugia";

$dIndex = 2-1;
			$strOriginalDetailsTable="detalle_cirugia";
	$detailsParam["dDataSourceTable"]="detalle_cirugia";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="detalle_cirugia";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["tipo_cirugia"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["tipo_cirugia"][$dIndex]["masterKeys"][]="idtipo_cirugia";
		$detailsTablesData["tipo_cirugia"][$dIndex]["detailKeys"][]="idtipo_cirugia";

	
// tables which are master tables for current table (detail)
$masterTablesData["tipo_cirugia"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipo_cirugia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idtipo_cirugia,   nombre,   descripcion,   precio";
$proto0["m_strFrom"] = "FROM tipo_cirugia";
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
	"m_strName" => "idtipo_cirugia",
	"m_strTable" => "tipo_cirugia"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "tipo_cirugia"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "tipo_cirugia"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "tipo_cirugia"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "tipo_cirugia";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "idtipo_cirugia";
$proto14["m_columns"][] = "nombre";
$proto14["m_columns"][] = "descripcion";
$proto14["m_columns"][] = "precio";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_cirugia = createSqlQuery_tipo_cirugia();
				$tdatatipo_cirugia[".sqlquery"] = $queryData_tipo_cirugia;

$tableEvents["tipo_cirugia"] = new eventsBase;
$tdatatipo_cirugia[".hasEvents"] = false;

$cipherer = new RunnerCipherer("tipo_cirugia");

?>