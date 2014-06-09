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
            <div class="product col-xs-4">
                <div class="img col-md-5 col-xs-12"><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><img
                            src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="name"/></a>
                </div>
                <div class="desc col-md-7 col-xs-12">
                    <div class="name"><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></div>
                    <div class="price"><?= $arItem['MIN_PRICE']['PRINT_DISCOUNT_VALUE'] ?>- <span
                            class="old_price">3700</span></div>
                </div>
            </div>
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