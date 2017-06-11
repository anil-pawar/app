<?php
class Navision_Categorymapping_Block_Adminhtml_Navisioncategorymapping_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_categorymapping';
        $this->_controller = 'adminhtml_navisioncategorymapping';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Category'));
        $this->_updateButton('delete', 'label', $this->__('Delete Category'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_categorymapping')->getId()) {
            return $this->__('Edit Category');
        }
        else {
            return $this->__('New Category');
        }
    }
}