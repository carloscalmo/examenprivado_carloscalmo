<?php
require_once(getabspath("classes/cipherer.php"));
$tdataambiente = array();
	$tdataambiente[".NumberOfChars"] = 80; 
	$tdataambiente[".ShortName"] = "ambiente";
	$tdataambiente[".OwnerID"] = "";
	$tdataambiente[".OriginalTable"] = "ambiente";

//	field labels
$fieldLabelsambiente = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsambiente["Spanish"] = array();
	$fieldToolTipsambiente["Spanish"] = array();
	$fieldLabelsambiente["Spanish"]["id"] = "Código";
	$fieldToolTipsambiente["Spanish"]["id"] = "";
	$fieldLabelsambiente["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsambiente["Spanish"]["nombre"] = "";
	$fieldLabelsambiente["Spanish"]["capacidad"] = "Capacidad";
	$fieldToolTipsambiente["Spanish"]["capacidad"] = "";
	$fieldLabelsambiente["Spanish"]["idtipo_ambiente"] = "Tipo de Ambiente";
	$fieldToolTipsambiente["Spanish"]["idtipo_ambiente"] = "";
	$fieldLabelsambiente["Spanish"][""] = "";
	$fieldToolTipsambiente["Spanish"][""] = "";
	$fieldLabelsambiente["Spanish"][""] = "Ambiente";
	$fieldToolTipsambiente["Spanish"][""] = "";
	$fieldLabelsambiente["Spanish"]["ambiente_id"] = "Ambiente Id";
	$fieldToolTipsambiente["Spanish"]["ambiente_id"] = "";
	if (count($fieldToolTipsambiente["Spanish"]))
		$tdataambiente[".isUseToolTips"] = true;
}
	
	
	$tdataambiente[".NCSearch"] = true;



$tdataambiente[".shortTableName"] = "ambiente";
$tdataambiente[".nSecOptions"] = 0;
$tdataambiente[".recsPerRowList"] = 1;
$tdataambiente[".mainTableOwnerID"] = "";
$tdataambiente[".moveNext"] = 1;
$tdataambiente[".nType"] = 0;

$tdataambiente[".strOriginalTableName"] = "ambiente";




$tdataambiente[".showAddInPopup"] = true;

$tdataambiente[".showEditInPopup"] = true;

$tdataambiente[".showViewInPopup"] = true;

$tdataambiente[".fieldsForRegister"] = array();

$tdataambiente[".listAjax"] = false;

	$tdataambiente[".audit"] = true;

	$tdataambiente[".locking"] = false;

$tdataambiente[".listIcons"] = true;
$tdataambiente[".edit"] = true;
$tdataambiente[".view"] = true;



$tdataambiente[".delete"] = true;

$tdataambiente[".showSimpleSearchOptions"] = false;

$tdataambiente[".showSearchPanel"] = true;

if (isMobile())
	$tdataambiente[".isUseAjaxSuggest"] = false;
else 
	$tdataambiente[".isUseAjaxSuggest"] = true;

$tdataambiente[".rowHighlite"] = true;

// button handlers file names

$tdataambiente[".addPageEvents"] = false;

// use timepicker for search panel
$tdataambiente[".isUseTimeForSearch"] = false;



$tdataambiente[".useDetailsPreview"] = true;

$tdataambiente[".allSearchFields"] = array();

$tdataambiente[".allSearchFields"][] = "id";
$tdataambiente[".allSearchFields"][] = "nombre";
$tdataambiente[".allSearchFields"][] = "capacidad";
$tdataambiente[".allSearchFields"][] = "idtipo_ambiente";

$tdataambiente[".googleLikeFields"][] = "id";
$tdataambiente[".googleLikeFields"][] = "nombre";
$tdataambiente[".googleLikeFields"][] = "capacidad";
$tdataambiente[".googleLikeFields"][] = "idtipo_ambiente";


$tdataambiente[".advSearchFields"][] = "id";
$tdataambiente[".advSearchFields"][] = "nombre";
$tdataambiente[".advSearchFields"][] = "capacidad";
$tdataambiente[".advSearchFields"][] = "idtipo_ambiente";

