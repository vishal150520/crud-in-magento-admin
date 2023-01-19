<?php

namespace Bluethink\Crud\Block\Index;

class Index extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

    public function getFormAction()
    {
        return $this->getUrl('crud/index/submit', ['_secure' => true]);
    }
    public function getFormData()
    {
        return $this->getUrl('crud/index/showdata', ['_secure' => true]);
    }

    // public function getBackUrl()
    // {
    //     return $this->getUrl('crud/index/index', ['_secure' => true]);
    // }

    
}