<?php

class Navision_Webservices_Block_Adminhtml_Navisionwebservices extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_navisionwebservices';
        $this->_blockGroup = 'navision_webservices';
        $this->_headerText = $this->__('Navision Webservices');

        parent::__construct();
    }
}