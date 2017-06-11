<?php
class Navision_Currencymapping_Model_Mysql4_Navisioncurrencymapping
    extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_currencymapping/navisioncurrencymapping', 'id');
    }
}