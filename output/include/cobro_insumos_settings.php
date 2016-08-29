<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacobro_insumos = array();
	$tdatacobro_insumos[".NumberOfChars"] = 80; 
	$tdatacobro_insumos[".ShortName"] = "cobro_insumos";
	$tdatacobro_insumos[".OwnerID"] = "";
	$tdatacobro_insumos[".OriginalTable"] = "factura_consulta";

//	field labels
$fieldLabelscobro_insumos = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscobro_insumos["Spanish"] = array();
	$fieldToolTipscobro_insumos["Spanish"] = array();
	$fieldLabelscobro_insumos["Spanish"]["_Sub_Total_"] = "'Sub Total'";
	$fieldToolTipscobro_insumos["Spanish"]["'Sub Total'"] = "";
	$fieldLabelscobro_insumos["Spanish"]["_Factura_"] = "'Factura'";
	$fieldToolTipscobro_insumos["Spanish"]["'Factura'"] = "";
	$fieldLabelscobro_insumos["Spanish"]["_Fecha_"] = "'Fecha'";
	$fieldToolTipscobro_insumos["Spanish"]["'Fecha'"] = "";
	$fieldLabelscobro_insumos["Spanish"]["_M_dico_Responsable_"] = "'Médico Responsable'";
	$fieldToolTipscobro_insumos["Spanish"]["'Médico Responsable'"] = "";
	$fieldLabelscobro_insumos["Spanish"]["_Nombre_del_Medicamento_"] = "'Nombre del Medicamento'";
	$fieldToolTipscobro_insumos["Spanish"]["'Nombre del Medicamento'"] = "";
	$fieldLabelscobro_insumos["Spanish"]["_C_digo_del_Medicamento_"] = "'Código del Medicamento'";
	$fieldToolTipscobro_insumos["Spanish"]["'Código del Medicamento'"] = "";
	$fieldLabelscobro_insumos["Spanish"]["_Precio_unitario_"] = "'Precio Unitario'";
	$fieldToolTipscobro_insumos["Spanish"]["'Precio unitario'"] = "";
	$fieldLabelscobro_insumos["Spanish"]["_Cantidad_"] = "'Cantidad'";
	$fieldToolTipscobro_insumos["Spanish"]["'Cantidad'"] = "";
	$fieldLabelscobro_insumos["Spanish"]["id"] = "Id";
	$fieldToolTipscobro_insumos["Spanish"]["id"] = "";
	$fieldLabelscobro_insumos["Spanish"]["id1"] = "Id1";
	$fieldToolTipscobro_insumos["Spanish"]["id1"] = "";
	$fieldLabelscobro_insumos["Spanish"]["id2"] = "Id2";
	$fieldToolTipscobro_insumos["Spanish"]["id2"] = "";
	$fieldLabelscobro_insumos["Spanish"]["id3"] = "Id3";
	$fieldToolTipscobro_insumos["Spanish"]["id3"] = "";
	$fieldLabelscobro_insumos["Spanish"]["id4"] = "Id4";
	$fieldToolTipscobro_insumos["Spanish"]["id4"] = "";
	$fieldLabelscobro_insumos["Spanish"]["id5"] = "Id5";
	$fieldToolTipscobro_insumos["Spanish"]["id5"] = "";
	if (count($fieldToolTipscobro_insumos["Spanish"]))
		$tdatacobro_insumos[".isUseToolTips"] = true;
}
	
	
	$tdatacobro_insumos[".NCSearch"] = true;



$tdatacobro_insumos[".shortTableName"] = "cobro_insumos";
$tdatacobro_insumos[".nSecOptions"] = 0;
$tdatacobro_insumos[".recsPerRowList"] = 1;
$tdatacobro_insumos[".mainTableOwnerID"] = "";
$tdatacobro_insumos[".moveNext"] = 1;
$tdatacobro_insumos[".nType"] = 1;

$tdatacobro_insumos[".strOriginalTableName"] = "factura_consulta";




$tdatacobro_insumos[".showAddInPopup"] = true;

$tdatacobro_insumos[".showEditInPopup"] = true;

$tdatacobro_insumos[".showViewInPopup"] = true;

$tdatacobro_insumos[".fieldsForRegister"] = array();

