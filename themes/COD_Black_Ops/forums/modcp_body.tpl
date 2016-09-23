<form method="post" action="{S_MODCP_ACTION}">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a></td>
</tr>
</table>
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat" colspan="5" align="center"><span class="forumstitle">{L_MOD_CP}</span></td>
</tr>
<tr>
<td class="row1" colspan="5" align="center"><span class="genmed">{L_MOD_CP_EXPLAIN}</span></td>
</tr>
<tr>
<td width="4%" align="center" class="cat"></td>
<td align="center" class="cat"><span class="forumstitle">{L_TOPICS}</span></td>
<td width="8%" align="center" class="cat"><span class="forumstitle">{L_REPLIES}</span></td>
<td width="17%" align="center" class="cat"><span class="forumstitle">{L_LASTPOST}</span></td>
<td width="5%" align="center" class="cat"><span class="forumstitle">{L_SELECT}</span></td>
</tr>
<!-- BEGIN topicrow -->
<tr>
<td class="row1"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="25" height="25" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
<td class="row1">&nbsp;<span class="topictitle">{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span></td>
<td class="row2" align="center"><span class="postdetails">{topicrow.REPLIES}</span></td>
<td class="row1" align="center"><span class="postdetails">{topicrow.LAST_POST_TIME}</span></td>
<td class="row2" align="center"><input type="checkbox" name="topic_id_list[]" value="{topicrow.TOPIC_ID}" /></td>
</tr>
<!-- END topicrow -->
<tr>
<td colspan="5" align="right" class="cat"> {S_HIDDEN_FIELDS}
<input type="submit" name="delete" class="catbutton" value="{L_DELETE}" />
&nbsp;
<input type="submit" name="move" class="catbutton" value="{L_MOVE}" />
&nbsp;
<input type="submit" name="lock" class="catbutton" value="{L_LOCK}" />
&nbsp;
<input type="submit" name="unlock" class="catbutton" value="{L_UNLOCK}" />
</td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a><br />
<br />
{PAGINATION}</td>
</tr>
</table>
</form>
