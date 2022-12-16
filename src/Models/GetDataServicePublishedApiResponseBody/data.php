<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\registrationDetails;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\scriptDetails;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10000
     *
     * @var int
     */
    public $apiId;

    /**
     * @example 0
     *
     * @var int
     */
    public $apiMode;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @example /test/1
     *
     * @var string
     */
    public $apiPath;

    /**
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 1234567
     *
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example ab12**
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example 2345678
     *
     * @var string
     */
    public $operatorId;

    /**
     * @example 10001
     *
     * @var int
     */
    public $projectId;

    /**
     * @var int[]
     */
    public $protocols;

    /**
     * @var registrationDetails
     */
    public $registrationDetails;

    /**
     * @example 0
     *
     * @var int
     */
    public $requestMethod;

    /**
     * @example 0
     *
     * @var int
     */
    public $responseContentType;

    /**
     * @var scriptDetails
     */
    public $scriptDetails;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 10001
     *
     * @var int
     */
    public $tenantId;

    /**
     * @example 10000
     *
     * @var int
     */
    public $timeout;

    /**
     * @example 0
     *
     * @var int
     */
    public $visibleRange;

    /**
     * @var wizardDetails
     */
    public $wizardDetails;
    protected $_name = [
        'apiId'               => 'ApiId',
        'apiMode'             => 'ApiMode',
        'apiName'             => 'ApiName',
        'apiPath'             => 'ApiPath',
        'createdTime'         => 'CreatedTime',
        'creatorId'           => 'CreatorId',
        'description'         => 'Description',
        'groupId'             => 'GroupId',
        'modifiedTime'        => 'ModifiedTime',
        'operatorId'          => 'OperatorId',
        'projectId'           => 'ProjectId',
        'protocols'           => 'Protocols',
        'registrationDetails' => 'RegistrationDetails',
        'requestMethod'       => 'RequestMethod',
        'responseContentType' => 'ResponseContentType',
        'scriptDetails'       => 'ScriptDetails',
        'status'              => 'Status',
        'tenantId'            => 'TenantId',
        'timeout'             => 'Timeout',
        'visibleRange'        => 'VisibleRange',
        'wizardDetails'       => 'WizardDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiMode) {
            $res['ApiMode'] = $this->apiMode;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->registrationDetails) {
            $res['RegistrationDetails'] = null !== $this->registrationDetails ? $this->registrationDetails->toMap() : null;
        }
        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }
        if (null !== $this->responseContentType) {
            $res['ResponseContentType'] = $this->responseContentType;
        }
        if (null !== $this->scriptDetails) {
            $res['ScriptDetails'] = null !== $this->scriptDetails ? $this->scriptDetails->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->visibleRange) {
            $res['VisibleRange'] = $this->visibleRange;
        }
        if (null !== $this->wizardDetails) {
            $res['WizardDetails'] = null !== $this->wizardDetails ? $this->wizardDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiMode'])) {
            $model->apiMode = $map['ApiMode'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }
        if (isset($map['RegistrationDetails'])) {
            $model->registrationDetails = registrationDetails::fromMap($map['RegistrationDetails']);
        }
        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }
        if (isset($map['ResponseContentType'])) {
            $model->responseContentType = $map['ResponseContentType'];
        }
        if (isset($map['ScriptDetails'])) {
            $model->scriptDetails = scriptDetails::fromMap($map['ScriptDetails']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['VisibleRange'])) {
            $model->visibleRange = $map['VisibleRange'];
        }
        if (isset($map['WizardDetails'])) {
            $model->wizardDetails = wizardDetails::fromMap($map['WizardDetails']);
        }

        return $model;
    }
}
