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
class Kaltura_Client_ElasticSearch_Enum_ESearchEntryFieldName extends Kaltura_Client_EnumBase
{
	const ENTRY_ID = "_id";
	const ENTRY_ACCESS_CONTROL_ID = "access_control_id";
	const ENTRY_ADMIN_TAGS = "admin_tags";
	const ENTRY_CATEGORIES = "categories";
	const ENTRY_CATEGORY_NAME = "categories.name";
	const ENTRY_CATEGORY_IDS = "category_ids";
	const ENTRY_CONVERSION_PROFILE_ID = "conversion_profile_id";
	const ENTRY_CREATED_AT = "created_at";
	const ENTRY_CREATOR_ID = "creator_kuser_id";
	const ENTRY_CREDIT = "credit";
	const ENTRY_DESCRIPTION = "description";
	const ENTRY_END_DATE = "end_date";
	const ENTRY_ENTITLED_USER_EDIT = "entitled_kusers_edit";
	const ENTRY_ENTITLED_USER_PUBLISH = "entitled_kusers_publish";
	const ENTRY_TYPE = "entry_type";
	const ENTRY_EXTERNAL_SOURCE_TYPE = "external_source_type";
	const ENTRY_USER_ID = "kuser_id";
	const ENTRY_LENGTH_IN_MSECS = "length_in_msecs";
	const ENTRY_MEDIA_TYPE = "media_type";
	const ENTRY_MODERATION_STATUS = "moderation_status";
	const ENTRY_NAME = "name";
	const ENTRY_PARENT_ENTRY_ID = "parent_id";
	const ENTRY_PUSH_PUBLISH = "push_publish";
	const ENTRY_RECORDED_ENTRY_ID = "recorded_entry_id";
	const ENTRY_REDIRECT_ENTRY_ID = "redirect_entry_id";
	const ENTRY_REFERENCE_ID = "reference_id";
	const ENTRY_SITE_URL = "site_url";
	const ENTRY_SOURCE_TYPE = "source_type";
	const ENTRY_START_DATE = "start_date";
	const ENTRY_TAGS = "tags";
	const ENTRY_TEMPLATE_ENTRY_ID = "template_entry_id";
	const ENTRY_UPDATED_AT = "updated_at";
	const ENTRY_VIEWS = "views";
	const ENTRY_VOTES = "votes";
}

