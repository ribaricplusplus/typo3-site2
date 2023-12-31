<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['test_package'] = 'EXT:test_package/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:test_package/Configuration/TsConfig/Page/All.tsconfig">');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'TestPackage',
    'ClPlugin',
    [\CrossLink\TestPackage\Controller\CustomController::class => 'show'],
    [\CrossLink\TestPackage\Controller\CustomController::class => 'show'],
);