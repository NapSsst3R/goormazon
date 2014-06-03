<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
    global $APPLICATION;
    $cp = $this->__component; // объект компонента
    if (is_object($cp))
    {
        $cp->arResult['BG_KEYS']=array();
        foreach($arResult['ITEMS'] as $arItem){
            $cp->arResult['BG_KEYS'][$this->GetEditAreaId($arItem['ID'])] = $arItem['PROPERTIES']['background_color']['VALUE'];
        }
        $cp->SetResultCacheKeys(array('BG_KEYS'));
    }
?>