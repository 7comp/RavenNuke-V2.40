<?php
/************************************************************************
* Script:     TegoNuke(tm) ShortLinks
* Version:    1.2.1
* Author:     Rob Herder (aka: montego) of http://montegoscripts.com
* Contact:    montego@montegoscripts.com
* Copyright:  Copyright © 2006-2007 by Montego Scripts
* License:    GNU/GPL (see provided LICENSE.txt file)
* Comments:   1.2.1 - ttitle was removed from RN2.10.01.
************************************************************************/
//GT-NExtGEn 0.4/0.5 by Bill Murrin (Audioslaved) http://gt.audioslaved.com (c) 2004
//Original Nukecops GoogleTap done by NukeCops (http://www.nukecops.com)

$urlin = array(
'"(?<!/)modules.php\?name=Downloads&amp;d_op=viewdownload(comments|details|editorial)&amp;lid=([0-9]*)&amp;ttitle=([/:\-\'{}()\,\._&a-zA-Z0-9+= ]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=viewdownload(comments|details|editorial)&amp;lid=([0-9]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=modifydownloadrequest&amp;lid=([0-9]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=brokendownload&amp;lid=([0-9]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=NewDownloads&amp;newdownloadshowdays=([0-9]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=NewDownloadsDate&amp;selectdate=([a-zA-Z0-9+]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=getit&amp;lid=([0-9]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=ratedownload&amp;lid=([0-9]*)&amp;ttitle=([/:\-\'{}()\,\._&amp;a-zA-Z0-9+= ]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=ratedownload&amp;lid=([0-9]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=(TopRated|MostPopular)&amp;ratenum=([0-9]*)&amp;ratetype=(num|percent)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=(AddDownload|NewDownloads|MostPopular|TopRated)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=viewdownload&amp;cid=([0-9]*)&amp;orderby=([a-zA-Z0-9+]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=viewdownload&amp;cid=([0-9]*)&amp;min=([0-9]*)&amp;orderby=([a-zA-Z0-9+]*)&amp;show=([0-9]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=search&amp;query=([/:\-\'{}()\,\._&a-zA-Z0-9+= ]*)&amp;min=([0-9]*)&amp;orderby=([a-zA-Z0-9+]*)&amp;show=([0-9]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=search&amp;query=([/:\-\'{}()\,\._&a-zA-Z0-9+= ]*)&amp;orderby=([a-zA-Z0-9+]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=search&amp;query=([/:\-\'{}()\,\._&a-zA-Z0-9+= ]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=outsidedownloadsetup&amp;lid=([0-9]*)"',
'"(?<!/)modules.php\?name=Downloads&amp;d_op=viewdownload&amp;cid=([0-9]*)"',
'"(?<!/)modules.php\?name=Downloads"'
);

$urlout = array(
'downloadview-\\1-\\2-\\3.html',
'downloadview-\\1-\\2.html',
'download-mod-\\1.html',
'download-broken-\\1.html',
'download-shownew-\\1.html',
'download-seldate-\\1.html',
'download-file-\\1.html',
'ratedownload-\\1-\\2.html',
'ratedownload-\\1.html',
'download-\\1-\\2-\\3.html',
'downloads-\\1.html',
'download\\1-orderby\\2.html',
'download\\1-\\2-\\3-\\4.html',
'download-search-\\1-\\2-\\3-\\4.html',
'download-search-\\1-\\2.html',
'download-search-\\1.html',
'download-outside-\\1.html',
'downloads-cat\\1.html',
'downloads.html'
);

?>