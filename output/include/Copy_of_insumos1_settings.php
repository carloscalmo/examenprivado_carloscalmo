<?php
require_once(getabspath("classes/cipherer.php"));
$tdataCopy_of_insumos1 = array();
	$tdataCopy_of_insumos1[".NumberOfChars"] = 80; 
	$tdataCopy_of_insumos1[".ShortName"] = "Copy_of_insumos1";
	$tdataCopy_of_insumos1[".OwnerID"] = "";
	$tdataCopy_of_insumos1[".OriginalTable"] = "insumos";

//	field labels
$fieldLabelsCopy_of_insumos1 = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCopy_of_insumos1["Spanish"] = array();
	$fieldToolTipsCopy_of_insumos1["Spanish"] = array();
	$fieldLabelsCopy_of_insumos1["Spanish"]["id"] = "Código";
	$fieldToolTipsCopy_of_insumos1["Spanish"]["id"] = "";
	$fieldLabelsCopy_of_insumos1["Spanish"]["codigo"] = "Código de Barras";
	$fieldToolTipsCopy_of_insumos1["Spanish"]["codigo"] = "";
	$fieldLabelsCopy_of_insumos1["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsCopy_of_insumos1["Spanish"]["nombre"] = "";
	$fieldLabelsCopy_of_insumos1["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsCopy_of_insumos1["Spanish"]["cantidad"] = "";
	$fieldLabelsCopy_of_insumos1["Spanish"]["insumo"] = "Insumo";
	$fieldToolTipsCopy_of_insumos1["Spanish"]["insumo"] = "";
	$fieldLabelsCopy_of_insumos1["Spanish"]["lotes"] = "Lotes";
	$fieldToolTipsCopy_of_insumos1["Spanish"]["lotes"] = "";
	if (count($fieldToolTipsCopy_of_insumos1["Spanish"]))
		$tdataCopy_of_insumos1[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_insumos1[".NCSearch"] = true;



$tdataCopy_of_insumos1[".shortTableName"] = "Copy_of_insumos1";
$tdataCopy_of_insumos1[".nSecOptions"] = 0;
$tdataCopy_of_insumos1[".recsPerRowList"] = 1;
$tdataCopy_of_insumos1[".mainTableOwnerID"] = "";
$tdataCopy_of_insumos1[".moveNext"] = 1;
$tdataCopy_of_insumos1[".nType"] = 1;

$tdataCopy_of_insumos1[".strOriginalTableName"] = "insumos";




$tdataCopy_of_insumos1[".showAddInPopup"] = true;

$tdataCopy_of_insumos1[".showEditInPopup"] = true;

$tdataCopy_of_insumos1[".showViewInPopup"] = true;

$tdataCopy_of_insumos1[".fieldsForRegister"] = array();

$tdataCopy_of_insumos1[".listAjax"] = false;

	$tdataCopy_of_insumos1[".audit"] = false;

	$tdataCopy_of_insumos1[".locking"] = false;

$tdataCopy_of_insumos1[".listIcons"] = true;
$tdataCopy_of_insumos1[".edit"] = true;
$tdataCopy_of_insumos1[".inlineEdit"] = true;
$tdataCopy_of_insumos1[".inlineAdd"] = true;
$tdataCopy_of_insumos1[".view"] = true;

$tdataCopy_of_insumos1[".exportTo"] = true;

$tdataCopy_of_insumos1[".printFriendly"] = true;

$tdataCopy_of_insumos1[".delete"] = true;

$tdataCopy_of_insumos1[".showSimpleSearchOptions"] = false;

$tdataCopy_of_insumos1[".showSearchPanel"] = true;

if (isMobile())
	$tdataCopy_of_insumos1[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_insumos1[".isUseAjaxSuggest"] = true;

$tdataCopy_of_insumos1[".rowHighlite"] = true;

// button handlers file names

$tdataCopy_of_insumos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_insumos1[".isUseTimeForSearch"] = false;




$tdataCopy_of_insumos1[".allSearchFields"] = array();

$tdataCopy_of_insumos1[".allSearchFields"][] = "id";
$tdataCopy_of_insumos1[".allSearchFields"][] = "codigo";
$tdataCopy_of_insumos1[".allSearchFields"][] = "insumo";
$tdataCopy_of_insumos1[".allSearchFields"][] = "cantidad";
$tdataCopy_of_insumos1[".allSearchFields"][] = "nombre";

$tdataCopy_of_insumos1[".googleLikeFields"][] = "id";
$tdataCopy_of_insumos1[".googleLikeFields"][] = "codigo";
$tdataCopy_of_insumos1[".googleLikeFields"][] = "insumo";
$tdataCopy_of_insumos1[".googleLikeFields"][] = "cantidad";
$tdataCopy_of_insumos1[".googleLikeFields"][] = "nombre";


$tdataCopy_of_insumos1[".advSearchFields"][] = "id";
$tdataCopy_of_insumos1[".advSearchFields"][] = "codigo";
$tdataCopy_of_insumos1[".advSearchFields"][] = "insumo";
$tdataCopy_of_insumos1[".advSearchFields"][] = "cantidad";
$tdataCopy_of_insumos1[".advSearchFields"][] = "nombre";

$tdataCopy_of_insumos1[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataCopy_of_insumos1[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_insumos1[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_insumos1[".orderindexes"] = array();

$tdataCopy_of_insumos1[".sqlHead"] = "SELECT lotes.id,  lotes.codigo,  lotes.insumo,  lotes.cantidad,  insumos.nombre";
$tdataCopy_of_insumos1[".sqlFrom"] = "FROM insumos  INNER JOIN lotes ON insumos.id = lotes.insumo";
$tdataCopy_of_insumos1[".sqlWhereExpr"] = "";
$tdataCopy_of_insumos1[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_insumos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_insumos1[".arrGroupsPerPage"] = $arrGPP;

$tableKeysCopy_of_insumos1 = array();
$tableKeysCopy_of_insumos1[] = "id";
$tdataCopy_of_insumos1[".Keys"] = $tableKeysCopy_of_insumos1;

$tdataCopy_of_insumos1[".listFields"] = array();
$tdataCopy_of_insumos1[".listFields"][] = "id";
$tdataCopy_of_insumos1[".listFields"][] = "codigo";
$tdataCopy_of_insumos1[".listFields"][] = "insumo";
$tdataCopy_of_insumos1[".listFields"][] = "cantidad";
$tdataCopy_of_insumos1[".listFields"][] = "nombre";

$tdataCopy_of_insumos1[".viewFields"] = array();
$tdataCopy_of_insumos1[".viewFields"][] = "id";
$tdataCopy_of_insumos1[".viewFields"][] = "codigo";
$tdataCopy_of_insumos1[".viewFields"][] = "insumo";
$tdataCopy_of_insumos1[".viewFields"][] = "cantidad";
$tdataCopy_of_insumos1[".viewFields"][] = "nombre";

$tdataCopy_of_insumos1[".addFields"] = array();
$tdataCopy_of_insumos1[".addFields"][] = "codigo";
$tdataCopy_of_insumos1[".addFields"][] = "cantidad";
$tdataCopy_of_insumos1[".addFields"][] = "nombre";

$tdataCopy_of_insumos1[".inlineAddFields"] = array();
$tdataCopy_of_insumos1[".inlineAddFields"][] = "codigo";
$tdataCopy_of_insumos1[".inlineAddFields"][] = "insumo";
$tdataCopy_of_insumos1[".inlineAddFields"][] = "cantidad";
$tdataCopy_of_insumos1[".inlineAddFields"][] = "nombre";

$tdataCopy_of_insumos1[".editFields"] = array();
$tdataCopy_of_insumos1[".editFields"][] = "codigo";
$tdataCopy_of_insumos1[".editFields"][] = "cantidad";
$tdataCopy_of_insumos1[".editFields"][] = "nombre";

$tdataCopy_of_insumos1[".inlineEditFields"] = array();
$tdataCopy_of_insumos1[".inlineEditFields"][] = "codigo";
$tdataCopy_of_insumos1[".inlineEditFields"][] = "insumo";
$tdataCopy_of_insumos1[".inlineEditFields"][] = "cantidad";
$tdataCopy_of_insumos1[".inlineEditFields"][] = "nombre";

$tdataCopy_of_insumos1[".exportFields"] = array();
$tdataCopy_of_insumos1[".exportFields"][] = "id";
$tdataCopy_of_insumos1[".exportFields"][] = "codigo";
$tdataCopy_of_insumos1[".exportFields"][] = "insumo";
$tdataCopy_of_insumos1[".exportFields"][] = "cantidad";
$tdataCopy_of_insumos1[".exportFields"][] = "nombre";

$tdataCopy_of_insumos1[".printFields"] = array();
$tdataCopy_of_insumos1[".printFields"][] = "id";
$tdataCopy_of_insumos1[".printFields"][] = "codigo";
$tdataCopy_of_insumos1[".printFields"][] = "insumo";
$tdataCopy_of_insumos1[".printFields"][] = "cantidad";
$tdataCopy_of_insumos1[".printFields"][] = "nombre";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
		
		
	$tdataCopy_of_insumos1["id"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "lotes";
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
		$fdata["FullName"] = "lotes.codigo";
	
		
		
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
	
		
		
	$tdataCopy_of_insumos1["codigo"] = $fdata;
//	insumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "insumo";
	$fdata["GoodName"] = "insumo";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Insumo"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "insumo"; 
		$fdata["FullName"] = "lotes.insumo";
	
		
		
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
	
		
		
	$tdataCopy_of_insumos1["insumo"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Cantidad"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cantidad"; 
		$fdata["FullName"] = "lotes.cantidad";
	
		
		
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
	
		
		
	$tdataCopy_of_insumos1["cantidad"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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
	
		
		
	$tdataCopy_of_insumos1["nombre"] = $fdata;

	
$tables_data["Copy of insumos1"]=&$tdataCopy_of_insumos1;
$field_labels["Copy_of_insumos1"] = &$fieldLabelsCopy_of_insumos1;
$fieldToolTips["Copy of insumos1"] = &$fieldToolTipsCopy_of_insumos1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of insumos1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of insumos1"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_insumos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "lotes.id,  lotes.codigo,  lotes.insumo,  lotes.cantidad,  insumos.nombre";
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
	"m_strTable" => "lotes"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "lotes"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "insumo",
	"m_strTable" => "lotes"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "lotes"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "insumos"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "insumos";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "codigo";
$proto16["m_columns"][] = "nombre";
$proto16["m_columns"][] = "contenido";
$proto16["m_columns"][] = "componente";
$proto16["m_columns"][] = "cantidad";
$proto16["m_columns"][] = "presentacion";
$proto16["m_columns"][] = "existencia_minima";
$proto16["m_columns"][] = "existencia_actual";
$proto16["m_columns"][] = "descripcion";
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
$proto20["m_strName"] = "lotes";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "codigo";
$proto20["m_columns"][] = "produccion";
$proto20["m_columns"][] = "caducidad";
$proto20["m_columns"][] = "expirado";
$proto20["m_columns"][] = "proveedor";
$proto20["m_columns"][] = "insumo";
$proto20["m_columns"][] = "cantidad";
$proto20["m_columns"][] = "precio";
$proto20["m_columns"][] = "costo";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "insumos.id = lotes.insumo";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "insumos"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= lotes.insumo";
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
$queryData_Copy_of_insumos1 = createSqlQuery_Copy_of_insumos1();
					$tdataCopy_of_insumos1[".sqlquery"] = $queryData_Copy_of_insumos1;

$tableEvents["Copy of insumos1"] = new eventsBase;
$tdataCopy_of_insumos1[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of insumos1");

?>