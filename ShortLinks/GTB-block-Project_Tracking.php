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
'"(?<!/)modules.php\?name=Project_Tracking&amp;op=PJProject&amp;project_id=([0-9]*)"'
);

$urlout = array(
'project-\\1.html'
);

?>