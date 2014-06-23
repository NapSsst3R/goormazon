<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
    /** @var array $arParams */
    /** @var array $arResult */
    /** @global CMain $APPLICATION */
    /** @global CUser $USER */
    /** @global CDatabase $DB */
    /** @var CBitrixComponentTemplate $this */
    /** @var string $templateName */
    /** @var string $templateFile */
    /** @var string $templateFolder */
    /** @var string $componentPath */
    /** @var CBitrixComponent $component */
    $this->setFrameMode(true);
?>
<div class="clearfix">
    <div class="col-md-4 col-lg-4 col-sm-6">
        <? // echo "<pre>"; print_r($arResult); echo "</pre>";?>
        <? // echo "<pre>"; print_r($arResult['PROPERTIES']); echo "</pre>";?>
        <div class="col-xs-12">
            <? if (count($arResult['PROPERTIES']['MORE_PHOTO']['VALUE']) > 1): ?>
                <ul id="etalage">
                    <? foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $photo): ?>
                        <? $pic = CFile::ResizeImageGet(
                            $photo,
                            array('width' => 281, 'height' => 292),
                            BX_RESIZE_IMAGE_PROPORTIONAL
                        );
                        $photoSrc = CFile::GetFileArray($photo);
                        ?>
                        <li>
                            <img src="<?= $pic['src'] ?>" class="etalage_thumb_image"
                                 id='img_to_fly_<?= $arResult['ID'] ?>'/>
                            <img src="<?= $photoSrc['SRC'] ?>" class="etalage_source_image"/>
                        </li>
                    <? endforeach; ?>
                </ul>
            <? else: ?>
                <noindex>
                    <a rel="nofolow" href="javascript:;">
                        <img
                            src="<?= ($arResult['~DETAIL_PICTURE']) ? $arResult['DETAIL_PICTURE']['SRC'] : $arResult['DEFAULT_PICTURE']['SRC'] ?>"/>
                    </a>
                </noindex>
            <?endif; ?>
        </div>
        <div class="col-xs-12 fav_izb_block_det">
            <span class="glyphicon glyphicon-ok square"></span><a  class="fav_izb_link_det"
                href="<?=$APPLICATION->GetCurPageParam('action=ADD_TO_COMPARE_LIST&id='.$arResult['ID'], array('action', 'id'));?>">Добавить к сравнению</a>
        </div>
        <div class="col-xs-12 fav_izb_block_det">
            <span class="glyphicon glyphicon-ok square"></span><a href="javascript:;" class="fav_izb_link_det">Добавить в избранное</a>
        </div>
    </div>
    <div class="col-md-8 col-lg-8 col-sm-6">
        <div class="col-xs-12 left_padd_zero heading">
            <div class="col-xs-12 col-md-6"><h1><?= $arResult['NAME'] ?></h1></div>
            <div class="col-xs-12 col-md-6 text-right"><a class="print_link"
                                                          href="<?= $APPLICATION->GetCurDir() ?>?print=Y"><img
                        src="/upload/stat_img/src/print_version.png">&nbsp;Версия
                    для печати</a></div>
        </div>
        <?
        foreach($arResult['PROPERTIES']['CML2_TRAITS']['DESCRIPTION'] as $id => $desc){
            if($desc=="Код"){
                $code1cprogramm = $arResult['PROPERTIES']['CML2_TRAITS']['VALUE'][$id];
            }
        }
        ?>
        <div class="col-xs-12 text-right product_code">Код товара: <?=$code1cprogramm?></div>
        <div class="col-md-6 col-xs-12 clearfix">
            <div class="price_detail col-md-6 col-xs-12 left_padd_zero">
                <span><?= $arResult['MIN_PRICE']['PRINT_DISCOUNT_VALUE'] ?></span></div>
            <div class="col-md-6 col-xs-12 left_padd_zero">
                <div class="basket_quantity_control">
                    <span class="pull-left">Кол-во</span><br />
                    <a href="javascript:void(0);" class="minus" onclick="if(document.getElementById('<?=$arParams['PRODUCT_QUANTITY_VARIABLE']?>').value>1){document.getElementById('quantity').value--;} return false;"></a>
                    <input
                        type="text"
                        size="3"
                        id="<?=$arParams['PRODUCT_QUANTITY_VARIABLE']?>"
                        name="<?=$arParams['PRODUCT_QUANTITY_VARIABLE']?>"
                        size="2"
                        maxlength="18"
                        min="0"
                        step="1"
                        style="max-width: 50px"
                        value="1"
                        >
                    <a href="javascript:void(0);" class="plus" onclick="document.getElementById('<?=$arParams['PRODUCT_QUANTITY_VARIABLE']?>').value++; return false;"></a>
                </div>
            </div>
            <div class="col-md-12 left_padd_zero buy_button"><a href="<?= $arResult['ADD_URL'] ?>"
                                                     class="btn btn-danger width40 buy-btn">Купить</a></div>
            <? if ($arResult['PROPERTIES']['NALICHIE']['VALUE'] != ""): ?>
                <?
                if ($arResult['PROPERTIES']['NALICHIE']['VALUE'] == "да") {
                    $nalichie_img_src = '/upload/stat_img/nalichie.png';
                } elseif ($arResult['PROPERTIES']['NALICHIE']['VALUE'] == 'Под заказ') {
                    $nalichie_img_src = '/upload/stat_img/pod_zakaz.png';
                } else {
                    $nalichie_img_src = '/upload/stat_img/nalishie_false.png';
                }
                ?>
                <div class="col-md-12 left_padd_zero"><img src="<?= $nalichie_img_src ?>"/></div>
            <? endif; ?>
            <div class="col-md-12 left_padd_zero padding_class_top"><a class="orange-text" href="#FastOrder" data-toggle="modal">Заказать в один клик</a> <a
                    href="javascript:;"
                    class="popover-link"
                    data-toggle="popover" data-placement="top" data-content="Вы можете заказать в один клик, это очень просто!"
                    data-trigger="hover"
                    ><img src="/upload/stat_img/src/question.png"/></a></div>
            <div class="col-md-12 left_padd_zero padding_class_top"><a class="call-me"  href="#callMe" data-toggle="modal">Перезвоните мне</a> <a
                    href="javascript:;"
                    class="popover-link"
                    data-toggle="popover" data-placement="top" data-content="Оставьте заявку и наш оператор обязательно с вами свяжется"
                    data-trigger="hover"
                    ><img src="/upload/stat_img/src/question.png"/></a></div>
            <div class="col-md-12 left_padd_zero padding_class_top">S-бонусов 300 руб.</div>
            <div class="col-md-12 left_padd_zero padding_class_top"><a href="#FoundCheaper" data-toggle="modal">Нашли дешевле</a> <a
                    href="javascript:;"
                    class="popover-link"
                    data-toggle="popover" data-placement="top" data-content="что писать??"
                    data-trigger="hover"
                    ><img src="/upload/stat_img/src/question.png"/></a></div>
            <div class="col-md-12 left_padd_zero padding_class_top">Кредитная система????</div>
            <div class="col-md-12 left_padd_zero padding_class_top"><? $APPLICATION->IncludeFile(
                    '/inc/payment.php',
                    array(),
                    array('MODE' => 'html')
                ); ?></div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="col-xs-12">
                Доставка
            </div>
            <div class="col-xs-12">
                информация
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-12 description">
            <ul class="nav nav-tabs">
                <li class="active col-xs-3 text-center"><a href="#home" data-toggle="tab">Описание</a></li>
                <li class="col-xs-3 text-center"><a href="#reviews" data-toggle="tab">Отзывы</a></li>
                <?if($arResult['PROPERTIES']['VIDEO']['~VALUE']):?><li class="col-xs-3 text-center"><a href="#video" data-toggle="tab">Видео</a></li><?endif;?>
                <li class="col-xs-3 text-center"><a href="#faq" data-toggle="tab">Вопрос-Ответ</a></li>
            </ul>
            <div class="tab-content bs-example">
                <div class="tab-pane active" id="home"><?= $arResult['DETAIL_TEXT'] ?></div>
                <div class="tab-pane" id="reviews">Отзывы</div>
                <?if($arResult['PROPERTIES']['VIDEO']['~VALUE']):?><div class="tab-pane" id="video"><?=$arResult['PROPERTIES']['VIDEO']['~VALUE']?></div><?endif;?>
                <div class="tab-pane" id="faq">Вопрос-ответ</div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="FoundCheaper" tabindex="-1" role="dialog" aria-labelledby="FoundCheaperLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 520px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Нашли дешевле?</h4>
            </div>
            <div class="modal-body">
                <iframe src="/ajax/found_cheaper.php?name=<?=$arResult['NAME']?>" style="width: 480px; height: 680px;"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="FastOrder" tabindex="-1" role="dialog" aria-labelledby="FastOrderLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 450px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Заказать в один клик</h4>
            </div>
            <div class="modal-body">
                <iframe style="width: 400px; height: 370px;" src="/ajax/order_fast.php?id=<?=$arResult['ID']?>&iblock_id=<?=$arResult['IBLOCK_ID']?>&delivery=<?=$arResult['PROPERTIES']['OPISANIE_DOSTAVOK']['VALUE']?>"></iframe>
            </div>
        </div>
    </div>
</div>