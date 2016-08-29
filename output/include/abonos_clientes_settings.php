<?php
require_once(getabspath("classes/cipherer.php"));
$tdataabonos_clientes = array();
	$tdataabonos_clientes[".NumberOfChars"] = 80; 
	$tdataabonos_clientes[".ShortName"] = "abonos_clientes";
	$tdataabonos_clientes[".OwnerID"] = "";
	$tdataabonos_clientes[".OriginalTable"] = "abonos_clientes";

//	field labels
$fieldLabelsabonos_clientes = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsabonos_clientes["Spanish"] = array();
	$fieldToolTipsabonos_clientes["Spanish"] = array();
	$fieldLabelsabonos_clientes["Spanish"]["id"] = "Código";
	$fieldToolTipsabonos_clientes["Spanish"]["id"] = "";
	$fieldLabelsabonos_clientes["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsabonos_clientes["Spanish"]["fecha"] = "";
	$fieldLabelsabonos_clientes["Spanish"]["monto"] = "Monto";
	$fieldToolTipsabonos_clientes["Spanish"]["monto"] = "";
	$fieldLabelsabonos_clientes["Spanish"]["observaciones"] = "Observaciones";
	$fieldToolTipsabonos_clientes["Spanish"]["observaciones"] = "";
	$fieldLabelsabonos_clientes["Spanish"]["factura_servicio_id"] = "Número de Factura";
	$fieldToolTipsabonos_clientes["Spanish"]["factura_servicio_id"] = "";
	if (count($fieldToolTipsabonos_clientes["Spanish"]))
		$tdataabonos_clientes[".isUseToolTips"] = true;
}
	
	
	$tdataabonos_clientes[".NCSearch"] = true;



$tdataabonos_clientes[".shortTableName"] = "abonos_clientes";
$tdataabonos_clientes[".nSecOptions"] = 0;
$tdataabonos_clientes[".recsPerRowList"] = 1;
$tdataabonos_clientes[".mainTableOwnerID"] = "";
$tdataabonos_clientes[".moveNext"] = 1;
$tdataabonos_clientes[".nType"] = 0;

$tdataabonos_clientes[".strOriginalTableName"] = "abonos_clientes";




$tdataabonos_clientes[".showAddInPopup"] = true;

$tdataabonos_clientes[".showEditInPopup"] = true;

$tdataabonos_clientes[".showViewInPopup"] = true;

$tdataabonos_clientes[".fieldsForRegister"] = array();

$tdataabonos_clientes[".listAjax"] = false;

	$tdataabonos_clientes[".audit"] = true;

	$tdataabonos_clientes[".locking"] = false;

$tdataabonos_clientes[".listIcons"] = true;
$tdataabonos_clientes[".edit"] = true;
$tdataabonos_clientes[".view"] = true;


$tdataabonos_clientes[".printFriendly"] = true;

$tdataabonos_clientes[".delete"] = true;

$tdataabonos_clientes[".showSimpleSearchOptions"] = false;

$tdataabonos_clientes[".showSearchPanel"] = true;

if (isMobile())
	$tdataabonos_clientes[".isUseAjaxSuggest"] = false;
else 
	$tdataabonos_clientes[".isUseAjaxSuggest"] = true;

$tdataabonos_clientes[".rowHighlite"] = true;

// button handlers file names

$tdataabonos_clientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataabonos_clientes[".isUseTimeForSearch"] = false;




$tdataabonos_clientes[".allSearchFields"] = array();

$tdataabonos_clientes[".allSearchFields"][] = "id";
$tdataabonos_clientes[".allSearchFields"][] = "factura_servicio_id";
$tdataabonos_clientes[".allSearchFields"][] = "fecha";
$tdataabonos_clientes[".allSearchFields"][] = "monto";
$tdataabonos_clientes[".allSearchFields"][] = "observaciones";

$tdataabonos_clientes[".googleLikeFields"][] = "id";
$tdataabonos_clientes[".googleLikeFields"][] = "fecha";
$tdataabonos_clientes[".googleLikeFields"][] = "monto";
$tdataabonos_clientes[".googleLikeFields"][] = "observaciones";
$tdataabonos_clientes[".googleLikeFields"][] = "factura_servicio_id";


$tdataabonos_clientes[".advSearchFields"][] = "id";
$tdataabonos_clientes[".advSearchFields"][] = "factura_servicio_id";
$tdataabonos_clientes[".advSearchFields"][] = "fecha";
$tdataabonos_clientes[".advSearchFields"][] = "monto";
$tdataabonos_clientes[".advSearchFields"][] = "observaciones";

