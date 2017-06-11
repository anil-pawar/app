<?php
class Navision_Attributesetmapping_Block_Adminhtml_Navisionattributesetmapping_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_attributesetmapping_navisionattributesetmapping_form');
        $this->setTitle($this->__('Attribute Set'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_attributesetmapping');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Attribute Set Detail'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('attributeset', 'text', array(
            'name'      => 'attributeset',
            'label'     => Mage::helper('checkout')->__('Attribute Set'),
            'title'     => Mage::helper('checkout')->__('Attribute Set'),
            'required'  => true,
        ));

           $fieldset->addField('magentoattributesetid', 'text', array(
            'name'      => 'magentoattributesetid',
            'label'     => Mage::helper('checkout')->__('Magento Attribute Set ID'),
            'title'     => Mage::helper('checkout')->__('Magento Attribute Set ID'),
            'required'  => true,
        ));
        $fieldset->addField('navisionattributesetid', 'text', array(
            'name'      => 'navisionattributesetid',
            'label'     => Mage::helper('checkout')->__('Navision Attribute Set ID'),
            'title'     => Mage::helper('checkout')->__('Navision Attribute Set ID'),
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