<?php
namespace UNAL\ImagenModal\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Camilo Neiva <jcneivaa@unal.edu.co>
 */
class ImagenControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\ImagenModal\Controller\ImagenController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\UNAL\ImagenModal\Controller\ImagenController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllImagensFromRepositoryAndAssignsThemToView()
    {

        $allImagens = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $imagenRepository = $this->getMockBuilder(\UNAL\ImagenModal\Domain\Repository\ImagenRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $imagenRepository->expects(self::once())->method('findAll')->will(self::returnValue($allImagens));
        $this->inject($this->subject, 'imagenRepository', $imagenRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('imagens', $allImagens);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
