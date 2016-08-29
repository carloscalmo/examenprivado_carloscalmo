<?php
require_once(getabspath("classes/cipherer.php"));
$tdataCopy_of_empleado = array();
	$tdataCopy_of_empleado[".NumberOfChars"] = 80; 
	$tdataCopy_of_empleado[".ShortName"] = "Copy_of_empleado";
	$tdataCopy_of_empleado[".OwnerID"] = "";
	$tdataCopy_of_empleado[".OriginalTable"] = "empleado";

//	field labels
$fieldLabelsCopy_of_empleado = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCopy_of_empleado["Spanish"] = array();
	$fieldToolTipsCopy_of_empleado["Spanish"] = array();
	$fieldLabelsCopy_of_empleado["Spanish"]["id"] = "Código";
	$fieldToolTipsCopy_of_empleado["Spanish"]["id"] = "";
	$fieldLabelsCopy_of_empleado["Spanish"]["persona_id"] = "Empleado";
	$fieldToolTipsCopy_of_empleado["Spanish"]["persona_id"] = "";
	$fieldLabelsCopy_of_empleado["Spanish"]["medico_encargado"] = "Medico Encargado";
	$fieldToolTipsCopy_of_empleado["Spanish"]["medico_encargado"] = "";
	$fieldLabelsCopy_of_empleado["Spanish"]["id1"] = "Id1";
	$fieldToolTipsCopy_of_empleado["Spanish"]["id1"] = "";
	$fieldLabelsCopy_of_empleado["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsCopy_of_empleado["Spanish"]["nombre"] = "";
	$fieldLabelsCopy_of_empleado["Spanish"]["apellido"] = "Apellido";
	$fieldToolTipsCopy_of_empleado["Spanish"]["apellido"] = "";
	$fieldLabelsCopy_of_empleado["Spanish"]["encargado"] = "Encargado";
	$fieldToolTipsCopy_of_empleado["Spanish"]["encargado"] = "";
	$fieldLabelsCopy_of_empleado["Spanish"]["responsable"] = "Responsable";
	$fieldToolTipsCopy_of_empleado["Spanish"]["responsable"] = "";
	$fieldLabelsCopy_of_empleado["Spanish"]["solicitante"] = "Solicitante";
	$fieldToolTipsCopy_of_empleado["Spanish"]["solicitante"] = "";
	if (count($fieldToolTipsCopy_of_empleado["Spanish"]))
		$tdataCopy_of_empleado[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_empleado[".NCSearch"] = true;



$tdataCopy_of_empleado[".shortTableName"] = "Copy_of_empleado";
$tdataCopy_of_empleado[".nSecOptions"] = 0;
$tdataCopy_of_empleado[".recsPerRowList"] = 1;
$tdataCopy_of_empleado[".mainTableOwnerID"] = "";
$tdataCopy_of_empleado[".moveNext"] = 1;
$tdataCopy_of_empleado[".nType"] = 1;

$tdataCopy_of_empleado[".strOriginalTableName"] = "empleado";




$tdataCopy_of_empleado[".showAddInPopup"] = true;

$tdataCopy_of_empleado[".showEditInPopup"] = true;

$tdataCopy_of_empleado[".showViewInPopup"] = true;

$tdataCopy_of_empleado[".fieldsForRegister"] = array();

$tdataCopy_of_empleado[".listAjax"] = false;

	$tdataCopy_of_empleado[".audit"] = false;

	$tdataCopy_of_empleado[".locking"] = false;

$tdataCopy_of_empleado[".listIcons"] = true;




$tdataCopy_of_empleado[".showSimpleSearchOptions"] = false;

$tdataCopy_of_empleado[".showSearchPanel"] = true;

if (isMobile())
	$tdataCopy_of_empleado[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_empleado[".isUseAjaxSuggest"] = true;

$tdataCopy_of_empleado[".rowHighlite"] = true;

// button handlers file names

$tdataCopy_of_empleado[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_empleado[".isUseTimeForSearch"] = false;




$tdataCopy_of_empleado[".allSearchFields"] = array();

$tdataCopy_of_empleado[".allSearchFields"][] = "id";
$tdataCopy_of_empleado[".allSearchFields"][] = "persona_id";
$tdataCopy_of_empleado[".allSearchFields"][] = "id1";
$tdataCopy_of_empleado[".allSearchFields"][] = "nombre";
$tdataCopy_of_empleado[".allSearchFields"][] = "apellido";

$tdataCopy_of_empleado[".googleLikeFields"][] = "id";
$tdataCopy_of_empleado[".googleLikeFields"][] = "persona_id";
$tdataCopy_of_empleado[".googleLikeFields"][] = "id1";
$tdataCopy_of_empleado[".googleLikeFields"][] = "nombre";
$tdataCopy_of_empleado[".googleLikeFields"][] = "apellido";


$tdataCopy_of_empleado[".advSearchFields"][] = "id";
$tdataCopy_of_empleado[".advSearchFields"][] = "persona_id";
$tdataCopy_of_empleado[".advSearchFields"][] = "id1";
$tdataCopy_of_empleado[".advSearchFields"][] = "nombre";
$tdataCopy_of_empleado[".advSearchFields"][] = "apellido";

$tdataCopy_of_empleado[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataCopy_of_empleado[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_empleado[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_empleado[".orderindexes"] = array();

$tdataCopy_of_empleado[".sqlHead"] = "SELECT empleado.id,  empleado.persona_id,  persona.id AS id1,  persona.nombre,  persona.apellido";
$tdataCopy_of_empleado[".sqlFrom"] = "FROM empleado  INNER JOIN persona ON persona.id = empleado.persona_id";
$tdataCopy_of_empleado[".sqlWhereExpr"] = "";
$tdataCopy_of_empleado[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_empleado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_empleado[".arrGroupsPerPage"] = $arrGPP;

$tableKeysCopy_of_empleado = array();
$tableKeysCopy_of_empleado[] = "id";
$tdataCopy_of_empleado[".Keys"] = $tableKeysCopy_of_empleado;

$tdataCopy_of_empleado[".listFields"] = array();
$tdataCopy_of_empleado[".listFields"][] = "id";
$tdataCopy_of_empleado[".listFields"][] = "persona_id";
$tdataCopy_of_empleado[".listFields"][] = "id1";
$tdataCopy_of_empleado[".listFields"][] = "nombre";
$tdataCopy_of_empleado[".listFields"][] = "apellido";

$tdataCopy_of_empleado[".viewFields"] = array();
$tdataCopy_of_empleado[".viewFields"][] = "id";
$tdataCopy_of_empleado[".viewFields"][] = "persona_id";
$tdataCopy_of_empleado[".viewFields"][] = "id1";
$tdataCopy_of_empleado[".viewFields"][] = "nombre";
$tdataCopy_of_empleado[".viewFields"][] = "apellido";

$tdataCopy_of_empleado[".addFields"] = array();
$tdataCopy_of_empleado[".addFields"][] = "persona_id";

$tdataCopy_of_empleado[".inlineAddFields"] = array();
$tdataCopy_of_empleado[".inlineAddFields"][] = "persona_id";
$tdataCopy_of_empleado[".inlineAddFields"][] = "id1";
$tdataCopy_of_empleado[".inlineAddFields"][] = "nombre";
$tdataCopy_of_empleado[".inlineAddFields"][] = "apellido";

$tdataCopy_of_empleado[".editFields"] = array();
$tdataCopy_of_empleado[".editFields"][] = "persona_id";

$tdataCopy_of_empleado[".inlineEditFields"] = array();
$tdataCopy_of_empleado[".inlineEditFields"][] = "persona_id";
$tdataCopy_of_empleado[".inlineEditFields"][] = "id1";
$tdataCopy_of_empleado[".inlineEditFields"][] = "nombre";
$tdataCopy_of_empleado[".inlineEditFields"][] = "apellido";

$tdataCopy_of_empleado[".exportFields"] = array();
$tdataCopy_of_empleado[".exportFields"][] = "id";
$tdataCopy_of_empleado[".exportFields"][] = "persona_id";
$tdataCopy_of_empleado[".exportFields"][] = "id1";
$tdataCopy_of_empleado[".exportFields"][] = "nombre";
$tdataCopy_of_empleado[".exportFields"][] = "apellido";

$tdataCopy_of_empleado[".printFields"] = array();
$tdataCopy_of_empleado[".printFields"][] = "id";
$tdataCopy_of_empleado[".printFields"][] = "persona_id";
$tdataCopy_of_empleado[".printFields"][] = "id1";
$tdataCopy_of_empleado[".printFields"][] = "nombre";
$tdataCopy_of_empleado[".printFields"][] = "apellido";

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
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "empleado.id";
	
		
		
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
	
		
		
	$tdataCopy_of_empleado["id"] = $fdata;
//	persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "persona_id";
	$fdata["GoodName"] = "persona_id";
	$fdata["ownerTable"] = "empleado";
	$fdata["Label"] = "Empleado"; 
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
	
		$fdata["strField"] = "persona_id"; 
		$fdata["FullName"] = "empleado.persona_id";
	
		
		
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
	
		
		
	$tdataCopy_of_empleado["persona_id"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "persona";
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
		$fdata["FullName"] = "persona.id";
	
		
		
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
	
		
		
	$tdataCopy_of_empleado["id1"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "persona";
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
		$fdata["FullName"] = "persona.nombre";
	
		
		
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
	
		
		
	$tdataCopy_of_empleado["nombre"] = $fdata;
//	apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "apellido";
	$fdata["GoodName"] = "apellido";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Apellido"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "apellido"; 
		$fdata["FullName"] = "persona.apellido";
	
		
		
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
	
		
		
	$tdataCopy_of_empleado["apellido"] = $fdata;

	
$tables_data["Copy of empleado"]=&$tdataCopy_of_empleado;
$field_labels["Copy_of_empleado"] = &$fieldLabelsCopy_of_empleado;
$fieldToolTips["Copy of empleado"] = &$fieldToolTipsCopy_of_empleado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of empleado"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of empleado"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_empleado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "empleado.id,  empleado.persona_id,  persona.id AS id1,  persona.nombre,  persona.apellido";
$proto0["m_strFrom"] = "FROM empleado  INNER JOIN persona ON persona.id = empleado.persona_id";
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
	"m_strName" => "persona_id",
	"m_strTable" => "empleado"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "persona"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "persona"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido",
	"m_strTable" => "persona"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "empleado";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "profesion";
$proto16["m_columns"][] = "puesto_id";
$proto16["m_columns"][] = "persona_id";
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
$proto20["m_strName"] = "persona";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "nombre";
$proto20["m_columns"][] = "apellido";
$proto20["m_columns"][] = "fecha_nacimiento";
$proto20["m_columns"][] = "cui";
$proto20["m_columns"][] = "direccion";
$proto20["m_columns"][] = "telefono";
$proto20["m_columns"][] = "nit";
$proto20["m_columns"][] = "genero_id";
$proto20["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "persona.id = empleado.persona_id";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "persona"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= empleado.persona_id";
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
$queryData_Copy_of_empleado = createSqlQuery_Copy_of_empleado();
					$tdataCopy_of_empleado[".sqlquery"] = $queryData_Copy_of_empleado;

$tableEvents["Copy of empleado"] = new eventsBase;
$tdataCopy_of_empleado[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of empleado");

?>