<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$strUserId='';
foreach($arResult["DISPLAY_PROPERTIES"]["PHOTO"]["FILE_VALUE"] as $ID=>$arItems){





       $arImage=CFile::ResizeImageGet($arItems['ID'], array('width'=>$arParams['LIST_PICTURE_W'], 'height'=>$arParams['LIST_PICTURE_H']), BX_RESIZE_IMAGE_PROPORTIONAL, true);
       $arResult["DISPLAY_PROPERTIES"]["PHOTO"]["FILE_VALUE"][$ID]['THUMBNAIL']=$arImage;

}




?>

