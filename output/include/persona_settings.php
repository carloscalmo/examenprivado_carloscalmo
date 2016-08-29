<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapersona = array();
	$tdatapersona[".NumberOfChars"] = 80; 
	$tdatapersona[".ShortName"] = "persona";
	$tdatapersona[".OwnerID"] = "";
	$tdatapersona[".OriginalTable"] = "persona";

//	field labels
$fieldLabelspersona = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersona["Spanish"] = array();
	$fieldToolTipspersona["Spanish"] = array();
	$fieldLabelspersona["Spanish"]["id"] = "Id";
	$fieldToolTipspersona["Spanish"]["id"] = "";
	$fieldLabelspersona["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipspersona["Spanish"]["nombre"] = "";
	$fieldLabelspersona["Spanish"]["apellido"] = "Apellido";
	$fieldToolTipspersona["Spanish"]["apellido"] = "";
	$fieldLabelspersona["Spanish"]["fecha_nacimiento"] = "Fecha Nacimiento";
	$fieldToolTipspersona["Spanish"]["fecha_nacimiento"] = "";
	$fieldLabelspersona["Spanish"]["cui"] = "DPI";
	$fieldToolTipspersona["Spanish"]["cui"] = "";
	$fieldLabelspersona["Spanish"]["direccion"] = "Dirección";
	$fieldToolTipspersona["Spanish"]["direccion"] = "";
	$fieldLabelspersona["Spanish"]["telefono"] = "Teléfono";
	$fieldToolTipspersona["Spanish"]["telefono"] = "";
	$fieldLabelspersona["Spanish"]["nit"] = "NIT";
	$fieldToolTipspersona["Spanish"]["nit"] = "";
	$fieldLabelspersona["Spanish"]["genero_id"] = "Genero";
	$fieldToolTipspersona["Spanish"]["genero_id"] = "";
	$fieldLabelspersona["Spanish"]["municipio_id"] = "Municipio";
	$fieldToolTipspersona["Spanish"]["municipio_id"] = "";
	$fieldLabelspersona["Spanish"]["medico_encargado"] = "Medico Encargado";
	$fieldToolTipspersona["Spanish"]["medico_encargado"] = "";
	$fieldLabelspersona["Spanish"]["cliente_id"] = "Cliente Id";
	$fieldToolTipspersona["Spanish"]["cliente_id"] = "";
	$fieldLabelspersona["Spanish"]["consulta_id"] = "Consulta Id";
	$fieldToolTipspersona["Spanish"]["consulta_id"] = "";
	$fieldLabelspersona["Spanish"]["paciente"] = "Paciente";
	$fieldToolTipspersona["Spanish"]["paciente"] = "";
	$fieldLabelspersona["Spanish"]["persona_id"] = "Persona Id";
	$fieldToolTipspersona["Spanish"]["persona_id"] = "";
	$fieldLabelspersona["Spanish"]["responsable"] = "Responsable";
	$fieldToolTipspersona["Spanish"]["responsable"] = "";
	if (count($fieldToolTipspersona["Spanish"]))
		$tdatapersona[".isUseToolTips"] = true;
}
	
	
	$tdatapersona[".NCSearch"] = true;



$tdatapersona[".shortTableName"] = "persona";
$tdatapersona[".nSecOptions"] = 0;
$tdatapersona[".recsPerRowList"] = 1;
$tdatapersona[".mainTableOwnerID"] = "";
$tdatapersona[".moveNext"] = 1;
$tdatapersona[".nType"] = 0;

$tdatapersona[".strOriginalTableName"] = "persona";




$tdatapersona[".showAddInPopup"] = true;

$tdatapersona[".showEditInPopup"] = true;

$tdatapersona[".showViewInPopup"] = true;

$tdatapersona[".fieldsForRegister"] = array();

$tdatapersona[".listAjax"] = false;

	$tdatapersona[".audit"] = true;

	$tdatapersona[".locking"] = false;

$tdatapersona[".listIcons"] = true;
$tdatapersona[".edit"] = true;
$tdatapersona[".inlineAdd"] = true;
$tdatapersona[".view"] = true;


$tdatapersona[".printFriendly"] = true;

$tdatapersona[".delete"] = true;

$tdatapersona[".showSimpleSearchOptions"] = false;

$tdatapersona[".showSearchPanel"] = true;

if (isMobile())
	$tdatapersona[".isUseAjaxSuggest"] = false;
else 
	$tdatapersona[".isUseAjaxSuggest"] = true;

$tdatapersona[".rowHighlite"] = true;

// button handlers file names

