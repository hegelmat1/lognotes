<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingChatHistoryDefaultMode File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* MeetingChatHistoryDefaultMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingChatHistoryDefaultMode extends Enum
{
    /**
    * The Enum MeetingChatHistoryDefaultMode
    */
    const NONE = "none";
    const ALL = "all";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
