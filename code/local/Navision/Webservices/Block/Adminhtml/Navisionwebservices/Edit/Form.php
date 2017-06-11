<?php
class Navision_Webservices_Block_Adminhtml_Navisionwebservices_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_webservices_navisionwebservices_form');
        $this->setTitle($this->__('Navision Webservices'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_webservices');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Navision Webservices'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('webservice', 'text', array(
            'name'      => 'webservice',
            'label'     => Mage::helper('checkout')->__('Webservice'),
            'title'     => Mage::helper('checkout')->__('Webservice'),
            'required'  => true,
        ));

           $fieldset->addField('url', 'text', array(
            'name'      => 'url',
            'label'     => Mage::helper('checkout')->__('URL'),
            'title'     => Mage::helper('checkout')->__('URL'),
            'required'  => true,
        ));
        

      

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}