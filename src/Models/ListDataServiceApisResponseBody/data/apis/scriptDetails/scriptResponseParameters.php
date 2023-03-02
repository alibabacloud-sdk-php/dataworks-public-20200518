<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\scriptDetails;

use AlibabaCloud\Tea\Model;

class scriptResponseParameters extends Model
{
    /**
     * @description The name of the associated field. This parameter is supported only if the API is generated in wizard mode.
     *
     * @example column2
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The sample value of the parameter.
     *
     * @example example2
     *
     * @var string
     */
    public $exampleValue;

    /**
     * @description The data type of the parameter. Valid values:
     *
     * - 5: BOOLEAN
     * @example 0
     *
     * @var int
     */
    public $parameterDataType;

    /**
     * @description The description of the parameter.
     *
     * @example description2
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The name of the parameter.
     *
     * @example param2
     *
     * @var string
     */
    public $parameterName;
    protected $_name = [
        'columnName'           => 'ColumnName',
        'exampleValue'         => 'ExampleValue',
        'parameterDataType'    => 'ParameterDataType',
        'parameterDescription' => 'ParameterDescription',
        'parameterName'        => 'ParameterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->exampleValue) {
            $res['ExampleValue'] = $this->exampleValue;
        }
        if (null !== $this->parameterDataType) {
            $res['ParameterDataType'] = $this->parameterDataType;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptResponseParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ExampleValue'])) {
            $model->exampleValue = $map['ExampleValue'];
        }
        if (isset($map['ParameterDataType'])) {
            $model->parameterDataType = $map['ParameterDataType'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        return $model;
    }
}
