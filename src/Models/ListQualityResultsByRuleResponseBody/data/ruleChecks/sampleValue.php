<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByRuleResponseBody\data\ruleChecks;

use AlibabaCloud\Tea\Model;

class sampleValue extends Model
{
    /**
     * @var string
     */
    public $discreteProperty;

    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'discreteProperty' => 'DiscreteProperty',
        'bizDate'          => 'BizDate',
        'value'            => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discreteProperty) {
            $res['DiscreteProperty'] = $this->discreteProperty;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sampleValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscreteProperty'])) {
            $model->discreteProperty = $map['DiscreteProperty'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}