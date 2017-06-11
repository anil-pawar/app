<?php
class Navision_Jobstatus_Model_Mysql4_Navisionjobstatus_Collection
    extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_jobstatus/navisionjobstatus');
    }
}