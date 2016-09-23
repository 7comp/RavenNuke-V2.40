<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>
<td valign="top"><a href="{U_VIEW_FORUM}" title="{FORUM_NAME}"><span class="maintitle">{FORUM_NAME}</span></a><br />
{PAGINATION}</td>
<td class="gensmall" align="right" valign="bottom">{L_MODERATOR}: {MODERATORS}<br />
{LOGGED_IN_USER_LIST}<br />
<a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}" /></a></td>
<td class="nav" width="100%">&nbsp;<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}" title="{FORUM_NAME}">{FORUM_NAME}</a></td>
</tr>
</table>
<table border="0" cellpadding="2" cellspacing="1" width="100%" class="forumline">
<tr>
<td colspan="2" class="cat"><span class="forumstitle">&nbsp;{L_TOPICS}&nbsp;</span></td>
<td width="50" class="cat"><span class="forumstitle">&nbsp;{L_REPLIES}&nbsp;</span></td>
<td width="100" class="cat" align="center"><span class="forumstitle">&nbsp;{L_AUTHOR}&nbsp;</span></td>
<td width="50" class="cat"><span class="forumstitle">&nbsp;{L_VIEWS}&nbsp;</span></td>
<td class="cat" align="center"><span class="forumstitle">&nbsp;{L_LASTPOST}&nbsp;</span></td>
</tr>
<!-- BEGIN topicrow -->
<!-- BEGIN divider -->
<tr>
   <td class="cat" colspan="6" height="28"><span style="font-weight:bold;font-size:12px;letter-spacing: 1px;">{topicrow.divider.L_DIV_HEADERS}</span></td>
</tr>
<!-- END divider -->
<tr>
<td height="34" class="row1"><a href="{topicrow.U_VIEW_TOPIC}"><img src="{topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" border="0" width="25" height="25" /></a></td>
<td class="row1" width="100%">{topicrow.NEWEST_POST_IMG}<span class="topictype">{topicrow.TOPIC_TYPE}</span><a class="topictitle" href="{topicrow.U_VIEW_TOPIC}" title="{topicrow.TOPIC_TITLE}">{topicrow.TOPIC_TITLE}</a><span class="gensmall"><br />
{topicrow.GOTO_PAGE}</span></td>
<td class="row2" align="center"><span class="topictitle">{topicrow.REPLIES}</span></td>
<td class="row1" align="center" valign="middle" nowrap="nowrap"><span class="name">{topicrow.TOPIC_AUTHOR}</span><br /><span class="postdetails">{topicrow.FIRST_POST_TIME}</span></td>
<td class="row2" align="center"><span class="topictitle">{topicrow.VIEWS}</span></td>
<td class="row1" align="center" nowrap="nowrap"><span class="postdetails">&nbsp;{topicrow.LAST_POST_TIME}&nbsp;</span><br />
<span class="name">{topicrow.LAST_POST_AUTHOR}</span> {topicrow.LAST_POST_IMG}</td>
</tr>
<!-- END topicrow -->
<!-- BEGIN switch_no_topics -->
<tr>
<td class="row1" colspan="6" align="center">{L_NO_TOPICS}</td>
</tr>
<!-- END switch_no_topics -->
<tr>
<td class="cat" align="center" colspan="6">
<form method="post" action="{S_POST_DAYS_ACTION}">
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td class="genmed">{L_DISPLAY_TOPICS}:&nbsp;</td>
<td>{S_SELECT_TOPIC_DAYS}&nbsp;&nbsp;</td>
<td><input type="submit" class="catbutton" value="{L_GO}" name="submit" /></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<table align="center" style="width:100%; border:none; background:#000;" cellspacing="0" cellpadding="0">
<tr>
  <td style=" background:url(themes/COD_Black_Ops/forums/images/forumfooter.jpg) #000;">&nbsp;</td>
</tr>
</table>

<table width="100%" align="center" cellspacing="12" border="0" cellpadding="8" bgcolor="#000000">
<td valign="top">
  <table width="100%" border="0" cellspacing="3" cellpadding="0">
  <tr>
  <td><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" title="{L_NEW_POSTS}" width="25" height="25" /></td>
  <td class="gensmall">{L_NEW_POSTS}</td>
  <td>&nbsp;&nbsp;</td>
  <td><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" title="{L_NO_NEW_POSTS}" width="25" height="25" /></td>
  <td class="gensmall">{L_NO_NEW_POSTS}</td>
  <td>&nbsp;&nbsp;</td>
  <td><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}" title="{L_STICKY}" width="25" height="25" /></td>
  <td class="gensmall">{L_STICKY}</td>
  <td><img src="themes/COD_Black_Ops/forums/images/folder_sticky_new.gif" alt="New Sticky" title="New Sticky" width="25" height="25" /></td>
  <td class="gensmall">Sticky new post</td>
  </tr>
  <tr>
  <td><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" title="{L_NEW_POSTS_HOT}" width="25" height="25" /></td>
  <td class="gensmall">{L_NEW_POSTS_HOT}</td>
  <td>&nbsp;</td>
  <td><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" title="{L_NO_NEW_POSTS_HOT}" width="25" height="25" /></td>
  <td class="gensmall">{L_NO_NEW_POSTS_HOT}</td>
  <td>&nbsp;</td>
  <td><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}" title="{L_NO_NEW_POSTS_LOCKED}" width="25" height="25" /></td>
  <td class="gensmall">{L_NO_NEW_POSTS_LOCKED}</td>
   <td><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_LOCKED}" title="{L_NEW_POSTS_LOCKED}" width="25" height="25" /></td>
  <td class="gensmall">{L_NEW_POSTS_LOCKED}</td>
  </tr>
  <tr>
    <td><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}" title="{L_ANNOUNCEMENT}" width="25" height="25" /></td>
    <td class="gensmall">{L_ANNOUNCEMENT}</td>
    <td>&nbsp;</td>
    <td><img src="themes/COD_Black_Ops/forums/images/folder_announce_new.gif" alt="Announcement New" title="Announcement New" width="25" height="25" /></td>
    <td class="gensmall">Announcement new post</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="gensmall"></td>
    <td>&nbsp;</td>
    <td class="gensmall">&nbsp;</td>
  </tr>
  <tr>
  </tr>
  </table>
</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}" /></a></td>
<td class="nav" width="100%">&nbsp;<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>
<td class="nav" valign="top">{PAGINATION}<br />
<br />
{JUMPBOX}<br />
</td>
<td class="gensmall" align="right" valign="top"><strong><a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></strong><br />
{L_MODERATOR}: {MODERATORS}<br />
{LOGGED_IN_USER_LIST}
</td>
</tr>
</table>
<table width="100%" cellspacing="0" border="0" align="center" cellpadding="0">
<tr>
<td align="right"><span class="gensmall">{S_AUTH_LIST}</span></td>
</tr>
</table>
