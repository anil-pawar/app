<?php
class Navision_Paymentmethodmapping_Block_Adminhtml_Navisionpaymentmethodmapping_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_paymentmethodmapping_navisionpaymentmethodmapping_form');
        $this->setTitle($this->__('Payment Method Information'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_paymentmethodmapping');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Payment Method Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('paymentmethod', 'text', array(
            'name'      => 'paymentmethod',
            'label'     => Mage::helper('checkout')->__('Payment Method'),
            'title'     => Mage::helper('checkout')->__('Payment Method'),
            'required'  => true,
        ));

         

        $fieldset->addField('navisionjournalid', 'text', array(
            'name'      => 'navisionjournalid',
            'label'     => Mage::helper('checkout')->__('Navision Journal ID'),
            'title'     => Mage::helper('checkout')->__('Navision Journal ID'),
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