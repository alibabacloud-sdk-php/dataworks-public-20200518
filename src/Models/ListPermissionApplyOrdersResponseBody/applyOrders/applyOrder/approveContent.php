<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent\projectMeta;
use AlibabaCloud\Tea\Model;

class approveContent extends Model
{
    /**
     * @description The reason for your request. The administrator determines whether to approve the request based on the reason.
     *
     * @example I need to use this table
     *
     * @var string
     */
    public $applyReason;

    /**
     * @description The type of the permission request order. The parameter value is 1 and cannot be changed. This value indicates ACL-based authorization.
     *
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
     * @description The content of the object on which you requested permissions.
     *
     * @var projectMeta
     */
    public $projectMeta;
    protected $_name = [
        'applyReason' => 'ApplyReason',
        'orderType'   => 'OrderType',
        'projectMeta' => 'ProjectMeta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyReason) {
            $res['ApplyReason'] = $this->applyReason;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->projectMeta) {
            $res['ProjectMeta'] = null !== $this->projectMeta ? $this->projectMeta->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return approveContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyReason'])) {
            $model->applyReason = $map['ApplyReason'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ProjectMeta'])) {
            $model->projectMeta = projectMeta::fromMap($map['ProjectMeta']);
        }

        return $model;
    }
}
