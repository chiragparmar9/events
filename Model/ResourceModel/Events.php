<?php
/**
 * @category   Chirag
 * @package    Chirag_Events
 * @author     chirag@czargroup.net
 * @copyright  This file was generated by using Module Creator provided by <developer@czargroup.net>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Chirag\Events\Model\ResourceModel;

class Events extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('chirag_events_table', 'entity_id');   //here "chirag_events_table" is table name and "entity_id" is the primary key of custom table
    }
}