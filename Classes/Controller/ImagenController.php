<?php
namespace UNAL\ImagenModal\Controller;

/***
 *
 * This file is part of the "Imagen Modal" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Camilo Neiva <jcneivaa@unal.edu.co>, UNAL
 *
 ***/

/**
 * ImagenController
 */
class ImagenController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * imagenRepository
     *
     * @var \UNAL\ImagenModal\Domain\Repository\ImagenRepository
     * @inject
     */
    protected $imagenRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $imagen = $this->settings['url_imagen'];
        $url = $this->settings['url'];
        $titulo = $this->settings['titulo'];

        $this->view->assignMultiple([
            'imagen' => $imagen,
            'url' => $url,
            'titulo' => $titulo,
        ]);
    }
}
