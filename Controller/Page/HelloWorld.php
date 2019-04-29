<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 22.04.2019
 * Time: 22:33
 */

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
//use SimplifiedMagento\FirstModule\NotMagento\PencilInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;
    protected $productRepository;

    public function __construct(Context $context,
                                PencilInterface $pencilInterface,
                                ProductRepositoryInterface $productRepository)
    {
        $this->pencilInterface = $pencilInterface;
        $this->productRepository = $productRepository;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        //echo $this->pencilInterface->getPencilType();
        echo get_class($this->productRepository);
    }
}