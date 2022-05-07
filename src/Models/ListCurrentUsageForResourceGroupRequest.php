<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListCurrentUsageForResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var string
     */
    public $resourceGroupIdentifier;
    protected $_name = [
        'projectEnv'              => 'ProjectEnv',
        'resourceGroupIdentifier' => 'ResourceGroupIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->resourceGroupIdentifier) {
            $res['ResourceGroupIdentifier'] = $this->resourceGroupIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCurrentUsageForResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['ResourceGroupIdentifier'])) {
            $model->resourceGroupIdentifier = $map['ResourceGroupIdentifier'];
        }

        return $model;
    }
}
