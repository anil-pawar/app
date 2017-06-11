<?php
class Navision_Jobstatus_Model_Mysql4_Navisionjobstatus
    extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('navision_jobstatus/navisionjobstatus', 'id');
    }
}