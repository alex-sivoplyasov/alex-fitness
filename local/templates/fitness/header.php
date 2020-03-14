<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<!doctype html>
<html lang="<?= LANGUAGE_ID?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $APPLICATION->ShowHead();?>
    <title><?= $APPLICATION->SetTitle("Main title");?></title>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <?// \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/fix.js");?>

    <?\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/local/templates/fitness/css/normalize.css");?>
    <?\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/styles.css");?>

</head>
<body>
<?= $APPLICATION->ShowPanel();?>

<header class="header">
    header
</header>
<main class="content">

