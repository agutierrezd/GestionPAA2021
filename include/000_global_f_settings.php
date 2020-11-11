<?php



$tdata000_global_f = array();
$tdata000_global_f[".searchableFields"] = array();
$tdata000_global_f[".ShortName"] = "000_global_f";
$tdata000_global_f[".OwnerID"] = "";
$tdata000_global_f[".OriginalTable"] = "000_global";


$tdata000_global_f[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata000_global_f[".originalPagesByType"] = $tdata000_global_f[".pagesByType"];
$tdata000_global_f[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata000_global_f[".originalPages"] = $tdata000_global_f[".pages"];
$tdata000_global_f[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata000_global_f[".originalDefaultPages"] = $tdata000_global_f[".defaultPages"];

//	field labels
$fieldLabels000_global_f = array();
$fieldToolTips000_global_f = array();
$pageTitles000_global_f = array();
$placeHolders000_global_f = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels000_global_f["Spanish"] = array();
	$fieldToolTips000_global_f["Spanish"] = array();
	$placeHolders000_global_f["Spanish"] = array();
	$pageTitles000_global_f["Spanish"] = array();
	$fieldLabels000_global_f["Spanish"]["RUBRO_ID"] = "RUBRO ID";
	$fieldToolTips000_global_f["Spanish"]["RUBRO_ID"] = "";
	$placeHolders000_global_f["Spanish"]["RUBRO_ID"] = "";
	$fieldLabels000_global_f["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTips000_global_f["Spanish"]["VIGENCIA"] = "";
	$placeHolders000_global_f["Spanish"]["VIGENCIA"] = "";
	$fieldLabels000_global_f["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTips000_global_f["Spanish"]["UEJ"] = "";
	$placeHolders000_global_f["Spanish"]["UEJ"] = "";
	$fieldLabels000_global_f["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTips000_global_f["Spanish"]["DESCRIPCION"] = "";
	$placeHolders000_global_f["Spanish"]["DESCRIPCION"] = "";
	$fieldLabels000_global_f["Spanish"]["PRESUPUESTO"] = "PRESUPUESTO";
	$fieldToolTips000_global_f["Spanish"]["PRESUPUESTO"] = "";
	$placeHolders000_global_f["Spanish"]["PRESUPUESTO"] = "";
	$fieldLabels000_global_f["Spanish"]["SALDO"] = "SALDO POR UTILIZAR";
	$fieldToolTips000_global_f["Spanish"]["SALDO"] = "";
	$placeHolders000_global_f["Spanish"]["SALDO"] = "";
	$fieldLabels000_global_f["Spanish"]["UTILIZADO"] = "UTILIZADO";
	$fieldToolTips000_global_f["Spanish"]["UTILIZADO"] = "";
	$placeHolders000_global_f["Spanish"]["UTILIZADO"] = "";
	if (count($fieldToolTips000_global_f["Spanish"]))
		$tdata000_global_f[".isUseToolTips"] = true;
}


	$tdata000_global_f[".NCSearch"] = true;



$tdata000_global_f[".shortTableName"] = "000_global_f";
$tdata000_global_f[".nSecOptions"] = 0;

$tdata000_global_f[".mainTableOwnerID"] = "";
$tdata000_global_f[".entityType"] = 1;

$tdata000_global_f[".strOriginalTableName"] = "000_global";

	



$tdata000_global_f[".showAddInPopup"] = false;

$tdata000_global_f[".showEditInPopup"] = false;

$tdata000_global_f[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata000_global_f[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata000_global_f[".listAjax"] = false;
//	temporary
$tdata000_global_f[".listAjax"] = false;

	$tdata000_global_f[".audit"] = false;

	$tdata000_global_f[".locking"] = false;


$pages = $tdata000_global_f[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata000_global_f[".edit"] = true;
	$tdata000_global_f[".afterEditAction"] = 1;
	$tdata000_global_f[".closePopupAfterEdit"] = 1;
	$tdata000_global_f[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata000_global_f[".add"] = true;
$tdata000_global_f[".afterAddAction"] = 1;
$tdata000_global_f[".closePopupAfterAdd"] = 1;
$tdata000_global_f[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata000_global_f[".list"] = true;
}



$tdata000_global_f[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata000_global_f[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata000_global_f[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata000_global_f[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata000_global_f[".printFriendly"] = true;
}



$tdata000_global_f[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata000_global_f[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata000_global_f[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata000_global_f[".isUseAjaxSuggest"] = true;

$tdata000_global_f[".rowHighlite"] = true;





$tdata000_global_f[".ajaxCodeSnippetAdded"] = false;

$tdata000_global_f[".buttonsAdded"] = false;

$tdata000_global_f[".addPageEvents"] = false;

// use timepicker for search panel
$tdata000_global_f[".isUseTimeForSearch"] = false;


$tdata000_global_f[".badgeColor"] = "D2AF80";


$tdata000_global_f[".allSearchFields"] = array();
$tdata000_global_f[".filterFields"] = array();
$tdata000_global_f[".requiredSearchFields"] = array();

$tdata000_global_f[".googleLikeFields"] = array();
$tdata000_global_f[".googleLikeFields"][] = "RUBRO_ID";
$tdata000_global_f[".googleLikeFields"][] = "VIGENCIA";
$tdata000_global_f[".googleLikeFields"][] = "UEJ";
$tdata000_global_f[".googleLikeFields"][] = "DESCRIPCION";
$tdata000_global_f[".googleLikeFields"][] = "PRESUPUESTO";
$tdata000_global_f[".googleLikeFields"][] = "UTILIZADO";
$tdata000_global_f[".googleLikeFields"][] = "SALDO";



$tdata000_global_f[".tableType"] = "list";

$tdata000_global_f[".printerPageOrientation"] = 0;
$tdata000_global_f[".nPrinterPageScale"] = 100;

$tdata000_global_f[".nPrinterSplitRecords"] = 40;

$tdata000_global_f[".geocodingEnabled"] = false;










$tdata000_global_f[".pageSize"] = 20;

$tdata000_global_f[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata000_global_f[".strOrderBy"] = $tstrOrderBy;

$tdata000_global_f[".orderindexes"] = array();

$tdata000_global_f[".sqlHead"] = "SELECT RUBRO_ID,  	VIGENCIA,  	UEJ,  	DESCRIPCION,  	PRESUPUESTO,  	UTILIZADO,  	SALDO";
$tdata000_global_f[".sqlFrom"] = "FROM `000_global`";
$tdata000_global_f[".sqlWhereExpr"] = "";
$tdata000_global_f[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata000_global_f[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata000_global_f[".arrGroupsPerPage"] = $arrGPP;

$tdata000_global_f[".highlightSearchResults"] = true;

$tableKeys000_global_f = array();
$tableKeys000_global_f[] = "RUBRO_ID";
$tdata000_global_f[".Keys"] = $tableKeys000_global_f;


$tdata000_global_f[".hideMobileList"] = array();




//	RUBRO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO_ID";
	$fdata["GoodName"] = "RUBRO_ID";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_f","RUBRO_ID");
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


	$tdata000_global_f["RUBRO_ID"] = $fdata;
		$tdata000_global_f[".searchableFields"][] = "RUBRO_ID";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_f","VIGENCIA");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "RUBRO_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata000_global_f["VIGENCIA"] = $fdata;
		$tdata000_global_f[".searchableFields"][] = "VIGENCIA";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_f","UEJ");
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdata000_global_f["UEJ"] = $fdata;
		$tdata000_global_f[".searchableFields"][] = "UEJ";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_f","DESCRIPCION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
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


	$tdata000_global_f["DESCRIPCION"] = $fdata;
		$tdata000_global_f[".searchableFields"][] = "DESCRIPCION";
//	PRESUPUESTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRESUPUESTO";
	$fdata["GoodName"] = "PRESUPUESTO";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_f","PRESUPUESTO");
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


	$tdata000_global_f["PRESUPUESTO"] = $fdata;
		$tdata000_global_f[".searchableFields"][] = "PRESUPUESTO";
//	UTILIZADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UTILIZADO";
	$fdata["GoodName"] = "UTILIZADO";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_f","UTILIZADO");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "UTILIZADO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UTILIZADO";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdata000_global_f["UTILIZADO"] = $fdata;
		$tdata000_global_f[".searchableFields"][] = "UTILIZADO";
//	SALDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SALDO";
	$fdata["GoodName"] = "SALDO";
	$fdata["ownerTable"] = "000_global";
	$fdata["Label"] = GetFieldLabel("000_global_f","SALDO");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "SALDO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SALDO";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdata000_global_f["SALDO"] = $fdata;
		$tdata000_global_f[".searchableFields"][] = "SALDO";


$tables_data["000_global_f"]=&$tdata000_global_f;
$field_labels["000_global_f"] = &$fieldLabels000_global_f;
$fieldToolTips["000_global_f"] = &$fieldToolTips000_global_f;
$placeHolders["000_global_f"] = &$placeHolders000_global_f;
$page_titles["000_global_f"] = &$pageTitles000_global_f;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["000_global_f"] = array();
//	001_rubro_f
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="001_rubro_f";
		$detailsParam["dOriginalTable"] = "001_rubro";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "001_rubro_f";
	$detailsParam["dCaptionTable"] = GetTableCaption("001_rubro_f");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["000_global_f"][$dIndex] = $detailsParam;

	
		$detailsTablesData["000_global_f"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["000_global_f"][$dIndex]["masterKeys"][]="RUBRO_ID";

				$detailsTablesData["000_global_f"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["000_global_f"][$dIndex]["detailKeys"][]="RUBRO_ID_FK";

// tables which are master tables for current table (detail)
$masterTablesData["000_global_f"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_000_global_f()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO_ID,  	VIGENCIA,  	UEJ,  	DESCRIPCION,  	PRESUPUESTO,  	UTILIZADO,  	SALDO";
$proto0["m_strFrom"] = "FROM `000_global`";
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
	"m_strName" => "RUBRO_ID",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_f"
));

$proto6["m_sql"] = "RUBRO_ID";
$proto6["m_srcTableName"] = "000_global_f";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_f"
));

$proto8["m_sql"] = "VIGENCIA";
$proto8["m_srcTableName"] = "000_global_f";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_f"
));

$proto10["m_sql"] = "UEJ";
$proto10["m_srcTableName"] = "000_global_f";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_f"
));

$proto12["m_sql"] = "DESCRIPCION";
$proto12["m_srcTableName"] = "000_global_f";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRESUPUESTO",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_f"
));

$proto14["m_sql"] = "PRESUPUESTO";
$proto14["m_srcTableName"] = "000_global_f";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UTILIZADO",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_f"
));

$proto16["m_sql"] = "UTILIZADO";
$proto16["m_srcTableName"] = "000_global_f";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SALDO",
	"m_strTable" => "000_global",
	"m_srcTableName" => "000_global_f"
));

$proto18["m_sql"] = "SALDO";
$proto18["m_srcTableName"] = "000_global_f";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "000_global";
$proto21["m_srcTableName"] = "000_global_f";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "RUBRO_ID";
$proto21["m_columns"][] = "VIGENCIA";
$proto21["m_columns"][] = "UEJ";
$proto21["m_columns"][] = "DESCRIPCION";
$proto21["m_columns"][] = "PRESUPUESTO";
$proto21["m_columns"][] = "UTILIZADO";
$proto21["m_columns"][] = "SALDO";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`000_global`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "000_global_f";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="000_global_f";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_000_global_f = createSqlQuery_000_global_f();


	
										;

							

$tdata000_global_f[".sqlquery"] = $queryData_000_global_f;

include_once(getabspath("include/000_global_f_events.php"));
$tableEvents["000_global_f"] = new eventclass_000_global_f;
$tdata000_global_f[".hasEvents"] = true;

?>