<?php
namespace Vendor\CheckoutCustomField\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CustomField extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('quote', 'entity_id');
    }
}
