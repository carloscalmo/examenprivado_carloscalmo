<?php

$dal_info=array();


function CustomQuery($dalSQL)
{
	global $conn;
	$rs = db_query($dalSQL,$conn);
	  return $rs;
}

function UsersTableName()
{
	return "`usuarios`";
}

function DBLookup($sql)
{
	
	global $conn;
	$rs = db_query($sql,$conn);
	$data = db_fetch_array($rs);
	if ($data)
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $departamento;
	var $municipio;
	var $insumos;
	var $servicio;
	var $detalle_servicio;
	var $usuarios;
	var $abonos_clientes;
	var $abonos_proveedores;
	var $tipo_ambiente;
	var $cirugia;
	var $consulta;
	var $descarga_inventario_expirado;
	var $detalle_cirugia;
	var $detalle_compra;
	var $diagnostico;
	var $empleado;
	var $empleados_cirugia;
	var $factura_compra;
	var $hospitalizacion;
	var $proveedores;
	var $persona;
	var $puesto;
	var $solicitud_servicio;
	var $tipo_cirugia;
	var $tipo_consulta;
	var $ambiente;
	var $factura_consulta;
	var $solicitud_medicamento;
	var $lotes;
	var $genero;
	var $permisosugrights;
	var $prueba2_audit;
	var $permisosuggroups;
	var $permisosugmembers;
	var $lstTables;
	var $Table=array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
	  $this->lstTables[]=array("name"=>"departamento","varname"=>"departamento");
	  $this->lstTables[]=array("name"=>"municipio","varname"=>"municipio");
	  $this->lstTables[]=array("name"=>"insumos","varname"=>"insumos");
	  $this->lstTables[]=array("name"=>"servicio","varname"=>"servicio");
	  $this->lstTables[]=array("name"=>"detalle_servicio","varname"=>"detalle_servicio");
	  $this->lstTables[]=array("name"=>"usuarios","varname"=>"usuarios");
	  $this->lstTables[]=array("name"=>"abonos_clientes","varname"=>"abonos_clientes");
	  $this->lstTables[]=array("name"=>"abonos_proveedores","varname"=>"abonos_proveedores");
	  $this->lstTables[]=array("name"=>"tipo_ambiente","varname"=>"tipo_ambiente");
	  $this->lstTables[]=array("name"=>"cirugia","varname"=>"cirugia");
	  $this->lstTables[]=array("name"=>"consulta","varname"=>"consulta");
	  $this->lstTables[]=array("name"=>"descarga_inventario_expirado","varname"=>"descarga_inventario_expirado");
	  $this->lstTables[]=array("name"=>"detalle_cirugia","varname"=>"detalle_cirugia");
	  $this->lstTables[]=array("name"=>"detalle_compra","varname"=>"detalle_compra");
	  $this->lstTables[]=array("name"=>"diagnostico","varname"=>"diagnostico");
	  $this->lstTables[]=array("name"=>"empleado","varname"=>"empleado");
	  $this->lstTables[]=array("name"=>"empleados_cirugia","varname"=>"empleados_cirugia");
	  $this->lstTables[]=array("name"=>"factura_compra","varname"=>"factura_compra");
	  $this->lstTables[]=array("name"=>"hospitalizacion","varname"=>"hospitalizacion");
	  $this->lstTables[]=array("name"=>"proveedores","varname"=>"proveedores");
	  $this->lstTables[]=array("name"=>"persona","varname"=>"persona");
	  $this->lstTables[]=array("name"=>"puesto","varname"=>"puesto");
	  $this->lstTables[]=array("name"=>"solicitud_servicio","varname"=>"solicitud_servicio");
	  $this->lstTables[]=array("name"=>"tipo_cirugia","varname"=>"tipo_cirugia");
	  $this->lstTables[]=array("name"=>"tipo_consulta","varname"=>"tipo_consulta");
	  $this->lstTables[]=array("name"=>"ambiente","varname"=>"ambiente");
	  $this->lstTables[]=array("name"=>"factura_consulta","varname"=>"factura_consulta");
	  $this->lstTables[]=array("name"=>"solicitud_medicamento","varname"=>"solicitud_medicamento");
	  $this->lstTables[]=array("name"=>"lotes","varname"=>"lotes");
	  $this->lstTables[]=array("name"=>"genero","varname"=>"genero");
	  $this->lstTables[]=array("name"=>"permisosugrights","varname"=>"permisosugrights");
	  $this->lstTables[]=array("name"=>"prueba2_audit","varname"=>"prueba2_audit");
	  $this->lstTables[]=array("name"=>"permisosuggroups","varname"=>"permisosuggroups");
	  $this->lstTables[]=array("name"=>"permisosugmembers","varname"=>"permisosugmembers");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable)
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]))
			{
				$this->CreateClass($tbl);
				return $this->{$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	function CreateClass(&$tbl)
	{
		if($this->{$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".GoodFieldName($tbl["name"]).".php"));
//	create class and object

		$str = "class class_".GoodFieldName($tbl["name"])." extends tDALTable  {";
		foreach($dal_info[$tbl["name"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		$str.=' function class_'.GoodFieldName($tbl["name"]).'()
			{
				$this->m_TableName = \''.escapesq($tbl["name"]).'\';
			}
		};';
		eval($str);
		$classname="class_".GoodFieldName($tbl["name"]);
		$this->{$tbl["varname"]} = new $classname;
		$this->Table[$tbl["name"]]=&$this->{$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
  *  Data Access Layer table class.
  */ 
class tDALTable
{
	var $m_TableName;
	var $Param = array();
	var $Value = array();

	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if(!array_key_exists($this->m_TableName,$dal_info) || !is_array($dal_info[$this->m_TableName]))
		{
			return array();
		}
		$ret=array();
		foreach($dal_info[$this->m_TableName] as $fname=>$f)
		{
			if(@$f["key"])
				$ret[]=$fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys($dal_info[$this->m_TableName]);
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		if(!array_key_exists($field,$dal_info[$this->m_TableName]))
			return 200;
		return $dal_info[$this->m_TableName][$field]["type"];
	}
	
	function PrepareValue($value,$type)
	{
	
		if(IsDateFieldType($type))
			return db_datequotes($value);
		if (NeedQuotes($type))
			return db_prepare_string($value);
		else
			return (0+$value);
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return AddTableWrappers($this->m_TableName);
	} 

	function Execute_Query($blobs,$dalSQL,$tableinfo)
	{
	global $conn;
				db_exec($dalSQL,$conn);
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $conn,$dal_info;
		$insertFields="";
		$insertValues="";
		$tableinfo = &$dal_info[$this->m_TableName];
		$blobs = array();
//	prepare parameters		
		foreach($tableinfo as $fieldname=>$fld)
		{
			if(isset($this->{$fld['varname']}))
			{
				$this->Value[$fieldname] = $this->{$fld['varname']};
			}
			foreach($this->Value as $field=>$value)
			{
				if (strtoupper($field)!=strtoupper($fieldname))
					continue;
				$insertFields.= AddFieldWrappers($fieldname).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				break;
			}
		}
//	prepare and exec SQL
		if ($insertFields!="" && $insertValues!="")		
		{
			$insertFields = substr($insertFields,0,-1);
			$insertValues = substr($insertValues,0,-1);
			$dalSQL = "insert into ".AddTableWrappers($this->m_TableName)." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs,$dalSQL,$tableinfo);
		}
//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		global $conn;
		$dalSQL = "select * from ".AddTableWrappers($this->m_TableName);
		$rs = db_query($dalSQL,$conn);
		return $rs;
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere="",$orderby="")
	{
		global $conn;
		if ($swhere)
			$swhere = " where ".$swhere;
		if ($orderby)
			$orderby = " order by ".$orderby;
		$dalSQL = "select * from ".AddTableWrappers($this->m_TableName).$swhere.$orderby;
		$rs = db_query($dalSQL,$conn);
		return $rs;
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $conn,$dal_info;
		$deleteFields="";
		$tableinfo = &$dal_info[$this->m_TableName];
//	prepare parameters		
		foreach($tableinfo as $fieldname=>$fld)
		{
			if(isset($this->{$fld['varname']}))
			{
				$this->Param[$fieldname] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field=>$value)
			{
				if (strtoupper($field)!=strtoupper($fieldname))
					continue;
				$deleteFields.= AddFieldWrappers($fieldname)."=". $this->PrepareValue($value,$fld["type"]) . " and ";
				break;
			}
		}
//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields,0,-5);
			$dalSQL = "delete from ".AddTableWrappers($this->m_TableName)." where ".$deleteFields;
			db_exec($dalSQL,$conn);
		}
	
//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		$this->Value=array();
		$this->Param=array();
		global $dal_info;
		$tableinfo = &$dal_info[$this->m_TableName];
//	prepare parameters		
		foreach($tableinfo as $fieldname=>$fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $conn,$dal_info;
		$tableinfo = &$dal_info[$this->m_TableName];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname=>$fld)
		{
			$command='if(isset($this->'.$fld['varname'].')) { ';
			if($fld["key"])
				$command.='$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.='$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.=' }';
			eval($command);
			if(!$fld["key"] && !array_key_exists(strtoupper($fieldname),array_change_key_case($this->Param,CASE_UPPER)))
			{
				foreach($this->Value as $field=>$value)
				{
					if (strtoupper($field)!=strtoupper($fieldname))
						continue;
					$updateValue.= AddFieldWrappers($fieldname)."=".$this->PrepareValue($value,$fld["type"]) . ", ";
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if (strtoupper($field)!=strtoupper($fieldname))
						continue;
					$updateParam.= AddFieldWrappers($fieldname)."=".$this->PrepareValue($value,$fld["type"]) . " and ";
					break;
				}
			}
		}

//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam,0,-5);
		if ($updateValue)
			$updateValue = substr($updateValue,0,-2);
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".AddTableWrappers($this->m_TableName)." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs,$dalSQL,$tableinfo);
		}

//	cleanup
		$this->Reset();
	}

	function FetchByID()
	{
		global $conn,$dal_info;
		$tableinfo = &$dal_info[$this->m_TableName];

		$dal_where="";
		foreach($tableinfo as $fieldname=>$fld)
		{
			$command='if(isset($this->'.$fld['varname'].')) { ';
			$command.='$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.=' }';
			eval($command);
			foreach($this->Param as $field=>$value)
			{
				if (strtoupper($field)!=strtoupper($fieldname))
				continue;
				$dal_where.= AddFieldWrappers($fieldname)."=".$this->PrepareValue($value,$fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where,0,-5);
		$dalSQL = "select * from ".AddTableWrappers($this->m_TableName).$dal_where;
		$rs = db_query($dalSQL,$conn);
		return $rs;
	}
}


class DalRecordset
{
	
	var $m_rs;
	var $m_fields;
	var $m_eof;
	
	function Fields($field="")
	{
		if(!$field)
			return $this->m_fields;
		return $this->Field($field);
	}
	
	function Field($field)
	{
		if($this->m_eof)
			return false;
		foreach($this->m_fields as $name=>$value)
		{
			if(!strcasecmp($name,$field))
				return $value;
		}
		return false;
	}
	function DalRecordset($rs)
	{
		$this->m_rs=$rs;
		$this->MoveNext();
	}
	function EOF()
	{
		return $this->m_eof;
	}
	
	function MoveNext()
	{
		if(!$this->m_eof)
			$this->m_fields=db_fetch_array($this->m_rs);
		$this->m_eof = !$this->m_fields;
		return !$this->m_eof;
	}
}

function cutprefix($table)
{
	$pos=strpos($table,".");
	if($pos===false)
		return $table;
	return substr($table,$pos+1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>