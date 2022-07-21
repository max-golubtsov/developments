<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/* *** Элемент *** */

// Класс подключения для подключения в head
use \Bitrix\Main\Page\Asset;

// Проверка на пустоту
if (!empty($arResult["PROPERTIES"]["CANONICAL_ELEMENT"]["VALUE"])):
	// Вывод
	Asset::getInstance()->addString('<link rel="canonical" href="'.$arResult["PROPERTIES"]["CANONICAL_ELEMENT"]["VALUE"].'">');
endif;
?>