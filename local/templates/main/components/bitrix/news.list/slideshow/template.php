<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="clearfix wrap-slider" style="overflow: hidden;">
    <div id="main-slider" class="liquid-slider">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <h1 class="title"><?=$arItem['NAME']?></h1>
            <a href="<?=$arItem['PROPERTIES']['HREF']['VALUE']?>"><img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" class="img-responsive centred_img" alt="<?=$arItem['NAME']?>"></a>
        </div>
        <?endforeach?>
    </div>
    <div class="links-slider" style="margin-left:-<?=count($arResult["ITEMS"])*18/2?>px">
        <ul class="floatlist clearfix list-unstyled slideshow_main">
            <?foreach($arResult["ITEMS"] as $k => $arItem):?>
                <li><a
                        href="#<?=$k+1?>"
                        data-liquidslider-ref="main-slider"
                        class="bullets_liquid"
                        ></a></li>
            <?endforeach;?>
        </ul>
    </div>
</div>