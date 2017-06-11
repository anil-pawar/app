<?php
class Navision_Attributeoptionmapping_Block_Adminhtml_Navisionattributeoptionmapping_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_attributeoptionmapping_navisionattributeoptionmapping_form');
        $this->setTitle($this->__('Attribute Option'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_attributeoptionmapping');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Attribute Option'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('attributeoption', 'text', array(
            'name'      => 'attributeoption',
            'label'     => Mage::helper('checkout')->__('Attribute Option'),
            'title'     => Mage::helper('checkout')->__('Attribute Option'),
            'required'  => true,
        ));

           $fieldset->addField('magentoattributeoptionid', 'text', array(
            'name'      => 'magentoattributeoptionid',
            'label'     => Mage::helper('checkout')->__('Magento Attribute Option ID'),
            'title'     => Mage::helper('checkout')->__('Magento Attribute Option ID'),
            'required'  => true,
        ));
        $fieldset->addField('navisionattributeoptionid', 'text', array(
            'name'      => 'navisionattributeoptionid',
            'label'     => Mage::helper('checkout')->__('Navision Attribute Option ID'),
            'title'     => Mage::helper('checkout')->__('Navision Attribute Option ID'),
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