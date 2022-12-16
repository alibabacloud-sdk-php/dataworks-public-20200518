<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $blockType;

    /**
     * @example 7
     *
     * @var int
     */
    public $checkerId;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example 40
     *
     * @var string
     */
    public $criticalThreshold;

    /**
     * @example 1234
     *
     * @var int
     */
    public $entityId;

    /**
     * @example 1000
     *
     * @var string
     */
    public $expectValue;

    /**
     * @example true
     *
     * @var bool
     */
    public $fixCheck;

    /**
     * @example history max:80%,history min:50%
     *
     * @var string
     */
    public $historyCriticalThreshold;

    /**
     * @example history max:40%,history min:10%
     *
     * @var string
     */
    public $historyWarningThreshold;

    /**
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @example dt=$[yyyymmdd]
     *
     * @var string
     */
    public $matchExpression;

    /**
     * @example 21
     *
     * @var int
     */
    public $methodId;

    /**
     * @example count/table_count
     *
     * @var string
     */
    public $methodName;

    /**
     * @example 1912****
     *
     * @var string
     */
    public $onDuty;

    /**
     * @example test
     *
     * @var string
     */
    public $onDutyAccountName;

    /**
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example id
     *
     * @var string
     */
    public $property;

    /**
     * @example table_count
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @example 132323
     *
     * @var int
     */
    public $ruleCheckerRelationId;

    /**
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 0
     *
     * @var int
     */
    public $ruleType;

    /**
     * @example dual
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 7
     *
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @example abs
     *
     * @var string
     */
    public $trend;

    /**
     * @example 10
     *
     * @var string
     */
    public $warningThreshold;
    protected $_name = [
        'blockType'                => 'BlockType',
        'checkerId'                => 'CheckerId',
        'comment'                  => 'Comment',
        'criticalThreshold'        => 'CriticalThreshold',
        'entityId'                 => 'EntityId',
        'expectValue'              => 'ExpectValue',
        'fixCheck'                 => 'FixCheck',
        'historyCriticalThreshold' => 'HistoryCriticalThreshold',
        'historyWarningThreshold'  => 'HistoryWarningThreshold',
        'id'                       => 'Id',
        'matchExpression'          => 'MatchExpression',
        'methodId'                 => 'MethodId',
        'methodName'               => 'MethodName',
        'onDuty'                   => 'OnDuty',
        'onDutyAccountName'        => 'OnDutyAccountName',
        'projectName'              => 'ProjectName',
        'property'                 => 'Property',
        'propertyKey'              => 'PropertyKey',
        'ruleCheckerRelationId'    => 'RuleCheckerRelationId',
        'ruleName'                 => 'RuleName',
        'ruleType'                 => 'RuleType',
        'tableName'                => 'TableName',
        'templateId'               => 'TemplateId',
        'templateName'             => 'TemplateName',
        'trend'                    => 'Trend',
        'warningThreshold'         => 'WarningThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->checkerId) {
            $res['CheckerId'] = $this->checkerId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->criticalThreshold) {
            $res['CriticalThreshold'] = $this->criticalThreshold;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->expectValue) {
            $res['ExpectValue'] = $this->expectValue;
        }
        if (null !== $this->fixCheck) {
            $res['FixCheck'] = $this->fixCheck;
        }
        if (null !== $this->historyCriticalThreshold) {
            $res['HistoryCriticalThreshold'] = $this->historyCriticalThreshold;
        }
        if (null !== $this->historyWarningThreshold) {
            $res['HistoryWarningThreshold'] = $this->historyWarningThreshold;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->methodId) {
            $res['MethodId'] = $this->methodId;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->onDuty) {
            $res['OnDuty'] = $this->onDuty;
        }
        if (null !== $this->onDutyAccountName) {
            $res['OnDutyAccountName'] = $this->onDutyAccountName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }
        if (null !== $this->ruleCheckerRelationId) {
            $res['RuleCheckerRelationId'] = $this->ruleCheckerRelationId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }
        if (null !== $this->warningThreshold) {
            $res['WarningThreshold'] = $this->warningThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['CheckerId'])) {
            $model->checkerId = $map['CheckerId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CriticalThreshold'])) {
            $model->criticalThreshold = $map['CriticalThreshold'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ExpectValue'])) {
            $model->expectValue = $map['ExpectValue'];
        }
        if (isset($map['FixCheck'])) {
            $model->fixCheck = $map['FixCheck'];
        }
        if (isset($map['HistoryCriticalThreshold'])) {
            $model->historyCriticalThreshold = $map['HistoryCriticalThreshold'];
        }
        if (isset($map['HistoryWarningThreshold'])) {
            $model->historyWarningThreshold = $map['HistoryWarningThreshold'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['MethodId'])) {
            $model->methodId = $map['MethodId'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['OnDuty'])) {
            $model->onDuty = $map['OnDuty'];
        }
        if (isset($map['OnDutyAccountName'])) {
            $model->onDutyAccountName = $map['OnDutyAccountName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }
        if (isset($map['RuleCheckerRelationId'])) {
            $model->ruleCheckerRelationId = $map['RuleCheckerRelationId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }
        if (isset($map['WarningThreshold'])) {
            $model->warningThreshold = $map['WarningThreshold'];
        }

        return $model;
    }
}
