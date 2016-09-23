<table width="100%" cellspacing="3" cellpadding="0" border="0">
<tr>
<td valign="bottom" class="gensmall">
<!-- BEGIN switch_user_logged_in -->
{LAST_VISIT_DATE}<br />
<!-- END switch_user_logged_in -->
{CURRENT_TIME}<br />
<a href="{U_INDEX}" class="gensmall">{L_INDEX}</a></td>
<td align="right" valign="bottom" class="gensmall">
<!-- BEGIN switch_user_logged_in -->
<a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a><br />
<!-- END switch_user_logged_in -->
<a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a><br />
<a href="{U_MARK_READ}">{L_MARK_FORUMS_READ}</a></td>
</tr>
</table>
<table width="100%" cellpadding="1" cellspacing="1" border="0">
<tr>
<td colspan="2" class="cat" nowrap="nowrap"><span class="forumstitle">&nbsp;{L_FORUM}&nbsp;</span></td>
<td class="cat" align="center" nowrap="nowrap"><span class="forumstitle">&nbsp;{L_TOPICS}&nbsp;</span></td>
<td class="cat" align="center" nowrap="nowrap"><span class="forumstitle">&nbsp;{L_POSTS}&nbsp;</span></td>
<td class="cat" align="center" nowrap="nowrap"><span class="forumstitle">&nbsp;{L_LASTPOST}&nbsp;</span></td>
</tr>
<!-- BEGIN catrow -->
<tr>
<td colspan="5" class="cat" valign="middle"><img src="themes/COD_Black_Ops/images/star.png" alt="" width="13" height="11" /><span class="title">&nbsp;&nbsp;<a href="{catrow.U_VIEWCAT}">{catrow.CAT_DESC}</a></span></td>
</tr>
<!-- BEGIN forumrow -->
<tr>
<td height="45" class="row1" style="width:50px!important;"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" width="50" height="50" /></td>
<td class="row1" width="100%"><a href="{catrow.forumrow.U_VIEWFORUM}" class="topictitle">{catrow.forumrow.FORUM_NAME}</a><br />
  <span class="genmed">{catrow.forumrow.FORUM_DESC}<br />
</span><span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span></td>
<td class="row2" align="center"><span class="gensmall">{catrow.forumrow.TOPICS}</span></td>
<td class="row2" align="center"><span class="gensmall">{catrow.forumrow.POSTS}</span></td>
<td class="row1" align="center" nowrap="nowrap"><span class="gensmall">{catrow.forumrow.LAST_POST}</span></td>
</tr>
<!-- END forumrow -->
<tr>
  <td colspan="5" style="background:url(themes/COD_Black_Ops/forums/images/forumfooter.jpg) #000;">&nbsp;</td>
</tr>
<!-- END catrow -->
</table>

<table width="100%" cellpadding="2" cellspacing="1" border="0" >
<tr>
<td class="cat" colspan="2" valign="middle"><img src="themes/COD_Black_Ops/images/star.png" width="13" height="11" alt="" />&nbsp;&nbsp;<span class="title"><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></span></td>
</tr>
<tr>

<td class="row1" width="100%"><span class="gensmall">{TOTAL_POSTS}<br />
{TOTAL_USERS}<br />
{NEWEST_USER}</span></td>
</tr>
<tr>
<td class="row1"><span class="gensmall">{TOTAL_USERS_ONLINE} &nbsp; [ <strong>{L_WHOSONLINE_ADMIN}</strong>
] &nbsp; [ <strong>{L_WHOSONLINE_MOD}</strong> ]<br />
{RECORD_USERS}<br />
{LOGGED_IN_USER_LIST}</span></td>


</tr>
<tr>
<td class="row1"><span class="gensmall">{L_ONLINE_EXPLAIN}</span></td>
</tr>
</table>
<!-- BEGIN switch_user_logged_out -->

<!-- END switch_user_logged_out -->

<table style="width:100%; border:none; background:#000;" cellspacing="12" border="0" cellpadding="8">
<tr>
<td align="center"><img src="themes/COD_Black_Ops/forums/images/folder_new.gif" alt="{L_NEW_POSTS}" title="{L_NEW_POSTS}"  width="25" height="25"/><br />New Reply</td>
<td align="center"><img src="themes/COD_Black_Ops/forums/images/folder.gif" alt="{L_NO_NEW_POSTS}" title="{L_NO_NEW_POSTS}" width="25" height="25"/><br />No New Replys</td>
<td align="center"><img src="themes/COD_Black_Ops/forums/images/folder_lock.gif" alt="{L_FORUM_LOCKED}" title="{L_FORUM_LOCKED}" width="25" height="25"/><br />Post Locked !!</td>
</tr>
</table>
<table align="center" style="width:100%; border:none; background:#000;" cellspacing="0" cellpadding="0">
<tr>
  <td style=" background:url(themes/COD_Black_Ops/forums/images/forumfooter.jpg) #000;">&nbsp;</td>
</tr>
</table>