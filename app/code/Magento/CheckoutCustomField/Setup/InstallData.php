<?php
namespace Vendor\CheckoutCustomField\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\InstallDataInterface;
use Vendor\CheckoutCustomField\Model\CustomFieldFactory;

class InstallData implements InstallDataInterface
{
    protected $customFieldFactory;

    public function __construct(CustomFieldFactory $customFieldFactory)
    {
        $this->customFieldFactory = $customFieldFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $quoteItemTable = $setup->getTable('quote');
        $connection = $setup->getConnection();
        $connection->addColumn(
            $quoteItemTable,
            'custom_field_value',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'nullable' => true,
                'comment' => 'Custom Field Value'
            ]
        );

        $orderItemTable = $setup->getTable('sales_order');
        $connection->addColumn(
            $orderItemTable,
            'custom_field_value',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'nullable' => true,
                'comment' => 'Custom Field Value'
            ]
        );

        $setup->endSetup();
    }
}
