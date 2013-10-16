<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?
// для js-файлов
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/components/bitrix/news/photo/bitrix/news.detail/.default/daGallery-min.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/components/bitrix/news/photo/bitrix/news.detail/.default/jquery.js");
?>


<div class="galPicList daGallery">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
<a class="gPic" rel="galI" target="_blank" href="<?=$arItem['DETAIL_PICTURE']['SRC']?>"> <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"></a>
	<?endforeach;?>
<div class="clear"></div><script type="text/javascript">DaGallery.init();</script></div>
