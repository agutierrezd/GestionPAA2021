<?php



$tdataq_ctrl_saldos_prod_paa = array();
$tdataq_ctrl_saldos_prod_paa[".searchableFields"] = array();
$tdataq_ctrl_saldos_prod_paa[".ShortName"] = "q_ctrl_saldos_prod_paa";
$tdataq_ctrl_saldos_prod_paa[".OwnerID"] = "";
$tdataq_ctrl_saldos_prod_paa[".OriginalTable"] = "q_ctrl_saldos_prod_paa";


$tdataq_ctrl_saldos_prod_paa[".pagesByType"] = my_json_decode( "{}" );
$tdataq_ctrl_saldos_prod_paa[".originalPagesByType"] = $tdataq_ctrl_saldos_prod_paa[".pagesByType"];
$tdataq_ctrl_saldos_prod_paa[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataq_ctrl_saldos_prod_paa[".originalPages"] = $tdataq_ctrl_saldos_prod_paa[".pages"];
$tdataq_ctrl_saldos_prod_paa[".defaultPages"] = my_json_decode( "{}" );
$tdataq_ctrl_saldos_prod_paa[".originalDefaultPages"] = $tdataq_ctrl_saldos_prod_paa[".defaultPages"];

//	field labels
$fieldLabelsq_ctrl_saldos_prod_paa = array();
$fieldToolTipsq_ctrl_saldos_prod_paa = array();
$pageTitlesq_ctrl_saldos_prod_paa = array();
$placeHoldersq_ctrl_saldos_prod_paa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_ctrl_saldos_prod_paa["Spanish"] = array();
	$fieldToolTipsq_ctrl_saldos_prod_paa["Spanish"] = array();
	$placeHoldersq_ctrl_saldos_prod_paa["Spanish"] = array();
	$pageTitlesq_ctrl_saldos_prod_paa["Spanish"] = array();
	$fieldLabelsq_ctrl_saldos_prod_paa["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTipsq_ctrl_saldos_prod_paa["Spanish"]["PROD_ID"] = "";
	$placeHoldersq_ctrl_saldos_prod_paa["Spanish"]["PROD_ID"] = "";
	$fieldLabelsq_ctrl_saldos_prod_paa["Spanish"]["PRODUCTO"] = "PRODUCTO";
	$fieldToolTipsq_ctrl_saldos_prod_paa["Spanish"]["PRODUCTO"] = "";
	$placeHoldersq_ctrl_saldos_prod_paa["Spanish"]["PRODUCTO"] = "";
	$fieldLabelsq_ctrl_saldos_prod_paa["Spanish"]["RESPONSABLE_002"] = "RESPONSABLE 002";
	$fieldToolTipsq_ctrl_saldos_prod_paa["Spanish"]["RESPONSABLE_002"] = "";
	$placeHoldersq_ctrl_saldos_prod_paa["Spanish"]["RESPONSABLE_002"] = "";
	$fieldLabelsq_ctrl_saldos_prod_paa["Spanish"]["PROD_PRESUPUESTO"] = "PROD PRESUPUESTO";
	$fieldToolTipsq_ctrl_saldos_prod_paa["Spanish"]["PROD_PRESUPUESTO"] = "";
	$placeHoldersq_ctrl_saldos_prod_paa["Spanish"]["PROD_PRESUPUESTO"] = "";
	$fieldLabelsq_ctrl_saldos_prod_paa["Spanish"]["QTY_ACT"] = "QTY ACT";
	$fieldToolTipsq_ctrl_saldos_prod_paa["Spanish"]["QTY_ACT"] = "";
	$placeHoldersq_ctrl_saldos_prod_paa["Spanish"]["QTY_ACT"] = "";
	$fieldLabelsq_ctrl_saldos_prod_paa["Spanish"]["SUM_ACT"] = "SUM ACT";
	$fieldToolTipsq_ctrl_saldos_prod_paa["Spanish"]["SUM_ACT"] = "";
	$placeHoldersq_ctrl_saldos_prod_paa["Spanish"]["SUM_ACT"] = "";
	$fieldLabelsq_ctrl_saldos_prod_paa["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTipsq_ctrl_saldos_prod_paa["Spanish"]["VIGENCIA"] = "";
	$placeHoldersq_ctrl_saldos_prod_paa["Spanish"]["VIGENCIA"] = "";
	$fieldLabelsq_ctrl_saldos_prod_paa["Spanish"]["SALDO_DISPONIBLE"] = "SALDO DISPONIBLE";
	$fieldToolTipsq_ctrl_saldos_prod_paa["Spanish"]["SALDO_DISPONIBLE"] = "";
	$placeHoldersq_ctrl_saldos_prod_paa["Spanish"]["SALDO_DISPONIBLE"] = "";
	if (count($fieldToolTipsq_ctrl_saldos_prod_paa["Spanish"]))
		$tdataq_ctrl_saldos_prod_paa[".isUseToolTips"] = true;
}


	$tdataq_ctrl_saldos_prod_paa[".NCSearch"] = true;



$tdataq_ctrl_saldos_prod_paa[".shortTableName"] = "q_ctrl_saldos_prod_paa";
$tdataq_ctrl_saldos_prod_paa[".nSecOptions"] = 0;

$tdataq_ctrl_saldos_prod_paa[".mainTableOwnerID"] = "";
$tdataq_ctrl_saldos_prod_paa[".entityType"] = 0;

$tdataq_ctrl_saldos_prod_paa[".strOriginalTableName"] = "q_ctrl_saldos_prod_paa";

	



$tdataq_ctrl_saldos_prod_paa[".showAddInPopup"] = false;

$tdataq_ctrl_saldos_prod_paa[".showEditInPopup"] = false;

$tdataq_ctrl_saldos_prod_paa[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_ctrl_saldos_prod_paa[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_ctrl_saldos_prod_paa[".listAjax"] = false;
//	temporary
$tdataq_ctrl_saldos_prod_paa[".listAjax"] = false;

	$tdataq_ctrl_saldos_prod_paa[".audit"] = false;

	$tdataq_ctrl_saldos_prod_paa[".locking"] = false;


$pages = $tdataq_ctrl_saldos_prod_paa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_ctrl_saldos_prod_paa[".edit"] = true;
	$tdataq_ctrl_saldos_prod_paa[".afterEditAction"] = 1;
	$tdataq_ctrl_saldos_prod_paa[".closePopupAfterEdit"] = 1;
	$tdataq_ctrl_saldos_prod_paa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_ctrl_saldos_prod_paa[".add"] = true;
$tdataq_ctrl_saldos_prod_paa[".afterAddAction"] = 1;
$tdataq_ctrl_saldos_prod_paa[".closePopupAfterAdd"] = 1;
$tdataq_ctrl_saldos_prod_paa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_ctrl_saldos_prod_paa[".list"] = true;
}



$tdataq_ctrl_saldos_prod_paa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_ctrl_saldos_prod_paa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_ctrl_saldos_prod_paa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_ctrl_saldos_prod_paa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_ctrl_saldos_prod_paa[".printFriendly"] = true;
}



$tdataq_ctrl_saldos_prod_paa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_ctrl_saldos_prod_paa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_ctrl_saldos_prod_paa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_ctrl_saldos_prod_paa[".isUseAjaxSuggest"] = true;

$tdataq_ctrl_saldos_prod_paa[".rowHighlite"] = true;





$tdataq_ctrl_saldos_prod_paa[".ajaxCodeSnippetAdded"] = false;

$tdataq_ctrl_saldos_prod_paa[".buttonsAdded"] = false;

$tdataq_ctrl_saldos_prod_paa[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_ctrl_saldos_prod_paa[".isUseTimeForSearch"] = false;


$tdataq_ctrl_saldos_prod_paa[".badgeColor"] = "2F4F4F";


$tdataq_ctrl_saldos_prod_paa[".allSearchFields"] = array();
$tdataq_ctrl_saldos_prod_paa[".filterFields"] = array();
$tdataq_ctrl_saldos_prod_paa[".requiredSearchFields"] = array();

$tdataq_ctrl_saldos_prod_paa[".googleLikeFields"] = array();
$tdataq_ctrl_saldos_prod_paa[".googleLikeFields"][] = "PROD_ID";
$tdataq_ctrl_saldos_prod_paa[".googleLikeFields"][] = "PRODUCTO";
$tdataq_ctrl_saldos_prod_paa[".googleLikeFields"][] = "RESPONSABLE_002";
$tdataq_ctrl_saldos_prod_paa[".googleLikeFields"][] = "PROD_PRESUPUESTO";
$tdataq_ctrl_saldos_prod_paa[".googleLikeFields"][] = "QTY_ACT";
$tdataq_ctrl_saldos_prod_paa[".googleLikeFields"][] = "SUM_ACT";
$tdataq_ctrl_saldos_prod_paa[".googleLikeFields"][] = "VIGENCIA";
$tdataq_ctrl_saldos_prod_paa[".googleLikeFields"][] = "SALDO_DISPONIBLE";



$tdataq_ctrl_saldos_prod_paa[".tableType"] = "list";

$tdataq_ctrl_saldos_prod_paa[".printerPageOrientation"] = 0;
$tdataq_ctrl_saldos_prod_paa[".nPrinterPageScale"] = 100;

$tdataq_ctrl_saldos_prod_paa[".nPrinterSplitRecords"] = 40;

$tdataq_ctrl_saldos_prod_paa[".geocodingEnabled"] = false;










$tdataq_ctrl_saldos_prod_paa[".pageSize"] = 20;

$tdataq_ctrl_saldos_prod_paa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_ctrl_saldos_prod_paa[".strOrderBy"] = $tstrOrderBy;

$tdataq_ctrl_saldos_prod_paa[".orderindexes"] = array();

$tdataq_ctrl_saldos_prod_paa[".sqlHead"] = "SELECT PROD_ID,  	PRODUCTO,  	RESPONSABLE_002,  	PROD_PRESUPUESTO,  	QTY_ACT,  	SUM_ACT,  	VIGENCIA,  	SALDO_DISPONIBLE";
$tdataq_ctrl_saldos_prod_paa[".sqlFrom"] = "FROM q_ctrl_saldos_prod_paa";
$tdataq_ctrl_saldos_prod_paa[".sqlWhereExpr"] = "";
$tdataq_ctrl_saldos_prod_paa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_ctrl_saldos_prod_paa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_ctrl_saldos_prod_paa[".arrGroupsPerPage"] = $arrGPP;

$tdataq_ctrl_saldos_prod_paa[".highlightSearchResults"] = true;

$tableKeysq_ctrl_saldos_prod_paa = array();
$tdataq_ctrl_saldos_prod_paa[".Keys"] = $tableKeysq_ctrl_saldos_prod_paa;


$tdataq_ctrl_saldos_prod_paa[".hideMobileList"] = array();




//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "q_ctrl_saldos_prod_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_prod_paa","PROD_ID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "PROD_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_ID";

	
	
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


	$tdataq_ctrl_saldos_prod_paa["PROD_ID"] = $fdata;
		$tdataq_ctrl_saldos_prod_paa[".searchableFields"][] = "PROD_ID";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "q_ctrl_saldos_prod_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_prod_paa","PRODUCTO");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataq_ctrl_saldos_prod_paa["PRODUCTO"] = $fdata;
		$tdataq_ctrl_saldos_prod_paa[".searchableFields"][] = "PRODUCTO";
//	RESPONSABLE_002
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RESPONSABLE_002";
	$fdata["GoodName"] = "RESPONSABLE_002";
	$fdata["ownerTable"] = "q_ctrl_saldos_prod_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_prod_paa","RESPONSABLE_002");
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


	$tdataq_ctrl_saldos_prod_paa["RESPONSABLE_002"] = $fdata;
		$tdataq_ctrl_saldos_prod_paa[".searchableFields"][] = "RESPONSABLE_002";
//	PROD_PRESUPUESTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PROD_PRESUPUESTO";
	$fdata["GoodName"] = "PROD_PRESUPUESTO";
	$fdata["ownerTable"] = "q_ctrl_saldos_prod_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_prod_paa","PROD_PRESUPUESTO");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "PROD_PRESUPUESTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_PRESUPUESTO";

	
	
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


	$tdataq_ctrl_saldos_prod_paa["PROD_PRESUPUESTO"] = $fdata;
		$tdataq_ctrl_saldos_prod_paa[".searchableFields"][] = "PROD_PRESUPUESTO";
