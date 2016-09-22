<?php
/************************************************************************
* Script:     TegoNuke(tm) ShortLinks
* Version:    1.1.0
* Author:     Rob Herder (aka: montego) of http://montegoscripts.com
* Contact:    montego@montegoscripts.com
* Copyright:  Copyright © 2007 by Montego Scripts
* License:    GNU/GPL (see provided LICENSE.txt file)
* Comments:   Initial creation for GCalendar
************************************************************************/

$urlin = array(
'"(?<!/)modules.php\?name=GCalendar&amp;file=(viewday|viewweek)&amp;y=([0-9]*)&amp;m=([0-9]*)&amp;d=([0-9]*)&amp;e=([0-9]*)&amp;printable=1"',
'"(?<!/)modules.php\?name=GCalendar&amp;file=(submit|viewday|viewweek|friend)&amp;y=([0-9]*)&amp;m=([0-9]*)&amp;d=([0-9]*)&amp;e=([0-9]*)"',
'"(?<!/)modules.php\?name=GCalendar&amp;file=(viewday|viewweek)&amp;y=([0-9]*)&amp;m=([0-9]*)&amp;d=([0-9]*)&amp;printable=1"',
'"(?<!/)modules.php\?name=GCalendar&amp;file=(submit|viewday|viewweek)&amp;y=([0-9]*)&amp;m=([0-9]*)&amp;d=([0-9]*)"',
'"(?<!/)modules.php\?name=GCalendar&amp;file=edit&amp;y=([0-9]*)&amp;m=([0-9]*)&amp;d=([0-9]*)&amp;eventId=([0-9]*)"',
'"(?<!/)modules.php\?name=GCalendar&amp;file=edit&amp;y=([0-9]*)&amp;m=([0-9]*)&amp;d=([0-9]*)"',
'"(?<!/)modules.php\?name=GCalendar&amp;file=submit&amp;y=([0-9]*)&amp;m=([0-9]*)"',
'"(?<!/)modules.php\?name=GCalendar&amp;y=([0-9]*)&amp;m=([0-9]*)&amp;printable=1"',
'"(?<!/)modules.php\?name=GCalendar&amp;y=([0-9]*)&amp;m=([0-9]*)"',
'"(?<!/)modules.php\?name=GCalendar&amp;file=submit&amp;op=submit"',
'"(?<!/)modules.php\?name=GCalendar&amp;file=(viewweek|rsvp|friend)"',
'"(?<!/)modules.php\?name=Your_Account&amp;op=userinfo&amp;username=([a-zA-Z0-9_-]*)"',
'"(?<!/)modules.php\?name=GCalendar"'
);

$urlout = array(
'eventscalendar-\\1-\\2-\\3-\\4-event\\5-print.html',
'eventscalendar-\\1-\\2-\\3-\\4-event\\5.html',
'eventscalendar-\\1-\\2-\\3-\\4-print.html',
'eventscalendar-\\1-\\2-\\3-\\4.html',
'eventscalendar-edit-\\1-\\2-\\3-event\\4.html',
'eventscalendar-edit-\\1-\\2-\\3.html',
'eventscalendar-submit-\\1-\\2.html',
'eventscalendar-\\1-\\2-print.html',
'eventscalendar-\\1-\\2.html',
'eventscalendar-submit.html',
'eventscalendar-\\1.html',
'userinfo-\\1.html',
'eventscalendar.html'
);

?>