<?php
/**
 * @category   Chirag
 * @package    Chirag_Events
 * @author     chirag@czargroup.net
 * @copyright  This file was generated by using Module Creator provided by <developer@czargroup.net>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Chirag\Events\Controller\Adminhtml\Items;

class NewAction extends \Chirag\Events\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