//	QTY_ACT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "QTY_ACT";
	$fdata["GoodName"] = "QTY_ACT";
	$fdata["ownerTable"] = "q_ctrl_saldos_prod_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_prod_paa","QTY_ACT");
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


	$tdataq_ctrl_saldos_prod_paa["QTY_ACT"] = $fdata;
		$tdataq_ctrl_saldos_prod_paa[".searchableFields"][] = "QTY_ACT";
//	SUM_ACT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SUM_ACT";
	$fdata["GoodName"] = "SUM_ACT";
	$fdata["ownerTable"] = "q_ctrl_saldos_prod_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_prod_paa","SUM_ACT");
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


	$tdataq_ctrl_saldos_prod_paa["SUM_ACT"] = $fdata;
		$tdataq_ctrl_saldos_prod_paa[".searchableFields"][] = "SUM_ACT";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "q_ctrl_saldos_prod_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_prod_paa","VIGENCIA");
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


	$tdataq_ctrl_saldos_prod_paa["VIGENCIA"] = $fdata;
		$tdataq_ctrl_saldos_prod_paa[".searchableFields"][] = "VIGENCIA";
//	SALDO_DISPONIBLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SALDO_DISPONIBLE";
	$fdata["GoodName"] = "SALDO_DISPONIBLE";
	$fdata["ownerTable"] = "q_ctrl_saldos_prod_paa";
	$fdata["Label"] = GetFieldLabel("q_ctrl_saldos_prod_paa","SALDO_DISPONIBLE");
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


	$tdataq_ctrl_saldos_prod_paa["SALDO_DISPONIBLE"] = $fdata;
		$tdataq_ctrl_saldos_prod_paa[".searchableFields"][] = "SALDO_DISPONIBLE";


