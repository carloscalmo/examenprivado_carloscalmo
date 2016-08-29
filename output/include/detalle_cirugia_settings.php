<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadetalle_cirugia = array();
	$tdatadetalle_cirugia[".NumberOfChars"] = 80; 
	$tdatadetalle_cirugia[".ShortName"] = "detalle_cirugia";
	$tdatadetalle_cirugia[".OwnerID"] = "";
	$tdatadetalle_cirugia[".OriginalTable"] = "detalle_cirugia";

//	field labels
$fieldLabelsdetalle_cirugia = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalle_cirugia["Spanish"] = array();
	$fieldToolTipsdetalle_cirugia["Spanish"] = array();
	$fieldLabelsdetalle_cirugia["Spanish"]["id"] = "Código";
	$fieldToolTipsdetalle_cirugia["Spanish"]["id"] = "";
	$fieldLabelsdetalle_cirugia["Spanish"]["idtipo_cirugia"] = "Tipo de Cirugía";
	$fieldToolTipsdetalle_cirugia["Spanish"]["idtipo_cirugia"] = "";
	$fieldLabelsdetalle_cirugia["Spanish"]["insumos_id"] = "Insumo";
	$fieldToolTipsdetalle_cirugia["Spanish"]["insumos_id"] = "";
	$fieldLabelsdetalle_cirugia["Spanish"]["cantidad"] = "Cantida";
	$fieldToolTipsdetalle_cirugia["Spanish"]["cantidad"] = "";
	if (count($fieldToolTipsdetalle_cirugia["Spanish"]))
		$tdatadetalle_cirugia[".isUseToolTips"] = true;
}
	
	
	$tdatadetalle_cirugia[".NCSearch"] = true;



$tdatadetalle_cirugia[".shortTableName"] = "detalle_cirugia";
$tdatadetalle_cirugia[".nSecOptions"] = 0;
$tdatadetalle_cirugia[".recsPerRowList"] = 1;
$tdatadetalle_cirugia[".mainTableOwnerID"] = "";
$tdatadetalle_cirugia[".moveNext"] = 1;
$tdatadetalle_cirugia[".nType"] = 0;

$tdatadetalle_cirugia[".strOriginalTableName"] = "detalle_cirugia";




$tdatadetalle_cirugia[".showAddInPopup"] = true;

$tdatadetalle_cirugia[".showEditInPopup"] = true;

$tdatadetalle_cirugia[".showViewInPopup"] = true;

$tdatadetalle_cirugia[".fieldsForRegister"] = array();

$tdatadetalle_cirugia[".listAjax"] = false;

	$tdatadetalle_cirugia[".audit"] = true;

	$tdatadetalle_cirugia[".locking"] = false;

$tdatadetalle_cirugia[".listIcons"] = true;
$tdatadetalle_cirugia[".edit"] = true;
$tdatadetalle_cirugia[".view"] = true;



$tdatadetalle_cirugia[".delete"] = true;

$tdatadetalle_cirugia[".showSimpleSearchOptions"] = false;

$tdatadetalle_cirugia[".showSearchPanel"] = true;

if (isMobile())
	$tdatadetalle_cirugia[".isUseAjaxSuggest"] = false;
else 
	$tdatadetalle_cirugia[".isUseAjaxSuggest"] = true;

$tdatadetalle_cirugia[".rowHighlite"] = true;

// button handlers file names

$tdatadetalle_cirugia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalle_cirugia[".isUseTimeForSearch"] = false;




$tdatadetalle_cirugia[".allSearchFields"] = array();

$tdatadetalle_cirugia[".allSearchFields"][] = "id";
$tdatadetalle_cirugia[".allSearchFields"][] = "idtipo_cirugia";
$tdatadetalle_cirugia[".allSearchFields"][] = "insumos_id";
$tdatadetalle_cirugia[".allSearchFields"][] = "cantidad";

$tdatadetalle_cirugia[".googleLikeFields"][] = "id";
$tdatadetalle_cirugia[".googleLikeFields"][] = "idtipo_cirugia";
$tdatadetalle_cirugia[".googleLikeFields"][] = "insumos_id";
$tdatadetalle_cirugia[".googleLikeFields"][] = "cantidad";


$tdatadetalle_cirugia[".advSearchFields"][] = "id";
$tdatadetalle_cirugia[".advSearchFields"][] = "idtipo_cirugia";
$tdatadetalle_cirugia[".advSearchFields"][] = "insumos_id";
$tdatadetalle_cirugia[".advSearchFields"][] = "cantidad";

