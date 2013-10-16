<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html lang="<?=LANGUAGE_ID;?>-<?=strtoupper(LANGUAGE_ID);?>">


<HEAD>

<title><?$APPLICATION->ShowTitle()?></title>
<?$APPLICATION->ShowHead();?>

<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />

<?
// для css-файлов
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/print.css");
?>

</HEAD>

<BODY>
<?$APPLICATION->ShowPanel();?>

<DIV id=all>
<DIV id=main>
<DIV style="background: url(<?$APPLICATION->ShowProperty("TOP_BANNER_URL");?>) no-repeat center 50%;" id=head>
<DIV id=vla>

<?$APPLICATION->IncludeComponent("bitrix:news.line", "top_icons", array(
	"IBLOCK_TYPE" => "Template",
	"IBLOCKS" => array(
		0 => "11",
	),
	"NEWS_COUNT" => "5",
	"FIELD_CODE" => array(
		0 => "PREVIEW_PICTURE",
		1 => "",
	),
	"SORT_BY1" => "SORT",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"DETAIL_URL" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "300",
	"CACHE_GROUPS" => "Y",
	"ACTIVE_DATE_FORMAT" => "d.m.Y"
	),
	false
);?>



</DIV>
<DIV id=say>

<H2><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/incule/slogan1.php",
		"EDIT_TEMPLATE" => "",
		"EDIT_MODE" => "php",
	),
false
);?></H2>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH."/incule/slogan2.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
</DIV></DIV>
<DIV id=info>
<DIV id=menu>
<DIV class="block nav">

<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>

</DIV></DIV>
<DIV id=text>

<?if ($GLOBALS["APPLICATION"]->GetCurPage() != "/"):?>
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
	"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
	"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
	),
	false
);?>
<?endif;?>

