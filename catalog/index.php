<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?><?$APPLICATION->IncludeComponent("bitrix:catalog", ".default", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"HIDE_NOT_AVAILABLE" => "N",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/catalog/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"SET_STATUS_404" => "N",
	"SET_TITLE" => "Y",
	"ADD_SECTIONS_CHAIN" => "Y",
	"ADD_ELEMENT_CHAIN" => "Y",
	"USE_ELEMENT_COUNTER" => "N",
	"USE_FILTER" => "N",
	"USE_REVIEW" => "N",
	"USE_COMPARE" => "N",
	"PRICE_CODE" => array(
		0 => "Розница Интернет-магазин",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"CONVERT_CURRENCY" => "N",
	"BASKET_URL" => "/personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"USE_PRODUCT_QUANTITY" => "N",
	"ADD_PROPERTIES_TO_BASKET" => "N",
	"SHOW_TOP_ELEMENTS" => "N",
	"SECTION_COUNT_ELEMENTS" => "N",
	"SECTION_TOP_DEPTH" => "2",
	"SECTIONS_VIEW_MODE" => "LIST",
	"SECTIONS_SHOW_PARENT_NAME" => "Y",
	"PAGE_ELEMENT_COUNT" => "30",
	"LINE_ELEMENT_COUNT" => "3",
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"ELEMENT_SORT_FIELD2" => "id",
	"ELEMENT_SORT_ORDER2" => "desc",
	"LIST_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"INCLUDE_SUBSECTIONS" => "Y",
	"LIST_META_KEYWORDS" => "-",
	"LIST_META_DESCRIPTION" => "-",
	"LIST_BROWSER_TITLE" => "NAME",
	"LIST_OFFERS_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"LIST_OFFERS_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"LIST_OFFERS_LIMIT" => "5",
	"DETAIL_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"DETAIL_META_KEYWORDS" => "-",
	"DETAIL_META_DESCRIPTION" => "-",
	"DETAIL_BROWSER_TITLE" => "-",
	"DETAIL_OFFERS_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"DETAIL_OFFERS_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"DETAIL_DISPLAY_NAME" => "Y",
	"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
	"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
	"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
	"LINK_IBLOCK_TYPE" => "catalog",
	"LINK_IBLOCK_ID" => "2",
	"LINK_PROPERTY_SID" => "CML2_LINK",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
	"USE_ALSO_BUY" => "N",
	"USE_STORE" => "N",
	"OFFERS_SORT_FIELD" => "sort",
	"OFFERS_SORT_ORDER" => "asc",
	"OFFERS_SORT_FIELD2" => "id",
	"OFFERS_SORT_ORDER2" => "desc",
	"PAGER_TEMPLATE" => ".default",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"TEMPLATE_THEME" => "blue",
	"ADD_PICT_PROP" => "MORE_PHOTO",
	"LABEL_PROP" => "-",
	"PRODUCT_DISPLAY_MODE" => "N",
	"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
	"OFFER_TREE_PROPS" => array(
		0 => "CML2_MANUFACTURER",
	),
	"SHOW_DISCOUNT_PERCENT" => "N",
	"SHOW_OLD_PRICE" => "N",
	"DETAIL_SHOW_MAX_QUANTITY" => "N",
	"MESS_BTN_BUY" => "Купить",
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",
	"MESS_BTN_COMPARE" => "Сравнение",
	"MESS_BTN_DETAIL" => "Подробнее",
	"MESS_NOT_AVAILABLE" => "Нет в наличии",
	"DETAIL_USE_VOTE_RATING" => "N",
	"DETAIL_USE_COMMENTS" => "N",
	"DETAIL_BRAND_USE" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"FILTER_VIEW_MODE" => "VERTICAL",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"PARTIAL_PRODUCT_PROPERTIES" => "N",
	"PRODUCT_PROPERTIES" => array(
	),
	"OFFERS_CART_PROPERTIES" => array(
	),
	"SEF_URL_TEMPLATES" => array(
		"sections" => "",
		"section" => "#SECTION_CODE#/",
		"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		"compare" => "compare.php?action=#ACTION_CODE#",
	),
	"VARIABLE_ALIASES" => array(
		"compare" => array(
			"ACTION_CODE" => "action",
		),
	)
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>