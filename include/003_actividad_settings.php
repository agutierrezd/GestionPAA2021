<?php



$tdata003_actividad = array();
$tdata003_actividad[".searchableFields"] = array();
$tdata003_actividad[".ShortName"] = "003_actividad";
$tdata003_actividad[".OwnerID"] = "";
$tdata003_actividad[".OriginalTable"] = "003_actividad";


$tdata003_actividad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata003_actividad[".originalPagesByType"] = $tdata003_actividad[".pagesByType"];
$tdata003_actividad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata003_actividad[".originalPages"] = $tdata003_actividad[".pages"];
$tdata003_actividad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata003_actividad[".originalDefaultPages"] = $tdata003_actividad[".defaultPages"];

//	field labels
$fieldLabels003_actividad = array();
$fieldToolTips003_actividad = array();
$pageTitles003_actividad = array();
$placeHolders003_actividad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels003_actividad["Spanish"] = array();
	$fieldToolTips003_actividad["Spanish"] = array();
	$placeHolders003_actividad["Spanish"] = array();
	$pageTitles003_actividad["Spanish"] = array();
	$fieldLabels003_actividad["Spanish"]["ACT_ID"] = "ACT ID";
	$fieldToolTips003_actividad["Spanish"]["ACT_ID"] = "";
	$placeHolders003_actividad["Spanish"]["ACT_ID"] = "";
	$fieldLabels003_actividad["Spanish"]["PROD_ID_FK"] = "PROD ID FK";
	$fieldToolTips003_actividad["Spanish"]["PROD_ID_FK"] = "";
	$placeHolders003_actividad["Spanish"]["PROD_ID_FK"] = "";
	$fieldLabels003_actividad["Spanish"]["RUBRO_ID_FK"] = "RUBRO ID FK";
	$fieldToolTips003_actividad["Spanish"]["RUBRO_ID_FK"] = "";
	$placeHolders003_actividad["Spanish"]["RUBRO_ID_FK"] = "";
	$fieldLabels003_actividad["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTips003_actividad["Spanish"]["VIGENCIA"] = "";
	$placeHolders003_actividad["Spanish"]["VIGENCIA"] = "";
	$fieldLabels003_actividad["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTips003_actividad["Spanish"]["TIPO"] = "";
	$placeHolders003_actividad["Spanish"]["TIPO"] = "";
	$fieldLabels003_actividad["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTips003_actividad["Spanish"]["UEJ"] = "";
	$placeHolders003_actividad["Spanish"]["UEJ"] = "";
	$fieldLabels003_actividad["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTips003_actividad["Spanish"]["RUBRO"] = "";
	$placeHolders003_actividad["Spanish"]["RUBRO"] = "";
	$fieldLabels003_actividad["Spanish"]["PRODUCTO"] = "PRODUCTO";
	$fieldToolTips003_actividad["Spanish"]["PRODUCTO"] = "";
	$placeHolders003_actividad["Spanish"]["PRODUCTO"] = "";
	$fieldLabels003_actividad["Spanish"]["ACTIVIDAD"] = "ACTIVIDAD";
	$fieldToolTips003_actividad["Spanish"]["ACTIVIDAD"] = "";
	$placeHolders003_actividad["Spanish"]["ACTIVIDAD"] = "";
	$fieldLabels003_actividad["Spanish"]["META"] = "META";
	$fieldToolTips003_actividad["Spanish"]["META"] = "";
	$placeHolders003_actividad["Spanish"]["META"] = "";
	$fieldLabels003_actividad["Spanish"]["RECURSOS_ASIGNADOS"] = "RECURSOS ASIGNADOS";
	$fieldToolTips003_actividad["Spanish"]["RECURSOS_ASIGNADOS"] = "";
	$placeHolders003_actividad["Spanish"]["RECURSOS_ASIGNADOS"] = "";
	$fieldLabels003_actividad["Spanish"]["DEPENDENCIA"] = "DEPENDENCIA";
	$fieldToolTips003_actividad["Spanish"]["DEPENDENCIA"] = "";
	$placeHolders003_actividad["Spanish"]["DEPENDENCIA"] = "";
	$fieldLabels003_actividad["Spanish"]["RESPONSABLE"] = "RESPONSABLE";
	$fieldToolTips003_actividad["Spanish"]["RESPONSABLE"] = "";
	$placeHolders003_actividad["Spanish"]["RESPONSABLE"] = "";
	$fieldLabels003_actividad["Spanish"]["SALDO"] = "SALDO POR UTILIZAR";
	$fieldToolTips003_actividad["Spanish"]["SALDO"] = "";
	$placeHolders003_actividad["Spanish"]["SALDO"] = "";
	if (count($fieldToolTips003_actividad["Spanish"]))
		$tdata003_actividad[".isUseToolTips"] = true;
}


	$tdata003_actividad[".NCSearch"] = true;



$tdata003_actividad[".shortTableName"] = "003_actividad";
$tdata003_actividad[".nSecOptions"] = 0;

$tdata003_actividad[".mainTableOwnerID"] = "";
$tdata003_actividad[".entityType"] = 0;

$tdata003_actividad[".strOriginalTableName"] = "003_actividad";

	



$tdata003_actividad[".showAddInPopup"] = false;

$tdata003_actividad[".showEditInPopup"] = false;

$tdata003_actividad[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata003_actividad[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata003_actividad[".listAjax"] = false;
//	temporary
$tdata003_actividad[".listAjax"] = false;

	$tdata003_actividad[".audit"] = false;

	$tdata003_actividad[".locking"] = false;


$pages = $tdata003_actividad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata003_actividad[".edit"] = true;
	$tdata003_actividad[".afterEditAction"] = 1;
	$tdata003_actividad[".closePopupAfterEdit"] = 1;
	$tdata003_actividad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata003_actividad[".add"] = true;
$tdata003_actividad[".afterAddAction"] = 1;
$tdata003_actividad[".closePopupAfterAdd"] = 1;
$tdata003_actividad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata003_actividad[".list"] = true;
}



$tdata003_actividad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata003_actividad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata003_actividad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata003_actividad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata003_actividad[".printFriendly"] = true;
}



$tdata003_actividad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata003_actividad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata003_actividad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata003_actividad[".isUseAjaxSuggest"] = true;

$tdata003_actividad[".rowHighlite"] = true;





$tdata003_actividad[".ajaxCodeSnippetAdded"] = false;

$tdata003_actividad[".buttonsAdded"] = false;

$tdata003_actividad[".addPageEvents"] = false;

// use timepicker for search panel
$tdata003_actividad[".isUseTimeForSearch"] = false;


$tdata003_actividad[".badgeColor"] = "0000ff";


$tdata003_actividad[".allSearchFields"] = array();
$tdata003_actividad[".filterFields"] = array();
$tdata003_actividad[".requiredSearchFields"] = array();

$tdata003_actividad[".googleLikeFields"] = array();
$tdata003_actividad[".googleLikeFields"][] = "ACT_ID";
$tdata003_actividad[".googleLikeFields"][] = "PROD_ID_FK";
$tdata003_actividad[".googleLikeFields"][] = "RUBRO_ID_FK";
$tdata003_actividad[".googleLikeFields"][] = "VIGENCIA";
$tdata003_actividad[".googleLikeFields"][] = "TIPO";
$tdata003_actividad[".googleLikeFields"][] = "UEJ";
$tdata003_actividad[".googleLikeFields"][] = "RUBRO";
$tdata003_actividad[".googleLikeFields"][] = "PRODUCTO";
$tdata003_actividad[".googleLikeFields"][] = "ACTIVIDAD";
$tdata003_actividad[".googleLikeFields"][] = "META";
$tdata003_actividad[".googleLikeFields"][] = "RECURSOS_ASIGNADOS";
$tdata003_actividad[".googleLikeFields"][] = "SALDO";
$tdata003_actividad[".googleLikeFields"][] = "DEPENDENCIA";
$tdata003_actividad[".googleLikeFields"][] = "RESPONSABLE";



$tdata003_actividad[".tableType"] = "list";

$tdata003_actividad[".printerPageOrientation"] = 0;
$tdata003_actividad[".nPrinterPageScale"] = 100;

$tdata003_actividad[".nPrinterSplitRecords"] = 40;

$tdata003_actividad[".geocodingEnabled"] = false;










$tdata003_actividad[".pageSize"] = 20;

$tdata003_actividad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata003_actividad[".strOrderBy"] = $tstrOrderBy;

$tdata003_actividad[".orderindexes"] = array();

$tdata003_actividad[".sqlHead"] = "SELECT ACT_ID,  	PROD_ID_FK,  	RUBRO_ID_FK,  	VIGENCIA,  	TIPO,  	UEJ,  	RUBRO,  	PRODUCTO,  	ACTIVIDAD,  	META,  	RECURSOS_ASIGNADOS,  	SALDO,  	DEPENDENCIA,  	RESPONSABLE";
$tdata003_actividad[".sqlFrom"] = "FROM `003_actividad`";
$tdata003_actividad[".sqlWhereExpr"] = "";
$tdata003_actividad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata003_actividad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata003_actividad[".arrGroupsPerPage"] = $arrGPP;

$tdata003_actividad[".highlightSearchResults"] = true;

$tableKeys003_actividad = array();
$tableKeys003_actividad[] = "ACT_ID";
$tdata003_actividad[".Keys"] = $tableKeys003_actividad;


$tdata003_actividad[".hideMobileList"] = array();




//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","ACT_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ACT_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_ID";

	
	
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


	$tdata003_actividad["ACT_ID"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "ACT_ID";
//	PROD_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PROD_ID_FK";
	$fdata["GoodName"] = "PROD_ID_FK";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","PROD_ID_FK");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "PROD_ID_FK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_ID_FK";

	
	
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
	$edata["LookupTable"] = "002_producto";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"RUBRO_ID_FK", 'lookupF'=>"RUBRO_ID_FK");
	$edata["autoCompleteFields"][] = array('masterF'=>"VIGENCIA", 'lookupF'=>"VIGENCIA");
	$edata["autoCompleteFields"][] = array('masterF'=>"TIPO", 'lookupF'=>"TIPO");
	$edata["autoCompleteFields"][] = array('masterF'=>"UEJ", 'lookupF'=>"UEJ");
	$edata["autoCompleteFields"][] = array('masterF'=>"RUBRO", 'lookupF'=>"RUBRO");
	$edata["autoCompleteFields"][] = array('masterF'=>"PRODUCTO", 'lookupF'=>"PRODUCTO");
	$edata["autoCompleteFields"][] = array('masterF'=>"SALDO", 'lookupF'=>"SALDO");
	$edata["autoCompleteFields"][] = array('masterF'=>"DEPENDENCIA", 'lookupF'=>"Dependencia");
	$edata["autoCompleteFields"][] = array('masterF'=>"RESPONSABLE", 'lookupF'=>"UsuarioResp");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PROD_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PROD_ID";

	

	
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


	$tdata003_actividad["PROD_ID_FK"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "PROD_ID_FK";
//	RUBRO_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RUBRO_ID_FK";
	$fdata["GoodName"] = "RUBRO_ID_FK";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","RUBRO_ID_FK");
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


	$tdata003_actividad["RUBRO_ID_FK"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "RUBRO_ID_FK";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","VIGENCIA");
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


	$tdata003_actividad["VIGENCIA"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "VIGENCIA";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","TIPO");
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


	$tdata003_actividad["TIPO"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "TIPO";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","UEJ");
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


	$tdata003_actividad["UEJ"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","RUBRO");
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


	$tdata003_actividad["RUBRO"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "RUBRO";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","PRODUCTO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "PRODUCTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRODUCTO";

	
	
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


	$tdata003_actividad["PRODUCTO"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "PRODUCTO";
//	ACTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ACTIVIDAD";
	$fdata["GoodName"] = "ACTIVIDAD";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","ACTIVIDAD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ACTIVIDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTIVIDAD";

	
	
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


	$tdata003_actividad["ACTIVIDAD"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "ACTIVIDAD";
//	META
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "META";
	$fdata["GoodName"] = "META";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","META");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "META";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "META";

	
	
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


	$tdata003_actividad["META"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "META";
//	RECURSOS_ASIGNADOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RECURSOS_ASIGNADOS";
	$fdata["GoodName"] = "RECURSOS_ASIGNADOS";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","RECURSOS_ASIGNADOS");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "RECURSOS_ASIGNADOS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RECURSOS_ASIGNADOS";

	
	
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


	$tdata003_actividad["RECURSOS_ASIGNADOS"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "RECURSOS_ASIGNADOS";
//	SALDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SALDO";
	$fdata["GoodName"] = "SALDO";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","SALDO");
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


	$tdata003_actividad["SALDO"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "SALDO";
//	DEPENDENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEPENDENCIA";
	$fdata["GoodName"] = "DEPENDENCIA";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","DEPENDENCIA");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "DEPENDENCIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEPENDENCIA";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "RESPONSABLE";

	
	
	
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


	$tdata003_actividad["DEPENDENCIA"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "DEPENDENCIA";
//	RESPONSABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RESPONSABLE";
	$fdata["GoodName"] = "RESPONSABLE";
	$fdata["ownerTable"] = "003_actividad";
	$fdata["Label"] = GetFieldLabel("003_actividad","RESPONSABLE");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "RESPONSABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE";

	
	
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
	$edata["LookupTable"] = "global_users";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "usr_nombresfull";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "DEPENDENCIA", "lookup" => "usr_dep" );

	
	

	
	
	
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


	$tdata003_actividad["RESPONSABLE"] = $fdata;
		$tdata003_actividad[".searchableFields"][] = "RESPONSABLE";


$tables_data["003_actividad"]=&$tdata003_actividad;
$field_labels["003_actividad"] = &$fieldLabels003_actividad;
$fieldToolTips["003_actividad"] = &$fieldToolTips003_actividad;
$placeHolders["003_actividad"] = &$placeHolders003_actividad;
$page_titles["003_actividad"] = &$pageTitles003_actividad;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["003_actividad"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["003_actividad"] = array();



	
				$strOriginalDetailsTable="002_producto";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="002_producto";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "002_producto";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["003_actividad"][0] = $masterParams;
				$masterTablesData["003_actividad"][0]["masterKeys"] = array();
	$masterTablesData["003_actividad"][0]["masterKeys"][]="PROD_ID";
				$masterTablesData["003_actividad"][0]["detailKeys"] = array();
	$masterTablesData["003_actividad"][0]["detailKeys"][]="PROD_ID_FK";
		
	
				$strOriginalDetailsTable="q_recursos_gestor_c";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_recursos_gestor_c";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_recursos_gestor_c";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["003_actividad"][1] = $masterParams;
				$masterTablesData["003_actividad"][1]["masterKeys"] = array();
	$masterTablesData["003_actividad"][1]["masterKeys"][]="PROD_ID";
				$masterTablesData["003_actividad"][1]["detailKeys"] = array();
	$masterTablesData["003_actividad"][1]["detailKeys"][]="PROD_ID_FK";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_003_actividad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ACT_ID,  	PROD_ID_FK,  	RUBRO_ID_FK,  	VIGENCIA,  	TIPO,  	UEJ,  	RUBRO,  	PRODUCTO,  	ACTIVIDAD,  	META,  	RECURSOS_ASIGNADOS,  	SALDO,  	DEPENDENCIA,  	RESPONSABLE";
$proto0["m_strFrom"] = "FROM `003_actividad`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_strName" => "ACT_ID",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto6["m_sql"] = "ACT_ID";
$proto6["m_srcTableName"] = "003_actividad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_ID_FK",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto8["m_sql"] = "PROD_ID_FK";
$proto8["m_srcTableName"] = "003_actividad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO_ID_FK",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto10["m_sql"] = "RUBRO_ID_FK";
$proto10["m_srcTableName"] = "003_actividad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto12["m_sql"] = "VIGENCIA";
$proto12["m_srcTableName"] = "003_actividad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto14["m_sql"] = "TIPO";
$proto14["m_srcTableName"] = "003_actividad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto16["m_sql"] = "UEJ";
$proto16["m_srcTableName"] = "003_actividad";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto18["m_sql"] = "RUBRO";
$proto18["m_srcTableName"] = "003_actividad";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto20["m_sql"] = "PRODUCTO";
$proto20["m_srcTableName"] = "003_actividad";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTIVIDAD",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto22["m_sql"] = "ACTIVIDAD";
$proto22["m_srcTableName"] = "003_actividad";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "META",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto24["m_sql"] = "META";
$proto24["m_srcTableName"] = "003_actividad";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "RECURSOS_ASIGNADOS",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto26["m_sql"] = "RECURSOS_ASIGNADOS";
$proto26["m_srcTableName"] = "003_actividad";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "SALDO",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto28["m_sql"] = "SALDO";
$proto28["m_srcTableName"] = "003_actividad";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEPENDENCIA",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto30["m_sql"] = "DEPENDENCIA";
$proto30["m_srcTableName"] = "003_actividad";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE",
	"m_strTable" => "003_actividad",
	"m_srcTableName" => "003_actividad"
));

$proto32["m_sql"] = "RESPONSABLE";
$proto32["m_srcTableName"] = "003_actividad";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "003_actividad";
$proto35["m_srcTableName"] = "003_actividad";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "ACT_ID";
$proto35["m_columns"][] = "PROD_ID_FK";
$proto35["m_columns"][] = "RUBRO_ID_FK";
$proto35["m_columns"][] = "VIGENCIA";
$proto35["m_columns"][] = "TIPO";
$proto35["m_columns"][] = "UEJ";
$proto35["m_columns"][] = "RUBRO";
$proto35["m_columns"][] = "PRODUCTO";
$proto35["m_columns"][] = "ACTIVIDAD";
$proto35["m_columns"][] = "META";
$proto35["m_columns"][] = "RECURSOS_ASIGNADOS";
$proto35["m_columns"][] = "SALDO";
$proto35["m_columns"][] = "DEPENDENCIA";
$proto35["m_columns"][] = "RESPONSABLE";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "`003_actividad`";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "003_actividad";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="003_actividad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_003_actividad = createSqlQuery_003_actividad();


	
										;

														

$tdata003_actividad[".sqlquery"] = $queryData_003_actividad;

include_once(getabspath("include/003_actividad_events.php"));
$tableEvents["003_actividad"] = new eventclass_003_actividad;
$tdata003_actividad[".hasEvents"] = true;

?>