<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

/**
 * Create table 'navision_deliverymethodmapping_navdeliverymethodmapping'
 */
$table = $installer->getConnection()
    // The following call to getTable('navision_deliverymethodmapping/navisiondeliverymethodmapping') will lookup the resource for foo_bar (itbrahma_connector_mysql4), and look
    // for a corresponding entity called baz. The table name in the XML is navision_deliverymethodmapping_navisiondeliverymethodmapping, so ths is what is created.
    ->newTable($installer->getTable('navision_deliverymethodmapping/navdeliverymethodmapping'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_CLOB, 0, array(
        'nullable'  => false,
        ), 'Name');
$installer->getConnection()->createTable($table);

$installer->endSetup();