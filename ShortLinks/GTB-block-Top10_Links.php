<?php
/******************************************************************************
* Script:     TegoNuke(tm) ShortLinks "Block Tap" for the block-Top10_Links.php
*             block file.
* Version:    1.2.1
* Author:     Rob Herder (aka: montego) of http://montegoscripts.com
* Contact:    montego@montegoscripts.com
* Copyright:  Copyright © 2006 by Montego Scripts
* License:    GNU/GPL (see provided LICENSE.txt file)
* Comments:   1.2.1 - ttitle was removed from RN2.10.01.
******************************************************************************/

$urlin = array(
'"(?<!/)modules.php\?name=Web_Links&amp;l_op=viewlinkdetails&amp;lid=([0-9]+)&amp;ttitle=([/:\-\'(){}.&amp;=_a-zA-Z0-9 ]*)"',
'"(?<!/)modules.php\?name=Web_Links&amp;l_op=viewlinkdetails&amp;lid=([0-9]+)"'
);

$urlout = array(
'viewlinkdetails-\\1-\\2.html',
'viewlinkdetails-\\1.html'
);

?>