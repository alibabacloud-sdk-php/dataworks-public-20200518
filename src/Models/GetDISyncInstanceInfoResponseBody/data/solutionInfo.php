<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody\data\solutionInfo\stepDetail;
use AlibabaCloud\Tea\Model;

class solutionInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var stepDetail[]
     */
    public $stepDetail;
    protected $_name = [
        'status'      => 'Status',
        'id'          => 'Id',
        'creatorName' => 'CreatorName',
        'stepDetail'  => 'StepDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->stepDetail) {
            $res['StepDetail'] = [];
            if (null !== $this->stepDetail && \is_array($this->stepDetail)) {
                $n = 0;
                foreach ($this->stepDetail as $item) {
                    $res['StepDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return solutionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['StepDetail'])) {
            if (!empty($map['StepDetail'])) {
                $model->stepDetail = [];
                $n                 = 0;
                foreach ($map['StepDetail'] as $item) {
                    $model->stepDetail[$n++] = null !== $item ? stepDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
