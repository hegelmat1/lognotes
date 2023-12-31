<?php

/**
 * Generated  2022-10-08T10:32:22+03:00 16.0.22921.12007
 */
namespace Office365\SharePoint\Sharing;

use Office365\Runtime\ClientValue;
use Office365\SharePoint\UserIdInfo;
/**
 * Microsoft.SharePoint.Client.Sharing.Principal 
 * class is a representation of an identity (user/group).
 */
class Principal extends ClientValue
{
    /**
     * Email 
     * address of the Principal.
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $expiration;
    /**
     * Id of the 
     * Principal in SharePoint's UserInfo List.
     * @var integer
     */
    public $id;
    /**
     * Boolean 
     * value representing if the Principal is Active.
     * @var bool
     */
    public $isActive;
    /**
     * Boolean 
     * value representing if the Principal is an external user.
     * @var bool
     */
    public $isExternal;
    /**
     * The Job 
     * Title of the Principal.
     * @var string
     */
    public $jobTitle;
    /**
     * LoginName of 
     * the Principal.
     * @var string
     */
    public $loginName;
    /**
     * Name of 
     * the Principal.
     * @var string
     */
    public $name;
    /**
     * PrincipalType 
     * of the Principal.
     * @var integer
     */
    public $principalType;
    /**
     * Identity 
     * information of the Principal. 
     * @var UserIdInfo
     */
    public $userId;
    /**
     * @var string
     */
    public $userPrincipalName;
    /**
     * @var string
     */
    public $directoryObjectId;
}