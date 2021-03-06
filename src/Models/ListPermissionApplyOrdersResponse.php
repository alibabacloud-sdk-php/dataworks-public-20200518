<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponse\applyOrders;
use AlibabaCloud\Tea\Model;

class ListPermissionApplyOrdersResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var applyOrders
     */
    public $applyOrders;
    protected $_name = [
        'requestId'   => 'RequestId',
        'applyOrders' => 'ApplyOrders',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('applyOrders', $this->applyOrders, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->applyOrders) {
            $res['ApplyOrders'] = null !== $this->applyOrders ? $this->applyOrders->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPermissionApplyOrdersResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ApplyOrders'])) {
            $model->applyOrders = applyOrders::fromMap($map['ApplyOrders']);
        }

        return $model;
    }
}
