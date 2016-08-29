<?php
require_once(getabspath("classes/cipherer.php"));
$tdataEstado_de_Cuenta_de_Pacientes = array();
	$tdataEstado_de_Cuenta_de_Pacientes[".NumberOfChars"] = 80; 
	$tdataEstado_de_Cuenta_de_Pacientes[".ShortName"] = "Estado_de_Cuenta_de_Pacientes";
	$tdataEstado_de_Cuenta_de_Pacientes[".OwnerID"] = "";
	$tdataEstado_de_Cuenta_de_Pacientes[".OriginalTable"] = "persona";

//	field labels
$fieldLabelsEstado_de_Cuenta_de_Pacientes = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"] = array();
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"] = array();
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["medico_encargado"] = "Medico Encargado";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["medico_encargado"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["cliente_id"] = "Cliente Id";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["cliente_id"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["consulta_id"] = "Consulta Id";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["consulta_id"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["paciente"] = "Paciente";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["paciente"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["persona_id"] = "Persona Id";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["persona_id"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["responsable"] = "Responsable";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["responsable"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["C_digo_Personal"] = "Código Personal";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Código Personal"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["C_digo__nico_de_Identificaci_n"] = "Código Único de Identificación";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Código Único de Identificación"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["Paciente"] = "Paciente";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Paciente"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["NIT"] = "NIT";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["NIT"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["Direcci_n"] = "Dirección";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Dirección"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["Tel_fono"] = "Teléfono";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Teléfono"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["C_digo_de_consulta"] = "Código de consulta";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Código de consulta"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Fecha"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["Tipo_de_consulta"] = "Tipo de consulta";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Tipo de consulta"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["M_dico_Encargado"] = "Médico Encargado";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Médico Encargado"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["N_mero_de_Factura"] = "Número de Factura";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Número de Factura"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["Costo_de_los_Servicios"] = "Costo de los Servicios";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Costo de los Servicios"] = "";
	$fieldLabelsEstado_de_Cuenta_de_Pacientes["Spanish"]["Total_Abonado"] = "Total Abonado";
	$fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]["Total Abonado"] = "";
	if (count($fieldToolTipsEstado_de_Cuenta_de_Pacientes["Spanish"]))
		$tdataEstado_de_Cuenta_de_Pacientes[".isUseToolTips"] = true;
}
	
	
	$tdataEstado_de_Cuenta_de_Pacientes[".NCSearch"] = true;



$tdataEstado_de_Cuenta_de_Pacientes[".shortTableName"] = "Estado_de_Cuenta_de_Pacientes";
$tdataEstado_de_Cuenta_de_Pacientes[".nSecOptions"] = 0;
$tdataEstado_de_Cuenta_de_Pacientes[".recsPerRowList"] = 1;
$tdataEstado_de_Cuenta_de_Pacientes[".mainTableOwnerID"] = "";
$tdataEstado_de_Cuenta_de_Pacientes[".moveNext"] = 1;
$tdataEstado_de_Cuenta_de_Pacientes[".nType"] = 2;

$tdataEstado_de_Cuenta_de_Pacientes[".strOriginalTableName"] = "persona";




$tdataEstado_de_Cuenta_de_Pacientes[".showAddInPopup"] = false;

$tdataEstado_de_Cuenta_de_Pacientes[".showEditInPopup"] = false;

$tdataEstado_de_Cuenta_de_Pacientes[".showViewInPopup"] = false;

$tdataEstado_de_Cuenta_de_Pacientes[".fieldsForRegister"] = array();

$tdataEstado_de_Cuenta_de_Pacientes[".listAjax"] = false;

	$tdataEstado_de_Cuenta_de_Pacientes[".audit"] = false;

	$tdataEstado_de_Cuenta_de_Pacientes[".locking"] = false;

$tdataEstado_de_Cuenta_de_Pacientes[".listIcons"] = true;
$tdataEstado_de_Cuenta_de_Pacientes[".edit"] = true;
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEdit"] = true;
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAdd"] = true;
$tdataEstado_de_Cuenta_de_Pacientes[".view"] = true;

$tdataEstado_de_Cuenta_de_Pacientes[".exportTo"] = true;

$tdataEstado_de_Cuenta_de_Pacientes[".printFriendly"] = true;

$tdataEstado_de_Cuenta_de_Pacientes[".delete"] = true;

$tdataEstado_de_Cuenta_de_Pacientes[".showSimpleSearchOptions"] = false;

$tdataEstado_de_Cuenta_de_Pacientes[".showSearchPanel"] = true;

if (isMobile())
	$tdataEstado_de_Cuenta_de_Pacientes[".isUseAjaxSuggest"] = false;
else 
	$tdataEstado_de_Cuenta_de_Pacientes[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataEstado_de_Cuenta_de_Pacientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEstado_de_Cuenta_de_Pacientes[".isUseTimeForSearch"] = false;




$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"] = array();

$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Código Personal";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Código Único de Identificación";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Paciente";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "NIT";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Dirección";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Teléfono";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Código de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Fecha";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Tipo de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Médico Encargado";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Número de Factura";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Costo de los Servicios";
$tdataEstado_de_Cuenta_de_Pacientes[".allSearchFields"][] = "Total Abonado";

$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Código Personal";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Código Único de Identificación";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Paciente";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "NIT";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Dirección";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Teléfono";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Código de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Fecha";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Tipo de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Médico Encargado";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Número de Factura";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Costo de los Servicios";
$tdataEstado_de_Cuenta_de_Pacientes[".googleLikeFields"][] = "Total Abonado";


$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Código Personal";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Código Único de Identificación";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Paciente";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "NIT";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Dirección";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Teléfono";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Código de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Fecha";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Tipo de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Médico Encargado";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Número de Factura";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Costo de los Servicios";
$tdataEstado_de_Cuenta_de_Pacientes[".advSearchFields"][] = "Total Abonado";

$tdataEstado_de_Cuenta_de_Pacientes[".isTableType"] = "report";

$tdataEstado_de_Cuenta_de_Pacientes[".reportGroupFields"] = true;
	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEstado_de_Cuenta_de_Pacientes[".strOrderBy"] = $tstrOrderBy;

$tdataEstado_de_Cuenta_de_Pacientes[".orderindexes"] = array();

$tdataEstado_de_Cuenta_de_Pacientes[".sqlHead"] = "SELECT p.id AS `Código Personal`,  p.cui AS `Código Único de Identificación`,  CONCAT(p.nombre, ' ', p.apellido) AS `Paciente`,  p.nit AS `NIT`,  CONCAT(p.direccion, ' ', m.nombre, ' ', d.nombre) AS `Dirección`,  p.telefono AS `Teléfono`,  c.id AS `Código de consulta`,  c.fecha AS `Fecha`,  tc.nombre AS `Tipo de consulta`,  CONCAT(pe.nombre, ' ', pe.apellido) AS `Médico Encargado`,  f.numero_factura AS `Número de Factura`,  f.monto AS `Costo de los Servicios`,  SUM(ac.monto) AS `Total Abonado`";
$tdataEstado_de_Cuenta_de_Pacientes[".sqlFrom"] = "FROM persona AS p  INNER JOIN consulta AS c ON p.id = c.paciente  INNER JOIN municipio AS m ON p.municipio_id = m.id  INNER JOIN departamento AS d ON m.departamento = d.id  INNER JOIN factura_consulta AS f ON c.id = f.consulta_id  INNER JOIN abonos_clientes AS ac ON f.id = ac.factura_servicio_id  INNER JOIN consulta AS con ON p.id = con.paciente  INNER JOIN tipo_consulta AS tc ON c.tipo_consulta_id = tc.id  INNER JOIN empleado AS e ON c.medico_encargado = e.id  INNER JOIN persona AS pe ON e.persona_id = pe.id";
$tdataEstado_de_Cuenta_de_Pacientes[".sqlWhereExpr"] = "";
$tdataEstado_de_Cuenta_de_Pacientes[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEstado_de_Cuenta_de_Pacientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEstado_de_Cuenta_de_Pacientes[".arrGroupsPerPage"] = $arrGPP;

$tableKeysEstado_de_Cuenta_de_Pacientes = array();
$tdataEstado_de_Cuenta_de_Pacientes[".Keys"] = $tableKeysEstado_de_Cuenta_de_Pacientes;

$tdataEstado_de_Cuenta_de_Pacientes[".listFields"] = array();
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Código Personal";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Código Único de Identificación";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Paciente";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "NIT";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Dirección";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Teléfono";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Código de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Fecha";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Tipo de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Médico Encargado";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Número de Factura";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Costo de los Servicios";
$tdataEstado_de_Cuenta_de_Pacientes[".listFields"][] = "Total Abonado";

$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"] = array();
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Código Personal";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Código Único de Identificación";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Paciente";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "NIT";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Dirección";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Teléfono";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Código de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Fecha";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Tipo de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Médico Encargado";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Número de Factura";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Costo de los Servicios";
$tdataEstado_de_Cuenta_de_Pacientes[".viewFields"][] = "Total Abonado";

$tdataEstado_de_Cuenta_de_Pacientes[".addFields"] = array();
$tdataEstado_de_Cuenta_de_Pacientes[".addFields"][] = "NIT";

$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"] = array();
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Código Personal";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Código Único de Identificación";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Paciente";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "NIT";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Dirección";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Teléfono";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Código de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Fecha";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Tipo de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Médico Encargado";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Número de Factura";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Costo de los Servicios";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineAddFields"][] = "Total Abonado";

$tdataEstado_de_Cuenta_de_Pacientes[".editFields"] = array();
$tdataEstado_de_Cuenta_de_Pacientes[".editFields"][] = "NIT";

$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"] = array();
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Código Personal";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Código Único de Identificación";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Paciente";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "NIT";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Dirección";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Teléfono";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Código de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Fecha";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Tipo de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Médico Encargado";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Número de Factura";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Costo de los Servicios";
$tdataEstado_de_Cuenta_de_Pacientes[".inlineEditFields"][] = "Total Abonado";

$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"] = array();
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Código Personal";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Código Único de Identificación";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Paciente";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "NIT";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Dirección";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Teléfono";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Código de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Fecha";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Tipo de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Médico Encargado";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Número de Factura";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Costo de los Servicios";
$tdataEstado_de_Cuenta_de_Pacientes[".exportFields"][] = "Total Abonado";

$tdataEstado_de_Cuenta_de_Pacientes[".printFields"] = array();
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Código Personal";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Código Único de Identificación";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Paciente";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "NIT";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Dirección";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Teléfono";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Código de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Fecha";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Tipo de consulta";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Médico Encargado";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Número de Factura";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Costo de los Servicios";
$tdataEstado_de_Cuenta_de_Pacientes[".printFields"][] = "Total Abonado";

//	Código Personal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Código Personal";
	$fdata["GoodName"] = "C_digo_Personal";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Código Personal"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "p.id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Código Personal"] = $fdata;
//	Código Único de Identificación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Código Único de Identificación";
	$fdata["GoodName"] = "C_digo__nico_de_Identificaci_n";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Código Único de Identificación"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cui"; 
		$fdata["FullName"] = "p.cui";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Código Único de Identificación"] = $fdata;
//	Paciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Paciente";
	$fdata["GoodName"] = "Paciente";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Paciente"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Paciente"; 
		$fdata["FullName"] = "CONCAT(p.nombre, ' ', p.apellido)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Paciente"] = $fdata;
//	NIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NIT";
	$fdata["GoodName"] = "NIT";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "NIT"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nit"; 
		$fdata["FullName"] = "p.nit";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["NIT"] = $fdata;
//	Dirección
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Dirección";
	$fdata["GoodName"] = "Direcci_n";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Dirección"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Dirección"; 
		$fdata["FullName"] = "CONCAT(p.direccion, ' ', m.nombre, ' ', d.nombre)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Dirección"] = $fdata;
//	Teléfono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Teléfono";
	$fdata["GoodName"] = "Tel_fono";
	$fdata["ownerTable"] = "persona";
	$fdata["Label"] = "Teléfono"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "telefono"; 
		$fdata["FullName"] = "p.telefono";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Teléfono"] = $fdata;
//	Código de consulta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Código de consulta";
	$fdata["GoodName"] = "C_digo_de_consulta";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Código de consulta"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "c.id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Código de consulta"] = $fdata;
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "consulta";
	$fdata["Label"] = "Fecha"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fecha"; 
		$fdata["FullName"] = "c.fecha";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Fecha"] = $fdata;
//	Tipo de consulta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Tipo de consulta";
	$fdata["GoodName"] = "Tipo_de_consulta";
	$fdata["ownerTable"] = "tipo_consulta";
	$fdata["Label"] = "Tipo de consulta"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nombre"; 
		$fdata["FullName"] = "tc.nombre";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Tipo de consulta"] = $fdata;
//	Médico Encargado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Médico Encargado";
	$fdata["GoodName"] = "M_dico_Encargado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Médico Encargado"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Médico Encargado"; 
		$fdata["FullName"] = "CONCAT(pe.nombre, ' ', pe.apellido)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Médico Encargado"] = $fdata;
//	Número de Factura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Número de Factura";
	$fdata["GoodName"] = "N_mero_de_Factura";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "Número de Factura"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "numero_factura"; 
		$fdata["FullName"] = "f.numero_factura";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Número de Factura"] = $fdata;
//	Costo de los Servicios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Costo de los Servicios";
	$fdata["GoodName"] = "Costo_de_los_Servicios";
	$fdata["ownerTable"] = "factura_consulta";
	$fdata["Label"] = "Costo de los Servicios"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "monto"; 
		$fdata["FullName"] = "f.monto";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Costo de los Servicios"] = $fdata;
//	Total Abonado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Total Abonado";
	$fdata["GoodName"] = "Total_Abonado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Total Abonado"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total Abonado"; 
		$fdata["FullName"] = "SUM(ac.monto)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataEstado_de_Cuenta_de_Pacientes["Total Abonado"] = $fdata;

	
$tables_data["Estado de Cuenta de Pacientes"]=&$tdataEstado_de_Cuenta_de_Pacientes;
$field_labels["Estado_de_Cuenta_de_Pacientes"] = &$fieldLabelsEstado_de_Cuenta_de_Pacientes;
$fieldToolTips["Estado de Cuenta de Pacientes"] = &$fieldToolTipsEstado_de_Cuenta_de_Pacientes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Estado de Cuenta de Pacientes"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Estado de Cuenta de Pacientes"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Estado_de_Cuenta_de_Pacientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "p.id AS `Código Personal`,  p.cui AS `Código Único de Identificación`,  CONCAT(p.nombre, ' ', p.apellido) AS `Paciente`,  p.nit AS `NIT`,  CONCAT(p.direccion, ' ', m.nombre, ' ', d.nombre) AS `Dirección`,  p.telefono AS `Teléfono`,  c.id AS `Código de consulta`,  c.fecha AS `Fecha`,  tc.nombre AS `Tipo de consulta`,  CONCAT(pe.nombre, ' ', pe.apellido) AS `Médico Encargado`,  f.numero_factura AS `Número de Factura`,  f.monto AS `Costo de los Servicios`,  SUM(ac.monto) AS `Total Abonado`";
$proto0["m_strFrom"] = "FROM persona AS p  INNER JOIN consulta AS c ON p.id = c.paciente  INNER JOIN municipio AS m ON p.municipio_id = m.id  INNER JOIN departamento AS d ON m.departamento = d.id  INNER JOIN factura_consulta AS f ON c.id = f.consulta_id  INNER JOIN abonos_clientes AS ac ON f.id = ac.factura_servicio_id  INNER JOIN consulta AS con ON p.id = con.paciente  INNER JOIN tipo_consulta AS tc ON c.tipo_consulta_id = tc.id  INNER JOIN empleado AS e ON c.medico_encargado = e.id  INNER JOIN persona AS pe ON e.persona_id = pe.id";
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
	"m_strTable" => "p"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Código Personal";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cui",
	"m_strTable" => "p"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Código Único de Identificación";
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
$proto9["m_alias"] = "Paciente";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "nit",
	"m_strTable" => "p"
));

