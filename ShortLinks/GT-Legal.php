<?php
/************************************************************************
* Script:     TegoNuke(tm) ShortLinks for the Legal module that was
*             completely re-written strictly for RavenNuke(tm)
* Version:    1.0.0
* Author:     Rob Herder (aka: montego) of http://montegoscripts.com
* Contact:    montego@montegoscripts.com
* Copyright:  Copyright © 2008 by Montego Scripts
* License:    GNU/GPL (see provided LICENSE.txt file)
************************************************************************/

$urlin = array(
'"(?<!/)modules.php\?name=Legal&amp;op=([a-zA-Z0-9_-]*)"',
'"(?<!/)modules.php\?name=Your_Account&amp;op=new_user"',
'"(?<!/)modules.php\?name=Your_Account"',
'"(?<!/)modules.php\?name=Legal"'
);

$urlout = array(
'legal-\\1.html',
'account-new_user.html',
'account.html',
'legal.html'
);

?>