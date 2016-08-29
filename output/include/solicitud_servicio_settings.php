<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasolicitud_servicio = array();
	$tdatasolicitud_servicio[".NumberOfChars"] = 80; 
	$tdatasolicitud_servicio[".ShortName"] = "solicitud_servicio";
	$tdatasolicitud_servicio[".OwnerID"] = "";
	$tdatasolicitud_servicio[".OriginalTable"] = "solicitud_servicio";

//	field labels
$fieldLabelssolicitud_servicio = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssolicitud_servicio["Spanish"] = array();
	$fieldToolTipssolicitud_servicio["Spanish"] = array();
	$fieldLabelssolicitud_servicio["Spanish"]["id"] = "Identificador";
	$fieldToolTipssolicitud_servicio["Spanish"]["id"] = "";
	$fieldLabelssolicitud_servicio["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipssolicitud_servicio["Spanish"]["fecha"] = "";
	$fieldLabelssolicitud_servicio["Spanish"]["consulta_id"] = "Código de Consulta";
	$fieldToolTipssolicitud_servicio["Spanish"]["consulta_id"] = "";
	$fieldLabelssolicitud_servicio["Spanish"]["servicio_id"] = "Código de Servicio";
	$fieldToolTipssolicitud_servicio["Spanish"]["servicio_id"] = "";
	$fieldLabelssolicitud_servicio["Spanish"]["solicitante"] = "Médico Encargado";
	$fieldToolTipssolicitud_servicio["Spanish"]["solicitante"] = "";
	if (count($fieldToolTipssolicitud_servicio["Spanish"]))
		$tdatasolicitud_servicio[".isUseToolTips"] = true;
}
	
	
	$tdatasolicitud_servicio[".NCSearch"] = true;



$tdatasolicitud_servicio[".shortTableName"] = "solicitud_servicio";
$tdatasolicitud_servicio[".nSecOptions"] = 0;
$tdatasolicitud_servicio[".recsPerRowList"] = 1;
$tdatasolicitud_servicio[".mainTableOwnerID"] = "";
$tdatasolicitud_servicio[".moveNext"] = 1;
$tdatasolicitud_servicio[".nType"] = 0;

$tdatasolicitud_servicio[".strOriginalTableName"] = "solicitud_servicio";




$tdatasolicitud_servicio[".showAddInPopup"] = true;

$tdatasolicitud_servicio[".showEditInPopup"] = true;

$tdatasolicitud_servicio[".showViewInPopup"] = true;

$tdatasolicitud_servicio[".fieldsForRegister"] = array();

$tdatasolicitud_servicio[".listAjax"] = false;

	$tdatasolicitud_servicio[".audit"] = true;

	$tdatasolicitud_servicio[".locking"] = false;

$tdatasolicitud_servicio[".listIcons"] = true;
$tdatasolicitud_servicio[".edit"] = true;
$tdatasolicitud_servicio[".view"] = true;


$tdatasolicitud_servicio[".printFriendly"] = true;

$tdatasolicitud_servicio[".delete"] = true;

$tdatasolicitud_servicio[".showSimpleSearchOptions"] = false;

$tdatasolicitud_servicio[".showSearchPanel"] = true;

if (isMobile())
	$tdatasolicitud_servicio[".isUseAjaxSuggest"] = false;
else 
	$tdatasolicitud_servicio[".isUseAjaxSuggest"] = true;

$tdatasolicitud_servicio[".rowHighlite"] = true;

// button handlers file names

$tdatasolicitud_servicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasolicitud_servicio[".isUseTimeForSearch"] = false;




$tdatasolicitud_servicio[".allSearchFields"] = array();

$tdatasolicitud_servicio[".allSearchFields"][] = "id";
$tdatasolicitud_servicio[".allSearchFields"][] = "fecha";
$tdatasolicitud_servicio[".allSearchFields"][] = "consulta_id";
$tdatasolicitud_servicio[".allSearchFields"][] = "servicio_id";
$tdatasolicitud_servicio[".allSearchFields"][] = "solicitante";

