<?php

class Navision_Deliverymethodmapping_Block_Adminhtml_Navisiondeliverymethodmapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisiondeliverymethodmapping';
        $this->_blockGroup = 'navision_deliverymethodmapping';
        $this->_headerText = $this->__('Delivery Carrier');

        parent::__construct();
    }
}