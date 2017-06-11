<?php
class Navision_Categorymapping_Block_Adminhtml_Navisioncategorymapping_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_categorymapping_navisioncategorymapping_form');
        $this->setTitle($this->__('Category Detail'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_categorymapping');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Category Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('categoryname', 'text', array(
            'name'      => 'categoryname',
            'label'     => Mage::helper('checkout')->__('Category Name'),
            'title'     => Mage::helper('checkout')->__('Category Name'),
            'required'  => true,
        ));

           $fieldset->addField('magentocategoryid', 'text', array(
            'name'      => 'magentocategoryid',
            'label'     => Mage::helper('checkout')->__('Magento Category ID'),
            'title'     => Mage::helper('checkout')->__('Magento Category ID'),
            'required'  => true,
        ));
        $fieldset->addField('navisioncategoryid', 'text', array(
            'name'      => 'navisioncategoryid',
            'label'     => Mage::helper('checkout')->__('Navision Category ID'),
            'title'     => Mage::helper('checkout')->__('Navision Category ID'),
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
	$form->getElement('needsync')->setIsChecked(!empty($formData['needsync']));

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}