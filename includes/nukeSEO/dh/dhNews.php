<?php
/************************************************************************/
/* nukeSEO
/* http://www.nukeSEO.com
/* Copyright 2008 by Kevin Guske
/************************************************************************/
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
class dhNews extends dhclass {
	function dhNews () {
		global $prefix;
		$this->content_id        = 'sid';
		$this->content_table     = $prefix.'_stories';
		$this->contentTitleArray = array('title');
		$this->contentDescArray  = array('hometext','bodytext');
		$this->contentKeysArray  = array('title','hometext','bodytext');
		$this->cat_id            = 'catid';
		$this->cat_table         = $prefix.'_stories_cat';
		$this->catTitleArray     = array('title');
		$this->catDescArray      = array('title');
		$this->catKeysArray      = array('title');
		$this->subcat_id         = 'topic';
		$this->subcat_table      = $prefix.'_topics';
		$this->subcat_table_id   = 'topicid';
		$this->subcatTitleArray  = array('topicname');
		$this->subcatDescArray   = array('topictext');
		$this->subcatKeysArray   = array('topicname','topictext');
		$this->dh_bLinkCatSubcat = false; // 
		// If pending content is stored in the same table, inactive content, private content, etc.
		$this->activeWhere       = '';
	}
	function getContentID() {
		global $sid;
		return $sid;
	}
	function setContentID() {
		global $sid, $dhID;
		$sid = $dhID;
	}
	function getCatID() { 
		global $new_topic;
		return $new_topic;
	}
	function setCatID() { 
		global $new_topic, $dhCat;
		$new_topic = $dhCat;
	}
}
?>