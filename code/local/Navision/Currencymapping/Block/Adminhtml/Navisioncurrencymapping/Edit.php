<?php
class Navision_Currencymapping_Block_Adminhtml_Navisioncurrencymapping_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_currencymapping';
        $this->_controller = 'adminhtml_navisioncurrencymapping';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Currency'));
        $this->_updateButton('delete', 'label', $this->__('Delete Currency'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_currencymapping')->getId()) {
            return $this->__('Edit Currency');
        }
        else {
            return $this->__('New Currency');
        }
    }
}