<?php

// eXtreme Styles mod cache. Generated on Wed, 26 Sep 2018 03:00:55 +0000 (time=1537930855)

?><h1><?php echo isset($this->vars['L_CONFIGURATION_TITLE']) ? $this->vars['L_CONFIGURATION_TITLE'] : $this->lang('L_CONFIGURATION_TITLE'); ?></h1>
<p><?php echo isset($this->vars['L_CONFIGURATION_EXPLAIN']) ? $this->vars['L_CONFIGURATION_EXPLAIN'] : $this->lang('L_CONFIGURATION_EXPLAIN'); ?></p>
<form action="<?php echo isset($this->vars['S_CONFIG_ACTION']) ? $this->vars['S_CONFIG_ACTION'] : $this->lang('S_CONFIG_ACTION'); ?>" method="post">
<fieldset>
	<legend><?php echo isset($this->vars['L_GENERAL_SETTINGS']) ? $this->vars['L_GENERAL_SETTINGS'] : $this->lang('L_GENERAL_SETTINGS'); ?></legend>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SERVER_NAME']) ? $this->vars['L_SERVER_NAME'] : $this->lang('L_SERVER_NAME'); ?>:</label></dt>
		<dd><input type="text" maxlength="255" size="40" name="server_name" value="<?php echo isset($this->vars['SERVER_NAME']) ? $this->vars['SERVER_NAME'] : $this->lang('SERVER_NAME'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SERVER_PORT']) ? $this->vars['L_SERVER_PORT'] : $this->lang('L_SERVER_PORT'); ?>:</label><br /><span><?php echo isset($this->vars['L_SERVER_PORT_EXPLAIN']) ? $this->vars['L_SERVER_PORT_EXPLAIN'] : $this->lang('L_SERVER_PORT_EXPLAIN'); ?></span></dt>
		<dd><input type="text" maxlength="5" size="5" name="server_port" value="<?php echo isset($this->vars['SERVER_PORT']) ? $this->vars['SERVER_PORT'] : $this->lang('SERVER_PORT'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SCRIPT_PATH']) ? $this->vars['L_SCRIPT_PATH'] : $this->lang('L_SCRIPT_PATH'); ?>:</label><br /><span><?php echo isset($this->vars['L_SCRIPT_PATH_EXPLAIN']) ? $this->vars['L_SCRIPT_PATH_EXPLAIN'] : $this->lang('L_SCRIPT_PATH_EXPLAIN'); ?></span></dt>
		<dd><input type="text" maxlength="255" name="script_path" value="<?php echo isset($this->vars['SCRIPT_PATH']) ? $this->vars['SCRIPT_PATH'] : $this->lang('SCRIPT_PATH'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SITE_NAME']) ? $this->vars['L_SITE_NAME'] : $this->lang('L_SITE_NAME'); ?>:</label><br /><span><?php echo isset($this->vars['L_SITE_NAME_EXPLAIN']) ? $this->vars['L_SITE_NAME_EXPLAIN'] : $this->lang('L_SITE_NAME_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="25" maxlength="100" name="sitename" value="<?php echo isset($this->vars['SITENAME']) ? $this->vars['SITENAME'] : $this->lang('SITENAME'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SITE_DESCRIPTION']) ? $this->vars['L_SITE_DESCRIPTION'] : $this->lang('L_SITE_DESCRIPTION'); ?>:</label></dt>
		<dd><input type="text" size="40" maxlength="255" name="site_desc" value="<?php echo isset($this->vars['SITE_DESCRIPTION']) ? $this->vars['SITE_DESCRIPTION'] : $this->lang('SITE_DESCRIPTION'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_DISABLE_BOARD']) ? $this->vars['L_DISABLE_BOARD'] : $this->lang('L_DISABLE_BOARD'); ?>:</label><br /><span><?php echo isset($this->vars['L_DISABLE_BOARD_EXPLAIN']) ? $this->vars['L_DISABLE_BOARD_EXPLAIN'] : $this->lang('L_DISABLE_BOARD_EXPLAIN'); ?></span></dt>
		<dd><input type="radio" class="radio" name="board_disable" value="1" <?php echo isset($this->vars['S_DISABLE_BOARD_YES']) ? $this->vars['S_DISABLE_BOARD_YES'] : $this->lang('S_DISABLE_BOARD_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="board_disable" value="0" <?php echo isset($this->vars['S_DISABLE_BOARD_NO']) ? $this->vars['S_DISABLE_BOARD_NO'] : $this->lang('S_DISABLE_BOARD_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ACCT_ACTIVATION']) ? $this->vars['L_ACCT_ACTIVATION'] : $this->lang('L_ACCT_ACTIVATION'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="require_activation" value="<?php echo isset($this->vars['ACTIVATION_NONE']) ? $this->vars['ACTIVATION_NONE'] : $this->lang('ACTIVATION_NONE'); ?>" <?php echo isset($this->vars['ACTIVATION_NONE_CHECKED']) ? $this->vars['ACTIVATION_NONE_CHECKED'] : $this->lang('ACTIVATION_NONE_CHECKED'); ?> /><?php echo isset($this->vars['L_NONE']) ? $this->vars['L_NONE'] : $this->lang('L_NONE'); ?>&nbsp; &nbsp;<input type="radio" class="radio" name="require_activation" value="<?php echo isset($this->vars['ACTIVATION_USER']) ? $this->vars['ACTIVATION_USER'] : $this->lang('ACTIVATION_USER'); ?>" <?php echo isset($this->vars['ACTIVATION_USER_CHECKED']) ? $this->vars['ACTIVATION_USER_CHECKED'] : $this->lang('ACTIVATION_USER_CHECKED'); ?> /><?php echo isset($this->vars['L_USER']) ? $this->vars['L_USER'] : $this->lang('L_USER'); ?>&nbsp; &nbsp;<input type="radio" class="radio" name="require_activation" value="<?php echo isset($this->vars['ACTIVATION_ADMIN']) ? $this->vars['ACTIVATION_ADMIN'] : $this->lang('ACTIVATION_ADMIN'); ?>" <?php echo isset($this->vars['ACTIVATION_ADMIN_CHECKED']) ? $this->vars['ACTIVATION_ADMIN_CHECKED'] : $this->lang('ACTIVATION_ADMIN_CHECKED'); ?> /><?php echo isset($this->vars['L_ADMIN']) ? $this->vars['L_ADMIN'] : $this->lang('L_ADMIN'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_VISUAL_CONFIRM']) ? $this->vars['L_VISUAL_CONFIRM'] : $this->lang('L_VISUAL_CONFIRM'); ?>:</label><br /><span><?php echo isset($this->vars['L_VISUAL_CONFIRM_EXPLAIN']) ? $this->vars['L_VISUAL_CONFIRM_EXPLAIN'] : $this->lang('L_VISUAL_CONFIRM_EXPLAIN'); ?></span></dt>
		<dd><input type="radio" class="radio" name="enable_confirm" value="1" <?php echo isset($this->vars['CONFIRM_ENABLE']) ? $this->vars['CONFIRM_ENABLE'] : $this->lang('CONFIRM_ENABLE'); ?> /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp; &nbsp;<input type="radio" class="radio" name="enable_confirm" value="0" <?php echo isset($this->vars['CONFIRM_DISABLE']) ? $this->vars['CONFIRM_DISABLE'] : $this->lang('CONFIRM_DISABLE'); ?> /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ALLOW_AUTOLOGIN']) ? $this->vars['L_ALLOW_AUTOLOGIN'] : $this->lang('L_ALLOW_AUTOLOGIN'); ?>:</label><br /><span><?php echo isset($this->vars['L_ALLOW_AUTOLOGIN_EXPLAIN']) ? $this->vars['L_ALLOW_AUTOLOGIN_EXPLAIN'] : $this->lang('L_ALLOW_AUTOLOGIN_EXPLAIN'); ?></span></dt>
		<dd><input type="radio" class="radio" name="allow_autologin" value="1" <?php echo isset($this->vars['ALLOW_AUTOLOGIN_YES']) ? $this->vars['ALLOW_AUTOLOGIN_YES'] : $this->lang('ALLOW_AUTOLOGIN_YES'); ?> /><?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp; &nbsp;<input type="radio" class="radio" name="allow_autologin" value="0" <?php echo isset($this->vars['ALLOW_AUTOLOGIN_NO']) ? $this->vars['ALLOW_AUTOLOGIN_NO'] : $this->lang('ALLOW_AUTOLOGIN_NO'); ?> /><?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_AUTOLOGIN_TIME']) ? $this->vars['L_AUTOLOGIN_TIME'] : $this->lang('L_AUTOLOGIN_TIME'); ?>:</label><br /><span><?php echo isset($this->vars['L_ALLOW_AUTOLOGIN_EXPLAIN']) ? $this->vars['L_ALLOW_AUTOLOGIN_EXPLAIN'] : $this->lang('L_ALLOW_AUTOLOGIN_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="3" maxlength="4" name="max_autologin_time" value="<?php echo isset($this->vars['AUTOLOGIN_TIME']) ? $this->vars['AUTOLOGIN_TIME'] : $this->lang('AUTOLOGIN_TIME'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_BOARD_EMAIL_FORM']) ? $this->vars['L_BOARD_EMAIL_FORM'] : $this->lang('L_BOARD_EMAIL_FORM'); ?>:</label><br /><span><?php echo isset($this->vars['L_BOARD_EMAIL_FORM_EXPLAIN']) ? $this->vars['L_BOARD_EMAIL_FORM_EXPLAIN'] : $this->lang('L_BOARD_EMAIL_FORM_EXPLAIN'); ?></span></dt>
		<dd><input type="radio" class="radio" name="board_email_form" value="1" <?php echo isset($this->vars['BOARD_EMAIL_FORM_ENABLE']) ? $this->vars['BOARD_EMAIL_FORM_ENABLE'] : $this->lang('BOARD_EMAIL_FORM_ENABLE'); ?> /> <?php echo isset($this->vars['L_ENABLED']) ? $this->vars['L_ENABLED'] : $this->lang('L_ENABLED'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="board_email_form" value="0" <?php echo isset($this->vars['BOARD_EMAIL_FORM_DISABLE']) ? $this->vars['BOARD_EMAIL_FORM_DISABLE'] : $this->lang('BOARD_EMAIL_FORM_DISABLE'); ?> /> <?php echo isset($this->vars['L_DISABLED']) ? $this->vars['L_DISABLED'] : $this->lang('L_DISABLED'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_FLOOD_INTERVAL']) ? $this->vars['L_FLOOD_INTERVAL'] : $this->lang('L_FLOOD_INTERVAL'); ?>:</label><br /><span><?php echo isset($this->vars['L_FLOOD_INTERVAL_EXPLAIN']) ? $this->vars['L_FLOOD_INTERVAL_EXPLAIN'] : $this->lang('L_FLOOD_INTERVAL_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="3" maxlength="4" name="flood_interval" value="<?php echo isset($this->vars['FLOOD_INTERVAL']) ? $this->vars['FLOOD_INTERVAL'] : $this->lang('FLOOD_INTERVAL'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SEARCH_FLOOD_INTERVAL']) ? $this->vars['L_SEARCH_FLOOD_INTERVAL'] : $this->lang('L_SEARCH_FLOOD_INTERVAL'); ?>:</label><br /><span><?php echo isset($this->vars['L_SEARCH_FLOOD_INTERVAL_EXPLAIN']) ? $this->vars['L_SEARCH_FLOOD_INTERVAL_EXPLAIN'] : $this->lang('L_SEARCH_FLOOD_INTERVAL_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="3" maxlength="4" name="search_flood_interval" value="<?php echo isset($this->vars['SEARCH_FLOOD_INTERVAL']) ? $this->vars['SEARCH_FLOOD_INTERVAL'] : $this->lang('SEARCH_FLOOD_INTERVAL'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_MAX_LOGIN_ATTEMPTS']) ? $this->vars['L_MAX_LOGIN_ATTEMPTS'] : $this->lang('L_MAX_LOGIN_ATTEMPTS'); ?>:</label><br /><span><?php echo isset($this->vars['L_MAX_LOGIN_ATTEMPTS_EXPLAIN']) ? $this->vars['L_MAX_LOGIN_ATTEMPTS_EXPLAIN'] : $this->lang('L_MAX_LOGIN_ATTEMPTS_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="3" maxlength="4" name="max_login_attempts" value="<?php echo isset($this->vars['MAX_LOGIN_ATTEMPTS']) ? $this->vars['MAX_LOGIN_ATTEMPTS'] : $this->lang('MAX_LOGIN_ATTEMPTS'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_LOGIN_RESET_TIME']) ? $this->vars['L_LOGIN_RESET_TIME'] : $this->lang('L_LOGIN_RESET_TIME'); ?>:</label><br /><span><?php echo isset($this->vars['L_LOGIN_RESET_TIME_EXPLAIN']) ? $this->vars['L_LOGIN_RESET_TIME_EXPLAIN'] : $this->lang('L_LOGIN_RESET_TIME_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="3" maxlength="4" name="login_reset_time" value="<?php echo isset($this->vars['LOGIN_RESET_TIME']) ? $this->vars['LOGIN_RESET_TIME'] : $this->lang('LOGIN_RESET_TIME'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_TOPICS_PER_PAGE']) ? $this->vars['L_TOPICS_PER_PAGE'] : $this->lang('L_TOPICS_PER_PAGE'); ?>:</label></dt>
		<dd><input type="text" name="topics_per_page" size="3" maxlength="4" value="<?php echo isset($this->vars['TOPICS_PER_PAGE']) ? $this->vars['TOPICS_PER_PAGE'] : $this->lang('TOPICS_PER_PAGE'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_POSTS_PER_PAGE']) ? $this->vars['L_POSTS_PER_PAGE'] : $this->lang('L_POSTS_PER_PAGE'); ?>:</label></dt>
		<dd><input type="text" name="posts_per_page" size="3" maxlength="4" value="<?php echo isset($this->vars['POSTS_PER_PAGE']) ? $this->vars['POSTS_PER_PAGE'] : $this->lang('POSTS_PER_PAGE'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_HOT_THRESHOLD']) ? $this->vars['L_HOT_THRESHOLD'] : $this->lang('L_HOT_THRESHOLD'); ?>:</label></dt>
		<dd><input type="text" name="hot_threshold" size="3" maxlength="4" value="<?php echo isset($this->vars['HOT_TOPIC']) ? $this->vars['HOT_TOPIC'] : $this->lang('HOT_TOPIC'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_DEFAULT_STYLE']) ? $this->vars['L_DEFAULT_STYLE'] : $this->lang('L_DEFAULT_STYLE'); ?>:</label></dt>
		<dd><?php echo isset($this->vars['STYLE_SELECT']) ? $this->vars['STYLE_SELECT'] : $this->lang('STYLE_SELECT'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_OVERRIDE_STYLE']) ? $this->vars['L_OVERRIDE_STYLE'] : $this->lang('L_OVERRIDE_STYLE'); ?>:</label><br /><span><?php echo isset($this->vars['L_OVERRIDE_STYLE_EXPLAIN']) ? $this->vars['L_OVERRIDE_STYLE_EXPLAIN'] : $this->lang('L_OVERRIDE_STYLE_EXPLAIN'); ?></span></dt>
		<dd><input type="radio" class="radio" name="override_user_style" value="1" <?php echo isset($this->vars['OVERRIDE_STYLE_YES']) ? $this->vars['OVERRIDE_STYLE_YES'] : $this->lang('OVERRIDE_STYLE_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="override_user_style" value="0" <?php echo isset($this->vars['OVERRIDE_STYLE_NO']) ? $this->vars['OVERRIDE_STYLE_NO'] : $this->lang('OVERRIDE_STYLE_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_DEFAULT_LANGUAGE']) ? $this->vars['L_DEFAULT_LANGUAGE'] : $this->lang('L_DEFAULT_LANGUAGE'); ?>:</label></dt>
		<dd><?php echo isset($this->vars['LANG_SELECT']) ? $this->vars['LANG_SELECT'] : $this->lang('LANG_SELECT'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_DATE_FORMAT']) ? $this->vars['L_DATE_FORMAT'] : $this->lang('L_DATE_FORMAT'); ?>:</label><br /><span><?php echo isset($this->vars['L_DATE_FORMAT_EXPLAIN']) ? $this->vars['L_DATE_FORMAT_EXPLAIN'] : $this->lang('L_DATE_FORMAT_EXPLAIN'); ?></span></dt>
		<dd><input type="text" name="default_dateformat" value="<?php echo isset($this->vars['DEFAULT_DATEFORMAT']) ? $this->vars['DEFAULT_DATEFORMAT'] : $this->lang('DEFAULT_DATEFORMAT'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SYSTEM_TIMEZONE']) ? $this->vars['L_SYSTEM_TIMEZONE'] : $this->lang('L_SYSTEM_TIMEZONE'); ?>:</label></dt>
		<dd><?php echo isset($this->vars['TIMEZONE_SELECT']) ? $this->vars['TIMEZONE_SELECT'] : $this->lang('TIMEZONE_SELECT'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ENABLE_GZIP']) ? $this->vars['L_ENABLE_GZIP'] : $this->lang('L_ENABLE_GZIP'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="gzip_compress" value="1" <?php echo isset($this->vars['GZIP_YES']) ? $this->vars['GZIP_YES'] : $this->lang('GZIP_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="gzip_compress" value="0" <?php echo isset($this->vars['GZIP_NO']) ? $this->vars['GZIP_NO'] : $this->lang('GZIP_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ENABLE_PRUNE']) ? $this->vars['L_ENABLE_PRUNE'] : $this->lang('L_ENABLE_PRUNE'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="prune_enable" value="1" <?php echo isset($this->vars['PRUNE_YES']) ? $this->vars['PRUNE_YES'] : $this->lang('PRUNE_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="prune_enable" value="0" <?php echo isset($this->vars['PRUNE_NO']) ? $this->vars['PRUNE_NO'] : $this->lang('PRUNE_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
</fieldset>
<fieldset>
	<legend><?php echo isset($this->vars['L_COOKIE_SETTINGS']) ? $this->vars['L_COOKIE_SETTINGS'] : $this->lang('L_COOKIE_SETTINGS'); ?></legend>
	<dl>
		<dt><label><?php echo isset($this->vars['L_COOKIE_DOMAIN']) ? $this->vars['L_COOKIE_DOMAIN'] : $this->lang('L_COOKIE_DOMAIN'); ?>:</label></dt>
		<dd><input type="text" maxlength="255" name="cookie_domain" value="<?php echo isset($this->vars['COOKIE_DOMAIN']) ? $this->vars['COOKIE_DOMAIN'] : $this->lang('COOKIE_DOMAIN'); ?>" /</dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_COOKIE_NAME']) ? $this->vars['L_COOKIE_NAME'] : $this->lang('L_COOKIE_NAME'); ?>:</label></dt>
		<dd><input type="text" maxlength="16" name="cookie_name" value="<?php echo isset($this->vars['COOKIE_NAME']) ? $this->vars['COOKIE_NAME'] : $this->lang('COOKIE_NAME'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_COOKIE_PATH']) ? $this->vars['L_COOKIE_PATH'] : $this->lang('L_COOKIE_PATH'); ?>:</label></dt>
		<dd><input type="text" maxlength="255" size="40" name="server_name" value="<?php echo isset($this->vars['SERVER_NAME']) ? $this->vars['SERVER_NAME'] : $this->lang('SERVER_NAME'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_COOKIE_SECURE']) ? $this->vars['L_COOKIE_SECURE'] : $this->lang('L_COOKIE_SECURE'); ?>:</label><br /><span><?php echo isset($this->vars['L_COOKIE_SECURE_EXPLAIN']) ? $this->vars['L_COOKIE_SECURE_EXPLAIN'] : $this->lang('L_COOKIE_SECURE_EXPLAIN'); ?></span></dt>
		<dd><input type="radio" class="radio" name="cookie_secure" value="0" <?php echo isset($this->vars['S_COOKIE_SECURE_DISABLED']) ? $this->vars['S_COOKIE_SECURE_DISABLED'] : $this->lang('S_COOKIE_SECURE_DISABLED'); ?> /><?php echo isset($this->vars['L_DISABLED']) ? $this->vars['L_DISABLED'] : $this->lang('L_DISABLED'); ?>&nbsp; &nbsp;<input type="radio" class="radio" name="cookie_secure" value="1" <?php echo isset($this->vars['S_COOKIE_SECURE_ENABLED']) ? $this->vars['S_COOKIE_SECURE_ENABLED'] : $this->lang('S_COOKIE_SECURE_ENABLED'); ?> /><?php echo isset($this->vars['L_ENABLED']) ? $this->vars['L_ENABLED'] : $this->lang('L_ENABLED'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SESSION_LENGTH']) ? $this->vars['L_SESSION_LENGTH'] : $this->lang('L_SESSION_LENGTH'); ?>:</label></dt>
		<dd><input type="text" maxlength="5" size="5" name="session_length" value="<?php echo isset($this->vars['SESSION_LENGTH']) ? $this->vars['SESSION_LENGTH'] : $this->lang('SESSION_LENGTH'); ?>" /></dd>
	</dl>
</fieldset>
<fieldset>
	<legend><?php echo isset($this->vars['L_PRIVATE_MESSAGING']) ? $this->vars['L_PRIVATE_MESSAGING'] : $this->lang('L_PRIVATE_MESSAGING'); ?></legend>
	<dl>
		<dt><label><?php echo isset($this->vars['L_DISABLE_PRIVATE_MESSAGING']) ? $this->vars['L_DISABLE_PRIVATE_MESSAGING'] : $this->lang('L_DISABLE_PRIVATE_MESSAGING'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="privmsg_disable" value="0" <?php echo isset($this->vars['S_PRIVMSG_ENABLED']) ? $this->vars['S_PRIVMSG_ENABLED'] : $this->lang('S_PRIVMSG_ENABLED'); ?> /><?php echo isset($this->vars['L_ENABLED']) ? $this->vars['L_ENABLED'] : $this->lang('L_ENABLED'); ?>&nbsp; &nbsp;<input type="radio" class="radio" name="privmsg_disable" value="1" <?php echo isset($this->vars['S_PRIVMSG_DISABLED']) ? $this->vars['S_PRIVMSG_DISABLED'] : $this->lang('S_PRIVMSG_DISABLED'); ?> /><?php echo isset($this->vars['L_DISABLED']) ? $this->vars['L_DISABLED'] : $this->lang('L_DISABLED'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_INBOX_LIMIT']) ? $this->vars['L_INBOX_LIMIT'] : $this->lang('L_INBOX_LIMIT'); ?>:</label></dt>
		<dd><input type="text" maxlength="4" size="4" name="max_inbox_privmsgs" value="<?php echo isset($this->vars['INBOX_LIMIT']) ? $this->vars['INBOX_LIMIT'] : $this->lang('INBOX_LIMIT'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SENTBOX_LIMIT']) ? $this->vars['L_SENTBOX_LIMIT'] : $this->lang('L_SENTBOX_LIMIT'); ?>:</label></dt>
		<dd><input type="text" maxlength="4" size="4" name="max_sentbox_privmsgs" value="<?php echo isset($this->vars['SENTBOX_LIMIT']) ? $this->vars['SENTBOX_LIMIT'] : $this->lang('SENTBOX_LIMIT'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SAVEBOX_LIMIT']) ? $this->vars['L_SAVEBOX_LIMIT'] : $this->lang('L_SAVEBOX_LIMIT'); ?>:</label></dt>
		<dd><input type="text" maxlength="4" size="4" name="max_savebox_privmsgs" value="<?php echo isset($this->vars['SAVEBOX_LIMIT']) ? $this->vars['SAVEBOX_LIMIT'] : $this->lang('SAVEBOX_LIMIT'); ?>" /></dd>
	</dl>
</fieldset>
<fieldset>
	<legend><?php echo isset($this->vars['L_ABILITIES_SETTINGS']) ? $this->vars['L_ABILITIES_SETTINGS'] : $this->lang('L_ABILITIES_SETTINGS'); ?></legend>
	<dl>
		<dt><label><?php echo isset($this->vars['L_MAX_POLL_OPTIONS']) ? $this->vars['L_MAX_POLL_OPTIONS'] : $this->lang('L_MAX_POLL_OPTIONS'); ?>:</label></dt>
		<dd><input type="text" name="max_poll_options" size="4" maxlength="4" value="<?php echo isset($this->vars['MAX_POLL_OPTIONS']) ? $this->vars['MAX_POLL_OPTIONS'] : $this->lang('MAX_POLL_OPTIONS'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ALLOW_HTML']) ? $this->vars['L_ALLOW_HTML'] : $this->lang('L_ALLOW_HTML'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="allow_html" value="1" <?php echo isset($this->vars['HTML_YES']) ? $this->vars['HTML_YES'] : $this->lang('HTML_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="allow_html" value="0" <?php echo isset($this->vars['HTML_NO']) ? $this->vars['HTML_NO'] : $this->lang('HTML_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ALLOWED_TAGS']) ? $this->vars['L_ALLOWED_TAGS'] : $this->lang('L_ALLOWED_TAGS'); ?>:</label><br /><span><?php echo isset($this->vars['L_ALLOWED_TAGS_EXPLAIN']) ? $this->vars['L_ALLOWED_TAGS_EXPLAIN'] : $this->lang('L_ALLOWED_TAGS_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="30" maxlength="255" name="allow_html_tags" value="<?php echo isset($this->vars['HTML_TAGS']) ? $this->vars['HTML_TAGS'] : $this->lang('HTML_TAGS'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ALLOW_BBCODE']) ? $this->vars['L_ALLOW_BBCODE'] : $this->lang('L_ALLOW_BBCODE'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="allow_bbcode" value="1" <?php echo isset($this->vars['BBCODE_YES']) ? $this->vars['BBCODE_YES'] : $this->lang('BBCODE_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="allow_bbcode" value="0" <?php echo isset($this->vars['BBCODE_NO']) ? $this->vars['BBCODE_NO'] : $this->lang('BBCODE_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ALLOW_SMILIES']) ? $this->vars['L_ALLOW_SMILIES'] : $this->lang('L_ALLOW_SMILIES'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="allow_smilies" value="1" <?php echo isset($this->vars['SMILE_YES']) ? $this->vars['SMILE_YES'] : $this->lang('SMILE_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="allow_smilies" value="0" <?php echo isset($this->vars['SMILE_NO']) ? $this->vars['SMILE_NO'] : $this->lang('SMILE_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SMILIES_PATH']) ? $this->vars['L_SMILIES_PATH'] : $this->lang('L_SMILIES_PATH'); ?>:</label><br /><span><?php echo isset($this->vars['L_SMILIES_PATH_EXPLAIN']) ? $this->vars['L_SMILIES_PATH_EXPLAIN'] : $this->lang('L_SMILIES_PATH_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="20" maxlength="255" name="smilies_path" value="<?php echo isset($this->vars['SMILIES_PATH']) ? $this->vars['SMILIES_PATH'] : $this->lang('SMILIES_PATH'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ALLOW_SIG']) ? $this->vars['L_ALLOW_SIG'] : $this->lang('L_ALLOW_SIG'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="allow_sig" value="1" <?php echo isset($this->vars['SIG_YES']) ? $this->vars['SIG_YES'] : $this->lang('SIG_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="allow_sig" value="0" <?php echo isset($this->vars['SIG_NO']) ? $this->vars['SIG_NO'] : $this->lang('SIG_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_MAX_SIG_LENGTH']) ? $this->vars['L_MAX_SIG_LENGTH'] : $this->lang('L_MAX_SIG_LENGTH'); ?>:</label><br /><span><?php echo isset($this->vars['L_MAX_SIG_LENGTH_EXPLAIN']) ? $this->vars['L_MAX_SIG_LENGTH_EXPLAIN'] : $this->lang('L_MAX_SIG_LENGTH_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="5" maxlength="4" name="max_sig_chars" value="<?php echo isset($this->vars['SIG_SIZE']) ? $this->vars['SIG_SIZE'] : $this->lang('SIG_SIZE'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ALLOW_NAME_CHANGE']) ? $this->vars['L_ALLOW_NAME_CHANGE'] : $this->lang('L_ALLOW_NAME_CHANGE'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="allow_namechange" value="1" <?php echo isset($this->vars['NAMECHANGE_YES']) ? $this->vars['NAMECHANGE_YES'] : $this->lang('NAMECHANGE_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="allow_namechange" value="0" <?php echo isset($this->vars['NAMECHANGE_NO']) ? $this->vars['NAMECHANGE_NO'] : $this->lang('NAMECHANGE_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
</fieldset>
<fieldset>
	<legend><?php echo isset($this->vars['L_AVATAR_SETTINGS']) ? $this->vars['L_AVATAR_SETTINGS'] : $this->lang('L_AVATAR_SETTINGS'); ?></legend>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ALLOW_LOCAL']) ? $this->vars['L_ALLOW_LOCAL'] : $this->lang('L_ALLOW_LOCAL'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="allow_avatar_local" value="1" <?php echo isset($this->vars['AVATARS_LOCAL_YES']) ? $this->vars['AVATARS_LOCAL_YES'] : $this->lang('AVATARS_LOCAL_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="allow_avatar_local" value="0" <?php echo isset($this->vars['AVATARS_LOCAL_NO']) ? $this->vars['AVATARS_LOCAL_NO'] : $this->lang('AVATARS_LOCAL_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ALLOW_REMOTE']) ? $this->vars['L_ALLOW_REMOTE'] : $this->lang('L_ALLOW_REMOTE'); ?>:</label><br /><span><?php echo isset($this->vars['L_ALLOW_REMOTE_EXPLAIN']) ? $this->vars['L_ALLOW_REMOTE_EXPLAIN'] : $this->lang('L_ALLOW_REMOTE_EXPLAIN'); ?></span></dt>
		<dd><input type="radio" class="radio" name="allow_avatar_remote" value="1" <?php echo isset($this->vars['AVATARS_REMOTE_YES']) ? $this->vars['AVATARS_REMOTE_YES'] : $this->lang('AVATARS_REMOTE_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="allow_avatar_remote" value="0" <?php echo isset($this->vars['AVATARS_REMOTE_NO']) ? $this->vars['AVATARS_REMOTE_NO'] : $this->lang('AVATARS_REMOTE_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ALLOW_UPLOAD']) ? $this->vars['L_ALLOW_UPLOAD'] : $this->lang('L_ALLOW_UPLOAD'); ?>:</label></dt>
		<dd><input type="radio" class="radio" name="allow_avatar_upload" value="1" <?php echo isset($this->vars['AVATARS_UPLOAD_YES']) ? $this->vars['AVATARS_UPLOAD_YES'] : $this->lang('AVATARS_UPLOAD_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="allow_avatar_upload" value="0" <?php echo isset($this->vars['AVATARS_UPLOAD_NO']) ? $this->vars['AVATARS_UPLOAD_NO'] : $this->lang('AVATARS_UPLOAD_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_MAX_FILESIZE']) ? $this->vars['L_MAX_FILESIZE'] : $this->lang('L_MAX_FILESIZE'); ?>:</label><br /><span><?php echo isset($this->vars['L_MAX_FILESIZE_EXPLAIN']) ? $this->vars['L_MAX_FILESIZE_EXPLAIN'] : $this->lang('L_MAX_FILESIZE_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="4" maxlength="10" name="avatar_filesize" value="<?php echo isset($this->vars['AVATAR_FILESIZE']) ? $this->vars['AVATAR_FILESIZE'] : $this->lang('AVATAR_FILESIZE'); ?>" /> Bytes</dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_MAX_AVATAR_SIZE']) ? $this->vars['L_MAX_AVATAR_SIZE'] : $this->lang('L_MAX_AVATAR_SIZE'); ?>:</label><br /><span><?php echo isset($this->vars['L_MAX_AVATAR_SIZE_EXPLAIN']) ? $this->vars['L_MAX_AVATAR_SIZE_EXPLAIN'] : $this->lang('L_MAX_AVATAR_SIZE_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="3" maxlength="4" name="avatar_max_height" value="<?php echo isset($this->vars['AVATAR_MAX_HEIGHT']) ? $this->vars['AVATAR_MAX_HEIGHT'] : $this->lang('AVATAR_MAX_HEIGHT'); ?>" /> x <input type="text" size="3" maxlength="4" name="avatar_max_width" value="<?php echo isset($this->vars['AVATAR_MAX_WIDTH']) ? $this->vars['AVATAR_MAX_WIDTH'] : $this->lang('AVATAR_MAX_WIDTH'); ?>"></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_AVATAR_STORAGE_PATH']) ? $this->vars['L_AVATAR_STORAGE_PATH'] : $this->lang('L_AVATAR_STORAGE_PATH'); ?>:</label><br /><span><?php echo isset($this->vars['L_AVATAR_STORAGE_PATH_EXPLAIN']) ? $this->vars['L_AVATAR_STORAGE_PATH_EXPLAIN'] : $this->lang('L_AVATAR_STORAGE_PATH_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="20" maxlength="255" name="avatar_path" value="<?php echo isset($this->vars['AVATAR_PATH']) ? $this->vars['AVATAR_PATH'] : $this->lang('AVATAR_PATH'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_AVATAR_GALLERY_PATH']) ? $this->vars['L_AVATAR_GALLERY_PATH'] : $this->lang('L_AVATAR_GALLERY_PATH'); ?>:</label><br /><span><?php echo isset($this->vars['L_AVATAR_GALLERY_PATH_EXPLAIN']) ? $this->vars['L_AVATAR_GALLERY_PATH_EXPLAIN'] : $this->lang('L_AVATAR_GALLERY_PATH_EXPLAIN'); ?></span></dt>
		<dd><input type="text" size="20" maxlength="255" name="avatar_gallery_path" value="<?php echo isset($this->vars['AVATAR_GALLERY_PATH']) ? $this->vars['AVATAR_GALLERY_PATH'] : $this->lang('AVATAR_GALLERY_PATH'); ?>" /></dd>
	</dl>
</fieldset>
<fieldset>
	<legend><?php echo isset($this->vars['L_COPPA_SETTINGS']) ? $this->vars['L_COPPA_SETTINGS'] : $this->lang('L_COPPA_SETTINGS'); ?></legend>
	<dl>
		<dt><label><?php echo isset($this->vars['L_COPPA_FAX']) ? $this->vars['L_COPPA_FAX'] : $this->lang('L_COPPA_FAX'); ?>:</label></dt>
		<dd><input type="text" size="25" maxlength="100" name="coppa_fax" value="<?php echo isset($this->vars['COPPA_FAX']) ? $this->vars['COPPA_FAX'] : $this->lang('COPPA_FAX'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_COPPA_MAIL']) ? $this->vars['L_COPPA_MAIL'] : $this->lang('L_COPPA_MAIL'); ?>:</label><br /><span><?php echo isset($this->vars['L_COPPA_MAIL_EXPLAIN']) ? $this->vars['L_COPPA_MAIL_EXPLAIN'] : $this->lang('L_COPPA_MAIL_EXPLAIN'); ?></span></dt>
		<dd><textarea name="coppa_mail" rows="5" cols="40"><?php echo isset($this->vars['COPPA_MAIL']) ? $this->vars['COPPA_MAIL'] : $this->lang('COPPA_MAIL'); ?></textarea></dd>
	</dl>
</fieldset>
<fieldset>
	<legend><?php echo isset($this->vars['L_EMAIL_SETTINGS']) ? $this->vars['L_EMAIL_SETTINGS'] : $this->lang('L_EMAIL_SETTINGS'); ?></legend>
	<dl>
		<dt><label><?php echo isset($this->vars['L_ADMIN_EMAIL']) ? $this->vars['L_ADMIN_EMAIL'] : $this->lang('L_ADMIN_EMAIL'); ?>:</label></dt>
		<dd><input type="text" size="25" maxlength="100" name="board_email" value="<?php echo isset($this->vars['EMAIL_FROM']) ? $this->vars['EMAIL_FROM'] : $this->lang('EMAIL_FROM'); ?>" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_EMAIL_SIG']) ? $this->vars['L_EMAIL_SIG'] : $this->lang('L_EMAIL_SIG'); ?>:</label><br /><span><?php echo isset($this->vars['L_EMAIL_SIG_EXPLAIN']) ? $this->vars['L_EMAIL_SIG_EXPLAIN'] : $this->lang('L_EMAIL_SIG_EXPLAIN'); ?></span></dt>
		<dd><textarea name="board_email_sig" rows="5" cols="40"><?php echo isset($this->vars['EMAIL_SIG']) ? $this->vars['EMAIL_SIG'] : $this->lang('EMAIL_SIG'); ?></textarea></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_USE_SMTP']) ? $this->vars['L_USE_SMTP'] : $this->lang('L_USE_SMTP'); ?>:</label><br /><span><?php echo isset($this->vars['L_USE_SMTP_EXPLAIN']) ? $this->vars['L_USE_SMTP_EXPLAIN'] : $this->lang('L_USE_SMTP_EXPLAIN'); ?></span></dt>
		<dd><input type="radio" class="radio" name="smtp_delivery" value="1" <?php echo isset($this->vars['SMTP_YES']) ? $this->vars['SMTP_YES'] : $this->lang('SMTP_YES'); ?> /> <?php echo isset($this->vars['L_YES']) ? $this->vars['L_YES'] : $this->lang('L_YES'); ?>&nbsp;&nbsp;<input type="radio" class="radio" name="smtp_delivery" value="0" <?php echo isset($this->vars['SMTP_NO']) ? $this->vars['SMTP_NO'] : $this->lang('SMTP_NO'); ?> /> <?php echo isset($this->vars['L_NO']) ? $this->vars['L_NO'] : $this->lang('L_NO'); ?></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SMTP_SERVER']) ? $this->vars['L_SMTP_SERVER'] : $this->lang('L_SMTP_SERVER'); ?>:</label></dt>
		<dd><input type="text" name="smtp_host" value="<?php echo isset($this->vars['SMTP_HOST']) ? $this->vars['SMTP_HOST'] : $this->lang('SMTP_HOST'); ?>" size="25" maxlength="50" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SMTP_USERNAME']) ? $this->vars['L_SMTP_USERNAME'] : $this->lang('L_SMTP_USERNAME'); ?>:</label><br /><span><?php echo isset($this->vars['L_SMTP_USERNAME_EXPLAIN']) ? $this->vars['L_SMTP_USERNAME_EXPLAIN'] : $this->lang('L_SMTP_USERNAME_EXPLAIN'); ?></span></dt>
		<dd><input type="text" name="smtp_username" value="<?php echo isset($this->vars['SMTP_USERNAME']) ? $this->vars['SMTP_USERNAME'] : $this->lang('SMTP_USERNAME'); ?>" size="25" maxlength="255" /></dd>
	</dl>
	<dl>
		<dt><label><?php echo isset($this->vars['L_SMTP_PASSWORD']) ? $this->vars['L_SMTP_PASSWORD'] : $this->lang('L_SMTP_PASSWORD'); ?>:</label><br /><span><?php echo isset($this->vars['L_SMTP_PASSWORD_EXPLAIN']) ? $this->vars['L_SMTP_PASSWORD_EXPLAIN'] : $this->lang('L_SMTP_PASSWORD_EXPLAIN'); ?></span></dt>
		<dd><input type="password" name="smtp_password" value="<?php echo isset($this->vars['SMTP_PASSWORD']) ? $this->vars['SMTP_PASSWORD'] : $this->lang('SMTP_PASSWORD'); ?>" size="25" maxlength="255" /></dd>
	</dl>
</fieldset>
<fieldset class="submit-buttons">
	<legend><?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?></legend>
	<?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
	<input class="button1" type="submit" id="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" />&nbsp;
	<input class="button2" type="reset" id="reset" name="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" />
</fieldset>
</form>