<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2018  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
class Kaltura_Client_EmailNotification_Type_EmailNotificationCategoryRecipientProvider extends Kaltura_Client_EmailNotification_Type_EmailNotificationRecipientProvider
{
	public function getKalturaObjectType()
	{
		return 'KalturaEmailNotificationCategoryRecipientProvider';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->categoryId) && !empty($xml->categoryId))
			$this->categoryId = Kaltura_Client_ParseUtils::unmarshalObject($xml->categoryId, "KalturaStringValue");
		if(count($xml->categoryIds) && !empty($xml->categoryIds))
			$this->categoryIds = Kaltura_Client_ParseUtils::unmarshalObject($xml->categoryIds, "KalturaStringValue");
		if(count($xml->categoryUserFilter) && !empty($xml->categoryUserFilter))
			$this->categoryUserFilter = Kaltura_Client_ParseUtils::unmarshalObject($xml->categoryUserFilter, "KalturaCategoryUserProviderFilter");
	}
	/**
	 * The ID of the category whose subscribers should receive the email notification.
	 *
	 * @var Kaltura_Client_Type_StringValue
	 */
	public $categoryId;

	/**
	 * The IDs of the categories whose subscribers should receive the email notification.
	 *
	 * @var Kaltura_Client_Type_StringValue
	 */
	public $categoryIds;

	/**
	 * 
	 *
	 * @var Kaltura_Client_EmailNotification_Type_CategoryUserProviderFilter
	 */
	public $categoryUserFilter;


}

