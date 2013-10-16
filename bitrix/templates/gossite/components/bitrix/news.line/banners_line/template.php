<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>




<div id="botban">
<h2><?=$arParams['LINE_NAME']?></h2>

	<?foreach($arResult["ITEMS"] as $arItem):?><div class="block ban"><a href="<?=$arItem['CODE']?>" title="<?echo $arItem["NAME"]?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"></a></div><?endforeach;?>

</div>