$tdataambiente[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
		


$tdataambiente[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataambiente[".strOrderBy"] = $tstrOrderBy;

$tdataambiente[".orderindexes"] = array();

$tdataambiente[".sqlHead"] = "SELECT id,   nombre,   capacidad,   idtipo_ambiente";
$tdataambiente[".sqlFrom"] = "FROM ambiente";
$tdataambiente[".sqlWhereExpr"] = "";
$tdataambiente[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataambiente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataambiente[".arrGroupsPerPage"] = $arrGPP;

$tableKeysambiente = array();
$tableKeysambiente[] = "id";
$tdataambiente[".Keys"] = $tableKeysambiente;

$tdataambiente[".listFields"] = array();
$tdataambiente[".listFields"][] = "id";
$tdataambiente[".listFields"][] = "nombre";
$tdataambiente[".listFields"][] = "capacidad";
$tdataambiente[".listFields"][] = "idtipo_ambiente";

$tdataambiente[".viewFields"] = array();
$tdataambiente[".viewFields"][] = "id";
$tdataambiente[".viewFields"][] = "nombre";
$tdataambiente[".viewFields"][] = "capacidad";
$tdataambiente[".viewFields"][] = "idtipo_ambiente";

$tdataambiente[".addFields"] = array();
$tdataambiente[".addFields"][] = "nombre";
$tdataambiente[".addFields"][] = "capacidad";
$tdataambiente[".addFields"][] = "idtipo_ambiente";

$tdataambiente[".inlineAddFields"] = array();

$tdataambiente[".editFields"] = array();
$tdataambiente[".editFields"][] = "nombre";
$tdataambiente[".editFields"][] = "capacidad";
$tdataambiente[".editFields"][] = "idtipo_ambiente";

$tdataambiente[".inlineEditFields"] = array();

$tdataambiente[".exportFields"] = array();

$tdataambiente[".printFields"] = array();
$tdataambiente[".printFields"][] = "id";
$tdataambiente[".printFields"][] = "nombre";
$tdataambiente[".printFields"][] = "capacidad";
$tdataambiente[".printFields"][] = "idtipo_ambiente";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ambiente";
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
	
		
		
	$tdataambiente["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "ambiente";
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
	
		
		
	$tdataambiente["nombre"] = $fdata;
//	capacidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capacidad";
	$fdata["GoodName"] = "capacidad";
	$fdata["ownerTable"] = "ambiente";
	$fdata["Label"] = "Capacidad"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "capacidad"; 
		$fdata["FullName"] = "capacidad";
	
		
		
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
	
		
		
	$tdataambiente["capacidad"] = $fdata;
//	idtipo_ambiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idtipo_ambiente";
	$fdata["GoodName"] = "idtipo_ambiente";
	$fdata["ownerTable"] = "ambiente";
	$fdata["Label"] = "Tipo de Ambiente"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "idtipo_ambiente"; 
		$fdata["FullName"] = "idtipo_ambiente";
	
		
		
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
				if(strpos(GetUserPermissions("ambiente"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "idtipo_ambiente";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupTable"] = "tipo_ambiente";
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
	
		
		
	$tdataambiente["idtipo_ambiente"] = $fdata;

	
$tables_data["ambiente"]=&$tdataambiente;
$field_labels["ambiente"] = &$fieldLabelsambiente;
$fieldToolTips["ambiente"] = &$fieldToolTipsambiente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ambiente"] = array();
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
		
	$detailsTablesData["ambiente"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["ambiente"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["ambiente"][$dIndex]["detailKeys"][]="ambiente_id";

$dIndex = 2-1;
			$strOriginalDetailsTable="hospitalizacion";
	$detailsParam["dDataSourceTable"]="hospitalizacion";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="hospitalizacion";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["ambiente"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["ambiente"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["ambiente"][$dIndex]["detailKeys"][]="ambiente_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["ambiente"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="tipo_ambiente";
	$masterParams["mDataSourceTable"]="tipo_ambiente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tipo_ambiente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["ambiente"][$mIndex] = $masterParams;	
		$masterTablesData["ambiente"][$mIndex]["masterKeys"][]="idtipo_ambiente";
		$masterTablesData["ambiente"][$mIndex]["detailKeys"][]="idtipo_ambiente";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ambiente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nombre,   capacidad,   idtipo_ambiente";
$proto0["m_strFrom"] = "FROM ambiente";
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
	"m_strTable" => "ambiente"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "ambiente"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "capacidad",
	"m_strTable" => "ambiente"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "idtipo_ambiente",
	"m_strTable" => "ambiente"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "ambiente";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "nombre";
$proto14["m_columns"][] = "capacidad";
$proto14["m_columns"][] = "idtipo_ambiente";
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
$queryData_ambiente = createSqlQuery_ambiente();
				$tdataambiente[".sqlquery"] = $queryData_ambiente;

$tableEvents["ambiente"] = new eventsBase;
$tdataambiente[".hasEvents"] = false;

$cipherer = new RunnerCipherer("ambiente");

?>