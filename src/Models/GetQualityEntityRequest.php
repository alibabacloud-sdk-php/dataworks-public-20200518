<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetQualityEntityRequest extends Model
{
    /**
     * @example odps
     *
     * @var string
     */
    public $envType;

    /**
     * @example dt=$[yyyymmdd]
     *
     * @var string
     */
    public $matchExpression;

    /**
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example dual
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'envType'         => 'EnvType',
        'matchExpression' => 'MatchExpression',
        'projectName'     => 'ProjectName',
        'tableName'       => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQualityEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
