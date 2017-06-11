<?php

class Navision_Taxmapping_Block_Adminhtml_Navisiontaxmapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisiontaxmapping';
        $this->_blockGroup = 'navision_taxmapping';
        $this->_headerText = $this->__('Tax Rate');

        parent::__construct();
    }
}