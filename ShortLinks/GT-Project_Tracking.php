<?php

/***********************************************************/
/* Pjorct Tracking 					 			*/
/* http://www.ravennuke.com	 						*/
/* Copyright © 2009 by RavenNuke (tm)		 			*/
/* Author: Palbin (matt@phpnuke-guild.org)					*/
/* Description of changes: Made 100% XHTML 1.0 Transitional	*/
/*	Compliant.  Bugs fixes and major code formating changes	*/
/***********************************************************/

$urlin = array(
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJProject&amp;project_id=([0-9]*)"',
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJTask&amp;task_id=([0-9]*)"',
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJReportSubmit&amp;project_id=([0-9]*)"',
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJRequestSubmit&amp;project_id=([0-9]*)"',
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJReport&amp;report_id=([0-9]*)"',
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJRequest&amp;request_id=([0-9]*)"',
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJReportCommentSubmit&amp;report_id=([0-9]*)"',
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJRequestCommentSubmit&amp;request_id=([0-9]*)"',
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJTaskMap"',
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJReportMap"',
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJRequestMap"',
'"(?<!/)modules.php\?name=Project_Tracking"'
);

$urlout = array(
'project-\\1.html',
'project-task-\\1.html',
'project-\\1-submit-report.html',
'project-\\1-submit-request.html',
'project-report-\\1.html',
'project-request-\\1.html',
'project-report-comment-\\1.html',
'project-request-comment-\\1.html',
'project-task-map.html',
'project-report-map.html',
'project-request-map.html',
'project.html'
);

?>