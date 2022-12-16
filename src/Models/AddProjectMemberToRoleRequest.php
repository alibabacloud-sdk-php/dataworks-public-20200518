<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class AddProjectMemberToRoleRequest extends Model
{
    /**
     * @example 1AFAE64E-D1BE-432B-A9*****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 27
     *
     * @var int
     */
    public $projectId;

    /**
     * @example role_project_guest
     *
     * @var string
     */
    public $roleCode;

    /**
     * @example 1234
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'projectId'   => 'ProjectId',
        'roleCode'    => 'RoleCode',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddProjectMemberToRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
