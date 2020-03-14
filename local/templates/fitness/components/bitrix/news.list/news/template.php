<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<? if( !empty($arResult["ITEMS"])): ?>
    <section class="news section">
        <div class="container">
            <div class="title section-title"> <?= $arParams["BLOCK_TITLE"]; ?> </div>
            <ul class="list">
                <? foreach ( $arResult["ITEMS"] as $arItem):?>
                    <li class="item">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>" class="link">
                            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                                <div class="image-wrapper">
                                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="<?= $arItem["NAME"]?>" class="image">
                                </div>
                            <? endif; ?>

                            <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                                <div class="name">
                                    <?= $arItem["NAME"]?>
                                </div>
                            <? endif; ?>
                        </a>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </section>
<? endif; ?>
