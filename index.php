<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
require_once('/inc/index_include.php');
?>
<div class="main_content_block clearfix col-xs-12">
    <div class="heading-dotted col-xs-12">
        <span><img src="/upload/stat_img/src/percent.png" alt="">&nbsp;Спецпредложения</span>
    </div>
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "main_page", Array(
	"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
	"IBLOCK_ID" => "1",	// Инфоблок
	"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
	"SECTION_CODE" => "",	// Код раздела
	"SECTION_USER_FIELDS" => array(	// Свойства раздела
		0 => "",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "id",	// По какому полю сортируем элементы
	"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
	"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
	"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
	"FILTER_NAME" => "arrFilterNew",	// Имя массива со значениями фильтра для фильтрации элементов
	"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
	"SHOW_ALL_WO_SECTION" => "Y",	// Показывать все элементы, если не указан раздел
	"HIDE_NOT_AVAILABLE" => "N",	// Не отображать товары, которых нет на складах
	"PAGE_ELEMENT_COUNT" => "6",	// Количество элементов на странице
	"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
	"PROPERTY_CODE" => array(	// Свойства
		0 => "",
		1 => "",
	),
	"OFFERS_FIELD_CODE" => array(	// Поля предложений
		0 => "",
		1 => "",
	),
	"OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
		0 => "",
		1 => "",
	),
	"OFFERS_SORT_FIELD" => "sort",	// По какому полю сортируем предложения товара
	"OFFERS_SORT_ORDER" => "asc",	// Порядок сортировки предложений товара
	"OFFERS_SORT_FIELD2" => "id",	// Поле для второй сортировки предложений товара
	"OFFERS_SORT_ORDER2" => "desc",	// Порядок второй сортировки предложений товара
	"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
	"TEMPLATE_THEME" => "blue",	// Цветовая тема
	"PRODUCT_DISPLAY_MODE" => "N",	// Схема отображения
	"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
	"LABEL_PROP" => "-",	// Свойство меток товара
	"PRODUCT_SUBSCRIPTION" => "N",	// Разрешить оповещения для отсутствующих товаров
	"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
	"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
	"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
	"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
	"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
	"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
	"SECTION_URL" => "#SITE_DIR#/#IBLOCK_CODE#/#CODE#/",	// URL, ведущий на страницу с содержимым раздела
	"DETAIL_URL" => "#SITE_DIR#/#IBLOCK_CODE#/#SECTION_CODE#/#CODE#/",	// URL, ведущий на страницу с содержимым элемента раздела
	"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
	"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
	"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
	"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
	"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	"DISPLAY_COMPARE" => "N",	// Выводить кнопку сравнения
	"SET_TITLE" => "N",	// Устанавливать заголовок страницы
	"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
	"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	"PRICE_CODE" => array(	// Тип цены
		0 => "Розница Интернет-магазин",
	),
	"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
	"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
	"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
	"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
	"BASKET_URL" => "/personal/cart/",	// URL, ведущий на страницу с корзиной покупателя
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
	"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
	"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
	"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
	"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
	"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
	"PRODUCT_PROPERTIES" => "",	// Характеристики товара
	"OFFERS_CART_PROPERTIES" => "",	// Свойства предложений, добавляемые в корзину
	"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
	"PAGER_TITLE" => "Товары",	// Название категорий
	"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
	"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
	),
	false
);?>
    <div class="heading-dotted col-xs-12">
        <span><img src="/upload/stat_img/src/new.png" alt="">&nbsp;Новинки</span>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.section",
        "main_page",
        Array(
            "IBLOCK_TYPE"                     => "catalog",
            "IBLOCK_ID"                       => "1",
            "SECTION_ID"                      => $_REQUEST["SECTION_ID"],
            "SECTION_CODE"                    => "",
            "SECTION_USER_FIELDS"             => array(0 => "", 1 => "",),
            "ELEMENT_SORT_FIELD"              => "id",
            "ELEMENT_SORT_ORDER"              => "asc",
            "ELEMENT_SORT_FIELD2"             => "id",
            "ELEMENT_SORT_ORDER2"             => "desc",
            "FILTER_NAME"                     => "arrFilterSpecial",
            "INCLUDE_SUBSECTIONS"             => "Y",
            "SHOW_ALL_WO_SECTION"             => "Y",
            "HIDE_NOT_AVAILABLE"              => "N",
            "PAGE_ELEMENT_COUNT"              => "6",
            "LINE_ELEMENT_COUNT"              => "3",
            "PROPERTY_CODE"                   => array(0 => "", 1 => "",),
            "OFFERS_FIELD_CODE"               => array(0 => "", 1 => "",),
            "OFFERS_PROPERTY_CODE"            => array(0 => "", 1 => "",),
            "OFFERS_SORT_FIELD"               => "sort",
            "OFFERS_SORT_ORDER"               => "asc",
            "OFFERS_SORT_FIELD2"              => "id",
            "OFFERS_SORT_ORDER2"              => "desc",
            "OFFERS_LIMIT"                    => "5",
            "TEMPLATE_THEME"                  => "blue",
            "PRODUCT_DISPLAY_MODE"            => "N",
            "ADD_PICT_PROP"                   => "-",
            "LABEL_PROP"                      => "-",
            "PRODUCT_SUBSCRIPTION"            => "N",
            "SHOW_DISCOUNT_PERCENT"           => "N",
            "SHOW_OLD_PRICE"                  => "N",
            "MESS_BTN_BUY"                    => "Купить",
            "MESS_BTN_ADD_TO_BASKET"          => "В корзину",
            "MESS_BTN_SUBSCRIBE"              => "Подписаться",
            "MESS_BTN_DETAIL"                 => "Подробнее",
            "MESS_NOT_AVAILABLE"              => "Нет в наличии",
            "SECTION_URL"                     => "#SITE_DIR#/#IBLOCK_CODE#/#CODE#/",
            "DETAIL_URL"                      => "#SITE_DIR#/#IBLOCK_CODE#/#SECTION_CODE#/#CODE#/",
            "SECTION_ID_VARIABLE"             => "SECTION_ID",
            "AJAX_MODE"                       => "N",
            "AJAX_OPTION_JUMP"                => "N",
            "AJAX_OPTION_STYLE"               => "Y",
            "AJAX_OPTION_HISTORY"             => "N",
            "CACHE_TYPE"                      => "A",
            "CACHE_TIME"                      => "36000000",
            "CACHE_GROUPS"                    => "Y",
            "SET_META_KEYWORDS"               => "N",
            "META_KEYWORDS"                   => "-",
            "SET_META_DESCRIPTION"            => "N",
            "META_DESCRIPTION"                => "-",
            "BROWSER_TITLE"                   => "-",
            "ADD_SECTIONS_CHAIN"              => "N",
            "DISPLAY_COMPARE"                 => "N",
            "SET_TITLE"                       => "N",
            "SET_STATUS_404"                  => "N",
            "CACHE_FILTER"                    => "N",
            "PRICE_CODE"                      => array(0 => "Розница Интернет-магазин",),
            "USE_PRICE_COUNT"                 => "N",
            "SHOW_PRICE_COUNT"                => "1",
            "PRICE_VAT_INCLUDE"               => "Y",
            "CONVERT_CURRENCY"                => "N",
            "BASKET_URL"                      => "/personal/cart/",
            "ACTION_VARIABLE"                 => "action",
            "PRODUCT_ID_VARIABLE"             => "id",
            "USE_PRODUCT_QUANTITY"            => "N",
            "ADD_PROPERTIES_TO_BASKET"        => "Y",
            "PRODUCT_PROPS_VARIABLE"          => "prop",
            "PARTIAL_PRODUCT_PROPERTIES"      => "N",
            "PRODUCT_PROPERTIES"              => array(),
            "OFFERS_CART_PROPERTIES"          => array(),
            "PAGER_TEMPLATE"                  => ".default",
            "DISPLAY_TOP_PAGER"               => "N",
            "DISPLAY_BOTTOM_PAGER"            => "N",
            "PAGER_TITLE"                     => "Товары",
            "PAGER_SHOW_ALWAYS"               => "N",
            "PAGER_DESC_NUMBERING"            => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL"                  => "N",
            "AJAX_OPTION_ADDITIONAL"          => "",
            "PRODUCT_QUANTITY_VARIABLE"       => "quantity"
        )
    );?>
    <section class="text">
        <? $APPLICATION->IncludeFile(
            '/inc/main_page_text.php',
            array(),
            array('MODE' => 'html')
        ) ?>
    </section>
</div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>