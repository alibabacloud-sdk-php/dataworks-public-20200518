<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataSourceRequest extends Model
{
    /**
     * @example {"database":"dbname","instanceName":"instancename","password":"password","rdsOwnerId":"123","username":"username"}
     *
     * @var string
     */
    public $content;

    /**
     * @example rds
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $projectId;

    /**
     * @example mysql
     *
     * @var string
     */
    public $subType;
    protected $_name = [
        'content'        => 'Content',
        'dataSourceType' => 'DataSourceType',
        'description'    => 'Description',
        'envType'        => 'EnvType',
        'name'           => 'Name',
        'projectId'      => 'ProjectId',
        'subType'        => 'SubType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}
