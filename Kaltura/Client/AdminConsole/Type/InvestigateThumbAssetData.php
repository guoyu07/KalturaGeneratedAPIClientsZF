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
class Kaltura_Client_AdminConsole_Type_InvestigateThumbAssetData extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaInvestigateThumbAssetData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->thumbAsset) && !empty($xml->thumbAsset))
			$this->thumbAsset = Kaltura_Client_ParseUtils::unmarshalObject($xml->thumbAsset, "KalturaThumbAsset");
		if(count($xml->fileSyncs) && !empty($xml->fileSyncs))
			$this->fileSyncs = Kaltura_Client_ParseUtils::unmarshalObject($xml->fileSyncs, "KalturaFileSyncListResponse");
		if(count($xml->thumbParams) && !empty($xml->thumbParams))
			$this->thumbParams = Kaltura_Client_ParseUtils::unmarshalObject($xml->thumbParams, "KalturaThumbParams");
		if(count($xml->thumbParamsOutputs) && !empty($xml->thumbParamsOutputs))
			$this->thumbParamsOutputs = Kaltura_Client_ParseUtils::unmarshalObject($xml->thumbParamsOutputs, "KalturaThumbParamsOutputListResponse");
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_ThumbAsset
	 * @readonly
	 */
	public $thumbAsset;

	/**
	 * 
	 *
	 * @var Kaltura_Client_FileSync_Type_FileSyncListResponse
	 * @readonly
	 */
	public $fileSyncs;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_ThumbParams
	 * @readonly
	 */
	public $thumbParams;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_ThumbParamsOutputListResponse
	 * @readonly
	 */
	public $thumbParamsOutputs;


}
