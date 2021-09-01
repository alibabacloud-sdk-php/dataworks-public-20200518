<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankResponse\instanceErrorRank;
use AlibabaCloud\Tea\Model;

class GetInstanceErrorRankResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceErrorRank
     */
    public $instanceErrorRank;
    protected $_name = [
        'requestId'         => 'RequestId',
        'instanceErrorRank' => 'InstanceErrorRank',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceErrorRank', $this->instanceErrorRank, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceErrorRank) {
            $res['InstanceErrorRank'] = null !== $this->instanceErrorRank ? $this->instanceErrorRank->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceErrorRankResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceErrorRank'])) {
            $model->instanceErrorRank = instanceErrorRank::fromMap($map['InstanceErrorRank']);
        }

        return $model;
    }
}
