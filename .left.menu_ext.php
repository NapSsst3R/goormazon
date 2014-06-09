<?
    global $APPLICATION;
    $aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
	"IS_SEF" => "N",
	"ID" => $_REQUEST["ID"],
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"SECTION_URL" => "#SITE_DIR#/#IBLOCK_CODE#/#CODE#/",
	"DEPTH_LEVEL" => "3",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000"
	),
	false
);
    $aMenuLinks = array_merge($aMenuLinks,$aMenuLinksExt);
?>