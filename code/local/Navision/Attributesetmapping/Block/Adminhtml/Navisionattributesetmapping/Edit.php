<?php
class Navision_Attributesetmapping_Block_Adminhtml_Navisionattributesetmapping_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_attributesetmapping';
        $this->_controller = 'adminhtml_navisionattributesetmapping';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Attribute Set'));
        $this->_updateButton('delete', 'label', $this->__('Delete Attribute Set'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_attributesetmapping')->getId()) {
            return $this->__('Edit Attribute Set');
        }
        else {
            return $this->__('New Attribute Set');
        }
    }
}