<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>
<td class="nav" valign="top"><a class="maintitle" href="{U_VIEW_TOPIC}" title="{TOPIC_TITLE}">{TOPIC_TITLE}</a><br />
{PAGINATION}</td>
<td class="gensmall" align="right" valign="bottom"><a href="{U_VIEW_NEWER_TOPIC}">{L_VIEW_NEXT_TOPIC}</a><br />
<a href="{U_VIEW_OLDER_TOPIC}">{L_VIEW_PREVIOUS_TOPIC}</a><br />
<strong>{S_WATCH_TOPIC}</strong></td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<th colspan="2"><img src="themes/COD_Black_Ops/forums/images/line.jpg" alt="" /></th>
</tr>
<tr>
<td nowrap="nowrap"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}"  /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" title="{L_POST_REPLY_TOPIC}"  /></a></td>
<td class="nav" width="100%">&nbsp;<a href="{U_INDEX}">{L_INDEX}</a>
&raquo; <a href="{U_VIEW_FORUM}" title="{FORUM_NAME}">{FORUM_NAME}</a></td>
</tr>
</table>
{POLL_DISPLAY}
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
<tr>
<td width="150" height="28" class="cat" align="center"><span class="forumstitle">{L_AUTHOR}</span></td>
<td width="100%" class="cat" align="center"><span class="forumstitle">{L_MESSAGE}</span></td>
</tr>
<!-- BEGIN postrow -->
<tr>
<td valign="top" class="{postrow.ROW_CLASS}" rowspan="2"><div align="center"><span class="name"><a name="{postrow.U_POST_ID}"></a><strong>{postrow.POSTER_NAME}</strong></span><br />
      <span class="postdetails">{postrow.POSTER_RANK}<br />
        {postrow.RANK_IMAGE}<br />
        {postrow.POSTER_AVATAR}<br />
  <br />
        {postrow.POSTER_JOINED}<br />
        {postrow.POSTER_POSTS}<br />
        {postrow.POSTER_FROM}</span><br />
  <img src="themes/COD_Black_Ops/forums/images/spacer.gif" alt="" width="150" height="1" />
</div></td>
<td class="{postrow.ROW_CLASS}" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100%" class="postdetails"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" border="0" /></a>{L_POSTED}:
{postrow.POST_DATE}</td>
<td nowrap="nowrap" valign="top">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} </a>
{postrow.DELETE_IMG} {postrow.IP_IMG}</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td valign="top" class="postbody">
<hr />
{postrow.MESSAGE}</td>
</tr>
<tr>
<td height="19" valign="bottom" class="genmed">{postrow.ATTACHMENTS}{postrow.SIGNATURE}<span class="postdetails">{postrow.EDITED_MESSAGE}</span></td>
</tr>
</table>
</td>
</tr>
<tr>

</tr>
<tr>
  <td height="20" colspan="2" valign="bottom" nowrap="nowrap" class="row1"> {postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.AIM_IMG} {postrow.YIM_IMG} {postrow.MSN_IMG} {postrow.ICQ_IMG}</td>
</tr>
<td class="spacerow" colspan="2" height="1"><img src="themes/COD_Black_Ops/forums/images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
<!-- END postrow -->
<tr>
<td class="cat" colspan="2" height="30">
<form method="post" action="{S_POST_DAYS_ACTION}">
<table cellspacing="0" cellpadding="0" border="0" align="center">
<tr>
<td class="gensmall">{L_DISPLAY_POSTS}:&nbsp;&nbsp;</td>
<td>{S_SELECT_POST_DAYS}&nbsp;</td>
<td>{S_SELECT_POST_ORDER}&nbsp;&nbsp;</td>
<td><input type="submit" value="{L_GO}" class="submit" name="submit" /></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000000">
<tr>
<th style="background:url(themes/COD_Black_Ops/forums/images/forumfooter.jpg) #000 repeat-x;"></th>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="1" border="0">
<tr>
<td nowrap="nowrap"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" title="{L_POST_REPLY_TOPIC}"  /></a></td>
<td width="100%" class="nav">&nbsp;<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a></td>
</tr>
<br />
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
<tr>

<td class="nav" valign="top">{PAGINATION}<br />
<br />
{JUMPBOX}<br />
<br />
{S_TOPIC_ADMIN}<br />
{QUICK_REPLY_FORM}</td>
<td class="gensmall" align="right" valign="top"><strong>{S_WATCH_TOPIC}</strong><br />
<a href="{U_VIEW_NEWER_TOPIC}">{L_VIEW_NEXT_TOPIC}</a><br />
<a href="{U_VIEW_OLDER_TOPIC}">{L_VIEW_PREVIOUS_TOPIC}</a><br />
{S_AUTH_LIST}</td>
</tr>
</table>

   <br />
<!-- BEGIN similar -->
<table width="100%" cellspacing="1" cellpadding="2" border="0" align="center" class="forumline">
 <tr>
  <td width="100%" class="cat" align="center" colspan="6"><span class="forumstitle">{similar.L_SIMILAR}</span></td>
 </tr>
 <tr>
  <td colspan="2" class="cat"><span class="forumstitle">{similar.L_TOPIC}</span></td>
  <td class="cat" align="center"><span class="forumstitle">{similar.L_AUTHOR}</span></td>
  <td class="cat" align="center"><span class="forumstitle">{similar.L_FORUM}</span></td>
  <td class="cat" align="center"><span class="forumstitle">{similar.L_REPLIES}</span></td>
  <td class="cat" align="center"><span class="forumstitle">{similar.L_LAST_POST}</span></td>
 </tr>
 <!-- BEGIN topics -->
 <tr>
  <td class="row1" align="center"><span class="genmed"><img src="{similar.topics.FOLDER}" border="0" alt="{similar.topics.ALT}" title="{similar.topics.ALT}" /></span></td>
  <td class="row1" width="30%">{similar.topics.NEWEST}<span class="gensmall">{similar.topics.TYPE}</span> <span class="topictitle">{similar.topics.TOPICS}</span></td>
  <td class="row1" width="10%"><span class="name">{similar.topics.AUTHOR}</span></td>
  <td class="row1"><span class="name">{similar.topics.FORUM}</span></td>
  <td class="row1" width="15%" align="center"><span class="name">{similar.topics.REPLIES}</span></td>
  <td class="row1"><span class="postdetails">{similar.topics.POST_TIME}</span> <span class="name">{similar.topics.POST_URL}</span></td>
 </tr>
 <!-- END topics -->
</table>
<!-- END similar -->
