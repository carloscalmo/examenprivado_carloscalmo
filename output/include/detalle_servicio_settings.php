<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadetalle_servicio = array();
	$tdatadetalle_servicio[".NumberOfChars"] = 80; 
	$tdatadetalle_servicio[".ShortName"] = "detalle_servicio";
	$tdatadetalle_servicio[".OwnerID"] = "";
	$tdatadetalle_servicio[".OriginalTable"] = "detalle_servicio";

//	field labels
$fieldLabelsdetalle_servicio = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalle_servicio["Spanish"] = array();
	$fieldToolTipsdetalle_servicio["Spanish"] = array();
	$fieldLabelsdetalle_servicio["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsdetalle_servicio["Spanish"]["cantidad"] = "";
	$fieldLabelsdetalle_servicio["Spanish"]["servicio_id"] = "Servicio";
	$fieldToolTipsdetalle_servicio["Spanish"]["servicio_id"] = "";
	$fieldLabelsdetalle_servicio["Spanish"]["insumos_id"] = "Insumo";
	$fieldToolTipsdetalle_servicio["Spanish"]["insumos_id"] = "";
	$fieldLabelsdetalle_servicio["Spanish"]["id"] = "Código";
	$fieldToolTipsdetalle_servicio["Spanish"]["id"] = "";
	$fieldLabelsdetalle_servicio["Spanish"][""] = "";
	$fieldToolTipsdetalle_servicio["Spanish"][""] = "";
	$fieldLabelsdetalle_servicio["Spanish"][""] = "Detalle Servicio";
	$fieldToolTipsdetalle_servicio["Spanish"][""] = "";
	$fieldLabelsdetalle_servicio["Spanish"][""] = "";
	$fieldToolTipsdetalle_servicio["Spanish"][""] = "";
	$fieldLabelsdetalle_servicio["Spanish"][""] = "";
	$fieldToolTipsdetalle_servicio["Spanish"][""] = "";
	if (count($fieldToolTipsdetalle_servicio["Spanish"]))
		$tdatadetalle_servicio[".isUseToolTips"] = true;
}
	
	
	$tdatadetalle_servicio[".NCSearch"] = true;



$tdatadetalle_servicio[".shortTableName"] = "detalle_servicio";
$tdatadetalle_servicio[".nSecOptions"] = 0;
$tdatadetalle_servicio[".recsPerRowList"] = 1;
$tdatadetalle_servicio[".mainTableOwnerID"] = "";
$tdatadetalle_servicio[".moveNext"] = 1;
$tdatadetalle_servicio[".nType"] = 0;

$tdatadetalle_servicio[".strOriginalTableName"] = "detalle_servicio";




$tdatadetalle_servicio[".showAddInPopup"] = true;

$tdatadetalle_servicio[".showEditInPopup"] = true;

$tdatadetalle_servicio[".showViewInPopup"] = true;

$tdatadetalle_servicio[".fieldsForRegister"] = array();

$tdatadetalle_servicio[".listAjax"] = false;

	$tdatadetalle_servicio[".audit"] = true;

	$tdatadetalle_servicio[".locking"] = false;

$tdatadetalle_servicio[".listIcons"] = true;
$tdatadetalle_servicio[".edit"] = true;
$tdatadetalle_servicio[".view"] = true;



$tdatadetalle_servicio[".delete"] = true;

$tdatadetalle_servicio[".showSimpleSearchOptions"] = false;

$tdatadetalle_servicio[".showSearchPanel"] = true;

if (isMobile())
	$tdatadetalle_servicio[".isUseAjaxSuggest"] = false;
else 
	$tdatadetalle_servicio[".isUseAjaxSuggest"] = true;

$tdatadetalle_servicio[".rowHighlite"] = true;

// button handlers file names

$tdatadetalle_servicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalle_servicio[".isUseTimeForSearch"] = false;




$tdatadetalle_servicio[".allSearchFields"] = array();

$tdatadetalle_servicio[".allSearchFields"][] = "servicio_id";
$tdatadetalle_servicio[".allSearchFields"][] = "insumos_id";
$tdatadetalle_servicio[".allSearchFields"][] = "cantidad";

$tdatadetalle_servicio[".googleLikeFields"][] = "cantidad";
$tdatadetalle_servicio[".googleLikeFields"][] = "servicio_id";
$tdatadetalle_servicio[".googleLikeFields"][] = "insumos_id";
$tdatadetalle_servicio[".googleLikeFields"][] = "id";


$tdatadetalle_servicio[".advSearchFields"][] = "servicio_id";
$tdatadetalle_servicio[".advSearchFields"][] = "insumos_id";
$tdatadetalle_servicio[".advSearchFields"][] = "cantidad";

