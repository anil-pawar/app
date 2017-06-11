<?php
class Navision_Taxmapping_Model_Mysql4_Navisiontaxmapping_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_taxmapping/navisiontaxmapping');
    }
}