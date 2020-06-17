<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.ImagenModal',
            'Imagenmodal',
            'Imagen Modal'
        );


        $_EXTKEY='imagen_modal';
        $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);

        $frontendpluginName = 'Imagenmodal';
        $pluginSignature = strtolower($extensionName).'_'.strtolower($frontendpluginName);

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/imagen.xml');


        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Unal.ImagenModal',
            'web', // Make module a submodule of 'web'
            'imagenunalbe', // Submodule key
            '', // Position
            [
                'Imagen' => 'list',
            ],
            [
                'access' => 'user,group',
                'labels' => 'LLL:EXT:imagen_modal/Resources/Private/Language/locallang_plugin_imagen.xlf',
            ]
        );


        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('imagen_modal', 'Configuration/TypoScript', 'Imagen Modal');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_imagenmodal_domain_model_imagen', 'EXT:imagen_modal/Resources/Private/Language/locallang_csh_tx_imagenmodal_domain_model_imagen.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_imagenmodal_domain_model_imagen');

    }
);
