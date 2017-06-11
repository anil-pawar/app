<?php

class Navision_Attributesetmapping_Block_Adminhtml_Navisionattributesetmapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisionattributesetmapping';
        $this->_blockGroup = 'navision_attributesetmapping';
        $this->_headerText = $this->__('Attribute Set');

        parent::__construct();
    }
}