$tdataabonos_clientes[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataabonos_clientes[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataabonos_clientes[".strOrderBy"] = $tstrOrderBy;

$tdataabonos_clientes[".orderindexes"] = array();

$tdataabonos_clientes[".sqlHead"] = "SELECT id,   fecha,   monto,   observaciones,   factura_servicio_id";
$tdataabonos_clientes[".sqlFrom"] = "FROM abonos_clientes";
$tdataabonos_clientes[".sqlWhereExpr"] = "";
$tdataabonos_clientes[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataabonos_clientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataabonos_clientes[".arrGroupsPerPage"] = $arrGPP;

$tableKeysabonos_clientes = array();
$tableKeysabonos_clientes[] = "id";
$tableKeysabonos_clientes[] = "factura_servicio_id";
$tdataabonos_clientes[".Keys"] = $tableKeysabonos_clientes;

$tdataabonos_clientes[".listFields"] = array();
$tdataabonos_clientes[".listFields"][] = "id";
$tdataabonos_clientes[".listFields"][] = "factura_servicio_id";
$tdataabonos_clientes[".listFields"][] = "fecha";
$tdataabonos_clientes[".listFields"][] = "monto";
$tdataabonos_clientes[".listFields"][] = "observaciones";

$tdataabonos_clientes[".viewFields"] = array();
$tdataabonos_clientes[".viewFields"][] = "id";
$tdataabonos_clientes[".viewFields"][] = "factura_servicio_id";
$tdataabonos_clientes[".viewFields"][] = "fecha";
$tdataabonos_clientes[".viewFields"][] = "monto";
$tdataabonos_clientes[".viewFields"][] = "observaciones";

$tdataabonos_clientes[".addFields"] = array();
$tdataabonos_clientes[".addFields"][] = "factura_servicio_id";
$tdataabonos_clientes[".addFields"][] = "fecha";
$tdataabonos_clientes[".addFields"][] = "monto";
$tdataabonos_clientes[".addFields"][] = "observaciones";

$tdataabonos_clientes[".inlineAddFields"] = array();

$tdataabonos_clientes[".editFields"] = array();
$tdataabonos_clientes[".editFields"][] = "factura_servicio_id";
$tdataabonos_clientes[".editFields"][] = "fecha";
$tdataabonos_clientes[".editFields"][] = "monto";
$tdataabonos_clientes[".editFields"][] = "observaciones";

$tdataabonos_clientes[".inlineEditFields"] = array();

$tdataabonos_clientes[".exportFields"] = array();

$tdataabonos_clientes[".printFields"] = array();
$tdataabonos_clientes[".printFields"][] = "id";
$tdataabonos_clientes[".printFields"][] = "factura_servicio_id";
$tdataabonos_clientes[".printFields"][] = "fecha";
$tdataabonos_clientes[".printFields"][] = "monto";
$tdataabonos_clientes[".printFields"][] = "observaciones";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "abonos_clientes";
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
	
		
		
	$tdataabonos_clientes["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "abonos_clientes";
	$fdata["Label"] = "Fecha"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha"; 
		$fdata["FullName"] = "fecha";
	
		
		
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
	
		
		
	$tdataabonos_clientes["fecha"] = $fdata;
//	monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "monto";
	$fdata["GoodName"] = "monto";
	$fdata["ownerTable"] = "abonos_clientes";
	$fdata["Label"] = "Monto"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "monto"; 
		$fdata["FullName"] = "monto";
	
		
		
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
	
		
		
	$tdataabonos_clientes["monto"] = $fdata;
//	observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "observaciones";
	$fdata["GoodName"] = "observaciones";
	$fdata["ownerTable"] = "abonos_clientes";
	$fdata["Label"] = "Observaciones"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "observaciones"; 
		$fdata["FullName"] = "observaciones";
	
		
		
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
	
		
		
	$tdataabonos_clientes["observaciones"] = $fdata;
//	factura_servicio_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "factura_servicio_id";
	$fdata["GoodName"] = "factura_servicio_id";
	$fdata["ownerTable"] = "abonos_clientes";
	$fdata["Label"] = "Número de Factura"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "factura_servicio_id"; 
		$fdata["FullName"] = "factura_servicio_id";
	
		
		
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
				if(strpos(GetUserPermissions("abonos_clientes"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "numero_factura";
	
		
	$edata["LookupTable"] = "factura_consulta";
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
	
		
		
	$tdataabonos_clientes["factura_servicio_id"] = $fdata;

	
$tables_data["abonos_clientes"]=&$tdataabonos_clientes;
$field_labels["abonos_clientes"] = &$fieldLabelsabonos_clientes;
$fieldToolTips["abonos_clientes"] = &$fieldToolTipsabonos_clientes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["abonos_clientes"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["abonos_clientes"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="factura_consulta";
	$masterParams["mDataSourceTable"]="factura_consulta";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "factura_consulta";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["abonos_clientes"][$mIndex] = $masterParams;	
		$masterTablesData["abonos_clientes"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["abonos_clientes"][$mIndex]["detailKeys"][]="factura_servicio_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_abonos_clientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   fecha,   monto,   observaciones,   factura_servicio_id";
$proto0["m_strFrom"] = "FROM abonos_clientes";
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
	"m_strTable" => "abonos_clientes"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "abonos_clientes"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "abonos_clientes"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones",
	"m_strTable" => "abonos_clientes"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "factura_servicio_id",
	"m_strTable" => "abonos_clientes"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "abonos_clientes";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "fecha";
$proto16["m_columns"][] = "monto";
$proto16["m_columns"][] = "observaciones";
$proto16["m_columns"][] = "factura_servicio_id";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_abonos_clientes = createSqlQuery_abonos_clientes();
					$tdataabonos_clientes[".sqlquery"] = $queryData_abonos_clientes;

$tableEvents["abonos_clientes"] = new eventsBase;
$tdataabonos_clientes[".hasEvents"] = false;

$cipherer = new RunnerCipherer("abonos_clientes");

?>