<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacobro_consulta = array();
	$tdatacobro_consulta[".NumberOfChars"] = 80; 
	$tdatacobro_consulta[".ShortName"] = "cobro_consulta";
	$tdatacobro_consulta[".OwnerID"] = "";
	$tdatacobro_consulta[".OriginalTable"] = "factura_consulta";

//	field labels
$fieldLabelscobro_consulta = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscobro_consulta["Spanish"] = array();
	$fieldToolTipscobro_consulta["Spanish"] = array();
	$fieldLabelscobro_consulta["Spanish"]["_Factura_"] = "'Factura'";
	$fieldToolTipscobro_consulta["Spanish"]["'Factura'"] = "";
	$fieldLabelscobro_consulta["Spanish"]["_Fecha_"] = "'Fecha'";
	$fieldToolTipscobro_consulta["Spanish"]["'Fecha'"] = "";
	$fieldLabelscobro_consulta["Spanish"]["_Tipo_de_Consulta_"] = "'Tipo de Consulta'";
	$fieldToolTipscobro_consulta["Spanish"]["'Tipo de Consulta'"] = "";
	$fieldLabelscobro_consulta["Spanish"]["_Precio_"] = "'Precio'";
	$fieldToolTipscobro_consulta["Spanish"]["'Precio'"] = "";
	$fieldLabelscobro_consulta["Spanish"]["_M_dico_Encargado_"] = "'Médico Encargado'";
	$fieldToolTipscobro_consulta["Spanish"]["'Médico Encargado'"] = "";
	$fieldLabelscobro_consulta["Spanish"]["id"] = "Id";
	$fieldToolTipscobro_consulta["Spanish"]["id"] = "";
	$fieldLabelscobro_consulta["Spanish"]["id1"] = "Id1";
	$fieldToolTipscobro_consulta["Spanish"]["id1"] = "";
	$fieldLabelscobro_consulta["Spanish"]["id2"] = "Id2";
	$fieldToolTipscobro_consulta["Spanish"]["id2"] = "";
	$fieldLabelscobro_consulta["Spanish"]["id3"] = "Id3";
	$fieldToolTipscobro_consulta["Spanish"]["id3"] = "";
	$fieldLabelscobro_consulta["Spanish"]["id4"] = "Id4";
	$fieldToolTipscobro_consulta["Spanish"]["id4"] = "";
	if (count($fieldToolTipscobro_consulta["Spanish"]))
		$tdatacobro_consulta[".isUseToolTips"] = true;
}
	
	



$tdatacobro_consulta[".shortTableName"] = "cobro_consulta";
$tdatacobro_consulta[".nSecOptions"] = 0;
$tdatacobro_consulta[".recsPerRowList"] = 1;
$tdatacobro_consulta[".mainTableOwnerID"] = "";
$tdatacobro_consulta[".moveNext"] = 1;
$tdatacobro_consulta[".nType"] = 1;

$tdatacobro_consulta[".strOriginalTableName"] = "factura_consulta";




$tdatacobro_consulta[".showAddInPopup"] = true;

$tdatacobro_consulta[".showEditInPopup"] = true;

$tdatacobro_consulta[".showViewInPopup"] = true;

$tdatacobro_consulta[".fieldsForRegister"] = array();

$tdatacobro_consulta[".listAjax"] = false;

	$tdatacobro_consulta[".audit"] = false;

	$tdatacobro_consulta[".locking"] = false;

$tdatacobro_consulta[".listIcons"] = true;


$tdatacobro_consulta[".printFriendly"] = true;


$tdatacobro_consulta[".showSimpleSearchOptions"] = false;

$tdatacobro_consulta[".showSearchPanel"] = true;

if (isMobile())
	$tdatacobro_consulta[".isUseAjaxSuggest"] = false;
else 
	$tdatacobro_consulta[".isUseAjaxSuggest"] = true;

$tdatacobro_consulta[".rowHighlite"] = true;

// button handlers file names

$tdatacobro_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacobro_consulta[".isUseTimeForSearch"] = false;




$tdatacobro_consulta[".allSearchFields"] = array();

$tdatacobro_consulta[".allSearchFields"][] = "'Factura'";
$tdatacobro_consulta[".allSearchFields"][] = "'Fecha'";
$tdatacobro_consulta[".allSearchFields"][] = "'Tipo de Consulta'";
$tdatacobro_consulta[".allSearchFields"][] = "'Precio'";
$tdatacobro_consulta[".allSearchFields"][] = "'Médico Encargado'";

