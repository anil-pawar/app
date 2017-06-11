<?php
class Navision_Paymentmethodmapping_Block_Adminhtml_Navisionpaymentmethodmapping_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_paymentmethodmapping';
        $this->_controller = 'adminhtml_navisionpaymentmethodmapping';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Payment Method'));
        $this->_updateButton('delete', 'label', $this->__('Delete Payment Method'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_paymentmethodmapping')->getId()) {
            return $this->__('Edit Payment Method');
        }
        else {
            return $this->__('New Payment Method');
        }
    }
}