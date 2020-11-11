<?php



$tdataq_reporte_002 = array();
$tdataq_reporte_002[".searchableFields"] = array();
$tdataq_reporte_002[".ShortName"] = "q_reporte_002";
$tdataq_reporte_002[".OwnerID"] = "";
$tdataq_reporte_002[".OriginalTable"] = "q_reporte_002";


$tdataq_reporte_002[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_reporte_002[".originalPagesByType"] = $tdataq_reporte_002[".pagesByType"];
$tdataq_reporte_002[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_reporte_002[".originalPages"] = $tdataq_reporte_002[".pages"];
$tdataq_reporte_002[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_reporte_002[".originalDefaultPages"] = $tdataq_reporte_002[".defaultPages"];

//	field labels
$fieldLabelsq_reporte_002 = array();
$fieldToolTipsq_reporte_002 = array();
$pageTitlesq_reporte_002 = array();
$placeHoldersq_reporte_002 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_reporte_002["Spanish"] = array();
	$fieldToolTipsq_reporte_002["Spanish"] = array();
	$placeHoldersq_reporte_002["Spanish"] = array();
	$pageTitlesq_reporte_002["Spanish"] = array();
	$fieldLabelsq_reporte_002["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_reporte_002["Spanish"]["UEJ"] = "";
	$placeHoldersq_reporte_002["Spanish"]["UEJ"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["SECTOR"] = "SECTOR";
	$fieldToolTipsq_reporte_002["Spanish"]["SECTOR"] = "";
	$placeHoldersq_reporte_002["Spanish"]["SECTOR"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["QTYREGISTROS"] = "NUM. REGISTROS";
	$fieldToolTipsq_reporte_002["Spanish"]["QTYREGISTROS"] = "";
	$placeHoldersq_reporte_002["Spanish"]["QTYREGISTROS"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["NOMBRE_UEJ"] = "NOMBRE UEJ";
	$fieldToolTipsq_reporte_002["Spanish"]["NOMBRE_UEJ"] = "";
	$placeHoldersq_reporte_002["Spanish"]["NOMBRE_UEJ"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsq_reporte_002["Spanish"]["TIPO"] = "";
	$placeHoldersq_reporte_002["Spanish"]["TIPO"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["TOTVIGENTE"] = "TOT. VIGENTE";
	$fieldToolTipsq_reporte_002["Spanish"]["TOTVIGENTE"] = "";
	$placeHoldersq_reporte_002["Spanish"]["TOTVIGENTE"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["TOTCOMPROMISO"] = "TOT. COMPROMISO";
	$fieldToolTipsq_reporte_002["Spanish"]["TOTCOMPROMISO"] = "";
	$placeHoldersq_reporte_002["Spanish"]["TOTCOMPROMISO"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["TOTOBLIGACION"] = "TOT. OBLIGACION";
	$fieldToolTipsq_reporte_002["Spanish"]["TOTOBLIGACION"] = "";
	$placeHoldersq_reporte_002["Spanish"]["TOTOBLIGACION"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["TOTPAGOS"] = "TOT. PAGOS";
	$fieldToolTipsq_reporte_002["Spanish"]["TOTPAGOS"] = "";
	$placeHoldersq_reporte_002["Spanish"]["TOTPAGOS"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["ULTFECHACORTE"] = "ULTFECHACORTE";
	$fieldToolTipsq_reporte_002["Spanish"]["ULTFECHACORTE"] = "";
	$placeHoldersq_reporte_002["Spanish"]["ULTFECHACORTE"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["ANIOCORTE"] = "ANIOCORTE";
	$fieldToolTipsq_reporte_002["Spanish"]["ANIOCORTE"] = "";
	$placeHoldersq_reporte_002["Spanish"]["ANIOCORTE"] = "";
	$fieldLabelsq_reporte_002["Spanish"]["MESCORTE"] = "MESCORTE";
	$fieldToolTipsq_reporte_002["Spanish"]["MESCORTE"] = "";
	$placeHoldersq_reporte_002["Spanish"]["MESCORTE"] = "";
	if (count($fieldToolTipsq_reporte_002["Spanish"]))
		$tdataq_reporte_002[".isUseToolTips"] = true;
}


	$tdataq_reporte_002[".NCSearch"] = true;



$tdataq_reporte_002[".shortTableName"] = "q_reporte_002";
$tdataq_reporte_002[".nSecOptions"] = 0;

$tdataq_reporte_002[".mainTableOwnerID"] = "";
$tdataq_reporte_002[".entityType"] = 0;

$tdataq_reporte_002[".strOriginalTableName"] = "q_reporte_002";

	



$tdataq_reporte_002[".showAddInPopup"] = false;

$tdataq_reporte_002[".showEditInPopup"] = false;

$tdataq_reporte_002[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_reporte_002[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_reporte_002[".listAjax"] = false;
//	temporary
$tdataq_reporte_002[".listAjax"] = false;

	$tdataq_reporte_002[".audit"] = false;

	$tdataq_reporte_002[".locking"] = false;


$pages = $tdataq_reporte_002[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_reporte_002[".edit"] = true;
	$tdataq_reporte_002[".afterEditAction"] = 1;
	$tdataq_reporte_002[".closePopupAfterEdit"] = 1;
	$tdataq_reporte_002[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_reporte_002[".add"] = true;
$tdataq_reporte_002[".afterAddAction"] = 1;
$tdataq_reporte_002[".closePopupAfterAdd"] = 1;
$tdataq_reporte_002[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_reporte_002[".list"] = true;
}



$tdataq_reporte_002[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_reporte_002[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_reporte_002[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_reporte_002[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_reporte_002[".printFriendly"] = true;
}



$tdataq_reporte_002[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_reporte_002[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_reporte_002[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_reporte_002[".isUseAjaxSuggest"] = true;

$tdataq_reporte_002[".rowHighlite"] = true;





$tdataq_reporte_002[".ajaxCodeSnippetAdded"] = false;

$tdataq_reporte_002[".buttonsAdded"] = false;

$tdataq_reporte_002[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_reporte_002[".isUseTimeForSearch"] = false;


$tdataq_reporte_002[".badgeColor"] = "5f9ea0";


$tdataq_reporte_002[".allSearchFields"] = array();
$tdataq_reporte_002[".filterFields"] = array();
$tdataq_reporte_002[".requiredSearchFields"] = array();

$tdataq_reporte_002[".googleLikeFields"] = array();
$tdataq_reporte_002[".googleLikeFields"][] = "UEJ";
$tdataq_reporte_002[".googleLikeFields"][] = "SECTOR";
$tdataq_reporte_002[".googleLikeFields"][] = "QTYREGISTROS";
$tdataq_reporte_002[".googleLikeFields"][] = "NOMBRE UEJ";
$tdataq_reporte_002[".googleLikeFields"][] = "TIPO";
$tdataq_reporte_002[".googleLikeFields"][] = "TOTVIGENTE";
$tdataq_reporte_002[".googleLikeFields"][] = "TOTCOMPROMISO";
$tdataq_reporte_002[".googleLikeFields"][] = "TOTOBLIGACION";
$tdataq_reporte_002[".googleLikeFields"][] = "TOTPAGOS";
$tdataq_reporte_002[".googleLikeFields"][] = "ULTFECHACORTE";
$tdataq_reporte_002[".googleLikeFields"][] = "ANIOCORTE";
$tdataq_reporte_002[".googleLikeFields"][] = "MESCORTE";



$tdataq_reporte_002[".tableType"] = "list";

$tdataq_reporte_002[".printerPageOrientation"] = 0;
$tdataq_reporte_002[".nPrinterPageScale"] = 100;

$tdataq_reporte_002[".nPrinterSplitRecords"] = 40;

$tdataq_reporte_002[".geocodingEnabled"] = false;










$tdataq_reporte_002[".pageSize"] = 20;

$tdataq_reporte_002[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_reporte_002[".strOrderBy"] = $tstrOrderBy;

$tdataq_reporte_002[".orderindexes"] = array();

$tdataq_reporte_002[".sqlHead"] = "SELECT UEJ,  	SECTOR,  	QTYREGISTROS,  	`NOMBRE UEJ`,  	TIPO,  	TOTVIGENTE,  	TOTCOMPROMISO,  	TOTOBLIGACION,  	TOTPAGOS,  	ULTFECHACORTE,  	ANIOCORTE,  	MESCORTE";
$tdataq_reporte_002[".sqlFrom"] = "FROM q_reporte_002";
$tdataq_reporte_002[".sqlWhereExpr"] = "";
$tdataq_reporte_002[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_reporte_002[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_reporte_002[".arrGroupsPerPage"] = $arrGPP;

$tdataq_reporte_002[".highlightSearchResults"] = true;

$tableKeysq_reporte_002 = array();
$tdataq_reporte_002[".Keys"] = $tableKeysq_reporte_002;


$tdataq_reporte_002[".hideMobileList"] = array();




//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","UEJ");
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


	$tdataq_reporte_002["UEJ"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "UEJ";
//	SECTOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SECTOR";
	$fdata["GoodName"] = "SECTOR";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","SECTOR");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SECTOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SECTOR";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdataq_reporte_002["SECTOR"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "SECTOR";
//	QTYREGISTROS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "QTYREGISTROS";
	$fdata["GoodName"] = "QTYREGISTROS";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","QTYREGISTROS");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "QTYREGISTROS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QTYREGISTROS";

	
	
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


	$tdataq_reporte_002["QTYREGISTROS"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "QTYREGISTROS";
//	NOMBRE UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NOMBRE UEJ";
	$fdata["GoodName"] = "NOMBRE_UEJ";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","NOMBRE_UEJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOMBRE UEJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`NOMBRE UEJ`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_reporte_002["NOMBRE UEJ"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "NOMBRE UEJ";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","TIPO");
	$fdata["FieldType"] = 200;

	
	
	
			

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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fuente_name";

	

	
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


	$tdataq_reporte_002["TIPO"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "TIPO";
//	TOTVIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TOTVIGENTE";
	$fdata["GoodName"] = "TOTVIGENTE";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","TOTVIGENTE");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "TOTVIGENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTVIGENTE";

	
	
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


	$tdataq_reporte_002["TOTVIGENTE"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "TOTVIGENTE";
//	TOTCOMPROMISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TOTCOMPROMISO";
	$fdata["GoodName"] = "TOTCOMPROMISO";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","TOTCOMPROMISO");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "TOTCOMPROMISO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTCOMPROMISO";

	
	
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


	$tdataq_reporte_002["TOTCOMPROMISO"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "TOTCOMPROMISO";
//	TOTOBLIGACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TOTOBLIGACION";
	$fdata["GoodName"] = "TOTOBLIGACION";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","TOTOBLIGACION");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "TOTOBLIGACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTOBLIGACION";

	
	
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


	$tdataq_reporte_002["TOTOBLIGACION"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "TOTOBLIGACION";
//	TOTPAGOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TOTPAGOS";
	$fdata["GoodName"] = "TOTPAGOS";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","TOTPAGOS");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "TOTPAGOS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTPAGOS";

	
	
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


	$tdataq_reporte_002["TOTPAGOS"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "TOTPAGOS";
//	ULTFECHACORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ULTFECHACORTE";
	$fdata["GoodName"] = "ULTFECHACORTE";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","ULTFECHACORTE");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "ULTFECHACORTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ULTFECHACORTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataq_reporte_002["ULTFECHACORTE"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "ULTFECHACORTE";
//	ANIOCORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ANIOCORTE";
	$fdata["GoodName"] = "ANIOCORTE";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","ANIOCORTE");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ANIOCORTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ANIOCORTE";

	
	
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


	$tdataq_reporte_002["ANIOCORTE"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "ANIOCORTE";
//	MESCORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "MESCORTE";
	$fdata["GoodName"] = "MESCORTE";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002","MESCORTE");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "MESCORTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MESCORTE";

	
	
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


	$tdataq_reporte_002["MESCORTE"] = $fdata;
		$tdataq_reporte_002[".searchableFields"][] = "MESCORTE";


$tables_data["q_reporte_002"]=&$tdataq_reporte_002;
$field_labels["q_reporte_002"] = &$fieldLabelsq_reporte_002;
$fieldToolTips["q_reporte_002"] = &$fieldToolTipsq_reporte_002;
$placeHolders["q_reporte_002"] = &$placeHoldersq_reporte_002;
$page_titles["q_reporte_002"] = &$pageTitlesq_reporte_002;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_reporte_002"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_reporte_002"] = array();



	
				$strOriginalDetailsTable="q_reporte_001";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_reporte_001_sector";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_reporte_001_sector";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["q_reporte_002"][0] = $masterParams;
				$masterTablesData["q_reporte_002"][0]["masterKeys"] = array();
	$masterTablesData["q_reporte_002"][0]["masterKeys"][]="UEJ";
				$masterTablesData["q_reporte_002"][0]["masterKeys"][]="SECTOR";
				$masterTablesData["q_reporte_002"][0]["detailKeys"] = array();
	$masterTablesData["q_reporte_002"][0]["detailKeys"][]="UEJ";
				$masterTablesData["q_reporte_002"][0]["detailKeys"][]="SECTOR";
		
	
				$strOriginalDetailsTable="q_reporte_002";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_reporte_002_sector";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_reporte_002_sector";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["q_reporte_002"][1] = $masterParams;
				$masterTablesData["q_reporte_002"][1]["masterKeys"] = array();
	$masterTablesData["q_reporte_002"][1]["masterKeys"][]="UEJ";
				$masterTablesData["q_reporte_002"][1]["masterKeys"][]="SECTOR";
				$masterTablesData["q_reporte_002"][1]["detailKeys"] = array();
	$masterTablesData["q_reporte_002"][1]["detailKeys"][]="UEJ";
				$masterTablesData["q_reporte_002"][1]["detailKeys"][]="SECTOR";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_reporte_002()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UEJ,  	SECTOR,  	QTYREGISTROS,  	`NOMBRE UEJ`,  	TIPO,  	TOTVIGENTE,  	TOTCOMPROMISO,  	TOTOBLIGACION,  	TOTPAGOS,  	ULTFECHACORTE,  	ANIOCORTE,  	MESCORTE";
$proto0["m_strFrom"] = "FROM q_reporte_002";
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
	"m_strName" => "UEJ",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto6["m_sql"] = "UEJ";
$proto6["m_srcTableName"] = "q_reporte_002";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SECTOR",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto8["m_sql"] = "SECTOR";
$proto8["m_srcTableName"] = "q_reporte_002";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "QTYREGISTROS",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto10["m_sql"] = "QTYREGISTROS";
$proto10["m_srcTableName"] = "q_reporte_002";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE UEJ",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto12["m_sql"] = "`NOMBRE UEJ`";
$proto12["m_srcTableName"] = "q_reporte_002";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto14["m_sql"] = "TIPO";
$proto14["m_srcTableName"] = "q_reporte_002";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTVIGENTE",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto16["m_sql"] = "TOTVIGENTE";
$proto16["m_srcTableName"] = "q_reporte_002";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTCOMPROMISO",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto18["m_sql"] = "TOTCOMPROMISO";
$proto18["m_srcTableName"] = "q_reporte_002";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTOBLIGACION",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto20["m_sql"] = "TOTOBLIGACION";
$proto20["m_srcTableName"] = "q_reporte_002";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTPAGOS",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto22["m_sql"] = "TOTPAGOS";
$proto22["m_srcTableName"] = "q_reporte_002";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ULTFECHACORTE",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto24["m_sql"] = "ULTFECHACORTE";
$proto24["m_srcTableName"] = "q_reporte_002";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ANIOCORTE",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto26["m_sql"] = "ANIOCORTE";
$proto26["m_srcTableName"] = "q_reporte_002";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "MESCORTE",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002"
));

$proto28["m_sql"] = "MESCORTE";
$proto28["m_srcTableName"] = "q_reporte_002";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "q_reporte_002";
$proto31["m_srcTableName"] = "q_reporte_002";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "UEJ";
$proto31["m_columns"][] = "SECTOR";
$proto31["m_columns"][] = "QTYREGISTROS";
$proto31["m_columns"][] = "NOMBRE UEJ";
$proto31["m_columns"][] = "TIPO";
$proto31["m_columns"][] = "TOTVIGENTE";
$proto31["m_columns"][] = "TOTCOMPROMISO";
$proto31["m_columns"][] = "TOTOBLIGACION";
$proto31["m_columns"][] = "TOTPAGOS";
$proto31["m_columns"][] = "ULTFECHACORTE";
$proto31["m_columns"][] = "ANIOCORTE";
$proto31["m_columns"][] = "MESCORTE";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "q_reporte_002";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "q_reporte_002";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_reporte_002";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_reporte_002 = createSqlQuery_q_reporte_002();


	
										;

												

$tdataq_reporte_002[".sqlquery"] = $queryData_q_reporte_002;

$tableEvents["q_reporte_002"] = new eventsBase;
$tdataq_reporte_002[".hasEvents"] = false;

?>