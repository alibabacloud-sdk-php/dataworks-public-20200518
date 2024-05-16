<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableOutputRequest extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     * This parameter is required.
     * @example 2022-02-15
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The Globally Unique Identifier (GUID) of the MaxCompute metatable.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The start date of the time range to query. The start date must be within the previous 30 days.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the node.
     *
     * This parameter is required.
     * @example 2020-02-02
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The end date of the time range to query. The end date must be within the previous 30 days.
     *
     * This parameter is required.
     * @example odps.sample_project.sample_table
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The error message returned.
     *
     * @example 1048576
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'endDate'    => 'EndDate',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'startDate'  => 'StartDate',
        'tableGuid'  => 'TableGuid',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
     * @return GetMetaTableOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
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