$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "NIT";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "p.direccion"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "m.nombre"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "d.nombre"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Dirección";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "p"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Teléfono";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Código de consulta";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "c"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Fecha";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "tc"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "Tipo de consulta";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_CUSTOM";
$proto32["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "pe.nombre"
));

$proto32["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto32["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "pe.apellido"
));

$proto32["m_arguments"][]=$obj;
$proto32["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto32);

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "Médico Encargado";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_factura",
	"m_strTable" => "f"
));

$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "Número de Factura";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "f"
));

$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "Costo de los Servicios";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$proto41=array();
$proto41["m_functiontype"] = "SQLF_SUM";
$proto41["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "ac"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto41);

$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "Total Abonado";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "persona";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "id";
$proto44["m_columns"][] = "nombre";
$proto44["m_columns"][] = "apellido";
$proto44["m_columns"][] = "fecha_nacimiento";
$proto44["m_columns"][] = "cui";
$proto44["m_columns"][] = "direccion";
$proto44["m_columns"][] = "telefono";
$proto44["m_columns"][] = "nit";
$proto44["m_columns"][] = "genero_id";
$proto44["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_alias"] = "p";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = "0";
$proto45["m_inBrackets"] = "0";
$proto45["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
												$proto47=array();
$proto47["m_link"] = "SQLL_INNERJOIN";
			$proto48=array();
$proto48["m_strName"] = "consulta";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "id";
$proto48["m_columns"][] = "fecha";
$proto48["m_columns"][] = "paciente";
$proto48["m_columns"][] = "estado_retirada";
$proto48["m_columns"][] = "medico_encargado";
$proto48["m_columns"][] = "diagnostico_id";
$proto48["m_columns"][] = "tipo_consulta_id";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_alias"] = "c";
$proto49=array();
$proto49["m_sql"] = "p.id = c.paciente";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "p"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "= c.paciente";
$proto49["m_havingmode"] = "0";
$proto49["m_inBrackets"] = "0";
$proto49["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
												$proto51=array();
$proto51["m_link"] = "SQLL_INNERJOIN";
			$proto52=array();
$proto52["m_strName"] = "municipio";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "id";
$proto52["m_columns"][] = "nombre";
$proto52["m_columns"][] = "departamento";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_alias"] = "m";
$proto53=array();
$proto53["m_sql"] = "p.municipio_id = m.id";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "municipio_id",
	"m_strTable" => "p"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= m.id";
$proto53["m_havingmode"] = "0";
$proto53["m_inBrackets"] = "0";
$proto53["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
												$proto55=array();
$proto55["m_link"] = "SQLL_INNERJOIN";
			$proto56=array();
$proto56["m_strName"] = "departamento";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "id";
$proto56["m_columns"][] = "nombre";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_alias"] = "d";
$proto57=array();
$proto57["m_sql"] = "m.departamento = d.id";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "m"
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "= d.id";
$proto57["m_havingmode"] = "0";
$proto57["m_inBrackets"] = "0";
$proto57["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
												$proto59=array();
$proto59["m_link"] = "SQLL_INNERJOIN";
			$proto60=array();
$proto60["m_strName"] = "factura_consulta";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "id";
$proto60["m_columns"][] = "numero_factura";
$proto60["m_columns"][] = "consulta_id";
$proto60["m_columns"][] = "cliente_id";
$proto60["m_columns"][] = "fecha";
$proto60["m_columns"][] = "monto";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_alias"] = "f";
$proto61=array();
$proto61["m_sql"] = "c.id = f.consulta_id";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "c"
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "= f.consulta_id";
$proto61["m_havingmode"] = "0";
$proto61["m_inBrackets"] = "0";
$proto61["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto61);

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto0["m_fromlist"][]=$obj;
												$proto63=array();
$proto63["m_link"] = "SQLL_INNERJOIN";
			$proto64=array();
$proto64["m_strName"] = "abonos_clientes";
$proto64["m_columns"] = array();
$proto64["m_columns"][] = "id";
$proto64["m_columns"][] = "fecha";
$proto64["m_columns"][] = "monto";
$proto64["m_columns"][] = "observaciones";
$proto64["m_columns"][] = "factura_servicio_id";
$obj = new SQLTable($proto64);

$proto63["m_table"] = $obj;
$proto63["m_alias"] = "ac";
$proto65=array();
$proto65["m_sql"] = "f.id = ac.factura_servicio_id";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "f"
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "= ac.factura_servicio_id";
$proto65["m_havingmode"] = "0";
$proto65["m_inBrackets"] = "0";
$proto65["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto65);

$proto63["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto63);

$proto0["m_fromlist"][]=$obj;
												$proto67=array();
$proto67["m_link"] = "SQLL_INNERJOIN";
			$proto68=array();
$proto68["m_strName"] = "consulta";
$proto68["m_columns"] = array();
$proto68["m_columns"][] = "id";
$proto68["m_columns"][] = "fecha";
$proto68["m_columns"][] = "paciente";
$proto68["m_columns"][] = "estado_retirada";
$proto68["m_columns"][] = "medico_encargado";
$proto68["m_columns"][] = "diagnostico_id";
$proto68["m_columns"][] = "tipo_consulta_id";
$obj = new SQLTable($proto68);

$proto67["m_table"] = $obj;
$proto67["m_alias"] = "con";
$proto69=array();
$proto69["m_sql"] = "p.id = con.paciente";
$proto69["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "p"
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
$proto69["m_strCase"] = "= con.paciente";
$proto69["m_havingmode"] = "0";
$proto69["m_inBrackets"] = "0";
$proto69["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto69);

$proto67["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto67);

$proto0["m_fromlist"][]=$obj;
												$proto71=array();
$proto71["m_link"] = "SQLL_INNERJOIN";
			$proto72=array();
$proto72["m_strName"] = "tipo_consulta";
$proto72["m_columns"] = array();
$proto72["m_columns"][] = "id";
$proto72["m_columns"][] = "nombre";
$proto72["m_columns"][] = "precio";
$obj = new SQLTable($proto72);

$proto71["m_table"] = $obj;
$proto71["m_alias"] = "tc";
$proto73=array();
$proto73["m_sql"] = "c.tipo_consulta_id = tc.id";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tipo_consulta_id",
	"m_strTable" => "c"
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = "= tc.id";
$proto73["m_havingmode"] = "0";
$proto73["m_inBrackets"] = "0";
$proto73["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto73);

$proto71["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto71);

$proto0["m_fromlist"][]=$obj;
												$proto75=array();
$proto75["m_link"] = "SQLL_INNERJOIN";
			$proto76=array();
$proto76["m_strName"] = "empleado";
$proto76["m_columns"] = array();
$proto76["m_columns"][] = "id";
$proto76["m_columns"][] = "profesion";
$proto76["m_columns"][] = "puesto_id";
$proto76["m_columns"][] = "persona_id";
$obj = new SQLTable($proto76);

$proto75["m_table"] = $obj;
$proto75["m_alias"] = "e";
$proto77=array();
$proto77["m_sql"] = "c.medico_encargado = e.id";
$proto77["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "medico_encargado",
	"m_strTable" => "c"
));

$proto77["m_column"]=$obj;
$proto77["m_contained"] = array();
$proto77["m_strCase"] = "= e.id";
$proto77["m_havingmode"] = "0";
$proto77["m_inBrackets"] = "0";
$proto77["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto77);

$proto75["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto75);

$proto0["m_fromlist"][]=$obj;
												$proto79=array();
$proto79["m_link"] = "SQLL_INNERJOIN";
			$proto80=array();
$proto80["m_strName"] = "persona";
$proto80["m_columns"] = array();
$proto80["m_columns"][] = "id";
$proto80["m_columns"][] = "nombre";
$proto80["m_columns"][] = "apellido";
$proto80["m_columns"][] = "fecha_nacimiento";
$proto80["m_columns"][] = "cui";
$proto80["m_columns"][] = "direccion";
$proto80["m_columns"][] = "telefono";
$proto80["m_columns"][] = "nit";
$proto80["m_columns"][] = "genero_id";
$proto80["m_columns"][] = "municipio_id";
$obj = new SQLTable($proto80);

$proto79["m_table"] = $obj;
$proto79["m_alias"] = "pe";
$proto81=array();
$proto81["m_sql"] = "e.persona_id = pe.id";
$proto81["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "persona_id",
	"m_strTable" => "e"
));

$proto81["m_column"]=$obj;
$proto81["m_contained"] = array();
$proto81["m_strCase"] = "= pe.id";
$proto81["m_havingmode"] = "0";
$proto81["m_inBrackets"] = "0";
$proto81["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto81);

$proto79["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto79);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Estado_de_Cuenta_de_Pacientes = createSqlQuery_Estado_de_Cuenta_de_Pacientes();
													$tdataEstado_de_Cuenta_de_Pacientes[".sqlquery"] = $queryData_Estado_de_Cuenta_de_Pacientes;

$tableEvents["Estado de Cuenta de Pacientes"] = new eventsBase;
$tdataEstado_de_Cuenta_de_Pacientes[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Estado de Cuenta de Pacientes");

?>