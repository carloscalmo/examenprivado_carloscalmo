<?php
require_once(getabspath("classes/cipherer.php"));
$tdatamunicipio = array();
	$tdatamunicipio[".NumberOfChars"] = 80; 
	$tdatamunicipio[".ShortName"] = "municipio";
	$tdatamunicipio[".OwnerID"] = "";
	$tdatamunicipio[".OriginalTable"] = "municipio";

//	field labels
$fieldLabelsmunicipio = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmunicipio["Spanish"] = array();
	$fieldToolTipsmunicipio["Spanish"] = array();
	$fieldLabelsmunicipio["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsmunicipio["Spanish"]["nombre"] = "";
	$fieldLabelsmunicipio["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsmunicipio["Spanish"]["departamento"] = "";
	$fieldLabelsmunicipio["Spanish"]["id"] = "Código";
	$fieldToolTipsmunicipio["Spanish"]["id"] = "";
	$fieldLabelsmunicipio["Spanish"]["municipio_id"] = "Municipio Id";
	$fieldToolTipsmunicipio["Spanish"]["municipio_id"] = "";
	if (count($fieldToolTipsmunicipio["Spanish"]))
		$tdatamunicipio[".isUseToolTips"] = true;
}
	
	
	$tdatamunicipio[".NCSearch"] = true;



$tdatamunicipio[".shortTableName"] = "municipio";
$tdatamunicipio[".nSecOptions"] = 0;
$tdatamunicipio[".recsPerRowList"] = 1;
$tdatamunicipio[".mainTableOwnerID"] = "";
$tdatamunicipio[".moveNext"] = 1;
$tdatamunicipio[".nType"] = 0;

$tdatamunicipio[".strOriginalTableName"] = "municipio";




$tdatamunicipio[".showAddInPopup"] = true;

$tdatamunicipio[".showEditInPopup"] = true;

$tdatamunicipio[".showViewInPopup"] = true;

$tdatamunicipio[".fieldsForRegister"] = array();

$tdatamunicipio[".listAjax"] = false;

	$tdatamunicipio[".audit"] = true;

	$tdatamunicipio[".locking"] = false;

$tdatamunicipio[".listIcons"] = true;
$tdatamunicipio[".edit"] = true;
$tdatamunicipio[".view"] = true;


$tdatamunicipio[".printFriendly"] = true;

$tdatamunicipio[".delete"] = true;

$tdatamunicipio[".showSimpleSearchOptions"] = false;

$tdatamunicipio[".showSearchPanel"] = true;

if (isMobile())
	$tdatamunicipio[".isUseAjaxSuggest"] = false;
else 
	$tdatamunicipio[".isUseAjaxSuggest"] = true;

$tdatamunicipio[".rowHighlite"] = true;

// button handlers file names

$tdatamunicipio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamunicipio[".isUseTimeForSearch"] = false;



$tdatamunicipio[".useDetailsPreview"] = true;

$tdatamunicipio[".allSearchFields"] = array();

$tdatamunicipio[".allSearchFields"][] = "id";
$tdatamunicipio[".allSearchFields"][] = "nombre";
$tdatamunicipio[".allSearchFields"][] = "departamento";

$tdatamunicipio[".googleLikeFields"][] = "nombre";
$tdatamunicipio[".googleLikeFields"][] = "departamento";
$tdatamunicipio[".googleLikeFields"][] = "id";


$tdatamunicipio[".advSearchFields"][] = "nombre";
$tdatamunicipio[".advSearchFields"][] = "departamento";

$tdatamunicipio[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
		


$tdatamunicipio[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamunicipio[".strOrderBy"] = $tstrOrderBy;

$tdatamunicipio[".orderindexes"] = array();

$tdatamunicipio[".sqlHead"] = "SELECT nombre,  departamento,  id";
$tdatamunicipio[".sqlFrom"] = "FROM municipio";
$tdatamunicipio[".sqlWhereExpr"] = "";
$tdatamunicipio[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamunicipio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamunicipio[".arrGroupsPerPage"] = $arrGPP;

$tableKeysmunicipio = array();
$tableKeysmunicipio[] = "id";
$tableKeysmunicipio[] = "nombre";
$tdatamunicipio[".Keys"] = $tableKeysmunicipio;

$tdatamunicipio[".listFields"] = array();
$tdatamunicipio[".listFields"][] = "nombre";
$tdatamunicipio[".listFields"][] = "departamento";

$tdatamunicipio[".viewFields"] = array();
$tdatamunicipio[".viewFields"][] = "nombre";
$tdatamunicipio[".viewFields"][] = "departamento";

$tdatamunicipio[".addFields"] = array();
$tdatamunicipio[".addFields"][] = "nombre";
$tdatamunicipio[".addFields"][] = "departamento";

$tdatamunicipio[".inlineAddFields"] = array();

$tdatamunicipio[".editFields"] = array();
$tdatamunicipio[".editFields"][] = "nombre";
$tdatamunicipio[".editFields"][] = "departamento";

$tdatamunicipio[".inlineEditFields"] = array();

$tdatamunicipio[".exportFields"] = array();

$tdatamunicipio[".printFields"] = array();
$tdatamunicipio[".printFields"][] = "nombre";
$tdatamunicipio[".printFields"][] = "departamento";

//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "municipio";
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
	
		
		
	$tdatamunicipio["nombre"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = "Departamento"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "departamento"; 
		$fdata["FullName"] = "departamento";
	
		
		
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
				if(strpos(GetUserPermissions("municipio"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupTable"] = "departamento";
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
	
		
		
	$tdatamunicipio["departamento"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = "Código"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatamunicipio["id"] = $fdata;

	
$tables_data["municipio"]=&$tdatamunicipio;
$field_labels["municipio"] = &$fieldLabelsmunicipio;
$fieldToolTips["municipio"] = &$fieldToolTipsmunicipio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["municipio"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="proveedores";
	$detailsParam["dDataSourceTable"]="proveedores";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="proveedores";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["municipio"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["municipio"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["municipio"][$dIndex]["detailKeys"][]="municipio_id";

$dIndex = 2-1;
			$strOriginalDetailsTable="persona";
	$detailsParam["dDataSourceTable"]="persona";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="persona";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["municipio"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["municipio"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["municipio"][$dIndex]["detailKeys"][]="municipio_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["municipio"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="departamento";
	$masterParams["mDataSourceTable"]="departamento";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "departamento";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["municipio"][$mIndex] = $masterParams;	
		$masterTablesData["municipio"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["municipio"][$mIndex]["detailKeys"][]="departamento";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_municipio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nombre,  departamento,  id";
$proto0["m_strFrom"] = "FROM municipio";
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
	"m_strTable" => "municipio"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "municipio"
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
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "municipio";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "nombre";
$proto12["m_columns"][] = "departamento";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_municipio = createSqlQuery_municipio();
			$tdatamunicipio[".sqlquery"] = $queryData_municipio;

$tableEvents["municipio"] = new eventsBase;
$tdatamunicipio[".hasEvents"] = false;

$cipherer = new RunnerCipherer("municipio");

?>