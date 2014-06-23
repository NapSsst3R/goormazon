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
                    <div class="price"><?= $arItem['MIN_PRICE']['PRINT_DISCOUNT_VALUE'] ?>- <?if($arElement['PRICES']['Старая цена']['VALUE']>0):?><span
                            class="old_price"><?= $arElement['PRICES']['Старая цена']['PRINT_VALUE'] ?></span><?endif;?></div>
                </div>
            </div>
        <? endforeach; ?>
    <? else: ?>
        <?echo '<div class="col-xs-12"><p>В данной категории отсутствуют товары.</p></div>';?>
    <?endif; ?>
</section>