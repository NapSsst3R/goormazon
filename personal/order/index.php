<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.order",
	"",
	Array(
		"STATUS_COLOR_N" => "green",
		"STATUS_COLOR_F" => "gray",
		"STATUS_COLOR_PSEUDO_CANCELLED" => "red",
		"SEF_MODE" => "N",
		"ORDERS_PER_PAGE" => "20",
		"PATH_TO_PAYMENT" => "payment.php",
		"PATH_TO_BASKET" => "basket.php",
		"SET_TITLE" => "Y",
		"SAVE_IN_SESSION" => "Y",
		"NAV_TEMPLATE" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CUSTOM_SELECT_PROPS" => "",
		"PROP_1" => "",
		"HISTORIC_STATUSES" => "F"
	),
false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>