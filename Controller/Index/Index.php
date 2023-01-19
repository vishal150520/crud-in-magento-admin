<?php

namespace Bluethink\Crud\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * Index constructor.
     *
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    /**
     * Execute method.
     *
     * @return ResponseInterface|ResultInterface|Page
     */
    public function execute()
    {
        // die("hello");
        $resultPage = $this->pageFactory->create();
        return $resultPage;
    }
}
