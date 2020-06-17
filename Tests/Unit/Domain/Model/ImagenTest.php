<?php
namespace UNAL\ImagenModal\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Camilo Neiva <jcneivaa@unal.edu.co>
 */
class ImagenTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\ImagenModal\Domain\Model\Imagen
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \UNAL\ImagenModal\Domain\Model\Imagen();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getUrlImagenReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUrlImagen()
        );
    }

    /**
     * @test
     */
    public function setUrlImagenForStringSetsUrlImagen()
    {
        $this->subject->setUrlImagen('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'urlImagen',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUrlLinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUrlLink()
        );
    }

    /**
     * @test
     */
    public function setUrlLinkForStringSetsUrlLink()
    {
        $this->subject->setUrlLink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'urlLink',
            $this->subject
        );
    }
}
