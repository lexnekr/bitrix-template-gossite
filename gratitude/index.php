<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Благодарности");
?><?$APPLICATION->IncludeComponent("bitrix:news.line", "gratitude", array(
	"IBLOCK_TYPE" => "Template",
	"IBLOCKS" => array(
		0 => "9",
	),
	"NEWS_COUNT" => "20",
	"FIELD_CODE" => array(
		0 => "PREVIEW_PICTURE",
		1 => "DETAIL_PICTURE",
		2 => "",
	),
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"DETAIL_URL" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_GROUPS" => "Y",
	"ACTIVE_DATE_FORMAT" => "d.m.Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>