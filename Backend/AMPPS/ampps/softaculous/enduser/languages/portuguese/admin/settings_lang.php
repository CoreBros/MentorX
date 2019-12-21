<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.XX
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Translation by: Infotech Brazil
// Date:       Feb 2012
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['no_path'] = 'O diretório não foi especificado';
$l['wrong_path'] = 'Não foi possivel localizar o arquivo universal.php no diretório que especificou.';
$l['no_softscripts'] = 'O diretório para o script/software não foi especificado';
$l['wrong_softscripts'] = 'O diretório do script/software encontra-se incorreto ou o software não foi encontrado .';
$l['no_sn'] = 'Você não especificou o nome do site.';
$l['no_cookie_name'] = 'Você não especificou nome do cookie';
$l['no_soft_email'] = 'Você não inseriu endereço do email';
$l['wrong_soft_email'] = 'O email inserido é inválido';
$l['wrong_from_email'] = 'The From email address you submitted is invalid';
$l['no_license'] = 'Você não digitou a chave da licença';
$l['no_lang'] = 'Você não selecionou o idioma';
$l['wrong_lang'] = 'O idioma seleccionado é inválido';
$l['no_theme_folder'] = 'Você não selecionou nenhum tema';
$l['wrong_theme_folder'] = 'O tema seleccionado é inválido';
$l['no_timezone'] = 'Você não especificou um fuso horário';
$l['wrong_timezone'] = 'O fuso horário especificado não é valido.';
$l['no_cron_time'] = 'Você não especificou a data/hora para execução da tarefa';
$l['no_off_message'] = 'Você não especificou o assunto para o encerramento';
$l['no_off_subject'] = 'Você não especificou mensagem para o encerramento';
$l['saving_error'] = 'Ocorreram alguns erros ao gravar as configurações';
$l['no_update'] = 'Nenhuma preferência para à atualização foi apresentada';
$l['invalid_update'] = 'A preferência da atualização inválida foi submetido';
$l['no_protocol'] = 'No protocol was selected';
$l['wrong_protocol'] = 'The selected protocol is invalid';
$l['wrong_network_interface'] = 'The network interface you specified is not valid';
$l['pass_strength_error'] = 'Password strength must be an integer only, between 0 to 100';
$l['err_binary_path'] = 'It seems that the binary does not exist at the defined path. Please check it and try again.';
$l['err_invalid_soa'] = 'Invalid SOA!!!Please enter a valid positive number';

