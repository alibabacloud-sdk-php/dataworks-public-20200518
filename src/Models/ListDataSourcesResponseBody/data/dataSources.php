<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataSourcesResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataSources extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $bindingCalcEngineId;

    /**
     * @example 1
     *
     * @var int
     */
    public $connectStatus;

    /**
     * @example {"pubEndpoint":"http://service.cn.maxcompute.aliyun.com/api","accessId":"TMP.3KecGjvzy3i8MYfn2BGHgF7EHGyBFZcHm7GgngrABVRyvvKQrfF5kskR36xP361C3dqwbGo7SGYptAeGyiTwHXqLaBUvYC","securityToken":null,"endpoint":"http://service.cn.maxcompute.aliyun-inc.com/api","accessKey":"***","name":"PRE_PROJECT_A_engine","project":"PRE_PROJECT_A","vpcEndpoint":"http://service.cn.maxcompute.aliyun-inc.com/api","region":"cn-shanghai","authType":"2"}
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
     * @example false
     *
     * @var bool
     */
    public $defaultEngine;

    /**
     * @example a connection
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
     * @example Mar 17, 2021 4:09:32 PM
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example Mar 17, 2021 4:09:32 PM
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @example 193543050****
     *
     * @var string
     */
    public $operator;

    /**
     * @example 123
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 300
     *
     * @var int
     */
    public $sequence;

    /**
     * @example false
     *
     * @var bool
     */
    public $shared;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example mysql
     *
     * @var string
     */
    public $subType;

    /**
     * @example 1234567
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'bindingCalcEngineId' => 'BindingCalcEngineId',
        'connectStatus'       => 'ConnectStatus',
        'content'             => 'Content',
        'dataSourceType'      => 'DataSourceType',
        'defaultEngine'       => 'DefaultEngine',
        'description'         => 'Description',
        'envType'             => 'EnvType',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'id'                  => 'Id',
        'name'                => 'Name',
        'operator'            => 'Operator',
        'projectId'           => 'ProjectId',
        'sequence'            => 'Sequence',
        'shared'              => 'Shared',
        'status'              => 'Status',
        'subType'             => 'SubType',
        'tenantId'            => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindingCalcEngineId) {
            $res['BindingCalcEngineId'] = $this->bindingCalcEngineId;
        }
        if (null !== $this->connectStatus) {
            $res['ConnectStatus'] = $this->connectStatus;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->defaultEngine) {
            $res['DefaultEngine'] = $this->defaultEngine;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->shared) {
            $res['Shared'] = $this->shared;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindingCalcEngineId'])) {
            $model->bindingCalcEngineId = $map['BindingCalcEngineId'];
        }
        if (isset($map['ConnectStatus'])) {
            $model->connectStatus = $map['ConnectStatus'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['DefaultEngine'])) {
            $model->defaultEngine = $map['DefaultEngine'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['Shared'])) {
            $model->shared = $map['Shared'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
