<?
// require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

// Для выгрузки в init.php
// AddEventHandler("catalog", "OnSuccessCatalogImport1C","detailTextUpdate");
// function detailTextUpdate() {

    CModule::IncludeModule("iblock");

    $rsEl = CIBlockElement::GetList(Array(), Array("IBLOCK_ID"=>1));
    
    while($arEl = $rsEl->GetNext()){ 
        $el = new CIBlockElement;
        $arFields = Array();
        if($arEl["PREVIEW_TEXT"]){
            $arFields['DETAIL_TEXT'] = $arEl["PREVIEW_TEXT"];
            $el->Update($arEl["ID"], $arFields);
        }
    }
// }
?>