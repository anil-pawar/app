<?php
class Navision_Currencymapping_Model_Mysql4_Navisioncurrencymapping_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_currencymapping/navisioncurrencymapping');
    }
}