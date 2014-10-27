<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Deajax.' . $_EXTKEY,
	'Ajaxshow',
	array(
		'Result' => 'ajaxShow, ajaxGet, ajaxPost',
		
	),
	// non-cacheable actions
	array(
		'Result' => '',
		
	)
);