$tdatacobro_insumos[".listAjax"] = false;

	$tdatacobro_insumos[".audit"] = false;

	$tdatacobro_insumos[".locking"] = false;

$tdatacobro_insumos[".listIcons"] = true;


$tdatacobro_insumos[".printFriendly"] = true;


$tdatacobro_insumos[".showSimpleSearchOptions"] = false;

$tdatacobro_insumos[".showSearchPanel"] = true;

if (isMobile())
	$tdatacobro_insumos[".isUseAjaxSuggest"] = false;
else 
	$tdatacobro_insumos[".isUseAjaxSuggest"] = true;

$tdatacobro_insumos[".rowHighlite"] = true;

// button handlers file names

$tdatacobro_insumos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacobro_insumos[".isUseTimeForSearch"] = false;




$tdatacobro_insumos[".allSearchFields"] = array();

$tdatacobro_insumos[".allSearchFields"][] = "'Factura'";
$tdatacobro_insumos[".allSearchFields"][] = "'Fecha'";
$tdatacobro_insumos[".allSearchFields"][] = "'Médico Responsable'";
$tdatacobro_insumos[".allSearchFields"][] = "'Nombre del Medicamento'";
$tdatacobro_insumos[".allSearchFields"][] = "'Código del Medicamento'";
$tdatacobro_insumos[".allSearchFields"][] = "'Precio unitario'";
$tdatacobro_insumos[".allSearchFields"][] = "'Cantidad'";
$tdatacobro_insumos[".allSearchFields"][] = "'Sub Total'";

$tdatacobro_insumos[".googleLikeFields"][] = "'Factura'";
$tdatacobro_insumos[".googleLikeFields"][] = "'Fecha'";
$tdatacobro_insumos[".googleLikeFields"][] = "'Médico Responsable'";
$tdatacobro_insumos[".googleLikeFields"][] = "'Nombre del Medicamento'";
$tdatacobro_insumos[".googleLikeFields"][] = "'Código del Medicamento'";
$tdatacobro_insumos[".googleLikeFields"][] = "'Precio unitario'";
$tdatacobro_insumos[".googleLikeFields"][] = "'Cantidad'";
$tdatacobro_insumos[".googleLikeFields"][] = "'Sub Total'";
$tdatacobro_insumos[".googleLikeFields"][] = "id";
$tdatacobro_insumos[".googleLikeFields"][] = "id1";
$tdatacobro_insumos[".googleLikeFields"][] = "id2";
$tdatacobro_insumos[".googleLikeFields"][] = "id3";
$tdatacobro_insumos[".googleLikeFields"][] = "id4";
$tdatacobro_insumos[".googleLikeFields"][] = "id5";


$tdatacobro_insumos[".advSearchFields"][] = "'Factura'";
$tdatacobro_insumos[".advSearchFields"][] = "'Fecha'";
$tdatacobro_insumos[".advSearchFields"][] = "'Médico Responsable'";
$tdatacobro_insumos[".advSearchFields"][] = "'Nombre del Medicamento'";
$tdatacobro_insumos[".advSearchFields"][] = "'Código del Medicamento'";
$tdatacobro_insumos[".advSearchFields"][] = "'Precio unitario'";
$tdatacobro_insumos[".advSearchFields"][] = "'Cantidad'";
$tdatacobro_insumos[".advSearchFields"][] = "'Sub Total'";

