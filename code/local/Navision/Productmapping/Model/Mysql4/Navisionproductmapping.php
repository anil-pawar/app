<?php
class Navision_Productmapping_Model_Mysql4_Navisionproductmapping
    extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_productmapping/navisionproductmapping', 'id');
    }
}