$tdatacobro_consulta[".googleLikeFields"][] = "'Factura'";
$tdatacobro_consulta[".googleLikeFields"][] = "'Fecha'";
$tdatacobro_consulta[".googleLikeFields"][] = "'Tipo de Consulta'";
$tdatacobro_consulta[".googleLikeFields"][] = "'Precio'";
$tdatacobro_consulta[".googleLikeFields"][] = "'Médico Encargado'";
$tdatacobro_consulta[".googleLikeFields"][] = "id";
$tdatacobro_consulta[".googleLikeFields"][] = "id1";
$tdatacobro_consulta[".googleLikeFields"][] = "id2";
$tdatacobro_consulta[".googleLikeFields"][] = "id3";
$tdatacobro_consulta[".googleLikeFields"][] = "id4";


$tdatacobro_consulta[".advSearchFields"][] = "'Factura'";
$tdatacobro_consulta[".advSearchFields"][] = "'Fecha'";
$tdatacobro_consulta[".advSearchFields"][] = "'Tipo de Consulta'";
$tdatacobro_consulta[".advSearchFields"][] = "'Precio'";
$tdatacobro_consulta[".advSearchFields"][] = "'Médico Encargado'";

$tdatacobro_consulta[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacobro_consulta[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacobro_consulta[".strOrderBy"] = $tstrOrderBy;

$tdatacobro_consulta[".orderindexes"] = array();

$tdatacobro_consulta[".sqlHead"] = "SELECT fc.numero_factura AS `'Factura'`,  c.fecha AS `'Fecha'`,  tc.nombre AS `'Tipo de Consulta'`,  tc.precio AS `'Precio'`,  CONCAT(p.nombre, ' ', p.apellido) AS `'Médico Encargado'`,  fc.id,  c.id AS id1,  tc.id AS id2,  e.id AS id3,  p.id AS id4";
$tdatacobro_consulta[".sqlFrom"] = "FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN tipo_consulta AS tc ON c.tipo_consulta_id = tc.id  INNER JOIN empleado AS e ON c.medico_encargado = e.id  INNER JOIN persona AS p ON e.persona_id = p.id";
$tdatacobro_consulta[".sqlWhereExpr"] = "";
$tdatacobro_consulta[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacobro_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacobro_consulta[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscobro_consulta = array();
$tableKeyscobro_consulta[] = "id";
$tdatacobro_consulta[".Keys"] = $tableKeyscobro_consulta;

$tdatacobro_consulta[".listFields"] = array();
$tdatacobro_consulta[".listFields"][] = "'Factura'";
$tdatacobro_consulta[".listFields"][] = "'Fecha'";
$tdatacobro_consulta[".listFields"][] = "'Tipo de Consulta'";
$tdatacobro_consulta[".listFields"][] = "'Precio'";
$tdatacobro_consulta[".listFields"][] = "'Médico Encargado'";

$tdatacobro_consulta[".viewFields"] = array();

$tdatacobro_consulta[".addFields"] = array();

$tdatacobro_consulta[".inlineAddFields"] = array();

$tdatacobro_consulta[".editFields"] = array();

$tdatacobro_consulta[".inlineEditFields"] = array();

$tdatacobro_consulta[".exportFields"] = array();

$tdatacobro_consulta[".printFields"] = array();
$tdatacobro_consulta[".printFields"][] = "'Factura'";
$tdatacobro_consulta[".printFields"][] = "'Fecha'";
$tdatacobro_consulta[".printFields"][] = "'Tipo de Consulta'";
$tdatacobro_consulta[".printFields"][] = "'Precio'";
$tdatacobro_consulta[".printFields"][] = "'Médico Encargado'";

//	'Factura'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "'Factura'";
	$fdata["GoodName"] = "_Factura_";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "'Factura'"; 
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
	
		
		
	$tdatacobro_consulta["'Factura'"] = $fdata;
//	'Fecha'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "'Fecha'";
	$fdata["GoodName"] = "_Fecha_";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "'Fecha'"; 
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
	
		
		
	$tdatacobro_consulta["'Fecha'"] = $fdata;
//	'Tipo de Consulta'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "'Tipo de Consulta'";
	$fdata["GoodName"] = "_Tipo_de_Consulta_";
	$fdata["ownerTable"] = "tipo_consulta";
	$fdata["Label"] = "'Tipo de Consulta'"; 
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
	
		
		
	$tdatacobro_consulta["'Tipo de Consulta'"] = $fdata;
//	'Precio'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "'Precio'";
	$fdata["GoodName"] = "_Precio_";
	$fdata["ownerTable"] = "tipo_consulta";
	$fdata["Label"] = "'Precio'"; 
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
	
		
		
	$tdatacobro_consulta["'Precio'"] = $fdata;
//	'Médico Encargado'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "'Médico Encargado'";
	$fdata["GoodName"] = "_M_dico_Encargado_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "'Médico Encargado'"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "'Médico Encargado'"; 
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
	
		
		
	$tdatacobro_consulta["'Médico Encargado'"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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
	
		
		
	$tdatacobro_consulta["id"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Id1"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "c.id";
	
		
		
				
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
	
		
		
	$tdatacobro_consulta["id1"] = $fdata;
//	id2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id2";
	$fdata["GoodName"] = "id2";
	$fdata["ownerTable"] = "tipo_consulta";
	$fdata["Label"] = "Id2"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "tc.id";
	
		
		
				
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
	
		
		
	$tdatacobro_consulta["id2"] = $fdata;
//	id3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id3";
	$fdata["GoodName"] = "id3";
	$fdata["ownerTable"] = "empleado";
	$fdata["Label"] = "Id3"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "e.id";
	
		
		
				
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
	
		
		
	$tdatacobro_consulta["id3"] = $fdata;
//	id4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "id4";
	$fdata["GoodName"] = "id4";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Id4"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "p.id";
	
		
		
				
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
	
		
		
	$tdatacobro_consulta["id4"] = $fdata;

	
$tables_data["cobro_consulta"]=&$tdatacobro_consulta;
$field_labels["cobro_consulta"] = &$fieldLabelscobro_consulta;
$fieldToolTips["cobro_consulta"] = &$fieldToolTipscobro_consulta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cobro_consulta"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cobro_consulta"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cobro_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fc.numero_factura AS `'Factura'`,  c.fecha AS `'Fecha'`,  tc.nombre AS `'Tipo de Consulta'`,  tc.precio AS `'Precio'`,  CONCAT(p.nombre, ' ', p.apellido) AS `'Médico Encargado'`,  fc.id,  c.id AS id1,  tc.id AS id2,  e.id AS id3,  p.id AS id4";
$proto0["m_strFrom"] = "FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN tipo_consulta AS tc ON c.tipo_consulta_id = tc.id  INNER JOIN empleado AS e ON c.medico_encargado = e.id  INNER JOIN persona AS p ON e.persona_id = p.id";
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
	"m_strName" => "numero_factura",
	"m_strTable" => "fc"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "'Factura'";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "c"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "'Fecha'";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "tc"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "'Tipo de Consulta'";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "tc"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "'Precio'";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "p.nombre"
));

$proto14["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto14["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "p.apellido"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto14);

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "'Médico Encargado'";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "fc"
));

$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c"
));

