<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div
        class="menu_head navbar-header hidden-lg hidden-md hidden-sm navbar-toggle"
        data-toggle="collapse" data-target="#collapse_block"
        >
        <a href="javascript:;">Каталог товаров</a>
    </div>
    <div id="collapse_block" class="collapse navbar-collapse">
        <div class="menu_head visible-lg visible-md visible-sm"><a href="javascript:;">Каталог товаров</a></div>
        <ul class="list-unstyled ctalog_links">
        <?
        $previousLevel = 0;
        foreach($arResult as $k => $arItem):?>

            <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
                <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
            <?endif?>

            <?if ($arItem["DEPTH_LEVEL"] == 2 && $previousLevel3 == 3):?>
            </ul><ul class="list-unstyled col-xs-3">
            <?endif;?>


            <?if ($arItem["IS_PARENT"]):?>

                <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                    <li><span class="line" style="background-color:#ff4d00;"></span><a
                            href="<?=$arItem["LINK"]?>"
                            class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"
                            ><?=$arItem["TEXT"]?></a>
                        <?if($arItem['PARAMS']['LAST']!='Y'):?>
                            <span class="bottom_line border_dotted_bottom"></span>
                        <?endif;?>
                        <div
                            class="sub_levels clearfix col-xs-12 hidden-xs hidden-sm"
                            style="background:url(/upload/stat_img/src/bg_sub.jpg) no-repeat scroll right bottom #ffffff;">
                        <ul class="list-unstyled col-xs-3">
                <?else:?>
                    <li <?if ($arItem["DEPTH_LEVEL"] == 2):?>class="first"<?endif;?>><a
                            href="<?=$arItem["LINK"]?>"
                            class="parent<?if ($arItem["SELECTED"]):?> item-selected<?endif?>"><?=$arItem["TEXT"]?></a></li>
                <?endif;?>

            <?else:?>

                <?if ($arItem["PERMISSION"] > "D"):?>

                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                        <li><span class="line" style="background-color:#ff4d00;"></span><a
                                href="<?=$arItem["LINK"]?>"
                                class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"
                                ><?=$arItem["TEXT"]?></a>
                            <?if($arItem['PARAMS']['LAST']!='Y'):?>
                                <span class="bottom_line border_dotted_bottom"></span>
                            <?endif;?>
                        </li>
                    <?else:?>
                        <li <?if ($arItem["DEPTH_LEVEL"] == 2):?>class="first"<?endif;?>><a
                                href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?>
                                class="item-selected"<?endif?>
                                ><?=$arItem["TEXT"]?></a
                                >
                        </li>
                    <?endif?>

                <?else:?>

                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                        <li><span class="line" style="background-color:#ff4d00;"></span><a
                                href=""
                                class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"
                                title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"
                                ><?=$arItem["TEXT"]?></a>
                            <?if($arItem['PARAMS']['LAST']!='Y'):?>
                                <span class="bottom_line border_dotted_bottom"></span>
                            <?endif;?>
                        </li>
                    <?else:?>
                        <li <?if ($arItem["DEPTH_LEVEL"] == 2):?>class="first"<?endif;?>><a
                               href=""
                               class="denied"
                               title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"
                                ><?=$arItem["TEXT"]?></a>
                        </li>

                    <?endif?>

                <?endif?>

            <?endif?>

            <?$previousLevel = ($arItem["DEPTH_LEVEL"]==2)?$arItem["DEPTH_LEVEL"]:$previousLevel;?>
            <?$previousLevel3 = $arItem["DEPTH_LEVEL"];?>
        <?endforeach?>

        <?if ($previousLevel > 1)://close last item tags?>
            <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
        <?endif?>

        </ul>
</div>
<?endif?>