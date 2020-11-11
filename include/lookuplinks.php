<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["funcionario.idCargo"] )) {
			$lookupTableLinks["cargo"]["funcionario.idCargo"] = array();
		}
		$lookupTableLinks["cargo"]["funcionario.idCargo"]["edit"] = array("table" => "funcionario", "field" => "idCargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["funcionario.idDependencia"] )) {
			$lookupTableLinks["dependencia"]["funcionario.idDependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["funcionario.idDependencia"]["edit"] = array("table" => "funcionario", "field" => "idDependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["funcionario.idEvaluador"] )) {
			$lookupTableLinks["funcionario"]["funcionario.idEvaluador"] = array();
		}
		$lookupTableLinks["funcionario"]["funcionario.idEvaluador"]["edit"] = array("table" => "funcionario", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["funcionario.idContrato"] )) {
			$lookupTableLinks["contrato"]["funcionario.idContrato"] = array();
		}
		$lookupTableLinks["contrato"]["funcionario.idContrato"]["edit"] = array("table" => "funcionario", "field" => "idContrato", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["funcionario.idNombramiento"] )) {
			$lookupTableLinks["nombramiento"]["funcionario.idNombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["funcionario.idNombramiento"]["edit"] = array("table" => "funcionario", "field" => "idNombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"] )) {
			$lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"] = array();
		}
		$lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"]["edit"] = array("table" => "funcionario", "field" => "estado_funcionario", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["global_users.id_fk"] )) {
			$lookupTableLinks["funcionario"]["global_users.id_fk"] = array();
		}
		$lookupTableLinks["funcionario"]["global_users.id_fk"]["edit"] = array("table" => "global_users", "field" => "id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_rol_almacen"] ) ) {
			$lookupTableLinks["global_rol_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"] )) {
			$lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"] = array();
		}
		$lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"]["edit"] = array("table" => "global_users", "field" => "global_rol_almacen", "page" => "edit");
		if( !isset( $lookupTableLinks["global_rol_c"] ) ) {
			$lookupTableLinks["global_rol_c"] = array();
		}
		if( !isset( $lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"] )) {
			$lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"] = array();
		}
		$lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"]["edit"] = array("table" => "global_users", "field" => "global_rol_contratos", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["ep_agregada.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["ep_agregada.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["ep_agregada.TIPO"]["edit"] = array("table" => "ep_agregada", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["000_global"] ) ) {
			$lookupTableLinks["000_global"] = array();
		}
		if( !isset( $lookupTableLinks["000_global"]["001_rubro.RUBRO_ID_FK"] )) {
			$lookupTableLinks["000_global"]["001_rubro.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["000_global"]["001_rubro.RUBRO_ID_FK"]["edit"] = array("table" => "001_rubro", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["001_rubro.VIGENCIA"] )) {
			$lookupTableLinks["tparam_vigencia"]["001_rubro.VIGENCIA"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["001_rubro.VIGENCIA"]["edit"] = array("table" => "001_rubro", "field" => "VIGENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["001_rubro.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["001_rubro.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["001_rubro.REC"]["edit"] = array("table" => "001_rubro", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["001_rubro.TIPO_FUENTE"] )) {
			$lookupTableLinks["tparam_fuente"]["001_rubro.TIPO_FUENTE"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["001_rubro.TIPO_FUENTE"]["edit"] = array("table" => "001_rubro", "field" => "TIPO_FUENTE", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["001_rubro.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["001_rubro.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["001_rubro.Dependencia"]["edit"] = array("table" => "001_rubro", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["001_rubro"] ) ) {
			$lookupTableLinks["001_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["001_rubro"]["002_producto.RUBRO_ID_FK"] )) {
			$lookupTableLinks["001_rubro"]["002_producto.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["001_rubro"]["002_producto.RUBRO_ID_FK"]["edit"] = array("table" => "002_producto", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["002_producto.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["002_producto.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["002_producto.REC"]["edit"] = array("table" => "002_producto", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["002_producto.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["002_producto.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["002_producto.Dependencia"]["edit"] = array("table" => "002_producto", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["002_producto.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["002_producto.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["002_producto.UsuarioResp"]["edit"] = array("table" => "002_producto", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["002_producto"] ) ) {
			$lookupTableLinks["002_producto"] = array();
		}
		if( !isset( $lookupTableLinks["002_producto"]["003_actividad.PROD_ID_FK"] )) {
			$lookupTableLinks["002_producto"]["003_actividad.PROD_ID_FK"] = array();
		}
		$lookupTableLinks["002_producto"]["003_actividad.PROD_ID_FK"]["edit"] = array("table" => "003_actividad", "field" => "PROD_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["003_actividad.DEPENDENCIA"] )) {
			$lookupTableLinks["dependencia"]["003_actividad.DEPENDENCIA"] = array();
		}
		$lookupTableLinks["dependencia"]["003_actividad.DEPENDENCIA"]["edit"] = array("table" => "003_actividad", "field" => "DEPENDENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["003_actividad.RESPONSABLE"] )) {
			$lookupTableLinks["global_users"]["003_actividad.RESPONSABLE"] = array();
		}
		$lookupTableLinks["global_users"]["003_actividad.RESPONSABLE"]["edit"] = array("table" => "003_actividad", "field" => "RESPONSABLE", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_uej"] ) ) {
			$lookupTableLinks["tparam_uej"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_uej"]["q_reporte_000_sector.Sector"] )) {
			$lookupTableLinks["tparam_uej"]["q_reporte_000_sector.Sector"] = array();
		}
		$lookupTableLinks["tparam_uej"]["q_reporte_000_sector.Sector"]["search"] = array("table" => "q_reporte_000_sector", "field" => "Sector", "page" => "search");
		if( !isset( $lookupTableLinks["tparam_uej"] ) ) {
			$lookupTableLinks["tparam_uej"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_uej"]["q_reporte_001_sector.UEJ"] )) {
			$lookupTableLinks["tparam_uej"]["q_reporte_001_sector.UEJ"] = array();
		}
		$lookupTableLinks["tparam_uej"]["q_reporte_001_sector.UEJ"]["search"] = array("table" => "q_reporte_001_sector", "field" => "UEJ", "page" => "search");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["q_reporte_002_sector.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["q_reporte_002_sector.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["q_reporte_002_sector.TIPO"]["search"] = array("table" => "q_reporte_002_sector", "field" => "TIPO", "page" => "search");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["q_reporte_002.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["q_reporte_002.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["q_reporte_002.TIPO"]["edit"] = array("table" => "q_reporte_002", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["000_global"] ) ) {
			$lookupTableLinks["000_global"] = array();
		}
		if( !isset( $lookupTableLinks["000_global"]["001_rubro_f.RUBRO_ID_FK"] )) {
			$lookupTableLinks["000_global"]["001_rubro_f.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["000_global"]["001_rubro_f.RUBRO_ID_FK"]["edit"] = array("table" => "001_rubro_f", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_vigencia"] ) ) {
			$lookupTableLinks["tparam_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_vigencia"]["001_rubro_f.VIGENCIA"] )) {
			$lookupTableLinks["tparam_vigencia"]["001_rubro_f.VIGENCIA"] = array();
		}
		$lookupTableLinks["tparam_vigencia"]["001_rubro_f.VIGENCIA"]["edit"] = array("table" => "001_rubro_f", "field" => "VIGENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["001_rubro_f.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["001_rubro_f.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["001_rubro_f.REC"]["edit"] = array("table" => "001_rubro_f", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["001_rubro_f.TIPO_FUENTE"] )) {
			$lookupTableLinks["tparam_fuente"]["001_rubro_f.TIPO_FUENTE"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["001_rubro_f.TIPO_FUENTE"]["edit"] = array("table" => "001_rubro_f", "field" => "TIPO_FUENTE", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["001_rubro_f.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["001_rubro_f.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["001_rubro_f.Dependencia"]["edit"] = array("table" => "001_rubro_f", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["001_rubro"] ) ) {
			$lookupTableLinks["001_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["001_rubro"]["002_producto_f.RUBRO_ID_FK"] )) {
			$lookupTableLinks["001_rubro"]["002_producto_f.RUBRO_ID_FK"] = array();
		}
		$lookupTableLinks["001_rubro"]["002_producto_f.RUBRO_ID_FK"]["edit"] = array("table" => "002_producto_f", "field" => "RUBRO_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuenterec"] ) ) {
			$lookupTableLinks["tparam_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuenterec"]["002_producto_f.REC"] )) {
			$lookupTableLinks["tparam_fuenterec"]["002_producto_f.REC"] = array();
		}
		$lookupTableLinks["tparam_fuenterec"]["002_producto_f.REC"]["edit"] = array("table" => "002_producto_f", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["002_producto_f.Dependencia"] )) {
			$lookupTableLinks["dependencia"]["002_producto_f.Dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["002_producto_f.Dependencia"]["edit"] = array("table" => "002_producto_f", "field" => "Dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["002_producto_f.UsuarioResp"] )) {
			$lookupTableLinks["global_users"]["002_producto_f.UsuarioResp"] = array();
		}
		$lookupTableLinks["global_users"]["002_producto_f.UsuarioResp"]["edit"] = array("table" => "002_producto_f", "field" => "UsuarioResp", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] )) {
			$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] = array();
		}
		$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"]["edit"] = array("table" => "dependencia", "field" => "id_depto_superior", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_recursos_gestor_c.DEP_002"] )) {
			$lookupTableLinks["dependencia"]["q_recursos_gestor_c.DEP_002"] = array();
		}
		$lookupTableLinks["dependencia"]["q_recursos_gestor_c.DEP_002"]["edit"] = array("table" => "q_recursos_gestor_c", "field" => "DEP_002", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_recursos_gestor_c.RESPONSABLE_002"] )) {
			$lookupTableLinks["global_users"]["q_recursos_gestor_c.RESPONSABLE_002"] = array();
		}
		$lookupTableLinks["global_users"]["q_recursos_gestor_c.RESPONSABLE_002"]["edit"] = array("table" => "q_recursos_gestor_c", "field" => "RESPONSABLE_002", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_recursos_gestor_c1.DEP_003"] )) {
			$lookupTableLinks["dependencia"]["q_recursos_gestor_c1.DEP_003"] = array();
		}
		$lookupTableLinks["dependencia"]["q_recursos_gestor_c1.DEP_003"]["edit"] = array("table" => "q_recursos_gestor_c1", "field" => "DEP_003", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["q_recursos_gestor_c1.RESPONSABLE_003"] )) {
			$lookupTableLinks["global_users"]["q_recursos_gestor_c1.RESPONSABLE_003"] = array();
		}
		$lookupTableLinks["global_users"]["q_recursos_gestor_c1.RESPONSABLE_003"]["edit"] = array("table" => "q_recursos_gestor_c1", "field" => "RESPONSABLE_003", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_act_paa"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_act_paa"]["paa_master.ACT_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_act_paa"]["paa_master.ACT_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_act_paa"]["paa_master.ACT_ID"]["edit"] = array("table" => "paa_master", "field" => "ACT_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master.COD_UNSPSC"]["edit"] = array("table" => "paa_master", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master.MES_INICIO"]["edit"] = array("table" => "paa_master", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master.MES_PRESENTA"]["edit"] = array("table" => "paa_master", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master.MODALIDAD"]["edit"] = array("table" => "paa_master", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master.VF"]["edit"] = array("table" => "paa_master", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master.ESTADO_VF"]["edit"] = array("table" => "paa_master", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master.COD_UBICACION"]["edit"] = array("table" => "paa_master", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master.sys_status"]["edit"] = array("table" => "paa_master", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["q_ctrl_saldos_prod_paa"] ) ) {
			$lookupTableLinks["q_ctrl_saldos_prod_paa"] = array();
		}
		if( !isset( $lookupTableLinks["q_ctrl_saldos_prod_paa"]["paa_master_f.PROD_ID"] )) {
			$lookupTableLinks["q_ctrl_saldos_prod_paa"]["paa_master_f.PROD_ID"] = array();
		}
		$lookupTableLinks["q_ctrl_saldos_prod_paa"]["paa_master_f.PROD_ID"]["edit"] = array("table" => "paa_master_f", "field" => "PROD_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_f.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_f.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_f.COD_UNSPSC"]["edit"] = array("table" => "paa_master_f", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_f.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_f.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_f.MES_INICIO"]["edit"] = array("table" => "paa_master_f", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_f.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_f.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_f.MES_PRESENTA"]["edit"] = array("table" => "paa_master_f", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_f.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_f.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_f.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_f", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_f.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_f.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_f.MODALIDAD"]["edit"] = array("table" => "paa_master_f", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_f.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_f.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_f.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_f", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_f.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_f.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_f.VF"]["edit"] = array("table" => "paa_master_f", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_f.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_f.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_f.ESTADO_VF"]["edit"] = array("table" => "paa_master_f", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_f.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_f.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_f.COD_UBICACION"]["edit"] = array("table" => "paa_master_f", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_f.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_f.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_f.sys_status"]["edit"] = array("table" => "paa_master_f", "field" => "sys_status", "page" => "edit");
}

?>