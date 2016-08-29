<?php
require_once(getabspath("classes/cipherer.php"));
$tdataCopy_of_departamento = array();
	$tdataCopy_of_departamento[".NumberOfChars"] = 80; 
	$tdataCopy_of_departamento[".ShortName"] = "Copy_of_departamento";
	$tdataCopy_of_departamento[".OwnerID"] = "";
	$tdataCopy_of_departamento[".OriginalTable"] = "departamento";

//	field labels
$fieldLabelsCopy_of_departamento = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCopy_of_departamento["Spanish"] = array();
	$fieldToolTipsCopy_of_departamento["Spanish"] = array();
	$fieldLabelsCopy_of_departamento["Spanish"]["id"] = "Código";
	$fieldToolTipsCopy_of_departamento["Spanish"]["id"] = "";
	$fieldLabelsCopy_of_departamento["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsCopy_of_departamento["Spanish"]["nombre"] = "";
	$fieldLabelsCopy_of_departamento["Spanish"]["id1"] = "Id1";
	$fieldToolTipsCopy_of_departamento["Spanish"]["id1"] = "";
	$fieldLabelsCopy_of_departamento["Spanish"]["nombre1"] = "Nombre1";
	$fieldToolTipsCopy_of_departamento["Spanish"]["nombre1"] = "";
	$fieldLabelsCopy_of_departamento["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsCopy_of_departamento["Spanish"]["departamento"] = "";
	$fieldLabelsCopy_of_departamento["Spanish"]["municipio_id"] = "Municipio Id";
	$fieldToolTipsCopy_of_departamento["Spanish"]["municipio_id"] = "";
	if (count($fieldToolTipsCopy_of_departamento["Spanish"]))
		$tdataCopy_of_departamento[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_departamento[".NCSearch"] = true;



$tdataCopy_of_departamento[".shortTableName"] = "Copy_of_departamento";
$tdataCopy_of_departamento[".nSecOptions"] = 0;
$tdataCopy_of_departamento[".recsPerRowList"] = 1;
$tdataCopy_of_departamento[".mainTableOwnerID"] = "";
$tdataCopy_of_departamento[".moveNext"] = 1;
$tdataCopy_of_departamento[".nType"] = 1;

$tdataCopy_of_departamento[".strOriginalTableName"] = "departamento";




$tdataCopy_of_departamento[".showAddInPopup"] = true;

$tdataCopy_of_departamento[".showEditInPopup"] = true;

$tdataCopy_of_departamento[".showViewInPopup"] = true;

$tdataCopy_of_departamento[".fieldsForRegister"] = array();

$tdataCopy_of_departamento[".listAjax"] = false;

	$tdataCopy_of_departamento[".audit"] = false;

	$tdataCopy_of_departamento[".locking"] = false;

$tdataCopy_of_departamento[".listIcons"] = true;
$tdataCopy_of_departamento[".edit"] = true;
$tdataCopy_of_departamento[".inlineEdit"] = true;
$tdataCopy_of_departamento[".inlineAdd"] = true;
$tdataCopy_of_departamento[".view"] = true;

$tdataCopy_of_departamento[".exportTo"] = true;

$tdataCopy_of_departamento[".printFriendly"] = true;

$tdataCopy_of_departamento[".delete"] = true;

$tdataCopy_of_departamento[".showSimpleSearchOptions"] = false;

$tdataCopy_of_departamento[".showSearchPanel"] = true;

if (isMobile())
	$tdataCopy_of_departamento[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_departamento[".isUseAjaxSuggest"] = true;

$tdataCopy_of_departamento[".rowHighlite"] = true;

// button handlers file names

$tdataCopy_of_departamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_departamento[".isUseTimeForSearch"] = false;




$tdataCopy_of_departamento[".allSearchFields"] = array();

$tdataCopy_of_departamento[".allSearchFields"][] = "id";
$tdataCopy_of_departamento[".allSearchFields"][] = "nombre";
$tdataCopy_of_departamento[".allSearchFields"][] = "id1";
$tdataCopy_of_departamento[".allSearchFields"][] = "nombre1";
$tdataCopy_of_departamento[".allSearchFields"][] = "departamento";

$tdataCopy_of_departamento[".googleLikeFields"][] = "id";
$tdataCopy_of_departamento[".googleLikeFields"][] = "nombre";
$tdataCopy_of_departamento[".googleLikeFields"][] = "id1";
$tdataCopy_of_departamento[".googleLikeFields"][] = "nombre1";
$tdataCopy_of_departamento[".googleLikeFields"][] = "departamento";


$tdataCopy_of_departamento[".advSearchFields"][] = "id";
$tdataCopy_of_departamento[".advSearchFields"][] = "nombre";
$tdataCopy_of_departamento[".advSearchFields"][] = "id1";
$tdataCopy_of_departamento[".advSearchFields"][] = "nombre1";
$tdataCopy_of_departamento[".advSearchFields"][] = "departamento";

$tdataCopy_of_departamento[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataCopy_of_departamento[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_departamento[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_departamento[".orderindexes"] = array();

$tdataCopy_of_departamento[".sqlHead"] = "SELECT departamento.id,  departamento.nombre,  municipio.id AS id1,  municipio.nombre AS nombre1,  municipio.departamento";
$tdataCopy_of_departamento[".sqlFrom"] = "FROM departamento  INNER JOIN municipio ON departamento.id = municipio.departamento";
$tdataCopy_of_departamento[".sqlWhereExpr"] = "";
$tdataCopy_of_departamento[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_departamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_departamento[".arrGroupsPerPage"] = $arrGPP;

$tableKeysCopy_of_departamento = array();
$tableKeysCopy_of_departamento[] = "id";
$tdataCopy_of_departamento[".Keys"] = $tableKeysCopy_of_departamento;

$tdataCopy_of_departamento[".listFields"] = array();
$tdataCopy_of_departamento[".listFields"][] = "id";
$tdataCopy_of_departamento[".listFields"][] = "nombre";
$tdataCopy_of_departamento[".listFields"][] = "id1";
$tdataCopy_of_departamento[".listFields"][] = "nombre1";
$tdataCopy_of_departamento[".listFields"][] = "departamento";

$tdataCopy_of_departamento[".viewFields"] = array();
$tdataCopy_of_departamento[".viewFields"][] = "id";
$tdataCopy_of_departamento[".viewFields"][] = "nombre";
$tdataCopy_of_departamento[".viewFields"][] = "id1";
$tdataCopy_of_departamento[".viewFields"][] = "nombre1";
$tdataCopy_of_departamento[".viewFields"][] = "departamento";

$tdataCopy_of_departamento[".addFields"] = array();
$tdataCopy_of_departamento[".addFields"][] = "nombre";

$tdataCopy_of_departamento[".inlineAddFields"] = array();
$tdataCopy_of_departamento[".inlineAddFields"][] = "nombre";
$tdataCopy_of_departamento[".inlineAddFields"][] = "nombre1";
$tdataCopy_of_departamento[".inlineAddFields"][] = "departamento";

$tdataCopy_of_departamento[".editFields"] = array();
$tdataCopy_of_departamento[".editFields"][] = "nombre";

$tdataCopy_of_departamento[".inlineEditFields"] = array();
$tdataCopy_of_departamento[".inlineEditFields"][] = "nombre";
$tdataCopy_of_departamento[".inlineEditFields"][] = "id1";
$tdataCopy_of_departamento[".inlineEditFields"][] = "nombre1";
$tdataCopy_of_departamento[".inlineEditFields"][] = "departamento";

$tdataCopy_of_departamento[".exportFields"] = array();
$tdataCopy_of_departamento[".exportFields"][] = "id";
$tdataCopy_of_departamento[".exportFields"][] = "nombre";
$tdataCopy_of_departamento[".exportFields"][] = "id1";
$tdataCopy_of_departamento[".exportFields"][] = "nombre1";
$tdataCopy_of_departamento[".exportFields"][] = "departamento";

$tdataCopy_of_departamento[".printFields"] = array();
$tdataCopy_of_departamento[".printFields"][] = "id";
$tdataCopy_of_departamento[".printFields"][] = "nombre";
$tdataCopy_of_departamento[".printFields"][] = "id1";
$tdataCopy_of_departamento[".printFields"][] = "nombre1";
$tdataCopy_of_departamento[".printFields"][] = "departamento";

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
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "departamento.id";
	
		
		
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
	
		
		
	$tdataCopy_of_departamento["id"] = $fdata;
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
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "departamento.nombre";
	
		
		
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
	
		
		
	$tdataCopy_of_departamento["nombre"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = "Id1"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "municipio.id";
	
		
		
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
	
		
		
	$tdataCopy_of_departamento["id1"] = $fdata;
//	nombre1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre1";
	$fdata["GoodName"] = "nombre1";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = "Nombre1"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "municipio.nombre";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataCopy_of_departamento["nombre1"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = "Departamento"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "departamento"; 
		$fdata["FullName"] = "municipio.departamento";
	
		
		
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
	
		
		
	$tdataCopy_of_departamento["departamento"] = $fdata;

	
$tables_data["Copy of departamento"]=&$tdataCopy_of_departamento;
$field_labels["Copy_of_departamento"] = &$fieldLabelsCopy_of_departamento;
$fieldToolTips["Copy of departamento"] = &$fieldToolTipsCopy_of_departamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of departamento"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of departamento"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_departamento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "departamento.id,  departamento.nombre,  municipio.id AS id1,  municipio.nombre AS nombre1,  municipio.departamento";
$proto0["m_strFrom"] = "FROM departamento  INNER JOIN municipio ON departamento.id = municipio.departamento";
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
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "municipio"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "municipio"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "nombre1";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "municipio"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "departamento";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "nombre";
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
												$proto19=array();
$proto19["m_link"] = "SQLL_INNERJOIN";
			$proto20=array();
$proto20["m_strName"] = "municipio";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "nombre";
$proto20["m_columns"][] = "departamento";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "departamento.id = municipio.departamento";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "departamento"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= municipio.departamento";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Copy_of_departamento = createSqlQuery_Copy_of_departamento();
					$tdataCopy_of_departamento[".sqlquery"] = $queryData_Copy_of_departamento;

$tableEvents["Copy of departamento"] = new eventsBase;
$tdataCopy_of_departamento[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of departamento");

?>