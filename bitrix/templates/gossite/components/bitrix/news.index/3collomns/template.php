		<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$LINE_ELEMENT_COUNT=2;?>
<div class="news-index">
<?
$cell = 0;
foreach($arResult["IBLOCKS"] as $arIBlock):?>
				<?
				$this->AddEditAction('iblock_'.$arIBlock['ID'], $arIBlock['ADD_ELEMENT_LINK'], CIBlock::GetArrayByID($arIBlock["ID"], "ELEMENT_ADD"));
				?>
<div class="block pub"><h3><a href="<?=$arIBlock["LIST_PAGE_URL"]?>"><?=$arIBlock["NAME"]?></a></h3>
				<?foreach($arIBlock["ITEMS"] as $arItem):?><?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNI_ELEMENT_DELETE_CONFIRM')));
				?><div class="kon"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a><p><?echo $arItem["PREVIEW_TEXT"]?></p></div><?endforeach;?></div>

	<?
	if((++$cell)>=$LINE_ELEMENT_COUNT):
		$cell = 0;
	?><?
	endif; // if($n%$LINE_ELEMENT_COUNT == 0):
endforeach;
		while ($cell<$LINE_ELEMENT_COUNT):
			$cell++;
		?><?
		endwhile;
		?>

</div>