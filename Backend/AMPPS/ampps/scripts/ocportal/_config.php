<?php
global $SITE_INFO;


if (!function_exists('git_repos')) {
    /**
     * Find the git branch name. This is useful for making this config file context-adaptive (i.e. dev settings vs production settings).
     *
     * @return ?ID_TEXT Branch name (null: not in git)
     */
    function git_repos()
    {
        $path = dirname(__FILE__).'/.git/HEAD';
        if (!is_file($path)) return '';
        $lines = file($path);
        $parts = explode('/', $lines[0]);
        return trim(end($parts));
    }
}

$SITE_INFO['default_lang'] = 'EN';
$SITE_INFO['forum_type'] = 'cns';
$SITE_INFO['db_type'] = 'mysqli';
$SITE_INFO['domain'] = '[[domhost]]';
$SITE_INFO['base_url'] = '[[softurl]]';
$SITE_INFO['master_password'] = '[[admin_pass_info]]';
$SITE_INFO['self_learning_cache'] = '1';
$SITE_INFO['db_site'] = '[[softdb]]';
$SITE_INFO['db_site_host'] = '[[softdbhost]]';
$SITE_INFO['db_site_user'] = '[[softdbuser]]';
$SITE_INFO['db_site_password'] = '[[softdbpass]]';
$SITE_INFO['table_prefix'] = '[[dbprefix]]';
$SITE_INFO['user_cookie'] = 'cms_member_id';
$SITE_INFO['pass_cookie'] = 'cms_member_hash';
$SITE_INFO['cookie_domain'] = '';
$SITE_INFO['cookie_path'] = '/';
$SITE_INFO['cookie_days'] = '120';
$SITE_INFO['db_forums'] = '[[softdb]]';
$SITE_INFO['db_forums_host'] = '[[softdbhost]]';
$SITE_INFO['db_forums_user'] = '[[softdbuser]]';
$SITE_INFO['db_forums_password'] = '[[softdbpass]]';
$SITE_INFO['cns_table_prefix'] = '[[dbprefix]]';
$SITE_INFO['multi_lang_content'] = '0';
$SITE_INFO['session_cookie'] = '[[cms_session]]';
