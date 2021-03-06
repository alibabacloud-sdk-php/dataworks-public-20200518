<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponse\applyOrderDetail\approveContent\projectMeta;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponse\applyOrderDetail\approveContent\projectMeta\objectMetaList\columnMetaList;
use AlibabaCloud\Tea\Model;

class objectMetaList extends Model
{
    /**
     * @var string
     */
    public $objectName;

    /**
     * @var columnMetaList[]
     */
    public $columnMetaList;
    protected $_name = [
        'objectName'     => 'ObjectName',
        'columnMetaList' => 'ColumnMetaList',
    ];

    public function validate()
    {
        Model::validateRequired('objectName', $this->objectName, true);
        Model::validateRequired('columnMetaList', $this->columnMetaList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }
        if (null !== $this->columnMetaList) {
            $res['ColumnMetaList'] = [];
            if (null !== $this->columnMetaList && \is_array($this->columnMetaList)) {
                $n = 0;
                foreach ($this->columnMetaList as $item) {
                    $res['ColumnMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return objectMetaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }
        if (isset($map['ColumnMetaList'])) {
            if (!empty($map['ColumnMetaList'])) {
                $model->columnMetaList = [];
                $n                     = 0;
                foreach ($map['ColumnMetaList'] as $item) {
                    $model->columnMetaList[$n++] = null !== $item ? columnMetaList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
