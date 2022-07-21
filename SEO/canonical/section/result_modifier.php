<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/* *** Каталог *** */

use \Bitrix\Main\Page\Asset;								// Класс для подключения в head

$arSectCanonical = CIBlockSection::GetList(						// Класс для работы с разделами
	array("SORT" => "ASC"),
	array(
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],					// ID Инфоблока
		"ID" => $arResult["VARIABLES"]["SECTION_ID"]),				// ID Секции
		false,
		$arSelect = array("UF_CANONICAL_SECTION")				// Название UF свойства
);

if ($canonical = $arSectCanonical -> GetNext()):
	// Проверка на пустоту
	if (!empty($canonical["UF_CANONICAL_SECTION"])):
		// Вывод
		Asset::getInstance()->addString('<link rel="canonical" href="'.$canonical["UF_CANONICAL_SECTION"].'">');
	endif;
endif;
?>
