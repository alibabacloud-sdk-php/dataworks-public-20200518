<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableOutputResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $taskInstanceId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $waitTime;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'endTime'        => 'EndTime',
        'taskInstanceId' => 'TaskInstanceId',
        'startTime'      => 'StartTime',
        'projectId'      => 'ProjectId',
        'waitTime'       => 'WaitTime',
        'tableGuid'      => 'TableGuid',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->waitTime) {
            $res['WaitTime'] = $this->waitTime;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['WaitTime'])) {
            $model->waitTime = $map['WaitTime'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}