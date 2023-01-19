<?php
namespace Bluethink\Crud\Model;
 
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Extension extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Bluethink\Crud\Model\ResourceModel\Extension');
    }
}