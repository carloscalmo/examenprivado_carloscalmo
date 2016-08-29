<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadescarga_inventario_expirado = array();
	$tdatadescarga_inventario_expirado[".NumberOfChars"] = 80; 
	$tdatadescarga_inventario_expirado[".ShortName"] = "descarga_inventario_expirado";
	$tdatadescarga_inventario_expirado[".OwnerID"] = "";
	$tdatadescarga_inventario_expirado[".OriginalTable"] = "descarga_inventario_expirado";

//	field labels
$fieldLabelsdescarga_inventario_expirado = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdescarga_inventario_expirado["Spanish"] = array();
	$fieldToolTipsdescarga_inventario_expirado["Spanish"] = array();
	$fieldLabelsdescarga_inventario_expirado["Spanish"]["id"] = "Código";
	$fieldToolTipsdescarga_inventario_expirado["Spanish"]["id"] = "";
	$fieldLabelsdescarga_inventario_expirado["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsdescarga_inventario_expirado["Spanish"]["fecha"] = "";
	$fieldLabelsdescarga_inventario_expirado["Spanish"]["lotes"] = "Lote";
	$fieldToolTipsdescarga_inventario_expirado["Spanish"]["lotes"] = "";
	$fieldLabelsdescarga_inventario_expirado["Spanish"]["responsable"] = "Responsable";
	$fieldToolTipsdescarga_inventario_expirado["Spanish"]["responsable"] = "";
	if (count($fieldToolTipsdescarga_inventario_expirado["Spanish"]))
		$tdatadescarga_inventario_expirado[".isUseToolTips"] = true;
}
	
	
	$tdatadescarga_inventario_expirado[".NCSearch"] = true;



$tdatadescarga_inventario_expirado[".shortTableName"] = "descarga_inventario_expirado";
$tdatadescarga_inventario_expirado[".nSecOptions"] = 0;
$tdatadescarga_inventario_expirado[".recsPerRowList"] = 1;
$tdatadescarga_inventario_expirado[".mainTableOwnerID"] = "";
$tdatadescarga_inventario_expirado[".moveNext"] = 1;
$tdatadescarga_inventario_expirado[".nType"] = 0;

$tdatadescarga_inventario_expirado[".strOriginalTableName"] = "descarga_inventario_expirado";




$tdatadescarga_inventario_expirado[".showAddInPopup"] = true;

$tdatadescarga_inventario_expirado[".showEditInPopup"] = true;

$tdatadescarga_inventario_expirado[".showViewInPopup"] = true;

$tdatadescarga_inventario_expirado[".fieldsForRegister"] = array();

$tdatadescarga_inventario_expirado[".listAjax"] = false;

	$tdatadescarga_inventario_expirado[".audit"] = true;

	$tdatadescarga_inventario_expirado[".locking"] = false;

$tdatadescarga_inventario_expirado[".listIcons"] = true;
$tdatadescarga_inventario_expirado[".edit"] = true;
$tdatadescarga_inventario_expirado[".view"] = true;


$tdatadescarga_inventario_expirado[".printFriendly"] = true;

$tdatadescarga_inventario_expirado[".delete"] = true;

$tdatadescarga_inventario_expirado[".showSimpleSearchOptions"] = false;

$tdatadescarga_inventario_expirado[".showSearchPanel"] = true;

if (isMobile())
	$tdatadescarga_inventario_expirado[".isUseAjaxSuggest"] = false;
else 
	$tdatadescarga_inventario_expirado[".isUseAjaxSuggest"] = true;

$tdatadescarga_inventario_expirado[".rowHighlite"] = true;

// button handlers file names

$tdatadescarga_inventario_expirado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadescarga_inventario_expirado[".isUseTimeForSearch"] = false;




$tdatadescarga_inventario_expirado[".allSearchFields"] = array();

$tdatadescarga_inventario_expirado[".allSearchFields"][] = "id";
$tdatadescarga_inventario_expirado[".allSearchFields"][] = "lotes";
$tdatadescarga_inventario_expirado[".allSearchFields"][] = "fecha";
$tdatadescarga_inventario_expirado[".allSearchFields"][] = "responsable";

$tdatadescarga_inventario_expirado[".googleLikeFields"][] = "id";
$tdatadescarga_inventario_expirado[".googleLikeFields"][] = "fecha";
$tdatadescarga_inventario_expirado[".googleLikeFields"][] = "lotes";
$tdatadescarga_inventario_expirado[".googleLikeFields"][] = "responsable";


$tdatadescarga_inventario_expirado[".advSearchFields"][] = "id";
$tdatadescarga_inventario_expirado[".advSearchFields"][] = "lotes";
$tdatadescarga_inventario_expirado[".advSearchFields"][] = "fecha";
$tdatadescarga_inventario_expirado[".advSearchFields"][] = "responsable";

