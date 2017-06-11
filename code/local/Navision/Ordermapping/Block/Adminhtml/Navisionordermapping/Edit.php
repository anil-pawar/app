<?php
class Navision_Ordermapping_Block_Adminhtml_Navisionordermapping_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_ordermapping';
        $this->_controller = 'adminhtml_navisionordermapping';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Order'));
        $this->_updateButton('delete', 'label', $this->__('Delete Order'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_ordermapping')->getId()) {
            return $this->__('Edit Order');
        }
        else {
            return $this->__('New Order');
        }
    }
}