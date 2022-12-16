<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceCountTrendRequest extends Model
{
    /**
     * @example 2020-04-02T00:00:00+0800
     *
     * @var string
     */
    public $beginDate;

    /**
     * @example 2020-09-10T00:00:00+0800
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'beginDate' => 'BeginDate',
        'endDate'   => 'EndDate',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceCountTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
