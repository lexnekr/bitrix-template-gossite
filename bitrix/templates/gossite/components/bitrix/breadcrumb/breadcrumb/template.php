<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<div id="pagesnav">';

for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)
{
	if($index > 0)
		$strReturn .= '<span>&nbsp;/&nbsp;</span>';

	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	if($arResult[$index]["LINK"] <> "")
		$strReturn .= '<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a>';
	else
		$strReturn .= ''.$title.'';
}

$strReturn .= '</div>';
return $strReturn;
?>
