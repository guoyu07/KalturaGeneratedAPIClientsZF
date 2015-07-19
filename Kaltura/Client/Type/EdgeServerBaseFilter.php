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
abstract class Kaltura_Client_Type_EdgeServerBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaEdgeServerBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->nameEqual))
			$this->nameEqual = (string)$xml->nameEqual;
		if(count($xml->nameIn))
			$this->nameIn = (string)$xml->nameIn;
		if(count($xml->systemNameEqual))
			$this->systemNameEqual = (string)$xml->systemNameEqual;
		if(count($xml->systemNameIn))
			$this->systemNameIn = (string)$xml->systemNameIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->tagsLike))
			$this->tagsLike = (string)$xml->tagsLike;
		if(count($xml->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$xml->tagsMultiLikeOr;
		if(count($xml->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$xml->tagsMultiLikeAnd;
		if(count($xml->hostNameLike))
			$this->hostNameLike = (string)$xml->hostNameLike;
		if(count($xml->hostNameMultiLikeOr))
			$this->hostNameMultiLikeOr = (string)$xml->hostNameMultiLikeOr;
		if(count($xml->hostNameMultiLikeAnd))
			$this->hostNameMultiLikeAnd = (string)$xml->hostNameMultiLikeAnd;
		if(count($xml->playbackHostNameLike))
			$this->playbackHostNameLike = (string)$xml->playbackHostNameLike;
		if(count($xml->playbackHostNameMultiLikeOr))
			$this->playbackHostNameMultiLikeOr = (string)$xml->playbackHostNameMultiLikeOr;
		if(count($xml->playbackHostNameMultiLikeAnd))
			$this->playbackHostNameMultiLikeAnd = (string)$xml->playbackHostNameMultiLikeAnd;
		if(count($xml->parentIdEqual))
			$this->parentIdEqual = (int)$xml->parentIdEqual;
		if(count($xml->parentIdIn))
			$this->parentIdIn = (string)$xml->parentIdIn;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_EdgeServerStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostNameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostNameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostNameMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $playbackHostNameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $playbackHostNameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $playbackHostNameMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $parentIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdIn = null;


}
