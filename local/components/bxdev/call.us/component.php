<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arResult['EMAIL'] = $arParams['EMAIL'];

$arResult["PARAMS_HASH"] = md5(serialize($arParams).$this->GetTemplateName());

if($_SERVER["REQUEST_METHOD"] == "GET" && $_GET["submit"] <> '' && (!isset($_GET["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_GET["PARAMS_HASH"])){
	$arResult["ERROR_MESSAGE"] = array();
	if(check_bitrix_sessid()){
		if($_GET['PHONE'] == ""){
			$arResult['ERROR_MESSAGE']['EMPTY_PHONE'] = 'Вы не заполнили поле телефон!';
		}
		$pattern = '((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}';
		$str = $_GET['PHONE'];
		if(!preg_match("/^$pattern$/", $str)){
			$arResult['ERROR_MESSAGE']['WRONG_PHONE'] = 'Вы не верно заполнили поле телефон!';
		}
		if(is_array($arResult['ERROR_MESSAGE']) && empty($arResult['ERROR_MESSAGE'])){
			$arResult["OK_MESSAGE"] = 'Сообщение отправленно, Спасибо! Наш менеджер свяжется с Вами в ближайшее время.';
			$arEventFields = array(
					"PHONE" => $str,
					"PAGE" => $_GET['page_SEND'],
					"EMAIL" => $arResult['EMAIL'],
					);
			CEvent::Send(
					"CALL_US",
					"s1",
					$arEventFields,
					"N",
                    68
					);
		}
	}
}

$this->IncludeComponentTemplate();
?>