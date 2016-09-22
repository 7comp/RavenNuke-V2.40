<?php
/******************************************************************************
* Script:     TegoNuke(tm) ShortLinks "Page Tap" for the overall page to handle
*             header menu options and other misc "taps" (such as Messages)
*             rather than having to place these in each of the module tap files.
* Version:    1.2.2
* Author:     Rob Herder (aka: montego) of montegoscripts.com
* Contact:    montego@montegoscripts.com
* Copyright:  Copyright © 2006 - 2009 by Montego Scripts
* License:    GNU/GPL (see provided LICENSE.txt file)
******************************************************************************/
//http://ravennuke/modules.php?name=Forums&file=search&search_id=newposts
//http://ravennuke/modules.php?name=Forums&file=search&search_id=unanswered
//http://ravennuke/modules.php?name=Forums&file=search&search_id=egosearch

$urlin = array(
'"(?<!/)modules.php\?name=Advertising(?!&)"',
'"(?<!/)modules.php\?name=AvantGo(?!&)"',
'"(?<!/)modules.php\?name=Comments(?!&)"',
'"(?<!/)modules.php\?name=Content(?!&)"',
'"(?<!/)modules.php\?name=Downloads(?!&)"',
'"(?<!/)modules.php\?name=Encyclopedia(?!&)"',
'"(?<!/)modules.php\?name=FAQ(?!&)"',
'"(?<!/)modules.php\?name=Feedback(?!&)"',
'"(?<!/)modules.php\?name=Feeds(?!&)"',
'"(?<!/)modules.php\?name=Forums(?!&)"',
'"(?<!/)modules.php\?name=GCalendar(?!&)"',
'"(?<!/)modules.php\?name=Groups(?!&)"',
'"(?<!/)modules.php\?name=HTML_Newsletter(?!&)"',
'"(?<!/)modules.php\?name=Journal(?!&)"',
'"(?<!/)modules.php\?name=Legal(?!&)"',
'"(?<!/)modules.php\?name=Members_List(?!&)"',
'"(?<!/)modules.php\?name=News(?!&)"',
'"(?<!/)modules.php\?name=Private_Messages(?!&)"',
'"(?<!/)modules.php\?name=Project_Tracking(?!&)"',
'"(?<!/)modules.php\?name=Recommend_Us(?!&)"',
'"(?<!/)modules.php\?name=Reviews(?!&)"',
'"(?<!/)modules.php\?name=rwsMetAuthors(?!&)"',
'"(?<!/)modules.php\?name=Search(?!&)"',
'"(?<!/)modules.php\?name=Statistics(?!&)"',
'"(?<!/)modules.php\?name=Stories_Archive(?!&)"',
'"(?<!/)modules.php\?name=Submit_News(?!&)"',
'"(?<!/)modules.php\?name=Surveys(?!&)"',
'"(?<!/)modules.php\?name=Topics(?!&)"', // "Topics" MUST come before "Top" or the tap will get messed up
'"(?<!/)modules.php\?name=Top(?!&)"',
'"(?<!/)modules.php\?name=Web_Links(?!&)"',
'"(?<!/)modules.php\?name=Your_Account(?!&)"',
// Base module taps go above this line and more granular taps go below
'"(?<!/)modules.php\?name=Your_Account&amp;op=logout(?!&)"',
'"(?<!/)modules.php\?name=Your_Account&amp;op=new_user"',
'"modules.php\?name=Feeds&amp;fid=([0-9]*)&amp;type=RSS20"',
'"(?<!/)modules.php\?name=Legal&amp;op=([a-zA-Z0-9_-]*)(?!&)"',
'"(?<!/)modules.php\?name=Forums&amp;file=search&amp;search_id=(unanswered|egosearch|newposts)"'
);

$urlout = array(
'advertising.html',
'avantgo.html',
'comments.html',
'content.html',
'downloads.html',
'encyclopedia.html',
'faq.html',
'feedback.html',
'feeds.html',
'forums.html',
'eventscalendar.html',
'groups.html',
'html_newsletter.html',
'journal.html',
'legal.html',
'members.html',
'news.html',
'messages.html',
'project.html',
'recommend.html',
'reviews.html',
'metauthors.html',
'search.html',
'stats.html',
'archive.html',
'submit.html',
'surveys.html',
'topics.html', // "Topics" MUST come before "Top" or the tap will get messed up
'top.html',
'links.html',
'account.html',
// Base module taps go above this line and more granular taps go below
'account-logout.html',
'account-new_user.html',
'feeds-\\1-rss20.xml',
'legal-\\1.html',
'fsearch-\\1.html'
);

?>