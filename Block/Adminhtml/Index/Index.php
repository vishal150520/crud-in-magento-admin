<?php

namespace Bluethink\Crud\Block\Adminhtml\Index;

class Index extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

    public function updateCancelTime(){
        $formKey="";
        return $this->getFormKey();
    }

    public function getFormAction()
    {
        return $this->getUrl('crudadmin/index/save', ['_secure' => true]);
    }
    // public function getFormData()
    // {
    //     return $this->getUrl('crud/index/showdata', ['_secure' => true]);
    // }

    // public function getBackUrl()
    // {
    //     return $this->getUrl('crud/index/index', ['_secure' => true]);
    // }

    public function test()
    {
        echo "hello admin";
    }

    
}