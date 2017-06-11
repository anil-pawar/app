<?php
class Navision_Jobstatus_Block_Adminhtml_Navisionjobstatus_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_jobstatus';
        $this->_controller = 'adminhtml_navisionjobstatus';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Status'));
        $this->_updateButton('delete', 'label', $this->__('Delete Status'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_jobstatus')->getId()) {
            return $this->__('Edit Status');
        }
        else {
            return $this->__('New Status');
        }
    }
}