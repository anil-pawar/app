<?php
class Navision_Integrationconfiguration_Model_Mysql4_Navisionintegrationconfiguration_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_integrationconfiguration/navisionintegrationconfiguration');
    }
}