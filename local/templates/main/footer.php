</section>
</div>
<footer class="col-xs-12">
    <div class="sp_central_grid clearfix">
        <aside class="col-md-2"></aside>
        <div class="col-md-10">
            <div class="col-xs-3">
                <span class="sp_footerblock_heading">О КОМПАНИИ</span>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
	"ROOT_MENU_TYPE" => "bottom-1",	// Тип меню для первого уровня
	"MENU_CACHE_TYPE" => "A",	// Тип кеширования
	"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
	"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
	"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	"MAX_LEVEL" => "1",	// Уровень вложенности меню
	"CHILD_MENU_TYPE" => "bottom-1",	// Тип меню для остальных уровней
	"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	"DELAY" => "N",	// Откладывать выполнение шаблона меню
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
            </div>
            <div class="col-xs-3">
                <span class="sp_footerblock_heading">ПОМОЩЬ</span>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer_menu",
                    array(
                        "ROOT_MENU_TYPE"        => "bottom-2",
                        "MENU_CACHE_TYPE"       => "A",
                        "MENU_CACHE_TIME"       => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS"   => array(),
                        "MAX_LEVEL"             => "1",
                        "CHILD_MENU_TYPE"       => "bottom-2",
                        "USE_EXT"               => "N",
                        "DELAY"                 => "N",
                        "ALLOW_MULTI_SELECT"    => "N"
                    ),
                    false
                );?>
            </div>
            <div class="col-xs-3">
                <span class="sp_footerblock_heading">ЛИЧНЫЙ КАБИНЕТ</span>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer_menu",
                    array(
                        "ROOT_MENU_TYPE"        => "bottom-3",
                        "MENU_CACHE_TYPE"       => "A",
                        "MENU_CACHE_TIME"       => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS"   => array(),
                        "MAX_LEVEL"             => "1",
                        "CHILD_MENU_TYPE"       => "bottom-3",
                        "USE_EXT"               => "N",
                        "DELAY"                 => "N",
                        "ALLOW_MULTI_SELECT"    => "N"
                    ),
                    false
                );?>
            </div>
            <div class="col-xs-3">
                <span class="sp_footerblock_heading">УСЛОВИЯ СОТРУДНИЧЕСТВА</span>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer_menu",
                    array(
                        "ROOT_MENU_TYPE"        => "bottom-4",
                        "MENU_CACHE_TYPE"       => "A",
                        "MENU_CACHE_TIME"       => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS"   => array(),
                        "MAX_LEVEL"             => "1",
                        "CHILD_MENU_TYPE"       => "bottom-4",
                        "USE_EXT"               => "N",
                        "DELAY"                 => "N",
                        "ALLOW_MULTI_SELECT"    => "N"
                    ),
                    false
                );?>
            </div>
        </div>
    </div>
</footer>
<div class="under_footer col-xs-12">
    <aside class="col-md-3"></aside>
    <div class="col-md-9">
        <div class="col-md-8"></div>
        <div class="col-md-4 paymentblock">
            <?$APPLICATION->IncludeFile('/inc/payment.php', array(), array('MODE'=>'html'));?>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
<script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/js/jquery.liquid-slider.min.js', true)?>"></script>
<script>
    /**
     * If you need to access the internal property or methods, use this:
     * var api = $.data( $('#main-slider')[0], 'liquidSlider');
     */
    $('#main-slider').liquidSlider({
        autoSlide: true,
        autoSlideDirection: 'right',
        mobileNavigation: false,
        dynamicArrows: false,
        responsive: true,
        dynamicTabs: true,
        hashLinking:false,
        crossLinks:true,
        swipe: true,
        autoSlideInterval: 4000
    });
</script>
<script src="js/respond.js"></script>
<script>window.jQuery || document.write('<script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/js/jquery-1.9.0.min.js', true)?>"><\/script>')</script>
<script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/bootstrap/js/bootstrap.js', true)?>"></script>
<!-- Modal -->
<div class="modal fade" id="callMe" tabindex="-1" role="dialog" aria-labelledby="callMeLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:335px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Перезвоните мне.</h4>
            </div>
            <div class="modal-body">
                <iframe src="/ajax/call_us.php"></iframe>
            </div>
        </div>
    </div>
</div>
</body>
</html>