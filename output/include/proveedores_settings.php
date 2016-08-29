<?php
require_once(getabspath("classes/cipherer.php"));
$tdataproveedores = array();
	$tdataproveedores[".NumberOfChars"] = 80; 
	$tdataproveedores[".ShortName"] = "proveedores";
	$tdataproveedores[".OwnerID"] = "";
	$tdataproveedores[".OriginalTable"] = "proveedores";

//	field labels
$fieldLabelsproveedores = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproveedores["Spanish"] = array();
	$fieldToolTipsproveedores["Spanish"] = array();
	$fieldLabelsproveedores["Spanish"]["id"] = "Id";
	$fieldToolTipsproveedores["Spanish"]["id"] = "";
	$fieldLabelsproveedores["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsproveedores["Spanish"]["nombre"] = "";
	$fieldLabelsproveedores["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsproveedores["Spanish"]["descripcion"] = "";
	$fieldLabelsproveedores["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsproveedores["Spanish"]["direccion"] = "";
	$fieldLabelsproveedores["Spanish"]["saldo"] = "Saldo";
	$fieldToolTipsproveedores["Spanish"]["saldo"] = "";
	$fieldLabelsproveedores["Spanish"]["nit"] = "NIT";
	$fieldToolTipsproveedores["Spanish"]["nit"] = "";
	$fieldLabelsproveedores["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipsproveedores["Spanish"]["telefono"] = "";
	$fieldLabelsproveedores["Spanish"]["municipio_id"] = "Municipio";
	$fieldToolTipsproveedores["Spanish"]["municipio_id"] = "";
	$fieldLabelsproveedores["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipsproveedores["Spanish"]["proveedor"] = "";
	if (count($fieldToolTipsproveedores["Spanish"]))
		$tdataproveedores[".isUseToolTips"] = true;
}
	
	
	$tdataproveedores[".NCSearch"] = true;



$tdataproveedores[".shortTableName"] = "proveedores";
$tdataproveedores[".nSecOptions"] = 0;
$tdataproveedores[".recsPerRowList"] = 1;
$tdataproveedores[".mainTableOwnerID"] = "";
$tdataproveedores[".moveNext"] = 1;
$tdataproveedores[".nType"] = 0;

$tdataproveedores[".strOriginalTableName"] = "proveedores";




$tdataproveedores[".showAddInPopup"] = true;

$tdataproveedores[".showEditInPopup"] = true;

$tdataproveedores[".showViewInPopup"] = true;

$tdataproveedores[".fieldsForRegister"] = array();

$tdataproveedores[".listAjax"] = false;

	$tdataproveedores[".audit"] = true;

	$tdataproveedores[".locking"] = false;

$tdataproveedores[".listIcons"] = true;
$tdataproveedores[".edit"] = true;
$tdataproveedores[".view"] = true;


$tdataproveedores[".printFriendly"] = true;

$tdataproveedores[".delete"] = true;

$tdataproveedores[".showSimpleSearchOptions"] = false;

$tdataproveedores[".showSearchPanel"] = true;

if (isMobile())
	$tdataproveedores[".isUseAjaxSuggest"] = false;
else 
	$tdataproveedores[".isUseAjaxSuggest"] = true;

$tdataproveedores[".rowHighlite"] = true;

// button handlers file names

$tdataproveedores[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproveedores[".isUseTimeForSearch"] = false;



$tdataproveedores[".useDetailsPreview"] = true;

$tdataproveedores[".allSearchFields"] = array();

$tdataproveedores[".allSearchFields"][] = "id";
$tdataproveedores[".allSearchFields"][] = "nit";
$tdataproveedores[".allSearchFields"][] = "nombre";
$tdataproveedores[".allSearchFields"][] = "direccion";
$tdataproveedores[".allSearchFields"][] = "municipio_id";
$tdataproveedores[".allSearchFields"][] = "telefono";
$tdataproveedores[".allSearchFields"][] = "descripcion";
$tdataproveedores[".allSearchFields"][] = "saldo";

$tdataproveedores[".googleLikeFields"][] = "id";
$tdataproveedores[".googleLikeFields"][] = "nombre";
$tdataproveedores[".googleLikeFields"][] = "descripcion";
$tdataproveedores[".googleLikeFields"][] = "direccion";
$tdataproveedores[".googleLikeFields"][] = "saldo";
$tdataproveedores[".googleLikeFields"][] = "nit";
$tdataproveedores[".googleLikeFields"][] = "telefono";
$tdataproveedores[".googleLikeFields"][] = "municipio_id";


$tdataproveedores[".advSearchFields"][] = "nit";
$tdataproveedores[".advSearchFields"][] = "nombre";
$tdataproveedores[".advSearchFields"][] = "direccion";
$tdataproveedores[".advSearchFields"][] = "municipio_id";
$tdataproveedores[".advSearchFields"][] = "telefono";
$tdataproveedores[".advSearchFields"][] = "descripcion";
$tdataproveedores[".advSearchFields"][] = "saldo";

$tdataproveedores[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
		


$tdataproveedores[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproveedores[".strOrderBy"] = $tstrOrderBy;

$tdataproveedores[".orderindexes"] = array();

$tdataproveedores[".sqlHead"] = "SELECT id,   nombre,   descripcion,   direccion,   saldo,   nit,   telefono,   municipio_id";
$tdataproveedores[".sqlFrom"] = "FROM proveedores";
$tdataproveedores[".sqlWhereExpr"] = "";
$tdataproveedores[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproveedores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproveedores[".arrGroupsPerPage"] = $arrGPP;

$tableKeysproveedores = array();
$tableKeysproveedores[] = "id";
$tableKeysproveedores[] = "nombre";
$tableKeysproveedores[] = "nit";
$tdataproveedores[".Keys"] = $tableKeysproveedores;

$tdataproveedores[".listFields"] = array();
$tdataproveedores[".listFields"][] = "nit";
$tdataproveedores[".listFields"][] = "nombre";
$tdataproveedores[".listFields"][] = "direccion";
$tdataproveedores[".listFields"][] = "municipio_id";
$tdataproveedores[".listFields"][] = "telefono";
$tdataproveedores[".listFields"][] = "descripcion";
$tdataproveedores[".listFields"][] = "saldo";

$tdataproveedores[".viewFields"] = array();
$tdataproveedores[".viewFields"][] = "nit";
$tdataproveedores[".viewFields"][] = "nombre";
$tdataproveedores[".viewFields"][] = "direccion";
$tdataproveedores[".viewFields"][] = "municipio_id";
$tdataproveedores[".viewFields"][] = "telefono";
$tdataproveedores[".viewFields"][] = "descripcion";
$tdataproveedores[".viewFields"][] = "saldo";

$tdataproveedores[".addFields"] = array();
$tdataproveedores[".addFields"][] = "nit";
$tdataproveedores[".addFields"][] = "nombre";
$tdataproveedores[".addFields"][] = "direccion";
$tdataproveedores[".addFields"][] = "municipio_id";
$tdataproveedores[".addFields"][] = "telefono";
$tdataproveedores[".addFields"][] = "descripcion";
$tdataproveedores[".addFields"][] = "saldo";

$tdataproveedores[".inlineAddFields"] = array();

$tdataproveedores[".editFields"] = array();
$tdataproveedores[".editFields"][] = "nit";
$tdataproveedores[".editFields"][] = "nombre";
$tdataproveedores[".editFields"][] = "direccion";
$tdataproveedores[".editFields"][] = "municipio_id";
$tdataproveedores[".editFields"][] = "telefono";
$tdataproveedores[".editFields"][] = "descripcion";
$tdataproveedores[".editFields"][] = "saldo";

$tdataproveedores[".inlineEditFields"] = array();

$tdataproveedores[".exportFields"] = array();

$tdataproveedores[".printFields"] = array();
$tdataproveedores[".printFields"][] = "nit";
$tdataproveedores[".printFields"][] = "nombre";
$tdataproveedores[".printFields"][] = "direccion";
$tdataproveedores[".printFields"][] = "municipio_id";
$tdataproveedores[".printFields"][] = "telefono";
$tdataproveedores[".printFields"][] = "descripcion";
$tdataproveedores[".printFields"][] = "saldo";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "proveedores";
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
	
		
		
	$tdataproveedores["id"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "proveedores";
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
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproveedores["nombre"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = "Descripcion"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "descripcion"; 
		$fdata["FullName"] = "descripcion";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproveedores["descripcion"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = "Direccion"; 
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
	
		
		
	$tdataproveedores["direccion"] = $fdata;
//	saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "saldo";
	$fdata["GoodName"] = "saldo";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = "Saldo"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "saldo"; 
		$fdata["FullName"] = "saldo";
	
		
		
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
	
		
		
	$tdataproveedores["saldo"] = $fdata;
//	nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nit";
	$fdata["GoodName"] = "nit";
	$fdata["ownerTable"] = "proveedores";
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
			$edata["EditParams"].= " maxlength=12";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproveedores["nit"] = $fdata;
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "proveedores";
	$fdata["Label"] = "Telefono"; 
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
			$edata["EditParams"].= " maxlength=45";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproveedores["telefono"] = $fdata;
//	municipio_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "municipio_id";
	$fdata["GoodName"] = "municipio_id";
	$fdata["ownerTable"] = "proveedores";
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
				if(strpos(GetUserPermissions("proveedores"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id1";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(municipio.nombre,' ',departamento.nombre)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "Copy of departamento";
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
	
		
		
	$tdataproveedores["municipio_id"] = $fdata;

	
$tables_data["proveedores"]=&$tdataproveedores;
$field_labels["proveedores"] = &$fieldLabelsproveedores;
$fieldToolTips["proveedores"] = &$fieldToolTipsproveedores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["proveedores"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="factura_compra";
	$detailsParam["dDataSourceTable"]="factura_compra";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="factura_compra";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["proveedores"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["proveedores"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["proveedores"][$dIndex]["detailKeys"][]="proveedor";

$dIndex = 2-1;
			$strOriginalDetailsTable="lotes";
	$detailsParam["dDataSourceTable"]="lotes";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="lotes";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["proveedores"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["proveedores"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["proveedores"][$dIndex]["detailKeys"][]="proveedor";

	
// tables which are master tables for current table (detail)
$masterTablesData["proveedores"] = array();

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
	$masterTablesData["proveedores"][$mIndex] = $masterParams;	
		$masterTablesData["proveedores"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["proveedores"][$mIndex]["detailKeys"][]="municipio_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_proveedores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nombre,   descripcion,   direccion,   saldo,   nit,   telefono,   municipio_id";
$proto0["m_strFrom"] = "FROM proveedores";
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
	"m_strTable" => "proveedores"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "proveedores"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "proveedores"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "proveedores"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "saldo",
	"m_strTable" => "proveedores"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nit",
	"m_strTable" => "proveedores"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "proveedores"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio_id",
	"m_strTable" => "proveedores"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "proveedores";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "nombre";
$proto22["m_columns"][] = "descripcion";
$proto22["m_columns"][] = "direccion";
$proto22["m_columns"][] = "saldo";
$proto22["m_columns"][] = "nit";
$proto22["m_columns"][] = "telefono";
$proto22["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_proveedores = createSqlQuery_proveedores();
								$tdataproveedores[".sqlquery"] = $queryData_proveedores;

$tableEvents["proveedores"] = new eventsBase;
$tdataproveedores[".hasEvents"] = false;

$cipherer = new RunnerCipherer("proveedores");

?>