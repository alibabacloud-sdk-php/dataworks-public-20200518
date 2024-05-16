<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class StartMigrationRequest extends Model
{
    /**
     * @description The ID of the migration package. You can call the [CreateImportMigration](https://help.aliyun.com/document_detail/206094.html) operation to obtain the ID of the import package and call the [CreateExportMigration](https://help.aliyun.com/document_detail/349325.html) operation to obtain the ID of the export package.
     *
     * This parameter is required.
     * @example 123456
     *
     * @var int
     */
    public $migrationId;

    /**
     * @description The ID of the workspace. You can go to the Workspace Management page of the DataWorks console to view the ID.
     *
     * This parameter is required.
     * @example 123456
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'migrationId' => 'MigrationId',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrationId) {
            $res['MigrationId'] = $this->migrationId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartMigrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MigrationId'])) {
            $model->migrationId = $map['MigrationId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
