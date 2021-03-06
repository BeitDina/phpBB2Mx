<?php
/***************************************************************************
 *                               constants.php
 *                            -------------------
 *   begin                : Saturday', Feb 13', 2001
 *   copyright            : ('C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: constants.php,v 1.1 2010/10/10 15:05:27 orynider Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License', or
 *   ('at your option) any later version.
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

// Debug Level
$debug = 1; // Debugging on
//$debug = 0; // Debugging off
!defined('DEBUG') ? define('DEBUG', $debug) : false;

// FOUNDER ID, this is the ID of the main admin of the site, only this user can access special features of the site and this ID is also used to send Welcome and Birthday PM
define('FOUNDER_ID', 2);
// ALLOW ONLY FOUNDER ACP, by setting this to true only the FOUNDER will be able to access ACP
define('ONLY_FOUNDER_ACP', false);
// Insert here the IDs of the main admins separated by commas, they will be able to access special features in ACP
// Allowed features: Action Logs, Private Messages, DB Tools, Templates Edit (XS Style)
// If the constant is deleted then every admin is able to access the Full ACP
define('MAIN_ADMINS_ID', 2);

define('EMAILER_DISABLED', false);

// User Levels <- Do not change the values of USER or ADMIN
define('DELETED', -1);
define('ANONYMOUS', -1);
define('BOT', -2);

define('USER_NORMAL', 0);
define('USER_INACTIVE', 1);
define('USER_IGNORE', 2);
define('USER_FOUNDER', 3);

define('USER', 0);
define('ADMIN', 1);
define('MOD', 2);
define('GLOBAL_MOD', 3);
define('JUNIOR_ADMIN', 4);

// User related
define('USER_ACTIVATION_NONE', 0);
define('USER_ACTIVATION_SELF', 1);
define('USER_ACTIVATION_ADMIN', 2);

define('USER_AVATAR_NONE', 0);
define('USER_AVATAR_UPLOAD', 1);
define('USER_AVATAR_REMOTE', 2);
define('USER_AVATAR_GALLERY', 3);

define('AVATAR_UPLOAD', 1);
define('AVATAR_REMOTE', 2);
define('AVATAR_GALLERY', 3);

// Group settings
define('GROUP_OPEN', 0);
define('GROUP_CLOSED', 1);
define('GROUP_HIDDEN', 2);


// Forum state
define('FORUM_UNLOCKED', 0);
define('FORUM_LOCKED', 1);


// Topic status
define('TOPIC_UNLOCKED', 0);
define('TOPIC_LOCKED', 1);
define('TOPIC_MOVED', 2);
define('TOPIC_WATCH_NOTIFIED', 1);
define('TOPIC_WATCH_UN_NOTIFIED', 0);


// Topic types
define('POST_NORMAL', 0);
define('POST_STICKY', 1);
define('POST_ANNOUNCE', 2);
define('POST_GLOBAL_ANNOUNCE', 3);


// SQL codes
define('BEGIN_TRANSACTION', 1);
define('END_TRANSACTION', 2);


// Error codes
define('GENERAL_MESSAGE', 200);
define('GENERAL_ERROR', 202);
define('CRITICAL_MESSAGE', 203);
define('CRITICAL_ERROR', 204);

// URL PARAMETERS
define('ALBUM_SHOWPAGE', 'ALBUM_SHOWPAGE');  
define('ALBUM_PICM', 'ALBUM_PICM');
define('ALBUM_THUMBNAIL', 'ALBUM_THUMBNAIL');

// Private messaging
define('PRIVMSGS_READ_MAIL', 0);
define('PRIVMSGS_NEW_MAIL', 1);
define('PRIVMSGS_SENT_MAIL', 2);
define('PRIVMSGS_SAVED_IN_MAIL', 3);
define('PRIVMSGS_SAVED_OUT_MAIL', 4);
define('PRIVMSGS_UNREAD_MAIL', 5);


// URL PARAMETERS
define('POST_TOPIC_URL', 't');
define('POST_CAT_URL', 'c');
define('POST_FORUM_URL', 'f');
define('POST_USERS_URL', 'u');
define('POST_POST_URL', 'p');
define('POST_GROUPS_URL', 'g');

// Session parameters
define('SESSION_METHOD_COOKIE', 100);
define('SESSION_METHOD_GET', 101);


// Page numbers for session handling
// Page numbers for session handling <- this values by MJ, Fully Modded phpBBFM , and OryNider, MXP CMS 
!defined('PAGE_INDEX') ? define('PAGE_INDEX', 0) : false;
!defined('PAGE_LOGIN') ? define('PAGE_LOGIN', -1) : false;

@define('PAGE_HOME', 0);

!defined('PAGE_SEARCH') ? define('PAGE_SEARCH', -2) : false;
!defined('PAGE_REGISTER') ? define('PAGE_REGISTER', -3) : false;
!defined('PAGE_PROFILE') ? define('PAGE_PROFILE', -4) : false;

@define('PAGE_UCP', -4);

!defined('PAGE_VIEWONLINE') ? define('PAGE_VIEWONLINE', -6) : false;
!defined('PAGE_VIEWMEMBERS') ? define('PAGE_VIEWMEMBERS', -7) : false;

@define('PAGE_VIEWFORUM', 0);
@define('PAGE_VIEWFORUMLIST', 0);
@define('PAGE_VIEWTOPIC', 0);
@define('PAGE_PROFILE_MAIN', -4);

@define('PAGE_VIEWPROFILE', -5);
@define('PAGE_MEMBERLIST', -7);

!defined('PAGE_FAQ') ? define('PAGE_FAQ', -8) : false;

@define('PAGE_RULES', -8);

!defined('PAGE_POSTING') ? define('PAGE_POSTING', -9) : false;
!defined('PAGE_PRIVMSGS') ? define('PAGE_PRIVMSGS', -10) : false;
!defined('PAGE_GROUPCP') ? define('PAGE_GROUPCP', -11) : false;

@define('PAGE_GROUP_CP', -11); 

define('PAGE_PRIVMSG', -10);

define('PAGE_SMILES', -12);
define('PAGE_TELLFRIEND', -13);
// 14 defined in linksdb_constants.php
// 15 defined in pafiledb_constants.php
define('PAGE_TOPIC_VIEW', -16);
define('PAGE_DIGEST', -17);
define('PAGE_STAFF', -18);
// 19 - 22 defined in music/music_constants.php
define('PAGE_ATTACHMENTS', -23);
define('PAGE_BOOKIES', -24);
define('PAGE_BOOKIE_ALLSTATS', -25);
define('PAGE_BOOKIE_YOURSTATS', -26);
define('PAGE_CALENDAR', -27);
define('PAGE_BANK', -28);
define('PAGE_SHOP', -29);
define('PAGE_STATISTICS', -30);
define('PAGE_CARD', -31);
define('PAGE_RATINGS', -32);
define('PAGE_PORTAL', -33);
define('PAGE_CHATROOM', -34);
define('PAGE_IMLIST', -35);
define('PAGE_TOPLIST', -36);
define('PAGE_LOTTERY', -37);
define('PAGE_ACTIVITY', -38);
define('PAGE_PLAYING_GAMES', -39);
define('PAGE_CHARTS', -40);
define('PAGE_RSS', -41);
define('PAGE_BANLIST', -43);
define('PAGE_TOPICS_STARTED', -44);
define('PAGE_MEETING', -45);
define('PAGE_FORUM_TOUR', -46);
define('PAGE_HELPDESK', -47);
define('PAGE_THREAD_KICKER', -48);
define('PAGE_SHOUTBOX', -49); 
define('PAGE_SHOUTBOX_MAX', -49);
// 50 - 53 defined in album/album_constants.php
// 53 - 54 defined in attachments/constants.php change them if have conflict with album constants
define('PAGE_AUCTIONS', -55);
define('PAGE_MEDALS', -56);
define('PAGE_JOBS', -57);
define('PAGE_AVATAR_TOPLIST', -58);
define('PAGE_AVATAR_LIST', -59);
define('PAGE_GUESTBOOK', -60);
define('PAGE_SITEMAP', -61);
define('PAGE_REDIRECT', -62);
define('PAGE_LEXICON', -63);
define('PAGE_DRAFTS', -64);
define('PAGE_ERRORS', -65);

// Portal modules page numbers for session handling
define('PAGE_LINKS', -14);
define('PAGE_LINKDB', -14); // If this id generates a conflict with other mods, change it ;);

define('PAGE_DL_DEFAULT', -15);
define('PAGE_DLOAD', -15);
define('PAGE_DOWNLOAD', -15); // If this id generates a conflict with other mods, change it ;);

define('PAGE_MUSIC_DEFAULT', -19);
define('PAGE_MUSIC', -19);	// for Session Handling
define('PAGE_MUSIC_PERSONAL', -20);
define('PAGE_MUSIC_PICTURE', -21);
define('PAGE_MUSIC_SEARCH', -22);

define('PAGE_KB_DEFAULT', -42);
define('PAGE_KB', -42); // If this id generates a conflict with other mods, change it ;);

define('PAGE_ALBUM_DEFAULT', -50);
define('PAGE_ALBUM', -50);	// for Session Handling
define('PAGE_ALBUM_PERSONAL', -51);
define('PAGE_IMAGES', -52);
define('PAGE_ALBUM_PICTURE', -52);
define('PAGE_IMAGE_THUMBNAIL', -52);
define('PAGE_IMAGE_THUMBNAIL_S', -52);
define('PAGE_ALBUM_SEARCH', -53);
define('PAGE_ALBUM_RSS', -54);

define('PAGE_NEWS', -77);
define('PAGE_NEWSSUITE', -77);

define('PAGE_MODULE_ADMIN', -78);
define('PAGE_PORTAL_ADMIN', -79);
define('PAGE_META_ADMIN', -80);
define('PAGE_ADS', -81);
define('PAGE_ADS_POST'  , -82);
define('PAGE_ADS_ADMIN'   , -83);

define('PAGE_WELCOME'   , -84);
define('PAGE_WELCOME_ADMIN', -85);

define('PAGE_WEATHER', -86);
define('PAGE_WEATHER_EDIT', -87);

define('PAGE_URL', -88);

//define('PAGE_CALENDAR', -91);

define('PAGE_RECENT', -92);
define('PAGE_REFERERS', -93);

define('PAGE_AJAX_CHAT', -94); // for Session Handling
define('PAGE_AJAX_SHOUTBOX', -95);

define('PAGE_ANNOUNCEMENT', -75);
define('PAGE_ANNOUNCEMENT_ADMIN'   , -76);

define('PAGE_CONTACT_US', -98);

// Portal page numbers for session handling
define('PAGE_FORUM', -70);
define('PAGE_MENU_NAV', -71);
define('PAGE_MENU_ADMIN', -72);
define('PAGE_POLL', -73);
define('PAGE_LAST_MSG', -74);
//define('PAGE_STATISTICS', -90);
define('PAGE_CREDITS', -99);
define('PAGE_TAGS', -100);

!defined('PAGE_TOPIC_OFFSET') ? define('PAGE_TOPIC_OFFSET', 5000) : false;;

// You can customize this page
// BBCode UID length
define('BBCODE_UID_LEN', 8);

// Number of core BBCodes
define('NUM_CORE_BBCODES', 12);
define('NUM_PREDEFINED_BBCODES', 22);

// BBCode IDs
define('BBCODE_ID_QUOTE', 0);
define('BBCODE_ID_B', 1);
define('BBCODE_ID_I', 2);
define('BBCODE_ID_URL', 3);
define('BBCODE_ID_IMG', 4);
define('BBCODE_ID_SIZE', 5);
define('BBCODE_ID_COLOR', 6);
define('BBCODE_ID_U', 7);
define('BBCODE_ID_CODE', 8);
define('BBCODE_ID_LIST', 9);
define('BBCODE_ID_EMAIL', 10);
define('BBCODE_ID_FLASH', 11);
define('BBCODE_ID_ATTACH', 12);

// BBCode hard limit
define('BBCODE_LIMIT', 1511);

// Smiley hard limit
define('SMILEY_LIMIT', 1000);
 

// Auth settings
@define('AUTH_LIST_ALL', 0);
@define('AUTH_ALL', 0);

// Auth settings - Levels
@define('AUTH_NONE', -1);
@define('AUTH_LIST_ALL', 0);
@define('AUTH_ALL', 0);
@define('AUTH_REG', 1);
@define('AUTH_ACL', 2);
@define('AUTH_MOD', 3);
@define('AUTH_JADMIN', 4);
@define('AUTH_ADMIN', 5);
@define('AUTH_MAIN_ADMIN', 6);
@define('AUTH_FOUNDER', 7);
@define('AUTH_OWNER', 8);
// Self AUTH - BEGIN
@define('AUTH_SELF', 9);
// Self AUTH - END
@define('AUTH_GUEST_ONLY', 10);
@define('AUTH_GUEST_ONLY_STRICT', 11);

@define('AUTH_VIEW', 1);
@define('AUTH_READ', 2);
@define('AUTH_POST', 3);
@define('AUTH_REPLY', 4);
@define('AUTH_EDIT', 5);
@define('AUTH_DENNOUNCE', 7);
@define('AUTH_SLETE', 6);
@define('AUTH_ATICKY', 8);
@define('AUTH_POLLCREATE', 9);
@define('AUTH_VOTE', 10);
@define('AUTH_ATTACH', 11);
@define('AUTH_CAL', 12);
@define('AUTH_POLLCREATE', 13);
@define('AUTH_ATTACHMENTS', 14);
@define('AUTH_DOWNLOAD', 15);
@define('AUTH_BAN', 16);
@define('AUTH_GREENCARD', 17);
@define('AUTH_BLUECARD', 18);
@define('AUTH_RATE', 19);
@define('AUTH_NEWS', 20);
@define('AUTH_GLOBALANNOUNCE', 21);

/**#@+*/
// Script Time Limit: if your site is large you may want to set a time limit to force scripts shut down and avoid server overload
define('TIME_LIMIT', 30); // Script Time Limit in seconds

