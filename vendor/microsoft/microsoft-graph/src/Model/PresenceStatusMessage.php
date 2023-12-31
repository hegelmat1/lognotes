<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PresenceStatusMessage File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* PresenceStatusMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PresenceStatusMessage extends Entity
{

    /**
    * Gets the expiryDateTime
    *
    * @return DateTimeTimeZone|null The expiryDateTime
    */
    public function getExpiryDateTime()
    {
        if (array_key_exists("expiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expiryDateTime"], "\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["expiryDateTime"])) {
                return $this->_propDict["expiryDateTime"];
            } else {
                $this->_propDict["expiryDateTime"] = new DateTimeTimeZone($this->_propDict["expiryDateTime"]);
                return $this->_propDict["expiryDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expiryDateTime
    *
    * @param DateTimeTimeZone $val The value to assign to the expiryDateTime
    *
    * @return PresenceStatusMessage The PresenceStatusMessage
    */
    public function setExpiryDateTime($val)
    {
        $this->_propDict["expiryDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the message
    *
    * @return ItemBody|null The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            if (is_a($this->_propDict["message"], "\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["message"])) {
                return $this->_propDict["message"];
            } else {
                $this->_propDict["message"] = new ItemBody($this->_propDict["message"]);
                return $this->_propDict["message"];
            }
        }
        return null;
    }

    /**
    * Sets the message
    *
    * @param ItemBody $val The value to assign to the message
    *
    * @return PresenceStatusMessage The PresenceStatusMessage
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
         return $this;
    }

    /**
    * Gets the publishedDateTime
    *
    * @return \DateTime|null The publishedDateTime
    */
    public function getPublishedDateTime()
    {
        if (array_key_exists("publishedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["publishedDateTime"], "\DateTime") || is_null($this->_propDict["publishedDateTime"])) {
                return $this->_propDict["publishedDateTime"];
            } else {
                $this->_propDict["publishedDateTime"] = new \DateTime($this->_propDict["publishedDateTime"]);
                return $this->_propDict["publishedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the publishedDateTime
    *
    * @param \DateTime $val The value to assign to the publishedDateTime
    *
    * @return PresenceStatusMessage The PresenceStatusMessage
    */
    public function setPublishedDateTime($val)
    {
        $this->_propDict["publishedDateTime"] = $val;
         return $this;
    }
}
