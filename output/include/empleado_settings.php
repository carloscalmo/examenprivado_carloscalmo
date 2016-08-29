<?php
require_once(getabspath("classes/cipherer.php"));
$tdataempleado = array();
	$tdataempleado[".NumberOfChars"] = 80; 
	$tdataempleado[".ShortName"] = "empleado";
	$tdataempleado[".OwnerID"] = "";
	$tdataempleado[".OriginalTable"] = "empleado";

//	field labels
$fieldLabelsempleado = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempleado["Spanish"] = array();
	$fieldToolTipsempleado["Spanish"] = array();
	$fieldLabelsempleado["Spanish"]["id"] = "Código";
	$fieldToolTipsempleado["Spanish"]["id"] = "";
	$fieldLabelsempleado["Spanish"]["profesion"] = "Profesion";
	$fieldToolTipsempleado["Spanish"]["profesion"] = "";
	$fieldLabelsempleado["Spanish"]["puesto_id"] = "Puesto";
	$fieldToolTipsempleado["Spanish"]["puesto_id"] = "";
	$fieldLabelsempleado["Spanish"]["persona_id"] = "Empleado";
	$fieldToolTipsempleado["Spanish"]["persona_id"] = "";
	$fieldLabelsempleado["Spanish"]["medico_encargado"] = "Medico Encargado";
	$fieldToolTipsempleado["Spanish"]["medico_encargado"] = "";
	if (count($fieldToolTipsempleado["Spanish"]))
		$tdataempleado[".isUseToolTips"] = true;
}
	
	
	$tdataempleado[".NCSearch"] = true;



$tdataempleado[".shortTableName"] = "empleado";
$tdataempleado[".nSecOptions"] = 0;
$tdataempleado[".recsPerRowList"] = 1;
$tdataempleado[".mainTableOwnerID"] = "";
$tdataempleado[".moveNext"] = 1;
$tdataempleado[".nType"] = 0;

$tdataempleado[".strOriginalTableName"] = "empleado";




$tdataempleado[".showAddInPopup"] = true;

$tdataempleado[".showEditInPopup"] = true;

$tdataempleado[".showViewInPopup"] = true;

$tdataempleado[".fieldsForRegister"] = array();

$tdataempleado[".listAjax"] = false;

	$tdataempleado[".audit"] = true;

	$tdataempleado[".locking"] = false;

$tdataempleado[".listIcons"] = true;
$tdataempleado[".edit"] = true;
$tdataempleado[".view"] = true;


$tdataempleado[".printFriendly"] = true;

$tdataempleado[".delete"] = true;

$tdataempleado[".showSimpleSearchOptions"] = false;

$tdataempleado[".showSearchPanel"] = true;

if (isMobile())
	$tdataempleado[".isUseAjaxSuggest"] = false;
else 
	$tdataempleado[".isUseAjaxSuggest"] = true;

$tdataempleado[".rowHighlite"] = true;

// button handlers file names

