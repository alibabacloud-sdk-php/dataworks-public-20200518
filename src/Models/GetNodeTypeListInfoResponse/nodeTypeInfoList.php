<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoResponse\nodeTypeInfoList\nodeTypeInfo;
use AlibabaCloud\Tea\Model;

class nodeTypeInfoList extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var nodeTypeInfo[]
     */
    public $nodeTypeInfo;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'totalCount'   => 'TotalCount',
        'nodeTypeInfo' => 'NodeTypeInfo',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('nodeTypeInfo', $this->nodeTypeInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nodeTypeInfo) {
            $res['NodeTypeInfo'] = [];
            if (null !== $this->nodeTypeInfo && \is_array($this->nodeTypeInfo)) {
                $n = 0;
                foreach ($this->nodeTypeInfo as $item) {
                    $res['NodeTypeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeTypeInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NodeTypeInfo'])) {
            if (!empty($map['NodeTypeInfo'])) {
                $model->nodeTypeInfo = [];
                $n                   = 0;
                foreach ($map['NodeTypeInfo'] as $item) {
                    $model->nodeTypeInfo[$n++] = null !== $item ? nodeTypeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
