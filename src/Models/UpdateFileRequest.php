<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateFileRequest extends Model
{
    /**
     * @var string
     */
    public $advancedSettings;

    /**
     * @var bool
     */
    public $autoParsing;

    /**
     * @var int
     */
    public $autoRerunIntervalMillis;

    /**
     * @var int
     */
    public $autoRerunTimes;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $cronExpress;

    /**
     * @var string
     */
    public $cycleType;

    /**
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @var string
     */
    public $dependentType;

    /**
     * @var int
     */
    public $endEffectDate;

    /**
     * @var string
     */
    public $fileDescription;

    /**
     * @var string
     */
    public $fileFolderPath;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $inputList;

    /**
     * @var string
     */
    public $outputList;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $paraValue;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var string
     */
    public $rerunMode;

    /**
     * @var string
     */
    public $resourceGroupIdentifier;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var int
     */
    public $startEffectDate;

    /**
     * @var bool
     */
    public $startImmediately;

    /**
     * @var bool
     */
    public $stop;
    protected $_name = [
        'advancedSettings'        => 'AdvancedSettings',
        'autoParsing'             => 'AutoParsing',
        'autoRerunIntervalMillis' => 'AutoRerunIntervalMillis',
        'autoRerunTimes'          => 'AutoRerunTimes',
        'connectionName'          => 'ConnectionName',
        'content'                 => 'Content',
        'cronExpress'             => 'CronExpress',
        'cycleType'               => 'CycleType',
        'dependentNodeIdList'     => 'DependentNodeIdList',
        'dependentType'           => 'DependentType',
        'endEffectDate'           => 'EndEffectDate',
        'fileDescription'         => 'FileDescription',
        'fileFolderPath'          => 'FileFolderPath',
        'fileId'                  => 'FileId',
        'fileName'                => 'FileName',
        'inputList'               => 'InputList',
        'outputList'              => 'OutputList',
        'owner'                   => 'Owner',
        'paraValue'               => 'ParaValue',
        'projectId'               => 'ProjectId',
        'projectIdentifier'       => 'ProjectIdentifier',
        'rerunMode'               => 'RerunMode',
        'resourceGroupIdentifier' => 'ResourceGroupIdentifier',
        'schedulerType'           => 'SchedulerType',
        'startEffectDate'         => 'StartEffectDate',
        'startImmediately'        => 'StartImmediately',
        'stop'                    => 'Stop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedSettings) {
            $res['AdvancedSettings'] = $this->advancedSettings;
        }
        if (null !== $this->autoParsing) {
            $res['AutoParsing'] = $this->autoParsing;
        }
        if (null !== $this->autoRerunIntervalMillis) {
            $res['AutoRerunIntervalMillis'] = $this->autoRerunIntervalMillis;
        }
        if (null !== $this->autoRerunTimes) {
            $res['AutoRerunTimes'] = $this->autoRerunTimes;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
        }
        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }
        if (null !== $this->dependentNodeIdList) {
            $res['DependentNodeIdList'] = $this->dependentNodeIdList;
        }
        if (null !== $this->dependentType) {
            $res['DependentType'] = $this->dependentType;
        }
        if (null !== $this->endEffectDate) {
            $res['EndEffectDate'] = $this->endEffectDate;
        }
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }
        if (null !== $this->fileFolderPath) {
            $res['FileFolderPath'] = $this->fileFolderPath;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->inputList) {
            $res['InputList'] = $this->inputList;
        }
        if (null !== $this->outputList) {
            $res['OutputList'] = $this->outputList;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->paraValue) {
            $res['ParaValue'] = $this->paraValue;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }
        if (null !== $this->resourceGroupIdentifier) {
            $res['ResourceGroupIdentifier'] = $this->resourceGroupIdentifier;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->startEffectDate) {
            $res['StartEffectDate'] = $this->startEffectDate;
        }
        if (null !== $this->startImmediately) {
            $res['StartImmediately'] = $this->startImmediately;
        }
        if (null !== $this->stop) {
            $res['Stop'] = $this->stop;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedSettings'])) {
            $model->advancedSettings = $map['AdvancedSettings'];
        }
        if (isset($map['AutoParsing'])) {
            $model->autoParsing = $map['AutoParsing'];
        }
        if (isset($map['AutoRerunIntervalMillis'])) {
            $model->autoRerunIntervalMillis = $map['AutoRerunIntervalMillis'];
        }
        if (isset($map['AutoRerunTimes'])) {
            $model->autoRerunTimes = $map['AutoRerunTimes'];
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }
        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }
        if (isset($map['DependentNodeIdList'])) {
            $model->dependentNodeIdList = $map['DependentNodeIdList'];
        }
        if (isset($map['DependentType'])) {
            $model->dependentType = $map['DependentType'];
        }
        if (isset($map['EndEffectDate'])) {
            $model->endEffectDate = $map['EndEffectDate'];
        }
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }
        if (isset($map['FileFolderPath'])) {
            $model->fileFolderPath = $map['FileFolderPath'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['InputList'])) {
            $model->inputList = $map['InputList'];
        }
        if (isset($map['OutputList'])) {
            $model->outputList = $map['OutputList'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ParaValue'])) {
            $model->paraValue = $map['ParaValue'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }
        if (isset($map['ResourceGroupIdentifier'])) {
            $model->resourceGroupIdentifier = $map['ResourceGroupIdentifier'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['StartEffectDate'])) {
            $model->startEffectDate = $map['StartEffectDate'];
        }
        if (isset($map['StartImmediately'])) {
            $model->startImmediately = $map['StartImmediately'];
        }
        if (isset($map['Stop'])) {
            $model->stop = $map['Stop'];
        }

        return $model;
    }
}
