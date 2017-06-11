<?php
class Navision_Categorymapping_Model_Mysql4_Navisioncategorymapping_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_categorymapping/navisioncategorymapping');
    }
}