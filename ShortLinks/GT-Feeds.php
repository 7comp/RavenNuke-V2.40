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
'"modules.php\?name=Feeds&amp;fid=([0-9]*)&amp;type=RSS([0-9]{1})\.([0-9]{1,2})"',
'"modules.php\?name=Feeds&amp;fid=([0-9]*)&amp;type=ATOM([0-9]{1})\.([0-9]{1,2})"',
'"modules.php\?name=Feeds&amp;fid=([0-9]*)&amp;type=ATOM"',
'"modules.php\?name=Feeds&amp;op=map&amp;type=OPML"',
'"modules.php\?name=Forums&amp;file=viewtopic&amp;t=([0-9]*)"',
'"modules.php\?name=News&amp;file=article&amp;sid=([0-9]*)"',
'"modules.php\?name=Downloads&amp;op=getit&amp;lid=([0-9]*)"',
'"modules.php\?name=Downloads&amp;d_op=getit&amp;lid=([0-9]*)"', // <-- For NSN GR Downloads
'"modules.php\?name=Content&amp;pa=showpage&amp;pid=([0-9]*)"',
'"modules.php\?name=Web_Links&amp;l_op=viewlinkdetails&amp;lid=([0-9]*)"',
'"modules.php\?name=Feeds"'
);

$urlout = array(
'feeds-\\1.html',
'feeds-\\1-rss\\2\\3.xml',
'feeds-\\1-atom\\2\\3.xml',
'feeds-\\1-atom10.xml',
'feeds-map-opml.xml',
'ftopict-\\1.html',
'article\\1.html',
'download-file-\\1.html',
'download-file-\\1.html', // <-- For NSN GR Downloads
'content-\\1.html',
'viewlinkdetails-\\1.html',
'feeds.html'
);

?>