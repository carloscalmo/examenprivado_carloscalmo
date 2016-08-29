<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacobro_servicios = array();
	$tdatacobro_servicios[".NumberOfChars"] = 80; 
	$tdatacobro_servicios[".ShortName"] = "cobro_servicios";
	$tdatacobro_servicios[".OwnerID"] = "";
	$tdatacobro_servicios[".OriginalTable"] = "factura_consulta";

//	field labels
$fieldLabelscobro_servicios = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscobro_servicios["Spanish"] = array();
	$fieldToolTipscobro_servicios["Spanish"] = array();
	$fieldLabelscobro_servicios["Spanish"]["_Factura_"] = "'Factura'";
	$fieldToolTipscobro_servicios["Spanish"]["'Factura'"] = "";
	$fieldLabelscobro_servicios["Spanish"]["_Fecha_"] = "'Fecha'";
	$fieldToolTipscobro_servicios["Spanish"]["'Fecha'"] = "";
	$fieldLabelscobro_servicios["Spanish"]["_M_dico_Responsable_"] = "'Médico Responsable'";
	$fieldToolTipscobro_servicios["Spanish"]["'Médico Responsable'"] = "";
	$fieldLabelscobro_servicios["Spanish"]["_Servicio_Contratado_"] = "'Servicio Contratado'";
	$fieldToolTipscobro_servicios["Spanish"]["'Servicio Contratado'"] = "";
	$fieldLabelscobro_servicios["Spanish"]["_Precio_"] = "'Precio'";
	$fieldToolTipscobro_servicios["Spanish"]["'Precio'"] = "";
	$fieldLabelscobro_servicios["Spanish"]["id"] = "Id";
	$fieldToolTipscobro_servicios["Spanish"]["id"] = "";
	$fieldLabelscobro_servicios["Spanish"]["id1"] = "Id1";
	$fieldToolTipscobro_servicios["Spanish"]["id1"] = "";
	$fieldLabelscobro_servicios["Spanish"]["id2"] = "Id2";
	$fieldToolTipscobro_servicios["Spanish"]["id2"] = "";
	$fieldLabelscobro_servicios["Spanish"]["id3"] = "Id3";
	$fieldToolTipscobro_servicios["Spanish"]["id3"] = "";
	$fieldLabelscobro_servicios["Spanish"]["id4"] = "Id4";
	$fieldToolTipscobro_servicios["Spanish"]["id4"] = "";
	$fieldLabelscobro_servicios["Spanish"]["id5"] = "Id5";
	$fieldToolTipscobro_servicios["Spanish"]["id5"] = "";
	if (count($fieldToolTipscobro_servicios["Spanish"]))
		$tdatacobro_servicios[".isUseToolTips"] = true;
}
	
	
	$tdatacobro_servicios[".NCSearch"] = true;



$tdatacobro_servicios[".shortTableName"] = "cobro_servicios";
$tdatacobro_servicios[".nSecOptions"] = 0;
$tdatacobro_servicios[".recsPerRowList"] = 1;
$tdatacobro_servicios[".mainTableOwnerID"] = "";
$tdatacobro_servicios[".moveNext"] = 1;
$tdatacobro_servicios[".nType"] = 1;

$tdatacobro_servicios[".strOriginalTableName"] = "factura_consulta";




$tdatacobro_servicios[".showAddInPopup"] = true;

$tdatacobro_servicios[".showEditInPopup"] = true;

$tdatacobro_servicios[".showViewInPopup"] = true;

$tdatacobro_servicios[".fieldsForRegister"] = array();

$tdatacobro_servicios[".listAjax"] = false;

	$tdatacobro_servicios[".audit"] = false;

	$tdatacobro_servicios[".locking"] = false;

$tdatacobro_servicios[".listIcons"] = true;


$tdatacobro_servicios[".printFriendly"] = true;


$tdatacobro_servicios[".showSimpleSearchOptions"] = false;

$tdatacobro_servicios[".showSearchPanel"] = true;

