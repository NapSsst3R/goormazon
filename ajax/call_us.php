<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
    <link href="<?=SITE_TEMPLATE_PATH?>/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/bootstrap/css/bootstrap-theme.css" type="text/css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" type="text/css" rel="stylesheet">
<?$APPLICATION->IncludeComponent("bxdev:call.us", ".default", array(
	"EMAIL" => "evadia001@yandex.ru, ruspol@evadia.ru, lnadja@evadia.ru, evadia@evadia.ru, dibart127@gmail.com"
	),
	false
);?> 
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>