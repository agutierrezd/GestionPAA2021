<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events



//	onscreen events

		$this->events["GetTablePermissions"]["003_actividad"] = true;


		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




	function GetTablePermissions($permissions, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "003_actividad")
		{
			if ($_SESSION['actividad_add'] == TRUE ) {
		$permissions = str_replace("A", "", $permissions); // Quita  "A"
		//$permissions = str_replace("D", "", $permissions); // Quita  "D"
		//$permissions = str_replace("E", "", $permissions); // Quita  "E"
}

// Place event code here.
// Use "Add Action" button to add code snippets.

return $permissions;;
		}
		return $permissions;
	}
}
?>
