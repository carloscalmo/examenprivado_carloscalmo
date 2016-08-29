<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacobro_cirugia = array();
	$tdatacobro_cirugia[".NumberOfChars"] = 80; 
	$tdatacobro_cirugia[".ShortName"] = "cobro_cirugia";
	$tdatacobro_cirugia[".OwnerID"] = "";
	$tdatacobro_cirugia[".OriginalTable"] = "factura_consulta";

//	field labels
$fieldLabelscobro_cirugia = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscobro_cirugia["Spanish"] = array();
	$fieldToolTipscobro_cirugia["Spanish"] = array();
	$fieldLabelscobro_cirugia["Spanish"]["id"] = "Id";
	$fieldToolTipscobro_cirugia["Spanish"]["id"] = "";
	$fieldLabelscobro_cirugia["Spanish"]["_Fecha_"] = "Fecha";
	$fieldToolTipscobro_cirugia["Spanish"]["'Fecha'"] = "";
	$fieldLabelscobro_cirugia["Spanish"]["_M_dico_Responsable_"] = "Médico Responsable";
	$fieldToolTipscobro_cirugia["Spanish"]["'Médico Responsable'"] = "";
	$fieldLabelscobro_cirugia["Spanish"]["_Factura_"] = "Factura";
	$fieldToolTipscobro_cirugia["Spanish"]["'Factura'"] = "";
	$fieldLabelscobro_cirugia["Spanish"]["_Tipo_de_Intervenci_n_Quirurgica_"] = "Tipo de Intervención Quirurgica";
	$fieldToolTipscobro_cirugia["Spanish"]["'Tipo de Intervención Quirurgica'"] = "";
	$fieldLabelscobro_cirugia["Spanish"]["_Precio_"] = "Precio";
	$fieldToolTipscobro_cirugia["Spanish"]["'Precio'"] = "";
	if (count($fieldToolTipscobro_cirugia["Spanish"]))
		$tdatacobro_cirugia[".isUseToolTips"] = true;
}
	
	
	$tdatacobro_cirugia[".NCSearch"] = true;



$tdatacobro_cirugia[".shortTableName"] = "cobro_cirugia";
$tdatacobro_cirugia[".nSecOptions"] = 0;
$tdatacobro_cirugia[".recsPerRowList"] = 1;
$tdatacobro_cirugia[".mainTableOwnerID"] = "";
$tdatacobro_cirugia[".moveNext"] = 1;
$tdatacobro_cirugia[".nType"] = 1;

$tdatacobro_cirugia[".strOriginalTableName"] = "factura_consulta";




$tdatacobro_cirugia[".showAddInPopup"] = true;

$tdatacobro_cirugia[".showEditInPopup"] = true;

$tdatacobro_cirugia[".showViewInPopup"] = true;

$tdatacobro_cirugia[".fieldsForRegister"] = array();

$tdatacobro_cirugia[".listAjax"] = false;

	$tdatacobro_cirugia[".audit"] = false;

	$tdatacobro_cirugia[".locking"] = false;

$tdatacobro_cirugia[".listIcons"] = true;


$tdatacobro_cirugia[".printFriendly"] = true;


$tdatacobro_cirugia[".showSimpleSearchOptions"] = false;

$tdatacobro_cirugia[".showSearchPanel"] = true;

if (isMobile())
	$tdatacobro_cirugia[".isUseAjaxSuggest"] = false;
else 
	$tdatacobro_cirugia[".isUseAjaxSuggest"] = true;

$tdatacobro_cirugia[".rowHighlite"] = true;

// button handlers file names

$tdatacobro_cirugia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacobro_cirugia[".isUseTimeForSearch"] = false;




$tdatacobro_cirugia[".allSearchFields"] = array();

$tdatacobro_cirugia[".allSearchFields"][] = "'Factura'";
$tdatacobro_cirugia[".allSearchFields"][] = "'Fecha'";
$tdatacobro_cirugia[".allSearchFields"][] = "'Médico Responsable'";
$tdatacobro_cirugia[".allSearchFields"][] = "'Tipo de Intervención Quirurgica'";
$tdatacobro_cirugia[".allSearchFields"][] = "'Precio'";

$tdatacobro_cirugia[".googleLikeFields"][] = "id";
$tdatacobro_cirugia[".googleLikeFields"][] = "'Factura'";
$tdatacobro_cirugia[".googleLikeFields"][] = "'Fecha'";
$tdatacobro_cirugia[".googleLikeFields"][] = "'Médico Responsable'";
$tdatacobro_cirugia[".googleLikeFields"][] = "'Tipo de Intervención Quirurgica'";
$tdatacobro_cirugia[".googleLikeFields"][] = "'Precio'";


