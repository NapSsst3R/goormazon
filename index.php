<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"",
Array(),
false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>