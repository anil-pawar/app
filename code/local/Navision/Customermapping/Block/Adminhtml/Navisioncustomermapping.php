<?php

class Navision_Customermapping_Block_Adminhtml_Navisioncustomermapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisioncustomermapping';
        $this->_blockGroup = 'navision_customermapping';
        $this->_headerText = $this->__('Customer');

        parent::__construct();
    }
}