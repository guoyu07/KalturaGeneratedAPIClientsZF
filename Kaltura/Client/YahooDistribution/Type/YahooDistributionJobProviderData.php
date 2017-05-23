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
// Copyright (C) 2006-2017  Kaltura Inc.
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
class Kaltura_Client_YahooDistribution_Type_YahooDistributionJobProviderData extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaYahooDistributionJobProviderData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->smallThumbPath))
			$this->smallThumbPath = (string)$xml->smallThumbPath;
		if(count($xml->largeThumbPath))
			$this->largeThumbPath = (string)$xml->largeThumbPath;
		if(count($xml->videoAssetFilePath))
			$this->videoAssetFilePath = (string)$xml->videoAssetFilePath;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $smallThumbPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $largeThumbPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $videoAssetFilePath = null;


}
