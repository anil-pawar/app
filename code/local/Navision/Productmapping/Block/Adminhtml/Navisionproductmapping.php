<?php

class Navision_Productmapping_Block_Adminhtml_Navisionproductmapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisionproductmapping';
        $this->_blockGroup = 'navision_productmapping';
        $this->_headerText = $this->__('Product');

        parent::__construct();
    }
}