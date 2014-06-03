<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="links-slider col-xs-12" style="text-align:center;">
    <ul class="list-unstyled clearfix slideshow_main">
        <?foreach($arResult["ITEMS"] as $k => $arItem):?>
        <li
            class="col-xs-3"><a
                href="#<?=$k+1?>"
                data-liquidslider-ref="main-slider"
                ><p><?=$arItem['NAME']?></p></a></li>
        <?endforeach;?>
    </ul>
</div>
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