$tdatapersona[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersona[".isUseTimeForSearch"] = false;



$tdatapersona[".useDetailsPreview"] = true;

$tdatapersona[".allSearchFields"] = array();

$tdatapersona[".allSearchFields"][] = "id";
$tdatapersona[".allSearchFields"][] = "nombre";
$tdatapersona[".allSearchFields"][] = "apellido";
$tdatapersona[".allSearchFields"][] = "cui";
$tdatapersona[".allSearchFields"][] = "direccion";
$tdatapersona[".allSearchFields"][] = "municipio_id";
$tdatapersona[".allSearchFields"][] = "telefono";
$tdatapersona[".allSearchFields"][] = "nit";
$tdatapersona[".allSearchFields"][] = "fecha_nacimiento";
$tdatapersona[".allSearchFields"][] = "genero_id";

$tdatapersona[".googleLikeFields"][] = "id";
$tdatapersona[".googleLikeFields"][] = "nombre";
$tdatapersona[".googleLikeFields"][] = "apellido";
$tdatapersona[".googleLikeFields"][] = "fecha_nacimiento";
$tdatapersona[".googleLikeFields"][] = "cui";
$tdatapersona[".googleLikeFields"][] = "direccion";
$tdatapersona[".googleLikeFields"][] = "telefono";
$tdatapersona[".googleLikeFields"][] = "nit";
$tdatapersona[".googleLikeFields"][] = "genero_id";
$tdatapersona[".googleLikeFields"][] = "municipio_id";


$tdatapersona[".advSearchFields"][] = "nombre";
$tdatapersona[".advSearchFields"][] = "apellido";
$tdatapersona[".advSearchFields"][] = "cui";
$tdatapersona[".advSearchFields"][] = "direccion";
$tdatapersona[".advSearchFields"][] = "municipio_id";
$tdatapersona[".advSearchFields"][] = "telefono";
$tdatapersona[".advSearchFields"][] = "nit";
$tdatapersona[".advSearchFields"][] = "fecha_nacimiento";
$tdatapersona[".advSearchFields"][] = "genero_id";

$tdatapersona[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
			


$tdatapersona[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapersona[".strOrderBy"] = $tstrOrderBy;

$tdatapersona[".orderindexes"] = array();

$tdatapersona[".sqlHead"] = "SELECT id,   nombre,   apellido,   fecha_nacimiento,   cui,   direccion,   telefono,   nit,   genero_id,   municipio_id";
$tdatapersona[".sqlFrom"] = "FROM persona";
$tdatapersona[".sqlWhereExpr"] = "";
$tdatapersona[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersona[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersona[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspersona = array();
$tableKeyspersona[] = "id";
$tableKeyspersona[] = "cui";
$tdatapersona[".Keys"] = $tableKeyspersona;

$tdatapersona[".listFields"] = array();
$tdatapersona[".listFields"][] = "nombre";
$tdatapersona[".listFields"][] = "apellido";
$tdatapersona[".listFields"][] = "cui";
$tdatapersona[".listFields"][] = "direccion";
$tdatapersona[".listFields"][] = "municipio_id";
$tdatapersona[".listFields"][] = "telefono";
$tdatapersona[".listFields"][] = "nit";
$tdatapersona[".listFields"][] = "fecha_nacimiento";
$tdatapersona[".listFields"][] = "genero_id";

$tdatapersona[".viewFields"] = array();
$tdatapersona[".viewFields"][] = "nombre";
$tdatapersona[".viewFields"][] = "apellido";
$tdatapersona[".viewFields"][] = "cui";
$tdatapersona[".viewFields"][] = "direccion";
$tdatapersona[".viewFields"][] = "municipio_id";
$tdatapersona[".viewFields"][] = "telefono";
$tdatapersona[".viewFields"][] = "nit";
$tdatapersona[".viewFields"][] = "fecha_nacimiento";
$tdatapersona[".viewFields"][] = "genero_id";

$tdatapersona[".addFields"] = array();
$tdatapersona[".addFields"][] = "nombre";
$tdatapersona[".addFields"][] = "apellido";
$tdatapersona[".addFields"][] = "cui";
$tdatapersona[".addFields"][] = "direccion";
$tdatapersona[".addFields"][] = "municipio_id";
$tdatapersona[".addFields"][] = "telefono";
$tdatapersona[".addFields"][] = "nit";
$tdatapersona[".addFields"][] = "fecha_nacimiento";
$tdatapersona[".addFields"][] = "genero_id";

$tdatapersona[".inlineAddFields"] = array();

$tdatapersona[".editFields"] = array();
$tdatapersona[".editFields"][] = "nombre";
$tdatapersona[".editFields"][] = "apellido";
$tdatapersona[".editFields"][] = "cui";
$tdatapersona[".editFields"][] = "direccion";
$tdatapersona[".editFields"][] = "municipio_id";
$tdatapersona[".editFields"][] = "telefono";
$tdatapersona[".editFields"][] = "nit";
$tdatapersona[".editFields"][] = "fecha_nacimiento";
$tdatapersona[".editFields"][] = "genero_id";

$tdatapersona[".inlineEditFields"] = array();

$tdatapersona[".exportFields"] = array();

$tdatapersona[".printFields"] = array();
$tdatapersona[".printFields"][] = "nombre";
$tdatapersona[".printFields"][] = "apellido";
$tdatapersona[".printFields"][] = "cui";
$tdatapersona[".printFields"][] = "direccion";
$tdatapersona[".printFields"][] = "municipio_id";
$tdatapersona[".printFields"][] = "telefono";
$tdatapersona[".printFields"][] = "nit";
$tdatapersona[".printFields"][] = "fecha_nacimiento";
$tdatapersona[".printFields"][] = "genero_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatapersona["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Nombre"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "nombre";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapersona["nombre"] = $fdata;
//	apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellido";
	$fdata["GoodName"] = "apellido";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Apellido"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "apellido"; 
		$fdata["FullName"] = "apellido";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapersona["apellido"] = $fdata;
//	fecha_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_nacimiento";
	$fdata["GoodName"] = "fecha_nacimiento";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Fecha Nacimiento"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "fecha_nacimiento"; 
		$fdata["FullName"] = "fecha_nacimiento";
	
		
		
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
	
		
		
	$tdatapersona["fecha_nacimiento"] = $fdata;
//	cui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cui";
	$fdata["GoodName"] = "cui";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "DPI"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "cui"; 
		$fdata["FullName"] = "cui";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapersona["cui"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Dirección"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "direccion"; 
		$fdata["FullName"] = "direccion";
	
		
		
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
	
		
		
	$tdatapersona["direccion"] = $fdata;
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Teléfono"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "telefono"; 
		$fdata["FullName"] = "telefono";
	
		
		
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
			$edata["EditParams"].= " maxlength=8";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapersona["telefono"] = $fdata;
//	nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nit";
	$fdata["GoodName"] = "nit";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "NIT"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "nit"; 
		$fdata["FullName"] = "nit";
	
		
		
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
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapersona["nit"] = $fdata;
//	genero_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "genero_id";
	$fdata["GoodName"] = "genero_id";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Genero"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "genero_id"; 
		$fdata["FullName"] = "genero_id";
	
		
		
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
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";
	
		
	$edata["LookupTable"] = "genero";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapersona["genero_id"] = $fdata;
//	municipio_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "municipio_id";
	$fdata["GoodName"] = "municipio_id";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Municipio"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "municipio_id"; 
		$fdata["FullName"] = "municipio_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
					
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
				if(strpos(GetUserPermissions("persona"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id1";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = " concat(municipio.nombre,' ',departamento.nombre) ";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "Copy of departamento";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapersona["municipio_id"] = $fdata;

	
$tables_data["persona"]=&$tdatapersona;
$field_labels["persona"] = &$fieldLabelspersona;
$fieldToolTips["persona"] = &$fieldToolTipspersona;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["persona"] = array();
$dIndex = 1-1;
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
		
	$detailsTablesData["persona"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["persona"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["persona"][$dIndex]["detailKeys"][]="paciente";

$dIndex = 2-1;
			$strOriginalDetailsTable="empleado";
	$detailsParam["dDataSourceTable"]="empleado";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="empleado";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["persona"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["persona"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["persona"][$dIndex]["detailKeys"][]="persona_id";

$dIndex = 3-1;
			$strOriginalDetailsTable="factura_consulta";
	$detailsParam["dDataSourceTable"]="factura_consulta";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="factura_consulta";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["persona"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["persona"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["persona"][$dIndex]["detailKeys"][]="cliente_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["persona"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="municipio";
	$masterParams["mDataSourceTable"]="municipio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "municipio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["persona"][$mIndex] = $masterParams;	
		$masterTablesData["persona"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["persona"][$mIndex]["detailKeys"][]="municipio_id";

$mIndex = 2-1;
			$strOriginalDetailsTable="genero";
	$masterParams["mDataSourceTable"]="genero";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "genero";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["persona"][$mIndex] = $masterParams;	
		$masterTablesData["persona"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["persona"][$mIndex]["detailKeys"][]="genero_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_persona()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nombre,   apellido,   fecha_nacimiento,   cui,   direccion,   telefono,   nit,   genero_id,   municipio_id";
$proto0["m_strFrom"] = "FROM persona";
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
	"m_strTable" => "persona"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "persona"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido",
	"m_strTable" => "persona"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nacimiento",
	"m_strTable" => "persona"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cui",
	"m_strTable" => "persona"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "persona"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "persona"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "nit",
	"m_strTable" => "persona"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "genero_id",
	"m_strTable" => "persona"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio_id",
	"m_strTable" => "persona"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "persona";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "nombre";
$proto26["m_columns"][] = "apellido";
$proto26["m_columns"][] = "fecha_nacimiento";
$proto26["m_columns"][] = "cui";
$proto26["m_columns"][] = "direccion";
$proto26["m_columns"][] = "telefono";
$proto26["m_columns"][] = "nit";
$proto26["m_columns"][] = "genero_id";
$proto26["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_persona = createSqlQuery_persona();
										$tdatapersona[".sqlquery"] = $queryData_persona;

$tableEvents["persona"] = new eventsBase;
$tdatapersona[".hasEvents"] = false;

$cipherer = new RunnerCipherer("persona");

?>