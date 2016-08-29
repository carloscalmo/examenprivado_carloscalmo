<?php
require_once(getabspath("classes/cipherer.php"));
$tdatahospitalizacion = array();
	$tdatahospitalizacion[".NumberOfChars"] = 80; 
	$tdatahospitalizacion[".ShortName"] = "hospitalizacion";
	$tdatahospitalizacion[".OwnerID"] = "";
	$tdatahospitalizacion[".OriginalTable"] = "hospitalizacion";

//	field labels
$fieldLabelshospitalizacion = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshospitalizacion["Spanish"] = array();
	$fieldToolTipshospitalizacion["Spanish"] = array();
	$fieldLabelshospitalizacion["Spanish"]["id"] = "Código";
	$fieldToolTipshospitalizacion["Spanish"]["id"] = "";
	$fieldLabelshospitalizacion["Spanish"]["numero_cama"] = "Número de Cama";
	$fieldToolTipshospitalizacion["Spanish"]["numero_cama"] = "";
	$fieldLabelshospitalizacion["Spanish"]["ambiente_id"] = "Ambiente";
	$fieldToolTipshospitalizacion["Spanish"]["ambiente_id"] = "";
	$fieldLabelshospitalizacion["Spanish"]["consulta_id"] = "Código de Consulta";
	$fieldToolTipshospitalizacion["Spanish"]["consulta_id"] = "";
	$fieldLabelshospitalizacion["Spanish"]["fecha_ingreso"] = "Fecha de Ingreso";
	$fieldToolTipshospitalizacion["Spanish"]["fecha_ingreso"] = "";
	$fieldLabelshospitalizacion["Spanish"]["fecha_egreso"] = "Fecha de Egreso";
	$fieldToolTipshospitalizacion["Spanish"]["fecha_egreso"] = "";
	if (count($fieldToolTipshospitalizacion["Spanish"]))
		$tdatahospitalizacion[".isUseToolTips"] = true;
}
	
	
	$tdatahospitalizacion[".NCSearch"] = true;



$tdatahospitalizacion[".shortTableName"] = "hospitalizacion";
$tdatahospitalizacion[".nSecOptions"] = 0;
$tdatahospitalizacion[".recsPerRowList"] = 1;
$tdatahospitalizacion[".mainTableOwnerID"] = "";
$tdatahospitalizacion[".moveNext"] = 1;
$tdatahospitalizacion[".nType"] = 0;

$tdatahospitalizacion[".strOriginalTableName"] = "hospitalizacion";




$tdatahospitalizacion[".showAddInPopup"] = true;

$tdatahospitalizacion[".showEditInPopup"] = true;

$tdatahospitalizacion[".showViewInPopup"] = true;

$tdatahospitalizacion[".fieldsForRegister"] = array();

$tdatahospitalizacion[".listAjax"] = false;

	$tdatahospitalizacion[".audit"] = true;

	$tdatahospitalizacion[".locking"] = false;

$tdatahospitalizacion[".listIcons"] = true;
$tdatahospitalizacion[".edit"] = true;
$tdatahospitalizacion[".view"] = true;


$tdatahospitalizacion[".printFriendly"] = true;

$tdatahospitalizacion[".delete"] = true;

$tdatahospitalizacion[".showSimpleSearchOptions"] = false;

$tdatahospitalizacion[".showSearchPanel"] = true;

if (isMobile())
	$tdatahospitalizacion[".isUseAjaxSuggest"] = false;
else 
	$tdatahospitalizacion[".isUseAjaxSuggest"] = true;

$tdatahospitalizacion[".rowHighlite"] = true;

// button handlers file names

$tdatahospitalizacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahospitalizacion[".isUseTimeForSearch"] = false;




$tdatahospitalizacion[".allSearchFields"] = array();

$tdatahospitalizacion[".allSearchFields"][] = "id";
$tdatahospitalizacion[".allSearchFields"][] = "consulta_id";
$tdatahospitalizacion[".allSearchFields"][] = "ambiente_id";
$tdatahospitalizacion[".allSearchFields"][] = "numero_cama";
$tdatahospitalizacion[".allSearchFields"][] = "fecha_ingreso";
$tdatahospitalizacion[".allSearchFields"][] = "fecha_egreso";

