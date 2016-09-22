<?php
/************************************************************************
* Script:     TegoNuke(tm) ShortLinks
* Version:    1.2.0
* Author:     Rob Herder (aka: montego) of http://montegoscripts.com
* Contact:    montego@montegoscripts.com
* Copyright:  Copyright © 2007 by Montego Scripts
* License:    GNU/GPL (see provided LICENSE.txt file)
* Comments:   Initial creation for Comments module
************************************************************************/

$urlin = array(
'"(?<!/)modules.php\?name=Forums&amp;file=viewtopic&amp;p=([0-9]*)#([0-9]*)"',
'"(?<!/)modules.php\?name=News&amp;file=comments&amp;sid=([0-9]*)&amp;tid=([0-9]*)"',
'"(?<!/)modules.php\?name=News&amp;file=article&amp;sid=([0-9]*)"',
'"(?<!/)modules.php\?name=Reviews&amp;rop=showcontent&amp;id=([0-9]*)"',
'"(?<!/)modules.php\?name=Surveys&amp;file=comments&amp;pollID=([0-9]*)&amp;tid=([0-9]*)"',
'"(?<!/)modules.php\?name=Surveys&amp;op=results&amp;pollID=([0-9]*)"',
'"(?<!/)modules.php\?name=Your_Account&amp;op=userinfo&amp;username=([a-zA-Z0-9_-]*)"',
'"(?<!/)modules.php\?name=Comments"'
);

$urlout = array(
'ftopicp-\\1.html#\\2',
'article-comment-\\1-\\2.html',
'article\\1.html',
'reviews-\\1.html',
'survey-comment-\\1-\\2.html',
'survey-results-\\1.html',
'userinfo-\\1.html',
'comments.html'
);

?>