$tdatadetalle_servicio[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatadetalle_servicio[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadetalle_servicio[".strOrderBy"] = $tstrOrderBy;

$tdatadetalle_servicio[".orderindexes"] = array();

$tdatadetalle_servicio[".sqlHead"] = "SELECT cantidad,  servicio_id,  insumos_id,  id";
$tdatadetalle_servicio[".sqlFrom"] = "FROM detalle_servicio";
$tdatadetalle_servicio[".sqlWhereExpr"] = "";
$tdatadetalle_servicio[".sqlTail"] = "GROUP BY id";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalle_servicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalle_servicio[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdetalle_servicio = array();
$tableKeysdetalle_servicio[] = "id";
$tableKeysdetalle_servicio[] = "servicio_id";
$tdatadetalle_servicio[".Keys"] = $tableKeysdetalle_servicio;

$tdatadetalle_servicio[".listFields"] = array();
$tdatadetalle_servicio[".listFields"][] = "servicio_id";
$tdatadetalle_servicio[".listFields"][] = "insumos_id";
$tdatadetalle_servicio[".listFields"][] = "cantidad";

$tdatadetalle_servicio[".viewFields"] = array();
$tdatadetalle_servicio[".viewFields"][] = "servicio_id";
$tdatadetalle_servicio[".viewFields"][] = "insumos_id";
$tdatadetalle_servicio[".viewFields"][] = "cantidad";

$tdatadetalle_servicio[".addFields"] = array();
$tdatadetalle_servicio[".addFields"][] = "servicio_id";
$tdatadetalle_servicio[".addFields"][] = "insumos_id";
$tdatadetalle_servicio[".addFields"][] = "cantidad";

$tdatadetalle_servicio[".inlineAddFields"] = array();

$tdatadetalle_servicio[".editFields"] = array();
$tdatadetalle_servicio[".editFields"][] = "servicio_id";
$tdatadetalle_servicio[".editFields"][] = "insumos_id";
$tdatadetalle_servicio[".editFields"][] = "cantidad";

$tdatadetalle_servicio[".inlineEditFields"] = array();

$tdatadetalle_servicio[".exportFields"] = array();

$tdatadetalle_servicio[".printFields"] = array();
$tdatadetalle_servicio[".printFields"][] = "servicio_id";
$tdatadetalle_servicio[".printFields"][] = "insumos_id";
$tdatadetalle_servicio[".printFields"][] = "cantidad";

//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "detalle_servicio";
	$fdata["Label"] = "Cantidad"; 
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
	
		
		
	$tdatadetalle_servicio["cantidad"] = $fdata;
//	servicio_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "servicio_id";
	$fdata["GoodName"] = "servicio_id";
	$fdata["ownerTable"] = "detalle_servicio";
	$fdata["Label"] = "Servicio"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "servicio_id"; 
		$fdata["FullName"] = "servicio_id";
	
		
		
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
				if(strpos(GetUserPermissions("detalle_servicio"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(nombre,' ',descripcion)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "servicio";
	$edata["LookupOrderBy"] = "id";
	
		
		
		
		
		
				
	
	
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
	
		
		
	$tdatadetalle_servicio["servicio_id"] = $fdata;
//	insumos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "insumos_id";
	$fdata["GoodName"] = "insumos_id";
	$fdata["ownerTable"] = "detalle_servicio";
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
				if(strpos(GetUserPermissions("detalle_servicio"), 'S') !== false)
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
	
		
		
	$tdatadetalle_servicio["insumos_id"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "detalle_servicio";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				
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
	
		
		
	$tdatadetalle_servicio["id"] = $fdata;

	
$tables_data["detalle_servicio"]=&$tdatadetalle_servicio;
$field_labels["detalle_servicio"] = &$fieldLabelsdetalle_servicio;
$fieldToolTips["detalle_servicio"] = &$fieldToolTipsdetalle_servicio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["detalle_servicio"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["detalle_servicio"] = array();

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
	$masterTablesData["detalle_servicio"][$mIndex] = $masterParams;	
		$masterTablesData["detalle_servicio"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["detalle_servicio"][$mIndex]["detailKeys"][]="insumos_id";

$mIndex = 2-1;
			$strOriginalDetailsTable="servicio";
	$masterParams["mDataSourceTable"]="servicio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "servicio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["detalle_servicio"][$mIndex] = $masterParams;	
		$masterTablesData["detalle_servicio"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["detalle_servicio"][$mIndex]["detailKeys"][]="servicio_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_detalle_servicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cantidad,  servicio_id,  insumos_id,  id";
$proto0["m_strFrom"] = "FROM detalle_servicio";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY id";
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
	"m_strName" => "cantidad",
	"m_strTable" => "detalle_servicio"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "servicio_id",
	"m_strTable" => "detalle_servicio"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "insumos_id",
	"m_strTable" => "detalle_servicio"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "detalle_servicio"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "detalle_servicio";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "cantidad";
$proto14["m_columns"][] = "servicio_id";
$proto14["m_columns"][] = "insumos_id";
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
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "detalle_servicio"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalle_servicio = createSqlQuery_detalle_servicio();
				$tdatadetalle_servicio[".sqlquery"] = $queryData_detalle_servicio;

$tableEvents["detalle_servicio"] = new eventsBase;
$tdatadetalle_servicio[".hasEvents"] = false;

$cipherer = new RunnerCipherer("detalle_servicio");

?>