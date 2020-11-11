<?php



$tdataq_ctrl_saldos_act_paa = array();
$tdataq_ctrl_saldos_act_paa[".searchableFields"] = array();
$tdataq_ctrl_saldos_act_paa[".ShortName"] = "q_ctrl_saldos_act_paa";
$tdataq_ctrl_saldos_act_paa[".OwnerID"] = "";
$tdataq_ctrl_saldos_act_paa[".OriginalTable"] = "q_ctrl_saldos_act_paa";


$tdataq_ctrl_saldos_act_paa[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataq_ctrl_saldos_act_paa[".originalPagesByType"] = $tdataq_ctrl_saldos_act_paa[".pagesByType"];
$tdataq_ctrl_saldos_act_paa[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataq_ctrl_saldos_act_paa[".originalPages"] = $tdataq_ctrl_saldos_act_paa[".pages"];
$tdataq_ctrl_saldos_act_paa[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataq_ctrl_saldos_act_paa[".originalDefaultPages"] = $tdataq_ctrl_saldos_act_paa[".defaultPages"];

//	field labels
$fieldLabelsq_ctrl_saldos_act_paa = array();
$fieldToolTipsq_ctrl_saldos_act_paa = array();
$pageTitlesq_ctrl_saldos_act_paa = array();
$placeHoldersq_ctrl_saldos_act_paa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_ctrl_saldos_act_paa["Spanish"] = array();
	$fieldToolTipsq_ctrl_saldos_act_paa["Spanish"] = array();
	$placeHoldersq_ctrl_saldos_act_paa["Spanish"] = array();
	$pageTitlesq_ctrl_saldos_act_paa["Spanish"] = array();
	$fieldLabelsq_ctrl_saldos_act_paa["Spanish"]["ACT_ID"] = "ACT ID";
	$fieldToolTipsq_ctrl_saldos_act_paa["Spanish"]["ACT_ID"] = "";
	$placeHoldersq_ctrl_saldos_act_paa["Spanish"]["ACT_ID"] = "";
	$fieldLabelsq_ctrl_saldos_act_paa["Spanish"]["ACTIVIDAD"] = "ACTIVIDAD";
	$fieldToolTipsq_ctrl_saldos_act_paa["Spanish"]["ACTIVIDAD"] = "";
	$placeHoldersq_ctrl_saldos_act_paa["Spanish"]["ACTIVIDAD"] = "";
	$fieldLabelsq_ctrl_saldos_act_paa["Spanish"]["RESPONSABLE_002"] = "RESPONSABLE 002";
	$fieldToolTipsq_ctrl_saldos_act_paa["Spanish"]["RESPONSABLE_002"] = "";
	$placeHoldersq_ctrl_saldos_act_paa["Spanish"]["RESPONSABLE_002"] = "";
	$fieldLabelsq_ctrl_saldos_act_paa["Spanish"]["RECURSOS_ASIGNADOS"] = "RECURSOS ASIGNADOS";
	$fieldToolTipsq_ctrl_saldos_act_paa["Spanish"]["RECURSOS_ASIGNADOS"] = "";
	$placeHoldersq_ctrl_saldos_act_paa["Spanish"]["RECURSOS_ASIGNADOS"] = "";
	$fieldLabelsq_ctrl_saldos_act_paa["Spanish"]["QTY_ACT"] = "QTY ACT";
	$fieldToolTipsq_ctrl_saldos_act_paa["Spanish"]["QTY_ACT"] = "";
	$placeHoldersq_ctrl_saldos_act_paa["Spanish"]["QTY_ACT"] = "";
	$fieldLabelsq_ctrl_saldos_act_paa["Spanish"]["SUM_ACT"] = "SUM ACT";
	$fieldToolTipsq_ctrl_saldos_act_paa["Spanish"]["SUM_ACT"] = "";
	$placeHoldersq_ctrl_saldos_act_paa["Spanish"]["SUM_ACT"] = "";
	$fieldLabelsq_ctrl_saldos_act_paa["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTipsq_ctrl_saldos_act_paa["Spanish"]["VIGENCIA"] = "";
	$placeHoldersq_ctrl_saldos_act_paa["Spanish"]["VIGENCIA"] = "";
	$fieldLabelsq_ctrl_saldos_act_paa["Spanish"]["SALDO_DISPONIBLE"] = "SALDO DISPONIBLE";
	$fieldToolTipsq_ctrl_saldos_act_paa["Spanish"]["SALDO_DISPONIBLE"] = "";
	$placeHoldersq_ctrl_saldos_act_paa["Spanish"]["SALDO_DISPONIBLE"] = "";
	if (count($fieldToolTipsq_ctrl_saldos_act_paa["Spanish"]))
		$tdataq_ctrl_saldos_act_paa[".isUseToolTips"] = true;
}


	$tdataq_ctrl_saldos_act_paa[".NCSearch"] = true;



$tdataq_ctrl_saldos_act_paa[".shortTableName"] = "q_ctrl_saldos_act_paa";
$tdataq_ctrl_saldos_act_paa[".nSecOptions"] = 0;

$tdataq_ctrl_saldos_act_paa[".mainTableOwnerID"] = "";
$tdataq_ctrl_saldos_act_paa[".entityType"] = 0;

$tdataq_ctrl_saldos_act_paa[".strOriginalTableName"] = "q_ctrl_saldos_act_paa";

	



$tdataq_ctrl_saldos_act_paa[".showAddInPopup"] = false;

$tdataq_ctrl_saldos_act_paa[".showEditInPopup"] = false;

$tdataq_ctrl_saldos_act_paa[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_ctrl_saldos_act_paa[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_ctrl_saldos_act_paa[".listAjax"] = false;
//	temporary
$tdataq_ctrl_saldos_act_paa[".listAjax"] = false;

	$tdataq_ctrl_saldos_act_paa[".audit"] = false;

	$tdataq_ctrl_saldos_act_paa[".locking"] = false;


$pages = $tdataq_ctrl_saldos_act_paa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_ctrl_saldos_act_paa[".edit"] = true;
	$tdataq_ctrl_saldos_act_paa[".afterEditAction"] = 1;
	$tdataq_ctrl_saldos_act_paa[".closePopupAfterEdit"] = 1;
	$tdataq_ctrl_saldos_act_paa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_ctrl_saldos_act_paa[".add"] = true;
$tdataq_ctrl_saldos_act_paa[".afterAddAction"] = 1;
$tdataq_ctrl_saldos_act_paa[".closePopupAfterAdd"] = 1;
$tdataq_ctrl_saldos_act_paa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_ctrl_saldos_act_paa[".list"] = true;
}



$tdataq_ctrl_saldos_act_paa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_ctrl_saldos_act_paa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_ctrl_saldos_act_paa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_ctrl_saldos_act_paa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_ctrl_saldos_act_paa[".printFriendly"] = true;
}



$tdataq_ctrl_saldos_act_paa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_ctrl_saldos_act_paa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_ctrl_saldos_act_paa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_ctrl_saldos_act_paa[".isUseAjaxSuggest"] = true;

$tdataq_ctrl_saldos_act_paa[".rowHighlite"] = true;





$tdataq_ctrl_saldos_act_paa[".ajaxCodeSnippetAdded"] = false;

$tdataq_ctrl_saldos_act_paa[".buttonsAdded"] = false;

$tdataq_ctrl_saldos_act_paa[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_ctrl_saldos_act_paa[".isUseTimeForSearch"] = false;


$tdataq_ctrl_saldos_act_paa[".badgeColor"] = "5F9EA0";


$tdataq_ctrl_saldos_act_paa[".allSearchFields"] = array();
$tdataq_ctrl_saldos_act_paa[".filterFields"] = array();
$tdataq_ctrl_saldos_act_paa[".requiredSearchFields"] = array();

$tdataq_ctrl_saldos_act_paa[".googleLikeFields"] = array();
$tdataq_ctrl_saldos_act_paa[".googleLikeFields"][] = "ACT_ID";
$tdataq_ctrl_saldos_act_paa[".googleLikeFields"][] = "ACTIVIDAD";
$tdataq_ctrl_saldos_act_paa[".googleLikeFields"][] = "RESPONSABLE_002";
$tdataq_ctrl_saldos_act_paa[".googleLikeFields"][] = "RECURSOS_ASIGNADOS";
$tdataq_ctrl_saldos_act_paa[".googleLikeFields"][] = "QTY_ACT";
$tdataq_ctrl_saldos_act_paa[".googleLikeFields"][] = "SUM_ACT";
$tdataq_ctrl_saldos_act_paa[".googleLikeFields"][] = "VIGENCIA";
$tdataq_ctrl_saldos_act_paa[".googleLikeFields"][] = "SALDO_DISPONIBLE";



$tdataq_ctrl_saldos_act_paa[".tableType"] = "list";

$tdataq_ctrl_saldos_act_paa[".printerPageOrientation"] = 0;
$tdataq_ctrl_saldos_act_paa[".nPrinterPageScale"] = 100;

$tdataq_ctrl_saldos_act_paa[".nPrinterSplitRecords"] = 40;

$tdataq_ctrl_saldos_act_paa[".geocodingEnabled"] = false;










$tdataq_ctrl_saldos_act_paa[".pageSize"] = 20;

$tdataq_ctrl_saldos_act_paa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_ctrl_saldos_act_paa[".strOrderBy"] = $tstrOrderBy;

$tdataq_ctrl_saldos_act_paa[".orderindexes"] = array();

$tdataq_ctrl_saldos_act_paa[".sqlHead"] = "SELECT ACT_ID,  	ACTIVIDAD,  	RESPONSABLE_002,  	RECURSOS_ASIGNADOS,  	QTY_ACT,  	SUM_ACT,  	VIGENCIA,  	SALDO_DISPONIBLE";
$tdataq_ctrl_saldos_act_paa[".sqlFrom"] = "FROM q_ctrl_saldos_act_paa";
$tdataq_ctrl_saldos_act_paa[".sqlWhereExpr"] = "";
$tdataq_ctrl_saldos_act_paa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_ctrl_saldos_act_paa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_ctrl_saldos_act_paa[".arrGroupsPerPage"] = $arrGPP;

$tdataq_ctrl_saldos_act_paa[".highlightSearchResults"] = true;

$tableKeysq_ctrl_saldos_act_paa = array();
$tdataq_ctrl_saldos_act_paa[".Keys"] = $tableKeysq_ctrl_saldos_act_paa;


$tdataq_ctrl_saldos_act_paa[".hideMobileList"] = array();




//	ACT_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ACT_ID";
	$fdata["GoodName"] = "ACT_ID";
	$fdata["ownerTable"] = "q_ctrl_saldos_act_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_act_paa","ACT_ID");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdataq_ctrl_saldos_act_paa["ACT_ID"] = $fdata;
		$tdataq_ctrl_saldos_act_paa[".searchableFields"][] = "ACT_ID";
//	ACTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ACTIVIDAD";
	$fdata["GoodName"] = "ACTIVIDAD";
	$fdata["ownerTable"] = "q_ctrl_saldos_act_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_act_paa","ACTIVIDAD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ACTIVIDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTIVIDAD";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdataq_ctrl_saldos_act_paa["ACTIVIDAD"] = $fdata;
		$tdataq_ctrl_saldos_act_paa[".searchableFields"][] = "ACTIVIDAD";
//	RESPONSABLE_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RESPONSABLE_002";
	$fdata["GoodName"] = "RESPONSABLE_002";
	$fdata["ownerTable"] = "q_ctrl_saldos_act_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_act_paa","RESPONSABLE_002");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RESPONSABLE_002";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_002";

	
	
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


	$tdataq_ctrl_saldos_act_paa["RESPONSABLE_002"] = $fdata;
		$tdataq_ctrl_saldos_act_paa[".searchableFields"][] = "RESPONSABLE_002";
//	RECURSOS_ASIGNADOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RECURSOS_ASIGNADOS";
	$fdata["GoodName"] = "RECURSOS_ASIGNADOS";
	$fdata["ownerTable"] = "q_ctrl_saldos_act_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_act_paa","RECURSOS_ASIGNADOS");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "RECURSOS_ASIGNADOS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RECURSOS_ASIGNADOS";

	
	
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


	$tdataq_ctrl_saldos_act_paa["RECURSOS_ASIGNADOS"] = $fdata;
		$tdataq_ctrl_saldos_act_paa[".searchableFields"][] = "RECURSOS_ASIGNADOS";
//	QTY_ACT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "QTY_ACT";
	$fdata["GoodName"] = "QTY_ACT";
	$fdata["ownerTable"] = "q_ctrl_saldos_act_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_act_paa","QTY_ACT");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "QTY_ACT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QTY_ACT";

	
	
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


	$tdataq_ctrl_saldos_act_paa["QTY_ACT"] = $fdata;
		$tdataq_ctrl_saldos_act_paa[".searchableFields"][] = "QTY_ACT";
