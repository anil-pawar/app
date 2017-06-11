<?php
class Navision_Taxmapping_Block_Adminhtml_Navisiontaxmapping_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_taxmapping_navisiontaxmapping_form');
        $this->setTitle($this->__('Tax Rate Information'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_taxmapping');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Tax Rate Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('magentotaxidentifer', 'text', array(
            'name'      => 'magentotaxidentifier',
            'label'     => Mage::helper('checkout')->__('Tax Identifier'),
            'title'     => Mage::helper('checkout')->__('Tax Identifier'),
            'required'  => true,
        ));

           $fieldset->addField('magentotaxid', 'text', array(
            'name'      => 'magentotaxid',
            'label'     => Mage::helper('checkout')->__('Magento Tax ID'),
            'title'     => Mage::helper('checkout')->__('Magento Tax ID'),
            'required'  => true,
        ));

        $fieldset->addField('navisiontaxid', 'text', array(
            'name'      => 'navisiontaxid',
            'label'     => Mage::helper('checkout')->__('Navision Tax ID'),
            'title'     => Mage::helper('checkout')->__('Navision Tax ID'),
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