<?php
namespace Vendor\CheckoutCustomField\Model;

use Magento\Framework\Model\AbstractModel;

class CustomField extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Vendor\CheckoutCustomField\Model\ResourceModel\CustomField::class);
    }
}
