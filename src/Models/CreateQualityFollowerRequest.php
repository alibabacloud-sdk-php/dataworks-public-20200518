<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityFollowerRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $follower;

    /**
     * @var int
     */
    public $alarmMode;

    /**
     * @var int
     */
    public $entityId;
    protected $_name = [
        'projectName' => 'ProjectName',
        'follower'    => 'Follower',
        'alarmMode'   => 'AlarmMode',
        'entityId'    => 'EntityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->follower) {
            $res['Follower'] = $this->follower;
        }
        if (null !== $this->alarmMode) {
            $res['AlarmMode'] = $this->alarmMode;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQualityFollowerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Follower'])) {
            $model->follower = $map['Follower'];
        }
        if (isset($map['AlarmMode'])) {
            $model->alarmMode = $map['AlarmMode'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        return $model;
    }
}
