<?php

/** @var \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry $rendererRegistry */
$rendererRegistry = \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry::getInstance();
$rendererRegistry->registerRendererClass(\WorkWithTom\WwtTiktok\Resource\Rendering\TikTokRenderer::class);

$GLOBALS['TYPO3_CONF_VARS']['SYS']['fal']['onlineMediaHelpers']['tiktok'] = \WorkWithTom\WwtTiktok\Resource\OnlineMedia\Helpers\TikTokHelper::class;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['FileInfo']['fileExtensionToMimeType']['tiktok'] = 'video/tiktok';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext'] = 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo,tiktok';

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerFileExtension('tiktok', 'mimetypes-media-video-tiktok');

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
);
$iconRegistry->registerIcon(
    'mimetypes-media-video-tiktok',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:wwt_tiktok/Resources/Public/Icons/Extension.png']
);
