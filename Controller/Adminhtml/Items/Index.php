<?php
/**
 * @category   Chirag
 * @package    Chirag_Events
 * @author     chirag@czargroup.net
 * @copyright  This file was generated by using Module Creator provided by <developer@czargroup.net>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Chirag\Events\Controller\Adminhtml\Items;

class Index extends \Chirag\Events\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Chirag_Events::test');
        $resultPage->getConfig()->getTitle()->prepend(__('Create Event Admin Page'));
        $resultPage->addBreadcrumb(__('Manage'), __('Manage'));
        $resultPage->addBreadcrumb(__('Date'), __('Date'));
        return $resultPage;
    }
}