<?php
namespace Training\Repository\Setup;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '2.0.1') < 0) {
            $setup->getConnection()->insertMultiple($setup->getTable('test_table'),
                [["title" => "Horse"],
                ["title" => "Norse"],
                ["title" => "Force"],
                ["title" => "Of Course!"],
                ["title" => "Paws"]]
            );
        }

        $setup->endSetup();
    }
}