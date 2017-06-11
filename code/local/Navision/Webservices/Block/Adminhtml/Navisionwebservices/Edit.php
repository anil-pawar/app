<?php
class Navision_Webservices_Block_Adminhtml_Navisionwebservices_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_webservices';
        $this->_controller = 'adminhtml_navisionwebservices';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Webservice Detail'));
        $this->_updateButton('delete', 'label', $this->__('Delete Webservice Detail'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_webservices')->getId()) {
            return $this->__('Edit Webservice Detail');
        }
        else {
            return $this->__('New Webservice Detail');
        }
    }
}