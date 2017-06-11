<?php
class Navision_Customermapping_Model_Mysql4_Navisioncustomermapping
    extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_customermapping/navisioncustomermapping', 'id');
    }
}