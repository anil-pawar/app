<?php
class Navision_Attributeoptionmapping_Block_Adminhtml_Navisionattributeoptionmapping_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_attributeoptionmapping';
        $this->_controller = 'adminhtml_navisionattributeoptionmapping';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Attribute Option'));
        $this->_updateButton('delete', 'label', $this->__('Delete Attribute Option'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_attributeoptionmapping')->getId()) {
            return $this->__('Edit Attribute Option');
        }
        else {
            return $this->__('New Attribute Option');
        }
    }
}