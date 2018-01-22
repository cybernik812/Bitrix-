<?php

$aSizePost = [
    'width' => '400',
    'height' => '250',
];

$aSizePost = [
    'width' => '50',
    'height' => '50',
];


foreach  ($arResult['ITEMS'] as &$aItem) {
    $aPicture = CFile::ResizeImageGet(
        $aItem['DETAIL_PICTURE'],
        $aSizePost,
        BX_RESIZE_EXACT);

    $aItem['DETAIL_PICTURE']['SRC'] =$aPicture['src'];

    $aPictureAvatar = CFile::ResizeImageGet(
        $aItem['DETAIL_PROPERTIES']['AVATAR']['FILE_VALUE'],
        $aSize,
        BX_RESIZE_IMAGE_EXACT

);

    $aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC'] =$aPictureAvatar['src'];

}

