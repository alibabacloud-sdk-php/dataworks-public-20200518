<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent\projectMeta\objectMetaList;
use AlibabaCloud\Tea\Model;

class projectMeta extends Model
{
    /**
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @var objectMetaList[]
     */
    public $objectMetaList;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'maxComputeProjectName' => 'MaxComputeProjectName',
        'objectMetaList'        => 'ObjectMetaList',
        'workspaceId'           => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxComputeProjectName) {
            $res['MaxComputeProjectName'] = $this->maxComputeProjectName;
        }
        if (null !== $this->objectMetaList) {
            $res['ObjectMetaList'] = [];
            if (null !== $this->objectMetaList && \is_array($this->objectMetaList)) {
                $n = 0;
                foreach ($this->objectMetaList as $item) {
                    $res['ObjectMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxComputeProjectName'])) {
            $model->maxComputeProjectName = $map['MaxComputeProjectName'];
        }
        if (isset($map['ObjectMetaList'])) {
            if (!empty($map['ObjectMetaList'])) {
                $model->objectMetaList = [];
                $n                     = 0;
                foreach ($map['ObjectMetaList'] as $item) {
                    $model->objectMetaList[$n++] = null !== $item ? objectMetaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
