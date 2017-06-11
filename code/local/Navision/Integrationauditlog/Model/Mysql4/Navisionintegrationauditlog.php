<?php
class Navision_Integrationauditlog_Model_Mysql4_Navisionintegrationauditlog
    extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_integrationauditlog/navisionintegrationauditlog', 'id');
    }
}