<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponseBody\tableLevelInfo;

use AlibabaCloud\Tea\Model;

class levelList extends Model
{
    /**
     * @var int
     */
    public $levelType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $levelId;
    protected $_name = [
        'levelType'   => 'LevelType',
        'description' => 'Description',
        'name'        => 'Name',
        'projectId'   => 'ProjectId',
        'levelId'     => 'LevelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->levelId) {
            $res['LevelId'] = $this->levelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return levelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['LevelId'])) {
            $model->levelId = $map['LevelId'];
        }

        return $model;
    }
}