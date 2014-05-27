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

    <?$APPLICATION->ShowHead();?>

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
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(

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
                    <div class="phone col-xs-9 left_padd_zero">(495) 646-09-83</div>
                </div>
                <div class="search_block col-xs-12 left_padd_zero">
                    <form>
                        <input type="text" placeholder="Поиск..." value="" />
                        <input type="submit" value="ok" />
                    </form>
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
        <nav role="navigation" class="navbar navbar-default">
            <div class="menu_head navbar-header hidden-lg hidden-md hidden-sm navbar-toggle" data-toggle="collapse" data-target="#collapse_block">
                <a href="javascript:;">Каталог товаров</a>
            </div>
            <div id="collapse_block" class="collapse navbar-collapse">
                <div class="menu_head visible-lg visible-md visible-sm"><a href="javascript:;">Каталог товаров</a></div>
                <ul class="list-unstyled ctalog_links">
                    <li>
                        <span class="line" style="background-color:#a40000;"></span>
                        <a href="javascript:;">Детские товары</a>
                        <span class="bottom_line border_dotted_bottom"></span>
                        <div class="sub_levels clearfix col-xs-12 hidden-xs hidden-sm" style="background:url(/upload/stat_img/src/bg_sub.jpg) no-repeat scroll right bottom #ffffff;">
                            <ul class="list-unstyled col-xs-3">
                                <li class="first"><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские sadasda sdas товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                            </ul>
                            <ul class="list-unstyled col-xs-3">
                                <li class="first"><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                            </ul>
                            <ul class="list-unstyled col-xs-3">
                                <li class="first"><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                            </ul>
                            <ul class="list-unstyled col-xs-3">
                                <li class="first"><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                                <li><a href="javascript:;">Детские товары</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span class="line" style="background-color:#ff4d00;"></span>
                        <a href="javascript:;">Бытовая техника</a>
                        <span class="bottom_line border_dotted_bottom"></span>
                    </li>
                    <li>
                        <span class="line" style="background-color:#ff8a00;"></span>
                        <a href="javascript:;">Климатическая техника</a>
                        <span class="bottom_line border_dotted_bottom"></span>
                    </li>
                    <li>
                        <span class="line" style="background-color:#ffa800;"></span>
                        <a href="javascript:;">Тв, Аудио-Видео техника</a>
                        <span class="bottom_line border_dotted_bottom"></span>
                    </li>
                    <li>
                        <span class="line" style="background-color:#fff000;"></span>
                        <a href="javascript:;">Фото и видео камеры</a>
                        <span class="bottom_line border_dotted_bottom"></span>
                    </li>
                    <li>
                        <span class="line" style="background-color:#d2ffff;"></span>
                        <a href="javascript:;">Компьютеры, ноутбуки, планшеты</a>
                        <span class="bottom_line border_dotted_bottom"></span>
                    </li>
                    <li>
                        <span class="line" style="background-color:#00cfff;"></span>
                        <a href="javascript:;">Товары для дома и дачи</a>
                        <span class="bottom_line border_dotted_bottom"></span>
                    </li>
                    <li>
                        <span class="line" style="background-color:#209fff;"></span>
                        <a href="javascript:;">Красота и здоровье</a>
                        <span class="bottom_line border_dotted_bottom"></span>
                    </li>
                    <li>
                        <span class="line" style="background-color:#2060ff;"></span>
                        <a href="javascript:;">Спорт и отдых</a>
                    </li>
                </ul>
            </div>
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