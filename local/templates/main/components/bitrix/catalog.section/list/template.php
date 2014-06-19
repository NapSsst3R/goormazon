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
                <a href="<?=$arElement['DETAIL_PAGE_URL']?>"><?=$arElement['NAME']?></a>
                <?if($arElement['PROPERTIES']['PODAROK_OPISANIE']['VALUE']):?>
                    <img src="/upload/stat_img/src/present-icon.png" />
                <?endif;?>
                <?=$arElement['PREVIEW_TEXT']?>
                <?if($arElement['PROPERTIES']['NALICHIE']['VALUE']=='Нет'):?>
                    <p class="out-store"><img src="/upload/stat_img/src/out-store.png" /> Нет на складе</p>
                <?//elseif($arElement['PROPERTIES']['NALICHIE']['VALUE']=='Под заказ'):?>

                <?else:?>
                    <p class="in-store"><img src="/upload/stat_img/src/in-store.png" /> В наличии</p>
                <?endif;?>
                <a href="javascript:;">Добавить к сравнению</a>
            </div>
            <div class="product_price_line col-lg-2 col-md-9 col-sm-9 col-xs-8">
                <div class="old_price"><?= $arElement['MIN_PRICE']['PRINT_DISCOUNT_VALUE'] ?></div>
                <div class="price"><?= $arElement['MIN_PRICE']['PRINT_DISCOUNT_VALUE'] ?>-</div>
                <div class="basket-button">
                    <a href="<?=$arElement['ADD_URL']?>"><img src="/upload/stat_img/src/buy-button.png"></a>
                </div>
            </div>
        </div>
    <? endforeach; ?>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <p><?= $arResult["NAV_STRING"] ?></p>
    <? endif ?>
</section>