$tdatacobro_insumos[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacobro_insumos[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacobro_insumos[".strOrderBy"] = $tstrOrderBy;

$tdatacobro_insumos[".orderindexes"] = array();

$tdatacobro_insumos[".sqlHead"] = "SELECT fc.numero_factura AS `'Factura'`,  sm.fecha AS `'Fecha'`,  CONCAT(p.nombre, ' ', p.apellido) AS `'Médico Responsable'`,  i.nombre AS `'Nombre del Medicamento'`,  i.codigo AS `'Código del Medicamento'`,  TRUNCATE((l.precio / l.cantidad), 2) AS `'Precio unitario'`,  sm.cantidad AS `'Cantidad'`,  (TRUNCATE((TRUNCATE((l.precio / l.cantidad),2) * sm.cantidad),2)) AS `'Sub Total'`,  fc.id,  c.id AS id1,  sm.id AS id2,  e.id AS id3,  p.id AS id4,  l.id AS id5";
$tdatacobro_insumos[".sqlFrom"] = "FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN solicitud_medicamento AS sm ON c.id = sm.consulta_id  INNER JOIN empleado AS e ON sm.responsable = e.id  INNER JOIN persona AS p ON e.persona_id = p.id  INNER JOIN insumos AS i ON sm.medicamento_id = i.id  INNER JOIN lotes AS l ON i.id = l.insumo";
$tdatacobro_insumos[".sqlWhereExpr"] = "";
$tdatacobro_insumos[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacobro_insumos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacobro_insumos[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscobro_insumos = array();
$tableKeyscobro_insumos[] = "id";
$tdatacobro_insumos[".Keys"] = $tableKeyscobro_insumos;

$tdatacobro_insumos[".listFields"] = array();
$tdatacobro_insumos[".listFields"][] = "'Factura'";
$tdatacobro_insumos[".listFields"][] = "'Fecha'";
$tdatacobro_insumos[".listFields"][] = "'Médico Responsable'";
$tdatacobro_insumos[".listFields"][] = "'Nombre del Medicamento'";
$tdatacobro_insumos[".listFields"][] = "'Código del Medicamento'";
$tdatacobro_insumos[".listFields"][] = "'Precio unitario'";
$tdatacobro_insumos[".listFields"][] = "'Cantidad'";
$tdatacobro_insumos[".listFields"][] = "'Sub Total'";

$tdatacobro_insumos[".viewFields"] = array();

$tdatacobro_insumos[".addFields"] = array();

$tdatacobro_insumos[".inlineAddFields"] = array();

$tdatacobro_insumos[".editFields"] = array();

$tdatacobro_insumos[".inlineEditFields"] = array();

$tdatacobro_insumos[".exportFields"] = array();

$tdatacobro_insumos[".printFields"] = array();
$tdatacobro_insumos[".printFields"][] = "'Factura'";
$tdatacobro_insumos[".printFields"][] = "'Fecha'";
$tdatacobro_insumos[".printFields"][] = "'Médico Responsable'";
$tdatacobro_insumos[".printFields"][] = "'Nombre del Medicamento'";
$tdatacobro_insumos[".printFields"][] = "'Código del Medicamento'";
$tdatacobro_insumos[".printFields"][] = "'Precio unitario'";
$tdatacobro_insumos[".printFields"][] = "'Cantidad'";
$tdatacobro_insumos[".printFields"][] = "'Sub Total'";

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
	
		
		
	$tdatacobro_insumos["'Factura'"] = $fdata;
//	'Fecha'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "'Fecha'";
	$fdata["GoodName"] = "_Fecha_";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "'Fecha'"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha"; 
		$fdata["FullName"] = "sm.fecha";
	
		
		
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
	
		
		
	$tdatacobro_insumos["'Fecha'"] = $fdata;
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
	
		
		
	$tdatacobro_insumos["'Médico Responsable'"] = $fdata;
//	'Nombre del Medicamento'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "'Nombre del Medicamento'";
	$fdata["GoodName"] = "_Nombre_del_Medicamento_";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "'Nombre del Medicamento'"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "i.nombre";
	
		
		
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
	
		
		
	$tdatacobro_insumos["'Nombre del Medicamento'"] = $fdata;
//	'Código del Medicamento'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "'Código del Medicamento'";
	$fdata["GoodName"] = "_C_digo_del_Medicamento_";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = "'Código del Medicamento'"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "codigo"; 
		$fdata["FullName"] = "i.codigo";
	
		
		
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
	
		
		
	$tdatacobro_insumos["'Código del Medicamento'"] = $fdata;
//	'Precio unitario'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "'Precio unitario'";
	$fdata["GoodName"] = "_Precio_unitario_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "'Precio Unitario'"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "'Precio unitario'"; 
		$fdata["FullName"] = "TRUNCATE((l.precio / l.cantidad), 2)";
	
		
		
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
	
		
		
	$tdatacobro_insumos["'Precio unitario'"] = $fdata;
//	'Cantidad'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "'Cantidad'";
	$fdata["GoodName"] = "_Cantidad_";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "'Cantidad'"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "cantidad"; 
		$fdata["FullName"] = "sm.cantidad";
	
		
		
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
	
		
		
	$tdatacobro_insumos["'Cantidad'"] = $fdata;
//	'Sub Total'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "'Sub Total'";
	$fdata["GoodName"] = "_Sub_Total_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "'Sub Total'"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "'Sub Total'"; 
		$fdata["FullName"] = "(TRUNCATE((TRUNCATE((l.precio / l.cantidad),2) * sm.cantidad),2))";
	
		
		
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
	
		
		
	$tdatacobro_insumos["'Sub Total'"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
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
	
		
		
	$tdatacobro_insumos["id"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
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
	
		
		
	$tdatacobro_insumos["id1"] = $fdata;
//	id2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id2";
	$fdata["GoodName"] = "id2";
	$fdata["ownerTable"] = "solicitud_medicamento";
	$fdata["Label"] = "Id2"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "sm.id";
	
		
		
				
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
	
		
		
	$tdatacobro_insumos["id2"] = $fdata;
//	id3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
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
	
		
		
	$tdatacobro_insumos["id3"] = $fdata;
//	id4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
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
	
		
		
	$tdatacobro_insumos["id4"] = $fdata;
//	id5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "id5";
	$fdata["GoodName"] = "id5";
	$fdata["ownerTable"] = "lotes";
	$fdata["Label"] = "Id5"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "l.id";
	
		
		
				
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
	
		
		
	$tdatacobro_insumos["id5"] = $fdata;

	
$tables_data["cobro_insumos"]=&$tdatacobro_insumos;
$field_labels["cobro_insumos"] = &$fieldLabelscobro_insumos;
$fieldToolTips["cobro_insumos"] = &$fieldToolTipscobro_insumos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cobro_insumos"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cobro_insumos"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cobro_insumos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fc.numero_factura AS `'Factura'`,  sm.fecha AS `'Fecha'`,  CONCAT(p.nombre, ' ', p.apellido) AS `'Médico Responsable'`,  i.nombre AS `'Nombre del Medicamento'`,  i.codigo AS `'Código del Medicamento'`,  TRUNCATE((l.precio / l.cantidad), 2) AS `'Precio unitario'`,  sm.cantidad AS `'Cantidad'`,  (TRUNCATE((TRUNCATE((l.precio / l.cantidad),2) * sm.cantidad),2)) AS `'Sub Total'`,  fc.id,  c.id AS id1,  sm.id AS id2,  e.id AS id3,  p.id AS id4,  l.id AS id5";
$proto0["m_strFrom"] = "FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN solicitud_medicamento AS sm ON c.id = sm.consulta_id  INNER JOIN empleado AS e ON sm.responsable = e.id  INNER JOIN persona AS p ON e.persona_id = p.id  INNER JOIN insumos AS i ON sm.medicamento_id = i.id  INNER JOIN lotes AS l ON i.id = l.insumo";
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
	"m_strTable" => "sm"
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
	"m_sql" => "p.apellido"
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
	"m_strTable" => "i"
));

$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "'Nombre del Medicamento'";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "i"
));

$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "'Código del Medicamento'";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(l.precio / l.cantidad)"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "2"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "TRUNCATE";
$obj = new SQLFunctionCall($proto19);

$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "'Precio unitario'";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "sm"
));

