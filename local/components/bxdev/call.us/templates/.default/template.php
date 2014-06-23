<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<? 
if(strlen($arResult['OK_MESSAGE'])>0){
	echo "<p>".$arResult['OK_MESSAGE']."</p>";
}
if(!empty($arResult['ERROR_MESSAGE']) && is_array($arResult['ERROR_MESSAGE'])){
	echo '<p style="color:red">'.implode("<br />", $arResult['ERROR_MESSAGE']).'</p>';
}
?>
	<form method="GET" action="<?=$APPLICATION->GetCurPage()?>" id="form_call_us">
	<?=bitrix_sessid_post()?>
		<input type="text" name="PHONE" value="" placeholder="+7 495 780 98 98" />
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		<input type="hidden" name="EMAIL_SEND" value="<?=$arResult["EMAIL"]?>">
		<input type="hidden" name="page_SEND" value="<?=$_REQUEST['page']?>">
		<input type="hidden" name="mode" value="ajax">
		<input type="submit" class="button" name="submit" value="Отправить" />
	</form>
<?if(empty($arResult['ERROR_MESSAGE']) && !strlen($arResult['OK_MESSAGE'])){?>
	<p>Напишите свой телефон и нажмите "Отправить". <br />Наш менеджер свяжется с Вами в ближайшее время!</p>
<? }?>