<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
require_once('inc/index_include.php');
?>
<div class="main_content_block clearfix col-xs-12">
    <div class="heading-dotted col-xs-12">
        <span><img src="/upload/stat_img/src/percent.png" alt="">&nbsp;Спецпредложения</span>
    </div>
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "main_page", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "7",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"SECTION_CODE" => "",
	"SECTION_USER_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "id",
	"ELEMENT_SORT_ORDER" => "asc",
	"ELEMENT_SORT_FIELD2" => "id",
	"ELEMENT_SORT_ORDER2" => "desc",
	"FILTER_NAME" => "arrFilterNew",
	"INCLUDE_SUBSECTIONS" => "Y",
	"SHOW_ALL_WO_SECTION" => "Y",
	"HIDE_NOT_AVAILABLE" => "N",
	"PAGE_ELEMENT_COUNT" => "12",
	"LINE_ELEMENT_COUNT" => "6",
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"OFFERS_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"OFFERS_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"OFFERS_SORT_FIELD" => "sort",
	"OFFERS_SORT_ORDER" => "asc",
	"OFFERS_SORT_FIELD2" => "id",
	"OFFERS_SORT_ORDER2" => "desc",
	"OFFERS_LIMIT" => "5",
	"TEMPLATE_THEME" => "blue",
	"PRODUCT_DISPLAY_MODE" => "N",
	"ADD_PICT_PROP" => "-",
	"LABEL_PROP" => "-",
	"PRODUCT_SUBSCRIPTION" => "N",
	"SHOW_DISCOUNT_PERCENT" => "N",
	"SHOW_OLD_PRICE" => "N",
	"MESS_BTN_BUY" => "Купить",
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",
	"MESS_BTN_SUBSCRIBE" => "Подписаться",
	"MESS_BTN_DETAIL" => "Подробнее",
	"MESS_NOT_AVAILABLE" => "Нет в наличии",
	"SECTION_URL" => "#SITE_DIR#/#IBLOCK_CODE#/#CODE#/",
	"DETAIL_URL" => "#SITE_DIR#/#IBLOCK_CODE#/#SECTION_CODE#/#CODE#/",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SET_META_KEYWORDS" => "N",
	"META_KEYWORDS" => "-",
	"SET_META_DESCRIPTION" => "N",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"ADD_SECTIONS_CHAIN" => "N",
	"DISPLAY_COMPARE" => "N",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
	"CACHE_FILTER" => "N",
	"PRICE_CODE" => array(
		0 => "Розница Интернет-магазин",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"CONVERT_CURRENCY" => "N",
	"BASKET_URL" => "/personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"USE_PRODUCT_QUANTITY" => "N",
	"ADD_PROPERTIES_TO_BASKET" => "Y",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"PARTIAL_PRODUCT_PROPERTIES" => "N",
	"PRODUCT_PROPERTIES" => array(
	),
	"OFFERS_CART_PROPERTIES" => array(
	),
	"PAGER_TEMPLATE" => ".default",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity"
	),
	false
);?>
    <div class="heading-dotted col-xs-12">
        <span><img src="/upload/stat_img/src/new.png" alt="">&nbsp;Хит</span>
    </div>
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "main_page", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "7",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"SECTION_CODE" => "",
	"SECTION_USER_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "id",
	"ELEMENT_SORT_ORDER" => "asc",
	"ELEMENT_SORT_FIELD2" => "id",
	"ELEMENT_SORT_ORDER2" => "desc",
	"FILTER_NAME" => "arrFilterSpecial",
	"INCLUDE_SUBSECTIONS" => "Y",
	"SHOW_ALL_WO_SECTION" => "Y",
	"HIDE_NOT_AVAILABLE" => "N",
	"PAGE_ELEMENT_COUNT" => "12",
	"LINE_ELEMENT_COUNT" => "6",
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"OFFERS_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"OFFERS_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"OFFERS_SORT_FIELD" => "sort",
	"OFFERS_SORT_ORDER" => "asc",
	"OFFERS_SORT_FIELD2" => "id",
	"OFFERS_SORT_ORDER2" => "desc",
	"OFFERS_LIMIT" => "5",
	"TEMPLATE_THEME" => "blue",
	"PRODUCT_DISPLAY_MODE" => "N",
	"ADD_PICT_PROP" => "-",
	"LABEL_PROP" => "-",
	"PRODUCT_SUBSCRIPTION" => "N",
	"SHOW_DISCOUNT_PERCENT" => "N",
	"SHOW_OLD_PRICE" => "N",
	"MESS_BTN_BUY" => "Купить",
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",
	"MESS_BTN_SUBSCRIBE" => "Подписаться",
	"MESS_BTN_DETAIL" => "Подробнее",
	"MESS_NOT_AVAILABLE" => "Нет в наличии",
	"SECTION_URL" => "#SITE_DIR#/#IBLOCK_CODE#/#CODE#/",
	"DETAIL_URL" => "#SITE_DIR#/#IBLOCK_CODE#/#SECTION_CODE#/#CODE#/",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SET_META_KEYWORDS" => "N",
	"META_KEYWORDS" => "-",
	"SET_META_DESCRIPTION" => "N",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"ADD_SECTIONS_CHAIN" => "N",
	"DISPLAY_COMPARE" => "N",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
	"CACHE_FILTER" => "N",
	"PRICE_CODE" => array(
		0 => "Розница Интернет-магазин",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"CONVERT_CURRENCY" => "N",
	"BASKET_URL" => "/personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"USE_PRODUCT_QUANTITY" => "N",
	"ADD_PROPERTIES_TO_BASKET" => "Y",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"PARTIAL_PRODUCT_PROPERTIES" => "N",
	"PRODUCT_PROPERTIES" => array(
	),
	"OFFERS_CART_PROPERTIES" => array(
	),
	"PAGER_TEMPLATE" => ".default",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity"
	),
	false
);?>
    <section class="text">
        <? $APPLICATION->IncludeFile(
            '/inc/main_page_text.php',
            array(),
            array('MODE' => 'html')
        ) ?>
    </section>
</div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>