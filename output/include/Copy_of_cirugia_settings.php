<?php
require_once(getabspath("classes/cipherer.php"));
$tdataCopy_of_cirugia = array();
	$tdataCopy_of_cirugia[".NumberOfChars"] = 80; 
	$tdataCopy_of_cirugia[".ShortName"] = "Copy_of_cirugia";
	$tdataCopy_of_cirugia[".OwnerID"] = "";
	$tdataCopy_of_cirugia[".OriginalTable"] = "cirugia";

//	field labels
$fieldLabelsCopy_of_cirugia = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCopy_of_cirugia["Spanish"] = array();
	$fieldToolTipsCopy_of_cirugia["Spanish"] = array();
	$fieldLabelsCopy_of_cirugia["Spanish"]["id"] = "Código";
	$fieldToolTipsCopy_of_cirugia["Spanish"]["id"] = "";
	$fieldLabelsCopy_of_cirugia["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsCopy_of_cirugia["Spanish"]["fecha"] = "";
	$fieldLabelsCopy_of_cirugia["Spanish"]["idtipo_cirugia"] = "Tipo de Cirugía";
	$fieldToolTipsCopy_of_cirugia["Spanish"]["idtipo_cirugia"] = "";
	$fieldLabelsCopy_of_cirugia["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsCopy_of_cirugia["Spanish"]["nombre"] = "";
	$fieldLabelsCopy_of_cirugia["Spanish"]["cirugia_id"] = "Cirugia Id";
	$fieldToolTipsCopy_of_cirugia["Spanish"]["cirugia_id"] = "";
	if (count($fieldToolTipsCopy_of_cirugia["Spanish"]))
		$tdataCopy_of_cirugia[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_cirugia[".NCSearch"] = true;



$tdataCopy_of_cirugia[".shortTableName"] = "Copy_of_cirugia";
$tdataCopy_of_cirugia[".nSecOptions"] = 0;
$tdataCopy_of_cirugia[".recsPerRowList"] = 1;
$tdataCopy_of_cirugia[".mainTableOwnerID"] = "";
$tdataCopy_of_cirugia[".moveNext"] = 1;
$tdataCopy_of_cirugia[".nType"] = 1;

$tdataCopy_of_cirugia[".strOriginalTableName"] = "cirugia";




$tdataCopy_of_cirugia[".showAddInPopup"] = true;

$tdataCopy_of_cirugia[".showEditInPopup"] = true;

$tdataCopy_of_cirugia[".showViewInPopup"] = true;

$tdataCopy_of_cirugia[".fieldsForRegister"] = array();

$tdataCopy_of_cirugia[".listAjax"] = false;

	$tdataCopy_of_cirugia[".audit"] = false;

	$tdataCopy_of_cirugia[".locking"] = false;

$tdataCopy_of_cirugia[".listIcons"] = true;
$tdataCopy_of_cirugia[".edit"] = true;
$tdataCopy_of_cirugia[".inlineEdit"] = true;
$tdataCopy_of_cirugia[".inlineAdd"] = true;
$tdataCopy_of_cirugia[".view"] = true;

$tdataCopy_of_cirugia[".exportTo"] = true;

$tdataCopy_of_cirugia[".printFriendly"] = true;

$tdataCopy_of_cirugia[".delete"] = true;

$tdataCopy_of_cirugia[".showSimpleSearchOptions"] = false;

$tdataCopy_of_cirugia[".showSearchPanel"] = true;

if (isMobile())
	$tdataCopy_of_cirugia[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_cirugia[".isUseAjaxSuggest"] = true;

$tdataCopy_of_cirugia[".rowHighlite"] = true;

// button handlers file names

$tdataCopy_of_cirugia[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_cirugia[".isUseTimeForSearch"] = false;




$tdataCopy_of_cirugia[".allSearchFields"] = array();

$tdataCopy_of_cirugia[".allSearchFields"][] = "id";
$tdataCopy_of_cirugia[".allSearchFields"][] = "fecha";
$tdataCopy_of_cirugia[".allSearchFields"][] = "idtipo_cirugia";
$tdataCopy_of_cirugia[".allSearchFields"][] = "nombre";

$tdataCopy_of_cirugia[".googleLikeFields"][] = "id";
$tdataCopy_of_cirugia[".googleLikeFields"][] = "fecha";
$tdataCopy_of_cirugia[".googleLikeFields"][] = "idtipo_cirugia";
$tdataCopy_of_cirugia[".googleLikeFields"][] = "nombre";


$tdataCopy_of_cirugia[".advSearchFields"][] = "id";
$tdataCopy_of_cirugia[".advSearchFields"][] = "fecha";
$tdataCopy_of_cirugia[".advSearchFields"][] = "idtipo_cirugia";
$tdataCopy_of_cirugia[".advSearchFields"][] = "nombre";

$tdataCopy_of_cirugia[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataCopy_of_cirugia[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_cirugia[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_cirugia[".orderindexes"] = array();

$tdataCopy_of_cirugia[".sqlHead"] = "SELECT cirugia.id,  cirugia.fecha,  cirugia.idtipo_cirugia,  tipo_cirugia.nombre";
$tdataCopy_of_cirugia[".sqlFrom"] = "FROM cirugia  INNER JOIN tipo_cirugia ON tipo_cirugia.idtipo_cirugia = cirugia.idtipo_cirugia";
$tdataCopy_of_cirugia[".sqlWhereExpr"] = "";
$tdataCopy_of_cirugia[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_cirugia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_cirugia[".arrGroupsPerPage"] = $arrGPP;

$tableKeysCopy_of_cirugia = array();
$tableKeysCopy_of_cirugia[] = "id";
$tdataCopy_of_cirugia[".Keys"] = $tableKeysCopy_of_cirugia;

$tdataCopy_of_cirugia[".listFields"] = array();
$tdataCopy_of_cirugia[".listFields"][] = "id";
$tdataCopy_of_cirugia[".listFields"][] = "fecha";
$tdataCopy_of_cirugia[".listFields"][] = "idtipo_cirugia";
$tdataCopy_of_cirugia[".listFields"][] = "nombre";

$tdataCopy_of_cirugia[".viewFields"] = array();
$tdataCopy_of_cirugia[".viewFields"][] = "id";
$tdataCopy_of_cirugia[".viewFields"][] = "fecha";
$tdataCopy_of_cirugia[".viewFields"][] = "idtipo_cirugia";
$tdataCopy_of_cirugia[".viewFields"][] = "nombre";

$tdataCopy_of_cirugia[".addFields"] = array();
$tdataCopy_of_cirugia[".addFields"][] = "fecha";
$tdataCopy_of_cirugia[".addFields"][] = "idtipo_cirugia";

$tdataCopy_of_cirugia[".inlineAddFields"] = array();
$tdataCopy_of_cirugia[".inlineAddFields"][] = "fecha";
$tdataCopy_of_cirugia[".inlineAddFields"][] = "idtipo_cirugia";
$tdataCopy_of_cirugia[".inlineAddFields"][] = "nombre";

$tdataCopy_of_cirugia[".editFields"] = array();
$tdataCopy_of_cirugia[".editFields"][] = "fecha";
$tdataCopy_of_cirugia[".editFields"][] = "idtipo_cirugia";

$tdataCopy_of_cirugia[".inlineEditFields"] = array();
$tdataCopy_of_cirugia[".inlineEditFields"][] = "fecha";
$tdataCopy_of_cirugia[".inlineEditFields"][] = "idtipo_cirugia";
$tdataCopy_of_cirugia[".inlineEditFields"][] = "nombre";

$tdataCopy_of_cirugia[".exportFields"] = array();
$tdataCopy_of_cirugia[".exportFields"][] = "id";
$tdataCopy_of_cirugia[".exportFields"][] = "fecha";
$tdataCopy_of_cirugia[".exportFields"][] = "idtipo_cirugia";
$tdataCopy_of_cirugia[".exportFields"][] = "nombre";

$tdataCopy_of_cirugia[".printFields"] = array();
$tdataCopy_of_cirugia[".printFields"][] = "id";
$tdataCopy_of_cirugia[".printFields"][] = "fecha";
$tdataCopy_of_cirugia[".printFields"][] = "idtipo_cirugia";
$tdataCopy_of_cirugia[".printFields"][] = "nombre";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cirugia";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "cirugia.id";
	
		
		
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
	
		
		
	$tdataCopy_of_cirugia["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "cirugia";
	$fdata["Label"] = "Fecha"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha"; 
		$fdata["FullName"] = "cirugia.fecha";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataCopy_of_cirugia["fecha"] = $fdata;
//	idtipo_cirugia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idtipo_cirugia";
	$fdata["GoodName"] = "idtipo_cirugia";
	$fdata["ownerTable"] = "cirugia";
	$fdata["Label"] = "Tipo de Cirugía"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "idtipo_cirugia"; 
		$fdata["FullName"] = "cirugia.idtipo_cirugia";
	
		
		
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
	
		
		
	$tdataCopy_of_cirugia["idtipo_cirugia"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "tipo_cirugia";
	$fdata["Label"] = "Nombre"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "tipo_cirugia.nombre";
	
		
		
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
	
		
		
	$tdataCopy_of_cirugia["nombre"] = $fdata;

	
$tables_data["Copy of cirugia"]=&$tdataCopy_of_cirugia;
$field_labels["Copy_of_cirugia"] = &$fieldLabelsCopy_of_cirugia;
$fieldToolTips["Copy of cirugia"] = &$fieldToolTipsCopy_of_cirugia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of cirugia"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of cirugia"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_cirugia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cirugia.id,  cirugia.fecha,  cirugia.idtipo_cirugia,  tipo_cirugia.nombre";
$proto0["m_strFrom"] = "FROM cirugia  INNER JOIN tipo_cirugia ON tipo_cirugia.idtipo_cirugia = cirugia.idtipo_cirugia";
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
	"m_strTable" => "cirugia"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "cirugia"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "idtipo_cirugia",
	"m_strTable" => "cirugia"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
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
$proto14["m_strName"] = "cirugia";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "fecha";
$proto14["m_columns"][] = "encargado";
$proto14["m_columns"][] = "ambiente_id";
$proto14["m_columns"][] = "idtipo_cirugia";
$proto14["m_columns"][] = "consulta_id";
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
												$proto17=array();
$proto17["m_link"] = "SQLL_INNERJOIN";
			$proto18=array();
$proto18["m_strName"] = "tipo_cirugia";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "idtipo_cirugia";
$proto18["m_columns"][] = "nombre";
$proto18["m_columns"][] = "descripcion";
$proto18["m_columns"][] = "precio";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "tipo_cirugia.idtipo_cirugia = cirugia.idtipo_cirugia";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idtipo_cirugia",
	"m_strTable" => "tipo_cirugia"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "= cirugia.idtipo_cirugia";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Copy_of_cirugia = createSqlQuery_Copy_of_cirugia();
				$tdataCopy_of_cirugia[".sqlquery"] = $queryData_Copy_of_cirugia;

$tableEvents["Copy of cirugia"] = new eventsBase;
$tdataCopy_of_cirugia[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of cirugia");

?>