$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "'Cantidad'";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(TRUNCATE((TRUNCATE((l.precio / l.cantidad),2) * sm.cantidad),2))"
));

$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "'Sub Total'";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "fc"
));

$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c"
));

$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "sm"
));

$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "id2";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "e"
));

$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "id3";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "p"
));

$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "id4";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "l"
));

$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "id5";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "factura_consulta";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "numero_factura";
$proto39["m_columns"][] = "consulta_id";
$proto39["m_columns"][] = "cliente_id";
$proto39["m_columns"][] = "fecha";
$proto39["m_columns"][] = "monto";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_alias"] = "fc";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
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
$proto43["m_strName"] = "consulta";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "fecha";
$proto43["m_columns"][] = "paciente";
$proto43["m_columns"][] = "estado_retirada";
$proto43["m_columns"][] = "medico_encargado";
$proto43["m_columns"][] = "diagnostico_id";
$proto43["m_columns"][] = "tipo_consulta_id";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_alias"] = "c";
$proto44=array();
$proto44["m_sql"] = "fc.consulta_id = c.id";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "consulta_id",
	"m_strTable" => "fc"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= c.id";
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
$proto47["m_strName"] = "solicitud_medicamento";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "fecha";
$proto47["m_columns"][] = "consulta_id";
$proto47["m_columns"][] = "responsable";
$proto47["m_columns"][] = "medicamento_id";
$proto47["m_columns"][] = "lote_id";
$proto47["m_columns"][] = "cantidad";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_alias"] = "sm";
$proto48=array();
$proto48["m_sql"] = "c.id = sm.consulta_id";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= sm.consulta_id";
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
$proto51["m_strName"] = "empleado";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "profesion";
$proto51["m_columns"][] = "puesto_id";
$proto51["m_columns"][] = "persona_id";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_alias"] = "e";
$proto52=array();
$proto52["m_sql"] = "sm.responsable = e.id";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "responsable",
	"m_strTable" => "sm"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= e.id";
