<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class projectList extends Model
{
    /**
     * @var string
     */
    public $projectDescription;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @var int
     */
    public $projectStatus;

    /**
     * @var string
     */
    public $projectStatusCode;
    protected $_name = [
        'projectDescription' => 'ProjectDescription',
        'projectId'          => 'ProjectId',
        'projectIdentifier'  => 'ProjectIdentifier',
        'projectName'        => 'ProjectName',
        'projectOwnerBaseId' => 'ProjectOwnerBaseId',
        'projectStatus'      => 'ProjectStatus',
        'projectStatusCode'  => 'ProjectStatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
        }
        if (null !== $this->projectStatus) {
            $res['ProjectStatus'] = $this->projectStatus;
        }
        if (null !== $this->projectStatusCode) {
            $res['ProjectStatusCode'] = $this->projectStatusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }
        if (isset($map['ProjectStatus'])) {
            $model->projectStatus = $map['ProjectStatus'];
        }
        if (isset($map['ProjectStatusCode'])) {
            $model->projectStatusCode = $map['ProjectStatusCode'];
        }

        return $model;
    }
}
