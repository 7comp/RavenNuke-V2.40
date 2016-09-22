<?php
/************************************************************************
* Script:     TegoNuke(tm) ShortLinks for Contact Plus module - developed
*             by SpasticDonkey and provided by Slaytanic
* Version:    1.0
* Author:     Rob Herder (aka: montego) of http://montegoscripts.com
* Contact:    montego@montegoscripts.com
* Copyright:  Copyright © 2006 by Montego Scripts
* License:    GNU/GPL (see provided LICENSE.txt file)
************************************************************************/
//GT-NExtGEn 0.4/0.5 by Bill Murrin (Audioslaved) http://gt.audioslaved.com (c) 2004
//Original Nukecops GoogleTap done by NukeCops (http://www.nukecops.com)

$urlin = array(
'"(?<!/)modules.php\?name=Content&amp;pa=print_page&amp;pid=([0-9]*)"',
'"(?<!/)modules.php\?name=Content&amp;pa=print_pdf&amp;pid=([0-9]*)"',
'"(?<!/)modules.php\?name=Content&amp;pa=share_page&amp;op=FriendSend&amp;pid=([0-9]*)"',
'"(?<!/)modules.php\?name=Content&amp;pa=share_page&amp;op=SendPage&amp;pid=([0-9]*)"',
'"(?<!/)modules.php\?name=Content&amp;pa=showpage&amp;pid=([0-9]*)&amp;page=([0-9]*)"',
'"(?<!/)modules.php\?name=Content&amp;pa=list_pages_categories&amp;cid=([0-9]*)&amp;order=([0-9]*)"',
'"(?<!/)modules.php\?name=Content&amp;pa=list_pages_categories&amp;cid=([0-9]*)"',
'"(?<!/)modules.php\?name=Content&amp;pa=showpage&amp;pid=([0-9]*)"',
'"(?<!/)modules.php\?name=Content&amp;pa=send_page"',
'"(?<!/)modules.php\?name=Content&amp;pa=preview_page"',
'"(?<!/)modules.php\?name=Content&amp;pa=add_page"',
'"(?<!/)modules.php\?name=Content&amp;pa=browse_tag&amp;tag=([/:\-\'{}()\,\._&a-zA-Z0-9+= ]*)&amp;order=([0-9]*)"',
'"(?<!/)modules.php\?name=Content&amp;pa=browse_tag&amp;tag=([/:\-\'{}()\,\._&a-zA-Z0-9+= ]*)"',
'"(?<!/)modules.php\?name=Content&amp;pa=browse_tags"',
'"(?<!/)modules.php\?name=Content"'
);

$urlout = array(
'content-print-page-\\1.html',
'content-print-pdf-\\1.html',
'content-share-page-\\1.html',
'content-send-page-\\1.html',
'content-\\1-page\\2.html',
'content-cat-\\1-order-\\2.html',
'content-cat-\\1.html',
'content-\\1.html',
'content-send-page.html',
'content-preview-page.html',
'content-add-page.html',
'content-browse-tag-\\1-order-\\2.html',
'content-browse-tag-\\1.html',
'content-browse-tags.html',
'content.html'
);

?>