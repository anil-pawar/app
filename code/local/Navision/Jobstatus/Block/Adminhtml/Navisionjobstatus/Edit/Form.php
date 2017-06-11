<?php
class Navision_Jobstatus_Block_Adminhtml_Navisionjobstatus_Edit_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('navision_jobstatus_navisionjobstatus_form');
        $this->setTitle($this->__('Job Status'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('navision_jobstatus');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Attribute Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('objecttype', 'text', array(
            'name'      => 'objecttype',
            'label'     => Mage::helper('checkout')->__('Object Type'),
            'title'     => Mage::helper('checkout')->__('Object Type'),
            'required'  => true,
        ));

           $fieldset->addField('datetime', 'text', array(
            'name'      => 'datetime',
            'label'     => Mage::helper('checkout')->__('Job Run Time'),
            'title'     => Mage::helper('checkout')->__('Job Run Time'),
            'required'  => true,
        ));
        $fieldset->addField('status', 'text', array(
            'name'      => 'status',
            'label'     => Mage::helper('checkout')->__('Job Status'),
            'title'     => Mage::helper('checkout')->__('Job Status'),
            'required'  => true,
        ));


      

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}