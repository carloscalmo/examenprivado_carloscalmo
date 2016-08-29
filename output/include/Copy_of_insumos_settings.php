<?php
require_once(getabspath("classes/cipherer.php"));
$tdataCopy_of_insumos = array();
	$tdataCopy_of_insumos[".NumberOfChars"] = 80; 
	$tdataCopy_of_insumos[".ShortName"] = "Copy_of_insumos";
	$tdataCopy_of_insumos[".OwnerID"] = "";
	$tdataCopy_of_insumos[".OriginalTable"] = "insumos";

//	field labels
$fieldLabelsCopy_of_insumos = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCopy_of_insumos["Spanish"] = array();
	$fieldToolTipsCopy_of_insumos["Spanish"] = array();
	$fieldLabelsCopy_of_insumos["Spanish"]["id"] = "Código";
	$fieldToolTipsCopy_of_insumos["Spanish"]["id"] = "";
	$fieldLabelsCopy_of_insumos["Spanish"]["codigo"] = "Código de Barras";
	$fieldToolTipsCopy_of_insumos["Spanish"]["codigo"] = "";
	$fieldLabelsCopy_of_insumos["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsCopy_of_insumos["Spanish"]["nombre"] = "";
	$fieldLabelsCopy_of_insumos["Spanish"]["id1"] = "Id1";
	$fieldToolTipsCopy_of_insumos["Spanish"]["id1"] = "";
	$fieldLabelsCopy_of_insumos["Spanish"]["lotes"] = "Lotes";
	$fieldToolTipsCopy_of_insumos["Spanish"]["lotes"] = "";
	if (count($fieldToolTipsCopy_of_insumos["Spanish"]))
		$tdataCopy_of_insumos[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_insumos[".NCSearch"] = true;



$tdataCopy_of_insumos[".shortTableName"] = "Copy_of_insumos";
$tdataCopy_of_insumos[".nSecOptions"] = 0;
$tdataCopy_of_insumos[".recsPerRowList"] = 1;
$tdataCopy_of_insumos[".mainTableOwnerID"] = "";
$tdataCopy_of_insumos[".moveNext"] = 1;
$tdataCopy_of_insumos[".nType"] = 1;

$tdataCopy_of_insumos[".strOriginalTableName"] = "insumos";




$tdataCopy_of_insumos[".showAddInPopup"] = true;

$tdataCopy_of_insumos[".showEditInPopup"] = true;

$tdataCopy_of_insumos[".showViewInPopup"] = true;

$tdataCopy_of_insumos[".fieldsForRegister"] = array();

$tdataCopy_of_insumos[".listAjax"] = false;

	$tdataCopy_of_insumos[".audit"] = false;

	$tdataCopy_of_insumos[".locking"] = false;

$tdataCopy_of_insumos[".listIcons"] = true;
$tdataCopy_of_insumos[".edit"] = true;
$tdataCopy_of_insumos[".inlineEdit"] = true;
$tdataCopy_of_insumos[".inlineAdd"] = true;
$tdataCopy_of_insumos[".view"] = true;

$tdataCopy_of_insumos[".exportTo"] = true;

$tdataCopy_of_insumos[".printFriendly"] = true;

$tdataCopy_of_insumos[".delete"] = true;

$tdataCopy_of_insumos[".showSimpleSearchOptions"] = false;

$tdataCopy_of_insumos[".showSearchPanel"] = true;

if (isMobile())
	$tdataCopy_of_insumos[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_insumos[".isUseAjaxSuggest"] = true;

$tdataCopy_of_insumos[".rowHighlite"] = true;

// button handlers file names

$tdataCopy_of_insumos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_insumos[".isUseTimeForSearch"] = false;




$tdataCopy_of_insumos[".allSearchFields"] = array();

$tdataCopy_of_insumos[".allSearchFields"][] = "id";
$tdataCopy_of_insumos[".allSearchFields"][] = "codigo";
$tdataCopy_of_insumos[".allSearchFields"][] = "nombre";
$tdataCopy_of_insumos[".allSearchFields"][] = "id1";

$tdataCopy_of_insumos[".googleLikeFields"][] = "id";
$tdataCopy_of_insumos[".googleLikeFields"][] = "codigo";
$tdataCopy_of_insumos[".googleLikeFields"][] = "nombre";
$tdataCopy_of_insumos[".googleLikeFields"][] = "id1";


$tdataCopy_of_insumos[".advSearchFields"][] = "id";
$tdataCopy_of_insumos[".advSearchFields"][] = "codigo";
$tdataCopy_of_insumos[".advSearchFields"][] = "nombre";
$tdataCopy_of_insumos[".advSearchFields"][] = "id1";

$tdataCopy_of_insumos[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataCopy_of_insumos[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_insumos[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_insumos[".orderindexes"] = array();

$tdataCopy_of_insumos[".sqlHead"] = "SELECT insumos.id,  insumos.codigo,  insumos.nombre,  lotes.id AS id1";
$tdataCopy_of_insumos[".sqlFrom"] = "FROM insumos  INNER JOIN lotes ON insumos.id = lotes.insumo";
$tdataCopy_of_insumos[".sqlWhereExpr"] = "";
$tdataCopy_of_insumos[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_insumos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_insumos[".arrGroupsPerPage"] = $arrGPP;

$tableKeysCopy_of_insumos = array();
$tableKeysCopy_of_insumos[] = "id";
$tdataCopy_of_insumos[".Keys"] = $tableKeysCopy_of_insumos;

$tdataCopy_of_insumos[".listFields"] = array();
$tdataCopy_of_insumos[".listFields"][] = "id";
$tdataCopy_of_insumos[".listFields"][] = "codigo";
$tdataCopy_of_insumos[".listFields"][] = "nombre";
$tdataCopy_of_insumos[".listFields"][] = "id1";

$tdataCopy_of_insumos[".viewFields"] = array();
$tdataCopy_of_insumos[".viewFields"][] = "id";
$tdataCopy_of_insumos[".viewFields"][] = "codigo";
$tdataCopy_of_insumos[".viewFields"][] = "nombre";
$tdataCopy_of_insumos[".viewFields"][] = "id1";

$tdataCopy_of_insumos[".addFields"] = array();
$tdataCopy_of_insumos[".addFields"][] = "codigo";
$tdataCopy_of_insumos[".addFields"][] = "nombre";

$tdataCopy_of_insumos[".inlineAddFields"] = array();
$tdataCopy_of_insumos[".inlineAddFields"][] = "codigo";
$tdataCopy_of_insumos[".inlineAddFields"][] = "nombre";
$tdataCopy_of_insumos[".inlineAddFields"][] = "id1";

$tdataCopy_of_insumos[".editFields"] = array();
$tdataCopy_of_insumos[".editFields"][] = "codigo";
$tdataCopy_of_insumos[".editFields"][] = "nombre";

$tdataCopy_of_insumos[".inlineEditFields"] = array();
$tdataCopy_of_insumos[".inlineEditFields"][] = "codigo";
$tdataCopy_of_insumos[".inlineEditFields"][] = "nombre";
$tdataCopy_of_insumos[".inlineEditFields"][] = "id1";

$tdataCopy_of_insumos[".exportFields"] = array();
$tdataCopy_of_insumos[".exportFields"][] = "id";
$tdataCopy_of_insumos[".exportFields"][] = "codigo";
$tdataCopy_of_insumos[".exportFields"][] = "nombre";
$tdataCopy_of_insumos[".exportFields"][] = "id1";

$tdataCopy_of_insumos[".printFields"] = array();
$tdataCopy_of_insumos[".printFields"][] = "id";
$tdataCopy_of_insumos[".printFields"][] = "codigo";
$tdataCopy_of_insumos[".printFields"][] = "nombre";
$tdataCopy_of_insumos[".printFields"][] = "id1";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "insumos.id";
	
		
		
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
	
		
		
	$tdataCopy_of_insumos["id"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "Código de Barras"; 
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
	
		$fdata["strField"] = "codigo"; 
		$fdata["FullName"] = "insumos.codigo";
	
		
		
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
	
		
		
	$tdataCopy_of_insumos["codigo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "insumos";
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
		$fdata["FullName"] = "insumos.nombre";
	
		
		
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
	
		
		
	$tdataCopy_of_insumos["nombre"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Id1"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "lotes.id";
	
		
		
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
	
		
		
	$tdataCopy_of_insumos["id1"] = $fdata;

	
$tables_data["Copy of insumos"]=&$tdataCopy_of_insumos;
$field_labels["Copy_of_insumos"] = &$fieldLabelsCopy_of_insumos;
$fieldToolTips["Copy of insumos"] = &$fieldToolTipsCopy_of_insumos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of insumos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of insumos"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_insumos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "insumos.id,  insumos.codigo,  insumos.nombre,  lotes.id AS id1";
$proto0["m_strFrom"] = "FROM insumos  INNER JOIN lotes ON insumos.id = lotes.insumo";
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
	"m_strTable" => "insumos"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "insumos"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "insumos"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "lotes"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "insumos";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "codigo";
$proto14["m_columns"][] = "nombre";
$proto14["m_columns"][] = "contenido";
$proto14["m_columns"][] = "componente";
$proto14["m_columns"][] = "cantidad";
$proto14["m_columns"][] = "presentacion";
$proto14["m_columns"][] = "existencia_minima";
$proto14["m_columns"][] = "existencia_actual";
$proto14["m_columns"][] = "descripcion";
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
$proto18["m_strName"] = "lotes";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "codigo";
$proto18["m_columns"][] = "produccion";
$proto18["m_columns"][] = "caducidad";
$proto18["m_columns"][] = "expirado";
$proto18["m_columns"][] = "proveedor";
$proto18["m_columns"][] = "insumo";
$proto18["m_columns"][] = "cantidad";
$proto18["m_columns"][] = "precio";
$proto18["m_columns"][] = "costo";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "insumos.id = lotes.insumo";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "insumos"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "= lotes.insumo";
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
$queryData_Copy_of_insumos = createSqlQuery_Copy_of_insumos();
				$tdataCopy_of_insumos[".sqlquery"] = $queryData_Copy_of_insumos;

$tableEvents["Copy of insumos"] = new eventsBase;
$tdataCopy_of_insumos[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of insumos");

?>