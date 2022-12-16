<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\scriptDetails\scriptConnection;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\scriptDetails\scriptRequestParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\scriptDetails\scriptResponseParameters;
use AlibabaCloud\Tea\Model;

class scriptDetails extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isPagedResponse;

    /**
     * @example select a from t
     *
     * @var string
     */
    public $script;

    /**
     * @var scriptConnection
     */
    public $scriptConnection;

    /**
     * @var scriptRequestParameters[]
     */
    public $scriptRequestParameters;

    /**
     * @var scriptResponseParameters[]
     */
    public $scriptResponseParameters;
    protected $_name = [
        'isPagedResponse'          => 'IsPagedResponse',
        'script'                   => 'Script',
        'scriptConnection'         => 'ScriptConnection',
        'scriptRequestParameters'  => 'ScriptRequestParameters',
        'scriptResponseParameters' => 'ScriptResponseParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPagedResponse) {
            $res['IsPagedResponse'] = $this->isPagedResponse;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->scriptConnection) {
            $res['ScriptConnection'] = null !== $this->scriptConnection ? $this->scriptConnection->toMap() : null;
        }
        if (null !== $this->scriptRequestParameters) {
            $res['ScriptRequestParameters'] = [];
            if (null !== $this->scriptRequestParameters && \is_array($this->scriptRequestParameters)) {
                $n = 0;
                foreach ($this->scriptRequestParameters as $item) {
                    $res['ScriptRequestParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scriptResponseParameters) {
            $res['ScriptResponseParameters'] = [];
            if (null !== $this->scriptResponseParameters && \is_array($this->scriptResponseParameters)) {
                $n = 0;
                foreach ($this->scriptResponseParameters as $item) {
                    $res['ScriptResponseParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsPagedResponse'])) {
            $model->isPagedResponse = $map['IsPagedResponse'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['ScriptConnection'])) {
            $model->scriptConnection = scriptConnection::fromMap($map['ScriptConnection']);
        }
        if (isset($map['ScriptRequestParameters'])) {
            if (!empty($map['ScriptRequestParameters'])) {
                $model->scriptRequestParameters = [];
                $n                              = 0;
                foreach ($map['ScriptRequestParameters'] as $item) {
                    $model->scriptRequestParameters[$n++] = null !== $item ? scriptRequestParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScriptResponseParameters'])) {
            if (!empty($map['ScriptResponseParameters'])) {
                $model->scriptResponseParameters = [];
                $n                               = 0;
                foreach ($map['ScriptResponseParameters'] as $item) {
                    $model->scriptResponseParameters[$n++] = null !== $item ? scriptResponseParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
