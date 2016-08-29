<?php
$strTableName="Producto_Caducados";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="lotes";

$gstrOrderBy="ORDER BY `l`.`caducidad`  ASC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Producto_Caducados");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Producto_Caducados"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>