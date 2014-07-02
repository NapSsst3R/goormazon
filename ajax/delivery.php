<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
    CModule::IncludeModule('sale');
    $Price_For_Deliv = $_REQUEST['price'];
    $db_dtype = CSaleDelivery::GetList(
        array(
            "SORT" => "ASC",
            "NAME" => "ASC"
        ),
        array(
            "LID" => SITE_ID,
            "ACTIVE" => "Y",
//            "LOCATION" => $_COOKIE['YS_GEO_IP_LOC_ID'],
//            "+<=ORDER_PRICE_FROM" => $Price_For_Deliv,
//            "+>=ORDER_PRICE_TO" => $Price_For_Deliv,
        ),
        false,
        false,
        array()
    );
    while ($ar_dtype = $db_dtype->Fetch()){
        $arDeliveries[] = $ar_dtype;
    }
?>
<? foreach($arDeliveries as $Deliv):?>
    <div>
        <span class="deliv-name"><?=$Deliv['NAME']?>: </span>
        <? if($Deliv['ID']==1 && $Price_For_Deliv<=3000):?>
            (заказ от <?=$Deliv['ORDER_PRICE_FROM']?> руб.),
        <? elseif($Deliv['ID']==6):?>
            (заказ от <?=$Deliv['ORDER_PRICE_FROM']?> до <?=$Deliv['ORDER_PRICE_TO']?> руб.),
        <? endif;?>
        <? if($Deliv['PERIOD_TO']==0){
            echo 'сегодня';
        }elseif($Deliv['PERIOD_TO']==2){
            echo 'послезавтра';
        }elseif($Deliv['PERIOD_TO']==1){
            echo 'завтра';
        }?>
        (
        <?=date('d.m', mktime(0, 0, 0, date("m")  , date("d")+$Deliv['PERIOD_TO']));?>
        <?=FormatDate('l', mktime(0, 0, 0, date("m")  , date("d")+$Deliv['PERIOD_TO']));?>
        )<?=($Deliv['PRICE']!=0)?', '.SaleFormatCurrency($Deliv['PRICE'], $Deliv['CURRENCY']):""?>
    </div>
<? endforeach;?>
<? if(count($arDeliveries)>0):?>
    <a href="http://1coffee.ru/about/delivery/" target="_blank" class="read_more_del">Подробнее</a><br />
<? endif;?>
<?
if(CModule::IncludeModule('multiship.v1')){
    $ms_api=MultiShip::init();
    $delivery_list_request = new MultiShip_RequestDeliveryList('Москва', $_REQUEST['city_to'], $_REQUEST['weight'],  $_REQUEST['width'], $_REQUEST['height'], $_REQUEST['lenght'], "", "", $_REQUEST['price']);
    $delivery_list_request->delivery_type = "todoor";
    $to_door = $ms_api->searchDeliveryList($delivery_list_request, $delivery_point);
    foreach ($to_door->data as $k => $variant) {
        if($ret['ORIGINAL_COST']>$variant->cost || !$k){
            $ret = array(
                "NAME"              => CDeliveryMlsp::zaDeUTFit($variant->delivery_name),
                "ID" 				=> $variant->delivery_id,
                "COST"              => $variant->cost_with_rules,
                "ORIGINAL_COST"     => $variant->cost,
                "DIRECTION"=>$variant->direction_id,
                "DELIVERY"=>$variant->delivery_id,
                "PRICE"=>$variant->price_id,
                "deliver_orient_day"=>$variant->deliver_orient_day,
                // ��������� ��� �� - ?
                "DAYS"              => CDeliveryMlsp::realday($variant->days)
            );
        }
    }

?>

<? if(count($arDeliveries)==0 && $USER->IsAdmin()):?>
    <b>Стоимость доставки:</b>
    <span class="price_mlsp">
	<? if(!empty($ret)):?>
        <?echo $ret["COST"].'р.';?>
    <? else:?>
        <? echo 'Для уточнения стоимости доставки в Ваш регион свяжитесь с менеджером или закажите обратный звонок.';?>
    <? endif;?>
	</span>
<? endif;?>
<?
}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>