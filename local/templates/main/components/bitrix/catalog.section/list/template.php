<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
    /** @var array $arParams */
    /** @var array $arResult */
    /** @global CMain $APPLICATION */
    /** @global CUser $USER */
    /** @global CDatabase $DB */
    /** @var CBitrixComponentTemplate $this */
    /** @var string $templateName */
    /** @var string $templateFile */
    /** @var string $templateFolder */
    /** @var string $componentPath */
    /** @var CBitrixComponent $component */
    $this->setFrameMode(true);
?>
<section class="products clearfix row">
    <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
        <p><?= $arResult["NAV_STRING"] ?></p>
    <? endif ?>
    <? foreach ($arResult['ITEMS'] as $arElement): ?>
        <?
//        echo "<pre>"; print_r($arElement); echo "</pre>";
        $this->AddEditAction(
            $arElement['ID'],
            $arElement['EDIT_LINK'],
            CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT")
        );
        $this->AddDeleteAction(
            $arElement['ID'],
            $arElement['DELETE_LINK'],
            CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM'))
        );
        ?>
        <div class="product_line col-xs-12" id="<?= $this->GetEditAreaId($arElement['ID']); ?>">
            <div class="img col-lg-3 col-md-3 col-sm-3 col-xs-4">
                <a href="<?=$arElement['DETAIL_PAGE_URL']?>">
                    <img src="<?=(strlen($arElement['DETAIL_PICTURE']['SRC'])>0)?$arElement['DETAIL_PICTURE']['SRC']:$this->GetFolder().'/images/no_photo.png'?>" class="img-responsive"  alt="<?=$arItem['NAME']?>"/>
                </a>
            </div>
            <div class="product_info_line col-lg-7 col-md-9 col-sm-9 col-xs-8">
                <a class="name_link_list" href="<?=$arElement['DETAIL_PAGE_URL']?>"><?=$arElement['NAME']?></a><br />
                <?if($arElement['PROPERTIES']['PODAROK_OPISANIE']['VALUE']!=""):?>
                    <a href="javascript:;">
                    <img src="/upload/stat_img/src/present-icon.png" /></a> <?=$arResult['PRESENTS'][$arElement['PROPERTIES']['PODAROK_OPISANIE']['VALUE']]?>
                <?endif;?>
                <?=$arElement['PROPERTIES']['OPISANIE_DLYA_ANONSA']['~VALUE']?>
                <?if($arElement['PROPERTIES']['NALICHIE']['VALUE']=='Нет'):?>
                    <p class="out-store"><img src="/upload/stat_img/src/out-store.png" /> Нет на складе</p>
                <?//elseif($arElement['PROPERTIES']['NALICHIE']['VALUE']=='Под заказ'):?>

                <?else:?>
                    <p class="in-store"><img src="/upload/stat_img/src/in-store.png" /> В наличии</p>
                <?endif;?>
                <div class="col-xs-12 fav_izb_block_det left_padd_zero">
                    <span class="square"></span><a href="<?=$arElement['COMPARE_URL']?>" id="comp_<?=$arElement['ID']?>" data-action="add" data-href="<?=$APPLICATION->GetCurPageParam('action=REMOVE_FROM_COMPARE_LIST&id='.$arElement['ID'], array('action', 'id'));?>" class="fav_izb_link_det compare_send">Добавить к сравнению</a>
                </div>
            </div>
            <div class="product_price_line col-lg-2 col-md-9 col-sm-9 col-xs-8">
                <?if($arElement['PRICES']['Старая цена']['VALUE']>0):?><div class="old_price"><?= $arElement['PRICES']['Старая цена']['PRINT_VALUE'] ?>-</div><?endif;?>
                <div class="price"><?= $arElement['MIN_PRICE']['PRINT_DISCOUNT_VALUE'] ?>-</div>
                <div class="basket-button">
                    <a href="<?=$arElement['ADD_URL']?>"><img src="/upload/stat_img/src/buy-button.png"></a>
                </div>
            </div>
        </div>
    <? endforeach; ?>
    <div class="col-xs-12" style="text-align:center;">
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <?= $arResult["NAV_STRING"] ?>
    <? endif ?>
    </div>
</section>
