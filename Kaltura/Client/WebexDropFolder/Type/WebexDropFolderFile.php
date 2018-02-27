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
class Kaltura_Client_WebexDropFolder_Type_WebexDropFolderFile extends Kaltura_Client_DropFolder_Type_DropFolderFile
{
	public function getKalturaObjectType()
	{
		return 'KalturaWebexDropFolderFile';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->recordingId))
			$this->recordingId = (int)$xml->recordingId;
		if(count($xml->webexHostId))
			$this->webexHostId = (string)$xml->webexHostId;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->confId))
			$this->confId = (string)$xml->confId;
		if(count($xml->contentUrl))
			$this->contentUrl = (string)$xml->contentUrl;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $recordingId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $webexHostId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $confId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentUrl = null;


}

