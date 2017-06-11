<?php

class Navision_Attributeoptionmapping_Block_Adminhtml_Navisionattributeoptionmapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisionattributeoptionmapping';
        $this->_blockGroup = 'navision_attributeoptionmapping';
        $this->_headerText = $this->__('Attribute Option');

        parent::__construct();
    }
}