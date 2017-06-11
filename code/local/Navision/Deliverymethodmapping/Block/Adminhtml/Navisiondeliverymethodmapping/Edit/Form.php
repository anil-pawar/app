<?php
class Navision_Deliverymethodmapping_Block_Adminhtml_Navisiondeliverymethodmapping_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_deliverymethodmapping_navisiondeliverymethodmapping_form');
        $this->setTitle($this->__('Delivery Method Information'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_deliverymethodmapping');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Delivery Method Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('deliverymethod', 'text', array(
            'name'      => 'deliverymethod',
            'label'     => Mage::helper('checkout')->__('Delivery Method'),
            'title'     => Mage::helper('checkout')->__('Delivery Method'),
            'required'  => true,
        ));

           $fieldset->addField('deliverycode', 'text', array(
            'name'      => 'deliverycode',
            'label'     => Mage::helper('checkout')->__('Delivery Code'),
            'title'     => Mage::helper('checkout')->__('Delivery Code'),
            'required'  => true,
        ));

        $fieldset->addField('navisioncarrierid', 'text', array(
            'name'      => 'navisioncarrierid',
            'label'     => Mage::helper('checkout')->__('Navision Carrier ID'),
            'title'     => Mage::helper('checkout')->__('Navision Carrier ID'),
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