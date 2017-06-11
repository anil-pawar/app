<?php
class Navision_Attributesetmapping_Model_Mysql4_Navisionattributesetmapping_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_attributesetmapping/navisionattributesetmapping');
    }
}