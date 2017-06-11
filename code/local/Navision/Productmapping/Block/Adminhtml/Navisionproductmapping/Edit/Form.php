<?php
class Navision_Productmapping_Block_Adminhtml_Navisionproductmapping_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_productmapping_navisionproductmapping_form');
        $this->setTitle($this->__('Product Information'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_productmapping');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Product Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('productsku', 'text', array(
            'name'      => 'productsku',
            'label'     => Mage::helper('checkout')->__('Product SKU'),
            'title'     => Mage::helper('checkout')->__('Product SKU'),
            'required'  => true,
        ));

           $fieldset->addField('magentoproductid', 'text', array(
            'name'      => 'magentoproductid',
            'label'     => Mage::helper('checkout')->__('Magento Product ID'),
            'title'     => Mage::helper('checkout')->__('Magento Product ID'),
            'required'  => true,
        ));
        $fieldset->addField('navisionproductid', 'text', array(
            'name'      => 'navisionproductid',
            'label'     => Mage::helper('checkout')->__('Navision Product ID'),
            'title'     => Mage::helper('checkout')->__('Navision Product ID'),
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