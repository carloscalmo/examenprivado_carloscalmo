<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadetalle_compra = array();
	$tdatadetalle_compra[".NumberOfChars"] = 80; 
	$tdatadetalle_compra[".ShortName"] = "detalle_compra";
	$tdatadetalle_compra[".OwnerID"] = "";
	$tdatadetalle_compra[".OriginalTable"] = "detalle_compra";

//	field labels
$fieldLabelsdetalle_compra = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalle_compra["Spanish"] = array();
	$fieldToolTipsdetalle_compra["Spanish"] = array();
	$fieldLabelsdetalle_compra["Spanish"]["id"] = "Código";
	$fieldToolTipsdetalle_compra["Spanish"]["id"] = "";
	$fieldLabelsdetalle_compra["Spanish"]["producto"] = "Producto";
	$fieldToolTipsdetalle_compra["Spanish"]["producto"] = "";
	$fieldLabelsdetalle_compra["Spanish"]["lote"] = "Lote";
	$fieldToolTipsdetalle_compra["Spanish"]["lote"] = "";
	$fieldLabelsdetalle_compra["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsdetalle_compra["Spanish"]["cantidad"] = "";
	$fieldLabelsdetalle_compra["Spanish"]["factura_compra"] = "Factura de Compra";
	$fieldToolTipsdetalle_compra["Spanish"]["factura_compra"] = "";
	$fieldLabelsdetalle_compra["Spanish"]["costo"] = "Costo";
	$fieldToolTipsdetalle_compra["Spanish"]["costo"] = "";
	if (count($fieldToolTipsdetalle_compra["Spanish"]))
		$tdatadetalle_compra[".isUseToolTips"] = true;
}
	
	
	$tdatadetalle_compra[".NCSearch"] = true;



$tdatadetalle_compra[".shortTableName"] = "detalle_compra";
$tdatadetalle_compra[".nSecOptions"] = 0;
$tdatadetalle_compra[".recsPerRowList"] = 1;
$tdatadetalle_compra[".mainTableOwnerID"] = "";
$tdatadetalle_compra[".moveNext"] = 1;
$tdatadetalle_compra[".nType"] = 0;

$tdatadetalle_compra[".strOriginalTableName"] = "detalle_compra";




$tdatadetalle_compra[".showAddInPopup"] = true;

$tdatadetalle_compra[".showEditInPopup"] = true;

$tdatadetalle_compra[".showViewInPopup"] = true;

$tdatadetalle_compra[".fieldsForRegister"] = array();

$tdatadetalle_compra[".listAjax"] = false;

	$tdatadetalle_compra[".audit"] = true;

	$tdatadetalle_compra[".locking"] = false;

$tdatadetalle_compra[".listIcons"] = true;
$tdatadetalle_compra[".edit"] = true;
$tdatadetalle_compra[".view"] = true;


$tdatadetalle_compra[".printFriendly"] = true;

$tdatadetalle_compra[".delete"] = true;

$tdatadetalle_compra[".showSimpleSearchOptions"] = false;

$tdatadetalle_compra[".showSearchPanel"] = true;

if (isMobile())
	$tdatadetalle_compra[".isUseAjaxSuggest"] = false;
else 
	$tdatadetalle_compra[".isUseAjaxSuggest"] = true;

$tdatadetalle_compra[".rowHighlite"] = true;

// button handlers file names

