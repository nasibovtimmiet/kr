<?php
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."template_styles.css");?>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<header>
    <div class="container">
        <div class="heading clearfix">
            <div class="logo">
                <a href="index.html"><?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                        )
                    );?>
                </a>
            </div>
            <div class="menu">
                <nav>
                    <ul class="mmenu">
                        <li>
                            <a href="#">Ноутбуки Dell</a>
                        </li>
                        <li>
                            <a href="#">Ноутбуки Lenovo</a>
                        </li>
                        <li>
                            <a href="#">Ноутбуки Apple</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="container">
