<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatotal_factura = array();
	$tdatatotal_factura[".NumberOfChars"] = 80; 
	$tdatatotal_factura[".ShortName"] = "total_factura";
	$tdatatotal_factura[".OwnerID"] = "";
	$tdatatotal_factura[".OriginalTable"] = "factura_consulta";

//	field labels
$fieldLabelstotal_factura = array();
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstotal_factura["Spanish"] = array();
	$fieldToolTipstotal_factura["Spanish"] = array();
	$fieldLabelstotal_factura["Spanish"]["id"] = "Id";
	$fieldToolTipstotal_factura["Spanish"]["id"] = "";
	$fieldLabelstotal_factura["Spanish"]["Total_de_la_factura"] = "Total de la factura";
	$fieldToolTipstotal_factura["Spanish"]["Total de la factura"] = "";
	$fieldLabelstotal_factura["Spanish"]["monto"] = "Monto";
	$fieldToolTipstotal_factura["Spanish"]["monto"] = "";
	if (count($fieldToolTipstotal_factura["Spanish"]))
		$tdatatotal_factura[".isUseToolTips"] = true;
}
	
	
	$tdatatotal_factura[".NCSearch"] = true;



$tdatatotal_factura[".shortTableName"] = "total_factura";
$tdatatotal_factura[".nSecOptions"] = 0;
$tdatatotal_factura[".recsPerRowList"] = 1;
$tdatatotal_factura[".mainTableOwnerID"] = "";
$tdatatotal_factura[".moveNext"] = 1;
$tdatatotal_factura[".nType"] = 1;

$tdatatotal_factura[".strOriginalTableName"] = "factura_consulta";




$tdatatotal_factura[".showAddInPopup"] = true;

$tdatatotal_factura[".showEditInPopup"] = true;

$tdatatotal_factura[".showViewInPopup"] = true;

$tdatatotal_factura[".fieldsForRegister"] = array();

$tdatatotal_factura[".listAjax"] = false;

	$tdatatotal_factura[".audit"] = false;

	$tdatatotal_factura[".locking"] = false;

$tdatatotal_factura[".listIcons"] = true;




$tdatatotal_factura[".showSimpleSearchOptions"] = false;

$tdatatotal_factura[".showSearchPanel"] = true;

if (isMobile())
	$tdatatotal_factura[".isUseAjaxSuggest"] = false;
else 
	$tdatatotal_factura[".isUseAjaxSuggest"] = true;

$tdatatotal_factura[".rowHighlite"] = true;

// button handlers file names

