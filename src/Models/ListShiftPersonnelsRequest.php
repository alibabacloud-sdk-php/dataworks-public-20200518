<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListShiftPersonnelsRequest extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $shiftPersonUID;

    /**
     * @var string
     */
    public $shiftScheduleIdentifier;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'beginTime'               => 'BeginTime',
        'endTime'                 => 'EndTime',
        'shiftPersonUID'          => 'ShiftPersonUID',
        'shiftScheduleIdentifier' => 'ShiftScheduleIdentifier',
        'userType'                => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->shiftPersonUID) {
            $res['ShiftPersonUID'] = $this->shiftPersonUID;
        }
        if (null !== $this->shiftScheduleIdentifier) {
            $res['ShiftScheduleIdentifier'] = $this->shiftScheduleIdentifier;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListShiftPersonnelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ShiftPersonUID'])) {
            $model->shiftPersonUID = $map['ShiftPersonUID'];
        }
        if (isset($map['ShiftScheduleIdentifier'])) {
            $model->shiftScheduleIdentifier = $map['ShiftScheduleIdentifier'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}