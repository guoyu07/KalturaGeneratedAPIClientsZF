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
// Copyright (C) 2006-2016  Kaltura Inc.
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
class Kaltura_Client_UserService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	function add(Kaltura_Client_Type_User $user)
	{
		$kparams = array();
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "add", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_User");
		return $resultObject;
	}

	function addFromBulkUpload($fileData, Kaltura_Client_Type_BulkUploadJobData $bulkUploadData = null, Kaltura_Client_Type_BulkUploadUserData $bulkUploadUserData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadUserData !== null)
			$this->client->addParam($kparams, "bulkUploadUserData", $bulkUploadUserData->toParams());
		$this->client->queueServiceActionCall("user", "addFromBulkUpload",  "KalturaBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_BulkUpload");
		return $resultObject;
	}

	function checkLoginDataExists(Kaltura_Client_Type_UserLoginDataFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("user", "checkLoginDataExists", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	function delete($userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "delete", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_User");
		return $resultObject;
	}

	function disableLogin($userId = null, $loginId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->queueServiceActionCall("user", "disableLogin", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_User");
		return $resultObject;
	}

	function enableLogin($userId, $loginId, $password = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("user", "enableLogin", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_User");
		return $resultObject;
	}

	function get($userId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "get", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_User");
		return $resultObject;
	}

	function getByLoginId($loginId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->queueServiceActionCall("user", "getByLoginId", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_User");
		return $resultObject;
	}

	function index($id, $shouldUpdate = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "shouldUpdate", $shouldUpdate);
		$this->client->queueServiceActionCall("user", "index", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	function listAction(Kaltura_Client_Type_UserFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("user", "list", "KalturaUserListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_UserListResponse");
		return $resultObject;
	}

	function login($partnerId, $userId, $password, $expiry = 86400, $privileges = "*")
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("user", "login", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	function loginByLoginId($loginId, $password, $partnerId = null, $expiry = 86400, $privileges = "*", $otp = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->addParam($kparams, "otp", $otp);
		$this->client->queueServiceActionCall("user", "loginByLoginId", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	function notifyBan($userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "notifyBan", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	function resetPassword($email)
	{
		$kparams = array();
		$this->client->addParam($kparams, "email", $email);
		$this->client->queueServiceActionCall("user", "resetPassword", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	function setInitialPassword($hashKey, $newPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hashKey", $hashKey);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("user", "setInitialPassword", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	function update($userId, Kaltura_Client_Type_User $user)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "update", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_User");
		return $resultObject;
	}

	function updateLoginData($oldLoginId, $password, $newLoginId = "", $newPassword = "", $newFirstName = null, $newLastName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "oldLoginId", $oldLoginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "newLoginId", $newLoginId);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->addParam($kparams, "newFirstName", $newFirstName);
		$this->client->addParam($kparams, "newLastName", $newLastName);
		$this->client->queueServiceActionCall("user", "updateLoginData", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
