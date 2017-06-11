<?php
class Navision_Customermapping_Block_Adminhtml_Navisioncustomermapping_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_customermapping';
        $this->_controller = 'adminhtml_navisioncustomermapping';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Customer Detail'));
        $this->_updateButton('delete', 'label', $this->__('Delete Customer Detail'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_customermapping')->getId()) {
            return $this->__('Edit Customer Detail');
        }
        else {
            return $this->__('New Customer Detail');
        }
    }
}