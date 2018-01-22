<?php

/* @var CBitrixComponentTemplate $this */

$this->addExternalCss('');

$this->addExternalCss('');

?>

<? if(count($arResult['ITEMS']) > 0): ?>

    <div>

        <? foreach ($arResult['ITEMS'] as $aItem): ?>

            <?= $aItem['PROPERTIES']['AUTHOR']['VALUE']; ?>
            <?= $aItem['PROPERTIES']['DATA_PUBLIC']['VALUE']; ?>
            <?= $aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC']; ?>

            <img src="<?= $aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC']; ?>">

            <?= $aItem['DETAIL_PICTURE']['SRC']; ?>

            <?= $aItem['PROPERTIES']['LIKES']['VALUE']; ?>
            <?= $aItem['PROPERTIES']['COMMENT']['VALUE']; ?>

            <? foreach ($aItem['PROPERTIES']['TAGS']['VALUE'] as $aValue): ?>

                <?= $aValue; ?>

            <? endforeach; ?>

        <? endforeach; ?>

    </div>

<? endif; ?>
