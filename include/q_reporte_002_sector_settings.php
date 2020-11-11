<?php



$tdataq_reporte_002_sector = array();
$tdataq_reporte_002_sector[".searchableFields"] = array();
$tdataq_reporte_002_sector[".ShortName"] = "q_reporte_002_sector";
$tdataq_reporte_002_sector[".OwnerID"] = "";
$tdataq_reporte_002_sector[".OriginalTable"] = "q_reporte_002";


$tdataq_reporte_002_sector[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdataq_reporte_002_sector[".originalPagesByType"] = $tdataq_reporte_002_sector[".pagesByType"];
$tdataq_reporte_002_sector[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdataq_reporte_002_sector[".originalPages"] = $tdataq_reporte_002_sector[".pages"];
$tdataq_reporte_002_sector[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdataq_reporte_002_sector[".originalDefaultPages"] = $tdataq_reporte_002_sector[".defaultPages"];

//	field labels
$fieldLabelsq_reporte_002_sector = array();
$fieldToolTipsq_reporte_002_sector = array();
$pageTitlesq_reporte_002_sector = array();
$placeHoldersq_reporte_002_sector = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_reporte_002_sector["Spanish"] = array();
	$fieldToolTipsq_reporte_002_sector["Spanish"] = array();
	$placeHoldersq_reporte_002_sector["Spanish"] = array();
	$pageTitlesq_reporte_002_sector["Spanish"] = array();
	$fieldLabelsq_reporte_002_sector["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["UEJ"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["UEJ"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["SECTOR"] = "SECTOR";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["SECTOR"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["SECTOR"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["QTYREGISTROS"] = "QTYREGISTROS";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["QTYREGISTROS"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["QTYREGISTROS"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["NOMBRE_UEJ"] = "NOMBRE UEJ";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["NOMBRE_UEJ"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["NOMBRE_UEJ"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["TIPO"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["TIPO"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["TOTVIGENTE"] = "VIGENTE";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["TOTVIGENTE"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["TOTVIGENTE"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["TOTCOMPROMISO"] = "COMPROMISO";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["TOTCOMPROMISO"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["TOTCOMPROMISO"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["TOTOBLIGACION"] = "OBLIGACION";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["TOTOBLIGACION"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["TOTOBLIGACION"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["TOTPAGOS"] = "PAGOS";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["TOTPAGOS"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["TOTPAGOS"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["ULTFECHACORTE"] = "ULTFECHACORTE";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["ULTFECHACORTE"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["ULTFECHACORTE"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["ANIOCORTE"] = "ANIOCORTE";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["ANIOCORTE"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["ANIOCORTE"] = "";
	$fieldLabelsq_reporte_002_sector["Spanish"]["MESCORTE"] = "MESCORTE";
	$fieldToolTipsq_reporte_002_sector["Spanish"]["MESCORTE"] = "";
	$placeHoldersq_reporte_002_sector["Spanish"]["MESCORTE"] = "";
	if (count($fieldToolTipsq_reporte_002_sector["Spanish"]))
		$tdataq_reporte_002_sector[".isUseToolTips"] = true;
}


	$tdataq_reporte_002_sector[".NCSearch"] = true;

	$tdataq_reporte_002_sector[".ChartRefreshTime"] = 0;


$tdataq_reporte_002_sector[".shortTableName"] = "q_reporte_002_sector";
$tdataq_reporte_002_sector[".nSecOptions"] = 0;

$tdataq_reporte_002_sector[".mainTableOwnerID"] = "";
$tdataq_reporte_002_sector[".entityType"] = 3;

$tdataq_reporte_002_sector[".strOriginalTableName"] = "q_reporte_002";

	



$tdataq_reporte_002_sector[".showAddInPopup"] = false;

$tdataq_reporte_002_sector[".showEditInPopup"] = false;

$tdataq_reporte_002_sector[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_reporte_002_sector[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_reporte_002_sector[".listAjax"] = false;
//	temporary
$tdataq_reporte_002_sector[".listAjax"] = false;

	$tdataq_reporte_002_sector[".audit"] = false;

	$tdataq_reporte_002_sector[".locking"] = false;


$pages = $tdataq_reporte_002_sector[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_reporte_002_sector[".edit"] = true;
	$tdataq_reporte_002_sector[".afterEditAction"] = 1;
	$tdataq_reporte_002_sector[".closePopupAfterEdit"] = 1;
	$tdataq_reporte_002_sector[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_reporte_002_sector[".add"] = true;
$tdataq_reporte_002_sector[".afterAddAction"] = 1;
$tdataq_reporte_002_sector[".closePopupAfterAdd"] = 1;
$tdataq_reporte_002_sector[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_reporte_002_sector[".list"] = true;
}



$tdataq_reporte_002_sector[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_reporte_002_sector[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_reporte_002_sector[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_reporte_002_sector[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_reporte_002_sector[".printFriendly"] = true;
}



$tdataq_reporte_002_sector[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_reporte_002_sector[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_reporte_002_sector[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_reporte_002_sector[".isUseAjaxSuggest"] = true;






$tdataq_reporte_002_sector[".ajaxCodeSnippetAdded"] = false;

$tdataq_reporte_002_sector[".buttonsAdded"] = false;

$tdataq_reporte_002_sector[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_reporte_002_sector[".isUseTimeForSearch"] = false;


$tdataq_reporte_002_sector[".badgeColor"] = "6493ea";


$tdataq_reporte_002_sector[".allSearchFields"] = array();
$tdataq_reporte_002_sector[".filterFields"] = array();
$tdataq_reporte_002_sector[".requiredSearchFields"] = array();

$tdataq_reporte_002_sector[".googleLikeFields"] = array();
$tdataq_reporte_002_sector[".googleLikeFields"][] = "UEJ";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "SECTOR";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "QTYREGISTROS";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "NOMBRE UEJ";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "TIPO";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "TOTVIGENTE";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "TOTCOMPROMISO";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "TOTOBLIGACION";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "TOTPAGOS";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "ULTFECHACORTE";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "ANIOCORTE";
$tdataq_reporte_002_sector[".googleLikeFields"][] = "MESCORTE";



$tdataq_reporte_002_sector[".tableType"] = "chart";

$tdataq_reporte_002_sector[".printerPageOrientation"] = 0;
$tdataq_reporte_002_sector[".nPrinterPageScale"] = 100;

$tdataq_reporte_002_sector[".nPrinterSplitRecords"] = 40;

$tdataq_reporte_002_sector[".geocodingEnabled"] = false;



// chart settings
$tdataq_reporte_002_sector[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_reporte_002_sector[".strOrderBy"] = $tstrOrderBy;

$tdataq_reporte_002_sector[".orderindexes"] = array();

$tdataq_reporte_002_sector[".sqlHead"] = "SELECT UEJ,  	SECTOR,  	QTYREGISTROS,  	`NOMBRE UEJ`,  	TIPO,  	TOTVIGENTE,  	TOTCOMPROMISO,  	TOTOBLIGACION,  	TOTPAGOS,  	ULTFECHACORTE,  	ANIOCORTE,  	MESCORTE";
$tdataq_reporte_002_sector[".sqlFrom"] = "FROM q_reporte_002";
$tdataq_reporte_002_sector[".sqlWhereExpr"] = "";
$tdataq_reporte_002_sector[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_reporte_002_sector[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_reporte_002_sector[".arrGroupsPerPage"] = $arrGPP;

$tdataq_reporte_002_sector[".highlightSearchResults"] = true;

$tableKeysq_reporte_002_sector = array();
$tdataq_reporte_002_sector[".Keys"] = $tableKeysq_reporte_002_sector;


$tdataq_reporte_002_sector[".hideMobileList"] = array();




//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","UEJ");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["UEJ"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "UEJ";
//	SECTOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SECTOR";
	$fdata["GoodName"] = "SECTOR";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","SECTOR");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["SECTOR"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "SECTOR";
//	QTYREGISTROS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "QTYREGISTROS";
	$fdata["GoodName"] = "QTYREGISTROS";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","QTYREGISTROS");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["QTYREGISTROS"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "QTYREGISTROS";
//	NOMBRE UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NOMBRE UEJ";
	$fdata["GoodName"] = "NOMBRE_UEJ";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","NOMBRE_UEJ");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["NOMBRE UEJ"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "NOMBRE UEJ";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","TIPO");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["TIPO"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "TIPO";
//	TOTVIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TOTVIGENTE";
	$fdata["GoodName"] = "TOTVIGENTE";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","TOTVIGENTE");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["TOTVIGENTE"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "TOTVIGENTE";
//	TOTCOMPROMISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TOTCOMPROMISO";
	$fdata["GoodName"] = "TOTCOMPROMISO";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","TOTCOMPROMISO");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["TOTCOMPROMISO"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "TOTCOMPROMISO";
//	TOTOBLIGACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TOTOBLIGACION";
	$fdata["GoodName"] = "TOTOBLIGACION";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","TOTOBLIGACION");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["TOTOBLIGACION"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "TOTOBLIGACION";
//	TOTPAGOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TOTPAGOS";
	$fdata["GoodName"] = "TOTPAGOS";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","TOTPAGOS");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["TOTPAGOS"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "TOTPAGOS";
//	ULTFECHACORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ULTFECHACORTE";
	$fdata["GoodName"] = "ULTFECHACORTE";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","ULTFECHACORTE");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["ULTFECHACORTE"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "ULTFECHACORTE";
//	ANIOCORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ANIOCORTE";
	$fdata["GoodName"] = "ANIOCORTE";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","ANIOCORTE");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["ANIOCORTE"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "ANIOCORTE";
//	MESCORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "MESCORTE";
	$fdata["GoodName"] = "MESCORTE";
	$fdata["ownerTable"] = "q_reporte_002";
	$fdata["Label"] = GetFieldLabel("q_reporte_002_sector","MESCORTE");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_reporte_002_sector["MESCORTE"] = $fdata;
		$tdataq_reporte_002_sector[".searchableFields"][] = "MESCORTE";

	$tdataq_reporte_002_sector[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">q_reporte_002_sector</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="0">
			<attr value="name">TOTVIGENTE</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="1">
			<attr value="name">TOTCOMPROMISO</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="2">
			<attr value="name">TOTOBLIGACION</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="3">
			<attr value="name">TOTPAGOS</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="4">
		<attr value="name">TIPO</attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="head">'.xmlencode("ENTIDAD").'</attr>
<attr value="foot">'.xmlencode("TIPO").'</attr>
<attr value="y_axis_label">'.xmlencode("PRESUPUESTO").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataq_reporte_002_sector[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="0">
		<attr value="name">UEJ</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","UEJ")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="1">
		<attr value="name">SECTOR</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","SECTOR")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="2">
		<attr value="name">QTYREGISTROS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","QTYREGISTROS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="3">
		<attr value="name">NOMBRE UEJ</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","NOMBRE_UEJ")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="4">
		<attr value="name">TIPO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","TIPO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="5">
		<attr value="name">TOTVIGENTE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","TOTVIGENTE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="6">
		<attr value="name">TOTCOMPROMISO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","TOTCOMPROMISO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="7">
		<attr value="name">TOTOBLIGACION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","TOTOBLIGACION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="8">
		<attr value="name">TOTPAGOS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","TOTPAGOS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="9">
		<attr value="name">ULTFECHACORTE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","ULTFECHACORTE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="10">
		<attr value="name">ANIOCORTE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","ANIOCORTE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_002_sector[".chartXml"] .= '<attr value="11">
		<attr value="name">MESCORTE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_002_sector","MESCORTE")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataq_reporte_002_sector[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">q_reporte_002_sector</attr>
<attr value="short_table_name">q_reporte_002_sector</attr>
</attr>

</chart>';

$tables_data["q_reporte_002_sector"]=&$tdataq_reporte_002_sector;
$field_labels["q_reporte_002_sector"] = &$fieldLabelsq_reporte_002_sector;
$fieldToolTips["q_reporte_002_sector"] = &$fieldToolTipsq_reporte_002_sector;
$placeHolders["q_reporte_002_sector"] = &$placeHoldersq_reporte_002_sector;
$page_titles["q_reporte_002_sector"] = &$pageTitlesq_reporte_002_sector;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_reporte_002_sector"] = array();
//	q_reporte_002
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_reporte_002";
		$detailsParam["dOriginalTable"] = "q_reporte_002";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "q_reporte_002";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_reporte_002");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["q_reporte_002_sector"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_reporte_002_sector"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_reporte_002_sector"][$dIndex]["masterKeys"][]="UEJ";

	$detailsTablesData["q_reporte_002_sector"][$dIndex]["masterKeys"][]="SECTOR";

				$detailsTablesData["q_reporte_002_sector"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_reporte_002_sector"][$dIndex]["detailKeys"][]="UEJ";

		
	$detailsTablesData["q_reporte_002_sector"][$dIndex]["detailKeys"][]="SECTOR";

// tables which are master tables for current table (detail)
$masterTablesData["q_reporte_002_sector"] = array();



	
				$strOriginalDetailsTable="q_reporte_001";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_reporte_001_sector";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_reporte_001_sector";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["q_reporte_002_sector"][0] = $masterParams;
				$masterTablesData["q_reporte_002_sector"][0]["masterKeys"] = array();
	$masterTablesData["q_reporte_002_sector"][0]["masterKeys"][]="UEJ";
				$masterTablesData["q_reporte_002_sector"][0]["masterKeys"][]="SECTOR";
				$masterTablesData["q_reporte_002_sector"][0]["detailKeys"] = array();
	$masterTablesData["q_reporte_002_sector"][0]["detailKeys"][]="UEJ";
				$masterTablesData["q_reporte_002_sector"][0]["detailKeys"][]="SECTOR";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_reporte_002_sector()
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
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto6["m_sql"] = "UEJ";
$proto6["m_srcTableName"] = "q_reporte_002_sector";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SECTOR",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto8["m_sql"] = "SECTOR";
$proto8["m_srcTableName"] = "q_reporte_002_sector";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "QTYREGISTROS",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto10["m_sql"] = "QTYREGISTROS";
$proto10["m_srcTableName"] = "q_reporte_002_sector";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE UEJ",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto12["m_sql"] = "`NOMBRE UEJ`";
$proto12["m_srcTableName"] = "q_reporte_002_sector";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto14["m_sql"] = "TIPO";
$proto14["m_srcTableName"] = "q_reporte_002_sector";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTVIGENTE",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto16["m_sql"] = "TOTVIGENTE";
$proto16["m_srcTableName"] = "q_reporte_002_sector";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTCOMPROMISO",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto18["m_sql"] = "TOTCOMPROMISO";
$proto18["m_srcTableName"] = "q_reporte_002_sector";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTOBLIGACION",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto20["m_sql"] = "TOTOBLIGACION";
$proto20["m_srcTableName"] = "q_reporte_002_sector";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTPAGOS",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto22["m_sql"] = "TOTPAGOS";
$proto22["m_srcTableName"] = "q_reporte_002_sector";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ULTFECHACORTE",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto24["m_sql"] = "ULTFECHACORTE";
$proto24["m_srcTableName"] = "q_reporte_002_sector";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ANIOCORTE",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto26["m_sql"] = "ANIOCORTE";
$proto26["m_srcTableName"] = "q_reporte_002_sector";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "MESCORTE",
	"m_strTable" => "q_reporte_002",
	"m_srcTableName" => "q_reporte_002_sector"
));

$proto28["m_sql"] = "MESCORTE";
$proto28["m_srcTableName"] = "q_reporte_002_sector";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "q_reporte_002";
$proto31["m_srcTableName"] = "q_reporte_002_sector";
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
$proto30["m_srcTableName"] = "q_reporte_002_sector";
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
$proto0["m_srcTableName"]="q_reporte_002_sector";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_reporte_002_sector = createSqlQuery_q_reporte_002_sector();


	
										;

												

$tdataq_reporte_002_sector[".sqlquery"] = $queryData_q_reporte_002_sector;

$tableEvents["q_reporte_002_sector"] = new eventsBase;
$tdataq_reporte_002_sector[".hasEvents"] = false;

?>