if (isMobile())
	$tdatacobro_servicios[".isUseAjaxSuggest"] = false;
else 
	$tdatacobro_servicios[".isUseAjaxSuggest"] = true;

$tdatacobro_servicios[".rowHighlite"] = true;

// button handlers file names

$tdatacobro_servicios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacobro_servicios[".isUseTimeForSearch"] = false;




$tdatacobro_servicios[".allSearchFields"] = array();

$tdatacobro_servicios[".allSearchFields"][] = "'Factura'";
$tdatacobro_servicios[".allSearchFields"][] = "'Fecha'";
$tdatacobro_servicios[".allSearchFields"][] = "'Médico Responsable'";
$tdatacobro_servicios[".allSearchFields"][] = "'Servicio Contratado'";
$tdatacobro_servicios[".allSearchFields"][] = "'Precio'";

$tdatacobro_servicios[".googleLikeFields"][] = "'Factura'";
$tdatacobro_servicios[".googleLikeFields"][] = "'Fecha'";
$tdatacobro_servicios[".googleLikeFields"][] = "'Médico Responsable'";
$tdatacobro_servicios[".googleLikeFields"][] = "'Servicio Contratado'";
$tdatacobro_servicios[".googleLikeFields"][] = "'Precio'";
$tdatacobro_servicios[".googleLikeFields"][] = "id";
$tdatacobro_servicios[".googleLikeFields"][] = "id1";
$tdatacobro_servicios[".googleLikeFields"][] = "id2";
$tdatacobro_servicios[".googleLikeFields"][] = "id3";
$tdatacobro_servicios[".googleLikeFields"][] = "id4";
$tdatacobro_servicios[".googleLikeFields"][] = "id5";


$tdatacobro_servicios[".advSearchFields"][] = "'Factura'";
$tdatacobro_servicios[".advSearchFields"][] = "'Fecha'";
$tdatacobro_servicios[".advSearchFields"][] = "'Médico Responsable'";
$tdatacobro_servicios[".advSearchFields"][] = "'Servicio Contratado'";
$tdatacobro_servicios[".advSearchFields"][] = "'Precio'";

