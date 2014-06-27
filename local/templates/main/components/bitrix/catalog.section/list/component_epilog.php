<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<?
    if($_REQUEST['action']=='REMOVE_FROM_COMPARE_LIST'){
        unset($_SESSION['CATALOG_COMPARE_LIST'][$arResult['IBLOCK_ID']]['ITEMS'][$_REQUEST['id']]);
    }
?>
<script>
    $(document).ready(function () {
        <?foreach($arResult['ELEMENTS'] as $elem):?>
        <?if($_SESSION['CATALOG_COMPARE_LIST'][$arResult['IBLOCK_ID']]['ITEMS'][$elem]):?>
        href = $('#comp_<?=$elem?>').attr('href');
        data_href = $('#comp_<?=$elem?>').attr('data-href');
        $('#comp_<?=$elem?>').attr('href', data_href).attr('data-href', href).attr('data-action', 'remove').prev('.square').addClass('glyphicon glyphicon-ok');
        <?endif;?>
        <?endforeach;?>
    });
</script>
