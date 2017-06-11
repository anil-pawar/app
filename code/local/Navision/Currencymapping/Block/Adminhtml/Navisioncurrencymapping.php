<?php

class Navision_Currencymapping_Block_Adminhtml_Navisioncurrencymapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisioncurrencymapping';
        $this->_blockGroup = 'navision_currencymapping';
        $this->_headerText = $this->__('Currency');

        parent::__construct();
    }
}