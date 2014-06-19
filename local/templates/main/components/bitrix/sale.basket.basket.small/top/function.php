<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
    CModule::IncludeModule('sale');
    if($_REQUEST['del']=='Y'){
        CSaleBasket::Delete($_REQUEST['id']);
    }
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>