<?php
require_once(getabspath("classes/cipherer.php"));
$tdataservicio = array();
	$tdataservicio[".NumberOfChars"] = 80; 
	$tdataservicio[".ShortName"] = "servicio";
	$tdataservicio[".OwnerID"] = "";
	$tdataservicio[".OriginalTable"] = "servicio";

//	field labels
$fieldLabelsservicio = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsservicio["Spanish"] = array();
	$fieldToolTipsservicio["Spanish"] = array();
	$fieldLabelsservicio["Spanish"]["id"] = "Código";
	$fieldToolTipsservicio["Spanish"]["id"] = "";
	$fieldLabelsservicio["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsservicio["Spanish"]["nombre"] = "";
	$fieldLabelsservicio["Spanish"]["descripcion"] = "Descripción";
	$fieldToolTipsservicio["Spanish"]["descripcion"] = "";
	$fieldLabelsservicio["Spanish"]["precio"] = "Precio";
	$fieldToolTipsservicio["Spanish"]["precio"] = "";
	$fieldLabelsservicio["Spanish"]["servicio_id"] = "Servicio Id";
	$fieldToolTipsservicio["Spanish"]["servicio_id"] = "";
	if (count($fieldToolTipsservicio["Spanish"]))
		$tdataservicio[".isUseToolTips"] = true;
}
	
	
	$tdataservicio[".NCSearch"] = true;



$tdataservicio[".shortTableName"] = "servicio";
$tdataservicio[".nSecOptions"] = 0;
$tdataservicio[".recsPerRowList"] = 1;
$tdataservicio[".mainTableOwnerID"] = "";
$tdataservicio[".moveNext"] = 1;
$tdataservicio[".nType"] = 0;

$tdataservicio[".strOriginalTableName"] = "servicio";




$tdataservicio[".showAddInPopup"] = true;

$tdataservicio[".showEditInPopup"] = true;

$tdataservicio[".showViewInPopup"] = true;

$tdataservicio[".fieldsForRegister"] = array();

$tdataservicio[".listAjax"] = false;

	$tdataservicio[".audit"] = true;

	$tdataservicio[".locking"] = false;

$tdataservicio[".listIcons"] = true;
$tdataservicio[".edit"] = true;
$tdataservicio[".view"] = true;


$tdataservicio[".printFriendly"] = true;

$tdataservicio[".delete"] = true;

$tdataservicio[".showSimpleSearchOptions"] = false;

$tdataservicio[".showSearchPanel"] = true;

if (isMobile())
	$tdataservicio[".isUseAjaxSuggest"] = false;
else 
	$tdataservicio[".isUseAjaxSuggest"] = true;

$tdataservicio[".rowHighlite"] = true;

// button handlers file names

$tdataservicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdataservicio[".isUseTimeForSearch"] = false;



$tdataservicio[".useDetailsPreview"] = true;

$tdataservicio[".allSearchFields"] = array();

$tdataservicio[".allSearchFields"][] = "id";
$tdataservicio[".allSearchFields"][] = "nombre";
$tdataservicio[".allSearchFields"][] = "descripcion";
$tdataservicio[".allSearchFields"][] = "precio";

$tdataservicio[".googleLikeFields"][] = "id";
$tdataservicio[".googleLikeFields"][] = "nombre";
$tdataservicio[".googleLikeFields"][] = "descripcion";
$tdataservicio[".googleLikeFields"][] = "precio";


$tdataservicio[".advSearchFields"][] = "id";
$tdataservicio[".advSearchFields"][] = "nombre";
$tdataservicio[".advSearchFields"][] = "descripcion";
$tdataservicio[".advSearchFields"][] = "precio";

$tdataservicio[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
		


$tdataservicio[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataservicio[".strOrderBy"] = $tstrOrderBy;

$tdataservicio[".orderindexes"] = array();

$tdataservicio[".sqlHead"] = "SELECT id,   nombre,   descripcion,   precio";
$tdataservicio[".sqlFrom"] = "FROM servicio";
$tdataservicio[".sqlWhereExpr"] = "";
$tdataservicio[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataservicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataservicio[".arrGroupsPerPage"] = $arrGPP;

$tableKeysservicio = array();
$tableKeysservicio[] = "id";
$tableKeysservicio[] = "nombre";
$tdataservicio[".Keys"] = $tableKeysservicio;

$tdataservicio[".listFields"] = array();
$tdataservicio[".listFields"][] = "id";
$tdataservicio[".listFields"][] = "nombre";
$tdataservicio[".listFields"][] = "descripcion";
$tdataservicio[".listFields"][] = "precio";

$tdataservicio[".viewFields"] = array();
$tdataservicio[".viewFields"][] = "id";
$tdataservicio[".viewFields"][] = "nombre";
$tdataservicio[".viewFields"][] = "descripcion";
$tdataservicio[".viewFields"][] = "precio";

$tdataservicio[".addFields"] = array();
$tdataservicio[".addFields"][] = "nombre";
$tdataservicio[".addFields"][] = "descripcion";
$tdataservicio[".addFields"][] = "precio";

$tdataservicio[".inlineAddFields"] = array();

$tdataservicio[".editFields"] = array();
$tdataservicio[".editFields"][] = "nombre";
$tdataservicio[".editFields"][] = "descripcion";
$tdataservicio[".editFields"][] = "precio";

$tdataservicio[".inlineEditFields"] = array();

$tdataservicio[".exportFields"] = array();

$tdataservicio[".printFields"] = array();
$tdataservicio[".printFields"][] = "id";
$tdataservicio[".printFields"][] = "nombre";
$tdataservicio[".printFields"][] = "descripcion";
$tdataservicio[".printFields"][] = "precio";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "servicio";
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
	
		
		
	$tdataservicio["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "servicio";
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
	
		
		
	$tdataservicio["nombre"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = "Descripción"; 
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
	
		
		
	$tdataservicio["descripcion"] = $fdata;
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "servicio";
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
	
		
		
	$tdataservicio["precio"] = $fdata;

	
$tables_data["servicio"]=&$tdataservicio;
$field_labels["servicio"] = &$fieldLabelsservicio;
$fieldToolTips["servicio"] = &$fieldToolTipsservicio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["servicio"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="detalle_servicio";
	$detailsParam["dDataSourceTable"]="detalle_servicio";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="detalle_servicio";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["servicio"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["servicio"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["servicio"][$dIndex]["detailKeys"][]="servicio_id";

$dIndex = 2-1;
			$strOriginalDetailsTable="solicitud_servicio";
	$detailsParam["dDataSourceTable"]="solicitud_servicio";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="solicitud_servicio";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["servicio"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["servicio"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["servicio"][$dIndex]["detailKeys"][]="servicio_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["servicio"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_servicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nombre,   descripcion,   precio";
$proto0["m_strFrom"] = "FROM servicio";
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
	"m_strTable" => "servicio"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "servicio"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "servicio"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "servicio"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "servicio";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
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
$queryData_servicio = createSqlQuery_servicio();
				$tdataservicio[".sqlquery"] = $queryData_servicio;

$tableEvents["servicio"] = new eventsBase;
$tdataservicio[".hasEvents"] = false;

$cipherer = new RunnerCipherer("servicio");

?>