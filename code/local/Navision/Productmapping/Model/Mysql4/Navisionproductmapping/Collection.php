<?php
class Navision_Productmapping_Model_Mysql4_Navisionproductmapping_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_productmapping/navisionproductmapping');
    }
}