<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeployDISyncTaskResponseBody\data;
use AlibabaCloud\Tea\Model;

class DeployDISyncTaskResponseBody extends Model
{
    /**
     * @description Indicates whether the real-time synchronization node or data synchronization solution is deployed. Valid values:
     *
     *   success: The real-time synchronization node or data synchronization solution is deployed.
     *   fail: The real-time synchronization node or data synchronization solution fails to be deployed.
     *
     * @var data
     */
    public $data;

    /**
     * @description The result of deploying the real-time synchronization node or data synchronization solution.
     *
     * @example 0bc1411515937635973****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request. You can query logs and troubleshoot issues based on the ID.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployDISyncTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
