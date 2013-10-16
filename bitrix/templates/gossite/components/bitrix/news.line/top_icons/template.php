<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>




	<?foreach($arResult["ITEMS"] as $arItem):?>


<div class="tb block">
<a href="<?=$arItem['CODE']?>" title="<?echo $arItem["NAME"]?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"></a>
</div>


	<?endforeach;?>

