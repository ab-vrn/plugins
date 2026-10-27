
<!-- Скопируйте папки css, js и svg в папку шаблона вашего сайта -->
<!-- Далее следуйте инструкции: -->

<!-- Подключить css в секции head -->
<head>
<?
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/highlight.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
?>
</head>

<!-- Вставить svg-файл в body -->
<body>
<?$APPLICATION->IncludeComponent(
"bitrix:main.include",
"",
Array(
	"AREA_FILE_SHOW" => "file",
	"AREA_FILE_SUFFIX" => "inc",
	"COMPOSITE_FRAME_MODE" => "A",
	"COMPOSITE_FRAME_TYPE" => "AUTO",
	"EDIT_TEMPLATE" => "",
	"PATH" => SITE_TEMPLATE_PATH."/svg/svg_include.php" // путь к svg-файлу
)
);?>


<!-- В самый низ, перед закрытием body -->
<?
use Bitrix\Main\Page\Asset; 
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/highlight.min.js" );
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/script.js');
?>