//Theme Strings
$l['<title>'] = 'Painel de Configurações do '.APP;
$l['settings_saved'] = 'Configurações gravadas com sucesso';
$l['pathhead'] = 'Diretórios usado para o '.APP;
$l['softpath'] = 'Diretório do '.APP;
$l['softpath_exp'] = 'É neste diretório que se encontram todos os arquivos excluindo-se os scripts';
$l['softscripts'] = 'Diretório dos Scripts';
$l['softscripts_exp'] = 'É neste diretório que se encontram os diversos softwares/scripts';
$l['gen_set'] = 'Configurações Gerais';
$l['sitename'] = 'Nome do Site';
$l['sitename_exp'] = 'O nome do servidor ou empresa que irá usar o '.APP.'. Este nome irá aparecer em todas as páginas do instalador '.APP;
$l['cook_name'] = 'Nome para os Cookies';
$l['cook_name_exp'] = 'O nome do cookie que será gravado pelos navegadores.';
$l['comp_output'] = 'Comprimir Saida';
$l['comp_output_exp'] = 'Esta opção comprime a saida poupando desta forma imenso tráfego.';
$l['soft_email'] = 'Email';
$l['soft_email_exp'] = 'O endereço de email para usar no campo DE.';
$l['from_email'] = 'From Email Address';
$l['from_email_exp'] = 'The email address for the FROM headers.';
$l['license'] = 'Chave da Licença';
$l['license_exp'] = 'Insira aqui a chave de licença emitida pelo o '.APP;
$l['choose_lang'] = 'Selecione o Idioma';
$l['choose_lang_exp'] = 'Selecione  o Idioma Pré-Defenido';
$l['choose_theme'] = 'Selecione o Tema';
$l['choose_theme_exp'] = 'O tema selecionado será usado em todo o '.APP;
$l['timezone'] = 'Fuso Horário';
$l['update_settings'] = 'Atualizar as Configurações e o '.APP;
$l['auto_upd_softac'] = 'Atualizar Automáticamente o '.APP;
$l['auto_upd_softac_exp'] = 'Se abilitado o '.APP.' será automaticamente atualizada para a versão mais recente. <br />O ramo <b>Estável</b> é lançado após a versão Candidato à Lançmento foi cuidadosamente testado . <br />O ramo <b>Candidato à Lançmento</b> contém a última versão e funcionalidades.';
$l['never_update'] = 'Nunca Atualizar';
$l['stable'] = '<b>Estável (Recomendado)</b>';
$l['release_cand'] = 'Candidato à Lançamento (Experimental!)';
$l['auto_upd_soft'] = 'Auto Atualizar os Scripts';
$l['auto_upd_soft_exp'] = 'Se ativado esta opção irá atualizar automáticamente todos os scripts ou software para a última versão';
$l['auto_add_soft'] = 'Auto Adicionar Novos Scripts';
$l['auto_add_soft_exp'] = 'Se ativado, novos scripts ou software serão adicionado automáticamente durante as tarefas de manutenção. <b>RECOMENDADO</b>';
$l['email_upd_soft'] = 'Avisar em Caso de Atualizações';
$l['email_upd_soft_exp'] = 'Será enviado um email de avisando no caso de estarem disponiveis novas atualizações ou quando forem instaladas automáticamente novas atualizações';
$l['email_upd_softs'] = 'Notifique-me das atualizações do(s) Script(s)';
$l['email_upd_softs_exp'] = 'Serão enviados emails para notificar a disponibilidade de novas versões de scripts ou software nas atualizações automáticas.';
$l['cron_time'] = 'Tarefas de Atualização';
$l['cron_time_exp'] = 'A data/hora em que serão pesquisadas novas atualizações. Não altere esta opção caso não saiba qual a funcionalidade da mesma';
$l['disable_soft'] = 'Desativando o '.APP;
$l['soft_off'] = 'Desativar o '.APP;
$l['soft_off_exp'] = 'O '.APP.' será desativado completamente!';
$l['off_sub'] = 'Motivo da Desativação';
$l['off_message'] = 'Mensagem pela qual o '.APP.' foi desativado';
$l['edit_settings'] = 'Salvar Configurações';
$l['chmod_files'] = 'CHMOD dos Arquivos';
$l['chmod_files_exp'] = 'Esta opção é útil caso tenha instalado o suPHP e o '.APP.' não o tenha detectado. Deixe em branco em caso de incerteza.';
$l['chmod_dir'] = 'CHMOD dos Diretórios';
$l['chmod_dir_exp'] = 'Esta opção é útil caso tenha instalado o suPHP e o '.APP.' não o tenha detectado. Deixe em branco em caso de incerteza.';
$l['is_vps'] = 'VPS';
$l['is_vps_exp'] = 'Marque esta caixa no caso deste servidor ser uma VPS.';
$l['eu_news_off'] = 'Desactivar Noticias para Utilizador Final';
$l['eu_news_off_exp'] = 'Esta opção desativa o envio de mensagens dos diversos scripts para o usuário final. Novidades de desenvolvimento, atualizações, etc.';
$l['logo_url'] = 'URL do Logotipo';
$l['logo_url_exp'] = 'Se permanecer vázio o logotipo do '.APP.' será exibido.';
$l['php_bin'] = 'Binário PHP';
$l['php_bin_exp'] = 'Este é o binário que será utilizado para as tarefas agendadas e também outros fins. Se vazio, então <b>/usr/bin/php </b> será usado. Observe que o <b> binário do PHP deve ser um binário CLI </b>.';
$l['end_user_set'] = 'End User Panel Settings';
$l['off_sync_link'] = 'Desligar o link de sincronização';
$l['off_sync_link_exp'] = 'Isto irá desligar a link de Sincronizar para os usuários finais.';
$l['off_panel_link'] = 'Desligar o link do Painel de Controle';
$l['off_panel_link_exp'] = 'Isto irá desligar o link do Painel de Controle no Dock para os usuários finais.';
$l['chmod_conf_file'] = 'CHMOD do Arquivos de Config.';
$l['chmod_conf_file_exp'] = 'Arquivos de configuração dos scripts será CHMOD a este valor. O padrão é 0644. (<b>Não editar / deixe em branco se você não sabe!</b>)';
$l['suphp_detected'] = 'suPHP Detectado';
$l['no_prefill'] = 'Não pré preencher o nome do diretório';
$l['no_prefill_exp'] = 'Não pré preencher o nome do diretório com o nome de scripts por padrão.';
$l['footer_link'] = 'Link do Rodapé';
$l['footer_link_exp'] = 'Quando alguém instala um script, este link / texto será inserido no rodapé da instalação';

