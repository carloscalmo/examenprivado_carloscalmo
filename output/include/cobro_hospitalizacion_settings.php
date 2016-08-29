<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacobro_hospitalizacion = array();
	$tdatacobro_hospitalizacion[".NumberOfChars"] = 80; 
	$tdatacobro_hospitalizacion[".ShortName"] = "cobro_hospitalizacion";
	$tdatacobro_hospitalizacion[".OwnerID"] = "";
	$tdatacobro_hospitalizacion[".OriginalTable"] = "factura_consulta";

//	field labels
$fieldLabelscobro_hospitalizacion = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscobro_hospitalizacion["Spanish"] = array();
	$fieldToolTipscobro_hospitalizacion["Spanish"] = array();
	$fieldLabelscobro_hospitalizacion["Spanish"]["_Factura_"] = "Factura";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["'Factura'"] = "";
	$fieldLabelscobro_hospitalizacion["Spanish"]["_Fecha_de_Ingreso_"] = "Fecha de Ingreso";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["'Fecha de Ingreso'"] = "";
	$fieldLabelscobro_hospitalizacion["Spanish"]["_Dias_de_estancia_"] = "Dias de estancia";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["'Dias de estancia'"] = "";
	$fieldLabelscobro_hospitalizacion["Spanish"]["_Ambiente_"] = "Ambiente";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["'Ambiente'"] = "";
	$fieldLabelscobro_hospitalizacion["Spanish"]["_Costo_diario_"] = "Costo Diario";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["'Costo diario'"] = "";
	$fieldLabelscobro_hospitalizacion["Spanish"]["_Total_"] = "Total";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["'Total'"] = "";
	$fieldLabelscobro_hospitalizacion["Spanish"]["id"] = "Id";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["id"] = "";
	$fieldLabelscobro_hospitalizacion["Spanish"]["id1"] = "Id1";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["id1"] = "";
	$fieldLabelscobro_hospitalizacion["Spanish"]["id2"] = "Id2";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["id2"] = "";
	$fieldLabelscobro_hospitalizacion["Spanish"]["id3"] = "Id3";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["id3"] = "";
	$fieldLabelscobro_hospitalizacion["Spanish"]["idtipo_ambiente"] = "Idtipo Ambiente";
	$fieldToolTipscobro_hospitalizacion["Spanish"]["idtipo_ambiente"] = "";
	if (count($fieldToolTipscobro_hospitalizacion["Spanish"]))
		$tdatacobro_hospitalizacion[".isUseToolTips"] = true;
}
	
	
	$tdatacobro_hospitalizacion[".NCSearch"] = true;



$tdatacobro_hospitalizacion[".shortTableName"] = "cobro_hospitalizacion";
$tdatacobro_hospitalizacion[".nSecOptions"] = 0;
$tdatacobro_hospitalizacion[".recsPerRowList"] = 1;
$tdatacobro_hospitalizacion[".mainTableOwnerID"] = "";
$tdatacobro_hospitalizacion[".moveNext"] = 1;
$tdatacobro_hospitalizacion[".nType"] = 1;

$tdatacobro_hospitalizacion[".strOriginalTableName"] = "factura_consulta";




$tdatacobro_hospitalizacion[".showAddInPopup"] = true;

$tdatacobro_hospitalizacion[".showEditInPopup"] = true;

$tdatacobro_hospitalizacion[".showViewInPopup"] = true;

$tdatacobro_hospitalizacion[".fieldsForRegister"] = array();

$tdatacobro_hospitalizacion[".listAjax"] = false;

	$tdatacobro_hospitalizacion[".audit"] = false;

	$tdatacobro_hospitalizacion[".locking"] = false;

$tdatacobro_hospitalizacion[".listIcons"] = true;


$tdatacobro_hospitalizacion[".printFriendly"] = true;


$tdatacobro_hospitalizacion[".showSimpleSearchOptions"] = false;

$tdatacobro_hospitalizacion[".showSearchPanel"] = true;

if (isMobile())
	$tdatacobro_hospitalizacion[".isUseAjaxSuggest"] = false;
else 
	$tdatacobro_hospitalizacion[".isUseAjaxSuggest"] = true;

$tdatacobro_hospitalizacion[".rowHighlite"] = true;

// button handlers file names

$tdatacobro_hospitalizacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacobro_hospitalizacion[".isUseTimeForSearch"] = false;




$tdatacobro_hospitalizacion[".allSearchFields"] = array();