$tdatatotal_factura[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatotal_factura[".isUseTimeForSearch"] = false;




$tdatatotal_factura[".allSearchFields"] = array();

$tdatatotal_factura[".allSearchFields"][] = "id";
$tdatatotal_factura[".allSearchFields"][] = "Total de la factura";

$tdatatotal_factura[".googleLikeFields"][] = "id";
$tdatatotal_factura[".googleLikeFields"][] = "Total de la factura";


$tdatatotal_factura[".advSearchFields"][] = "id";
$tdatatotal_factura[".advSearchFields"][] = "Total de la factura";

$tdatatotal_factura[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatotal_factura[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatotal_factura[".strOrderBy"] = $tstrOrderBy;

$tdatatotal_factura[".orderindexes"] = array();

$tdatatotal_factura[".sqlHead"] = "SELECT id,  (  (  SELECT  SUM(TRUNCATE((TRUNCATE((l.precio / l.cantidad),2) * sm.cantidad),2))   FROM factura_consulta fc   INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN solicitud_medicamento sm ON c.id = sm.consulta_id  INNER JOIN insumos i ON sm.medicamento_id = i.id  INNER JOIN lotes l ON i.id = l.insumo  )  +  (  SELECT SUM(s.precio) as 'Precio'  FROM factura_consulta fc   INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN solicitud_servicio sc ON C.id = sc.consulta_id  INNER JOIN servicio s ON sc.servicio_id = s.id  )  +  (  SELECT SUM(tc.precio)  FROM factura_consulta fc  INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN tipo_consulta tc ON c.tipo_consulta_id = tc.id   )  +  (  SELECT SUM((DATEDIFF(h.fecha_egreso,h.fecha_ingreso) * ta.Precio) )  FROM factura_consulta fc  INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN hospitalizacion h ON c.id = h.consulta_id  INNER JOIN ambiente a ON h.ambiente_id = a.id  INNER JOIN tipo_ambiente ta ON a.idtipo_ambiente = ta.idtipo_ambiente  )  +  (  SELECT  SUM(tc.precio )  FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN cirugia AS cg ON c.id = cg.consulta_id  INNER JOIN tipo_cirugia AS tc ON cg.idtipo_cirugia = tc.idtipo_cirugia  )  ) as 'Total de la factura'";
$tdatatotal_factura[".sqlFrom"] = "FROM factura_consulta AS fc";
$tdatatotal_factura[".sqlWhereExpr"] = "";
$tdatatotal_factura[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatotal_factura[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatotal_factura[".arrGroupsPerPage"] = $arrGPP;

$tableKeystotal_factura = array();
$tableKeystotal_factura[] = "id";
$tdatatotal_factura[".Keys"] = $tableKeystotal_factura;

$tdatatotal_factura[".listFields"] = array();
$tdatatotal_factura[".listFields"][] = "id";
$tdatatotal_factura[".listFields"][] = "Total de la factura";

$tdatatotal_factura[".viewFields"] = array();
$tdatatotal_factura[".viewFields"][] = "id";
$tdatatotal_factura[".viewFields"][] = "Total de la factura";

$tdatatotal_factura[".addFields"] = array();

$tdatatotal_factura[".inlineAddFields"] = array();
$tdatatotal_factura[".inlineAddFields"][] = "Total de la factura";

$tdatatotal_factura[".editFields"] = array();

$tdatatotal_factura[".inlineEditFields"] = array();
$tdatatotal_factura[".inlineEditFields"][] = "Total de la factura";

$tdatatotal_factura[".exportFields"] = array();
$tdatatotal_factura[".exportFields"][] = "id";
$tdatatotal_factura[".exportFields"][] = "Total de la factura";

$tdatatotal_factura[".printFields"] = array();
$tdatatotal_factura[".printFields"][] = "id";
$tdatatotal_factura[".printFields"][] = "Total de la factura";

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
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdatatotal_factura["id"] = $fdata;
//	Total de la factura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Total de la factura";
	$fdata["GoodName"] = "Total_de_la_factura";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Total de la factura"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total de la factura"; 
		$fdata["FullName"] = "(  (  SELECT  SUM(TRUNCATE((TRUNCATE((l.precio / l.cantidad),2) * sm.cantidad),2))   FROM factura_consulta fc   INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN solicitud_medicamento sm ON c.id = sm.consulta_id  INNER JOIN insumos i ON sm.medicamento_id = i.id  INNER JOIN lotes l ON i.id = l.insumo  )  +  (  SELECT SUM(s.precio) as 'Precio'  FROM factura_consulta fc   INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN solicitud_servicio sc ON C.id = sc.consulta_id  INNER JOIN servicio s ON sc.servicio_id = s.id  )  +  (  SELECT SUM(tc.precio)  FROM factura_consulta fc  INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN tipo_consulta tc ON c.tipo_consulta_id = tc.id   )  +  (  SELECT SUM((DATEDIFF(h.fecha_egreso,h.fecha_ingreso) * ta.Precio) )  FROM factura_consulta fc  INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN hospitalizacion h ON c.id = h.consulta_id  INNER JOIN ambiente a ON h.ambiente_id = a.id  INNER JOIN tipo_ambiente ta ON a.idtipo_ambiente = ta.idtipo_ambiente  )  +  (  SELECT  SUM(tc.precio )  FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN cirugia AS cg ON c.id = cg.consulta_id  INNER JOIN tipo_cirugia AS tc ON cg.idtipo_cirugia = tc.idtipo_cirugia  )  )";
	
		
		
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
	$edata["DisplayField"] = "Total de la factura";
	
		
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
	
		
		
	$tdatatotal_factura["Total de la factura"] = $fdata;

	
$tables_data["total_factura"]=&$tdatatotal_factura;
$field_labels["total_factura"] = &$fieldLabelstotal_factura;
$fieldToolTips["total_factura"] = &$fieldToolTipstotal_factura;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["total_factura"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["total_factura"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_total_factura()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  (  (  SELECT  SUM(TRUNCATE((TRUNCATE((l.precio / l.cantidad),2) * sm.cantidad),2))   FROM factura_consulta fc   INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN solicitud_medicamento sm ON c.id = sm.consulta_id  INNER JOIN insumos i ON sm.medicamento_id = i.id  INNER JOIN lotes l ON i.id = l.insumo  )  +  (  SELECT SUM(s.precio) as 'Precio'  FROM factura_consulta fc   INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN solicitud_servicio sc ON C.id = sc.consulta_id  INNER JOIN servicio s ON sc.servicio_id = s.id  )  +  (  SELECT SUM(tc.precio)  FROM factura_consulta fc  INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN tipo_consulta tc ON c.tipo_consulta_id = tc.id   )  +  (  SELECT SUM((DATEDIFF(h.fecha_egreso,h.fecha_ingreso) * ta.Precio) )  FROM factura_consulta fc  INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN hospitalizacion h ON c.id = h.consulta_id  INNER JOIN ambiente a ON h.ambiente_id = a.id  INNER JOIN tipo_ambiente ta ON a.idtipo_ambiente = ta.idtipo_ambiente  )  +  (  SELECT  SUM(tc.precio )  FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN cirugia AS cg ON c.id = cg.consulta_id  INNER JOIN tipo_cirugia AS tc ON cg.idtipo_cirugia = tc.idtipo_cirugia  )  ) as 'Total de la factura'";
$proto0["m_strFrom"] = "FROM factura_consulta AS fc";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "(  (  SELECT  SUM(TRUNCATE((TRUNCATE((l.precio / l.cantidad),2) * sm.cantidad),2))   FROM factura_consulta fc   INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN solicitud_medicamento sm ON c.id = sm.consulta_id  INNER JOIN insumos i ON sm.medicamento_id = i.id  INNER JOIN lotes l ON i.id = l.insumo  )  +  (  SELECT SUM(s.precio) as 'Precio'  FROM factura_consulta fc   INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN solicitud_servicio sc ON C.id = sc.consulta_id  INNER JOIN servicio s ON sc.servicio_id = s.id  )  +  (  SELECT SUM(tc.precio)  FROM factura_consulta fc  INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN tipo_consulta tc ON c.tipo_consulta_id = tc.id   )  +  (  SELECT SUM((DATEDIFF(h.fecha_egreso,h.fecha_ingreso) * ta.Precio) )  FROM factura_consulta fc  INNER JOIN consulta c ON fc.consulta_id = c.id  INNER JOIN hospitalizacion h ON c.id = h.consulta_id  INNER JOIN ambiente a ON h.ambiente_id = a.id  INNER JOIN tipo_ambiente ta ON a.idtipo_ambiente = ta.idtipo_ambiente  )  +  (  SELECT  SUM(tc.precio )  FROM factura_consulta AS fc  INNER JOIN consulta AS c ON fc.consulta_id = c.id  INNER JOIN cirugia AS cg ON c.id = cg.consulta_id  INNER JOIN tipo_cirugia AS tc ON cg.idtipo_cirugia = tc.idtipo_cirugia  )  )"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "'Total de la factura'";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "factura_consulta";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "numero_factura";
$proto10["m_columns"][] = "consulta_id";
$proto10["m_columns"][] = "cliente_id";
$proto10["m_columns"][] = "fecha";
$proto10["m_columns"][] = "monto";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "fc";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_total_factura = createSqlQuery_total_factura();
		$tdatatotal_factura[".sqlquery"] = $queryData_total_factura;

$tableEvents["total_factura"] = new eventsBase;
$tdatatotal_factura[".hasEvents"] = false;

$cipherer = new RunnerCipherer("total_factura");

?>