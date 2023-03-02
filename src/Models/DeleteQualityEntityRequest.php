<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteQualityEntityRequest extends Model
{
    /**
     * @description The ID of the partition filter expression.
     *
     * @example 1234
     *
     * @var int
     */
    public $entityId;

    /**
     * @description The type of the compute engine instance or data source. Valid values: EMR, Hologres, AnalyticDB for PostgreSQL, CDH, MaxCompute, Kafka and DataHub.
     *
     * @example ODPS
     *
     * @var string
     */
    public $envType;

    /**
     * @description The name of the compute engine instance or data source.
     *
     * @example autotest
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'entityId'    => 'EntityId',
        'envType'     => 'EnvType',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQualityEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
