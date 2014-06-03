<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<script>
    $(document).ready(function(){
        <?foreach($arResult['BG_KEYS'] as $div_id => $color):?>
            $('#<?=$div_id?> .panel-wrapper').attr('style','background-color:#<?=$color?>');
        <?endforeach;?>
    });
</script>