$tdatahospitalizacion[".googleLikeFields"][] = "id";
$tdatahospitalizacion[".googleLikeFields"][] = "numero_cama";
$tdatahospitalizacion[".googleLikeFields"][] = "ambiente_id";
$tdatahospitalizacion[".googleLikeFields"][] = "consulta_id";
$tdatahospitalizacion[".googleLikeFields"][] = "fecha_ingreso";
$tdatahospitalizacion[".googleLikeFields"][] = "fecha_egreso";


$tdatahospitalizacion[".advSearchFields"][] = "id";
$tdatahospitalizacion[".advSearchFields"][] = "consulta_id";
$tdatahospitalizacion[".advSearchFields"][] = "ambiente_id";
$tdatahospitalizacion[".advSearchFields"][] = "numero_cama";
$tdatahospitalizacion[".advSearchFields"][] = "fecha_ingreso";
$tdatahospitalizacion[".advSearchFields"][] = "fecha_egreso";

$tdatahospitalizacion[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatahospitalizacion[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahospitalizacion[".strOrderBy"] = $tstrOrderBy;

$tdatahospitalizacion[".orderindexes"] = array();

$tdatahospitalizacion[".sqlHead"] = "SELECT id,   numero_cama,   ambiente_id,   consulta_id,   fecha_ingreso,   fecha_egreso";
$tdatahospitalizacion[".sqlFrom"] = "FROM hospitalizacion";
$tdatahospitalizacion[".sqlWhereExpr"] = "";
$tdatahospitalizacion[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahospitalizacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahospitalizacion[".arrGroupsPerPage"] = $arrGPP;

$tableKeyshospitalizacion = array();
$tableKeyshospitalizacion[] = "id";
$tableKeyshospitalizacion[] = "consulta_id";
$tdatahospitalizacion[".Keys"] = $tableKeyshospitalizacion;

$tdatahospitalizacion[".listFields"] = array();
$tdatahospitalizacion[".listFields"][] = "id";
$tdatahospitalizacion[".listFields"][] = "consulta_id";
$tdatahospitalizacion[".listFields"][] = "ambiente_id";
$tdatahospitalizacion[".listFields"][] = "numero_cama";
$tdatahospitalizacion[".listFields"][] = "fecha_ingreso";
$tdatahospitalizacion[".listFields"][] = "fecha_egreso";

$tdatahospitalizacion[".viewFields"] = array();
$tdatahospitalizacion[".viewFields"][] = "id";
$tdatahospitalizacion[".viewFields"][] = "consulta_id";
$tdatahospitalizacion[".viewFields"][] = "ambiente_id";
$tdatahospitalizacion[".viewFields"][] = "numero_cama";
$tdatahospitalizacion[".viewFields"][] = "fecha_ingreso";
$tdatahospitalizacion[".viewFields"][] = "fecha_egreso";

$tdatahospitalizacion[".addFields"] = array();
$tdatahospitalizacion[".addFields"][] = "consulta_id";
$tdatahospitalizacion[".addFields"][] = "ambiente_id";
$tdatahospitalizacion[".addFields"][] = "numero_cama";
$tdatahospitalizacion[".addFields"][] = "fecha_ingreso";
$tdatahospitalizacion[".addFields"][] = "fecha_egreso";

$tdatahospitalizacion[".inlineAddFields"] = array();

$tdatahospitalizacion[".editFields"] = array();
$tdatahospitalizacion[".editFields"][] = "consulta_id";
$tdatahospitalizacion[".editFields"][] = "ambiente_id";
$tdatahospitalizacion[".editFields"][] = "numero_cama";
$tdatahospitalizacion[".editFields"][] = "fecha_ingreso";
$tdatahospitalizacion[".editFields"][] = "fecha_egreso";

$tdatahospitalizacion[".inlineEditFields"] = array();

$tdatahospitalizacion[".exportFields"] = array();

$tdatahospitalizacion[".printFields"] = array();
$tdatahospitalizacion[".printFields"][] = "id";
$tdatahospitalizacion[".printFields"][] = "consulta_id";
$tdatahospitalizacion[".printFields"][] = "ambiente_id";
$tdatahospitalizacion[".printFields"][] = "numero_cama";
$tdatahospitalizacion[".printFields"][] = "fecha_ingreso";
$tdatahospitalizacion[".printFields"][] = "fecha_egreso";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hospitalizacion";
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
	
		
		
	$tdatahospitalizacion["id"] = $fdata;
//	numero_cama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "numero_cama";
	$fdata["GoodName"] = "numero_cama";
	$fdata["ownerTable"] = "hospitalizacion";
	$fdata["Label"] = "Número de Cama"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "numero_cama"; 
		$fdata["FullName"] = "numero_cama";
	
		
		
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
	
		
		
	$tdatahospitalizacion["numero_cama"] = $fdata;
//	ambiente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ambiente_id";
	$fdata["GoodName"] = "ambiente_id";
	$fdata["ownerTable"] = "hospitalizacion";
	$fdata["Label"] = "Ambiente"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "ambiente_id"; 
		$fdata["FullName"] = "ambiente_id";
	
		
		
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
				if(strpos(GetUserPermissions("hospitalizacion"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "idtipo_ambiente";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupTable"] = "ambiente";
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
	
		
		
	$tdatahospitalizacion["ambiente_id"] = $fdata;
//	consulta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "consulta_id";
	$fdata["GoodName"] = "consulta_id";
	$fdata["ownerTable"] = "hospitalizacion";
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
				if(strpos(GetUserPermissions("hospitalizacion"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(consulta.id,' ',persona.nombre,' ',persona.apellido,' ',consulta.fecha) ";
	
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
	
		
		
	$tdatahospitalizacion["consulta_id"] = $fdata;
//	fecha_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_ingreso";
	$fdata["GoodName"] = "fecha_ingreso";
	$fdata["ownerTable"] = "hospitalizacion";
	$fdata["Label"] = "Fecha de Ingreso"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha_ingreso"; 
		$fdata["FullName"] = "fecha_ingreso";
	
		
		
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
	
		
		
	$tdatahospitalizacion["fecha_ingreso"] = $fdata;
//	fecha_egreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_egreso";
	$fdata["GoodName"] = "fecha_egreso";
	$fdata["ownerTable"] = "hospitalizacion";
	$fdata["Label"] = "Fecha de Egreso"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha_egreso"; 
		$fdata["FullName"] = "fecha_egreso";
	
		
		
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
	
		
		
	$tdatahospitalizacion["fecha_egreso"] = $fdata;

	
$tables_data["hospitalizacion"]=&$tdatahospitalizacion;
$field_labels["hospitalizacion"] = &$fieldLabelshospitalizacion;
$fieldToolTips["hospitalizacion"] = &$fieldToolTipshospitalizacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hospitalizacion"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["hospitalizacion"] = array();

$mIndex = 1-1;
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
	$masterTablesData["hospitalizacion"][$mIndex] = $masterParams;	
		$masterTablesData["hospitalizacion"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["hospitalizacion"][$mIndex]["detailKeys"][]="consulta_id";

$mIndex = 2-1;
			$strOriginalDetailsTable="ambiente";
	$masterParams["mDataSourceTable"]="ambiente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ambiente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["hospitalizacion"][$mIndex] = $masterParams;	
		$masterTablesData["hospitalizacion"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["hospitalizacion"][$mIndex]["detailKeys"][]="ambiente_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hospitalizacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   numero_cama,   ambiente_id,   consulta_id,   fecha_ingreso,   fecha_egreso";
$proto0["m_strFrom"] = "FROM hospitalizacion";
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
	"m_strTable" => "hospitalizacion"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_cama",
	"m_strTable" => "hospitalizacion"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ambiente_id",
	"m_strTable" => "hospitalizacion"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "consulta_id",
	"m_strTable" => "hospitalizacion"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ingreso",
	"m_strTable" => "hospitalizacion"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_egreso",
	"m_strTable" => "hospitalizacion"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "hospitalizacion";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "numero_cama";
$proto18["m_columns"][] = "ambiente_id";
$proto18["m_columns"][] = "consulta_id";
$proto18["m_columns"][] = "fecha_ingreso";
$proto18["m_columns"][] = "fecha_egreso";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hospitalizacion = createSqlQuery_hospitalizacion();
						$tdatahospitalizacion[".sqlquery"] = $queryData_hospitalizacion;

include_once(getabspath("include/hospitalizacion_events.php"));
$tableEvents["hospitalizacion"] = new eventclass_hospitalizacion;
$tdatahospitalizacion[".hasEvents"] = true;

$cipherer = new RunnerCipherer("hospitalizacion");

?>