$tdatadescarga_inventario_expirado[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatadescarga_inventario_expirado[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadescarga_inventario_expirado[".strOrderBy"] = $tstrOrderBy;

$tdatadescarga_inventario_expirado[".orderindexes"] = array();

$tdatadescarga_inventario_expirado[".sqlHead"] = "SELECT id,   fecha,   lotes,   responsable";
$tdatadescarga_inventario_expirado[".sqlFrom"] = "FROM descarga_inventario_expirado";
$tdatadescarga_inventario_expirado[".sqlWhereExpr"] = "";
$tdatadescarga_inventario_expirado[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadescarga_inventario_expirado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadescarga_inventario_expirado[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdescarga_inventario_expirado = array();
$tableKeysdescarga_inventario_expirado[] = "id";
$tdatadescarga_inventario_expirado[".Keys"] = $tableKeysdescarga_inventario_expirado;

$tdatadescarga_inventario_expirado[".listFields"] = array();
$tdatadescarga_inventario_expirado[".listFields"][] = "id";
$tdatadescarga_inventario_expirado[".listFields"][] = "lotes";
$tdatadescarga_inventario_expirado[".listFields"][] = "fecha";
$tdatadescarga_inventario_expirado[".listFields"][] = "responsable";

$tdatadescarga_inventario_expirado[".viewFields"] = array();
$tdatadescarga_inventario_expirado[".viewFields"][] = "id";
$tdatadescarga_inventario_expirado[".viewFields"][] = "lotes";
$tdatadescarga_inventario_expirado[".viewFields"][] = "fecha";
$tdatadescarga_inventario_expirado[".viewFields"][] = "responsable";

$tdatadescarga_inventario_expirado[".addFields"] = array();
$tdatadescarga_inventario_expirado[".addFields"][] = "lotes";
$tdatadescarga_inventario_expirado[".addFields"][] = "fecha";
$tdatadescarga_inventario_expirado[".addFields"][] = "responsable";

$tdatadescarga_inventario_expirado[".inlineAddFields"] = array();

$tdatadescarga_inventario_expirado[".editFields"] = array();
$tdatadescarga_inventario_expirado[".editFields"][] = "lotes";
$tdatadescarga_inventario_expirado[".editFields"][] = "fecha";
$tdatadescarga_inventario_expirado[".editFields"][] = "responsable";

$tdatadescarga_inventario_expirado[".inlineEditFields"] = array();

$tdatadescarga_inventario_expirado[".exportFields"] = array();

$tdatadescarga_inventario_expirado[".printFields"] = array();
$tdatadescarga_inventario_expirado[".printFields"][] = "id";
$tdatadescarga_inventario_expirado[".printFields"][] = "lotes";
$tdatadescarga_inventario_expirado[".printFields"][] = "fecha";
$tdatadescarga_inventario_expirado[".printFields"][] = "responsable";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "descarga_inventario_expirado";
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
	
		
		
	$tdatadescarga_inventario_expirado["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "descarga_inventario_expirado";
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
	
		
		
	$tdatadescarga_inventario_expirado["fecha"] = $fdata;
//	lotes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lotes";
	$fdata["GoodName"] = "lotes";
	$fdata["ownerTable"] = "descarga_inventario_expirado";
	$fdata["Label"] = "Lote"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "lotes"; 
		$fdata["FullName"] = "lotes";
	
		
		
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
				if(strpos(GetUserPermissions("descarga_inventario_expirado"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(lotes.codigo,' ',insumos.nombre)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "Copy of insumos1";
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
	
		
		
	$tdatadescarga_inventario_expirado["lotes"] = $fdata;
//	responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "responsable";
	$fdata["GoodName"] = "responsable";
	$fdata["ownerTable"] = "descarga_inventario_expirado";
	$fdata["Label"] = "Responsable"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "responsable"; 
		$fdata["FullName"] = "responsable";
	
		
		
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
				if(strpos(GetUserPermissions("descarga_inventario_expirado"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "persona_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(nombre,' ',apellido)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "Copy of empleado";
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
	
		
		
	$tdatadescarga_inventario_expirado["responsable"] = $fdata;

	
$tables_data["descarga_inventario_expirado"]=&$tdatadescarga_inventario_expirado;
$field_labels["descarga_inventario_expirado"] = &$fieldLabelsdescarga_inventario_expirado;
$fieldToolTips["descarga_inventario_expirado"] = &$fieldToolTipsdescarga_inventario_expirado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["descarga_inventario_expirado"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["descarga_inventario_expirado"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="usuarios";
	$masterParams["mDataSourceTable"]="usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["descarga_inventario_expirado"][$mIndex] = $masterParams;	
		$masterTablesData["descarga_inventario_expirado"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["descarga_inventario_expirado"][$mIndex]["detailKeys"][]="responsable";

$mIndex = 2-1;
			$strOriginalDetailsTable="lotes";
	$masterParams["mDataSourceTable"]="lotes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lotes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["descarga_inventario_expirado"][$mIndex] = $masterParams;	
		$masterTablesData["descarga_inventario_expirado"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["descarga_inventario_expirado"][$mIndex]["detailKeys"][]="lotes";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_descarga_inventario_expirado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   fecha,   lotes,   responsable";
$proto0["m_strFrom"] = "FROM descarga_inventario_expirado";
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
	"m_strTable" => "descarga_inventario_expirado"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "descarga_inventario_expirado"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "lotes",
	"m_strTable" => "descarga_inventario_expirado"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable",
	"m_strTable" => "descarga_inventario_expirado"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "descarga_inventario_expirado";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "fecha";
$proto14["m_columns"][] = "lotes";
$proto14["m_columns"][] = "responsable";
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
$queryData_descarga_inventario_expirado = createSqlQuery_descarga_inventario_expirado();
				$tdatadescarga_inventario_expirado[".sqlquery"] = $queryData_descarga_inventario_expirado;

$tableEvents["descarga_inventario_expirado"] = new eventsBase;
$tdatadescarga_inventario_expirado[".hasEvents"] = false;

$cipherer = new RunnerCipherer("descarga_inventario_expirado");

?>