<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponse\applyOrders\applyOrder;
use AlibabaCloud\Tea\Model;

class applyOrders extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var applyOrder[]
     */
    public $applyOrder;
    protected $_name = [
        'pageSize'   => 'PageSize',
        'pageNumber' => 'PageNumber',
        'totalCount' => 'TotalCount',
        'applyOrder' => 'ApplyOrder',
    ];

    public function validate()
    {
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('applyOrder', $this->applyOrder, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->applyOrder) {
            $res['ApplyOrder'] = [];
            if (null !== $this->applyOrder && \is_array($this->applyOrder)) {
                $n = 0;
                foreach ($this->applyOrder as $item) {
                    $res['ApplyOrder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyOrders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ApplyOrder'])) {
            if (!empty($map['ApplyOrder'])) {
                $model->applyOrder = [];
                $n                 = 0;
                foreach ($map['ApplyOrder'] as $item) {
                    $model->applyOrder[$n++] = null !== $item ? applyOrder::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
