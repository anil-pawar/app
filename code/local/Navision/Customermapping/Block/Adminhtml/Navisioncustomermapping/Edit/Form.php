<?php
class Navision_Customermapping_Block_Adminhtml_Navisioncustomermapping_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_customermapping_navisioncustomermapping_form');
        $this->setTitle($this->__('Customer Detail'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_customermapping');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Customer Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('customeremail', 'text', array(
            'name'      => 'customeremail',
            'label'     => Mage::helper('checkout')->__('Customer Email'),
            'title'     => Mage::helper('checkout')->__('Customer Email'),
            'required'  => true,
        ));

           $fieldset->addField('magentocustomerid', 'text', array(
            'name'      => 'magentocustomerid',
            'label'     => Mage::helper('checkout')->__('Magento Customer ID'),
            'title'     => Mage::helper('checkout')->__('Magento Customer ID'),
            'required'  => true,
        ));
        $fieldset->addField('navisioncustomerid', 'text', array(
            'name'      => 'navisioncustomerid',
            'label'     => Mage::helper('checkout')->__('Navision Customer ID'),
            'title'     => Mage::helper('checkout')->__('Navision Customer ID'),
            'required'  => true,
        ));

$fieldset->addField('createdby', 'text', array(
            'name'      => 'createdby',
            'label'     => Mage::helper('checkout')->__('Created By'),
            'title'     => Mage::helper('checkout')->__('Created By'),
            'required'  => true,
        ));

      $fieldset->addField('needsync', 'checkbox', array(
                

            'name'      => 'needsync',
            'label'     => Mage::helper('checkout')->__('Need Sync'),
		'onclick'   => 'this.value = this.checked ? 1 : 0;',
            'title'     => Mage::helper('checkout')->__('Need Sync'),
            'required'  => true,
        ));


        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}