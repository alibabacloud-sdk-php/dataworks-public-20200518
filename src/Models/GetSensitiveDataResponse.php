<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetSensitiveDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $sensitiveData;
    protected $_name = [
        'requestId'     => 'RequestId',
        'sensitiveData' => 'SensitiveData',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('sensitiveData', $this->sensitiveData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sensitiveData) {
            $res['SensitiveData'] = $this->sensitiveData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSensitiveDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SensitiveData'])) {
            $model->sensitiveData = $map['SensitiveData'];
        }

        return $model;
    }
}
