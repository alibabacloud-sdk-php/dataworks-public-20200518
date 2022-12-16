<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestNetworkConnectionResponseBody\taskList;
use AlibabaCloud\Tea\Model;

class TestNetworkConnectionResponseBody extends Model
{
    /**
     * @example 0000-ABCD-EFG
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var taskList
     */
    public $taskList;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'taskList'  => 'TaskList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskList) {
            $res['TaskList'] = null !== $this->taskList ? $this->taskList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestNetworkConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskList'])) {
            $model->taskList = taskList::fromMap($map['TaskList']);
        }

        return $model;
    }
}
