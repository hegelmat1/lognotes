<?php

/**
 * Generated 2019-10-06T21:48:34+00:00
*/
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
use Office365\Runtime\ServerTypeInfo;


/**
 * Specifies a Collaborative Application Markup Language (CAML) query on a list or joined lists.
 */
class CamlQuery extends ClientValue
{

    public static function createAllItemsQuery()
    {
        $qry = new CamlQuery();
        $qry->ViewXml = "<View Scope=\"RecursiveAll\">\r\n    <Query>\r\n    </Query>\r\n</View>";
        return $qry;
    }
    public static function createAllFoldersQuery()
    {
        $qry = new CamlQuery();
        $qry->ViewXml = "<View Scope=\"RecursiveAll\">\r\n    <Query>\r\n        <Where>\r\n            <Eq>\r\n                <FieldRef Name=\"FSObjType\" />\r\n                <Value Type=\"Integer\">1</Value>\r\n            </Eq>\r\n        </Where>\r\n    </Query>\r\n</View>";
        return $qry;
    }

    public static function createAllFilesQuery()
    {
        $qry = new CamlQuery();
        $qry->ViewXml = "<View Scope='Recursive'><Query><Where><Eq><FieldRef Name='FSObjType' /><Value Type='Lookup'>0</Value></Eq></Where></Query></View>";
        return $qry;
    }


    /**
     * Gets or sets a value that indicates whether the query returns dates in Coordinated Universal Time (UTC) format.
     * @var \DateTime
     */
    public $DatesInUtc;
    /**
     * Gets or sets a value that specifies the server relative URL of a list folder from which results will be returned.
     * @var string
     */
    public $FolderServerRelativeUrl;
    /**
     * Gets or sets a value that specifies the information required to get the next page of data for the list view.
     * @var ListItemCollectionPosition
     */
    public $ListItemCollectionPosition;
    /**
     * Gets or sets value that specifies the XML schema that defines the list view.
     * @var string
     */
    public $ViewXml;
    public $AllowIncrementalResults;
    public $FolderServerRelativePath;


    public function getServerTypeInfo()
    {
        return new ServerTypeInfo("SP", "CamlQuery");
    }
}
