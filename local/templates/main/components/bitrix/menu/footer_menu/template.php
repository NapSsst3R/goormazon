<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="list-unstyled footerlist">
        <?
            foreach($arResult as $arItem):
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                ?>
                <?if($arItem["SELECTED"]):?>
                <li>
                    <? if($arItem['PARAMS']['class']!=""):?>
                        <span>
	            	<img src="/upload/static_images/<?=$arItem['PARAMS']['class']?>.png" />
	            </span>
                    <? endif;?>
                    <a href="<?=$arItem["LINK"]?>" class="selected">
                        <?=$arItem["TEXT"]?>
                    </a>
                </li>
            <?else:?>
                <li>
                    <? if($arItem['PARAMS']['class']!=""):?>
                        <span>
	            	<img src="/upload/static_images/<?=$arItem['PARAMS']['class']?>.png" />
	            </span>
                    <? endif;?>
                    <a href="<?=$arItem["LINK"]?>">
                        <?=$arItem["TEXT"]?>
                    </a>
                </li>
            <?endif?>
            <?endforeach?>
    </ul>
<?endif?>