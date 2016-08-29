<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/admin_rights_variables.php");


$gsqlHead="select `nombre` ";
$gsqlFrom="from `usuarios`";
$gsqlWhereExpr="";
$gsqlTail="";
// $gstrSQL = "SELECT TableName,   GroupID,   AccessMask  FROM permisosugrights ";
$gstrSQL = $gQuery->gSQLWhere("");


if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(!IsAdmin())
{
	echo "<p>"."No tiene permiso para acceder a esta tabla"." <a href=\"login.php\">"."Regresar a la página de conexión"."</a></p>";
	return;
}



$layout = new TLayout("ug_rights","Rounded1BlueWave","MobileBlueWave");
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();

$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons","block"=>"savebuttons_block","substyle"=>1);


$layout->skins["ugcontrols"] = "1";
$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "1";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"ugrightsblock","block"=>"rights_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();


$layout->containers["left"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();

$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup","block"=>"","substyle"=>1);


$layout->skins["uggroup"] = "1";
$layout->blocks["left"][] = "uggroup";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["search"] = array();


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "2";
$layout->blocks["top"][] = "search";$page_layouts["admin_rights_list"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');
include('classes/listpage.php');
include('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;
$nonAdminTablesRightsArr=array();
$nonAdminTablesArr=array();
$pageRights=array();
$nonAdminTablesArr[] = array("departamento","Departamento");
$nonAdminTablesRightsArr["departamento"]=array();
$pageRights["departamento"]["add"]=true;
$pageRights["departamento"]["edit"]=true;
$pageRights["departamento"]["delete"]=true;
$pageRights["departamento"]["list"]=true;
$pageRights["departamento"]["export"]=false;
$pageRights["departamento"]["import"]=false;

$nonAdminTablesArr[] = array("municipio","Municipio");
$nonAdminTablesRightsArr["municipio"]=array();
$pageRights["municipio"]["add"]=true;
$pageRights["municipio"]["edit"]=true;
$pageRights["municipio"]["delete"]=true;
$pageRights["municipio"]["list"]=true;
$pageRights["municipio"]["export"]=true;
$pageRights["municipio"]["import"]=false;

$nonAdminTablesArr[] = array("insumos","Insumos");
$nonAdminTablesRightsArr["insumos"]=array();
$pageRights["insumos"]["add"]=true;
$pageRights["insumos"]["edit"]=true;
$pageRights["insumos"]["delete"]=true;
$pageRights["insumos"]["list"]=true;
$pageRights["insumos"]["export"]=true;
$pageRights["insumos"]["import"]=false;

$nonAdminTablesArr[] = array("servicio","Servicio");
$nonAdminTablesRightsArr["servicio"]=array();
$pageRights["servicio"]["add"]=true;
$pageRights["servicio"]["edit"]=true;
$pageRights["servicio"]["delete"]=true;
$pageRights["servicio"]["list"]=true;
$pageRights["servicio"]["export"]=true;
$pageRights["servicio"]["import"]=false;

$nonAdminTablesArr[] = array("detalle_servicio","Detalle de un servicio");
$nonAdminTablesRightsArr["detalle_servicio"]=array();
$pageRights["detalle_servicio"]["add"]=true;
$pageRights["detalle_servicio"]["edit"]=true;
$pageRights["detalle_servicio"]["delete"]=true;
$pageRights["detalle_servicio"]["list"]=true;
$pageRights["detalle_servicio"]["export"]=false;
$pageRights["detalle_servicio"]["import"]=false;

$nonAdminTablesArr[] = array("usuarios","Usuarios");
$nonAdminTablesRightsArr["usuarios"]=array();
$pageRights["usuarios"]["add"]=true;
$pageRights["usuarios"]["edit"]=true;
$pageRights["usuarios"]["delete"]=true;
$pageRights["usuarios"]["list"]=true;
$pageRights["usuarios"]["export"]=true;
$pageRights["usuarios"]["import"]=false;

$nonAdminTablesArr[] = array("abonos_clientes","Abonos de clientes");
$nonAdminTablesRightsArr["abonos_clientes"]=array();
$pageRights["abonos_clientes"]["add"]=true;
$pageRights["abonos_clientes"]["edit"]=true;
$pageRights["abonos_clientes"]["delete"]=true;
$pageRights["abonos_clientes"]["list"]=true;
$pageRights["abonos_clientes"]["export"]=true;
$pageRights["abonos_clientes"]["import"]=false;

$nonAdminTablesArr[] = array("abonos_proveedores","Abonos a proveedores");
$nonAdminTablesRightsArr["abonos_proveedores"]=array();
$pageRights["abonos_proveedores"]["add"]=true;
$pageRights["abonos_proveedores"]["edit"]=true;
$pageRights["abonos_proveedores"]["delete"]=true;
$pageRights["abonos_proveedores"]["list"]=true;
$pageRights["abonos_proveedores"]["export"]=true;
$pageRights["abonos_proveedores"]["import"]=false;

$nonAdminTablesArr[] = array("tipo_ambiente","Tipo Ambiente");
$nonAdminTablesRightsArr["tipo_ambiente"]=array();
$pageRights["tipo_ambiente"]["add"]=true;
$pageRights["tipo_ambiente"]["edit"]=true;
$pageRights["tipo_ambiente"]["delete"]=true;
$pageRights["tipo_ambiente"]["list"]=true;
$pageRights["tipo_ambiente"]["export"]=true;
$pageRights["tipo_ambiente"]["import"]=false;

$nonAdminTablesArr[] = array("cirugia","Cirugia");
$nonAdminTablesRightsArr["cirugia"]=array();
$pageRights["cirugia"]["add"]=true;
$pageRights["cirugia"]["edit"]=true;
$pageRights["cirugia"]["delete"]=true;
$pageRights["cirugia"]["list"]=true;
$pageRights["cirugia"]["export"]=true;
$pageRights["cirugia"]["import"]=false;

$nonAdminTablesArr[] = array("consulta","Consulta");
$nonAdminTablesRightsArr["consulta"]=array();
$pageRights["consulta"]["add"]=true;
$pageRights["consulta"]["edit"]=true;
$pageRights["consulta"]["delete"]=true;
$pageRights["consulta"]["list"]=true;
$pageRights["consulta"]["export"]=true;
$pageRights["consulta"]["import"]=false;

$nonAdminTablesArr[] = array("descarga_inventario_expirado","Descarga Inventario Expirado");
$nonAdminTablesRightsArr["descarga_inventario_expirado"]=array();
$pageRights["descarga_inventario_expirado"]["add"]=true;
$pageRights["descarga_inventario_expirado"]["edit"]=true;
$pageRights["descarga_inventario_expirado"]["delete"]=true;
$pageRights["descarga_inventario_expirado"]["list"]=true;
$pageRights["descarga_inventario_expirado"]["export"]=true;
$pageRights["descarga_inventario_expirado"]["import"]=false;

$nonAdminTablesArr[] = array("detalle_cirugia","Detalle Cirugia");
$nonAdminTablesRightsArr["detalle_cirugia"]=array();
$pageRights["detalle_cirugia"]["add"]=true;
$pageRights["detalle_cirugia"]["edit"]=true;
$pageRights["detalle_cirugia"]["delete"]=true;
$pageRights["detalle_cirugia"]["list"]=true;
$pageRights["detalle_cirugia"]["export"]=false;
$pageRights["detalle_cirugia"]["import"]=false;

$nonAdminTablesArr[] = array("detalle_compra","Detalle Compra");
$nonAdminTablesRightsArr["detalle_compra"]=array();
$pageRights["detalle_compra"]["add"]=true;
$pageRights["detalle_compra"]["edit"]=true;
$pageRights["detalle_compra"]["delete"]=true;
$pageRights["detalle_compra"]["list"]=true;
$pageRights["detalle_compra"]["export"]=true;
$pageRights["detalle_compra"]["import"]=false;

$nonAdminTablesArr[] = array("diagnostico","Diagnostico");
$nonAdminTablesRightsArr["diagnostico"]=array();
$pageRights["diagnostico"]["add"]=true;
$pageRights["diagnostico"]["edit"]=true;
$pageRights["diagnostico"]["delete"]=true;
$pageRights["diagnostico"]["list"]=true;
$pageRights["diagnostico"]["export"]=false;
$pageRights["diagnostico"]["import"]=false;

$nonAdminTablesArr[] = array("empleado","Empleado");
$nonAdminTablesRightsArr["empleado"]=array();
$pageRights["empleado"]["add"]=true;
$pageRights["empleado"]["edit"]=true;
$pageRights["empleado"]["delete"]=true;
$pageRights["empleado"]["list"]=true;
$pageRights["empleado"]["export"]=true;
$pageRights["empleado"]["import"]=false;

$nonAdminTablesArr[] = array("empleados_cirugia","Empleados en Cirugía");
$nonAdminTablesRightsArr["empleados_cirugia"]=array();
$pageRights["empleados_cirugia"]["add"]=true;
$pageRights["empleados_cirugia"]["edit"]=true;
$pageRights["empleados_cirugia"]["delete"]=true;
$pageRights["empleados_cirugia"]["list"]=true;
$pageRights["empleados_cirugia"]["export"]=false;
$pageRights["empleados_cirugia"]["import"]=false;

$nonAdminTablesArr[] = array("factura_compra","Factura Compra");
$nonAdminTablesRightsArr["factura_compra"]=array();
$pageRights["factura_compra"]["add"]=true;
$pageRights["factura_compra"]["edit"]=true;
$pageRights["factura_compra"]["delete"]=true;
$pageRights["factura_compra"]["list"]=true;
$pageRights["factura_compra"]["export"]=true;
$pageRights["factura_compra"]["import"]=false;

$nonAdminTablesArr[] = array("hospitalizacion","Hospitalizacion");
$nonAdminTablesRightsArr["hospitalizacion"]=array();
$pageRights["hospitalizacion"]["add"]=true;
$pageRights["hospitalizacion"]["edit"]=true;
$pageRights["hospitalizacion"]["delete"]=true;
$pageRights["hospitalizacion"]["list"]=true;
$pageRights["hospitalizacion"]["export"]=true;
$pageRights["hospitalizacion"]["import"]=false;

$nonAdminTablesArr[] = array("proveedores","Proveedores");
$nonAdminTablesRightsArr["proveedores"]=array();
$pageRights["proveedores"]["add"]=true;
$pageRights["proveedores"]["edit"]=true;
$pageRights["proveedores"]["delete"]=true;
$pageRights["proveedores"]["list"]=true;
$pageRights["proveedores"]["export"]=true;
$pageRights["proveedores"]["import"]=false;

$nonAdminTablesArr[] = array("persona","Persona");
$nonAdminTablesRightsArr["persona"]=array();
$pageRights["persona"]["add"]=true;
$pageRights["persona"]["edit"]=true;
$pageRights["persona"]["delete"]=true;
$pageRights["persona"]["list"]=true;
$pageRights["persona"]["export"]=true;
$pageRights["persona"]["import"]=false;

$nonAdminTablesArr[] = array("puesto","Puesto");
$nonAdminTablesRightsArr["puesto"]=array();
$pageRights["puesto"]["add"]=true;
$pageRights["puesto"]["edit"]=true;
$pageRights["puesto"]["delete"]=true;
$pageRights["puesto"]["list"]=true;
$pageRights["puesto"]["export"]=true;
$pageRights["puesto"]["import"]=false;

$nonAdminTablesArr[] = array("solicitud_servicio","Solicitud Servicio");
$nonAdminTablesRightsArr["solicitud_servicio"]=array();
$pageRights["solicitud_servicio"]["add"]=true;
$pageRights["solicitud_servicio"]["edit"]=true;
$pageRights["solicitud_servicio"]["delete"]=true;
$pageRights["solicitud_servicio"]["list"]=true;
$pageRights["solicitud_servicio"]["export"]=true;
$pageRights["solicitud_servicio"]["import"]=false;

$nonAdminTablesArr[] = array("tipo_cirugia","Tipo Cirugia");
$nonAdminTablesRightsArr["tipo_cirugia"]=array();
$pageRights["tipo_cirugia"]["add"]=true;
$pageRights["tipo_cirugia"]["edit"]=true;
$pageRights["tipo_cirugia"]["delete"]=true;
$pageRights["tipo_cirugia"]["list"]=true;
$pageRights["tipo_cirugia"]["export"]=true;
$pageRights["tipo_cirugia"]["import"]=false;

$nonAdminTablesArr[] = array("tipo_consulta","Tipo Consulta");
$nonAdminTablesRightsArr["tipo_consulta"]=array();
$pageRights["tipo_consulta"]["add"]=true;
$pageRights["tipo_consulta"]["edit"]=true;
$pageRights["tipo_consulta"]["delete"]=true;
$pageRights["tipo_consulta"]["list"]=true;
$pageRights["tipo_consulta"]["export"]=true;
$pageRights["tipo_consulta"]["import"]=false;

$nonAdminTablesArr[] = array("ambiente","Ambiente");
$nonAdminTablesRightsArr["ambiente"]=array();
$pageRights["ambiente"]["add"]=true;
$pageRights["ambiente"]["edit"]=true;
$pageRights["ambiente"]["delete"]=true;
$pageRights["ambiente"]["list"]=true;
$pageRights["ambiente"]["export"]=false;
$pageRights["ambiente"]["import"]=false;

$nonAdminTablesArr[] = array("cobro_consulta","Cobro Consulta");
$nonAdminTablesRightsArr["cobro_consulta"]=array();
$pageRights["cobro_consulta"]["add"]=false;
$pageRights["cobro_consulta"]["edit"]=false;
$pageRights["cobro_consulta"]["delete"]=false;
$pageRights["cobro_consulta"]["list"]=true;
$pageRights["cobro_consulta"]["export"]=true;
$pageRights["cobro_consulta"]["import"]=false;

$nonAdminTablesArr[] = array("cobro_insumos","Cobro Insumos");
$nonAdminTablesRightsArr["cobro_insumos"]=array();
$pageRights["cobro_insumos"]["add"]=false;
$pageRights["cobro_insumos"]["edit"]=false;
$pageRights["cobro_insumos"]["delete"]=false;
$pageRights["cobro_insumos"]["list"]=true;
$pageRights["cobro_insumos"]["export"]=true;
$pageRights["cobro_insumos"]["import"]=false;

$nonAdminTablesArr[] = array("cobro_servicios","Cobro Servicios");
$nonAdminTablesRightsArr["cobro_servicios"]=array();
$pageRights["cobro_servicios"]["add"]=false;
$pageRights["cobro_servicios"]["edit"]=false;
$pageRights["cobro_servicios"]["delete"]=false;
$pageRights["cobro_servicios"]["list"]=true;
$pageRights["cobro_servicios"]["export"]=true;
$pageRights["cobro_servicios"]["import"]=false;

$nonAdminTablesArr[] = array("cobro_hospitalizacion","Cobro Hospitalizacion");
$nonAdminTablesRightsArr["cobro_hospitalizacion"]=array();
$pageRights["cobro_hospitalizacion"]["add"]=false;
$pageRights["cobro_hospitalizacion"]["edit"]=false;
$pageRights["cobro_hospitalizacion"]["delete"]=false;
$pageRights["cobro_hospitalizacion"]["list"]=true;
$pageRights["cobro_hospitalizacion"]["export"]=true;
$pageRights["cobro_hospitalizacion"]["import"]=false;

$nonAdminTablesArr[] = array("cobro_cirugia","Cobro Cirugia");
$nonAdminTablesRightsArr["cobro_cirugia"]=array();
$pageRights["cobro_cirugia"]["add"]=false;
$pageRights["cobro_cirugia"]["edit"]=false;
$pageRights["cobro_cirugia"]["delete"]=false;
$pageRights["cobro_cirugia"]["list"]=true;
$pageRights["cobro_cirugia"]["export"]=true;
$pageRights["cobro_cirugia"]["import"]=false;

$nonAdminTablesArr[] = array("total_factura","Total Factura");
$nonAdminTablesRightsArr["total_factura"]=array();
$pageRights["total_factura"]["add"]=false;
$pageRights["total_factura"]["edit"]=false;
$pageRights["total_factura"]["delete"]=false;
$pageRights["total_factura"]["list"]=false;
$pageRights["total_factura"]["export"]=false;
$pageRights["total_factura"]["import"]=false;

$nonAdminTablesArr[] = array("lotes","Lotes");
$nonAdminTablesRightsArr["lotes"]=array();
$pageRights["lotes"]["add"]=true;
$pageRights["lotes"]["edit"]=true;
$pageRights["lotes"]["delete"]=true;
$pageRights["lotes"]["list"]=true;
$pageRights["lotes"]["export"]=true;
$pageRights["lotes"]["import"]=false;

$nonAdminTablesArr[] = array("Copy of empleado","Copy of empleado");
$nonAdminTablesRightsArr["Copy of empleado"]=array();
$pageRights["Copy of empleado"]["add"]=false;
$pageRights["Copy of empleado"]["edit"]=false;
$pageRights["Copy of empleado"]["delete"]=false;
$pageRights["Copy of empleado"]["list"]=true;
$pageRights["Copy of empleado"]["export"]=false;
$pageRights["Copy of empleado"]["import"]=false;

$nonAdminTablesArr[] = array("factura_consulta","Factura Consulta");
$nonAdminTablesRightsArr["factura_consulta"]=array();
$pageRights["factura_consulta"]["add"]=true;
$pageRights["factura_consulta"]["edit"]=true;
$pageRights["factura_consulta"]["delete"]=true;
$pageRights["factura_consulta"]["list"]=true;
$pageRights["factura_consulta"]["export"]=true;
$pageRights["factura_consulta"]["import"]=false;

$nonAdminTablesArr[] = array("Copy of departamento","Copy of departamento");
$nonAdminTablesRightsArr["Copy of departamento"]=array();
$pageRights["Copy of departamento"]["add"]=true;
$pageRights["Copy of departamento"]["edit"]=true;
$pageRights["Copy of departamento"]["delete"]=true;
$pageRights["Copy of departamento"]["list"]=true;
$pageRights["Copy of departamento"]["export"]=true;
$pageRights["Copy of departamento"]["import"]=true;

$nonAdminTablesArr[] = array("municipio_departamento","Municipio Departamento");
$nonAdminTablesRightsArr["municipio_departamento"]=array();
$pageRights["municipio_departamento"]["add"]=true;
$pageRights["municipio_departamento"]["edit"]=true;
$pageRights["municipio_departamento"]["delete"]=true;
$pageRights["municipio_departamento"]["list"]=true;
$pageRights["municipio_departamento"]["export"]=true;
$pageRights["municipio_departamento"]["import"]=true;

$nonAdminTablesArr[] = array("genero","Genero");
$nonAdminTablesRightsArr["genero"]=array();
$pageRights["genero"]["add"]=true;
$pageRights["genero"]["edit"]=true;
$pageRights["genero"]["delete"]=true;
$pageRights["genero"]["list"]=true;
$pageRights["genero"]["export"]=false;
$pageRights["genero"]["import"]=false;

$nonAdminTablesArr[] = array("Copy of factura_compra","Copy of factura_compra");
$nonAdminTablesRightsArr["Copy of factura_compra"]=array();
$pageRights["Copy of factura_compra"]["add"]=true;
$pageRights["Copy of factura_compra"]["edit"]=true;
$pageRights["Copy of factura_compra"]["delete"]=true;
$pageRights["Copy of factura_compra"]["list"]=true;
$pageRights["Copy of factura_compra"]["export"]=true;
$pageRights["Copy of factura_compra"]["import"]=true;

$nonAdminTablesArr[] = array("Copy of factura_compra1","Copy of factura_compra1");
$nonAdminTablesRightsArr["Copy of factura_compra1"]=array();
$pageRights["Copy of factura_compra1"]["add"]=true;
$pageRights["Copy of factura_compra1"]["edit"]=true;
$pageRights["Copy of factura_compra1"]["delete"]=true;
$pageRights["Copy of factura_compra1"]["list"]=true;
$pageRights["Copy of factura_compra1"]["export"]=true;
$pageRights["Copy of factura_compra1"]["import"]=true;

$nonAdminTablesArr[] = array("Copy of insumos","Copy of insumos");
$nonAdminTablesRightsArr["Copy of insumos"]=array();
$pageRights["Copy of insumos"]["add"]=true;
$pageRights["Copy of insumos"]["edit"]=true;
$pageRights["Copy of insumos"]["delete"]=true;
$pageRights["Copy of insumos"]["list"]=true;
$pageRights["Copy of insumos"]["export"]=true;
$pageRights["Copy of insumos"]["import"]=true;

$nonAdminTablesArr[] = array("Copy of insumos1","Copy of insumos1");
$nonAdminTablesRightsArr["Copy of insumos1"]=array();
$pageRights["Copy of insumos1"]["add"]=true;
$pageRights["Copy of insumos1"]["edit"]=true;
$pageRights["Copy of insumos1"]["delete"]=true;
$pageRights["Copy of insumos1"]["list"]=true;
$pageRights["Copy of insumos1"]["export"]=true;
$pageRights["Copy of insumos1"]["import"]=true;

$nonAdminTablesArr[] = array("Copy of cirugia","Copy of cirugia");
$nonAdminTablesRightsArr["Copy of cirugia"]=array();
$pageRights["Copy of cirugia"]["add"]=true;
$pageRights["Copy of cirugia"]["edit"]=true;
$pageRights["Copy of cirugia"]["delete"]=true;
$pageRights["Copy of cirugia"]["list"]=true;
$pageRights["Copy of cirugia"]["export"]=true;
$pageRights["Copy of cirugia"]["import"]=true;

$nonAdminTablesArr[] = array("Copy of consulta","Copy of consulta");
$nonAdminTablesRightsArr["Copy of consulta"]=array();
$pageRights["Copy of consulta"]["add"]=true;
$pageRights["Copy of consulta"]["edit"]=true;
$pageRights["Copy of consulta"]["delete"]=true;
$pageRights["Copy of consulta"]["list"]=true;
$pageRights["Copy of consulta"]["export"]=true;
$pageRights["Copy of consulta"]["import"]=true;

$nonAdminTablesArr[] = array("Estado de cuenta de los pacientes","Estado de cuenta de los pacientes");
$nonAdminTablesRightsArr["Estado de cuenta de los pacientes"]=array();
$pageRights["Estado de cuenta de los pacientes"]["add"]=false;
$pageRights["Estado de cuenta de los pacientes"]["edit"]=false;
$pageRights["Estado de cuenta de los pacientes"]["delete"]=false;
$pageRights["Estado de cuenta de los pacientes"]["list"]=true;
$pageRights["Estado de cuenta de los pacientes"]["export"]=true;
$pageRights["Estado de cuenta de los pacientes"]["import"]=false;

$nonAdminTablesArr[] = array("Historial de compras","Historial de compras");
$nonAdminTablesRightsArr["Historial de compras"]=array();
$pageRights["Historial de compras"]["add"]=false;
$pageRights["Historial de compras"]["edit"]=false;
$pageRights["Historial de compras"]["delete"]=false;
$pageRights["Historial de compras"]["list"]=true;
$pageRights["Historial de compras"]["export"]=true;
$pageRights["Historial de compras"]["import"]=false;

$nonAdminTablesArr[] = array("Historial de ventas","Historial de ventas");
$nonAdminTablesRightsArr["Historial de ventas"]=array();
$pageRights["Historial de ventas"]["add"]=false;
$pageRights["Historial de ventas"]["edit"]=false;
$pageRights["Historial de ventas"]["delete"]=false;
$pageRights["Historial de ventas"]["list"]=true;
$pageRights["Historial de ventas"]["export"]=true;
$pageRights["Historial de ventas"]["import"]=false;

$nonAdminTablesArr[] = array("solicitud_medicamento","Solicitud Medicamento");
$nonAdminTablesRightsArr["solicitud_medicamento"]=array();
$pageRights["solicitud_medicamento"]["add"]=true;
$pageRights["solicitud_medicamento"]["edit"]=true;
$pageRights["solicitud_medicamento"]["delete"]=true;
$pageRights["solicitud_medicamento"]["list"]=true;
$pageRights["solicitud_medicamento"]["export"]=true;
$pageRights["solicitud_medicamento"]["import"]=false;

$nonAdminTablesArr[] = array("Copy of lotes","Copy of lotes");
$nonAdminTablesRightsArr["Copy of lotes"]=array();
$pageRights["Copy of lotes"]["add"]=true;
$pageRights["Copy of lotes"]["edit"]=true;
$pageRights["Copy of lotes"]["delete"]=true;
$pageRights["Copy of lotes"]["list"]=true;
$pageRights["Copy of lotes"]["export"]=true;
$pageRights["Copy of lotes"]["import"]=true;

$nonAdminTablesArr[] = array("Producto_Caducados","Producto Caducados");
$nonAdminTablesRightsArr["Producto_Caducados"]=array();
$pageRights["Producto_Caducados"]["add"]=false;
$pageRights["Producto_Caducados"]["edit"]=false;
$pageRights["Producto_Caducados"]["delete"]=false;
$pageRights["Producto_Caducados"]["list"]=true;
$pageRights["Producto_Caducados"]["export"]=true;
$pageRights["Producto_Caducados"]["import"]=false;


$options["nonAdminTablesArr"] = $nonAdminTablesArr;
$options["nonAdminTablesRightsArr"] = $nonAdminTablesRightsArr;


$pageObject = ListPage::createListPage($strTableName, $options);
 // add button events if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	//$xt->assign_loopsection("grid_row",$rowinfo);
	


?>
