<?php
namespace Training\Repository\Model;

use Magento\Framework\Model\AbstractModel;

class Training extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Training\Repository\Model\ResourceModel\Training');
    }
}