$l['eu_email_off'] = 'Desativar E-mails de atualização ao usuário';
$l['eu_email_off_exp'] = 'Se marcado nenhum email será enviado para o usuário final, quando há uma atualização disponível.'; 
$l['random_pass'] = 'Gerar senha aleatória para os usuários'; 
$l['random_pass_exp'] = 'Se marcada, senhas do administrador seram gerados aleatoriamente será feita durante a instalação.'; 
$l['off_demo_link'] = 'Desativar os Demos de Scripts';
$l['off_demo_link_exp'] = 'Isso irá desativar as demonstrações para os usuários finais.';
$l['off_rating_link'] = 'Desativar Pontuações dos Scripts';
$l['off_rating_link_exp'] = 'Isso irá desativar os índices para os usuários finais.';
$l['off_review_link'] = 'Desativar Análise dos Script';
$l['off_review_link_exp'] = 'Isso irá desativar os opiniões para os usuários finais.';
$l['off_screenshot_link'] = 'Desativar Imagens de Tela dos Scripts';
$l['off_screenshot_link_exp'] = 'Isso irá desativar as imagens para os usuários finais.';
$l['random_dbprefix'] = 'Gerar Prefixo do Banco de Dados aleatórios para os usuários';
$l['random_dbprefix_exp'] = 'Se marcada, um prefixo de banco de dados gerado aleatoriamente será feita durante a instalação.';
$l['remote_mysql'] = 'Hostname Remoto do Mysql';
$l['remote_mysql_exp'] = 'Se você quiser usar mysql remoto, especifique o Hostname Remoto do Mysql  ou IP';
$l['perl_scripts'] = 'Desativar Scripts PERL';
$l['perl_scripts_exp'] = 'Isso irá desativar os scripts Perl para os usuários finais';
$l['show_top_scripts'] = 'Mostrar o Top Grupo de Scripts';
$l['show_top_scripts_exp'] = 'Isto irá exibir o Top Grupo de Scripts para os usuários finais para facilitar o acesso às páginas de scripts de instalação. Para desabilitar esse recurso, deixe este campo <b>em branco</b>.';
$l['err_change_app_name'] = 'Ocorreu um erro ao alterar o nome do Grupo';
$l['hide_dbprefix'] = 'Hide the Databse Prefix for the script';
$l['hide_dbprefix_exp'] = 'If checked, then no Database Prefix will be available for the Script.';
$l['user_mod_dir'] = 'Use USUÁRIO MOD DIR';
$l['user_mod_dir_exp'] = 'Os usuários podem instalar scripts em http://IP/~usuário';
$l['off_email_link'] = 'Desativar todos os E-mail para Usuários Finais';
$l['off_email_link_exp'] = 'Isto irá desconectar o link do e-mail para os usuários finais e também desabilitar e-mails que são enviados durante a instalação, remoção, etc';
$l['disable_classes'] = 'Disable PHP Classes';
$l['disable_classes_exp'] = 'This will disable PHP Classes from the enduser.';
$l['panel_hf'] = 'Show Softaculous in control panel\'s native UI';
$l['panel_hf_exp'] = 'If this is enabled then Softaculous will be shown in control panel\'s native UI.';
$l['disable_backup_restore'] = 'Disable Backup/Restore Function for Endusers';
$l['disable_backup_restore_exp'] = 'This will turn off the backup and restore function for endusers.';
$l['nolabels'] = 'Disable ALL Scripts Category';
$l['nolabels_exp'] = 'If enabled then no category will be displayed in the header in enduser panel. i.e. PHP, Javascripts, PERL, Classes these all category will be disabled';
$l['settings'] = APP.' Settings';
$l['disable_reseller_panel'] = 'Disable Reseller Panel';
$l['disable_reseller_panel_exp'] = 'If enabled then the resellers will not be able to access reseller panel.';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'Choose your preferred protocol. It will be selected by default for enduser.';
$l['random_username'] = 'Generate Random Username for users';
$l['random_username_exp'] = 'If checked then randomly generated admin usernames will be made during an installation.';
$l['network_interface'] = 'Network Interface';
$l['network_interface_exp'] = 'The public network interface of the server. Leave blank if you dont know';
$l['default_domain_path'] = 'Default Domain Path';
$l['default_domain_path_exp'] = 'While adding domain you can set the default domain path.';
$l['empty_username'] = 'Empty Username';
$l['empty_username_exp'] = 'If checked then the ADMIN USERNAME field will be left blank.';
$l['empty_pass'] = 'Empty Password';
$l['empty_pass_exp'] = 'If checked then the PASSWORD field will be left blank.';
$l['show_cscript_in_top'] = 'Show custom script(s) logo in TOP scripts.';
$l['show_cscript_in_top_exp'] = 'If enabled your custom script(s) logo will be displayed in the TOP scripts.';
$l['pass_strength'] = 'Set Minimum Password Strength';
$l['pass_strength_exp'] = 'If set, then the password strength must be more than the defined value';
$l['off_remove_mail'] = 'Turn off Remove Installation emails';
$l['off_remove_mail_exp'] = 'This will disable the email sent to endusers during removal of installation(s).';
$l['off_backup_mail'] = 'Turn off Backup Installation emails';
$l['off_backup_mail_exp'] = 'This will disable the email sent to endusers during backup of installation(s).';
$l['off_install_mail'] = 'Turn off New Installation emails';
$l['off_install_mail_exp'] = 'This will disable the email sent to endusers during installation of an application.';
$l['off_edit_mail'] = 'Turn off Edit Installation emails';
$l['off_edit_mail_exp'] = 'This will disable the email sent to endusers when installation details are edited.';
$l['off_clone_mail'] = 'Turn off Clone Installation emails';
$l['off_clone_mail_exp'] = 'This will disable the email sent to endusers when an installation is cloned.';
$l['off_restore_mail'] = 'Turn off Restore Installation emails';
$l['off_restore_mail_exp'] = 'This will disable the email sent to endusers when an installation is restored.';
$l['admin_prefix'] = 'Prefix for admin username';
$l['admin_prefix_exp'] = 'Selected option will be set as prefix for admin username on the script install form<br/> Please do not use a hyphen \'-\' as it will be used as a seperator';
$l['ap_none'] = 'None';
$l['ap_username'] = 'Username';
$l['ap_domain'] = 'Domain';
$l['ap_admin_defined'] = 'Admin Defined';
$l['disable_auto_backup'] = 'Disable Automated Backups for Enduser';
$l['disable_auto_backup_exp'] = 'If checked then the option for automated backups will be disabled for endusers.';
$l['webuzo_disable_username'] = 'Pre-fill Webuzo Username';
$l['webuzo_disable_username_exp'] = 'If checked then the field for Webuzo Username on login page will be prefilled.';
$l['disable_clone'] = 'Disable Clone feature for endusers';
$l['disable_clone_exp'] = 'This will disable the clone installation option for endusers';
$l['disable_remote_import'] = 'Disable Remote Import feature for endusers';
$l['disable_remote_import_exp'] = 'This will disable the remote import option for endusers';
$l['disable_backup_upgrade'] = 'Disable backup option during upgrades';
$l['disable_backup_upgrade_exp'] = 'This will disable the backup option on the upgrade installation page for endusers';
$l['ephp_bin'] = 'Enduser PHP binary';
$l['ephp_bin_exp'] = 'Define the PHP binary path that will be used by the enduser websites. '.APP.' will use this binary for checking the requirements of a script. If not defined '.APP.' will use the default binary as : ';
$l['no_ampps_download'] = 'Disable AMPPS download link';
$l['no_ampps_download_exp'] = 'This will disable the AMPPS download link in '.APP.' Enduser panel';
$l['no_strong_mysql_pass'] = 'Don\'t generate strong MySQL database user password';
$l['no_strong_mysql_pass_exp'] = 'This will generate MySQL database user password without special characters';

