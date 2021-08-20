<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponseBody\data\apiAuthorizedList;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @var apiAuthorizedList[]
     */
    public $apiAuthorizedList;
    protected $_name = [
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'totalCount'        => 'TotalCount',
        'apiAuthorizedList' => 'ApiAuthorizedList',
    ];

    public function validate()
    {
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
        if (null !== $this->apiAuthorizedList) {
            $res['ApiAuthorizedList'] = [];
            if (null !== $this->apiAuthorizedList && \is_array($this->apiAuthorizedList)) {
                $n = 0;
                foreach ($this->apiAuthorizedList as $item) {
                    $res['ApiAuthorizedList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ApiAuthorizedList'])) {
            if (!empty($map['ApiAuthorizedList'])) {
                $model->apiAuthorizedList = [];
                $n                        = 0;
                foreach ($map['ApiAuthorizedList'] as $item) {
                    $model->apiAuthorizedList[$n++] = null !== $item ? apiAuthorizedList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
