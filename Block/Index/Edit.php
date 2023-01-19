<?php
 
namespace Bluethink\Crud\Block\Index;
 
use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Element\Template;
use Bluethink\Crud\Model\ExtensionFactory;
 
class Edit extends Template
{
    private $extensionFactory;
 
    public function __construct(ExtensionFactory $extensionFactory, Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->extensionFactory = $extensionFactory;
    }
 
    public function getFormAction()
    {
        return $this->getUrl('crud/index/submit', ['_secure' => true]);
    }
 
    public function getAllData()
    {
        $id = $this->getRequest()->getParam("id");
        $model = $this->extensionFactory->create();
        return $model->load($id);
    }
}