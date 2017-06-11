<?php
class Navision_Webservices_Model_Mysql4_Navisionwebservices_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_webservices/navisionwebservices');
    }
}