$tdatadetalle_compra[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalle_compra[".isUseTimeForSearch"] = false;




$tdatadetalle_compra[".allSearchFields"] = array();

$tdatadetalle_compra[".allSearchFields"][] = "id";
$tdatadetalle_compra[".allSearchFields"][] = "producto";
$tdatadetalle_compra[".allSearchFields"][] = "lote";
$tdatadetalle_compra[".allSearchFields"][] = "cantidad";
$tdatadetalle_compra[".allSearchFields"][] = "factura_compra";
$tdatadetalle_compra[".allSearchFields"][] = "costo";

$tdatadetalle_compra[".googleLikeFields"][] = "id";
$tdatadetalle_compra[".googleLikeFields"][] = "producto";
$tdatadetalle_compra[".googleLikeFields"][] = "lote";
$tdatadetalle_compra[".googleLikeFields"][] = "cantidad";
$tdatadetalle_compra[".googleLikeFields"][] = "factura_compra";
$tdatadetalle_compra[".googleLikeFields"][] = "costo";


$tdatadetalle_compra[".advSearchFields"][] = "id";
$tdatadetalle_compra[".advSearchFields"][] = "producto";
$tdatadetalle_compra[".advSearchFields"][] = "lote";
$tdatadetalle_compra[".advSearchFields"][] = "cantidad";
$tdatadetalle_compra[".advSearchFields"][] = "factura_compra";
$tdatadetalle_compra[".advSearchFields"][] = "costo";

$tdatadetalle_compra[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatadetalle_compra[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadetalle_compra[".strOrderBy"] = $tstrOrderBy;

$tdatadetalle_compra[".orderindexes"] = array();

$tdatadetalle_compra[".sqlHead"] = "SELECT id,   producto,   lote,   cantidad,   factura_compra,   costo";
$tdatadetalle_compra[".sqlFrom"] = "FROM detalle_compra";
$tdatadetalle_compra[".sqlWhereExpr"] = "";
$tdatadetalle_compra[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalle_compra[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalle_compra[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdetalle_compra = array();
$tableKeysdetalle_compra[] = "id";
$tableKeysdetalle_compra[] = "factura_compra";
$tdatadetalle_compra[".Keys"] = $tableKeysdetalle_compra;

$tdatadetalle_compra[".listFields"] = array();
$tdatadetalle_compra[".listFields"][] = "id";
$tdatadetalle_compra[".listFields"][] = "producto";
$tdatadetalle_compra[".listFields"][] = "lote";
$tdatadetalle_compra[".listFields"][] = "cantidad";
$tdatadetalle_compra[".listFields"][] = "factura_compra";
$tdatadetalle_compra[".listFields"][] = "costo";

$tdatadetalle_compra[".viewFields"] = array();
$tdatadetalle_compra[".viewFields"][] = "id";
$tdatadetalle_compra[".viewFields"][] = "producto";
$tdatadetalle_compra[".viewFields"][] = "lote";
$tdatadetalle_compra[".viewFields"][] = "cantidad";
$tdatadetalle_compra[".viewFields"][] = "factura_compra";
$tdatadetalle_compra[".viewFields"][] = "costo";

$tdatadetalle_compra[".addFields"] = array();
$tdatadetalle_compra[".addFields"][] = "producto";
$tdatadetalle_compra[".addFields"][] = "lote";
$tdatadetalle_compra[".addFields"][] = "cantidad";
$tdatadetalle_compra[".addFields"][] = "factura_compra";
$tdatadetalle_compra[".addFields"][] = "costo";

$tdatadetalle_compra[".inlineAddFields"] = array();

$tdatadetalle_compra[".editFields"] = array();
$tdatadetalle_compra[".editFields"][] = "producto";
$tdatadetalle_compra[".editFields"][] = "lote";
$tdatadetalle_compra[".editFields"][] = "cantidad";
$tdatadetalle_compra[".editFields"][] = "factura_compra";
$tdatadetalle_compra[".editFields"][] = "costo";

$tdatadetalle_compra[".inlineEditFields"] = array();

$tdatadetalle_compra[".exportFields"] = array();

$tdatadetalle_compra[".printFields"] = array();
$tdatadetalle_compra[".printFields"][] = "id";
$tdatadetalle_compra[".printFields"][] = "producto";
$tdatadetalle_compra[".printFields"][] = "lote";
$tdatadetalle_compra[".printFields"][] = "cantidad";
$tdatadetalle_compra[".printFields"][] = "factura_compra";
$tdatadetalle_compra[".printFields"][] = "costo";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "detalle_compra";
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
	
		
		
	$tdatadetalle_compra["id"] = $fdata;
//	producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "producto";
	$fdata["GoodName"] = "producto";
	$fdata["ownerTable"] = "detalle_compra";
	$fdata["Label"] = "Producto"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "producto"; 
		$fdata["FullName"] = "producto";
	
		
		
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
				if(strpos(GetUserPermissions("detalle_compra"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(codigo,' ',nombre)";
	
		$edata["CustomDisplay"] = "true";
	
	$edata["LookupTable"] = "insumos";
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
	
		
		
	$tdatadetalle_compra["producto"] = $fdata;
//	lote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lote";
	$fdata["GoodName"] = "lote";
	$fdata["ownerTable"] = "detalle_compra";
	$fdata["Label"] = "Lote"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "lote"; 
		$fdata["FullName"] = "lote";
	
		
		
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
				if(strpos(GetUserPermissions("detalle_compra"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "codigo";
	
		
	$edata["LookupTable"] = "lotes";
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
	
		
		
	$tdatadetalle_compra["lote"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "detalle_compra";
	$fdata["Label"] = "Cantidad"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "cantidad"; 
		$fdata["FullName"] = "cantidad";
	
		
		
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
	
		
		
	$tdatadetalle_compra["cantidad"] = $fdata;
//	factura_compra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "factura_compra";
	$fdata["GoodName"] = "factura_compra";
	$fdata["ownerTable"] = "detalle_compra";
	$fdata["Label"] = "Factura de Compra"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "factura_compra"; 
		$fdata["FullName"] = "factura_compra";
	
		
		
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
				if(strpos(GetUserPermissions("detalle_compra"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "numero_factura";
	
		
	$edata["LookupTable"] = "factura_compra";
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
	
		
		
	$tdatadetalle_compra["factura_compra"] = $fdata;
//	costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "costo";
	$fdata["GoodName"] = "costo";
	$fdata["ownerTable"] = "detalle_compra";
	$fdata["Label"] = "Costo"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "costo"; 
		$fdata["FullName"] = "costo";
	
		
		
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
	
		
		
	$tdatadetalle_compra["costo"] = $fdata;

	
$tables_data["detalle_compra"]=&$tdatadetalle_compra;
$field_labels["detalle_compra"] = &$fieldLabelsdetalle_compra;
$fieldToolTips["detalle_compra"] = &$fieldToolTipsdetalle_compra;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["detalle_compra"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["detalle_compra"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="insumos";
	$masterParams["mDataSourceTable"]="insumos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "insumos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["detalle_compra"][$mIndex] = $masterParams;	
		$masterTablesData["detalle_compra"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["detalle_compra"][$mIndex]["detailKeys"][]="producto";

$mIndex = 2-1;
			$strOriginalDetailsTable="factura_compra";
	$masterParams["mDataSourceTable"]="factura_compra";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "factura_compra";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["detalle_compra"][$mIndex] = $masterParams;	
		$masterTablesData["detalle_compra"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["detalle_compra"][$mIndex]["detailKeys"][]="factura_compra";

$mIndex = 3-1;
			$strOriginalDetailsTable="lotes";
	$masterParams["mDataSourceTable"]="lotes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lotes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["detalle_compra"][$mIndex] = $masterParams;	
		$masterTablesData["detalle_compra"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["detalle_compra"][$mIndex]["detailKeys"][]="lote";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_detalle_compra()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   producto,   lote,   cantidad,   factura_compra,   costo";
$proto0["m_strFrom"] = "FROM detalle_compra";
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
	"m_strTable" => "detalle_compra"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "producto",
	"m_strTable" => "detalle_compra"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "lote",
	"m_strTable" => "detalle_compra"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "detalle_compra"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "factura_compra",
	"m_strTable" => "detalle_compra"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "costo",
	"m_strTable" => "detalle_compra"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "detalle_compra";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "producto";
$proto18["m_columns"][] = "lote";
$proto18["m_columns"][] = "cantidad";
$proto18["m_columns"][] = "factura_compra";
$proto18["m_columns"][] = "costo";
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
$queryData_detalle_compra = createSqlQuery_detalle_compra();
						$tdatadetalle_compra[".sqlquery"] = $queryData_detalle_compra;

$tableEvents["detalle_compra"] = new eventsBase;
$tdatadetalle_compra[".hasEvents"] = false;

$cipherer = new RunnerCipherer("detalle_compra");

?>