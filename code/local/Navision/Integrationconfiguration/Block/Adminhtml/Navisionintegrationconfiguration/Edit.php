<?php
class Navision_Integrationconfiguration_Block_Adminhtml_Navisionintegrationconfiguration_Edit
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'navision_integrationconfiguration';
        $this->_controller = 'adminhtml_navisionintegrationconfiguration';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Configuration'));
        $this->_updateButton('delete', 'label', $this->__('Delete Configuration'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('navision_integrationconfiguration')->getId()) {
            return $this->__('Edit Configuration');
        }
        else {
            return $this->__('New Configuration');
        }
    }
}