<?php
require_once(getabspath("classes/cipherer.php"));
$tdatamunicipio_departamento = array();
	$tdatamunicipio_departamento[".NumberOfChars"] = 80; 
	$tdatamunicipio_departamento[".ShortName"] = "municipio_departamento";
	$tdatamunicipio_departamento[".OwnerID"] = "";
	$tdatamunicipio_departamento[".OriginalTable"] = "municipio";

//	field labels
$fieldLabelsmunicipio_departamento = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmunicipio_departamento["Spanish"] = array();
	$fieldToolTipsmunicipio_departamento["Spanish"] = array();
	$fieldLabelsmunicipio_departamento["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsmunicipio_departamento["Spanish"]["departamento"] = "";
	$fieldLabelsmunicipio_departamento["Spanish"]["Municipio"] = "Municipio";
	$fieldToolTipsmunicipio_departamento["Spanish"]["Municipio"] = "";
	if (count($fieldToolTipsmunicipio_departamento["Spanish"]))
		$tdatamunicipio_departamento[".isUseToolTips"] = true;
}
	
	
	$tdatamunicipio_departamento[".NCSearch"] = true;



$tdatamunicipio_departamento[".shortTableName"] = "municipio_departamento";
$tdatamunicipio_departamento[".nSecOptions"] = 0;
$tdatamunicipio_departamento[".recsPerRowList"] = 1;
$tdatamunicipio_departamento[".mainTableOwnerID"] = "";
$tdatamunicipio_departamento[".moveNext"] = 1;
$tdatamunicipio_departamento[".nType"] = 1;

$tdatamunicipio_departamento[".strOriginalTableName"] = "municipio";




$tdatamunicipio_departamento[".showAddInPopup"] = true;

$tdatamunicipio_departamento[".showEditInPopup"] = true;

$tdatamunicipio_departamento[".showViewInPopup"] = true;

$tdatamunicipio_departamento[".fieldsForRegister"] = array();

$tdatamunicipio_departamento[".listAjax"] = false;

	$tdatamunicipio_departamento[".audit"] = false;

	$tdatamunicipio_departamento[".locking"] = false;

$tdatamunicipio_departamento[".listIcons"] = true;
$tdatamunicipio_departamento[".edit"] = true;
$tdatamunicipio_departamento[".inlineEdit"] = true;
$tdatamunicipio_departamento[".inlineAdd"] = true;
$tdatamunicipio_departamento[".view"] = true;

$tdatamunicipio_departamento[".exportTo"] = true;

$tdatamunicipio_departamento[".printFriendly"] = true;

$tdatamunicipio_departamento[".delete"] = true;

$tdatamunicipio_departamento[".showSimpleSearchOptions"] = false;

$tdatamunicipio_departamento[".showSearchPanel"] = true;

if (isMobile())
	$tdatamunicipio_departamento[".isUseAjaxSuggest"] = false;
else 
	$tdatamunicipio_departamento[".isUseAjaxSuggest"] = true;

$tdatamunicipio_departamento[".rowHighlite"] = true;

// button handlers file names

$tdatamunicipio_departamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamunicipio_departamento[".isUseTimeForSearch"] = false;




$tdatamunicipio_departamento[".allSearchFields"] = array();

$tdatamunicipio_departamento[".allSearchFields"][] = "departamento";
$tdatamunicipio_departamento[".allSearchFields"][] = "Municipio";

$tdatamunicipio_departamento[".googleLikeFields"][] = "departamento";
$tdatamunicipio_departamento[".googleLikeFields"][] = "Municipio";


$tdatamunicipio_departamento[".advSearchFields"][] = "departamento";
$tdatamunicipio_departamento[".advSearchFields"][] = "Municipio";

