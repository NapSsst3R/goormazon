<?
    global $APPLICATION;
    $aMenuLinksExt = $APPLICATION->IncludeComponent(
        "bitrix:menu.sections",
        "",
        Array(
            "IS_SEF" => "Y",
            "ID" => $_REQUEST["ID"],
            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "1",
            "SECTION_URL" => "#SITE_DIR#/#IBLOCK_CODE#/#CODE#/",
            "DEPTH_LEVEL" => "3",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000"
        )
    );
    $aMenuLinks = array_merge($aMenuLinks,$aMenuLinksExt);
?>