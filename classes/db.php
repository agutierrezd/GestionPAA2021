<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}

	public static function Select($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		$sql = "SELECT * FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$queryResult = DB::CurrentConnection()->querySilent( $sql );

		return $queryResult;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$sql = "DELETE FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$ret = DB::CurrentConnection()->execSilent( $sql );

		return $ret;
	}

	public static function Insert($table, $data)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$iFields = "";
		$iValues = "";
		$blobs = array();
		foreach($data as $fieldname => $value)
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$iFields.= DB::CurrentConnection()->addFieldWrappers( $field["name"] ).",";
			$iValues.= DB::_prepareValue($value, $field["type"]) . ",";

			if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if( $iFields != "" && $iValues != "" )
		{
			$iFields = substr($iFields, 0, -1);
			$iValues = substr($iValues, 0, -1);
			$sql = "INSERT INTO ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." (".$iFields.") values (".$iValues.")";

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$updateValues = array();
		$blobs = array();
		foreach( $data as $fieldname => $value )
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$prepareFieldName = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			$prepareValue = DB::_prepareValue($value, $field["type"]);
			$updateValues[] = $prepareFieldName."=".$prepareValue;

			if ( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if ( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if ( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if ( count($updateValues) > 0 )
		{
			$updateSQL = implode(",", $updateValues);
			$sql = "UPDATE ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." SET ". $updateSQL . $whereSql;

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	protected static function _getWhereSql($userConditions, $founedfields)
	{
		if( !is_array( $userConditions ) )
		{
			$whereSql = trim( $userConditions );
			if( $whereSql != "")
				$whereSql = " WHERE " . $whereSql;
			return $whereSql;
		}

		$conditions = array();
		foreach($userConditions as $fieldname => $value)
		{
			$field = getArrayElementNC($founedfields, $fieldname);
			// user field not found in table
			if ( is_null($field) )
				continue;

			$wrappedField = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			if ( is_null($value) )
			{
				$conditions[] = $wrappedField . " IS NULL";
			}
			else
			{
				$conditions[] = $wrappedField . "=" . DB::_prepareValue($value, $field["type"]);
			}
		}

		$whereSql = "";
		if( count($conditions) > 0 )
		{
			$whereSql .= " WHERE " . implode(" AND ", $conditions);
		}

		return $whereSql;
	}

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	protected static function _findDalTable( $table )
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList();

		//	exact match
		foreach( $dalTables[$conn->connId] as $t )
		{
			if( $t["schema"] == $tableName["schema"] && $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( strtoupper( $t["schema"] ) == $tableName["schema"] && strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	protected static function _getTableInfo($table)
	{
		global $dal_info, $tableinfo_cache;
		$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList()
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		if( $dalTables[ $conn->connId ] )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "edl_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "cargo", "varname" => "edl_at_127_0_0_1__cargo", "altvarname" => "cargo", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato", "varname" => "edl_at_127_0_0_1__contrato", "altvarname" => "contrato", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "dependencia", "varname" => "edl_at_127_0_0_1__dependencia", "altvarname" => "dependencia", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "dependencias_001", "varname" => "edl_at_127_0_0_1__dependencias_001", "altvarname" => "dependencias_001", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "funcionario", "varname" => "edl_at_127_0_0_1__funcionario", "altvarname" => "funcionario", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "nombramiento", "varname" => "edl_at_127_0_0_1__nombramiento", "altvarname" => "nombramiento", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_estados", "varname" => "edl_at_127_0_0_1__tparam_estados", "altvarname" => "tparam_estados", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl at 127.0.0.1");
		}
		if( "dbct_at_127_0_0_1" == $conn->connId )
		{
		}
		if( "dbusers_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "divipola", "varname" => "dbusers_at_127_0_0_1__divipola", "altvarname" => "divipola", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionpaa_ver_103_audit", "varname" => "dbusers_at_127_0_0_1__gestionpaa_ver_103_audit", "altvarname" => "gestionpaa_ver_103_audit", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionpaa_ver_103_locking", "varname" => "dbusers_at_127_0_0_1__gestionpaa_ver_103_locking", "altvarname" => "gestionpaa_ver_103_locking", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionpaa_ver_103_uggroups", "varname" => "dbusers_at_127_0_0_1__gestionpaa_ver_103_uggroups", "altvarname" => "gestionpaa_ver_103_uggroups", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionpaa_ver_103_ugmembers", "varname" => "dbusers_at_127_0_0_1__gestionpaa_ver_103_ugmembers", "altvarname" => "gestionpaa_ver_103_ugmembers", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionpaa_ver_103_ugrights", "varname" => "dbusers_at_127_0_0_1__gestionpaa_ver_103_ugrights", "altvarname" => "gestionpaa_ver_103_ugrights", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_rol_almacen", "varname" => "dbusers_at_127_0_0_1__global_rol_almacen", "altvarname" => "global_rol_almacen", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_rol_c", "varname" => "dbusers_at_127_0_0_1__global_rol_c", "altvarname" => "global_rol_c", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_users", "varname" => "dbusers_at_127_0_0_1__global_users", "altvarname" => "global_users", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		}
		if( "sep2_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "000_global", "varname" => "sep2_at_127_0_0_1__tbl000_global", "altvarname" => "tbl000_global", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "001_rubro", "varname" => "sep2_at_127_0_0_1__tbl001_rubro", "altvarname" => "tbl001_rubro", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "002_producto", "varname" => "sep2_at_127_0_0_1__tbl002_producto", "altvarname" => "tbl002_producto", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "003_actividad", "varname" => "sep2_at_127_0_0_1__tbl003_actividad", "altvarname" => "tbl003_actividad", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "ep_agregada", "varname" => "sep2_at_127_0_0_1__ep_agregada", "altvarname" => "ep_agregada", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "ep_compromisos", "varname" => "sep2_at_127_0_0_1__ep_compromisos", "altvarname" => "ep_compromisos", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "ep_obligaciones", "varname" => "sep2_at_127_0_0_1__ep_obligaciones", "altvarname" => "ep_obligaciones", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_ctrl_saldos_act_paa", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldos_act_paa", "altvarname" => "q_ctrl_saldos_act_paa", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_ctrl_saldos_prod_paa", "varname" => "sep2_at_127_0_0_1__q_ctrl_saldos_prod_paa", "altvarname" => "q_ctrl_saldos_prod_paa", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_recursos_gestor_c", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_c", "altvarname" => "q_recursos_gestor_c", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_recursos_gestor_c1", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_c1", "altvarname" => "q_recursos_gestor_c1", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_recursos_gestor_f1", "varname" => "sep2_at_127_0_0_1__q_recursos_gestor_f1", "altvarname" => "q_recursos_gestor_f1", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_reporte_000", "varname" => "sep2_at_127_0_0_1__q_reporte_000", "altvarname" => "q_reporte_000", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_reporte_001", "varname" => "sep2_at_127_0_0_1__q_reporte_001", "altvarname" => "q_reporte_001", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "q_reporte_002", "varname" => "sep2_at_127_0_0_1__q_reporte_002", "altvarname" => "q_reporte_002", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "rep_prg001_catalogopresupuestal", "varname" => "sep2_at_127_0_0_1__rep_prg001_catalogopresupuestal", "altvarname" => "rep_prg001_catalogopresupuestal", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "secop", "varname" => "sep2_at_127_0_0_1__secop", "altvarname" => "secop", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_fuente", "varname" => "sep2_at_127_0_0_1__tparam_fuente", "altvarname" => "tparam_fuente", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_fuenterec", "varname" => "sep2_at_127_0_0_1__tparam_fuenterec", "altvarname" => "tparam_fuenterec", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_uej", "varname" => "sep2_at_127_0_0_1__tparam_uej", "altvarname" => "tparam_uej", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_vigencia", "varname" => "sep2_at_127_0_0_1__tparam_vigencia", "altvarname" => "tparam_vigencia", "connId" => "sep2_at_127_0_0_1", "schema" => "", "connName" => "sep2 at 127.0.0.1");
		}
		if( "mincit_global_at_127_0_0_1" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "global_duracion", "varname" => "mincit_global_at_127_0_0_1__global_duracion", "altvarname" => "global_duracion", "connId" => "mincit_global_at_127_0_0_1", "schema" => "", "connName" => "mincit_global at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_estado", "varname" => "mincit_global_at_127_0_0_1__global_estado", "altvarname" => "global_estado", "connId" => "mincit_global_at_127_0_0_1", "schema" => "", "connName" => "mincit_global at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_estvf", "varname" => "mincit_global_at_127_0_0_1__global_estvf", "altvarname" => "global_estvf", "connId" => "mincit_global_at_127_0_0_1", "schema" => "", "connName" => "mincit_global at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_fuenterec", "varname" => "mincit_global_at_127_0_0_1__global_fuenterec", "altvarname" => "global_fuenterec", "connId" => "mincit_global_at_127_0_0_1", "schema" => "", "connName" => "mincit_global at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_meses", "varname" => "mincit_global_at_127_0_0_1__global_meses", "altvarname" => "global_meses", "connId" => "mincit_global_at_127_0_0_1", "schema" => "", "connName" => "mincit_global at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_modalidad", "varname" => "mincit_global_at_127_0_0_1__global_modalidad", "altvarname" => "global_modalidad", "connId" => "mincit_global_at_127_0_0_1", "schema" => "", "connName" => "mincit_global at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_ubicacion", "varname" => "mincit_global_at_127_0_0_1__global_ubicacion", "altvarname" => "global_ubicacion", "connId" => "mincit_global_at_127_0_0_1", "schema" => "", "connName" => "mincit_global at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_unspsc", "varname" => "mincit_global_at_127_0_0_1__global_unspsc", "altvarname" => "global_unspsc", "connId" => "mincit_global_at_127_0_0_1", "schema" => "", "connName" => "mincit_global at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_vf", "varname" => "mincit_global_at_127_0_0_1__global_vf", "altvarname" => "global_vf", "connId" => "mincit_global_at_127_0_0_1", "schema" => "", "connName" => "mincit_global at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "paa_master", "varname" => "mincit_global_at_127_0_0_1__paa_master", "altvarname" => "paa_master", "connId" => "mincit_global_at_127_0_0_1", "schema" => "", "connName" => "mincit_global at 127.0.0.1");
		}
	}


	public static function PrepareSQL($sql)
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();
		$context = RunnerContext::current();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);

			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = $context->getValue($token);
			}

			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			if ($conn->positionQuoted($sql, $offset))
				$repl["insert"] = $conn->addSlashes($val);
			else
				$repl["insert"] = DB::prepareNumberValue($val);

			$replacements[] = $repl;
		}

		//	do replacements
		$offsetShift = 0;
		foreach ($replacements as $r) {
			$sql = substr_replace($sql, $r["insert"], $r["offset"] + $offsetShift, $r["len"]);
			$offsetShift += strlen($r["insert"]) - $r["len"];
		}
		return $sql;
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	protected static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{(.*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				//	first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = (string)$value;
		if(is_numeric($strvalue))
			return str_replace(",",".",$strvalue);
		return 0;
	}

}

?>