$tdatadetalle_cirugia[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatadetalle_cirugia[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadetalle_cirugia[".strOrderBy"] = $tstrOrderBy;

$tdatadetalle_cirugia[".orderindexes"] = array();

$tdatadetalle_cirugia[".sqlHead"] = "SELECT id,   idtipo_cirugia,   insumos_id,   cantidad";
$tdatadetalle_cirugia[".sqlFrom"] = "FROM detalle_cirugia";
$tdatadetalle_cirugia[".sqlWhereExpr"] = "";
$tdatadetalle_cirugia[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalle_cirugia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalle_cirugia[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdetalle_cirugia = array();
$tableKeysdetalle_cirugia[] = "id";
$tableKeysdetalle_cirugia[] = "idtipo_cirugia";
$tdatadetalle_cirugia[".Keys"] = $tableKeysdetalle_cirugia;

$tdatadetalle_cirugia[".listFields"] = array();
$tdatadetalle_cirugia[".listFields"][] = "id";
$tdatadetalle_cirugia[".listFields"][] = "idtipo_cirugia";
$tdatadetalle_cirugia[".listFields"][] = "insumos_id";
$tdatadetalle_cirugia[".listFields"][] = "cantidad";

$tdatadetalle_cirugia[".viewFields"] = array();
$tdatadetalle_cirugia[".viewFields"][] = "id";
$tdatadetalle_cirugia[".viewFields"][] = "idtipo_cirugia";
$tdatadetalle_cirugia[".viewFields"][] = "insumos_id";
$tdatadetalle_cirugia[".viewFields"][] = "cantidad";

$tdatadetalle_cirugia[".addFields"] = array();
$tdatadetalle_cirugia[".addFields"][] = "idtipo_cirugia";
$tdatadetalle_cirugia[".addFields"][] = "insumos_id";
$tdatadetalle_cirugia[".addFields"][] = "cantidad";

$tdatadetalle_cirugia[".inlineAddFields"] = array();

$tdatadetalle_cirugia[".editFields"] = array();
$tdatadetalle_cirugia[".editFields"][] = "idtipo_cirugia";
$tdatadetalle_cirugia[".editFields"][] = "insumos_id";
$tdatadetalle_cirugia[".editFields"][] = "cantidad";

$tdatadetalle_cirugia[".inlineEditFields"] = array();

$tdatadetalle_cirugia[".exportFields"] = array();

$tdatadetalle_cirugia[".printFields"] = array();
$tdatadetalle_cirugia[".printFields"][] = "id";
$tdatadetalle_cirugia[".printFields"][] = "idtipo_cirugia";
$tdatadetalle_cirugia[".printFields"][] = "insumos_id";
$tdatadetalle_cirugia[".printFields"][] = "cantidad";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "detalle_cirugia";
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
	
		
		
	$tdatadetalle_cirugia["id"] = $fdata;
//	idtipo_cirugia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idtipo_cirugia";
	$fdata["GoodName"] = "idtipo_cirugia";
	$fdata["ownerTable"] = "detalle_cirugia";
	$fdata["Label"] = "Tipo de Cirugía"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("detalle_cirugia"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "idtipo_cirugia";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupTable"] = "tipo_cirugia";
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
	
		
		
	$tdatadetalle_cirugia["idtipo_cirugia"] = $fdata;
//	insumos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "insumos_id";
	$fdata["GoodName"] = "insumos_id";
	$fdata["ownerTable"] = "detalle_cirugia";
	$fdata["Label"] = "Insumo"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "insumos_id"; 
		$fdata["FullName"] = "insumos_id";
	
		
		
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
				if(strpos(GetUserPermissions("detalle_cirugia"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = " concat(codigo,' ',nombre) 
";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "insumos";
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
	
		
		
	$tdatadetalle_cirugia["insumos_id"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "detalle_cirugia";
	$fdata["Label"] = "Cantida"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "cantidad"; 
		$fdata["FullName"] = "cantidad";
	
		
		
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
	
		
		
	$tdatadetalle_cirugia["cantidad"] = $fdata;

	
$tables_data["detalle_cirugia"]=&$tdatadetalle_cirugia;
$field_labels["detalle_cirugia"] = &$fieldLabelsdetalle_cirugia;
$fieldToolTips["detalle_cirugia"] = &$fieldToolTipsdetalle_cirugia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["detalle_cirugia"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["detalle_cirugia"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="insumos";
	$masterParams["mDataSourceTable"]="insumos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "insumos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["detalle_cirugia"][$mIndex] = $masterParams;	
		$masterTablesData["detalle_cirugia"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["detalle_cirugia"][$mIndex]["detailKeys"][]="insumos_id";

$mIndex = 2-1;
			$strOriginalDetailsTable="tipo_cirugia";
	$masterParams["mDataSourceTable"]="tipo_cirugia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tipo_cirugia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["detalle_cirugia"][$mIndex] = $masterParams;	
		$masterTablesData["detalle_cirugia"][$mIndex]["masterKeys"][]="idtipo_cirugia";
		$masterTablesData["detalle_cirugia"][$mIndex]["detailKeys"][]="idtipo_cirugia";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_detalle_cirugia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   idtipo_cirugia,   insumos_id,   cantidad";
$proto0["m_strFrom"] = "FROM detalle_cirugia";
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
	"m_strTable" => "detalle_cirugia"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "idtipo_cirugia",
	"m_strTable" => "detalle_cirugia"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "insumos_id",
	"m_strTable" => "detalle_cirugia"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "detalle_cirugia"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "detalle_cirugia";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "idtipo_cirugia";
$proto14["m_columns"][] = "insumos_id";
$proto14["m_columns"][] = "cantidad";
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
$queryData_detalle_cirugia = createSqlQuery_detalle_cirugia();
				$tdatadetalle_cirugia[".sqlquery"] = $queryData_detalle_cirugia;

$tableEvents["detalle_cirugia"] = new eventsBase;
$tdatadetalle_cirugia[".hasEvents"] = false;

$cipherer = new RunnerCipherer("detalle_cirugia");

?>