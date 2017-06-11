<?php

class Navision_Ordermapping_Block_Adminhtml_Navisionordermapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisionordermapping';
        $this->_blockGroup = 'navision_ordermapping';
        $this->_headerText = $this->__('Sales Order');

        parent::__construct();
    }
}