//	SUM_ACT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SUM_ACT";
	$fdata["GoodName"] = "SUM_ACT";
	$fdata["ownerTable"] = "q_ctrl_saldos_act_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_act_paa","SUM_ACT");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "SUM_ACT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM_ACT";

	
	
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


	$tdataq_ctrl_saldos_act_paa["SUM_ACT"] = $fdata;
		$tdataq_ctrl_saldos_act_paa[".searchableFields"][] = "SUM_ACT";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "q_ctrl_saldos_act_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_act_paa","VIGENCIA");
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


	$tdataq_ctrl_saldos_act_paa["VIGENCIA"] = $fdata;
		$tdataq_ctrl_saldos_act_paa[".searchableFields"][] = "VIGENCIA";
//	SALDO_DISPONIBLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SALDO_DISPONIBLE";
	$fdata["GoodName"] = "SALDO_DISPONIBLE";
	$fdata["ownerTable"] = "q_ctrl_saldos_act_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_act_paa","SALDO_DISPONIBLE");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "SALDO_DISPONIBLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SALDO_DISPONIBLE";

	
	
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


	$tdataq_ctrl_saldos_act_paa["SALDO_DISPONIBLE"] = $fdata;
		$tdataq_ctrl_saldos_act_paa[".searchableFields"][] = "SALDO_DISPONIBLE";


