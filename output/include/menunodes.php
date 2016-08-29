<?php
	// create menu nodes arr
	$menuNodesObject->menuNodes = array();
		
	if(!$menuNodesObject->isAdminTable()){
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "Datos de Paciente (Recepción)";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Datos de Paciente (Recepción)";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "2";
		$menuNode["name"] = "Datos personales";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Datos personales";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "3";
		$menuNode["name"] = "Datos personales";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "persona";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Datos personales";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "4";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "municipio";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Municipio";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "5";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "departamento";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Departamento";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "6";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "genero";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Genero";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "7";
		$menuNode["name"] = "Administración";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Administración";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "8";
		$menuNode["name"] = "Programar Consulta";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "consulta";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "7";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Programar Consulta";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "9";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "hospitalizacion";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "7";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Hospitalizacion";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "10";
		$menuNode["name"] = "Asignación de empleados a una cirugía";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "empleados_cirugia";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "7";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Asignación de empleados a una cirugía";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "11";
		$menuNode["name"] = "Pacientes (servicio médico)";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Pacientes (servicio médico)";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "12";
		$menuNode["name"] = "Paciente";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "persona";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "11";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Paciente";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "13";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "diagnostico";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "11";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Diagnostico";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "14";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "solicitud_medicamento";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "11";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Solicitud Medicamento";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "15";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "solicitud_servicio";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "11";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Solicitud Servicio";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "16";
		$menuNode["name"] = "Programar Cirugía";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "cirugia";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "11";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Programar Cirugía";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "17";
		$menuNode["name"] = "Facturación Clientes";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Facturación Clientes";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "18";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "factura_consulta";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "17";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Factura Consulta";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "19";
		$menuNode["name"] = "Abonos de Clientes";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "abonos_clientes";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "17";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Abonos de Clientes";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "20";
		$menuNode["name"] = "Cobro por consulta";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "cobro_consulta";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "17";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Cobro por consulta";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "21";
		$menuNode["name"] = "Cobro por insumos consumidos";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "cobro_insumos";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "17";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Cobro por insumos consumidos";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "22";
		$menuNode["name"] = "Cobro por servicios adquiridos";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "cobro_servicios";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "17";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Cobro por servicios adquiridos";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "23";
		$menuNode["name"] = "Cobro por hospitalización";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "cobro_hospitalizacion";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "17";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Cobro por hospitalización";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "24";
		$menuNode["name"] = "Cobro por cirugía";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "cobro_cirugia";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "17";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Cobro por cirugía";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "25";
		$menuNode["name"] = "Control de Inventario";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Control de Inventario";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "26";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "insumos";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "25";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Insumos";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "27";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "lotes";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "25";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Lotes";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "28";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "proveedores";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "25";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Proveedores";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "29";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "factura_compra";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "25";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Factura Compra";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "30";
		$menuNode["name"] = "Detalle de Compra";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "detalle_compra";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "25";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Detalle de Compra";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "31";
		$menuNode["name"] = "Abonos a Proveedores";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "abonos_proveedores";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "25";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Abonos a Proveedores";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "32";
		$menuNode["name"] = "Descarga de Inventario Expirado";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "descarga_inventario_expirado";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "25";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Descarga de Inventario Expirado";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "33";
		$menuNode["name"] = "Miscelanea";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Miscelanea";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "34";
		$menuNode["name"] = "Empleados";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "33";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Empleados";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "35";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "empleado";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "34";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Empleado";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "36";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "puesto";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "34";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Puesto";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "37";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "usuarios";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "34";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Usuarios";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "38";
		$menuNode["name"] = "Servicios";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "33";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Servicios";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "39";
		$menuNode["name"] = "Tipos de consulta";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "tipo_consulta";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "38";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Tipos de consulta";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "40";
		$menuNode["name"] = "Tipos de cirugía";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "tipo_cirugia";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "38";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Tipos de cirugía";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "41";
		$menuNode["name"] = "Tipos de servicio";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "servicio";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "38";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Tipos de servicio";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "42";
		$menuNode["name"] = "Detalles de cirugía";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "detalle_cirugia";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "38";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Detalles de cirugía";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "43";
		$menuNode["name"] = "Detalle de servicio";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "detalle_servicio";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "38";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Detalle de servicio";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "44";
		$menuNode["name"] = "Instalaciones";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "33";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Instalaciones";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "45";
		$menuNode["name"] = "Ambientes";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "ambiente";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "44";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Ambientes";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "46";
		$menuNode["name"] = "Tipo de Ambientes";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "tipo_ambiente";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "44";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Tipo de Ambientes";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "47";
		$menuNode["name"] = "Reportes";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Reportes";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "48";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Estado de cuenta de los pacientes";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "47";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Estado de cuenta de los pacientes";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "49";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Historial de compras";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "47";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Historial de compras";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "50";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Historial de ventas";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "47";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Historial de ventas";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "51";
		$menuNode["name"] = "Productos próximos a caducar";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Producto_Caducados";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "47";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Productos próximos a caducar";
		$menuNodesObject->menuNodes[] = $menuNode;
			if($menuNodesObject->pageType == PAGE_MENU && IsAdmin())
		{
					$menuNode = array();
			$menuNode["id"] = "AAS";
			$menuNode["name"] = "-------";
			$menuNode["href"] = "";
			$menuNode["type"] = "Separator";
			$menuNode["table"] = "";
			$menuNode["style"] = "";
			$menuNode["title"] = "-------";
			$menuNode["params"] = "";
			$menuNode["parent"] = "0";
			$menuNode["nameType"] = "Text";
			$menuNode["linkType"] = "None";
			$menuNode["pageType"] = "";
			$menuNode["openType"] = "None";	
			$menuNodesObject->menuNodes[] = $menuNode;
			//Admin area Link
			$menuNode = array();
			$menuNode["id"] = "AA";
			$menuNode["name"] = "Area Admin";
			$menuNode["href"] = "admin_rights_list.php";
			$menuNode["type"] = "Leaf";
			$menuNode["table"] = "";
			$menuNode["style"] = "";
			$menuNode["title"] = "Area Admin";
			$menuNode["params"] = "";
			$menuNode["parent"] = "0";
			$menuNode["nameType"] = "Text";
			$menuNode["linkType"] = "External";
			$menuNode["pageType"] = "AdminArea";
			$menuNode["openType"] = "None";	
			$menuNodesObject->menuNodes[] = $menuNode;
		}
	}else{
		//Admin Area menu items
		// admin_rights item
		$menuNode = array();
		$menuNode["id"] = "admin_rights";
		$menuNode["name"] = "admin_rights";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_rights";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Permisos";
		$menuNode["href"] = "admin_rights_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
		// admin_members item
		$menuNode = array();
		$menuNode["id"] = "admin_members";
		$menuNode["name"] = "admin_members";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_members";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Asignar usuarios a grupos";
		$menuNode["href"] = "admin_members_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
		// admin_users item
		$menuNode = array();
		$menuNode["id"] = "admin_users";
		$menuNode["name"] = "admin_users";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_users";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Añadir/Editar usuarios";
		$menuNode["href"] = "admin_users_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
	}	
	
?>