$tdatacobro_servicios[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacobro_servicios[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacobro_servicios[".strOrderBy"] = $tstrOrderBy;

$tdatacobro_servicios[".orderindexes"] = array();

$tdatacobro_servicios[".sqlHead"] = "SELECT fc.numero_factura AS `'Factura'`,  sc.fecha AS `'Fecha'`,  CONCAT(p.nombre, ' ', P.apellido) AS `'Médico Responsable'`,  s.nombre AS `'Servicio Contratado'`,  s.precio AS `'Precio'`,  fc.id,  c.id AS id1,  sc.id AS id2,  e.id AS id3,  p.id AS id4,  s.id AS id5";
$tdatacobro_servicios[".sqlFrom"] = "FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN solicitud_servicio AS sc ON c.id = sc.consulta_id  INNER JOIN empleado AS e ON sc.solicitante = e.id  INNER JOIN persona AS p ON e.persona_id = p.id  INNER JOIN servicio AS s ON sc.servicio_id = s.id";
$tdatacobro_servicios[".sqlWhereExpr"] = "";
$tdatacobro_servicios[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacobro_servicios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacobro_servicios[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscobro_servicios = array();
$tableKeyscobro_servicios[] = "id";
$tdatacobro_servicios[".Keys"] = $tableKeyscobro_servicios;

$tdatacobro_servicios[".listFields"] = array();
$tdatacobro_servicios[".listFields"][] = "'Factura'";
$tdatacobro_servicios[".listFields"][] = "'Fecha'";
$tdatacobro_servicios[".listFields"][] = "'Médico Responsable'";
$tdatacobro_servicios[".listFields"][] = "'Servicio Contratado'";
$tdatacobro_servicios[".listFields"][] = "'Precio'";

$tdatacobro_servicios[".viewFields"] = array();

$tdatacobro_servicios[".addFields"] = array();

$tdatacobro_servicios[".inlineAddFields"] = array();

$tdatacobro_servicios[".editFields"] = array();

$tdatacobro_servicios[".inlineEditFields"] = array();

$tdatacobro_servicios[".exportFields"] = array();

$tdatacobro_servicios[".printFields"] = array();
$tdatacobro_servicios[".printFields"][] = "'Factura'";
$tdatacobro_servicios[".printFields"][] = "'Fecha'";
$tdatacobro_servicios[".printFields"][] = "'Médico Responsable'";
$tdatacobro_servicios[".printFields"][] = "'Servicio Contratado'";
$tdatacobro_servicios[".printFields"][] = "'Precio'";

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
	
		
		
	$tdatacobro_servicios["'Factura'"] = $fdata;
//	'Fecha'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "'Fecha'";
	$fdata["GoodName"] = "_Fecha_";
	$fdata["ownerTable"] = "solicitud_servicio";
	$fdata["Label"] = "'Fecha'"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha"; 
		$fdata["FullName"] = "sc.fecha";
	
		
		
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
	
		
		
	$tdatacobro_servicios["'Fecha'"] = $fdata;
//	'Médico Responsable'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "'Médico Responsable'";
	$fdata["GoodName"] = "_M_dico_Responsable_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "'Médico Responsable'"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "'Médico Responsable'"; 
		$fdata["FullName"] = "CONCAT(p.nombre, ' ', P.apellido)";
	
		
		
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
	
		
		
	$tdatacobro_servicios["'Médico Responsable'"] = $fdata;
//	'Servicio Contratado'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "'Servicio Contratado'";
	$fdata["GoodName"] = "_Servicio_Contratado_";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = "'Servicio Contratado'"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "s.nombre";
	
		
		
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
	
		
		
	$tdatacobro_servicios["'Servicio Contratado'"] = $fdata;
//	'Precio'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "'Precio'";
	$fdata["GoodName"] = "_Precio_";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = "'Precio'"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "precio"; 
		$fdata["FullName"] = "s.precio";
	
		
		
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
	
		
		
	$tdatacobro_servicios["'Precio'"] = $fdata;
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
	
		
		
	$tdatacobro_servicios["id"] = $fdata;
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
	
		
		
	$tdatacobro_servicios["id1"] = $fdata;
//	id2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id2";
	$fdata["GoodName"] = "id2";
	$fdata["ownerTable"] = "solicitud_servicio";
	$fdata["Label"] = "Id2"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "sc.id";
	
		
		
				
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
	
		
		
	$tdatacobro_servicios["id2"] = $fdata;
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
	
		
		
	$tdatacobro_servicios["id3"] = $fdata;
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
	
		
		
	$tdatacobro_servicios["id4"] = $fdata;
//	id5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id5";
	$fdata["GoodName"] = "id5";
	$fdata["ownerTable"] = "servicio";
	$fdata["Label"] = "Id5"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "s.id";
	
		
		
				
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
	
		
		
	$tdatacobro_servicios["id5"] = $fdata;

	
$tables_data["cobro_servicios"]=&$tdatacobro_servicios;
$field_labels["cobro_servicios"] = &$fieldLabelscobro_servicios;
$fieldToolTips["cobro_servicios"] = &$fieldToolTipscobro_servicios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cobro_servicios"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cobro_servicios"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cobro_servicios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fc.numero_factura AS `'Factura'`,  sc.fecha AS `'Fecha'`,  CONCAT(p.nombre, ' ', P.apellido) AS `'Médico Responsable'`,  s.nombre AS `'Servicio Contratado'`,  s.precio AS `'Precio'`,  fc.id,  c.id AS id1,  sc.id AS id2,  e.id AS id3,  p.id AS id4,  s.id AS id5";
$proto0["m_strFrom"] = "FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN solicitud_servicio AS sc ON c.id = sc.consulta_id  INNER JOIN empleado AS e ON sc.solicitante = e.id  INNER JOIN persona AS p ON e.persona_id = p.id  INNER JOIN servicio AS s ON sc.servicio_id = s.id";
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
	"m_strTable" => "sc"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "'Fecha'";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_CUSTOM";
$proto10["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "p.nombre"
));

$proto10["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto10["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "P.apellido"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto10);

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "'Médico Responsable'";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "s"
));

$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "'Servicio Contratado'";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "s"
));