$proto52["m_havingmode"] = "0";
$proto52["m_inBrackets"] = "0";
$proto52["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
												$proto54=array();
$proto54["m_link"] = "SQLL_INNERJOIN";
			$proto55=array();
$proto55["m_strName"] = "persona";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id";
$proto55["m_columns"][] = "nombre";
$proto55["m_columns"][] = "apellido";
$proto55["m_columns"][] = "fecha_nacimiento";
$proto55["m_columns"][] = "cui";
$proto55["m_columns"][] = "direccion";
$proto55["m_columns"][] = "telefono";
$proto55["m_columns"][] = "nit";
$proto55["m_columns"][] = "genero_id";
$proto55["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_alias"] = "p";
$proto56=array();
$proto56["m_sql"] = "e.persona_id = p.id";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "persona_id",
	"m_strTable" => "e"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= p.id";
$proto56["m_havingmode"] = "0";
$proto56["m_inBrackets"] = "0";
$proto56["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
												$proto58=array();
$proto58["m_link"] = "SQLL_INNERJOIN";
			$proto59=array();
$proto59["m_strName"] = "insumos";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "id";
$proto59["m_columns"][] = "codigo";
$proto59["m_columns"][] = "nombre";
$proto59["m_columns"][] = "contenido";
$proto59["m_columns"][] = "componente";
$proto59["m_columns"][] = "cantidad";
$proto59["m_columns"][] = "presentacion";
$proto59["m_columns"][] = "existencia_minima";
$proto59["m_columns"][] = "existencia_actual";
$proto59["m_columns"][] = "descripcion";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_alias"] = "i";
$proto60=array();
$proto60["m_sql"] = "sm.medicamento_id = i.id";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "medicamento_id",
	"m_strTable" => "sm"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= i.id";
$proto60["m_havingmode"] = "0";
$proto60["m_inBrackets"] = "0";
$proto60["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
												$proto62=array();
$proto62["m_link"] = "SQLL_INNERJOIN";
			$proto63=array();
$proto63["m_strName"] = "lotes";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "id";
$proto63["m_columns"][] = "codigo";
$proto63["m_columns"][] = "produccion";
$proto63["m_columns"][] = "caducidad";
$proto63["m_columns"][] = "expirado";
$proto63["m_columns"][] = "proveedor";
$proto63["m_columns"][] = "insumo";
$proto63["m_columns"][] = "cantidad";
$proto63["m_columns"][] = "precio";
$proto63["m_columns"][] = "costo";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_alias"] = "l";
$proto64=array();
$proto64["m_sql"] = "i.id = l.insumo";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "i"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= l.insumo";
$proto64["m_havingmode"] = "0";
$proto64["m_inBrackets"] = "0";
$proto64["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cobro_insumos = createSqlQuery_cobro_insumos();
														$tdatacobro_insumos[".sqlquery"] = $queryData_cobro_insumos;

include_once(getabspath("include/cobro_insumos_events.php"));
$tableEvents["cobro_insumos"] = new eventclass_cobro_insumos;
$tdatacobro_insumos[".hasEvents"] = true;

$cipherer = new RunnerCipherer("cobro_insumos");

?>