$tdatamunicipio_departamento[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatamunicipio_departamento[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamunicipio_departamento[".strOrderBy"] = $tstrOrderBy;

$tdatamunicipio_departamento[".orderindexes"] = array();

$tdatamunicipio_departamento[".sqlHead"] = "SELECT departamento.nombre as 'Departamento',  municipio.nombre as 'Municipio'";
$tdatamunicipio_departamento[".sqlFrom"] = "FROM municipio  INNER JOIN departamento ON departamento.id = municipio.departamento";
$tdatamunicipio_departamento[".sqlWhereExpr"] = "";
$tdatamunicipio_departamento[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamunicipio_departamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamunicipio_departamento[".arrGroupsPerPage"] = $arrGPP;

$tableKeysmunicipio_departamento = array();
$tdatamunicipio_departamento[".Keys"] = $tableKeysmunicipio_departamento;

$tdatamunicipio_departamento[".listFields"] = array();
$tdatamunicipio_departamento[".listFields"][] = "departamento";
$tdatamunicipio_departamento[".listFields"][] = "Municipio";

$tdatamunicipio_departamento[".viewFields"] = array();
$tdatamunicipio_departamento[".viewFields"][] = "departamento";
$tdatamunicipio_departamento[".viewFields"][] = "Municipio";

$tdatamunicipio_departamento[".addFields"] = array();
$tdatamunicipio_departamento[".addFields"][] = "departamento";

$tdatamunicipio_departamento[".inlineAddFields"] = array();
$tdatamunicipio_departamento[".inlineAddFields"][] = "departamento";
$tdatamunicipio_departamento[".inlineAddFields"][] = "Municipio";

$tdatamunicipio_departamento[".editFields"] = array();
$tdatamunicipio_departamento[".editFields"][] = "departamento";

$tdatamunicipio_departamento[".inlineEditFields"] = array();
$tdatamunicipio_departamento[".inlineEditFields"][] = "departamento";
$tdatamunicipio_departamento[".inlineEditFields"][] = "Municipio";

$tdatamunicipio_departamento[".exportFields"] = array();
$tdatamunicipio_departamento[".exportFields"][] = "departamento";
$tdatamunicipio_departamento[".exportFields"][] = "Municipio";

$tdatamunicipio_departamento[".printFields"] = array();
$tdatamunicipio_departamento[".printFields"][] = "departamento";
$tdatamunicipio_departamento[".printFields"][] = "Municipio";

//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "departamento";
	$fdata["Label"] = "Departamento"; 
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamunicipio_departamento["departamento"] = $fdata;
//	Municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Municipio";
	$fdata["GoodName"] = "Municipio";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = "Municipio"; 
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
	
		
		
	$tdatamunicipio_departamento["Municipio"] = $fdata;

	
$tables_data["municipio_departamento"]=&$tdatamunicipio_departamento;
$field_labels["municipio_departamento"] = &$fieldLabelsmunicipio_departamento;
$fieldToolTips["municipio_departamento"] = &$fieldToolTipsmunicipio_departamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["municipio_departamento"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["municipio_departamento"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_municipio_departamento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "departamento.nombre as 'Departamento',  municipio.nombre as 'Municipio'";
$proto0["m_strFrom"] = "FROM municipio  INNER JOIN departamento ON departamento.id = municipio.departamento";
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
	"m_strName" => "nombre",
	"m_strTable" => "departamento"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "'Departamento'";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "municipio"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "'Municipio'";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "municipio";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "nombre";
$proto10["m_columns"][] = "departamento";
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
												$proto13=array();
$proto13["m_link"] = "SQLL_INNERJOIN";
			$proto14=array();
$proto14["m_strName"] = "departamento";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "nombre";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "departamento.id = municipio.departamento";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "departamento"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "= municipio.departamento";
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
$queryData_municipio_departamento = createSqlQuery_municipio_departamento();
		$tdatamunicipio_departamento[".sqlquery"] = $queryData_municipio_departamento;

$tableEvents["municipio_departamento"] = new eventsBase;
$tdatamunicipio_departamento[".hasEvents"] = false;

$cipherer = new RunnerCipherer("municipio_departamento");

?>