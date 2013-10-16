<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();




if(!empty($arResult))
{
        //html-код горизонтального разделителя
        $htmlHorizontalSeparatorCode = '';
        // раскомментируйте строчку ниже если не нужен горизонтальный разделитель
	//$htmlHorizontalSeparatorCode = '';

        //html-код вертикального разделителя
        $htmlVerticalSeparatorCode = ' :: ';
        // раскомментируйте строчку ниже если не нужен вертикальный разделитель
        //$htmlVerticalSeparatorCode = '';

        $previousLevel = 0;
        $htmlVerticalSeparator = $htmlHorizontalSeparator = $openTag = $itemTag = $closeTag = '';

        ?><?
        foreach($arResult as $arItem)
        {
                echo $htmlHorizontalSeparator.$openTag.$itemTag.$closeTag;


                $htmlHorizontalSeparator = '';
                $strCSSInner = '';
 


                        $openTag = $htmlVerticalSeparator.'';
                        $itemTag = '<a href="'.$arItem['LINK'].'">'.$arItem['TEXT'].'</a>';

                        $htmlVerticalSeparator = $htmlVerticalSeparatorCode;
 
 
                $previousLevel = $arItem['DEPTH_LEVEL'];
        }
        echo $htmlHorizontalSeparator.$openTag.$itemTag.$closeTag;

        ?><?
        ?><div class="menu-clear-left"></div><?
}
?>