$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "'Precio'";
$obj = new SQLFieldListItem($proto16);

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
	"m_strTable" => "sc"
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
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "s"
));

$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "id5";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "factura_consulta";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "numero_factura";
$proto31["m_columns"][] = "consulta_id";
$proto31["m_columns"][] = "cliente_id";
$proto31["m_columns"][] = "fecha";
$proto31["m_columns"][] = "monto";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_alias"] = "fc";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = "0";
$proto32["m_inBrackets"] = "0";
$proto32["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "consulta";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "fecha";
$proto35["m_columns"][] = "paciente";
$proto35["m_columns"][] = "estado_retirada";
$proto35["m_columns"][] = "medico_encargado";
$proto35["m_columns"][] = "diagnostico_id";
$proto35["m_columns"][] = "tipo_consulta_id";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_alias"] = "c";
$proto36=array();
$proto36["m_sql"] = "fc.consulta_id = c.id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "consulta_id",
	"m_strTable" => "fc"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= c.id";
$proto36["m_havingmode"] = "0";
$proto36["m_inBrackets"] = "0";
$proto36["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "solicitud_servicio";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "fecha";
$proto39["m_columns"][] = "consulta_id";
$proto39["m_columns"][] = "servicio_id";
$proto39["m_columns"][] = "solicitante";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_alias"] = "sc";
$proto40=array();
$proto40["m_sql"] = "c.id = sc.consulta_id";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= sc.consulta_id";
$proto40["m_havingmode"] = "0";
$proto40["m_inBrackets"] = "0";
$proto40["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_INNERJOIN";
			$proto43=array();
$proto43["m_strName"] = "empleado";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "profesion";
$proto43["m_columns"][] = "puesto_id";
$proto43["m_columns"][] = "persona_id";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_alias"] = "e";
$proto44=array();
$proto44["m_sql"] = "sc.solicitante = e.id";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "solicitante",
	"m_strTable" => "sc"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= e.id";
$proto44["m_havingmode"] = "0";
$proto44["m_inBrackets"] = "0";
$proto44["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_INNERJOIN";
			$proto47=array();
$proto47["m_strName"] = "persona";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "nombre";
$proto47["m_columns"][] = "apellido";
$proto47["m_columns"][] = "fecha_nacimiento";
$proto47["m_columns"][] = "cui";
$proto47["m_columns"][] = "direccion";
$proto47["m_columns"][] = "telefono";
$proto47["m_columns"][] = "nit";
$proto47["m_columns"][] = "genero_id";
$proto47["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_alias"] = "p";
$proto48=array();
$proto48["m_sql"] = "e.persona_id = p.id";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "persona_id",
	"m_strTable" => "e"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= p.id";
$proto48["m_havingmode"] = "0";
$proto48["m_inBrackets"] = "0";
$proto48["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_INNERJOIN";
			$proto51=array();
$proto51["m_strName"] = "servicio";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "nombre";
$proto51["m_columns"][] = "descripcion";
$proto51["m_columns"][] = "precio";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_alias"] = "s";
$proto52=array();
$proto52["m_sql"] = "sc.servicio_id = s.id";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "servicio_id",
	"m_strTable" => "sc"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= s.id";
$proto52["m_havingmode"] = "0";
$proto52["m_inBrackets"] = "0";
$proto52["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cobro_servicios = createSqlQuery_cobro_servicios();
											$tdatacobro_servicios[".sqlquery"] = $queryData_cobro_servicios;

include_once(getabspath("include/cobro_servicios_events.php"));
$tableEvents["cobro_servicios"] = new eventclass_cobro_servicios;
$tdatacobro_servicios[".hasEvents"] = true;

$cipherer = new RunnerCipherer("cobro_servicios");

?>