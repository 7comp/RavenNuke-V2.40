<br clear="all" />
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat" align="center"><span class="forumstitle">{L_PM}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_USERNAME}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_POSTS}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_FROM}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_EMAIL}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_WEBSITE}</span></td>
<td class="cat" align="center"><span class="forumstitle">{L_SELECT}</span></td>
</tr>
<tr>
<td class="cat" colspan="8">{L_PENDING_MEMBERS}</td>
</tr>
<!-- BEGIN pending_members_row -->
<tr>
<td class="{pending_members_row.ROW_CLASS}" align="center">{pending_members_row.PM_IMG}</td>
<td class="{pending_members_row.ROW_CLASS}" align="center"><a href="{pending_members_row.U_VIEWPROFILE}">{pending_members_row.USERNAME}</a></td>
<td class="{pending_members_row.ROW_CLASS}" align="center">{pending_members_row.POSTS}</td>
<td class="{pending_members_row.ROW_CLASS}" align="center">{pending_members_row.FROM}</td>
<td class="{pending_members_row.ROW_CLASS}" align="center">{pending_members_row.EMAIL_IMG}</td>
<td class="{pending_members_row.ROW_CLASS}" align="center">{pending_members_row.WWW_IMG}</td>
<td class="{pending_members_row.ROW_CLASS}" align="center"><input type="checkbox" name="pending_members[]" value="{pending_members_row.USER_ID}" checked="checked" /></td>
</tr>
<!-- END pending_members_row -->
<tr>
<td class="cat" colspan="8" align="right">
<input type="submit" name="approve" value="{L_APPROVE_SELECTED}" class="mainoption" />
&nbsp;&nbsp;
<input type="submit" name="deny" value="{L_DENY_SELECTED}" class="button" />
</td>
</tr>
</table>
