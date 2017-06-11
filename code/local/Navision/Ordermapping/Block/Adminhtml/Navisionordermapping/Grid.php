<?php
 
class Navision_Ordermapping_Block_Adminhtml_Navisionordermapping_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();

        // Set some defaults for our grid
        $this->setDefaultSort('id');
        $this->setId('navision_ordermapping_navisionordermapping_grid');
        $this->setDefaultDir('desc');
        $this->setSaveParametersInSession(true);
    }

    protected function _getCollectionClass()
    {
        // This is the model we are using for the grid
        return 'navision_ordermapping/navisionordermapping_collection';
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

        $this->addColumn('ordernumber',
            array(
                'header'=> $this->__('Magento Order Number'),
                'index' => 'ordernumber'
            )
        );
        
        $this->addColumn('magentoorderlineid',
            array(
                'header'=> $this->__('Magento Order Line Number'),
                'index' => 'magentoorderlineid'
            )
        );

        $this->addColumn('navisionordernumber',
            array(
                'header'=> $this->__('Navision Order Number'),
                'index' => 'navisionordernumber'
            )
        );

        $this->addColumn('navisionorderlineid',
            array(
                'header'=> $this->__('Navision Order Line Number'),
                'index' => 'navisionorderlineid'
            )
        );
        
        $this->addColumn('navisionshipmentid',
            array(
                'header'=> $this->__('Navision Shipment Number'),
                'index' => 'navisionshipmentid'
            )
        );
        
          $this->addColumn('navisioninvoiceid',
            array(
                'header'=> $this->__('Navision Invoice Number'),
                'index' => 'navisioninvoiceid'
            )
        );

$this->addColumn('navisioncustomerid',
            array(
                'header'=> $this->__('Navision Customer ID'),
                'index' => 'navisioncustomerid'
            )
        );
         $this->addColumn('createdat',
            array(
                'header'=> $this->__('Created At'),
                'index' => 'createdat'
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