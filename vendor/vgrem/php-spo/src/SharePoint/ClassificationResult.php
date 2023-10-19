<?php

/**
 * Generated  2023-09-30T09:13:50+00:00 16.0.24106.12014
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
class ClassificationResult extends ClientValue
{
    /**
     * @var double
     */
    public $ConfidenceScore;
    /**
     * @var string
     */
    public $ContentTypeId;
    /**
     * @var array
     */
    public $Metas;
    /**
     * @var string
     */
    public $ModelId;
    /**
     * @var string
     */
    public $ModelVersion;
    /**
     * @var integer
     */
    public $RetryCount;
    /**
     * @var integer
     */
    public $RetentionLabelFlags;
    /**
     * @var string
     */
    public $RetentionLabelName;
    /**
     * @var string
     */
    public $SensitivityLabel;
    /**
     * @var string
     */
    public $Error;
}