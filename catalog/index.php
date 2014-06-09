<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?><?$APPLICATION->IncludeComponent("bitrix:catalog", "catalog", Array(
	"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
	"IBLOCK_ID" => "1",	// Инфоблок
	"HIDE_NOT_AVAILABLE" => "N",	// Не отображать товары, которых нет на складах
	"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
	"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
	"SEF_FOLDER" => "/catalog/",	// Каталог ЧПУ (относительно корня сайта)
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
	"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
	"ADD_ELEMENT_CHAIN" => "Y",	// Включать название элемента в цепочку навигации
	"USE_ELEMENT_COUNTER" => "N",	// Использовать счетчик просмотров
	"USE_FILTER" => "N",	// Показывать фильтр
	"USE_REVIEW" => "N",	// Разрешить отзывы
	"USE_COMPARE" => "N",	// Использовать компонент сравнения
	"PRICE_CODE" => array(	// Тип цены
		0 => "Розница Интернет-магазин",
	),
	"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
	"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
	"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
	"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
	"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
	"BASKET_URL" => "/personal/cart/",	// URL, ведущий на страницу с корзиной покупателя
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
	"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
	"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
	"ADD_PROPERTIES_TO_BASKET" => "N",	// Добавлять в корзину свойства товаров и предложений
	"SHOW_TOP_ELEMENTS" => "N",	// Выводить топ элементов
	"SECTION_COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
	"SECTION_TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
	"SECTIONS_VIEW_MODE" => "LIST",	// Вид списка подразделов
	"SECTIONS_SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
	"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
	"LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
	"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем товары в разделе
	"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
	"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
	"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
	"LIST_PROPERTY_CODE" => array(	// Свойства
		0 => "",
		1 => "",
	),
	"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
	"LIST_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства раздела
	"LIST_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства раздела
	"LIST_BROWSER_TITLE" => "NAME",	// Установить заголовок окна браузера из свойства раздела
	"LIST_OFFERS_FIELD_CODE" => array(	// Поля предложений
		0 => "",
		1 => "",
	),
	"LIST_OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
		0 => "",
		1 => "",
	),
	"LIST_OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
	"DETAIL_PROPERTY_CODE" => array(	// Свойства
		0 => "",
		1 => "",
	),
	"DETAIL_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
	"DETAIL_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
	"DETAIL_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
	"DETAIL_OFFERS_FIELD_CODE" => array(	// Поля предложений
		0 => "",
		1 => "",
	),
	"DETAIL_OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
		0 => "",
		1 => "",
	),
	"DETAIL_DISPLAY_NAME" => "Y",	// Выводить название элемента
	"DETAIL_DETAIL_PICTURE_MODE" => "IMG",	// Режим показа детальной картинки
	"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
	"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса на детальной странице
	"LINK_IBLOCK_TYPE" => "catalog",	// Тип инфоблока, элементы которого связаны с текущим элементом
	"LINK_IBLOCK_ID" => "2",	// ID инфоблока, элементы которого связаны с текущим элементом
	"LINK_PROPERTY_SID" => "CML2_LINK",	// Свойство, в котором хранится связь
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
	"USE_ALSO_BUY" => "N",	// Показывать блок "С этим товаром покупают"
	"USE_STORE" => "N",	// Показывать блок "Количество товара на складе"
	"OFFERS_SORT_FIELD" => "sort",	// По какому полю сортируем предложения товара
	"OFFERS_SORT_ORDER" => "asc",	// Порядок сортировки предложений товара
	"OFFERS_SORT_FIELD2" => "id",	// Поле для второй сортировки предложений товара
	"OFFERS_SORT_ORDER2" => "desc",	// Порядок второй сортировки предложений товара
	"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
	"PAGER_TITLE" => "Товары",	// Название категорий
	"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
	"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	"TEMPLATE_THEME" => "blue",	// Цветовая тема
	"ADD_PICT_PROP" => "MORE_PHOTO",	// Дополнительная картинка основного товара
	"LABEL_PROP" => "-",	// Свойство меток товара
	"PRODUCT_DISPLAY_MODE" => "N",	// Схема отображения
	"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",	// Дополнительные картинки предложения
	"OFFER_TREE_PROPS" => array(	// Свойства для отбора предложений
		0 => "CML2_MANUFACTURER",
	),
	"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
	"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
	"DETAIL_SHOW_MAX_QUANTITY" => "N",	// Показывать общее количество товара
	"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
	"MESS_BTN_COMPARE" => "Сравнение",	// Текст кнопки "Сравнение"
	"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
	"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
	"DETAIL_USE_VOTE_RATING" => "N",	// Включить рейтинг товара
	"DETAIL_USE_COMMENTS" => "N",	// Включить отзывы о товаре
	"DETAIL_BRAND_USE" => "N",	// Использовать компонент "Бренды"
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	"FILTER_VIEW_MODE" => "VERTICAL",	// Вид отображения умного фильтра
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
	"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
	"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
	"PRODUCT_PROPERTIES" => "",	// Характеристики товара, добавляемые в корзину
	"OFFERS_CART_PROPERTIES" => "",	// Свойства предложений, добавляемые в корзину
	"SEF_URL_TEMPLATES" => array(
		"sections" => "",
		"section" => "#SECTION_CODE#/",
		"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		"compare" => "compare.php?action=#ACTION_CODE#",
	),
	"VARIABLE_ALIASES" => array(
		"compare" => array(
			"ACTION_CODE" => "action",
		),
	)
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>