<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
    $APPLICATION->IncludeComponent(
        "bitrix:catalog.compare.list",
        "top_compare",
        Array(
            "IBLOCK_TYPE"            => "catalog",
            // Тип инфоблока
            "IBLOCK_ID"              => "7",
            // Инфоблок
            "AJAX_MODE"              => "Y",
            // Включить режим AJAX
            "AJAX_OPTION_JUMP"       => "N",
            // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE"      => "Y",
            // Включить подгрузку стилей
            "AJAX_OPTION_HISTORY"    => "N",
            // Включить эмуляцию навигации браузера
            "DETAIL_URL"             => "#SITE_DIR#/#IBLOCK_CODE#/#SECTION_CODE#/#CODE#/",
            // URL, ведущий на страницу с содержимым элемента раздела
            "COMPARE_URL"            => "/catalog/compare.php",
            // URL страницы с таблицей сравнения
            "NAME"                   => "CATALOG_COMPARE_LIST",
            // Уникальное имя для списка сравнения
            "AJAX_OPTION_ADDITIONAL" => "",
            // Дополнительный идентификатор
        ),
        false
    );
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>