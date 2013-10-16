<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="region">
<h2><?=$arParams['LINE_NAME']?></h2>
	<?foreach($arResult["ITEMS"] as $arItem):?><div class="block defn"><div class="tni"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" title="<?echo $arItem["NAME"]?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?echo $arItem["NAME"]?>"></a></div> <span class="data"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span> <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a><p><?echo $arItem["PREVIEW_TEXT"]?></p></div><?endforeach;?>
</div>