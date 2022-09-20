<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule("iblock");
CModule::IncludeModule("file");

$rsEl = CIBlockElement::GetList(Array(), Array("IBLOCK_ID"=>1));

while($arEl = $rsEl->GetNext()){ 
	$el = new CIBlockElement;
	$arFields = Array();
	if($arEl["DETAIL_PICTURE"]){
		$arFields['PREVIEW_PICTURE'] = CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"] . CFile::GetFileArray($arEl["DETAIL_PICTURE"])["SRC"]);
		$arFields['PREVIEW_PICTURE']["del"] = "Y";
		$el->Update($arEl["ID"], $arFields);
	}
}
?>