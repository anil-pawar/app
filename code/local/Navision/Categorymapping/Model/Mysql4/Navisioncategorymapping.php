<?php
class Navision_Categorymapping_Model_Mysql4_Navisioncategorymapping
    extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_categorymapping/navisioncategorymapping', 'id');
    }
}