<?php



$tdataq_reporte_000_sector = array();
$tdataq_reporte_000_sector[".searchableFields"] = array();
$tdataq_reporte_000_sector[".ShortName"] = "q_reporte_000_sector";
$tdataq_reporte_000_sector[".OwnerID"] = "";
$tdataq_reporte_000_sector[".OriginalTable"] = "q_reporte_000";


$tdataq_reporte_000_sector[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" );
$tdataq_reporte_000_sector[".originalPagesByType"] = $tdataq_reporte_000_sector[".pagesByType"];
$tdataq_reporte_000_sector[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"masterchart\":[\"masterchart\"],\"search\":[\"search\"]}" ) );
$tdataq_reporte_000_sector[".originalPages"] = $tdataq_reporte_000_sector[".pages"];
$tdataq_reporte_000_sector[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"masterchart\":\"masterchart\",\"search\":\"search\"}" );
$tdataq_reporte_000_sector[".originalDefaultPages"] = $tdataq_reporte_000_sector[".defaultPages"];

//	field labels
$fieldLabelsq_reporte_000_sector = array();
$fieldToolTipsq_reporte_000_sector = array();
$pageTitlesq_reporte_000_sector = array();
$placeHoldersq_reporte_000_sector = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_reporte_000_sector["Spanish"] = array();
	$fieldToolTipsq_reporte_000_sector["Spanish"] = array();
	$placeHoldersq_reporte_000_sector["Spanish"] = array();
	$pageTitlesq_reporte_000_sector["Spanish"] = array();
	$fieldLabelsq_reporte_000_sector["Spanish"]["Sector"] = "SECTOR";
	$fieldToolTipsq_reporte_000_sector["Spanish"]["Sector"] = "";
	$placeHoldersq_reporte_000_sector["Spanish"]["Sector"] = "";
	$fieldLabelsq_reporte_000_sector["Spanish"]["TOTVIGENTE"] = "TOT. VIGENTE";
	$fieldToolTipsq_reporte_000_sector["Spanish"]["TOTVIGENTE"] = "";
	$placeHoldersq_reporte_000_sector["Spanish"]["TOTVIGENTE"] = "";
	$fieldLabelsq_reporte_000_sector["Spanish"]["TOTCOMPROMISO"] = "TOT. COMPROMISO";
	$fieldToolTipsq_reporte_000_sector["Spanish"]["TOTCOMPROMISO"] = "";
	$placeHoldersq_reporte_000_sector["Spanish"]["TOTCOMPROMISO"] = "";
	$fieldLabelsq_reporte_000_sector["Spanish"]["TOTOBLIGACION"] = "TOT. OBLIGACION";
	$fieldToolTipsq_reporte_000_sector["Spanish"]["TOTOBLIGACION"] = "";
	$placeHoldersq_reporte_000_sector["Spanish"]["TOTOBLIGACION"] = "";
	$fieldLabelsq_reporte_000_sector["Spanish"]["TOTPAGOS"] = "TOT. PAGOS";
	$fieldToolTipsq_reporte_000_sector["Spanish"]["TOTPAGOS"] = "";
	$placeHoldersq_reporte_000_sector["Spanish"]["TOTPAGOS"] = "";
	if (count($fieldToolTipsq_reporte_000_sector["Spanish"]))
		$tdataq_reporte_000_sector[".isUseToolTips"] = true;
}


	$tdataq_reporte_000_sector[".NCSearch"] = true;

	$tdataq_reporte_000_sector[".ChartRefreshTime"] = 0;


$tdataq_reporte_000_sector[".shortTableName"] = "q_reporte_000_sector";
$tdataq_reporte_000_sector[".nSecOptions"] = 0;

$tdataq_reporte_000_sector[".mainTableOwnerID"] = "";
$tdataq_reporte_000_sector[".entityType"] = 3;

$tdataq_reporte_000_sector[".strOriginalTableName"] = "q_reporte_000";

	



$tdataq_reporte_000_sector[".showAddInPopup"] = false;

$tdataq_reporte_000_sector[".showEditInPopup"] = false;