$tables_data["q_ctrl_saldos_act_paa"]=&$tdataq_ctrl_saldos_act_paa;
$field_labels["q_ctrl_saldos_act_paa"] = &$fieldLabelsq_ctrl_saldos_act_paa;
$fieldToolTips["q_ctrl_saldos_act_paa"] = &$fieldToolTipsq_ctrl_saldos_act_paa;
$placeHolders["q_ctrl_saldos_act_paa"] = &$placeHoldersq_ctrl_saldos_act_paa;
$page_titles["q_ctrl_saldos_act_paa"] = &$pageTitlesq_ctrl_saldos_act_paa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_ctrl_saldos_act_paa"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_ctrl_saldos_act_paa"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_ctrl_saldos_act_paa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ACT_ID,  	ACTIVIDAD,  	RESPONSABLE_002,  	RECURSOS_ASIGNADOS,  	QTY_ACT,  	SUM_ACT,  	VIGENCIA,  	SALDO_DISPONIBLE";
$proto0["m_strFrom"] = "FROM q_ctrl_saldos_act_paa";
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
	"m_strTable" => "q_ctrl_saldos_act_paa",
	"m_srcTableName" => "q_ctrl_saldos_act_paa"
));

$proto6["m_sql"] = "ACT_ID";
$proto6["m_srcTableName"] = "q_ctrl_saldos_act_paa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTIVIDAD",
	"m_strTable" => "q_ctrl_saldos_act_paa",
	"m_srcTableName" => "q_ctrl_saldos_act_paa"
));

