<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<td width="35%" align="center" class="cat"><span class="forumstitle">{L_USERNAME}</span></td>
<td width="25%" align="center" class="cat"><span class="forumstitle">{L_LAST_UPDATE}</span></td>
<td width="40%" align="center" class="cat"><span class="forumstitle">{L_FORUM_LOCATION}</span></td>
</tr>
<tr>
<td class="cat" colspan="3">{TOTAL_REGISTERED_USERS_ONLINE}</td>
</tr>
<!-- BEGIN reg_user_row -->
<tr>
<td class="row1">&nbsp;<a href="{reg_user_row.U_USER_PROFILE}">{reg_user_row.USERNAME}</a>&nbsp;</td>
<td align="center" nowrap="nowrap" class="row1">&nbsp;{reg_user_row.LASTUPDATE}&nbsp;</td>
<td class="row1" align="center">&nbsp;<a href="{reg_user_row.U_FORUM_LOCATION}">{reg_user_row.FORUM_LOCATION}</a>&nbsp;</td>
</tr>
<!-- END reg_user_row -->
<tr>
<td colspan="3" height="1" class="row3"><img src="themes/COD_Black_Ops/forums/images/spacer.gif" width="1" height="1" alt="" /></td>
</tr>
<tr>
<td class="cat" colspan="3">{TOTAL_GUEST_USERS_ONLINE}</td>
</tr>
<!-- BEGIN guest_user_row -->
<tr>
<td class="row1">&nbsp;{guest_user_row.USERNAME}&nbsp;</td>
<td align="center" nowrap="nowrap" class="row1">&nbsp;{guest_user_row.LASTUPDATE}&nbsp;</td>
<td class="{guest_user_row.ROW_CLASS}" align="center">&nbsp;<a href="row1">{guest_user_row.FORUM_LOCATION}</a>&nbsp;</td>
</tr>
<!-- END guest_user_row -->
<tr>
<td colspan="3" class="row1"><span class="genmed">{L_ONLINE_EXPLAIN}</span></td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<br clear="all" />
<div align="left">{JUMPBOX}</div>
