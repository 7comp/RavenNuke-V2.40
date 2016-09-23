<form method="post" action="{S_MODE_ACTION}">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat" align="center"><span class="forumstitle">#</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_PM}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_USERNAME}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_EMAIL}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_FROM}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_JOINED}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_POSTS}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_WEBSITE}</span></td>
</tr>
<!-- BEGIN memberrow -->
<tr>
<td class="row1" align="center">&nbsp;{memberrow.ROW_NUMBER}&nbsp;</td>
<td class="row1" align="center">&nbsp;{memberrow.PM_IMG}&nbsp;</td>
<td class="row1" align="center"><a href="{memberrow.U_VIEWPROFILE}">{memberrow.USERNAME}</a></td>
<td class="row1" align="center">&nbsp;{memberrow.EMAIL_IMG}&nbsp;</td>
<td class="row1" align="center">{memberrow.FROM}</td>
<td class="row1" align="center"><span class="gensmall">{memberrow.JOINED}</span></td>
<td class="row1" align="center">{memberrow.POSTS}</td>
<td class="row1" align="center">&nbsp;{memberrow.WWW_IMG}&nbsp;</td>
</tr>
<!-- END memberrow -->
<tr align="center">
<td class="cat" colspan="8">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="genmed">{L_SELECT_SORT_METHOD}:&nbsp;</td>
<td>{S_MODE_SELECT}&nbsp;&nbsp;</td>
<td class="genmed">{L_ORDER}:&nbsp;</td>
<td>{S_ORDER_SELECT}&nbsp;&nbsp;</td>
<td><input type="submit" name="submit" value="{L_SUBMIT}" class="catbutton" /></td>
</tr>
</table>
</td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a><br />
{PAGINATION}</td>
</tr>
</table>
</form>
<br clear="all" />
<div align="left">{JUMPBOX}</div>