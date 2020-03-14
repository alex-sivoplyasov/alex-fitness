<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if (!empty($arResult["ITEMS"])): ?>
    <section class="partners section">
        <div class="container">
            <div class="title section-title"> <?= $arParams["BLOCK_TITLE"]; ?> </div>
            <ul class="list">
                <?for( $i = 0; $i < 4; $i ++): ?>
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <li class="item">
                        <a href="javascript:void(0);" class="link">
                            <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                                <div class="image-wrapper">
                                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="<?= $arItem["NAME"]; ?>"
                                         class="image">
                                </div>
                            <? endif; ?>

                        </a>
                    </li>
                <? endforeach; ?>
                <? endfor; ?>
                <li class="item">
                    <a href="javascript:void(0);" class="link">
                        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                            <div class="image-wrapper">
                                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="<?= $arItem["NAME"]; ?>"
                                     class="image">
                            </div>
                        <? endif; ?>

                    </a>
                </li>
            </ul>
        </div>
    </section>
<? endif; ?>
