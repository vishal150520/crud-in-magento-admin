<?php
namespace Bluethink\Crud\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Extension extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('curd_table','id');
    }
}