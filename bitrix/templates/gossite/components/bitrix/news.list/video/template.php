<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="block video">


<?if (!empty($arParams["LINE_NAME"])):?>
	<?if (!empty($arParams["LINE_NAME_URL"])):?>
		<h3><a href="<?=$arParams["LINE_NAME_URL"]?>"><?=$arParams["LINE_NAME"]?></a></h3>
	<?else:?>
		<h3><?=$arParams["LINE_NAME"]?></h3>
	<?endif;?>
<?endif;?>


<p></p>



<?foreach($arResult["ITEMS"] as $arItem):?><div class="tvid">
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>



<?$APPLICATION->IncludeComponent(
	"bitrix:player",
	"",
	Array(
		"PLAYER_TYPE" => "auto",
		"USE_PLAYLIST" => "N",
		"PATH" => $arItem["PROPERTIES"]["VIDEOLINK"]["VALUE"],
		"WIDTH" => "420",
		"HEIGHT" => "314",
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins",
		"CONTROLBAR" => "bottom",
		"WMODE" => "opaque",
		"LOGO_POSITION" => "none",
		"PLUGINS" => array(),
		"AUTOSTART" => "N",
		"REPEAT" => "none",
		"VOLUME" => "90",
		"MUTE" => "N",
		"ADVANCED_MODE_SETTINGS" => "N",
		"BUFFER_LENGTH" => "10",
		"ALLOW_SWF" => "N"
	)
);?></div><?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>