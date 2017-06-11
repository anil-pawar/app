<?php
class Navision_Ordermapping_Block_Adminhtml_Navisionordermapping_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_ordermapping_navisionordermapping_form');
        $this->setTitle($this->__('Order Information'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_ordermapping');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Sales Order Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('ordernumber', 'text', array(
            'name'      => 'ordernumber',
            'label'     => Mage::helper('checkout')->__('Order Number'),
            'title'     => Mage::helper('checkout')->__('Order Number'),
            'required'  => true,
        ));

           $fieldset->addField('navisionordernumber', 'text', array(
            'name'      => 'navisionordernumber',
            'label'     => Mage::helper('checkout')->__('Navision Order Number'),
            'title'     => Mage::helper('checkout')->__('Navision Order Number'),
            'required'  => true,
        ));

        

	$fieldset->addField('navisionorderlineid', 'text', array(
            'name'      => 'navisionorderlineid',
            'label'     => Mage::helper('checkout')->__('Navision Order Line ID'),
            'title'     => Mage::helper('checkout')->__('Navision Order Line ID'),
            'required'  => true,
        ));
	$fieldset->addField('navisioncustomerid', 'text', array(
            'name'      => 'navisioncustomerid',
            'label'     => Mage::helper('checkout')->__('Navision Customer ID'),
            'title'     => Mage::helper('checkout')->__('Navision Customer ID'),
            'required'  => true,
        ));




     

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}