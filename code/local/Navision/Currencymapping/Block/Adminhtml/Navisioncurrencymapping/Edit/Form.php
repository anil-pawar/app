<?php
class Navision_Currencymapping_Block_Adminhtml_Navisioncurrencymapping_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_currencymapping_navisioncurrencymapping_form');
        $this->setTitle($this->__('Currency'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_currencymapping');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Currency Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('currencycode', 'text', array(
            'name'      => 'currencycode',
            'label'     => Mage::helper('checkout')->__('Currency Code'),
            'title'     => Mage::helper('checkout')->__('Currency Code'),
            'required'  => true,
        ));

           
        $fieldset->addField('navisionpricelistid', 'text', array(
            'name'      => 'navisionpricelistid',
            'label'     => Mage::helper('checkout')->__('Navision Pricelist ID'),
            'title'     => Mage::helper('checkout')->__('Navision Pricelist ID'),
            'required'  => true,
        ));

$fieldset->addField('createdby', 'text', array(
            'name'      => 'createdby',
            'label'     => Mage::helper('checkout')->__('Created By'),
            'title'     => Mage::helper('checkout')->__('Created By'),
            'required'  => true,
        ));

     


        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}