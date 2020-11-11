<?php



$tdatatparam_fuenterec = array();
$tdatatparam_fuenterec[".searchableFields"] = array();
$tdatatparam_fuenterec[".ShortName"] = "tparam_fuenterec";
$tdatatparam_fuenterec[".OwnerID"] = "";
$tdatatparam_fuenterec[".OriginalTable"] = "tparam_fuenterec";


$tdatatparam_fuenterec[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_fuenterec[".originalPagesByType"] = $tdatatparam_fuenterec[".pagesByType"];
$tdatatparam_fuenterec[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_fuenterec[".originalPages"] = $tdatatparam_fuenterec[".pages"];
$tdatatparam_fuenterec[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_fuenterec[".originalDefaultPages"] = $tdatatparam_fuenterec[".defaultPages"];

//	field labels
$fieldLabelstparam_fuenterec = array();
$fieldToolTipstparam_fuenterec = array();
$pageTitlestparam_fuenterec = array();
$placeHolderstparam_fuenterec = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_fuenterec["Spanish"] = array();
	$fieldToolTipstparam_fuenterec["Spanish"] = array();
	$placeHolderstparam_fuenterec["Spanish"] = array();
	$pageTitlestparam_fuenterec["Spanish"] = array();
	$fieldLabelstparam_fuenterec["Spanish"]["fuenterec_id"] = "Fuenterec Id";
	$fieldToolTipstparam_fuenterec["Spanish"]["fuenterec_id"] = "";
	$placeHolderstparam_fuenterec["Spanish"]["fuenterec_id"] = "";
	$fieldLabelstparam_fuenterec["Spanish"]["fuenterec_name"] = "Fuenterec Name";
	$fieldToolTipstparam_fuenterec["Spanish"]["fuenterec_name"] = "";
	$placeHolderstparam_fuenterec["Spanish"]["fuenterec_name"] = "";
	if (count($fieldToolTipstparam_fuenterec["Spanish"]))
		$tdatatparam_fuenterec[".isUseToolTips"] = true;
}


	$tdatatparam_fuenterec[".NCSearch"] = true;



$tdatatparam_fuenterec[".shortTableName"] = "tparam_fuenterec";
$tdatatparam_fuenterec[".nSecOptions"] = 0;

$tdatatparam_fuenterec[".mainTableOwnerID"] = "";
$tdatatparam_fuenterec[".entityType"] = 0;

$tdatatparam_fuenterec[".strOriginalTableName"] = "tparam_fuenterec";

	



$tdatatparam_fuenterec[".showAddInPopup"] = false;

$tdatatparam_fuenterec[".showEditInPopup"] = false;

$tdatatparam_fuenterec[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatparam_fuenterec[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatparam_fuenterec[".listAjax"] = false;
//	temporary
$tdatatparam_fuenterec[".listAjax"] = false;

	$tdatatparam_fuenterec[".audit"] = false;

	$tdatatparam_fuenterec[".locking"] = false;


$pages = $tdatatparam_fuenterec[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_fuenterec[".edit"] = true;
	$tdatatparam_fuenterec[".afterEditAction"] = 1;
	$tdatatparam_fuenterec[".closePopupAfterEdit"] = 1;
	$tdatatparam_fuenterec[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_fuenterec[".add"] = true;
$tdatatparam_fuenterec[".afterAddAction"] = 1;
$tdatatparam_fuenterec[".closePopupAfterAdd"] = 1;
$tdatatparam_fuenterec[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_fuenterec[".list"] = true;
}



$tdatatparam_fuenterec[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_fuenterec[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_fuenterec[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_fuenterec[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_fuenterec[".printFriendly"] = true;
}



$tdatatparam_fuenterec[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_fuenterec[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_fuenterec[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_fuenterec[".isUseAjaxSuggest"] = true;

$tdatatparam_fuenterec[".rowHighlite"] = true;





$tdatatparam_fuenterec[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_fuenterec[".buttonsAdded"] = false;

$tdatatparam_fuenterec[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_fuenterec[".isUseTimeForSearch"] = false;


$tdatatparam_fuenterec[".badgeColor"] = "DAA520";


$tdatatparam_fuenterec[".allSearchFields"] = array();
$tdatatparam_fuenterec[".filterFields"] = array();
$tdatatparam_fuenterec[".requiredSearchFields"] = array();

$tdatatparam_fuenterec[".googleLikeFields"] = array();
$tdatatparam_fuenterec[".googleLikeFields"][] = "fuenterec_id";
$tdatatparam_fuenterec[".googleLikeFields"][] = "fuenterec_name";



$tdatatparam_fuenterec[".tableType"] = "list";

$tdatatparam_fuenterec[".printerPageOrientation"] = 0;
$tdatatparam_fuenterec[".nPrinterPageScale"] = 100;

$tdatatparam_fuenterec[".nPrinterSplitRecords"] = 40;

$tdatatparam_fuenterec[".geocodingEnabled"] = false;










$tdatatparam_fuenterec[".pageSize"] = 20;

$tdatatparam_fuenterec[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatparam_fuenterec[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_fuenterec[".orderindexes"] = array();

$tdatatparam_fuenterec[".sqlHead"] = "SELECT fuenterec_id,  	fuenterec_name";
$tdatatparam_fuenterec[".sqlFrom"] = "FROM tparam_fuenterec";
$tdatatparam_fuenterec[".sqlWhereExpr"] = "";
$tdatatparam_fuenterec[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_fuenterec[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_fuenterec[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_fuenterec[".highlightSearchResults"] = true;

$tableKeystparam_fuenterec = array();
$tableKeystparam_fuenterec[] = "fuenterec_id";
$tdatatparam_fuenterec[".Keys"] = $tableKeystparam_fuenterec;


$tdatatparam_fuenterec[".hideMobileList"] = array();




//	fuenterec_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fuenterec_id";
	$fdata["GoodName"] = "fuenterec_id";
	$fdata["ownerTable"] = "tparam_fuenterec";
	$fdata["Label"] = GetFieldLabel("tparam_fuenterec","fuenterec_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "fuenterec_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fuenterec_id";

	
	
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


	$tdatatparam_fuenterec["fuenterec_id"] = $fdata;
		$tdatatparam_fuenterec[".searchableFields"][] = "fuenterec_id";
//	fuenterec_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fuenterec_name";
	$fdata["GoodName"] = "fuenterec_name";
	$fdata["ownerTable"] = "tparam_fuenterec";
	$fdata["Label"] = GetFieldLabel("tparam_fuenterec","fuenterec_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fuenterec_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fuenterec_name";

	
	
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


	$tdatatparam_fuenterec["fuenterec_name"] = $fdata;
		$tdatatparam_fuenterec[".searchableFields"][] = "fuenterec_name";


$tables_data["tparam_fuenterec"]=&$tdatatparam_fuenterec;
$field_labels["tparam_fuenterec"] = &$fieldLabelstparam_fuenterec;
$fieldToolTips["tparam_fuenterec"] = &$fieldToolTipstparam_fuenterec;
$placeHolders["tparam_fuenterec"] = &$placeHolderstparam_fuenterec;
$page_titles["tparam_fuenterec"] = &$pageTitlestparam_fuenterec;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tparam_fuenterec"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tparam_fuenterec"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tparam_fuenterec()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fuenterec_id,  	fuenterec_name";
$proto0["m_strFrom"] = "FROM tparam_fuenterec";
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
	"m_strName" => "fuenterec_id",
	"m_strTable" => "tparam_fuenterec",
	"m_srcTableName" => "tparam_fuenterec"
));

$proto6["m_sql"] = "fuenterec_id";
$proto6["m_srcTableName"] = "tparam_fuenterec";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fuenterec_name",
	"m_strTable" => "tparam_fuenterec",
	"m_srcTableName" => "tparam_fuenterec"
));

$proto8["m_sql"] = "fuenterec_name";
$proto8["m_srcTableName"] = "tparam_fuenterec";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_fuenterec";
$proto11["m_srcTableName"] = "tparam_fuenterec";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "fuenterec_id";
$proto11["m_columns"][] = "fuenterec_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_fuenterec";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_fuenterec";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_fuenterec";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_fuenterec = createSqlQuery_tparam_fuenterec();


	
										;

		

$tdatatparam_fuenterec[".sqlquery"] = $queryData_tparam_fuenterec;

$tableEvents["tparam_fuenterec"] = new eventsBase;
$tdatatparam_fuenterec[".hasEvents"] = false;

?>