$tdatacobro_cirugia[".advSearchFields"][] = "'Factura'";
$tdatacobro_cirugia[".advSearchFields"][] = "'Fecha'";
$tdatacobro_cirugia[".advSearchFields"][] = "'Médico Responsable'";
$tdatacobro_cirugia[".advSearchFields"][] = "'Tipo de Intervención Quirurgica'";
$tdatacobro_cirugia[".advSearchFields"][] = "'Precio'";

$tdatacobro_cirugia[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacobro_cirugia[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacobro_cirugia[".strOrderBy"] = $tstrOrderBy;

$tdatacobro_cirugia[".orderindexes"] = array();

$tdatacobro_cirugia[".sqlHead"] = "SELECT fc.id,  fc.numero_factura AS `'Factura'`,  c.fecha AS `'Fecha'`,  CONCAT(p.nombre, ' ', p.apellido) AS `'Médico Responsable'`,  tc.nombre AS `'Tipo de Intervención Quirurgica'`,  tc.precio AS `'Precio'`";
$tdatacobro_cirugia[".sqlFrom"] = "FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN cirugia AS cg ON c.id = cg.consulta_id  INNER JOIN tipo_cirugia AS tc ON cg.idtipo_cirugia = tc.idtipo_cirugia  INNER JOIN empleado AS e ON c.medico_encargado = e.id  INNER JOIN persona AS p ON e.persona_id = p.id";
$tdatacobro_cirugia[".sqlWhereExpr"] = "";
$tdatacobro_cirugia[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacobro_cirugia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacobro_cirugia[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscobro_cirugia = array();
$tableKeyscobro_cirugia[] = "id";
$tdatacobro_cirugia[".Keys"] = $tableKeyscobro_cirugia;

$tdatacobro_cirugia[".listFields"] = array();
$tdatacobro_cirugia[".listFields"][] = "'Factura'";
$tdatacobro_cirugia[".listFields"][] = "'Fecha'";
$tdatacobro_cirugia[".listFields"][] = "'Médico Responsable'";
$tdatacobro_cirugia[".listFields"][] = "'Tipo de Intervención Quirurgica'";
$tdatacobro_cirugia[".listFields"][] = "'Precio'";

$tdatacobro_cirugia[".viewFields"] = array();

$tdatacobro_cirugia[".addFields"] = array();

$tdatacobro_cirugia[".inlineAddFields"] = array();

$tdatacobro_cirugia[".editFields"] = array();

$tdatacobro_cirugia[".inlineEditFields"] = array();

$tdatacobro_cirugia[".exportFields"] = array();

$tdatacobro_cirugia[".printFields"] = array();
$tdatacobro_cirugia[".printFields"][] = "'Factura'";
$tdatacobro_cirugia[".printFields"][] = "'Fecha'";
$tdatacobro_cirugia[".printFields"][] = "'Médico Responsable'";
$tdatacobro_cirugia[".printFields"][] = "'Tipo de Intervención Quirurgica'";
$tdatacobro_cirugia[".printFields"][] = "'Precio'";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "fc.id";
	
		
		
				
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
	
		
		
	$tdatacobro_cirugia["id"] = $fdata;
//	'Factura'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "'Factura'";
	$fdata["GoodName"] = "_Factura_";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "Factura"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "numero_factura"; 
		$fdata["FullName"] = "fc.numero_factura";
	
		
		
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
	
		
		
	$tdatacobro_cirugia["'Factura'"] = $fdata;
//	'Fecha'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "'Fecha'";
	$fdata["GoodName"] = "_Fecha_";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Fecha"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha"; 
		$fdata["FullName"] = "c.fecha";
	
		
		
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
	
		
		
	$tdatacobro_cirugia["'Fecha'"] = $fdata;
//	'Médico Responsable'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "'Médico Responsable'";
	$fdata["GoodName"] = "_M_dico_Responsable_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Médico Responsable"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "'Médico Responsable'"; 
		$fdata["FullName"] = "CONCAT(p.nombre, ' ', p.apellido)";
	
		
		
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
	
		
		
	$tdatacobro_cirugia["'Médico Responsable'"] = $fdata;
//	'Tipo de Intervención Quirurgica'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "'Tipo de Intervención Quirurgica'";
	$fdata["GoodName"] = "_Tipo_de_Intervenci_n_Quirurgica_";
	$fdata["ownerTable"] = "tipo_cirugia";
	$fdata["Label"] = "Tipo de Intervención Quirurgica"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "tc.nombre";
	
		
		
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
	
		
		
	$tdatacobro_cirugia["'Tipo de Intervención Quirurgica'"] = $fdata;
//	'Precio'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "'Precio'";
	$fdata["GoodName"] = "_Precio_";
	$fdata["ownerTable"] = "tipo_cirugia";
	$fdata["Label"] = "Precio"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "precio"; 
		$fdata["FullName"] = "tc.precio";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "id";
	
		
	$edata["LookupTable"] = "total_factura";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacobro_cirugia["'Precio'"] = $fdata;

	
$tables_data["cobro_cirugia"]=&$tdatacobro_cirugia;
$field_labels["cobro_cirugia"] = &$fieldLabelscobro_cirugia;
$fieldToolTips["cobro_cirugia"] = &$fieldToolTipscobro_cirugia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cobro_cirugia"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cobro_cirugia"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cobro_cirugia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fc.id,  fc.numero_factura AS `'Factura'`,  c.fecha AS `'Fecha'`,  CONCAT(p.nombre, ' ', p.apellido) AS `'Médico Responsable'`,  tc.nombre AS `'Tipo de Intervención Quirurgica'`,  tc.precio AS `'Precio'`";
$proto0["m_strFrom"] = "FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN cirugia AS cg ON c.id = cg.consulta_id  INNER JOIN tipo_cirugia AS tc ON cg.idtipo_cirugia = tc.idtipo_cirugia  INNER JOIN empleado AS e ON c.medico_encargado = e.id  INNER JOIN persona AS p ON e.persona_id = p.id";
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
	"m_strTable" => "fc"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_factura",
	"m_strTable" => "fc"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "'Factura'";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "c"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "'Fecha'";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_CUSTOM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "p.nombre"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "p.apellido"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto12);

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "'Médico Responsable'";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "tc"
));

$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "'Tipo de Intervención Quirurgica'";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "tc"
));

