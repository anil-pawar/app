<?php
class Navision_Deliverymethodmapping_Block_Adminhtml_Navisiondeliverymethodmapping_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_deliverymethodmapping';
        $this->_controller = 'adminhtml_navisiondeliverymethodmapping';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Delivery Method'));
        $this->_updateButton('delete', 'label', $this->__('Delete Delivery Method'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_deliverymethodmapping')->getId()) {
            return $this->__('Edit Delivery Method');
        }
        else {
            return $this->__('New Delivery Method');
        }
    }
}