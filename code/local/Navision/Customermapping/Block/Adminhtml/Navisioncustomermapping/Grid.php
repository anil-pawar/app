<?php
 
class Navision_Customermapping_Block_Adminhtml_Navisioncustomermapping_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();

        // Set some defaults for our grid
        $this->setDefaultSort('id');
        $this->setId('navision_customermapping_navisioncustomermapping_grid');
        $this->setDefaultDir('desc');
        $this->setSaveParametersInSession(true);
    }

    protected function _getCollectionClass()
    {
        // This is the model we are using for the grid
        return 'navision_customermapping/navisioncustomermapping_collection';
    }

    protected function _prepareCollection()
    {
        // Get and set our collection for the grid
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);
        

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        // Add the columns that should appear in the grid
        $this->addColumn('id',
            array(
                'header'=> $this->__('ID'),
                'align' =>'right',
                'width' => '50px',
                'index' => 'id'
            )
        );

        $this->addColumn('customeremail',
            array(
                'header'=> $this->__('Customer Email'),
                'index' => 'customeremail'
            )
        );

        $this->addColumn('magentocustomerid',
            array(
                'header'=> $this->__('Magento Customer ID'),
                'index' => 'magentocustomerid'
            )
        );

        $this->addColumn('navisioncustomerid',
            array(
                'header'=> $this->__('Navision Customer ID'),
                'index' => 'navisioncustomerid'
            )
        );

       // $this->addColumn('createdby',
       //     array(
       //         'header'=> $this->__('Created By'),
       //         'index' => 'createdby'
       //     )
       // );
         $this->addColumn('createdat',
            array(
                'header'=> $this->__('Created At'),
                'index' => 'createdat'
            )
        );

        $this->addColumn('needsync',
            array(
                'header'=> $this->__('Need Sync'),
                'index' => 'needsync'
            )
        );

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        // This is where our row data will link to
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

protected function _prepareMassaction()
    {
        $this->setMassactionIdField('navision_id');
        $this->getMassactionBlock()->setFormFieldName('navision_id');
 
        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => $this->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => $this->__('Are you sure?')
        ));
 
        $statuses = $this->getOptionArray();
 
        array_unshift($statuses, array('label'=>'', 'value'=>''));
        $this->getMassactionBlock()->addItem('status', array(
             'label'=> $this->__('Change status'),
             'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
             'additional' => array(
                    'visibility' => array(
                         'name' => 'status',
                         'type' => 'select',
                         'class' => 'required-entry',
                         'label' => $this->__('Status'),
                         'values' => $statuses
        )
        )
        ));
        return $this;
    }


}