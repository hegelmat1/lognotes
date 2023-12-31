<?php

/**
 * Generated  2022-10-08T10:32:22+03:00 16.0.22921.12007
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Represents 
 * a navigation node in the navigation hierarchy. A navigation hierarchy is a tree 
 * structure of navigation nodes. 
 */
class MenuNode extends ClientValue
{
    /**
     * @var array
     */
    public $AudienceIds;
    /**
     * Contains 
     * key value pairs, where both the key and value MUST be of type CSOM 
     * String.The keys 
     * SHOULD be prefixed with "Nav_", "_Nav_" or 
     * "_Sys_Facet_".
     * @var array
     */
    public $CustomProperties;
    /**
     * Specifies 
     * the URL 
     * of the navigation node relative to the URL of the parent navigation node.
     * @var string
     */
    public $FriendlyUrlSegment;
    /**
     * A client 
     * MUST use this property set to TRUE to indicate that this node MUST be deleted 
     * by the server. When set to TRUE the server MUST delete the node including all 
     * the child nodes when present. When set to FALSE the server SHOULD NOT delete 
     * this node. 
     * @var bool
     */
    public $IsDeleted;
    /**
     * Specifies 
     * whether the node will be hidden in the navigation menu. During editing, all 
     * nodes temporarily become visible so that they can be edited. 
     * @var bool
     */
    public $IsHidden;
    /**
     * Specifies 
     * the identifier for the navigation node in the menu tree. If the navigation node 
     * does not exist on the protocol server, this value MUST be an empty string.It MUST 
     * NOT be NULL.
     * @var string
     */
    public $Key;
    /**
     * Read/WriteSpecifies 
     * an array of child nodes.
     * @var array
     */
    public $Nodes;
    /**
     * Specifies 
     * the type of the navigation node.
     * @var integer
     */
    public $NodeType;
    /**
     * If the NodeType 
     * (section 3.2.5.244.1.1.7) 
     * property is set to "SimpleLink", this property represents the URL 
     * of the navigation node. The URL can be relative or absolute. If the value is a 
     * relative URL, it can begin with URL tokens "~site" and 
     * "~sitecollection". These tokens indicate that the URL is either 
     * relative to the site (2) or to the site 
     * collection respectively. If the NodeType (section 
     * 3.2.5.244.1.1.7) property is not set to "SimpleLink", the value MUST 
     * be an empty string.
     * @var string
     */
    public $SimpleUrl;
    /**
     * Specifies 
     * the title of the navigation node. The value is in the preferred language of the 
     * user, if available, or is in the default language of the site (2) 
     * as a fallback.
     * @var string
     */
    public $Title;
    /**
     * @var integer
     */
    public $CurrentLCID;
    /**
     * @var bool
     */
    public $OpenInNewWindow;
    /**
     * @var bool
     */
    public $IsTitleForExistingLanguage;
}