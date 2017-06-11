<?php
class Navision_Webservices_Model_Mysql4_Navisionwebservices
    extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_webservices/navisionwebservices', 'id');
    }
}