// Session Refresh Seconds
define('SESSION_REFRESH', 120); // Session Refresh Time (Seconds)
define('ONLINE_REFRESH', 300); // Online Refresh Time (Seconds)
/**#@-*/

// Event Registration - BEGIN
define('REG_OPTION1', 1);
define('REG_OPTION2', 2);
define('REG_OPTION3', 3);
define('REG_UNREGISTER', 4);
// Event Registration - END

// Some of the most used colors names
define('RGB_COLORS_LIST', 'aqua,black,blue,brown,cadetblue,chocolate,crimson,cyan,darkblue,darkgreen,darkgrey,darkorchid,darkred,deepskyblue,fuchsia,gold,gray,green,indigo,lightgrey,lime,maroon,navy,olive,orange,peachpuff,purple,red,seagreen,silver,teal,violet,white,yellow');

// Do not insert anything but tables below!
// Table names
define('ACRONYMS_TABLE', $table_prefix . 'acronyms');
define('CONFIRM_TABLE', $table_prefix.'confirm');
define('AUTH_ACCESS_TABLE', $table_prefix.'auth_access');
define('BANLIST_TABLE', $table_prefix.'banlist');
define('BBCODES_TABLE', $table_prefix . 'bbcodes');
define('BOTS_TABLE', $table_prefix . 'bots');
define('CATEGORIES_TABLE', $table_prefix.'categories');
define('CONFIG_TABLE', $table_prefix.'config');
define('DISALLOW_TABLE', $table_prefix.'disallow');
define('FORUMS_TABLE', $table_prefix.'forums');
define('GROUPS_TABLE', $table_prefix.'groups');
define('IMAGES_TABLE', $table_prefix . 'images');
define('LOGINS_TABLE', $table_prefix . 'logins');
define('LOG_TABLE', $table_prefix . 'log');
define('LOGS_TABLE', $table_prefix . 'logs');
define('POSTS_TABLE', $table_prefix.'posts');
define('POSTS_TEXT_TABLE', $table_prefix.'posts_text');
define('PRIVMSGS_TABLE', $table_prefix.'privmsgs');
define('PRIVMSGS_TEXT_TABLE', $table_prefix.'privmsgs_text');
define('PRIVMSGS_IGNORE_TABLE', $table_prefix.'privmsgs_ignore');
define('PRUNE_TABLE', $table_prefix.'forum_prune');
define('RANKS_TABLE', $table_prefix.'ranks');
define('SEARCH_TABLE', $table_prefix.'search_results');
define('SEARCH_WORD_TABLE', $table_prefix.'search_wordlist');
define('SEARCH_MATCH_TABLE', $table_prefix.'search_wordmatch');
define('SESSIONS_TABLE', $table_prefix.'sessions');
define('SESSIONS_KEYS_TABLE', $table_prefix.'sessions_keys');
define('SMILIES_TABLE', $table_prefix.'smilies');
define('LANG_FLAGS_TABLE', $table_prefix . 'lang_flags');
define('FLAG_TABLE', $table_prefix.'flags'); //Country Flags Table
define('THEMES_TABLE', $table_prefix.'themes');
define('THEMES_NAME_TABLE', $table_prefix.'themes_name');
define('TOPICS_TABLE', $table_prefix.'topics');
define('TOPICS_WATCH_TABLE', $table_prefix.'topics_watch');
define('USER_GROUP_TABLE', $table_prefix.'user_group');
define('USERS_TABLE', $table_prefix.'users');
define('WORDS_TABLE', $table_prefix.'words');
define('VOTE_DESC_TABLE', $table_prefix.'vote_desc');
define('VOTE_RESULTS_TABLE', $table_prefix.'vote_results');
define('VOTE_USERS_TABLE', $table_prefix.'vote_voters');
define('ZEBRA_TABLE', $table_prefix . 'zebra');
?>