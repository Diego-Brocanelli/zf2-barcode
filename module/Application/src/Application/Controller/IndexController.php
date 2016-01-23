<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Barcode\Barcode;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$barcodeOpt = ['text' => '123456789'];

    	$renderOpt = ['imageType' => 'jpeg'];

    	$renderOpt = ['imageType' => 'jpeg'];

    	$barcodeImg = Barcode::factory(
			'codabar', 'image', $barcodeOpt, $renderOpt
		)->render();

        return new ViewModel(['barcode' => $barcodeImg]);
    }
}
