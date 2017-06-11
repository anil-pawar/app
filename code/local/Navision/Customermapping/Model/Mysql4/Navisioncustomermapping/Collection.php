<?php
class Navision_Customermapping_Model_Mysql4_Navisioncustomermapping_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_customermapping/navisioncustomermapping');
    }
}