$tables_data["q_ctrl_saldos_prod_paa"]=&$tdataq_ctrl_saldos_prod_paa;
$field_labels["q_ctrl_saldos_prod_paa"] = &$fieldLabelsq_ctrl_saldos_prod_paa;
$fieldToolTips["q_ctrl_saldos_prod_paa"] = &$fieldToolTipsq_ctrl_saldos_prod_paa;
$placeHolders["q_ctrl_saldos_prod_paa"] = &$placeHoldersq_ctrl_saldos_prod_paa;
$page_titles["q_ctrl_saldos_prod_paa"] = &$pageTitlesq_ctrl_saldos_prod_paa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_ctrl_saldos_prod_paa"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_ctrl_saldos_prod_paa"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_ctrl_saldos_prod_paa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PROD_ID,  	PRODUCTO,  	RESPONSABLE_002,  	PROD_PRESUPUESTO,  	QTY_ACT,  	SUM_ACT,  	VIGENCIA,  	SALDO_DISPONIBLE";
$proto0["m_strFrom"] = "FROM q_ctrl_saldos_prod_paa";
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
	"m_strName" => "PROD_ID",
	"m_strTable" => "q_ctrl_saldos_prod_paa",
	"m_srcTableName" => "q_ctrl_saldos_prod_paa"
));

