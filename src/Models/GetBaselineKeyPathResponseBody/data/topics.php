<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @var int
     */
    public $topicName;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $topicId;

    /**
     * @var int
     */
    public $addTime;
    protected $_name = [
        'topicName'  => 'TopicName',
        'instanceId' => 'InstanceId',
        'topicId'    => 'TopicId',
        'addTime'    => 'AddTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }

        return $model;
    }
}
