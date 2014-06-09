<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/bootstrap/css/bootstrap.css', true)?>">
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/bootstrap/css/bootstrap-theme.css', true)?>">
    <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/css/style.css', true)?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
    <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/css/liquid-slider.css', true)?>">
    <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/css/etalage.css', true)?>">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <?$APPLICATION->ShowHead();?>
    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/js/etalage.js', true)?>"></script>
    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/js/modernizr-2.6.2.min.js', true)?>"></script>
</head>
<body class="clearfix">
<!--[if lt IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<?$APPLICATION->ShowPanel();?>
<div class="header clearfix">
    <div class="top_line clearfix border_dotted_bottom container col-xs-12">
        <nav class="col-xs-6 visible-md visible-lg">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "top",
	"USE_EXT" => "N",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
        </nav>
        <nav class="col-xs-3 visible-md visible-lg">
            <ul class="list-unstyled floatlist">
                <li class="favorite_link"><a href="">Избранное</a></li>
                <li class="compare_link"><a href="">Сравнение</a></li>
            </ul>
        </nav>
        <nav class="col-xs-9 visible-sm visible-xs right_padd_zero">
            <ul class="list-unstyled floatlist ">
                <li><a href="">Контакты</a></li>
                <li><a href="">Адреса магазинов</a></li>
            </ul>
        </nav>
        <nav class="col-xs-3 right_padd_zero">
            <ul class="fright list-unstyled floatlist">
                <?if($USER->IsAuthorized()):?>
                    <li class="register_link"><a href="/personal/">Личный кабинет</a></li>
                    <li class="enter_link"><a href="?logout=yes">Выйти</a></li>
                <?else:?>
                    <li class="register_link"><a href="/auth/?register=yes">Регистрация</a></li>
                    <li class="enter_link"><a href="/auth/">Войти</a></li>
                <?endif;?>
            </ul>
        </nav>
    </div>

    <div class="middle_header border_dotted_bottom clearfix col-xs-12">
        <div class="logo col-md-3">
            <a href="<?=SITE_DIR?>"><img src="/upload/stat_img/src/logo.png" alt="Goormazon"></a>
        </div>
        <div class="col-md-9 right_padd_zero left_padd_zero">
            <div class="col-xs-5 search_cityes">
                <div class="cities_block col-xs-12 left_padd_zero">
                    <div class="cities_block col-xs-3 left_padd_zero"><a href="javascript:;">Москва</a></div>
                    <div class="phone col-xs-9 left_padd_zero"><? $APPLICATION->IncludeFile(
                            '/inc/phone.php',
                            array(),
                            array('MODE' => 'html')
                        ) ?></div>
                </div>
                <div class="search_block col-xs-12 left_padd_zero">
                    <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:search.title",
                            "search_title",
                            Array(
                                "NUM_CATEGORIES"     => "1",
                                // Количество категорий поиска
                                "TOP_COUNT"          => "5",
                                // Количество результатов в каждой категории
                                "ORDER"              => "date",
                                // Сортировка результатов
                                "USE_LANGUAGE_GUESS" => "Y",
                                // Включить автоопределение раскладки клавиатуры
                                "CHECK_DATES"        => "N",
                                // Искать только в активных по дате документах
                                "SHOW_OTHERS"        => "N",
                                // Показывать категорию "прочее"
                                "PAGE"               => "#SITE_DIR#search/",
                                // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                                "CATEGORY_0_TITLE"   => "Найдено",
                                // Название категории
                                "CATEGORY_0"         => array( // Ограничение области поиска
                                    0 => "no",
                                ),
                                "SHOW_INPUT"         => "Y",
                                // Показывать форму ввода поискового запроса
                                "INPUT_ID"           => "title-search-input",
                                // ID строки ввода поискового запроса
                                "CONTAINER_ID"       => "title-search",
                                // ID контейнера, по ширине которого будут выводиться результаты
                            ),
                            false
                        );
                    ?>
                </div>
            </div>
            <div class="banner col-xs-5 visible-md visible-lg">
                <a href="javascript:;"><img src="/upload/stat_img/src/baner_near_cart.png" alt="" /></a>
            </div>
            <div class="col-xs-2 right_padd_zero">
                <div class="basket">
                    <div class="basket_counter"><img src="/upload/stat_img/src/cart.png" alt="" /><span class="product_count">2</span></div>
                    <a href="javascript:;" class="link_basket">Корзина</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main_content clearfix">
    <aside class="col-md-3">
        <nav role="navigation" class="navbar navbar-default product_detail_menu_show">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_links", array(
	"ROOT_MENU_TYPE" => "left",
	"MENU_CACHE_TYPE" => "N",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "3",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
        </nav>
        <div class="action col-xs-12 visible-md visible-lg">
            <div class="brand">
                <img src="/upload/stat_img/src/bran_action.png" alt="" />
            </div>
            <div>
                <img class="img-responsive centred_img" src="/upload/stat_img/src/mak.jpg" alt="" />
            </div>
            <p class="name"><a href="javascript:;">MacBook Pro Air</a></p>
            <p class="desc">Специальная цена для обладателей дисконтной карты Goormazon</p>
            <p class="price">58 799.-</p>
            <a href="javascript:;" class="orange">Подробнее</a>
        </div>
    </aside>
    <section class="col-md-9">
        <?if($APPLICATION->GetCurDir()==SITE_DIR):?>
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "slideshow", Array(
	"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
	"IBLOCK_ID" => "4",	// Код информационного блока
	"NEWS_COUNT" => "4",	// Количество новостей на странице
	"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
	"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
	"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
	"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	"FILTER_NAME" => "",	// Фильтр
	"FIELD_CODE" => array(	// Поля
		0 => "DETAIL_PICTURE",
		1 => "",
	),
	"PROPERTY_CODE" => array(	// Свойства
		0 => "HREF",
		1 => "",
	),
	"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
	"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
	"SET_TITLE" => "N",	// Устанавливать заголовок страницы
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
	"PARENT_SECTION" => "",	// ID раздела
	"PARENT_SECTION_CODE" => "",	// Код раздела
	"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
	"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
	"PAGER_TITLE" => "Новости",	// Название категорий
	"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
	"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	"DISPLAY_DATE" => "Y",	// Выводить дату элемента
	"DISPLAY_NAME" => "Y",	// Выводить название элемента
	"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
	"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	),
	false
);?>
        <?else:?>
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
	
	),
	false
);?>
        <?endif;?>