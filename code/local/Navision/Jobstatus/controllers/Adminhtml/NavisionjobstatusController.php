<?php
class Navision_Jobstatus_Adminhtml_NavisionjobstatusController
    extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        // Let's call our initAction method which will set some basic params for each action
        $this->_initAction()
            ->renderLayout();
    }

   public function newAction()
   {
        // We just forward the new action to a blank edit form
        $this->_forward('edit');
   }

    public function editAction()
   {
        $this->_initAction();

        // Get id if available
        $id  = $this->getRequest()->getParam('id');
        $model = Mage::getModel('navision_jobstatus/navisionjobstatus');

        if ($id) {
            // Load record
            $model->load($id);

            // Check if record is loaded
            if (!$model->getId()) {
                Mage::getSingleton('adminhtml/session')->addError($this->__('This attribute no longer exists.'));
                $this->_redirect('*/*/');

                return;
            }
        }

        $this->_title($model->getId() ? $model->getName() : $this->__('New Navision'));

        $data = Mage::getSingleton('adminhtml/session')->getNavisionData(true);
        if (!empty($data)) {
            $model->setData($data);
        }

        Mage::register('navision_jobstatus', $model);

        $this->_initAction()
            ->_addBreadcrumb($id ? $this->__('Edit Navision') : $this->__('New Navision'), $id ? $this->__('Edit Navision') : $this->__('New Navision'))
            ->_addContent($this->getLayout()->createBlock('navision_jobstatus/adminhtml_navisionjobstatus_edit')->setData('action', $this->getUrl('*/*/save')))
            ->renderLayout();
    }

    public function saveAction()
    {
        if ($postData = $this->getRequest()->getPost()) {
            $model = Mage::getSingleton('navision_jobstatus/navisionjobstatus');
            $model->setData($postData);

            try {
                $model->save();

                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The log has been saved.'));
                $this->_redirect('*/*/');

                return;
            }
            catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
            catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($this->__('An error occurred while saving this log.'));
            }

            Mage::getSingleton('adminhtml/session')->setNavisionData($postData);
            $this->_redirectReferer();
        }
    }

    public function messageAction()
    {
        $data = Mage::getModel('navision_jobstatus/navisionjobstatus')->load($this->getRequest()->getParam('id'));
        echo $data->getContent();
    }

    /**
     * Initialize action
     *
     * Here, we set the breadcrumbs and the active menu
     *
     * @return Mage_Adminhtml_Controller_Action
     */
    protected function _initAction()
    {
        $this->loadLayout()
            // Make the active menu match the menu config nodes (without 'children' inbetween)
               ->_setActiveMenu('jobstatus/navision_jobstatus_navisionjobstatus') 
            ->_title($this->__('Navision Integration'))->_title($this->__('View Job Status'))
            ->_addBreadcrumb($this->__('Navision Integration'), $this->__('Navision Integration'))
            ->_addBreadcrumb($this->__('View Job Status'), $this->__('View Job Status'));

        return $this;
    }

    /**
     * Check currently called action by permissions for current user
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('jobstatus/navision_jobstatus_navisionjobstatus');
    }

public function massDeleteAction()
{
    $adListingIds = $this->getRequest()->getParam('navision_id');
 
    if(!is_array($adListingIds)) {
        Mage::getSingleton('adminhtml/session')->addError($this->__('Please select Ad Listing(s).'));
    } else {
        try {
            $model = Mage::getSingleton('navision_jobstatus/navisionjobstatus');
            foreach ($adListingIds as $id) {
                $model->load($id)->delete();
            }
            Mage::getSingleton('adminhtml/session')->addSuccess($this->__('Total of %d record(s) were deleted.', count($adListingIds)));
        } catch (Exception $e) {
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
        }
    }
    $this->_redirect('*/*/');
}
 

}