$l['remove_options'] = 'Enduser Remove Options';
$l['remove_dir'] = 'Hide Remove Directory Option';
$l['remove_dir_exp'] = 'If selected, Installation Directory will always be deleted when an installation is removed';
$l['remove_db'] = 'Hide Remove Database and Database User Option';
$l['remove_db_exp'] = 'If selected, Database and Database User will always be deleted when an installation is removed';
$l['remove_datadir'] = 'Hide Remove Data Directory Option';
$l['remove_datadir_exp'] = 'If selected, Data Directory will always be deleted when an installation is removed';
$l['remove_wwwdir'] = 'Hide Remove WWW Directory Option';
$l['remove_wwwdir_exp'] = 'If selected, WWW Directory will always be deleted when an installation is removed';

$l['social_media'] = 'Social Media Settings';
$l['install_tweet_off'] = 'Turn off Tweet for New Installations';
$l['install_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after a new installation';
$l['install_tweet_msg'] = 'Tweet Message for New Installations';
$l['install_tweet_msg_exp'] = 'Custom Tweet Message for New Installations';

$l['upgrade_tweet_off'] = 'Turn off Tweet for Upgrade Installation';
$l['upgrade_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after upgrading an installation';
$l['upgrade_tweet_msg'] = 'Tweet Message for Upgrade Installation';
$l['upgrade_tweet_msg_exp'] = 'Custom tweet message for Upgrade Installation';

$l['clone_tweet_off'] = 'Turn off Tweet for Clone Installation';
$l['clone_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after cloning an installation';
$l['clone_tweet_msg'] = 'Tweet Message for Clone Installation';
$l['clone_tweet_msg_exp'] = 'Custom tweet message for Clone Installation';

$l['no_ftp_encrypted'] = 'Don\'t encrypt the FTP Password';
$l['no_ftp_encrypted_exp'] = 'This will store FTP Passwords of Domain in the database without encryption';
$l['pre_download_all'] = 'Enable Pre Download for all scripts';
$l['pre_download_all_exp'] = 'This will enable pre download for all scripts including new scripts added';

$l['tweet_vars_link'] = 'List of variables for Tweet message';
$l['tweet_vars'] = '[[SCRIPTNAME]] - Use this for script name <br />[[TYPE]] - Use this for script type Eg: PHP, PERL, etc <br />[[softurl]] - Use this for the URL of installation <br />[[cat]] - Use this for the script category Eg: Blog, CMS, etc <br />[[ver]] - Use this for the version of script installed <br />';

$l['session_timeout'] = 'Session Timeout';
$l['session_timeout_exp'] = 'Softaculous Session will remain active for the time specified.<br />Time should be in minutes. Default: 15';


$l['auto_backup_limit'] = 'Auto backup rotation limit';
$l['auto_backup_limit_exp'] = 'Choose the maximum limit for auto backups rotation for the endusers';
$l['auto_backup_unlimited'] = 'Unlimited';
$l['auto_backup_all'] = 'All';
$l['auto_backup_daily'] = 'Disable Daily Auto backups';
$l['auto_backup_weekly'] = 'Disable Weekly Auto backups';
$l['auto_backup_monthly'] = 'Disable Monthly Auto backups';

$l['off_upgrade_plugins'] = 'Disable auto upgrade plugins for enduser';
$l['off_upgrade_plugins_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installations will be disabled for endusers.';
$l['off_upgrade_themes'] = 'Disable auto upgrade themes for enduser';
$l['off_upgrade_themes_exp'] = 'If checked then the option to auto upgrade themes for user\'s installations will be disabled for endusers.';

$l['pfx_settings'] = 'PopularFX Settings';
$l['eu_enable_themes'] = 'Enable Free Themes';
$l['eu_enable_themes_exp'] = 'If checked then endusers will get an option to select and install free themes while installing scripts like WordPress';
$l['eu_themes_premium'] = 'Enable Premium Themes';
$l['eu_themes_premium_exp'] = 'If checked then endusers will get an option to purchase and install Premium themes for scripts like WordPress.<br /> You can find more info <a href="http://www.softaculous.com/docs/Premium_Themes" target="_blank">Here</a>';

$l['backups_expire'] = 'Delete Backup Frequency';
$l['backups_expire_exp'] = 'If you would like to delete your users\' backups after certain days since backup creation. By default the backups are never deleted.';

$l['default_hf_bg'] = 'Default color for Header Footer';
$l['default_hf_bg_exp'] = 'This will be the default color for Header, Footer and Left Panel';
$l['default_cat_hover'] = 'Default color for Category hover';
$l['default_cat_hover_exp'] = 'This will be the default color when the user hovers over the Categories in Left panel';
$l['default_hf_text'] = 'Default color for text in Header Footer';
$l['default_hf_text_exp'] = 'This will be the default color for text in Header, Footer and Left Panel';
$l['default_scriptname_text'] = 'Default color for script name text in Left panel';
$l['default_scriptname_text_exp'] = 'This will be the default color for script name text in Left Panel';

$l['max_backups'] = 'Maximum backups per user limit';
$l['max_backups_exp'] = 'This will limit the maximum number of backups a user can take';
$l['max_backups_unlimited'] = 'Unlimited';

$l['default_landing'] = 'Default page for Enduser Panel';
$l['default_landing_exp'] = 'This will be the default page for '.APP.' Enduser Panel';
$l['top_scripts'] = 'Top Scripts (Default)';
$l['all_ins'] = 'All Installations';
$l['outdated_ins'] = 'Outdated Installations';

$l['no_add_domain'] = 'Disable Adding domains by Endusers';
$l['no_add_domain_exp'] = 'This will not allow Endusers to add domains';

$l['force_auto_upgrade'] = 'Force Auto Upgrade preference for users\' installations';
$l['force_auto_upgrade_exp'] = 'Chosen auto upgrade preference, will be selected and disabled in the enduser panel. Enduser(s) will <b>not</b> be able to modify it. (Not Applicable for existing installations)';
$l['enable_auto_upgrade'] = 'Prefill Auto Upgrade preference for users\' installations';
$l['enable_auto_upgrade_exp'] = 'Chosen auto upgrade preference, will be selected by default in the enduser panel. Enduser(s) will be able to modify it.';
$l['dont_auto_upgrade'] = 'Do not Auto Upgrade (Default)';
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only';
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)';

$l['set_backup_dir'] = 'Set Backup Directory';
$l['set_backup_dir_exp'] = 'Choose the path to store enduser(s) installation backups. <br /> This will be absolute path i.e. if you enter /backups then the backups will be created at /backups/USERNAME directory on your server. This directory should exist and should be writable for all users.';

$l['off_customize_theme'] = 'Turn off Customize Theme';
$l['off_customize_exp'] = 'If selected, then Enduser(s) will not be able to access Customise Theme option';

$l['enc_db_pass'] = 'Store Database Password in encrypted format';
$l['enc_db_pass_exp'] = 'If selected, then the Database Password for users\' installations will be stored in encrypted format';

$l['time_format'] = 'Default Time format';
$l['time_format_exp'] = 'Choose the default time format. Default : <b>F j, Y, g:i a</b>';

$l['no_prefill_db'] = 'Don\'t Prefill Database details';
$l['no_prefill_db_exp'] = 'Don\'t prefill the database details by default.';

$l['off_protocol'] = 'Disable Protocol';
$l['off_protocol_exp'] = 'If selected, the protocol will not be displayed to the enduser';

$l['disable_branches'] = 'Disable Scripts Branches';
$l['disable_branches_exp'] = 'If checked, all the branches of a script will be disabled except the parent one';
$l['db_prefix'] = 'Enable DB Prefix';
$l['db_prefix_exp'] = 'If selected, all database and users will be created with a prefix.';

$l['disable_cronupdate_email'] = 'Disable CronJob Email';
$l['disable_cronupdate_email_exp'] = 'If checked, cronjob notifications will not be send to Email Address given';

$l['set_soa_expire_val'] = 'Set SOA Expire Value';
$l['set_soa_expire_val_exp'] = 'Set a numeric SOA expire value for all the domains. Minimum Value : 86400';

$l['nat_config'] = 'NAT Configuration';
$l['nat_config_exp'] = 'Select this option if you are using NAT configuration on your server';

$l['logs_level'] = APP.' Logs Level';
$l['logs_level_exp'] = 'Selected logs level will be used for error/debug logs. <br />Logs level 4 might contain passwords';
$l['off'] = 'Off';
$l['logs_level-4'] = 'Detailed Logs';

$l['backup_set'] = 'Backup Settings';
$l['email_set'] = 'Email Settings';
$l['hide_feature_set'] = 'Disable Features for End users';
$l['auto_upgrade_set'] = 'Auto Upgrade Settings';

$l['no_prefill_pass'] = 'Don\'t Prefill Password fields';
$l['no_prefill_pass_exp'] = 'While editing an installation or a domain the password will not be shown';
$l['enc_user_pass'] = 'Encrypt API Pass';
$l['enc_user_pass_exp'] = 'If selected the API Pass for user(s) will be encrypted and stored';

$l['sync_domains'] = 'Enable Sync Domain(s)';
$l['sync_domains_exp_remote'] = 'This will enable the synchronizing of Domain(s) in '.APP.' records with the domain(s) list passed via $PRE_LOGIN in session.php, click <a href="http://www.softaculous.com/docs/Softaculous_Remote#Sync_Domains" target="_blank">here</a> to for guide';
$l['sync_domains_exp_ent'] = 'This will enable the synchronizing of Domain(s) in '.APP.' records with the domain(s) list passed via $PRE_LOGIN in session.php, click <a href="http://www.softaculous.com/docs/Softaculous_Enterprise_Integration#Sync_Domains" target="_blank">here</a> to for guide';

$l['email_password'] = 'Email password in plain text';
$l['email_password_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';

$l['disable_sign_on'] = 'Disable Auto Login';
$l['disable_sign_on_exp'] = 'Select this option to disable auto login to script\'s admin panel from '.APP;

$l['demo_logo'] = 'Logo URL For Scripts Demo';
$l['demo_logo_exp'] = 'If empty the '.APP.' logo will be shown, recommended dimension for the logo Width:150, Height:45';

$l['email_update_apps'] = 'Notify Application Updates';
$l['email_update_apps_exp'] = 'If enabled, emails will be sent when updates for installed Application(s) are available';

$l['demo_logo_url'] = 'Custom link for Scripts Demo Logo';
$l['demo_logo_url_exp'] = 'If empty the '.APP.' url will be used';

$l['favicon_logo'] = 'Favicon logo URL';
$l['favicon_logo_exp'] = 'If empty the '.APP.' favicon will be shown in Enduser Panel';

$l['rebranding_settings'] = 'Rebranding Settings';

$l['use_eu_username'] = 'Prefill Control Panel Username as Admin Username';
$l['use_eu_username_exp'] = 'If set, the script installation\'s Admin Username on the script install form will be prefilled as Control Panel Username';
$l['use_eu_email'] = 'Prefill Enduser Email as Admin Email';
$l['use_eu_email_exp'] = 'If set, the script installation\'s Admin Email on the script install form will be prefilled as the Email set in Enduser Email Settings';

$l['dbpass_len'] = 'Length for random generated MySQL database user password';
$l['dbpass_len_exp'] = 'Choose the length of random generated database user password. If left blank '.APP.' will use default: 10';
$l['off_available_space'] = 'Don\'t display available space';
$l['off_available_space_exp'] = 'If checked, Available Space will not be displayed on the script\'s Overview page';
$l['disable_import'] = 'Disable Import feature for endusers';
$l['disable_import_exp'] = 'This will disable the local import as well as remote import option for endusers';
$l['update_system'] = 'Update Operating System';
$l['update_system_exp'] = 'This will updates the operating system using yum or apt-get';
$l['off_rbackup'] = 'Disable Backup on Remote Server';
$l['off_rbackup_exp'] = 'If checked, backups from '.APP.' on remote server will be disabled for all endusers';

$l['sync_ins_list'] = 'Sync installations list with '.APP.' Records';
$l['sync_ins_list_exp'] = 'Check if the installation directory exists in the user\'s web directory and remove the installation(s) from '.APP.' records for which directory does not exist';

$l['sync_ins_real_ver'] = 'Detect and update actual version of installations';
$l['sync_ins_real_ver_exp'] = 'Detect if the user has manually updated their installation and update the version in '.APP.' records in case of version mismatch';
$l['update_system'] = 'Update OS';
$l['update_system_exp'] = 'If enabled, Operating System will be updated using Yum or Apt-get';
$l['auto_backup_custom'] = 'Disable Custom time for Auto backups';

$l['sitepad_settings'] = 'SitePad Settings'; 
$l['off_sitepad'] = 'Turn Off SitePad Website Builder';
$l['off_sitepad_exp'] = 'This will disable SitePad for all your users<br /><b>Note:</b> SitePad is based on Freemium model and if your users upgrade to the premium plan you get recurring commissions from SitePad. <a href="mailto:sales@sitepad.com">More details</a>';
$l['off_sitepad_conf'] = 'Are you sure you want to disable SitePad Website Builder ? You can get revenues from SitePad via Commissions when your users upgrade to the premium plan of SitePad. Contact us for more details about SitePad at sales@sitepad.com';
$l['auto_backup_default'] = 'Default'; 
$l['auto_backup'] = 'Default auto backup frequency';
$l['auto_backup_exp'] = 'Choose the default auto backup frequency. The chosen value will be pre-selected for endusers';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['backup_rotation'] = 'Default auto backup rotation';
$l['backup_rotation_exp'] = 'Choose the default auto backup rotation. The chosen value will be pre-selected for endusers';

$l['hc_api_url'] = 'Hosting Controller API URL';
$l['hc_api_url_exp'] = 'API calls for various tasks such as fetching users list, etc at admin level or in CLI will be performed using this HC API URL. This URL must be a valid API URL accessible from your server and of the format <b>http(s)://IP:PORT</b>';

$l['force_softaculous_on_ssl'] = 'Force '.APP.' to run on SSL(HTTPS)';
$l['force_softaculous_on_ssl_exp'] = 'If enabled, '.APP.' will redirect non-ssl page request to HTTPS';

$l['off_import_mail'] = 'Turn off Import Installation emails';
$l['off_import_mail_exp'] = 'This will disable the email sent to endusers when an installation is imported.';

$l['off_checkhttps'] = 'Disable SSL certificate check on script install form';
$l['off_checkhttps_exp'] = 'This will disable the SSL certificate check for domains when a user selects to install a script on https protocol and will not see any error if SSL certificate is not installed';
$l['hide_sitepad'] = 'Hide SitePad Website Builder';
$l['hide_sitepad_exp'] = 'This will disable SitePad for the users who have not used SitePad but will leave SitePad enabled for users who have used SitePad';

// SitePad Settings language strings
$l['sm_saving_error'] = 'There were some errors while saving the SitePad settings'; 
$l['sm_brand'] = 'Brand Name';
$l['sm_brand_exp'] = 'A single word for the Brand Name. If empty the default value will be : SitePad';
$l['sm_sitename'] = 'Site Name';
$l['sm_sitename_exp'] = 'The name of the server or company using SitePad. It will appear in many pages of the SitePad Website Builder' ;
$l['sm_brand_editor'] = 'Editor Name';
$l['sm_brand_editor_exp'] = 'The name of the editor to be shown. If empty the default value will be : SitePad Editor';
$l['sm_logo_url'] = 'Logo URL';
$l['sm_logo_url_exp'] = 'It should be a 100 x 100 pixels transparent PNG image. If empty the SitePad logo will be shown';
$l['sm_brand_url'] = 'Website URL';
$l['sm_brand_url_exp'] = 'The URL to show the users for this Website Builder. If empty the default value will be : https://sitepad.com';
$l['host_sm'] = 'Custom Server Host';
$l['host_sm_exp'] = 'You can create a CNAME record to point to <a href="http://sitepad.com/wiki/Servers" target="_blank">our Servers</a>. Or you can simply use our servers hostname. If empty SitePad will use default server host for user';
$l['sm_brand_demos'] = 'Themes Demos URL';
$l['sm_brand_demos_exp'] = 'You can create a CNAME record to point to <b>demos.sitepad.com</b> <br />If empty SitePad will use default demos server for displaying themes demos';
$l['sm_no_demos'] = 'Disable Themes Demos';
$l['sm_no_demos_exp'] = 'Select this checkbox if you want to disable the themes demos for the user';
$l['sm_no_recent_themes'] = 'Disable Recent Themes';
$l['sm_no_recent_themes_exp'] = 'Select this checkbox if you want to disable the recently added themes section on the enduser Dashboard';
$l['sm_ftp_host'] = 'FTP Host';
$l['sm_ftp_host_exp'] = 'You can specify the FTP Host/IP that SitePad should use to connect while publishing files to your server. By default server IP will be used';
$l['sm_ftp_port'] = 'FTP Port';
$l['sm_ftp_port_exp'] = 'You can specify the FTP Port that SitePad should use to connect while publishing files to your server. By default 21 will be used';

// END SitePad Settings language strings

$l['err_no_dir'] = 'Backup directory doesn\'t exist on your server';

$l['quick_install_default'] = 'Set Quick Install as the default install option';
$l['quick_install_default_exp'] = 'If selected, the default install form will show minimal options (only required fields)';

$l['off_staging_mail'] = 'Turn off Staging Installation emails';
$l['off_staging_mail_exp'] = 'This will disable the email sent to endusers when staging an installation';
$l['max_bg_process'] = 'Maximum number of background processes';
$l['max_bg_process_exp'] = 'Set the maximum number of processes to be executed simultaneously in background. This will be used for tasks like Auto Upgrade. Default value : 10';
$l['au_extra_retry'] = 'Retry Auto Upgrade Script Plugins and Themes';
$l['au_extra_retry_exp'] = 'In case the auto upgrade for plugin or theme failed '.APP.' will retry after the given time. Default value : 48 hours';

$l['upgrade_backup_on'] = 'Set Backup checkbox pre-selected on Upgrade';
$l['upgrade_backup_on_exp'] = 'If selected, the Create Backup checkbox on the script upgrade page will be by default';

$l['off_staging'] = 'Turn Off Staging';
$l['off_staging_exp'] = 'This will turn off the Staging feature for endusers';
$l['err_openssl'] = 'Openssl extension is required to encrypt password';

$l['no_indir'] = 'Hide <b>In Directory</b> Field';
$l['no_indir_exp'] = 'If selected, then In Directory field will be hidden on installation form and the users will be able to install scripts only on domain root not in subdirectory.';

$l['max_staging'] = 'Maximum Staging installations per user limit';
$l['max_staging_exp'] = 'This will limit the maximum number of staging installations a user can create. Default : Unlimited';

$l['force_upgrade_plugins'] = 'Force upgrade for Plugins';
$l['force_upgrade_plugins_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installation\'s will be enabled for endusers even if the user\'s didn\'t checked the option "auto upgrade plugins" in a particular edit installation\'s page.';

$l['force_upgrade_themes'] = 'Force upgrade for Themes';
$l['force_upgrade_themes_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installation\'s will be enabled for endusers even if the user\'s didn\'t checked the option "auto upgrade themes" in a particular edit installation\'s page.';

$l['all_scripts'] = 'All Scripts';

$l['disable_csrf'] = 'Disable CSRF';
$l['disable_csrf_exp'] = 'This will disable the CSRF security check in Softaculous';

$l['cookie_name_invalid'] = 'The cookie name you submitted is invalid.';
$l['disable_manage_sets'] = 'Disable WordPress Manage Sets feature for endusers';
$l['disable_manage_sets_exp'] = 'This will disable the WordPress Plugin / Theme Sets feature for endusers';