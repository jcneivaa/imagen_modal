<?php
namespace UNAL\ImagenModal\Domain\Model;

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
 * Imagen
 */
class Imagen extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * urlImagen
     *
     * @var string
     */
    protected $urlImagen = '';

    /**
     * urlLink
     *
     * @var string
     */
    protected $urlLink = '';

    /**
     * Returns the urlImagen
     *
     * @return string $urlImagen
     */
    public function getUrlImagen()
    {
        return $this->urlImagen;
    }

    /**
     * Sets the urlImagen
     *
     * @param string $urlImagen
     * @return void
     */
    public function setUrlImagen($urlImagen)
    {
        $this->urlImagen = $urlImagen;
    }

    /**
     * Returns the urlLink
     *
     * @return string $urlLink
     */
    public function getUrlLink()
    {
        return $this->urlLink;
    }

    /**
     * Sets the urlLink
     *
     * @param string $urlLink
     * @return void
     */
    public function setUrlLink($urlLink)
    {
        $this->urlLink = $urlLink;
    }
}
