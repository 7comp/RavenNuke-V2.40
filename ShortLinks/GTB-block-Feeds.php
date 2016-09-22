<?php
/******************************************************************************
* Script:     TegoNuke(tm) ShortLinks "Special Tap" for the nukeFEED(tm)
*             Feed Creator module.
* Version:    1.0
* Author:     Rob Herder (aka: montego) of http://montegoscripts.com
* Contact:    montego@montegoscripts.com
* Copyright:  Copyright © 2007 by Montego Scripts
* License:    GNU/GPL (see provided LICENSE.txt file)
******************************************************************************/

/*
 * NOTE: As you add additional content types you will need to add the respective line(s) within
 * the $urlin and $urlout arrays below as well as add the corresponding RewriteRule statements
 * within your .htaccess file (at the root of your nuke site).
 */

$urlin = array(
'"modules.php\?name=Feeds&amp;fid=([0-9]*)&amp;type=HTML"',
'"modules.php\?name=Feeds"'
);

$urlout = array(
'feeds-\\1.html',
'feeds.html'
);

?>