$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "'Precio'";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "factura_consulta";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "numero_factura";
$proto21["m_columns"][] = "consulta_id";
$proto21["m_columns"][] = "cliente_id";
$proto21["m_columns"][] = "fecha";
$proto21["m_columns"][] = "monto";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_alias"] = "fc";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = "0";
$proto22["m_inBrackets"] = "0";
$proto22["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "consulta";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "fecha";
$proto25["m_columns"][] = "paciente";
$proto25["m_columns"][] = "estado_retirada";
$proto25["m_columns"][] = "medico_encargado";
$proto25["m_columns"][] = "diagnostico_id";
$proto25["m_columns"][] = "tipo_consulta_id";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_alias"] = "c";
$proto26=array();
$proto26["m_sql"] = "fc.consulta_id = c.id";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "consulta_id",
	"m_strTable" => "fc"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= c.id";
$proto26["m_havingmode"] = "0";
$proto26["m_inBrackets"] = "0";
$proto26["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "cirugia";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "fecha";
$proto29["m_columns"][] = "encargado";
$proto29["m_columns"][] = "ambiente_id";
$proto29["m_columns"][] = "idtipo_cirugia";
$proto29["m_columns"][] = "consulta_id";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_alias"] = "cg";
$proto30=array();
$proto30["m_sql"] = "c.id = cg.consulta_id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= cg.consulta_id";
$proto30["m_havingmode"] = "0";
$proto30["m_inBrackets"] = "0";
$proto30["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "tipo_cirugia";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "idtipo_cirugia";
$proto33["m_columns"][] = "nombre";
$proto33["m_columns"][] = "descripcion";
$proto33["m_columns"][] = "precio";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_alias"] = "tc";
$proto34=array();
$proto34["m_sql"] = "cg.idtipo_cirugia = tc.idtipo_cirugia";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idtipo_cirugia",
	"m_strTable" => "cg"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= tc.idtipo_cirugia";
$proto34["m_havingmode"] = "0";
$proto34["m_inBrackets"] = "0";
$proto34["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "empleado";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "profesion";
$proto37["m_columns"][] = "puesto_id";
$proto37["m_columns"][] = "persona_id";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_alias"] = "e";
$proto38=array();
$proto38["m_sql"] = "c.medico_encargado = e.id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "medico_encargado",
	"m_strTable" => "c"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= e.id";
$proto38["m_havingmode"] = "0";
$proto38["m_inBrackets"] = "0";
$proto38["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "persona";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "nombre";
$proto41["m_columns"][] = "apellido";
$proto41["m_columns"][] = "fecha_nacimiento";
$proto41["m_columns"][] = "cui";
$proto41["m_columns"][] = "direccion";
$proto41["m_columns"][] = "telefono";
$proto41["m_columns"][] = "nit";
$proto41["m_columns"][] = "genero_id";
$proto41["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_alias"] = "p";
$proto42=array();
$proto42["m_sql"] = "e.persona_id = p.id";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "persona_id",
	"m_strTable" => "e"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= p.id";
$proto42["m_havingmode"] = "0";
$proto42["m_inBrackets"] = "0";
$proto42["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cobro_cirugia = createSqlQuery_cobro_cirugia();
						$tdatacobro_cirugia[".sqlquery"] = $queryData_cobro_cirugia;

include_once(getabspath("include/cobro_cirugia_events.php"));
$tableEvents["cobro_cirugia"] = new eventclass_cobro_cirugia;
$tdatacobro_cirugia[".hasEvents"] = true;

$cipherer = new RunnerCipherer("cobro_cirugia");

?>