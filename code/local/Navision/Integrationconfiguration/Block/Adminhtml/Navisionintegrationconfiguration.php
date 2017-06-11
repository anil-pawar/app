<?php

class Navision_Integrationconfiguration_Block_Adminhtml_Navisionintegrationconfiguration extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisionintegrationconfiguration';
        $this->_blockGroup = 'navision_integrationconfiguration';
        $this->_headerText = $this->__('Integration Configuration');

        parent::__construct();
    }
}