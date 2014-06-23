<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?> <? if($_REQUEST['ORDER_ID']>0):?>
    <?$APPLICATION->IncludeComponent(
	"bitrix:sale.order.ajax",
	".default",
	Array(
		"PAY_FROM_ACCOUNT" => "N",
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
		"COUNT_DELIVERY_TAX" => "N",
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
		"ALLOW_AUTO_REGISTER" => "Y",
		"SEND_NEW_USER_NOTIFY" => "Y",
		"DELIVERY_NO_AJAX" => "Y",
		"DELIVERY_NO_SESSION" => "N",
		"TEMPLATE_LOCATION" => ".default",
		"DELIVERY_TO_PAYSYSTEM" => "d2p",
		"USE_PREPAYMENT" => "N",
		"PROP_1" => array(),
		"PATH_TO_BASKET" => "/personal/cart/",
		"PATH_TO_PERSONAL" => "/personal/order/",
		"PATH_TO_PAYMENT" => "/personal/",
		"PATH_TO_AUTH" => "/login/",
		"SET_TITLE" => "Y",
		"PRODUCT_COLUMNS" => array(),
		"DISABLE_BASKET_REDIRECT" => "N",
		"DISPLAY_IMG_WIDTH" => "90",
		"DISPLAY_IMG_HEIGHT" => "90"
	)
);?> <? else:?> <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", ".default", array(
	"COLUMNS_LIST" => array(
		0 => "NAME",
		1 => "PROPS",
		2 => "DELETE",
		3 => "PRICE",
		4 => "QUANTITY",
		5 => "SUM",
	),
	"PATH_TO_ORDER" => "/personal/cart/",
	"HIDE_COUPON" => "N",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
	"USE_PREPAYMENT" => "N",
	"QUANTITY_FLOAT" => "N",
	"SET_TITLE" => "Y",
	"ACTION_VARIABLE" => "action",
	"OFFERS_PROPS" => array(
	)
	),
	false
);?> <? endif;?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>