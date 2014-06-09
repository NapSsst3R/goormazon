<?
    define('NEED_AUTH', true);
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
    $APPLICATION->SetTitle("Авторизация");
?>Вы успешно авторизованы, для изменения персональных данных перейдите в <a href="/personal/">личный
    кабинет</a>, что бы выбрать товары перейдите в <a href="/catalog/">каталог
    товаров</a>.<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>