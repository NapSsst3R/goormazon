<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */
global $APPLICATION;
if (isset($templateData['TEMPLATE_THEME']))
{
	$APPLICATION->SetAdditionalCSS($templateData['TEMPLATE_THEME']);
}
if (isset($templateData['JS_OBJ']))
{
?>
<script type="text/javascript">
BX.ready(
	BX.defer(function(){
		if (!!window.<? echo $templateData['JS_OBJ']; ?>)
		{
			window.<? echo $templateData['JS_OBJ']; ?>.allowViewedCount(true);
		}
	})
);
</script>
<?
}
?>

<?
if($USER->IsAuthorized()){
    $rsUser = CUser::GetByID($USER->GetID());
    $arUser = $rsUser->Fetch();
    $arFavorites = $arUser['UF_BX_FAVORITE'];
}else{
    $arFavorites = unserialize($_COOKIE['favorite']);
}
if(in_array($arResult['ID'], $arFavorites)):?>
    <script>
        $(document).ready(function(){
            $('.fav_send').attr('data-action', 'remove').prev('.square').addClass('glyphicon glyphicon-ok');
        });
    </script>
<?
endif;
?>
<?//CATALOG_COMPARE_LIST?>
<?
    if($_SESSION['CATALOG_COMPARE_LIST'][$arResult['IBLOCK_ID']]['ITEMS'][$arResult['ID']]){
        ?>
        <script>
            $(document).ready(function(){
                href = $('.compare_send').attr('href');
                data_href = $('.compare_send').attr('data-href');
                $('.compare_send').attr('href', data_href).attr('data-href', href).attr('data-action', 'remove').prev('.square').addClass('glyphicon glyphicon-ok');
            });
        </script>
        <?
    }
    if($_REQUEST['action']=='REMOVE_FROM_COMPARE_LIST'){
        unset($_SESSION['CATALOG_COMPARE_LIST'][$arResult['IBLOCK_ID']]['ITEMS'][$arResult['ID']]);
    }
?>