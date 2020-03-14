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
<section class="team section">
    <div class="container">
        <div class="title section-title">Команда</div>

        <ul class="list">
            <li class="item" style="background-image: url('./images/team1.png')">
                <!--                    <a href="#" class="link"></a>-->
                <div class="content">
                    <div>
                        <div class="position element-uppercase">Персональный тренер</div>
                        <div class="name element-title">Стивен Джордж Джеррард</div>
                    </div>

                    <div>
                        <div class="phone-title element-uppercase">Телефон</div>
                        <div class="phone">8 982 347 53 79</div>
                    </div>

                    <div>
                        <div class="email-title element-uppercase">Email</div>
                        <div class="email">alex.sivoplyasov@mail.ru</div>
                    </div>

                    <div class="button">
                        Записаться
                    </div>
                </div>
            </li>

            <li class="item" style="background-image: url('./images/team2.png')">

            </li>

            <li class="item" style="background-image: url('./images/team1.png')">

            </li>
        </ul>
    </div>

</section>


<? if( !empty($arResult["ITEMS"])): ?>
    <section class="team section">
        <div class="container">
            <div class="title section-title"> <?= $arParams["BLOCK_TITLE"]; ?> </div>
            <ul class="list">
                <? foreach ( $arResult["ITEMS"] as $arItem):?>
                    <li class="item" style="<?= $arItem["PREVIEW_PICTURE"]["SRC"];?>">
                        <div class="content">
                            <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                            <div>
                                <div class="position element-uppercase">Персональный тренер</div>
                                <div class="name element-title">Стивен Джордж Джеррард</div>
                            </div>
                            <? endif; ?>

                            <div>
                                <div class="phone-title element-uppercase">Телефон</div>
                                <div class="phone">8 982 347 53 79</div>
                            </div>

                            <div>
                                <div class="email-title element-uppercase">Email</div>
                                <div class="email">alex.sivoplyasov@mail.ru</div>
                            </div>

                            <div class="button">
                                Записаться
                            </div>
                        </div>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </section>
<? endif; ?>
