<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponse\applyOrderDetail\approveContent\projectMeta\objectMetaList;

use AlibabaCloud\Tea\Model;

class columnMetaList extends Model
{
    /**
     * @var string
     */
    public $columnComment;

    /**
     * @var string
     */
    public $columnName;
    protected $_name = [
        'columnComment' => 'ColumnComment',
        'columnName'    => 'ColumnName',
    ];

    public function validate()
    {
        Model::validateRequired('columnComment', $this->columnComment, true);
        Model::validateRequired('columnName', $this->columnName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnComment) {
            $res['ColumnComment'] = $this->columnComment;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnMetaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnComment'])) {
            $model->columnComment = $map['ColumnComment'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        return $model;
    }
}
