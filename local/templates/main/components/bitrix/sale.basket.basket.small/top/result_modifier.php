<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
    foreach ($arResult['ITEMS'] as $k => $arItem) {
        $arIds = $arItem['PRODUCT_ID'];
    }
    CModule::IncludeModule('iblock');
    $res = CIblockElement::GetList(array(), array('ID'=>$arIds), false, false, array('ID','PREVIEW_PICTURE'));
    while($arRes = $res->GetNext()){
        $arProducts[$arRes['ID']] = $arRes['PREVIEW_PICTURE'];
    }
    foreach ($arResult['ITEMS'] as $k => $arItem) {
        $arResult['ITEMS'][$k]['PICTURE'] = CFile::ResizeImageGet($arProducts[$arItem['PRODUCT_ID']], array('width'=>40, 'height'=>40), BX_RESIZE_IMAGE_PROPORTIONAL);
    }
?>