$proto8["m_sql"] = "ACTIVIDAD";
$proto8["m_srcTableName"] = "q_ctrl_saldos_act_paa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_002",
	"m_strTable" => "q_ctrl_saldos_act_paa",
	"m_srcTableName" => "q_ctrl_saldos_act_paa"
));

$proto10["m_sql"] = "RESPONSABLE_002";
$proto10["m_srcTableName"] = "q_ctrl_saldos_act_paa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RECURSOS_ASIGNADOS",
	"m_strTable" => "q_ctrl_saldos_act_paa",
	"m_srcTableName" => "q_ctrl_saldos_act_paa"
));

$proto12["m_sql"] = "RECURSOS_ASIGNADOS";
$proto12["m_srcTableName"] = "q_ctrl_saldos_act_paa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "QTY_ACT",
	"m_strTable" => "q_ctrl_saldos_act_paa",
	"m_srcTableName" => "q_ctrl_saldos_act_paa"
));

$proto14["m_sql"] = "QTY_ACT";
$proto14["m_srcTableName"] = "q_ctrl_saldos_act_paa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SUM_ACT",
	"m_strTable" => "q_ctrl_saldos_act_paa",
	"m_srcTableName" => "q_ctrl_saldos_act_paa"
));

$proto16["m_sql"] = "SUM_ACT";
$proto16["m_srcTableName"] = "q_ctrl_saldos_act_paa";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "q_ctrl_saldos_act_paa",
	"m_srcTableName" => "q_ctrl_saldos_act_paa"
));

$proto18["m_sql"] = "VIGENCIA";
$proto18["m_srcTableName"] = "q_ctrl_saldos_act_paa";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SALDO_DISPONIBLE",
	"m_strTable" => "q_ctrl_saldos_act_paa",
	"m_srcTableName" => "q_ctrl_saldos_act_paa"
));

$proto20["m_sql"] = "SALDO_DISPONIBLE";
$proto20["m_srcTableName"] = "q_ctrl_saldos_act_paa";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "q_ctrl_saldos_act_paa";
$proto23["m_srcTableName"] = "q_ctrl_saldos_act_paa";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ACT_ID";
$proto23["m_columns"][] = "ACTIVIDAD";
$proto23["m_columns"][] = "RESPONSABLE_002";
$proto23["m_columns"][] = "RECURSOS_ASIGNADOS";
$proto23["m_columns"][] = "QTY_ACT";
$proto23["m_columns"][] = "SUM_ACT";
$proto23["m_columns"][] = "VIGENCIA";
$proto23["m_columns"][] = "SALDO_DISPONIBLE";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "q_ctrl_saldos_act_paa";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "q_ctrl_saldos_act_paa";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_ctrl_saldos_act_paa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_ctrl_saldos_act_paa = createSqlQuery_q_ctrl_saldos_act_paa();


	
										;

								

$tdataq_ctrl_saldos_act_paa[".sqlquery"] = $queryData_q_ctrl_saldos_act_paa;

$tableEvents["q_ctrl_saldos_act_paa"] = new eventsBase;
$tdataq_ctrl_saldos_act_paa[".hasEvents"] = false;

?>