<?php

class Navision_Jobstatus_Block_Adminhtml_Navisionjobstatus extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisionjobstatus';
        $this->_blockGroup = 'navision_jobstatus';
        $this->_headerText = $this->__('View Job Status');

        parent::__construct();
    }
}