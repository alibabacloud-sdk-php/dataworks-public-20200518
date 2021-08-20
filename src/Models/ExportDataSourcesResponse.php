<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ExportDataSourcesResponse\data;
use AlibabaCloud\Tea\Model;

class ExportDataSourcesResponse extends Model
{
    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var data
     */
    public $data;
    protected $_name = [
        'httpStatusCode' => 'HttpStatusCode',
        'success'        => 'Success',
        'requestId'      => 'RequestId',
        'data'           => 'Data',
    ];

    public function validate()
    {
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportDataSourcesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        return $model;
    }
}
