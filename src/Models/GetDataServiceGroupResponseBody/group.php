<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @example 100abc
     *
     * @var string
     */
    public $apiGatewayGroupId;

    /**
     * @example 2020-09-24T18:37:51+0800
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 10001
     *
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example ds_123abc
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @example 2020-09-24T18:37:51+0800
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example 10002
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 10003
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'apiGatewayGroupId' => 'ApiGatewayGroupId',
        'createdTime'       => 'CreatedTime',
        'creatorId'         => 'CreatorId',
        'description'       => 'Description',
        'groupId'           => 'GroupId',
        'groupName'         => 'GroupName',
        'modifiedTime'      => 'ModifiedTime',
        'projectId'         => 'ProjectId',
        'tenantId'          => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiGatewayGroupId) {
            $res['ApiGatewayGroupId'] = $this->apiGatewayGroupId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return group
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiGatewayGroupId'])) {
            $model->apiGatewayGroupId = $map['ApiGatewayGroupId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
