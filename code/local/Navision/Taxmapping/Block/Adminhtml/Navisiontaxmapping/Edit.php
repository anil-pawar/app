<?php
class Navision_Taxmapping_Block_Adminhtml_Navisiontaxmapping_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_taxmapping';
        $this->_controller = 'adminhtml_navisiontaxmapping';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Tax Rate'));
        $this->_updateButton('delete', 'label', $this->__('Delete Tax Rate'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_taxmapping')->getId()) {
            return $this->__('Edit Tax Rate');
        }
        else {
            return $this->__('New Tax Rate');
        }
    }
}