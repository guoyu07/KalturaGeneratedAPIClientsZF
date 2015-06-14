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
class Kaltura_Client_EdgeServerService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	function add(Kaltura_Client_Type_EdgeServer $edgeServer)
	{
		$kparams = array();
		$this->client->addParam($kparams, "edgeServer", $edgeServer->toParams());
		$this->client->queueServiceActionCall("edgeserver", "add", "KalturaEdgeServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEdgeServer");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_EdgeServer");
		return $resultObject;
	}

	function get($edgeServerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "edgeServerId", $edgeServerId);
		$this->client->queueServiceActionCall("edgeserver", "get", "KalturaEdgeServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEdgeServer");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_EdgeServer");
		return $resultObject;
	}

	function update($edgeServerId, Kaltura_Client_Type_EdgeServer $edgeServer)
	{
		$kparams = array();
		$this->client->addParam($kparams, "edgeServerId", $edgeServerId);
		$this->client->addParam($kparams, "edgeServer", $edgeServer->toParams());
		$this->client->queueServiceActionCall("edgeserver", "update", "KalturaEdgeServer", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEdgeServer");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_EdgeServer");
		return $resultObject;
	}

	function delete($edgeServerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "edgeServerId", $edgeServerId);
		$this->client->queueServiceActionCall("edgeserver", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
	}

	function listAction(Kaltura_Client_Type_EdgeServerFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("edgeserver", "list", "KalturaEdgeServerListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEdgeServerListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_EdgeServerListResponse");
		return $resultObject;
	}
}
