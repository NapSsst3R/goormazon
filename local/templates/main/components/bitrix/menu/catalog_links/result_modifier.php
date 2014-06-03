<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
    $last = 0;

    foreach($arResult as $k => $arItem){
        if($arItem['DEPTH_LEVEL']==1){
            $last = $k;
        }
    }
    $arResult[$last]['PARAMS']['LAST'] = 'Y';
?>