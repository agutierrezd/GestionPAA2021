<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}





require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/001_rubro_events.php"));
$tableEvents["001_rubro"] = new eventclass_001_rubro;
include_once(getabspath("include/002_producto_events.php"));
$tableEvents["002_producto"] = new eventclass_002_producto;
include_once(getabspath("include/003_actividad_events.php"));
$tableEvents["003_actividad"] = new eventclass_003_actividad;
include_once(getabspath("include/000_global_events.php"));
$tableEvents["000_global"] = new eventclass_000_global;
include_once(getabspath("include/001_rubro_f_events.php"));
$tableEvents["001_rubro_f"] = new eventclass_001_rubro_f;
include_once(getabspath("include/000_global_f_events.php"));
$tableEvents["000_global_f"] = new eventclass_000_global_f;
include_once(getabspath("include/002_producto_f_events.php"));
$tableEvents["002_producto_f"] = new eventclass_002_producto_f;
include_once(getabspath("include/paa_master_events.php"));
$tableEvents["paa_master"] = new eventclass_paa_master;
include_once(getabspath("include/paa_master_f_events.php"));
$tableEvents["paa_master_f"] = new eventclass_paa_master_f;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>