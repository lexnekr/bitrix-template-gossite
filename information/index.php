<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Полезная информация: Права инвалидов, Актуальные вопросы");
?> <?$APPLICATION->IncludeComponent("bitrix:news.index", "3collomns", array(
	"IBLOCK_TYPE" => "content",
	"IBLOCKS" => array(
		0 => "14",
		1 => "15",
		2 => "16",
	),
	"NEWS_COUNT" => "30",
	"IBLOCK_SORT_BY" => "SORT",
	"IBLOCK_SORT_ORDER" => "ASC",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FIELD_CODE" => array(
		0 => "PREVIEW_TEXT",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"FILTER_NAME" => "arrFilter",
	"IBLOCK_URL" => "",
	"DETAIL_URL" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"ACTIVE_DATE_FORMAT" => "d.m.Y"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>