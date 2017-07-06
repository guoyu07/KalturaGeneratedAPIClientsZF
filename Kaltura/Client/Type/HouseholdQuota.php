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
class Kaltura_Client_Type_HouseholdQuota extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHouseholdQuota';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->householdId))
			$this->householdId = (string)$xml->householdId;
		if(count($xml->totalQuota))
			$this->totalQuota = (int)$xml->totalQuota;
		if(count($xml->availableQuota))
			$this->availableQuota = (int)$xml->availableQuota;
	}
	/**
	 * Household identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $householdId = null;

	/**
	 * Total quota that is allocated to the household
	 *
	 * @var int
	 * @readonly
	 */
	public $totalQuota = null;

	/**
	 * Available quota that household has remaining
	 *
	 * @var int
	 * @readonly
	 */
	public $availableQuota = null;


}
