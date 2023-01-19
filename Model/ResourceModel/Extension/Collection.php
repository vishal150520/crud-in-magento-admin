<?php
namespace Bluethink\Crud\Model\ResourceModel\Extension;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Bluethink\Crud\Model\Extension', 
        'Bluethink\Crud\Model\ResourceModel\Extension');
    }
}