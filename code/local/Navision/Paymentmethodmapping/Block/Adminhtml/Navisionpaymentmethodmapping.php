<?php

class Navision_Paymentmethodmapping_Block_Adminhtml_Navisionpaymentmethodmapping extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisionpaymentmethodmapping';
        $this->_blockGroup = 'navision_paymentmethodmapping';
        $this->_headerText = $this->__('Payment Method');

        parent::__construct();
    }
}