$tdatacobro_hospitalizacion[".allSearchFields"][] = "'Factura'";
$tdatacobro_hospitalizacion[".allSearchFields"][] = "'Fecha de Ingreso'";
$tdatacobro_hospitalizacion[".allSearchFields"][] = "'Dias de estancia'";
$tdatacobro_hospitalizacion[".allSearchFields"][] = "'Ambiente'";
$tdatacobro_hospitalizacion[".allSearchFields"][] = "'Costo diario'";
$tdatacobro_hospitalizacion[".allSearchFields"][] = "'Total'";

$tdatacobro_hospitalizacion[".googleLikeFields"][] = "'Factura'";
$tdatacobro_hospitalizacion[".googleLikeFields"][] = "'Fecha de Ingreso'";
$tdatacobro_hospitalizacion[".googleLikeFields"][] = "'Dias de estancia'";
$tdatacobro_hospitalizacion[".googleLikeFields"][] = "'Ambiente'";
$tdatacobro_hospitalizacion[".googleLikeFields"][] = "'Costo diario'";
$tdatacobro_hospitalizacion[".googleLikeFields"][] = "'Total'";
$tdatacobro_hospitalizacion[".googleLikeFields"][] = "id";
$tdatacobro_hospitalizacion[".googleLikeFields"][] = "id1";
$tdatacobro_hospitalizacion[".googleLikeFields"][] = "id2";
$tdatacobro_hospitalizacion[".googleLikeFields"][] = "id3";
$tdatacobro_hospitalizacion[".googleLikeFields"][] = "idtipo_ambiente";


$tdatacobro_hospitalizacion[".advSearchFields"][] = "'Factura'";
$tdatacobro_hospitalizacion[".advSearchFields"][] = "'Fecha de Ingreso'";
$tdatacobro_hospitalizacion[".advSearchFields"][] = "'Dias de estancia'";
$tdatacobro_hospitalizacion[".advSearchFields"][] = "'Ambiente'";
$tdatacobro_hospitalizacion[".advSearchFields"][] = "'Costo diario'";
$tdatacobro_hospitalizacion[".advSearchFields"][] = "'Total'";