$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "tc"
));

$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "id2";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "e"
));

$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "id3";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "p"
));

$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "id4";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "factura_consulta";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "numero_factura";
$proto29["m_columns"][] = "consulta_id";
$proto29["m_columns"][] = "cliente_id";
$proto29["m_columns"][] = "fecha";
$proto29["m_columns"][] = "monto";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_alias"] = "fc";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
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
$proto33["m_strName"] = "consulta";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "fecha";
$proto33["m_columns"][] = "paciente";
$proto33["m_columns"][] = "estado_retirada";
$proto33["m_columns"][] = "medico_encargado";
$proto33["m_columns"][] = "diagnostico_id";
$proto33["m_columns"][] = "tipo_consulta_id";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_alias"] = "c";
$proto34=array();
$proto34["m_sql"] = "fc.consulta_id = c.id";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "consulta_id",
	"m_strTable" => "fc"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= c.id";
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
$proto37["m_strName"] = "tipo_consulta";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "nombre";
$proto37["m_columns"][] = "precio";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_alias"] = "tc";
$proto38=array();
$proto38["m_sql"] = "c.tipo_consulta_id = tc.id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tipo_consulta_id",
	"m_strTable" => "c"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= tc.id";
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
$proto41["m_strName"] = "empleado";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "profesion";
$proto41["m_columns"][] = "puesto_id";
$proto41["m_columns"][] = "persona_id";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_alias"] = "e";
$proto42=array();
$proto42["m_sql"] = "c.medico_encargado = e.id";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "medico_encargado",
	"m_strTable" => "c"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= e.id";
$proto42["m_havingmode"] = "0";
$proto42["m_inBrackets"] = "0";
$proto42["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "persona";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "nombre";
$proto45["m_columns"][] = "apellido";
$proto45["m_columns"][] = "fecha_nacimiento";
$proto45["m_columns"][] = "cui";
$proto45["m_columns"][] = "direccion";
$proto45["m_columns"][] = "telefono";
$proto45["m_columns"][] = "nit";
$proto45["m_columns"][] = "genero_id";
$proto45["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_alias"] = "p";
$proto46=array();
$proto46["m_sql"] = "e.persona_id = p.id";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "persona_id",
	"m_strTable" => "e"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= p.id";
$proto46["m_havingmode"] = "0";
$proto46["m_inBrackets"] = "0";
$proto46["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cobro_consulta = createSqlQuery_cobro_consulta();
										$tdatacobro_consulta[".sqlquery"] = $queryData_cobro_consulta;

include_once(getabspath("include/cobro_consulta_events.php"));
$tableEvents["cobro_consulta"] = new eventclass_cobro_consulta;
$tdatacobro_consulta[".hasEvents"] = true;

$cipherer = new RunnerCipherer("cobro_consulta");

?>