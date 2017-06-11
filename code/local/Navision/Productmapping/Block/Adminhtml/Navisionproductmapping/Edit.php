<?php
class Navision_Productmapping_Block_Adminhtml_Navisionproductmapping_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_productmapping';
        $this->_controller = 'adminhtml_navisionproductmapping';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Product'));
        $this->_updateButton('delete', 'label', $this->__('Delete Product'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_productmapping')->getId()) {
            return $this->__('Edit Product');
        }
        else {
            return $this->__('New Product');
        }
    }
}