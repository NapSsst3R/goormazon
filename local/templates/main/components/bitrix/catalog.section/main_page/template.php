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
<section class="products clearfix row main_page">
    <? if (!empty($arResult['ITEMS'])) : ?>
        <? foreach ($arResult['ITEMS'] as $k => $arItem): ?>
            <?if($k%6 == 0 && false):?>
                <div class="one-line-elements clearfix">
            <?endif;?>
            <div class="product col-xs-4 col-sm-3 col-md-3 col-lg-2<?=($k%5==0 || $k%6==0)?' hidden-xs hidden-sm hidden-md':''?><?=($k%4==0)?' hidden-xs':''?>">
                <div class="show_hover clearfix">
                    <?if(!empty($arItem['DETAIL_PICTURE'])){
                       $ArPic = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>200, 'height'=>200), BX_RESIZE_IMAGE_EXACT);
                    }?>
                    <div class="img col-xs-12 text-center"><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><img
                                src="<?= $ArPic['src'] ?>" class="img-responsive" alt="name"/></a>
                    </div>
                    <div class="desc col-xs-12">
                        <div class="name"><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></div>
                        <div class="price"><?= $arItem['MIN_PRICE']['PRINT_DISCOUNT_VALUE'] ?>- <?if($arItem['PRICES']['Старая цена']['VALUE']>0):?><span
                                class="old_price"><?= $arItem['PRICES']['Старая цена']['PRINT_VALUE'] ?></span><?endif;?></div>
                        <div class="basket-button">
                            <a href="<?=$arItem['ADD_URL']?>"><img src="/upload/stat_img/src/buy-button.png"></a>&nbsp;<a href="javascript:;" class="popover-link" data-toggle="popover" data-placement="top" data-content='<?=$arResult['PRESENTS'][$arItem['PROPERTIES']['PODAROK_OPISANIE']['VALUE']]?>' data-trigger="hover"><img src="/upload/stat_img/src/present-icon.png" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <?if($k%6 != 0 && $k==count($arResult['ITEMS'])):?>
                <?while($k%6 != 0):?>
                    <div class="product col-xs-4 col-sm-3 col-md-3 col-lg-2<?=($k%5==0 || $k%6==0)?' hidden-xs hidden-sm hidden-md':''?><?=($k%4==0)?' hidden-xs':''?>">&nbsp;</div>
                    <?$k++;?>
                <?endwhile;?>
            <?else:?>
                <?$k++;?>
            <?endif;?>
            <?if($k%6 == 0 && $k!=0):?>
                <div class="one-line-elements clearfix"></div>
            <?endif?>
        <? endforeach; ?>
    <? else: ?>
        <?echo '<div class="col-xs-12"><p>В данной категории отсутствуют товары.</p></div>';?>
    <?endif; ?>
</section>