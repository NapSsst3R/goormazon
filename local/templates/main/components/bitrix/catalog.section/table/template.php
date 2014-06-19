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
    <? if (!empty($arResult['ITEMS'])) : ?>
        <? foreach ($arResult['ITEMS'] as $k => $arItem): ?>
            <?if($k%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
                <div class="one-line-elements clearfix">
            <?endif;?>
            <div class="product col-xs-4">
                <div class="img col-md-5 col-xs-12"><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><img
                            src="<?= (strlen($arItem['DETAIL_PICTURE']['SRC'])>0)?$arItem['DETAIL_PICTURE']['SRC']:$this->GetFolder().'/images/no_photo.png' ?>" class="img-responsive"  alt="<?=$arItem['NAME']?>"/></a>
                </div>
                <div class="desc col-md-7 col-xs-12">
                    <div class="name"><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></div>
                    <div class="price"><?= $arItem['MIN_PRICE']['PRINT_DISCOUNT_VALUE'] ?>- <span
                            class="old_price">3700</span></div>
                </div>
            </div>
            <?$k++;
            if($k%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
                </div>
            <?endif?>
            <?if($k%$arParams["LINE_ELEMENT_COUNT"] != 0 && $k==count($arResult['ITEMS'])):?>
                <?while($k%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
                    <div class="product col-xs-4">&nbsp;</div>
                    <?$k++;?>
                <?endwhile;?>
                <?if($k%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
                    </div>
                <?endif;?>
            <?endif?>
        <? endforeach; ?>
        <div class="col-xs-12" style="text-align:center;">
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <? echo $arResult["NAV_STRING"]; ?>
        <?endif;?>
        </div>
    <? else: ?>
        echo '<p>В данной категории отсутствуют товары.</p>';
    <?endif; ?>
</section>