<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDISyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The reason why the sync node failed to be updated. If the sync node was updated, this parameter is left empty.
     *
     * @example ResourceGroup:[S_res_group_XXX] is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the sync node was updated. Valid values:
     *
     *   success: The sync node was updated.
     *   fail: The sync node failed to be updated.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'message' => 'Message',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
