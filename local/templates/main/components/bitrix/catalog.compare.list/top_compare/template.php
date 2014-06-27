<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$containerId = "catalog-compare-list".$this->randString();
?>
<div class="catalog-compare-list" id="<?echo $containerId?>">
	<?$frame = $this->createFrame($containerId)->begin('');?>
	<a style="display:none;" name="compare_list"></a>
<?if(count($arResult) > 0):?>
	<form action="<?=$arParams["COMPARE_URL"]?>" method="get">
		<?foreach($arResult as $arElement):?>
		    <input type="hidden" name="ID[]" value="<?=$arElement["ID"]?>" />
		<?endforeach?>
	<?if(count($arResult)>=2):?>
		<input type="submit" class="link_compare"  value="<?=GetMessage("CATALOG_COMPARE")?>" />
		<input type="hidden" name="action" value="COMPARE" />
		<input type="hidden" name="IBLOCK_ID" value="<?=$arParams["IBLOCK_ID"]?>" />
	<?else:?>
        <a href="javascript:;" class="link_compare">Сравнение</a>
    <?endif;?>
    </form>
<?else:?>
    <a href="javascript:;" class="link_compare">Сравнение</a>
<?endif;?>
	<?$frame->end();?>
</div>