$tdatasolicitud_servicio[".googleLikeFields"][] = "id";
$tdatasolicitud_servicio[".googleLikeFields"][] = "fecha";
$tdatasolicitud_servicio[".googleLikeFields"][] = "consulta_id";
$tdatasolicitud_servicio[".googleLikeFields"][] = "servicio_id";
$tdatasolicitud_servicio[".googleLikeFields"][] = "solicitante";


$tdatasolicitud_servicio[".advSearchFields"][] = "id";
$tdatasolicitud_servicio[".advSearchFields"][] = "fecha";
$tdatasolicitud_servicio[".advSearchFields"][] = "consulta_id";
$tdatasolicitud_servicio[".advSearchFields"][] = "servicio_id";
$tdatasolicitud_servicio[".advSearchFields"][] = "solicitante";

$tdatasolicitud_servicio[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasolicitud_servicio[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasolicitud_servicio[".strOrderBy"] = $tstrOrderBy;

$tdatasolicitud_servicio[".orderindexes"] = array();

$tdatasolicitud_servicio[".sqlHead"] = "SELECT id,   fecha,   consulta_id,   servicio_id,   solicitante";
$tdatasolicitud_servicio[".sqlFrom"] = "FROM solicitud_servicio";
$tdatasolicitud_servicio[".sqlWhereExpr"] = "";
$tdatasolicitud_servicio[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasolicitud_servicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasolicitud_servicio[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssolicitud_servicio = array();
$tableKeyssolicitud_servicio[] = "id";
$tableKeyssolicitud_servicio[] = "consulta_id";
$tdatasolicitud_servicio[".Keys"] = $tableKeyssolicitud_servicio;

$tdatasolicitud_servicio[".listFields"] = array();
$tdatasolicitud_servicio[".listFields"][] = "id";
$tdatasolicitud_servicio[".listFields"][] = "fecha";
$tdatasolicitud_servicio[".listFields"][] = "consulta_id";
$tdatasolicitud_servicio[".listFields"][] = "servicio_id";
$tdatasolicitud_servicio[".listFields"][] = "solicitante";

$tdatasolicitud_servicio[".viewFields"] = array();
$tdatasolicitud_servicio[".viewFields"][] = "id";
$tdatasolicitud_servicio[".viewFields"][] = "fecha";
$tdatasolicitud_servicio[".viewFields"][] = "consulta_id";
$tdatasolicitud_servicio[".viewFields"][] = "servicio_id";
$tdatasolicitud_servicio[".viewFields"][] = "solicitante";

$tdatasolicitud_servicio[".addFields"] = array();
$tdatasolicitud_servicio[".addFields"][] = "fecha";
$tdatasolicitud_servicio[".addFields"][] = "consulta_id";
$tdatasolicitud_servicio[".addFields"][] = "servicio_id";
$tdatasolicitud_servicio[".addFields"][] = "solicitante";

$tdatasolicitud_servicio[".inlineAddFields"] = array();

$tdatasolicitud_servicio[".editFields"] = array();
$tdatasolicitud_servicio[".editFields"][] = "fecha";
$tdatasolicitud_servicio[".editFields"][] = "consulta_id";
$tdatasolicitud_servicio[".editFields"][] = "servicio_id";
$tdatasolicitud_servicio[".editFields"][] = "solicitante";

$tdatasolicitud_servicio[".inlineEditFields"] = array();

$tdatasolicitud_servicio[".exportFields"] = array();

$tdatasolicitud_servicio[".printFields"] = array();
$tdatasolicitud_servicio[".printFields"][] = "id";
$tdatasolicitud_servicio[".printFields"][] = "fecha";
$tdatasolicitud_servicio[".printFields"][] = "consulta_id";
$tdatasolicitud_servicio[".printFields"][] = "servicio_id";
$tdatasolicitud_servicio[".printFields"][] = "solicitante";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "solicitud_servicio";
	$fdata["Label"] = "Identificador"; 
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
	
		
		
	$tdatasolicitud_servicio["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "solicitud_servicio";
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasolicitud_servicio["fecha"] = $fdata;
//	consulta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "consulta_id";
	$fdata["GoodName"] = "consulta_id";
	$fdata["ownerTable"] = "solicitud_servicio";
	$fdata["Label"] = "Código de Consulta"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "consulta_id"; 
		$fdata["FullName"] = "consulta_id";
	
		
		
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
				if(strpos(GetUserPermissions("solicitud_servicio"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(consulta.id,' ',consulta.fecha,' ',persona.nombre,' ',persona.apellido)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "Copy of consulta";
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
	
		
		
	$tdatasolicitud_servicio["consulta_id"] = $fdata;
//	servicio_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "servicio_id";
	$fdata["GoodName"] = "servicio_id";
	$fdata["ownerTable"] = "solicitud_servicio";
	$fdata["Label"] = "Código de Servicio"; 
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
				if(strpos(GetUserPermissions("solicitud_servicio"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(id,' ',nombre,' ',descripcion)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "servicio";
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
	
		
		
	$tdatasolicitud_servicio["servicio_id"] = $fdata;
//	solicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "solicitante";
	$fdata["GoodName"] = "solicitante";
	$fdata["ownerTable"] = "solicitud_servicio";
	$fdata["Label"] = "Médico Encargado"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "solicitante"; 
		$fdata["FullName"] = "solicitante";
	
		
		
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
				if(strpos(GetUserPermissions("solicitud_servicio"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = " concat(empleado.id,' ',persona.nombre,' ',persona.apellido) 
";
	
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
	
		
		
	$tdatasolicitud_servicio["solicitante"] = $fdata;

	
$tables_data["solicitud_servicio"]=&$tdatasolicitud_servicio;
$field_labels["solicitud_servicio"] = &$fieldLabelssolicitud_servicio;
$fieldToolTips["solicitud_servicio"] = &$fieldToolTipssolicitud_servicio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["solicitud_servicio"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["solicitud_servicio"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="empleado";
	$masterParams["mDataSourceTable"]="empleado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "empleado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["solicitud_servicio"][$mIndex] = $masterParams;	
		$masterTablesData["solicitud_servicio"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["solicitud_servicio"][$mIndex]["detailKeys"][]="solicitante";

$mIndex = 2-1;
			$strOriginalDetailsTable="consulta";
	$masterParams["mDataSourceTable"]="consulta";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "consulta";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["solicitud_servicio"][$mIndex] = $masterParams;	
		$masterTablesData["solicitud_servicio"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["solicitud_servicio"][$mIndex]["detailKeys"][]="consulta_id";

$mIndex = 3-1;
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
	$masterTablesData["solicitud_servicio"][$mIndex] = $masterParams;	
		$masterTablesData["solicitud_servicio"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["solicitud_servicio"][$mIndex]["detailKeys"][]="servicio_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_solicitud_servicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   fecha,   consulta_id,   servicio_id,   solicitante";
$proto0["m_strFrom"] = "FROM solicitud_servicio";
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
	"m_strTable" => "solicitud_servicio"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "solicitud_servicio"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "consulta_id",
	"m_strTable" => "solicitud_servicio"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "servicio_id",
	"m_strTable" => "solicitud_servicio"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "solicitante",
	"m_strTable" => "solicitud_servicio"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "solicitud_servicio";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "fecha";
$proto16["m_columns"][] = "consulta_id";
$proto16["m_columns"][] = "servicio_id";
$proto16["m_columns"][] = "solicitante";
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
$queryData_solicitud_servicio = createSqlQuery_solicitud_servicio();
					$tdatasolicitud_servicio[".sqlquery"] = $queryData_solicitud_servicio;

$tableEvents["solicitud_servicio"] = new eventsBase;
$tdatasolicitud_servicio[".hasEvents"] = false;

$cipherer = new RunnerCipherer("solicitud_servicio");

?>