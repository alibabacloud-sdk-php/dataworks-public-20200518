<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableRequest\columns;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableRequest\themes;
use AlibabaCloud\Tea\Model;

class CreateTableRequest extends Model
{
    /**
     * @example odps.test
     *
     * @var string
     */
    public $appGuid;

    /**
     * @example 101
     *
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example odps://abc
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @example 0
     *
     * @var string
     */
    public $externalTableType;

    /**
     * @example 0
     *
     * @var int
     */
    public $hasPart;

    /**
     * @example 0
     *
     * @var int
     */
    public $isView;

    /**
     * @example 10
     *
     * @var int
     */
    public $lifeCycle;

    /**
     * @example location
     *
     * @var string
     */
    public $location;

    /**
     * @example 101
     *
     * @var int
     */
    public $logicalLevelId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @example 101
     *
     * @var int
     */
    public $physicsLevelId;

    /**
     * @example 23
     *
     * @var int
     */
    public $projectId;

    /**
     * @example default
     *
     * @var string
     */
    public $schema;

    /**
     * @example tableName1
     *
     * @var string
     */
    public $tableName;

    /**
     * @var themes[]
     */
    public $themes;

    /**
     * @example 1
     *
     * @var int
     */
    public $visibility;
    protected $_name = [
        'appGuid'           => 'AppGuid',
        'categoryId'        => 'CategoryId',
        'clientToken'       => 'ClientToken',
        'columns'           => 'Columns',
        'comment'           => 'Comment',
        'endpoint'          => 'Endpoint',
        'envType'           => 'EnvType',
        'externalTableType' => 'ExternalTableType',
        'hasPart'           => 'HasPart',
        'isView'            => 'IsView',
        'lifeCycle'         => 'LifeCycle',
        'location'          => 'Location',
        'logicalLevelId'    => 'LogicalLevelId',
        'ownerId'           => 'OwnerId',
        'physicsLevelId'    => 'PhysicsLevelId',
        'projectId'         => 'ProjectId',
        'schema'            => 'Schema',
        'tableName'         => 'TableName',
        'themes'            => 'Themes',
        'visibility'        => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->externalTableType) {
            $res['ExternalTableType'] = $this->externalTableType;
        }
        if (null !== $this->hasPart) {
            $res['HasPart'] = $this->hasPart;
        }
        if (null !== $this->isView) {
            $res['IsView'] = $this->isView;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->logicalLevelId) {
            $res['LogicalLevelId'] = $this->logicalLevelId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->physicsLevelId) {
            $res['PhysicsLevelId'] = $this->physicsLevelId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->themes) {
            $res['Themes'] = [];
            if (null !== $this->themes && \is_array($this->themes)) {
                $n = 0;
                foreach ($this->themes as $item) {
                    $res['Themes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ExternalTableType'])) {
            $model->externalTableType = $map['ExternalTableType'];
        }
        if (isset($map['HasPart'])) {
            $model->hasPart = $map['HasPart'];
        }
        if (isset($map['IsView'])) {
            $model->isView = $map['IsView'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['LogicalLevelId'])) {
            $model->logicalLevelId = $map['LogicalLevelId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhysicsLevelId'])) {
            $model->physicsLevelId = $map['PhysicsLevelId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Themes'])) {
            if (!empty($map['Themes'])) {
                $model->themes = [];
                $n             = 0;
                foreach ($map['Themes'] as $item) {
                    $model->themes[$n++] = null !== $item ? themes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