$tdataempleado[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempleado[".isUseTimeForSearch"] = false;



$tdataempleado[".useDetailsPreview"] = true;

$tdataempleado[".allSearchFields"] = array();

$tdataempleado[".allSearchFields"][] = "id";
$tdataempleado[".allSearchFields"][] = "persona_id";
$tdataempleado[".allSearchFields"][] = "profesion";
$tdataempleado[".allSearchFields"][] = "puesto_id";

$tdataempleado[".googleLikeFields"][] = "id";
$tdataempleado[".googleLikeFields"][] = "profesion";
$tdataempleado[".googleLikeFields"][] = "puesto_id";
$tdataempleado[".googleLikeFields"][] = "persona_id";


$tdataempleado[".advSearchFields"][] = "id";
$tdataempleado[".advSearchFields"][] = "persona_id";
$tdataempleado[".advSearchFields"][] = "profesion";
$tdataempleado[".advSearchFields"][] = "puesto_id";

$tdataempleado[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
						


$tdataempleado[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataempleado[".strOrderBy"] = $tstrOrderBy;

$tdataempleado[".orderindexes"] = array();

$tdataempleado[".sqlHead"] = "SELECT id,   profesion,   puesto_id,   persona_id";
$tdataempleado[".sqlFrom"] = "FROM empleado";
$tdataempleado[".sqlWhereExpr"] = "";
$tdataempleado[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempleado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempleado[".arrGroupsPerPage"] = $arrGPP;

$tableKeysempleado = array();
$tableKeysempleado[] = "id";
$tableKeysempleado[] = "persona_id";
$tdataempleado[".Keys"] = $tableKeysempleado;

$tdataempleado[".listFields"] = array();
$tdataempleado[".listFields"][] = "id";
$tdataempleado[".listFields"][] = "persona_id";
$tdataempleado[".listFields"][] = "profesion";
$tdataempleado[".listFields"][] = "puesto_id";

$tdataempleado[".viewFields"] = array();
$tdataempleado[".viewFields"][] = "id";
$tdataempleado[".viewFields"][] = "persona_id";
$tdataempleado[".viewFields"][] = "profesion";
$tdataempleado[".viewFields"][] = "puesto_id";

$tdataempleado[".addFields"] = array();
$tdataempleado[".addFields"][] = "persona_id";
$tdataempleado[".addFields"][] = "profesion";
$tdataempleado[".addFields"][] = "puesto_id";

$tdataempleado[".inlineAddFields"] = array();

$tdataempleado[".editFields"] = array();
$tdataempleado[".editFields"][] = "persona_id";
$tdataempleado[".editFields"][] = "profesion";
$tdataempleado[".editFields"][] = "puesto_id";

$tdataempleado[".inlineEditFields"] = array();

$tdataempleado[".exportFields"] = array();

$tdataempleado[".printFields"] = array();
$tdataempleado[".printFields"][] = "id";
$tdataempleado[".printFields"][] = "persona_id";
$tdataempleado[".printFields"][] = "profesion";
$tdataempleado[".printFields"][] = "puesto_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "empleado";
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
	
		
		
	$tdataempleado["id"] = $fdata;
//	profesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "profesion";
	$fdata["GoodName"] = "profesion";
	$fdata["ownerTable"] = "empleado";
	$fdata["Label"] = "Profesion"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "profesion"; 
		$fdata["FullName"] = "profesion";
	
		
		
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
	
		
		
	$tdataempleado["profesion"] = $fdata;
//	puesto_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "puesto_id";
	$fdata["GoodName"] = "puesto_id";
	$fdata["ownerTable"] = "empleado";
	$fdata["Label"] = "Puesto"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "puesto_id"; 
		$fdata["FullName"] = "puesto_id";
	
		
		
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
				if(strpos(GetUserPermissions("empleado"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupTable"] = "puesto";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
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
	
		
		
	$tdataempleado["puesto_id"] = $fdata;
//	persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "persona_id";
	$fdata["GoodName"] = "persona_id";
	$fdata["ownerTable"] = "empleado";
	$fdata["Label"] = "Empleado"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "persona_id"; 
		$fdata["FullName"] = "persona_id";
	
		
		
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
				if(strpos(GetUserPermissions("empleado"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(nombre,' ',apellido)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "persona";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
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
	
		
		
	$tdataempleado["persona_id"] = $fdata;

	
$tables_data["empleado"]=&$tdataempleado;
$field_labels["empleado"] = &$fieldLabelsempleado;
$fieldToolTips["empleado"] = &$fieldToolTipsempleado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["empleado"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="usuarios";
	$detailsParam["dDataSourceTable"]="usuarios";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="usuarios";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["empleado"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["empleado"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["empleado"][$dIndex]["detailKeys"][]="empleado_id";

$dIndex = 2-1;
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
		
	$detailsTablesData["empleado"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["empleado"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["empleado"][$dIndex]["detailKeys"][]="encargado";

$dIndex = 3-1;
			$strOriginalDetailsTable="consulta";
	$detailsParam["dDataSourceTable"]="consulta";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="consulta";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["empleado"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["empleado"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["empleado"][$dIndex]["detailKeys"][]="medico_encargado";

$dIndex = 4-1;
			$strOriginalDetailsTable="empleados_cirugia";
	$detailsParam["dDataSourceTable"]="empleados_cirugia";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="empleados_cirugia";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["empleado"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["empleado"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["empleado"][$dIndex]["detailKeys"][]="empleado_id";

$dIndex = 5-1;
			$strOriginalDetailsTable="solicitud_servicio";
	$detailsParam["dDataSourceTable"]="solicitud_servicio";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="solicitud_servicio";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["empleado"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["empleado"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["empleado"][$dIndex]["detailKeys"][]="solicitante";

$dIndex = 6-1;
			$strOriginalDetailsTable="solicitud_medicamento";
	$detailsParam["dDataSourceTable"]="solicitud_medicamento";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="solicitud_medicamento";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["empleado"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["empleado"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["empleado"][$dIndex]["detailKeys"][]="responsable";

	
// tables which are master tables for current table (detail)
$masterTablesData["empleado"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="persona";
	$masterParams["mDataSourceTable"]="persona";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "persona";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["empleado"][$mIndex] = $masterParams;	
		$masterTablesData["empleado"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["empleado"][$mIndex]["detailKeys"][]="persona_id";

$mIndex = 2-1;
			$strOriginalDetailsTable="puesto";
	$masterParams["mDataSourceTable"]="puesto";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "puesto";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["empleado"][$mIndex] = $masterParams;	
		$masterTablesData["empleado"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["empleado"][$mIndex]["detailKeys"][]="puesto_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_empleado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   profesion,   puesto_id,   persona_id";
$proto0["m_strFrom"] = "FROM empleado";
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
	"m_strTable" => "empleado"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "profesion",
	"m_strTable" => "empleado"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "puesto_id",
	"m_strTable" => "empleado"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "persona_id",
	"m_strTable" => "empleado"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "empleado";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "profesion";
$proto14["m_columns"][] = "puesto_id";
$proto14["m_columns"][] = "persona_id";
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
$queryData_empleado = createSqlQuery_empleado();
				$tdataempleado[".sqlquery"] = $queryData_empleado;

$tableEvents["empleado"] = new eventsBase;
$tdataempleado[".hasEvents"] = false;

$cipherer = new RunnerCipherer("empleado");

?>