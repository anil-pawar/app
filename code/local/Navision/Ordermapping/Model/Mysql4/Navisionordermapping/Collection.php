<?php
class Navision_Ordermapping_Model_Mysql4_Navisionordermapping_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_ordermapping/navisionordermapping');
    }
}