$tdataq_reporte_000_sector[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_reporte_000_sector[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_reporte_000_sector[".listAjax"] = false;
//	temporary
$tdataq_reporte_000_sector[".listAjax"] = false;

	$tdataq_reporte_000_sector[".audit"] = false;

	$tdataq_reporte_000_sector[".locking"] = false;


$pages = $tdataq_reporte_000_sector[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_reporte_000_sector[".edit"] = true;
	$tdataq_reporte_000_sector[".afterEditAction"] = 1;
	$tdataq_reporte_000_sector[".closePopupAfterEdit"] = 1;
	$tdataq_reporte_000_sector[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_reporte_000_sector[".add"] = true;
$tdataq_reporte_000_sector[".afterAddAction"] = 1;
$tdataq_reporte_000_sector[".closePopupAfterAdd"] = 1;
$tdataq_reporte_000_sector[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_reporte_000_sector[".list"] = true;
}



$tdataq_reporte_000_sector[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_reporte_000_sector[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_reporte_000_sector[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_reporte_000_sector[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_reporte_000_sector[".printFriendly"] = true;
}



$tdataq_reporte_000_sector[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_reporte_000_sector[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_reporte_000_sector[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_reporte_000_sector[".isUseAjaxSuggest"] = true;






$tdataq_reporte_000_sector[".ajaxCodeSnippetAdded"] = false;

$tdataq_reporte_000_sector[".buttonsAdded"] = false;

$tdataq_reporte_000_sector[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_reporte_000_sector[".isUseTimeForSearch"] = false;


$tdataq_reporte_000_sector[".badgeColor"] = "DB7093";


$tdataq_reporte_000_sector[".allSearchFields"] = array();
$tdataq_reporte_000_sector[".filterFields"] = array();
$tdataq_reporte_000_sector[".requiredSearchFields"] = array();

$tdataq_reporte_000_sector[".googleLikeFields"] = array();
$tdataq_reporte_000_sector[".googleLikeFields"][] = "Sector";
$tdataq_reporte_000_sector[".googleLikeFields"][] = "TOTVIGENTE";
$tdataq_reporte_000_sector[".googleLikeFields"][] = "TOTCOMPROMISO";
$tdataq_reporte_000_sector[".googleLikeFields"][] = "TOTOBLIGACION";
$tdataq_reporte_000_sector[".googleLikeFields"][] = "TOTPAGOS";



$tdataq_reporte_000_sector[".tableType"] = "chart";

$tdataq_reporte_000_sector[".printerPageOrientation"] = 0;
$tdataq_reporte_000_sector[".nPrinterPageScale"] = 100;

$tdataq_reporte_000_sector[".nPrinterSplitRecords"] = 40;

$tdataq_reporte_000_sector[".geocodingEnabled"] = false;



// chart settings
$tdataq_reporte_000_sector[".chartType"] = "2DColumn";
// end of chart settings

$tdataq_reporte_000_sector[".isDisplayLoading"] = true;







$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_reporte_000_sector[".strOrderBy"] = $tstrOrderBy;

$tdataq_reporte_000_sector[".orderindexes"] = array();

$tdataq_reporte_000_sector[".sqlHead"] = "SELECT Sector,  	TOTVIGENTE,  	TOTCOMPROMISO,  	TOTOBLIGACION,  	TOTPAGOS";
$tdataq_reporte_000_sector[".sqlFrom"] = "FROM q_reporte_000";
$tdataq_reporte_000_sector[".sqlWhereExpr"] = "";
$tdataq_reporte_000_sector[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_reporte_000_sector[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_reporte_000_sector[".arrGroupsPerPage"] = $arrGPP;

$tdataq_reporte_000_sector[".highlightSearchResults"] = true;

$tableKeysq_reporte_000_sector = array();
$tdataq_reporte_000_sector[".Keys"] = $tableKeysq_reporte_000_sector;


$tdataq_reporte_000_sector[".hideMobileList"] = array();




//	Sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Sector";
	$fdata["GoodName"] = "Sector";
	$fdata["ownerTable"] = "q_reporte_000";
	$fdata["Label"] = GetFieldLabel("q_reporte_000_sector","Sector");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Sector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sector";

	
	
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
	$edata["LookupTable"] = "tparam_uej";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sector_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sector_name";

	

	
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


	$tdataq_reporte_000_sector["Sector"] = $fdata;
		$tdataq_reporte_000_sector[".searchableFields"][] = "Sector";
//	TOTVIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TOTVIGENTE";
	$fdata["GoodName"] = "TOTVIGENTE";
	$fdata["ownerTable"] = "q_reporte_000";
	$fdata["Label"] = GetFieldLabel("q_reporte_000_sector","TOTVIGENTE");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdataq_reporte_000_sector["TOTVIGENTE"] = $fdata;
		$tdataq_reporte_000_sector[".searchableFields"][] = "TOTVIGENTE";
//	TOTCOMPROMISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TOTCOMPROMISO";
	$fdata["GoodName"] = "TOTCOMPROMISO";
	$fdata["ownerTable"] = "q_reporte_000";
	$fdata["Label"] = GetFieldLabel("q_reporte_000_sector","TOTCOMPROMISO");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdataq_reporte_000_sector["TOTCOMPROMISO"] = $fdata;
		$tdataq_reporte_000_sector[".searchableFields"][] = "TOTCOMPROMISO";
//	TOTOBLIGACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TOTOBLIGACION";
	$fdata["GoodName"] = "TOTOBLIGACION";
	$fdata["ownerTable"] = "q_reporte_000";
	$fdata["Label"] = GetFieldLabel("q_reporte_000_sector","TOTOBLIGACION");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdataq_reporte_000_sector["TOTOBLIGACION"] = $fdata;
		$tdataq_reporte_000_sector[".searchableFields"][] = "TOTOBLIGACION";
//	TOTPAGOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TOTPAGOS";
	$fdata["GoodName"] = "TOTPAGOS";
	$fdata["ownerTable"] = "q_reporte_000";
	$fdata["Label"] = GetFieldLabel("q_reporte_000_sector","TOTPAGOS");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdataq_reporte_000_sector["TOTPAGOS"] = $fdata;
		$tdataq_reporte_000_sector[".searchableFields"][] = "TOTPAGOS";

	$tdataq_reporte_000_sector[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">q_reporte_000_sector</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="0">
			<attr value="name">TOTVIGENTE</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="1">
			<attr value="name">TOTCOMPROMISO</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="2">
			<attr value="name">TOTOBLIGACION</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="3">
			<attr value="name">TOTPAGOS</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="4">
		<attr value="name">Sector</attr>
	</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="head">'.xmlencode("SECTOR COMERCIO, INDUSTRIA Y TURISMO").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
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
$tdataq_reporte_000_sector[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="0">
		<attr value="name">Sector</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_000_sector","Sector")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="1">
		<attr value="name">TOTVIGENTE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_000_sector","TOTVIGENTE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="2">
		<attr value="name">TOTCOMPROMISO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_000_sector","TOTCOMPROMISO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="3">
		<attr value="name">TOTOBLIGACION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_000_sector","TOTOBLIGACION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_reporte_000_sector[".chartXml"] .= '<attr value="4">
		<attr value="name">TOTPAGOS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_reporte_000_sector","TOTPAGOS")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataq_reporte_000_sector[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">q_reporte_000_sector</attr>
<attr value="short_table_name">q_reporte_000_sector</attr>
</attr>

</chart>';

$tables_data["q_reporte_000_sector"]=&$tdataq_reporte_000_sector;
$field_labels["q_reporte_000_sector"] = &$fieldLabelsq_reporte_000_sector;
$fieldToolTips["q_reporte_000_sector"] = &$fieldToolTipsq_reporte_000_sector;
$placeHolders["q_reporte_000_sector"] = &$placeHoldersq_reporte_000_sector;
$page_titles["q_reporte_000_sector"] = &$pageTitlesq_reporte_000_sector;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_reporte_000_sector"] = array();
//	q_reporte_001_sector
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_reporte_001_sector";
		$detailsParam["dOriginalTable"] = "q_reporte_001";



			$detailsParam["dType"]=PAGE_CHART;
		$detailsParam["dShortTable"] = "q_reporte_001_sector";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_reporte_001_sector");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["q_reporte_000_sector"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_reporte_000_sector"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_reporte_000_sector"][$dIndex]["masterKeys"][]="Sector";

				$detailsTablesData["q_reporte_000_sector"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_reporte_000_sector"][$dIndex]["detailKeys"][]="SECTOR";

// tables which are master tables for current table (detail)
$masterTablesData["q_reporte_000_sector"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_reporte_000_sector()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Sector,  	TOTVIGENTE,  	TOTCOMPROMISO,  	TOTOBLIGACION,  	TOTPAGOS";
$proto0["m_strFrom"] = "FROM q_reporte_000";
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
	"m_strName" => "Sector",
	"m_strTable" => "q_reporte_000",
	"m_srcTableName" => "q_reporte_000_sector"
));

$proto6["m_sql"] = "Sector";
$proto6["m_srcTableName"] = "q_reporte_000_sector";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTVIGENTE",
	"m_strTable" => "q_reporte_000",
	"m_srcTableName" => "q_reporte_000_sector"
));

$proto8["m_sql"] = "TOTVIGENTE";
$proto8["m_srcTableName"] = "q_reporte_000_sector";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTCOMPROMISO",
	"m_strTable" => "q_reporte_000",
	"m_srcTableName" => "q_reporte_000_sector"
));

$proto10["m_sql"] = "TOTCOMPROMISO";
$proto10["m_srcTableName"] = "q_reporte_000_sector";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTOBLIGACION",
	"m_strTable" => "q_reporte_000",
	"m_srcTableName" => "q_reporte_000_sector"
));

$proto12["m_sql"] = "TOTOBLIGACION";
$proto12["m_srcTableName"] = "q_reporte_000_sector";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTPAGOS",
	"m_strTable" => "q_reporte_000",
	"m_srcTableName" => "q_reporte_000_sector"
));

$proto14["m_sql"] = "TOTPAGOS";
$proto14["m_srcTableName"] = "q_reporte_000_sector";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "q_reporte_000";
$proto17["m_srcTableName"] = "q_reporte_000_sector";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Sector";
$proto17["m_columns"][] = "TOTVIGENTE";
$proto17["m_columns"][] = "TOTCOMPROMISO";
$proto17["m_columns"][] = "TOTOBLIGACION";
$proto17["m_columns"][] = "TOTPAGOS";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "q_reporte_000";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "q_reporte_000_sector";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_reporte_000_sector";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_reporte_000_sector = createSqlQuery_q_reporte_000_sector();


	
										;

					

$tdataq_reporte_000_sector[".sqlquery"] = $queryData_q_reporte_000_sector;

$tableEvents["q_reporte_000_sector"] = new eventsBase;
$tdataq_reporte_000_sector[".hasEvents"] = false;

?>