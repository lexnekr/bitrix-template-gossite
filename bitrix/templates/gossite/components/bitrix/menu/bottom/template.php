<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();




if(!empty($arResult))
{
        //html-РєРѕРґ РіРѕСЂРёР·РѕРЅС‚Р°Р»СЊРЅРѕРіРѕ СЂР°Р·РґРµР»РёС‚РµР»СЏ
        $htmlHorizontalSeparatorCode = '';
        // СЂР°СЃРєРѕРјРјРµРЅС‚РёСЂСѓР№С‚Рµ СЃС‚СЂРѕС‡РєСѓ РЅРёР¶Рµ РµСЃР»Рё РЅРµ РЅСѓР¶РµРЅ РіРѕСЂРёР·РѕРЅС‚Р°Р»СЊРЅС‹Р№ СЂР°Р·РґРµР»РёС‚РµР»СЊ
	//$htmlHorizontalSeparatorCode = '';

        //html-РєРѕРґ РІРµСЂС‚РёРєР°Р»СЊРЅРѕРіРѕ СЂР°Р·РґРµР»РёС‚РµР»СЏ
        $htmlVerticalSeparatorCode = ' :: ';
        // СЂР°СЃРєРѕРјРјРµРЅС‚РёСЂСѓР№С‚Рµ СЃС‚СЂРѕС‡РєСѓ РЅРёР¶Рµ РµСЃР»Рё РЅРµ РЅСѓР¶РµРЅ РІРµСЂС‚РёРєР°Р»СЊРЅС‹Р№ СЂР°Р·РґРµР»РёС‚РµР»СЊ
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