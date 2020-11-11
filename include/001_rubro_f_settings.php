<?php



$tdata001_rubro_f = array();
$tdata001_rubro_f[".searchableFields"] = array();
$tdata001_rubro_f[".ShortName"] = "001_rubro_f";
$tdata001_rubro_f[".OwnerID"] = "";
$tdata001_rubro_f[".OriginalTable"] = "001_rubro";


$tdata001_rubro_f[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata001_rubro_f[".originalPagesByType"] = $tdata001_rubro_f[".pagesByType"];
$tdata001_rubro_f[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata001_rubro_f[".originalPages"] = $tdata001_rubro_f[".pages"];
$tdata001_rubro_f[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata001_rubro_f[".originalDefaultPages"] = $tdata001_rubro_f[".defaultPages"];

//	field labels
$fieldLabels001_rubro_f = array();
$fieldToolTips001_rubro_f = array();
$pageTitles001_rubro_f = array();
$placeHolders001_rubro_f = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels001_rubro_f["Spanish"] = array();
	$fieldToolTips001_rubro_f["Spanish"] = array();
	$placeHolders001_rubro_f["Spanish"] = array();
	$pageTitles001_rubro_f["Spanish"] = array();
	$fieldLabels001_rubro_f["Spanish"]["RUBRO_ID"] = "RUBRO ID";
	$fieldToolTips001_rubro_f["Spanish"]["RUBRO_ID"] = "";
	$placeHolders001_rubro_f["Spanish"]["RUBRO_ID"] = "";
	$fieldLabels001_rubro_f["Spanish"]["VIGENCIA"] = "Vigencia";
	$fieldToolTips001_rubro_f["Spanish"]["VIGENCIA"] = "";
	$placeHolders001_rubro_f["Spanish"]["VIGENCIA"] = "";
	$fieldLabels001_rubro_f["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTips001_rubro_f["Spanish"]["TIPO"] = "";
	$placeHolders001_rubro_f["Spanish"]["TIPO"] = "";
	$fieldLabels001_rubro_f["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTips001_rubro_f["Spanish"]["UEJ"] = "";
	$placeHolders001_rubro_f["Spanish"]["UEJ"] = "";
	$fieldLabels001_rubro_f["Spanish"]["RUBRO"] = "Rubro";
	$fieldToolTips001_rubro_f["Spanish"]["RUBRO"] = "";
	$placeHolders001_rubro_f["Spanish"]["RUBRO"] = "";
	$fieldLabels001_rubro_f["Spanish"]["BPIN"] = "Código";
	$fieldToolTips001_rubro_f["Spanish"]["BPIN"] = "";
	$placeHolders001_rubro_f["Spanish"]["BPIN"] = "";
	$fieldLabels001_rubro_f["Spanish"]["REC"] = "REC";
	$fieldToolTips001_rubro_f["Spanish"]["REC"] = "";
	$placeHolders001_rubro_f["Spanish"]["REC"] = "";
	$fieldLabels001_rubro_f["Spanish"]["FUENTE"] = "Fuente";
	$fieldToolTips001_rubro_f["Spanish"]["FUENTE"] = "";
	$placeHolders001_rubro_f["Spanish"]["FUENTE"] = "";
	$fieldLabels001_rubro_f["Spanish"]["PRESUPUESTO"] = "Presupuesto";
	$fieldToolTips001_rubro_f["Spanish"]["PRESUPUESTO"] = "";
	$placeHolders001_rubro_f["Spanish"]["PRESUPUESTO"] = "";
	$fieldLabels001_rubro_f["Spanish"]["Dependencia"] = "Dirección | Dependencia";
	$fieldToolTips001_rubro_f["Spanish"]["Dependencia"] = "";
	$placeHolders001_rubro_f["Spanish"]["Dependencia"] = "";
	$fieldLabels001_rubro_f["Spanish"]["UsuarioResp"] = "GESTOR";
	$fieldToolTips001_rubro_f["Spanish"]["UsuarioResp"] = "";
	$placeHolders001_rubro_f["Spanish"]["UsuarioResp"] = "";
	$fieldLabels001_rubro_f["Spanish"]["DESCRIPCION"] = "Nombre del proyecto";
	$fieldToolTips001_rubro_f["Spanish"]["DESCRIPCION"] = "";
	$placeHolders001_rubro_f["Spanish"]["DESCRIPCION"] = "";
	$fieldLabels001_rubro_f["Spanish"]["TIPO_FUENTE"] = "Fuente de financiamiento";
	$fieldToolTips001_rubro_f["Spanish"]["TIPO_FUENTE"] = "";
	$placeHolders001_rubro_f["Spanish"]["TIPO_FUENTE"] = "";
	$fieldLabels001_rubro_f["Spanish"]["CATEGORIA"] = "Programa presupuestal";
	$fieldToolTips001_rubro_f["Spanish"]["CATEGORIA"] = "";
	$placeHolders001_rubro_f["Spanish"]["CATEGORIA"] = "";
	$fieldLabels001_rubro_f["Spanish"]["SALDO"] = "Saldo por utilizar";
	$fieldToolTips001_rubro_f["Spanish"]["SALDO"] = "";
	$placeHolders001_rubro_f["Spanish"]["SALDO"] = "";
	$fieldLabels001_rubro_f["Spanish"]["RUBRO_ID_FK"] = "RUBRO ID FK";
	$fieldToolTips001_rubro_f["Spanish"]["RUBRO_ID_FK"] = "";
	$placeHolders001_rubro_f["Spanish"]["RUBRO_ID_FK"] = "";
	$fieldLabels001_rubro_f["Spanish"]["OBJ_GENERAL"] = "Objetivo General";
	$fieldToolTips001_rubro_f["Spanish"]["OBJ_GENERAL"] = "";
	$placeHolders001_rubro_f["Spanish"]["OBJ_GENERAL"] = "";
	$fieldLabels001_rubro_f["Spanish"]["OBJ_ESPECIFICO"] = "Objetivo específico";
	$fieldToolTips001_rubro_f["Spanish"]["OBJ_ESPECIFICO"] = "";
	$placeHolders001_rubro_f["Spanish"]["OBJ_ESPECIFICO"] = "";
	if (count($fieldToolTips001_rubro_f["Spanish"]))
		$tdata001_rubro_f[".isUseToolTips"] = true;
}


	$tdata001_rubro_f[".NCSearch"] = true;



$tdata001_rubro_f[".shortTableName"] = "001_rubro_f";
$tdata001_rubro_f[".nSecOptions"] = 0;

$tdata001_rubro_f[".mainTableOwnerID"] = "";
$tdata001_rubro_f[".entityType"] = 1;

$tdata001_rubro_f[".strOriginalTableName"] = "001_rubro";

	



$tdata001_rubro_f[".showAddInPopup"] = false;

$tdata001_rubro_f[".showEditInPopup"] = false;

$tdata001_rubro_f[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata001_rubro_f[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata001_rubro_f[".listAjax"] = false;
//	temporary
$tdata001_rubro_f[".listAjax"] = false;

	$tdata001_rubro_f[".audit"] = true;

	$tdata001_rubro_f[".locking"] = true;


$pages = $tdata001_rubro_f[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata001_rubro_f[".edit"] = true;
	$tdata001_rubro_f[".afterEditAction"] = 1;
	$tdata001_rubro_f[".closePopupAfterEdit"] = 1;
	$tdata001_rubro_f[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata001_rubro_f[".add"] = true;
$tdata001_rubro_f[".afterAddAction"] = 1;
$tdata001_rubro_f[".closePopupAfterAdd"] = 1;
$tdata001_rubro_f[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata001_rubro_f[".list"] = true;
}



$tdata001_rubro_f[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata001_rubro_f[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata001_rubro_f[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata001_rubro_f[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata001_rubro_f[".printFriendly"] = true;
}



$tdata001_rubro_f[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata001_rubro_f[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata001_rubro_f[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata001_rubro_f[".isUseAjaxSuggest"] = true;

$tdata001_rubro_f[".rowHighlite"] = true;





$tdata001_rubro_f[".ajaxCodeSnippetAdded"] = false;

$tdata001_rubro_f[".buttonsAdded"] = false;

$tdata001_rubro_f[".addPageEvents"] = true;

// use timepicker for search panel
$tdata001_rubro_f[".isUseTimeForSearch"] = false;


$tdata001_rubro_f[".badgeColor"] = "e8926f";


$tdata001_rubro_f[".allSearchFields"] = array();
$tdata001_rubro_f[".filterFields"] = array();
$tdata001_rubro_f[".requiredSearchFields"] = array();

$tdata001_rubro_f[".googleLikeFields"] = array();
$tdata001_rubro_f[".googleLikeFields"][] = "RUBRO_ID";
$tdata001_rubro_f[".googleLikeFields"][] = "RUBRO_ID_FK";
$tdata001_rubro_f[".googleLikeFields"][] = "VIGENCIA";
$tdata001_rubro_f[".googleLikeFields"][] = "UEJ";
$tdata001_rubro_f[".googleLikeFields"][] = "RUBRO";
$tdata001_rubro_f[".googleLikeFields"][] = "DESCRIPCION";
$tdata001_rubro_f[".googleLikeFields"][] = "REC";
$tdata001_rubro_f[".googleLikeFields"][] = "FUENTE";
$tdata001_rubro_f[".googleLikeFields"][] = "TIPO";
$tdata001_rubro_f[".googleLikeFields"][] = "TIPO_FUENTE";
$tdata001_rubro_f[".googleLikeFields"][] = "BPIN";
$tdata001_rubro_f[".googleLikeFields"][] = "PRESUPUESTO";
$tdata001_rubro_f[".googleLikeFields"][] = "SALDO";
$tdata001_rubro_f[".googleLikeFields"][] = "Dependencia";
$tdata001_rubro_f[".googleLikeFields"][] = "UsuarioResp";
$tdata001_rubro_f[".googleLikeFields"][] = "CATEGORIA";
$tdata001_rubro_f[".googleLikeFields"][] = "OBJ_GENERAL";
$tdata001_rubro_f[".googleLikeFields"][] = "OBJ_ESPECIFICO";



$tdata001_rubro_f[".tableType"] = "list";

$tdata001_rubro_f[".printerPageOrientation"] = 0;
$tdata001_rubro_f[".nPrinterPageScale"] = 100;

$tdata001_rubro_f[".nPrinterSplitRecords"] = 40;

$tdata001_rubro_f[".geocodingEnabled"] = false;










$tdata001_rubro_f[".pageSize"] = 20;

$tdata001_rubro_f[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata001_rubro_f[".strOrderBy"] = $tstrOrderBy;

$tdata001_rubro_f[".orderindexes"] = array();

$tdata001_rubro_f[".sqlHead"] = "SELECT RUBRO_ID,  RUBRO_ID_FK,  VIGENCIA,  UEJ,  RUBRO,  DESCRIPCION,  REC,  FUENTE,  TIPO,  TIPO_FUENTE,  BPIN,  PRESUPUESTO,  SALDO,  Dependencia,  UsuarioResp,  CATEGORIA,  OBJ_GENERAL,  OBJ_ESPECIFICO";
$tdata001_rubro_f[".sqlFrom"] = "FROM `001_rubro`";
$tdata001_rubro_f[".sqlWhereExpr"] = "(TIPO =2)";
$tdata001_rubro_f[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata001_rubro_f[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata001_rubro_f[".arrGroupsPerPage"] = $arrGPP;

$tdata001_rubro_f[".highlightSearchResults"] = true;

$tableKeys001_rubro_f = array();
$tableKeys001_rubro_f[] = "RUBRO_ID";
$tdata001_rubro_f[".Keys"] = $tableKeys001_rubro_f;


$tdata001_rubro_f[".hideMobileList"] = array();




//	RUBRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO_ID";
	$fdata["GoodName"] = "RUBRO_ID";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","RUBRO_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "RUBRO_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO_ID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["RUBRO_ID"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "RUBRO_ID";
//	RUBRO_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RUBRO_ID_FK";
	$fdata["GoodName"] = "RUBRO_ID_FK";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","RUBRO_ID_FK");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "RUBRO_ID_FK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO_ID_FK";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "000_global";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"VIGENCIA", 'lookupF'=>"VIGENCIA");
	$edata["autoCompleteFields"][] = array('masterF'=>"UEJ", 'lookupF'=>"UEJ");
	$edata["autoCompleteFields"][] = array('masterF'=>"SALDO", 'lookupF'=>"SALDO");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "RUBRO_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RUBRO_ID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["RUBRO_ID_FK"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "RUBRO_ID_FK";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","VIGENCIA");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "VIGENCIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VIGENCIA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "anio_id";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "anio_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "RUBRO_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["VIGENCIA"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "VIGENCIA";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","UEJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UEJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


		$edata["strEditMask"] = "99-99-99";

	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["UEJ"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","RUBRO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RUBRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "RUBRO_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

		$fdata["parentFilterField"] = "VIGENCIA";


	
	
//end of Filters settings


	$tdata001_rubro_f["RUBRO"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "RUBRO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","DESCRIPCION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["DESCRIPCION"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "DESCRIPCION";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","REC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "REC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REC";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_fuenterec";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "fuenterec_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fuenterec_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["REC"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "REC";
//	FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FUENTE";
	$fdata["GoodName"] = "FUENTE";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","FUENTE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "FUENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUENTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["FUENTE"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "FUENTE";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","TIPO");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "TIPO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["TIPO"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "TIPO";
//	TIPO_FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TIPO_FUENTE";
	$fdata["GoodName"] = "TIPO_FUENTE";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","TIPO_FUENTE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TIPO_FUENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO_FUENTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_fuente";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "fuente_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fuente_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["TIPO_FUENTE"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "TIPO_FUENTE";
//	BPIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "BPIN";
	$fdata["GoodName"] = "BPIN";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","BPIN");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "BPIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BPIN";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=13";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["BPIN"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "BPIN";
//	PRESUPUESTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PRESUPUESTO";
	$fdata["GoodName"] = "PRESUPUESTO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","PRESUPUESTO");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "PRESUPUESTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRESUPUESTO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["PRESUPUESTO"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "PRESUPUESTO";
//	SALDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SALDO";
	$fdata["GoodName"] = "SALDO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","SALDO");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "SALDO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SALDO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["SALDO"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "SALDO";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","Dependencia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Dependencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dependencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["Dependencia"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "Dependencia";
//	UsuarioResp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "UsuarioResp";
	$fdata["GoodName"] = "UsuarioResp";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","UsuarioResp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UsuarioResp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UsuarioResp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["UsuarioResp"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "UsuarioResp";
//	CATEGORIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CATEGORIA";
	$fdata["GoodName"] = "CATEGORIA";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","CATEGORIA");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CATEGORIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CATEGORIA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["CATEGORIA"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "CATEGORIA";
//	OBJ_GENERAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "OBJ_GENERAL";
	$fdata["GoodName"] = "OBJ_GENERAL";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","OBJ_GENERAL");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "OBJ_GENERAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJ_GENERAL";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["OBJ_GENERAL"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "OBJ_GENERAL";
//	OBJ_ESPECIFICO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "OBJ_ESPECIFICO";
	$fdata["GoodName"] = "OBJ_ESPECIFICO";
	$fdata["ownerTable"] = "001_rubro";
	$fdata["Label"] = GetFieldLabel("001_rubro_f","OBJ_ESPECIFICO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "OBJ_ESPECIFICO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJ_ESPECIFICO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata001_rubro_f["OBJ_ESPECIFICO"] = $fdata;
		$tdata001_rubro_f[".searchableFields"][] = "OBJ_ESPECIFICO";


$tables_data["001_rubro_f"]=&$tdata001_rubro_f;
$field_labels["001_rubro_f"] = &$fieldLabels001_rubro_f;
$fieldToolTips["001_rubro_f"] = &$fieldToolTips001_rubro_f;
$placeHolders["001_rubro_f"] = &$placeHolders001_rubro_f;
$page_titles["001_rubro_f"] = &$pageTitles001_rubro_f;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["001_rubro_f"] = array();
//	002_producto_f
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="002_producto_f";
		$detailsParam["dOriginalTable"] = "002_producto";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "002_producto_f";
	$detailsParam["dCaptionTable"] = GetTableCaption("002_producto_f");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["001_rubro_f"][$dIndex] = $detailsParam;

	
		$detailsTablesData["001_rubro_f"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["001_rubro_f"][$dIndex]["masterKeys"][]="RUBRO_ID";

	$detailsTablesData["001_rubro_f"][$dIndex]["masterKeys"][]="VIGENCIA";

	$detailsTablesData["001_rubro_f"][$dIndex]["masterKeys"][]="RUBRO";

	$detailsTablesData["001_rubro_f"][$dIndex]["masterKeys"][]="UEJ";

				$detailsTablesData["001_rubro_f"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["001_rubro_f"][$dIndex]["detailKeys"][]="RUBRO_ID_FK";

		
	$detailsTablesData["001_rubro_f"][$dIndex]["detailKeys"][]="VIGENCIA";

		
	$detailsTablesData["001_rubro_f"][$dIndex]["detailKeys"][]="RUBRO";

		
	$detailsTablesData["001_rubro_f"][$dIndex]["detailKeys"][]="UEJ";

// tables which are master tables for current table (detail)
$masterTablesData["001_rubro_f"] = array();



	
				$strOriginalDetailsTable="000_global";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="000_global_f";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "000_global_f";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["001_rubro_f"][0] = $masterParams;
				$masterTablesData["001_rubro_f"][0]["masterKeys"] = array();
	$masterTablesData["001_rubro_f"][0]["masterKeys"][]="RUBRO_ID";
				$masterTablesData["001_rubro_f"][0]["detailKeys"] = array();
	$masterTablesData["001_rubro_f"][0]["detailKeys"][]="RUBRO_ID_FK";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_001_rubro_f()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO_ID,  RUBRO_ID_FK,  VIGENCIA,  UEJ,  RUBRO,  DESCRIPCION,  REC,  FUENTE,  TIPO,  TIPO_FUENTE,  BPIN,  PRESUPUESTO,  SALDO,  Dependencia,  UsuarioResp,  CATEGORIA,  OBJ_GENERAL,  OBJ_ESPECIFICO";
$proto0["m_strFrom"] = "FROM `001_rubro`";
$proto0["m_strWhere"] = "(TIPO =2)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "TIPO =2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=2";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO_ID",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto6["m_sql"] = "RUBRO_ID";
$proto6["m_srcTableName"] = "001_rubro_f";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO_ID_FK",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto8["m_sql"] = "RUBRO_ID_FK";
$proto8["m_srcTableName"] = "001_rubro_f";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto10["m_sql"] = "VIGENCIA";
$proto10["m_srcTableName"] = "001_rubro_f";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto12["m_sql"] = "UEJ";
$proto12["m_srcTableName"] = "001_rubro_f";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto14["m_sql"] = "RUBRO";
$proto14["m_srcTableName"] = "001_rubro_f";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto16["m_sql"] = "DESCRIPCION";
$proto16["m_srcTableName"] = "001_rubro_f";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto18["m_sql"] = "REC";
$proto18["m_srcTableName"] = "001_rubro_f";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto20["m_sql"] = "FUENTE";
$proto20["m_srcTableName"] = "001_rubro_f";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto22["m_sql"] = "TIPO";
$proto22["m_srcTableName"] = "001_rubro_f";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO_FUENTE",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto24["m_sql"] = "TIPO_FUENTE";
$proto24["m_srcTableName"] = "001_rubro_f";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "BPIN",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto26["m_sql"] = "BPIN";
$proto26["m_srcTableName"] = "001_rubro_f";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto28["m_sql"] = "PRESUPUESTO";
$proto28["m_srcTableName"] = "001_rubro_f";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SALDO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto30["m_sql"] = "SALDO";
$proto30["m_srcTableName"] = "001_rubro_f";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto32["m_sql"] = "Dependencia";
$proto32["m_srcTableName"] = "001_rubro_f";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioResp",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto34["m_sql"] = "UsuarioResp";
$proto34["m_srcTableName"] = "001_rubro_f";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CATEGORIA",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto36["m_sql"] = "CATEGORIA";
$proto36["m_srcTableName"] = "001_rubro_f";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ_GENERAL",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto38["m_sql"] = "OBJ_GENERAL";
$proto38["m_srcTableName"] = "001_rubro_f";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ_ESPECIFICO",
	"m_strTable" => "001_rubro",
	"m_srcTableName" => "001_rubro_f"
));

$proto40["m_sql"] = "OBJ_ESPECIFICO";
$proto40["m_srcTableName"] = "001_rubro_f";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "001_rubro";
$proto43["m_srcTableName"] = "001_rubro_f";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "RUBRO_ID";
$proto43["m_columns"][] = "RUBRO_ID_FK";
$proto43["m_columns"][] = "VIGENCIA";
$proto43["m_columns"][] = "UEJ";
$proto43["m_columns"][] = "RUBRO";
$proto43["m_columns"][] = "DESCRIPCION";
$proto43["m_columns"][] = "REC";
$proto43["m_columns"][] = "FUENTE";
$proto43["m_columns"][] = "TIPO";
$proto43["m_columns"][] = "TIPO_FUENTE";
$proto43["m_columns"][] = "BPIN";
$proto43["m_columns"][] = "PRESUPUESTO";
$proto43["m_columns"][] = "SALDO";
$proto43["m_columns"][] = "Dependencia";
$proto43["m_columns"][] = "UsuarioResp";
$proto43["m_columns"][] = "CATEGORIA";
$proto43["m_columns"][] = "OBJ_GENERAL";
$proto43["m_columns"][] = "OBJ_ESPECIFICO";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "`001_rubro`";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "001_rubro_f";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="001_rubro_f";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_001_rubro_f = createSqlQuery_001_rubro_f();


	
										;

																		

$tdata001_rubro_f[".sqlquery"] = $queryData_001_rubro_f;

include_once(getabspath("include/001_rubro_f_events.php"));
$tableEvents["001_rubro_f"] = new eventclass_001_rubro_f;
$tdata001_rubro_f[".hasEvents"] = true;

?>