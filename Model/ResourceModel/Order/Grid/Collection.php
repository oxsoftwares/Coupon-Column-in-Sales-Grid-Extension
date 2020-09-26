<?php
namespace OX\OrderGridField\Model\ResourceModel\Order\Grid;

use Magento\Sales\Model\ResourceModel\Order\Grid\Collection as OriginalCollection;

class Collection extends OriginalCollection
{
    protected function _renderFiltersBefore()
    {
        $joinTable = $this->getTable('sales_order');
        $this->getSelect()->joinLeft($joinTable, 'main_table.increment_id = sales_order.increment_id', ['coupon_code']);
        parent::_renderFiltersBefore();
    }
}
