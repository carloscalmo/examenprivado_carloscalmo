<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!isLogged())
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "departamento";
$nonAdminTablesArr[] = "municipio";
$nonAdminTablesArr[] = "insumos";
$nonAdminTablesArr[] = "servicio";
$nonAdminTablesArr[] = "detalle_servicio";
$nonAdminTablesArr[] = "usuarios";
$nonAdminTablesArr[] = "abonos_clientes";
$nonAdminTablesArr[] = "abonos_proveedores";
$nonAdminTablesArr[] = "tipo_ambiente";
$nonAdminTablesArr[] = "cirugia";
$nonAdminTablesArr[] = "consulta";
$nonAdminTablesArr[] = "descarga_inventario_expirado";
$nonAdminTablesArr[] = "detalle_cirugia";
$nonAdminTablesArr[] = "detalle_compra";
$nonAdminTablesArr[] = "diagnostico";
$nonAdminTablesArr[] = "empleado";
$nonAdminTablesArr[] = "empleados_cirugia";
$nonAdminTablesArr[] = "factura_compra";
$nonAdminTablesArr[] = "hospitalizacion";
$nonAdminTablesArr[] = "proveedores";
$nonAdminTablesArr[] = "persona";
$nonAdminTablesArr[] = "puesto";
$nonAdminTablesArr[] = "solicitud_servicio";
$nonAdminTablesArr[] = "tipo_cirugia";
$nonAdminTablesArr[] = "tipo_consulta";
$nonAdminTablesArr[] = "ambiente";
$nonAdminTablesArr[] = "cobro_consulta";
$nonAdminTablesArr[] = "cobro_insumos";
$nonAdminTablesArr[] = "cobro_servicios";
$nonAdminTablesArr[] = "cobro_hospitalizacion";
$nonAdminTablesArr[] = "cobro_cirugia";
$nonAdminTablesArr[] = "total_factura";
$nonAdminTablesArr[] = "lotes";
$nonAdminTablesArr[] = "Copy of empleado";
$nonAdminTablesArr[] = "factura_consulta";
$nonAdminTablesArr[] = "Copy of departamento";
$nonAdminTablesArr[] = "municipio_departamento";
$nonAdminTablesArr[] = "genero";
$nonAdminTablesArr[] = "Copy of factura_compra";
$nonAdminTablesArr[] = "Copy of factura_compra1";
$nonAdminTablesArr[] = "Copy of insumos";
$nonAdminTablesArr[] = "Copy of insumos1";
$nonAdminTablesArr[] = "Copy of cirugia";
$nonAdminTablesArr[] = "Copy of consulta";
$nonAdminTablesArr[] = "Estado de cuenta de los pacientes";
$nonAdminTablesArr[] = "Historial de compras";
$nonAdminTablesArr[] = "Historial de ventas";
$nonAdminTablesArr[] = "solicitud_medicamento";
$nonAdminTablesArr[] = "Copy of lotes";
$nonAdminTablesArr[] = "Producto_Caducados";

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));
	
switch(postvalue("a"))
{
	case "add":
		$sql ="insert into `permisosuggroups` (`Label`) values (".db_prepare_string(postvalue("name")).")";
		db_exec($sql,$conn);
		$sql = "select max(`GroupID`) from `permisosuggroups`";
		$rs = db_query($sql,$conn);
		$data = db_fetch_numarray($rs);
		echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => true, 'id' => $data[0])))."</textarea>";
		break;
	case "del":
		$sql ="delete from `permisosuggroups` where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		$sql ="delete from `permisosugrights` where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		$sql ="delete from `permisosugmembers` where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => true)))."</textarea>";
		break;
	case "rename":
		$sql ="update `permisosuggroups` set `Label`=".db_prepare_string(postvalue("name"))." where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => true)))."</textarea>";
		break;
	case 'saveRights':
		$error = '';
		if(postvalue('state'))
		{
			$allRights = array();
			$rs = db_query("select `GroupID`, `TableName`, `AccessMask` from `permisosugrights`", $conn);
			// don't use db_fetch_array! because of ORACLE and PostgreSQL
			while($data = db_fetch_numarray($rs))
			{
				$allRights[] = $data;
			}
			
			$delGroupId = 0;
			$state = my_json_decode(postvalue('state'));
			// delete all extra permissions from db
			foreach($allRights as $i => $data)
			{
				$groupIDInt = (int) $data[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if(!array_key_exists($groupIDInt, $state))
					db_exec("delete from `permisosugrights` where `GroupID`=".$groupIDInt, $conn);
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
					db_exec("delete from `permisosugrights` where `GroupID`=".$groupIDInt." and `TableName`=".db_prepare_string(html_special_decode($data[1])), $conn);
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if(!array_key_exists($table, $realTables))
						continue;
					
					$ins = true;
					foreach($allRights as $i => $data)
					{	
						if($data[0] == $groupId && $data[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
								db_exec("update `permisosugrights` set `AccessMask`=".db_prepare_string($mask)." where `GroupID`=".$groupId." and `TableName`=".db_prepare_string(html_special_decode($realTables[$table])), $conn);
						}
					}
					if($ins)
					{
						db_exec(mysprintf("insert into `permisosugrights` (`TableName`, `GroupID`, `AccessMask`) values (%s, %d, %s)", 
							array(db_prepare_string(html_special_decode($realTables[$table])), $groupId, db_prepare_string($mask))), $conn);
					}
					
					if(db_error($conn) != '')
						$error .= ($error == '' ? '' : ' ').db_error($conn);
				}
			}
		}
		getJSONResult($error);
		break;
	case 'saveMembership':
		$error = '';
		$groupId = postvalue('group');
		$realUsers = GetRealValues();
		
		for($i=0;$i<count($realUsers);$i++)
		{
			if($realUsers[$i] != $_SESSION["UserID"])
				$sql = "delete from `permisosugmembers` where `UserName`=%s";
			else
				$sql = "delete from `permisosugmembers` where `UserName`=%s and `GroupID`<>-1";
			
			db_exec(mysprintf($sql, array(db_prepare_string(html_special_decode($realUsers[$i])))), $conn);	
		}
		
		if(postvalue('state'))
		{
			$state = my_json_decode(postvalue('state'));
			foreach ($state as $group => $users)
				foreach ($users as $user)
				{
					if(!array_key_exists($user, $realUsers))
						continue;
					
					db_exec(mysprintf("insert into `permisosugmembers` (`UserName`, `GroupID`) values (%s, %d)"
						, array(db_prepare_string(html_special_decode($realUsers[$user])), $group)), $conn);
					
					if(db_error($conn) != '')
						$error .= db_error($conn);
				}
		}
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo "<textarea>".htmlspecialchars(my_json_encode($result))."</textarea>";
}