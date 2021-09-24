<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetDagRequest extends Model
{
    /**
     * @var int
     */
    public $dagId;

    /**
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'dagId'      => 'DagId',
        'projectEnv' => 'ProjectEnv',
    ];

    public function validate()
    {
        Model::validateRequired('dagId', $this->dagId, true);
        Model::validateRequired('projectEnv', $this->projectEnv, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
