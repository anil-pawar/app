<?php

class Navision_Integrationauditlog_Block_Adminhtml_Navisionintegrationauditlog extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisionintegrationauditlog';
        $this->_blockGroup = 'navision_integrationauditlog';
        $this->_headerText = $this->__('Integration Audit Log');

        parent::__construct();
    }
}