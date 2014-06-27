<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
    global $USER;
    global $APPLICATION;
    define("USER_PROP","UF_BX_FAVORITE");

    $user_id = $USER->GetId();
    $good_id = intval($_REQUEST['id']);
    $action = $_REQUEST['action'];
    $img = false;
    $arFavorites = array();

    if($good_id>0):
        if($user_id>0){
            $rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), array("ID"=>$user_id),array("SELECT"=>array(USER_PROP)));
            $arUser = $rsUsers->Fetch();
            $arFavorites = $arUser[USER_PROP];
            switch ($action) {

                case "add":
                    $arFavorites[]=$good_id;
                    break;
                case "remove":
                    unset($arFavorites[array_search($good_id, $arFavorites)]);
                    break;

            }
            $user = new CUser;
            $user->Update($user_id, array(USER_PROP=>$arFavorites));
        }else{
            $arFavorites = unserialize($_COOKIE['favorite']);
            switch ($action) {

                case "add":
                    $arFavorites[]=$good_id;
                    break;
                case "remove":
                    unset($arFavorites[array_search($good_id, $arFavorites)]);
                    if(count($arFavorites)==1){
                        unset($_COOKIE['favorite']);
                    }
                    break;

            }
            setcookie('favorite', serialize($arFavorites), time()+3600, "/");
        }
    endif;//check good_id
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>