<?php

class Navision_Categorymapping_Block_Adminhtml_Navisioncategorymapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        
        $this->_blockGroup = 'navision_categorymapping';
        $this->_controller = 'adminhtml_navisioncategorymapping';
        $this->_headerText = $this->__('Category');

        parent::__construct();
    }
}