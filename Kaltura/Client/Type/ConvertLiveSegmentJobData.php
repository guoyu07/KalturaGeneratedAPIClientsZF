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
// Copyright (C) 2006-2015  Kaltura Inc.
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
class Kaltura_Client_Type_ConvertLiveSegmentJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConvertLiveSegmentJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->mediaServerIndex))
			$this->mediaServerIndex = (int)$xml->mediaServerIndex;
		if(count($xml->fileIndex))
			$this->fileIndex = (int)$xml->fileIndex;
		if(count($xml->srcFilePath))
			$this->srcFilePath = (string)$xml->srcFilePath;
		if(count($xml->destFilePath))
			$this->destFilePath = (string)$xml->destFilePath;
		if(count($xml->endTime))
			$this->endTime = (float)$xml->endTime;
		if(count($xml->amfArray))
		{
			if(empty($xml->amfArray))
				$this->amfArray = array();
			else
				$this->amfArray = Kaltura_Client_ParseUtils::unmarshalArray($xml->amfArray, "KalturaKeyValue");
		}
		if(count($xml->duration))
			$this->duration = (float)$xml->duration;
	}
	/**
	 * Live stream entry id
	 * 	 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;

	/**
	 * Primary or secondary media server
	 * 	 
	 *
	 * @var Kaltura_Client_Enum_MediaServerIndex
	 */
	public $mediaServerIndex = null;

	/**
	 * The index of the file within the entry
	 * 	 
	 *
	 * @var int
	 */
	public $fileIndex = null;

	/**
	 * The recorded live media
	 * 	 
	 *
	 * @var string
	 */
	public $srcFilePath = null;

	/**
	 * The output file
	 * 	 
	 *
	 * @var string
	 */
	public $destFilePath = null;

	/**
	 * Duration of the live entry including all recorded segments including the current
	 * 	 
	 *
	 * @var float
	 */
	public $endTime = null;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $amfArray;

	/**
	 * Duration of the live segment.
	 * 	 filled by the ConvertLiveSegment job
	 * 	 
	 *
	 * @var float
	 */
	public $duration = null;


}

