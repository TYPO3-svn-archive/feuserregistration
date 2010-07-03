<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Frontend User Registration'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Frontend User Registration');

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_list.xml');


// t3lib_extMgm::addLLrefForTCAdescr('tx_feuserregistration_domain_model_frontenduser','EXT:feuserregistration/Resources/Private/Language/locallang_csh_tx_feuserregistration_domain_model_frontenduser.xml');
// t3lib_extMgm::allowTableOnStandardPages('tx_feuserregistration_domain_model_frontenduser');

?>