<?php
 
namespace Bluethink\Crud\Block\Index;
 
use Magento\Framework\View\Element\Template;
use Bluethink\Crud\Model\ResourceModel\Extension\CollectionFactory;
use Magento\Framework\View\Element\Template\Context;
 
class Showdata extends Template
{
 
    public $collection;
 
    public function __construct(Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        $this->collection = $collectionFactory;
        parent::__construct($context, $data);
    }
 
    public function getCollection()
    {
        // die("hello");
        return $this->collection->create();
    }
    public function getDeleteAction()
    {
        return $this->getUrl('crud/index/delete', ['_secure' => true]);
    }
    public function getEditAction()
    {
        return $this->getUrl('crud/index/edit', ['_secure' => true]);
    }
 
}