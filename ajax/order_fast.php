<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap/css/bootstrap-theme.css" type="text/css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" type="text/css" rel="stylesheet">
<?
CModule::IncludeModule('iblock');
CModule::IncludeModule('sale');
CModule::IncludeModule('catalog');
$PRODUCT_ID = $_GET['id'];
$IBLOCK_ID = $_GET['iblock_id'];
$ArListProp = array();
if($_REQUEST['delivery']){
	$rsDel = CIBLockElement::GetList(array(), array('IBLOCK_ID'=>14,'NAME'=>$_REQUEST['delivery']), false, false, array());
	while($arDel = $rsDel->GetNextElement()){
		$arPropDel = $arDel->GetProperties();
	}
	foreach($arPropDel as $k => $DelProp){
		if($k=="DELIVERY_ADITIONAL"){
			$ArListProp = $DelProp['VALUE'];
		}
	}
	
}
$res = CIBlockElement::GetList(
		array(), 
		array('ID'=>$PRODUCT_ID), 
		false, 
		false, 
		array('NAME', 'ID', 'PREVIEW_PICTURE', 'CATALOG_PRICE_3')
	);
$arRes=$res->GetNext();
if($_REQUEST['submit']){
	$error = "";
	foreach($_REQUEST['PROP'] as $k => $val){
		if(strlen($val)==0){
			$error = 'Вы не заполнили все поля. <br />';
		}
	}

	if(!$USER->IsAuthorized()){
		if(!$APPLICATION->CaptchaCheckCode($_REQUEST["captcha_word"], $_REQUEST["captcha_code"]))
		{
			$error .= 'Не правильно введён код с картинки.<br />';
		}
	}
	
	$price = CCatalogProduct::GetOptimalPrice(
		$PRODUCT_ID,
		1,
		array(),
		N,
		array(),
		false,
		false
	);
	
	
	$arFields = array(
	   "LID" => 's1',
	   "PERSON_TYPE_ID" => 1,
	   "PAYED" => "N",
	   "CANCELED" => "N",
	   "STATUS_ID" => "N",
	   "PRICE" => $price['PRICE']['PRICE'],
	   "CURRENCY" => $price['PRICE']['CURRENCY'],
	   "USER_DESCRIPTION" => $_REQUEST['comment']
	);
	
	if(!$USER->IsAuthorized()){
		global $USER;
		$arNewUser = $USER->SimpleRegister(
		$_REQUEST['PROP']['email'],
		's1'
		);
		ShowMessage($arNewUser);
	}
	$arFields["USER_ID"] = IntVal($USER->GetID());
	
	
	if($error==""){
	Add2BasketByProductID($PRODUCT_ID, 1);
	$ORDER_ID = CSaleOrder::Add($arFields);
	$ORDER_ID = IntVal($ORDER_ID);
		if($ORDER_ID){
			$arEventFields = array(
					'ORDER_ID'=>$ORDER_ID
			);
			foreach($_REQUEST['PROP'] as $k => $v){
				$i = 0;
				switch($k){
					case 'name':
						$i = 1;
						$name = 'Имя';
						break;
					case 'phone':
						$i = 4;
						$name = 'Телефон';
						break;
					case 'email':
						$i = 3;
						$name = 'email';
						break;
					case 'fast_deliv':
						$i = 8;
						$name = 'Доставка быстрого заказа';
						break;
					default:
						$i = 0;
						break;
				}
				if($i){
					$arFieldsProp = array(
							"ORDER_ID" => $ORDER_ID,
							"ORDER_PROPS_ID" => $i,
							"NAME" => $name,
							"CODE" => ToUpper($k),
							"VALUE" => $v
					);
					$arEventFields[ToUpper($k)] = $v;
					CSaleOrderPropsValue::Add($arFieldsProp);
				}
			}
			CSaleBasket::OrderBasket($ORDER_ID, $_SESSION["SALE_USER_ID"], SITE_ID);
			$arOrder = CSaleOrder::GetByID($ORDER_ID);
			$resBask = CSaleBasket::GetList(
					array(),
					array(
							'ORDER_ID'=>$ORDER_ID,
					),
					false,
					false,
					array("ID", "PRICE", "QUANTITY", 'NAME')
			);
			while($arBask = $resBask->Fetch()){
				$arBasketItems[] = $arBask;
			}

			CEvent::Send(
			"FAST_ORDER",
			's1',
			$arEventFields,
			'N',
			69
			);
			echo 'Ваш заказ успешно добавлен наши менеджеры свяжуться в вами в ближайшее время.';
		}else{
			echo "Ошибка попробуйте ещё раз.";
		}
	
	}else{
		echo $error;
	}
}else{
$rsUser = CUser::GetByID($USER->GetID());
$arUser = $rsUser->Fetch();
?>
<div class="cont_fast_ord">
	<div style="margin-bottom:40px;">
		<? if($arRes['PREVIEW_PICTURE']):?>
			<? $img = CFile::ResizeImageGet($arRes['PREVIEW_PICTURE'], array('width'=>128, 'height'=>128), BX_RESIZE_IMAGE_PROPORTIONAL);?>
			<img style='float:left;' src="<?=$img['src']?>" alt="<?=$arRes["NAME"]?>" name="<?=$arRes["NAME"]?>" />
		<? endif;?>
		<span class="md_tabprodname"><?=$arRes["NAME"]?></span>
		<p>Заполните форму, и наши менеджеры свяжутся с вами в течение часа.</p>
	</div>
	<div style="clear:both;"></div>
	<form method="get" action="">
		<input type="hidden" name="id" value="<?=$PRODUCT_ID?>" />
		<table width="100%" cellpadding="5px">
			<? if(!empty($ArListProp)):?>
			<tr>
				<td>
					<label for="deliv"><p>Доставка:</p></label>
				</td>
				<td>
					<select name="PROP[fast_deliv]" id="fast_deliv">
						<? foreach($ArListProp as $val):?>
							<option id="<?=$val?>"><?=$val?></option>
						<? endforeach;?>
					</select>
				</td>
			</tr>
			<? endif;?>
			<tr>
				<td>
					<label for="name"><p>Ваше имя:</p></label>
				</td>
				<td>
					<input type="text" name="PROP[name]" id="name" value="<?=$USER->GetFullName()?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="phone"><p>Ваш телефон:</p></label>
				</td>
				<td>
					<input type="text" name="PROP[phone]" id="phone" value="<?=$arUser['PERSONAL_PHONE']?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="email"><p>Ваш email:</p></label>
				</td>
				<td>
					<input type="text" name="PROP[email]" id="email" value="<?=$arUser['EMAIL']?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="comment"><p>Комментарий:</p></label>
				</td>
				<td>
					<textarea name="comment" id="comment"></textarea>
				</td>
			</tr>
			<? if(!$USER->IsAuthorized()):?>
			<?
			include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
			$cpt = new CCaptcha();
			$captchaPass = COption::GetOptionString("main", "captcha_password", "");
			if(strlen($captchaPass) <= 0)
			{
				$captchaPass = randString(10);
				COption::SetOptionString("main", "captcha_password", $captchaPass);
			}
			$cpt->SetCodeCrypt($captchaPass);
			?>
			<tr>
				<td>
					<label for="comment"><p>Введите текст с картинки:</p></label>
				</td>
				<td>
					<input name="captcha_code" value="<?=htmlspecialchars($cpt->GetCodeCrypt());?>" type="hidden">
					<input id="captcha_word" name="captcha_word" type="text">
					<img src="/bitrix/tools/captcha.php?captcha_code=<?=htmlspecialchars($cpt->GetCodeCrypt());?>">
				</td>
			</tr>
			<? endif;?>
			<tr>
				<td colspan="2" align="center">
					<input type='submit' class="btn btn-default" value="Заказать" name="submit" />
				</td>
			</tr>
		</table>
	</form>
</div>
<? 
}
?>
<style>
.cont_fast_ord, 
.cont_fast_ord p,
.cont_fast_ord textarea,
.cont_fast_ord label{
	color: #262323;
	font-size: 13px;
	font-family: 'Open Sans';
}
</style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>