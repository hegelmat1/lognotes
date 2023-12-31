<?php

/**
 * Generated  2023-09-30T09:13:50+00:00 16.0.24106.12014
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * the parameters to be used to render list data as a JSON string.
 */
class RenderListDataParameters extends ClientValue
{
    /**
     * This 
     * parameter indicates if we return required fields.
     * @var bool
     */
    public $AddRequiredFields;
    /**
     * This 
     * parameter indicates whether multi value filtering is allowed for taxonomy 
     * fields.
     * @var bool
     */
    public $AllowMultipleValueFilterForTaxonomyFields;
    /**
     * @var bool
     */
    public $AudienceTarget;
    /**
     * Specifies 
     * if the DateTime field is returned in UTC or local time.
     * @var bool
     */
    public $DatesInUtc;
    /**
     * Specifies 
     * whether to expand the grouping or not.
     * @var bool
     */
    public $ExpandGroups;
    /**
     * Specifies 
     * whether to only return first group (regardless of view schema) or not.
     * @var bool
     */
    public $FirstGroupOnly;
    /**
     * Specifies 
     * the server-relative 
     * URL of a list folder from 
     * which to return items.
     * @var string
     */
    public $FolderServerRelativeUrl;
    /**
     * This 
     * parameter indicates which fields to try and ReWrite to CDN Urls. The format of 
     * this parameter SHOULD be a comma seperated list of field names.
     * @var string
     */
    public $ImageFieldsToTryRewriteToCdnUrls;
    /**
     * @var bool
     */
    public $MergeDefaultView;
    /**
     * @var bool
     */
    public $OriginalDate;
    /**
     * Specified 
     * the override XML to be combined with the View CAML.
     * @var string
     */
    public $OverrideViewXml;
    /**
     * Specifies 
     * the paging information.
     * @var string
     */
    public $Paging;
    /**
     * Specifies 
     * the type of output to return.
     * @var integer
     */
    public $RenderOptions;
    /**
     * Specifies 
     * whether to replace the grouping or not to deal with GroupBy throttling.
     * @var bool
     */
    public $ReplaceGroup;
    /**
     * Specified 
     * the override XML to be combined with the View CAML.
     * @var string
     */
    public $ViewXml;
    /**
     * @var bool
     */
    public $AddAllFields;
    /**
     * @var bool
     */
    public $RenderURLFieldInJSON;
    /**
     * @var bool
     */
    public $AddAllViewFields;
    /**
     * @var bool
     */
    public $AddRegionalSettings;
    /**
     * @var bool
     */
    public $ExpandUserField;
    /**
     * @var bool
     */
    public $FilterOutChannelFoldersInDefaultDocLib;
    /**
     * @var bool
     */
    public $ShowStubFile;
    /**
     * @var bool
     */
    public $ModernListBoot;
    /**
     * @var bool
     */
    public $RequireFolderColoringFields;
}