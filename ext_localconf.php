<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'UNAL.ImagenModal',
            'Imagenmodal',
            [
                'Imagen' => 'list'
            ],
            // non-cacheable actions
            [
                'Imagen' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    imagenmodal {
                        iconIdentifier = imagen_modal-plugin-imagenmodal
                        title = LLL:EXT:imagen_modal/Resources/Private/Language/locallang_db.xlf:tx_imagen_modal_imagenmodal.name
                        description = LLL:EXT:imagen_modal/Resources/Private/Language/locallang_db.xlf:tx_imagen_modal_imagenmodal.description
                        tt_content_defValues {
                            CType = list
                            list_type = imagenmodal_imagenmodal
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'imagen_modal-plugin-imagenmodal',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:imagen_modal/Resources/Public/Icons/user_plugin_imagenmodal.svg']
			);
		
    }
);
