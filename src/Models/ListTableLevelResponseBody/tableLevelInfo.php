<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponseBody\tableLevelInfo\levelList;
use AlibabaCloud\Tea\Model;

class tableLevelInfo extends Model
{
    /**
     * @description The list of table levels.
     *
     * @var levelList[]
     */
    public $levelList;

    /**
     * @description The total number of table levels returned.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'levelList'  => 'LevelList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->levelList) {
            $res['LevelList'] = [];
            if (null !== $this->levelList && \is_array($this->levelList)) {
                $n = 0;
                foreach ($this->levelList as $item) {
                    $res['LevelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableLevelInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LevelList'])) {
            if (!empty($map['LevelList'])) {
                $model->levelList = [];
                $n                = 0;
                foreach ($map['LevelList'] as $item) {
                    $model->levelList[$n++] = null !== $item ? levelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
