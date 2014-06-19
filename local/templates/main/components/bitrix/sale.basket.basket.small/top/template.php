<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    if ($arResult["READY"]=="Y")
    {
    ?>
        <div class="basket_counter">
            <img src="/upload/stat_img/src/cart.png" alt="" />
            <span class="product_count"><?=count($arResult["ITEMS"])?></span>
            <div class="cart-products">
                <?foreach($arResult['ITEMS'] as $item):?>
                    <?
                    if ($item["DELAY"]=="N" && $item["CAN_BUY"]=="Y")
                    {
                    ?>
                    <div class="cart-product del_<?=$item['ID']?>">
                        <div class="img-cart col-xs-3"><img src="<?=(strlen($item['PICTURE']['src'])>0)?$item['PICTURE']['src']:$this->__folder.'/images/no_photo.png'?>"></div>
                        <div class="text-cart text-left col-xs-9">
                            <a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a>
                            <a href="<?=$this->__folder?>/function.php" data-id="<?=$item['ID']?>" class="glyphicon glyphicon-remove remove-product"></a>
                            <p>Кол-во: <?=$item['QUANTITY']?></p>
                        </div>
                    </div>
                    <?
                    }
                    ?>
                <?endforeach;?>
                <a href="<?=$arParams["PATH_TO_BASKET"]?>" class="btn btn-default"><?= GetMessage("TSBS_2ORDER") ?></a>
            </div>
        </div>
        <a href="<?=$arParams["PATH_TO_BASKET"]?>" class="link_basket"><?= GetMessage("TSBS_2BASKET") ?></a>
    <?
    }else{
    ?>
        <div class="basket_counter">
            <img src="/upload/stat_img/src/cart.png" alt="" />
            <span class="product_count"><?=count($arResult["ITEMS"])?></span>
        </div>
        <a href="<?=$arParams["PATH_TO_BASKET"]?>" class="link_basket"><?= GetMessage("TSBS_2BASKET") ?></a>
    <?
    }
?>