$tdatacobro_hospitalizacion[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacobro_hospitalizacion[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacobro_hospitalizacion[".strOrderBy"] = $tstrOrderBy;

$tdatacobro_hospitalizacion[".orderindexes"] = array();

$tdatacobro_hospitalizacion[".sqlHead"] = "SELECT fc.numero_factura AS `'Factura'`,  h.fecha_ingreso AS `'Fecha de Ingreso'`,  DATEDIFF(h.fecha_egreso, h.fecha_ingreso) AS `'Dias de estancia'`,  a.nombre AS `'Ambiente'`,  ta.Precio AS `'Costo diario'`,  (DATEDIFF(h.fecha_egreso,h.fecha_ingreso) * ta.Precio) AS `'Total'`,  fc.id,  c.id AS id1,  h.id AS id2,  a.id AS id3,  ta.idtipo_ambiente";
$tdatacobro_hospitalizacion[".sqlFrom"] = "FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN hospitalizacion AS h ON c.id = h.consulta_id  INNER JOIN ambiente AS a ON h.ambiente_id = a.id  INNER JOIN tipo_ambiente AS ta ON a.idtipo_ambiente = ta.idtipo_ambiente";
$tdatacobro_hospitalizacion[".sqlWhereExpr"] = "";
$tdatacobro_hospitalizacion[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacobro_hospitalizacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacobro_hospitalizacion[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscobro_hospitalizacion = array();
$tableKeyscobro_hospitalizacion[] = "id";
$tdatacobro_hospitalizacion[".Keys"] = $tableKeyscobro_hospitalizacion;

$tdatacobro_hospitalizacion[".listFields"] = array();
$tdatacobro_hospitalizacion[".listFields"][] = "'Factura'";
$tdatacobro_hospitalizacion[".listFields"][] = "'Fecha de Ingreso'";
$tdatacobro_hospitalizacion[".listFields"][] = "'Dias de estancia'";
$tdatacobro_hospitalizacion[".listFields"][] = "'Ambiente'";
$tdatacobro_hospitalizacion[".listFields"][] = "'Costo diario'";
$tdatacobro_hospitalizacion[".listFields"][] = "'Total'";

$tdatacobro_hospitalizacion[".viewFields"] = array();

$tdatacobro_hospitalizacion[".addFields"] = array();

$tdatacobro_hospitalizacion[".inlineAddFields"] = array();

$tdatacobro_hospitalizacion[".editFields"] = array();

$tdatacobro_hospitalizacion[".inlineEditFields"] = array();

$tdatacobro_hospitalizacion[".exportFields"] = array();

$tdatacobro_hospitalizacion[".printFields"] = array();
$tdatacobro_hospitalizacion[".printFields"][] = "'Factura'";
$tdatacobro_hospitalizacion[".printFields"][] = "'Fecha de Ingreso'";
$tdatacobro_hospitalizacion[".printFields"][] = "'Dias de estancia'";
$tdatacobro_hospitalizacion[".printFields"][] = "'Ambiente'";
$tdatacobro_hospitalizacion[".printFields"][] = "'Costo diario'";
$tdatacobro_hospitalizacion[".printFields"][] = "'Total'";

//	'Factura'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
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
	
		
		
	$tdatacobro_hospitalizacion["'Factura'"] = $fdata;
//	'Fecha de Ingreso'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "'Fecha de Ingreso'";
	$fdata["GoodName"] = "_Fecha_de_Ingreso_";
	$fdata["ownerTable"] = "hospitalizacion";
	$fdata["Label"] = "Fecha de Ingreso"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha_ingreso"; 
		$fdata["FullName"] = "h.fecha_ingreso";
	
		
		
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
	
		
		
	$tdatacobro_hospitalizacion["'Fecha de Ingreso'"] = $fdata;
//	'Dias de estancia'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "'Dias de estancia'";
	$fdata["GoodName"] = "_Dias_de_estancia_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Dias de estancia"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "'Dias de estancia'"; 
		$fdata["FullName"] = "DATEDIFF(h.fecha_egreso, h.fecha_ingreso)";
	
		
		
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
	
		
		
	$tdatacobro_hospitalizacion["'Dias de estancia'"] = $fdata;
//	'Ambiente'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "'Ambiente'";
	$fdata["GoodName"] = "_Ambiente_";
	$fdata["ownerTable"] = "ambiente";
	$fdata["Label"] = "Ambiente"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "a.nombre";
	
		
		
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
	
		
		
	$tdatacobro_hospitalizacion["'Ambiente'"] = $fdata;
//	'Costo diario'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "'Costo diario'";
	$fdata["GoodName"] = "_Costo_diario_";
	$fdata["ownerTable"] = "tipo_ambiente";
	$fdata["Label"] = "Costo Diario"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Precio"; 
		$fdata["FullName"] = "ta.Precio";
	
		
		
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
	
		
		
	$tdatacobro_hospitalizacion["'Costo diario'"] = $fdata;
//	'Total'
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "'Total'";
	$fdata["GoodName"] = "_Total_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Total"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "'Total'"; 
		$fdata["FullName"] = "(DATEDIFF(h.fecha_egreso,h.fecha_ingreso) * ta.Precio)";
	
		
		
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
	
		
		
	$tdatacobro_hospitalizacion["'Total'"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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
	
		
		
	$tdatacobro_hospitalizacion["id"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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
	
		
		
	$tdatacobro_hospitalizacion["id1"] = $fdata;
//	id2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id2";
	$fdata["GoodName"] = "id2";
	$fdata["ownerTable"] = "hospitalizacion";
	$fdata["Label"] = "Id2"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "h.id";
	
		
		
				
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
	
		
		
	$tdatacobro_hospitalizacion["id2"] = $fdata;
//	id3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "id3";
	$fdata["GoodName"] = "id3";
	$fdata["ownerTable"] = "ambiente";
	$fdata["Label"] = "Id3"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "a.id";
	
		
		
				
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
	
		
		
	$tdatacobro_hospitalizacion["id3"] = $fdata;
//	idtipo_ambiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "idtipo_ambiente";
	$fdata["GoodName"] = "idtipo_ambiente";
	$fdata["ownerTable"] = "tipo_ambiente";
	$fdata["Label"] = "Idtipo Ambiente"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "idtipo_ambiente"; 
		$fdata["FullName"] = "ta.idtipo_ambiente";
	
		
		
				
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
	
		
		
	$tdatacobro_hospitalizacion["idtipo_ambiente"] = $fdata;

	
$tables_data["cobro_hospitalizacion"]=&$tdatacobro_hospitalizacion;
$field_labels["cobro_hospitalizacion"] = &$fieldLabelscobro_hospitalizacion;
$fieldToolTips["cobro_hospitalizacion"] = &$fieldToolTipscobro_hospitalizacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cobro_hospitalizacion"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["cobro_hospitalizacion"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cobro_hospitalizacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fc.numero_factura AS `'Factura'`,  h.fecha_ingreso AS `'Fecha de Ingreso'`,  DATEDIFF(h.fecha_egreso, h.fecha_ingreso) AS `'Dias de estancia'`,  a.nombre AS `'Ambiente'`,  ta.Precio AS `'Costo diario'`,  (DATEDIFF(h.fecha_egreso,h.fecha_ingreso) * ta.Precio) AS `'Total'`,  fc.id,  c.id AS id1,  h.id AS id2,  a.id AS id3,  ta.idtipo_ambiente";
$proto0["m_strFrom"] = "FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN hospitalizacion AS h ON c.id = h.consulta_id  INNER JOIN ambiente AS a ON h.ambiente_id = a.id  INNER JOIN tipo_ambiente AS ta ON a.idtipo_ambiente = ta.idtipo_ambiente";
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
	"m_strName" => "fecha_ingreso",
	"m_strTable" => "h"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "'Fecha de Ingreso'";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_CUSTOM";
$proto10["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "h.fecha_egreso"
));

$proto10["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "h.fecha_ingreso"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto10);

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "'Dias de estancia'";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "a"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "'Ambiente'";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "ta"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "'Costo diario'";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(DATEDIFF(h.fecha_egreso,h.fecha_ingreso) * ta.Precio)"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "'Total'";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "fc"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "h"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "id2";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "a"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "id3";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "idtipo_ambiente",
	"m_strTable" => "ta"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "factura_consulta";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "numero_factura";
$proto30["m_columns"][] = "consulta_id";
$proto30["m_columns"][] = "cliente_id";
$proto30["m_columns"][] = "fecha";
$proto30["m_columns"][] = "monto";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "fc";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_INNERJOIN";
			$proto34=array();
$proto34["m_strName"] = "consulta";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "id";
$proto34["m_columns"][] = "fecha";
$proto34["m_columns"][] = "paciente";
$proto34["m_columns"][] = "estado_retirada";
$proto34["m_columns"][] = "medico_encargado";
$proto34["m_columns"][] = "diagnostico_id";
$proto34["m_columns"][] = "tipo_consulta_id";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_alias"] = "c";
$proto35=array();
$proto35["m_sql"] = "fc.consulta_id = c.id";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "consulta_id",
	"m_strTable" => "fc"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= c.id";
$proto35["m_havingmode"] = "0";
$proto35["m_inBrackets"] = "0";
$proto35["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_INNERJOIN";
			$proto38=array();
$proto38["m_strName"] = "hospitalizacion";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id";
$proto38["m_columns"][] = "numero_cama";
$proto38["m_columns"][] = "ambiente_id";
$proto38["m_columns"][] = "consulta_id";
$proto38["m_columns"][] = "fecha_ingreso";
$proto38["m_columns"][] = "fecha_egreso";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_alias"] = "h";
$proto39=array();
$proto39["m_sql"] = "c.id = h.consulta_id";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= h.consulta_id";
$proto39["m_havingmode"] = "0";
$proto39["m_inBrackets"] = "0";
$proto39["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_INNERJOIN";
			$proto42=array();
$proto42["m_strName"] = "ambiente";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "id";
$proto42["m_columns"][] = "nombre";
$proto42["m_columns"][] = "capacidad";
$proto42["m_columns"][] = "idtipo_ambiente";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_alias"] = "a";
$proto43=array();
$proto43["m_sql"] = "h.ambiente_id = a.id";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ambiente_id",
	"m_strTable" => "h"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= a.id";
$proto43["m_havingmode"] = "0";
$proto43["m_inBrackets"] = "0";
$proto43["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "tipo_ambiente";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "idtipo_ambiente";
$proto46["m_columns"][] = "nombre";
$proto46["m_columns"][] = "Precio";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_alias"] = "ta";
$proto47=array();
$proto47["m_sql"] = "a.idtipo_ambiente = ta.idtipo_ambiente";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idtipo_ambiente",
	"m_strTable" => "a"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= ta.idtipo_ambiente";
$proto47["m_havingmode"] = "0";
$proto47["m_inBrackets"] = "0";
$proto47["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cobro_hospitalizacion = createSqlQuery_cobro_hospitalizacion();
											$tdatacobro_hospitalizacion[".sqlquery"] = $queryData_cobro_hospitalizacion;

include_once(getabspath("include/cobro_hospitalizacion_events.php"));
$tableEvents["cobro_hospitalizacion"] = new eventclass_cobro_hospitalizacion;
$tdatacobro_hospitalizacion[".hasEvents"] = true;

$cipherer = new RunnerCipherer("cobro_hospitalizacion");

?>