$proto6["m_sql"] = "PROD_ID";
$proto6["m_srcTableName"] = "q_ctrl_saldos_prod_paa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "q_ctrl_saldos_prod_paa",
	"m_srcTableName" => "q_ctrl_saldos_prod_paa"
));

$proto8["m_sql"] = "PRODUCTO";
$proto8["m_srcTableName"] = "q_ctrl_saldos_prod_paa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_002",
	"m_strTable" => "q_ctrl_saldos_prod_paa",
	"m_srcTableName" => "q_ctrl_saldos_prod_paa"
));

$proto10["m_sql"] = "RESPONSABLE_002";
$proto10["m_srcTableName"] = "q_ctrl_saldos_prod_paa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PROD_PRESUPUESTO",
	"m_strTable" => "q_ctrl_saldos_prod_paa",
	"m_srcTableName" => "q_ctrl_saldos_prod_paa"
));

$proto12["m_sql"] = "PROD_PRESUPUESTO";
$proto12["m_srcTableName"] = "q_ctrl_saldos_prod_paa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "QTY_ACT",
	"m_strTable" => "q_ctrl_saldos_prod_paa",
	"m_srcTableName" => "q_ctrl_saldos_prod_paa"
));

$proto14["m_sql"] = "QTY_ACT";
$proto14["m_srcTableName"] = "q_ctrl_saldos_prod_paa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SUM_ACT",
	"m_strTable" => "q_ctrl_saldos_prod_paa",
	"m_srcTableName" => "q_ctrl_saldos_prod_paa"
));

$proto16["m_sql"] = "SUM_ACT";
$proto16["m_srcTableName"] = "q_ctrl_saldos_prod_paa";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "q_ctrl_saldos_prod_paa",
	"m_srcTableName" => "q_ctrl_saldos_prod_paa"
));

$proto18["m_sql"] = "VIGENCIA";
$proto18["m_srcTableName"] = "q_ctrl_saldos_prod_paa";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SALDO_DISPONIBLE",
	"m_strTable" => "q_ctrl_saldos_prod_paa",
	"m_srcTableName" => "q_ctrl_saldos_prod_paa"
));

$proto20["m_sql"] = "SALDO_DISPONIBLE";
$proto20["m_srcTableName"] = "q_ctrl_saldos_prod_paa";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "q_ctrl_saldos_prod_paa";
$proto23["m_srcTableName"] = "q_ctrl_saldos_prod_paa";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "PROD_ID";
$proto23["m_columns"][] = "PRODUCTO";
$proto23["m_columns"][] = "RESPONSABLE_002";
$proto23["m_columns"][] = "PROD_PRESUPUESTO";
$proto23["m_columns"][] = "QTY_ACT";
$proto23["m_columns"][] = "SUM_ACT";
$proto23["m_columns"][] = "VIGENCIA";
$proto23["m_columns"][] = "SALDO_DISPONIBLE";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "q_ctrl_saldos_prod_paa";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "q_ctrl_saldos_prod_paa";
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
$proto0["m_srcTableName"]="q_ctrl_saldos_prod_paa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_ctrl_saldos_prod_paa = createSqlQuery_q_ctrl_saldos_prod_paa();


	
										;

								

$tdataq_ctrl_saldos_prod_paa[".sqlquery"] = $queryData_q_ctrl_saldos_prod_paa;

$tableEvents["q_ctrl_saldos_prod_paa"] = new eventsBase;
$tdataq_ctrl_saldos_prod_paa[".hasEvents"] = false;

?>