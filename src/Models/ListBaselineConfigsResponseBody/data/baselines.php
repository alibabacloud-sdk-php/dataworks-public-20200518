<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineConfigsResponseBody\data;

use AlibabaCloud\Tea\Model;

class baselines extends Model
{
    /**
     * @var string
     */
    public $hourSlaDetail;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $slaMinu;

    /**
     * @var int
     */
    public $slaHour;

    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @var string
     */
    public $hourExpDetail;

    /**
     * @var bool
     */
    public $useFlag;

    /**
     * @var int
     */
    public $expHour;

    /**
     * @var string
     */
    public $baselineType;

    /**
     * @var int
     */
    public $expMinu;
    protected $_name = [
        'hourSlaDetail' => 'HourSlaDetail',
        'isDefault'     => 'IsDefault',
        'owner'         => 'Owner',
        'projectId'     => 'ProjectId',
        'priority'      => 'Priority',
        'slaMinu'       => 'SlaMinu',
        'slaHour'       => 'SlaHour',
        'baselineId'    => 'BaselineId',
        'baselineName'  => 'BaselineName',
        'hourExpDetail' => 'HourExpDetail',
        'useFlag'       => 'UseFlag',
        'expHour'       => 'ExpHour',
        'baselineType'  => 'BaselineType',
        'expMinu'       => 'ExpMinu',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hourSlaDetail) {
            $res['HourSlaDetail'] = $this->hourSlaDetail;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->slaMinu) {
            $res['SlaMinu'] = $this->slaMinu;
        }
        if (null !== $this->slaHour) {
            $res['SlaHour'] = $this->slaHour;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->hourExpDetail) {
            $res['HourExpDetail'] = $this->hourExpDetail;
        }
        if (null !== $this->useFlag) {
            $res['UseFlag'] = $this->useFlag;
        }
        if (null !== $this->expHour) {
            $res['ExpHour'] = $this->expHour;
        }
        if (null !== $this->baselineType) {
            $res['BaselineType'] = $this->baselineType;
        }
        if (null !== $this->expMinu) {
            $res['ExpMinu'] = $this->expMinu;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HourSlaDetail'])) {
            $model->hourSlaDetail = $map['HourSlaDetail'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['SlaMinu'])) {
            $model->slaMinu = $map['SlaMinu'];
        }
        if (isset($map['SlaHour'])) {
            $model->slaHour = $map['SlaHour'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['HourExpDetail'])) {
            $model->hourExpDetail = $map['HourExpDetail'];
        }
        if (isset($map['UseFlag'])) {
            $model->useFlag = $map['UseFlag'];
        }
        if (isset($map['ExpHour'])) {
            $model->expHour = $map['ExpHour'];
        }
        if (isset($map['BaselineType'])) {
            $model->baselineType = $map['BaselineType'];
        }
        if (isset($map['ExpMinu'])) {
            $model->expMinu = $map['ExpMinu'];
        }

        return $model;
    }
}
