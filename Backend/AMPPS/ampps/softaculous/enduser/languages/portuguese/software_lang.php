<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
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

$l['no_info_file'] = 'Não foi possivel encontrar ficheiro INFO.XML! Informe o administrador desta mensagem.';
$l['incompatible'] = 'O software necessita que uma versão mais recente do '.APP.' esteja instalada! Informe o administrador desta mensagem.';
$l['no_install'] = 'Não foi possivel encontrar o ficheiro INSTALL.XML! Informe o administrador desta mensagem.';
$l['no_functions'] = 'Não foi possivel encontrar o ficheiro INSTALL FUNCTIONS! Informe o administrador desta mensagem.';
$l['no_remove_functions'] = 'The REMOVE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'Não especificou o dominio para instalação do software.';
$l['wrong_softdomain'] = 'O caminho para o dominio especificado não foi encontrado.';
$l['softdirectory_exists'] = 'O directório seleccionado já existe! Insira outro nome de directório.';
$l['no_space'] = 'Não dispõem de espaço suficiente para instalação do software!';
$l['no_softdb'] = 'A base de dados não foi públicada.';
$l['database_exists'] = 'Base de dados já existente. Seleccione um nome diferente.';
$l['databaseuser_exists'] = 'Utilizador já existente. Seleccione um nome de utilizador diferente.';
$l['db_name_long'] = 'O nome de base de dados não pode ultrapassar o tamanho máximo de 7 letras. Insira um nome mais curto.';
$l['db_limit_crossed'] = 'Atingiu o numero máximo de base de dados que pode criar, não é possivel continuar a instalação.';
$l['no_field'] = 'O campo <b>&soft-1;</b> é um campo mandatório e deverá ser preenchido.';
$l['error_adddb'] = 'Impossivel criar base de dados';
$l['error_adduser'] = 'Erro ao adicionar utilizador a base de dados';
$l['no_package'] = 'O ficheiro de instalação não foi encontrado!';
$l['no_decompress'] = 'Ocorreram alguns erros ao descomprimir ficheiro de instalação.';
$l['mail_new_ins'] = 'UMa nova instalação de &soft-1; foi concluida. Detalhes abaixo:';
$l['mail_path'] = 'Directório';
$l['mail_url'] = 'Endereço';
$l['mail_admin_url'] = 'Admin URL'; 
$l['mail_admin'] = 'Admin Username';
$l['mail_pass'] = 'Admin Pass';
$l['mail_db'] = 'Base de Dados';
$l['mail_dbuser'] = 'Utilizador';
$l['mail_dbhost'] = 'Servidor';
$l['mail_dbpass'] = 'Password';
$l['mail_time'] = 'Data';
$l['mail_subject'] = 'Nova instalação de &soft-1;';
$l['no_cron_min'] = 'Não foram especificados minutos';
$l['no_cron_hour'] = 'Não foram especificadas horas';
$l['no_cron_day'] = 'Não foi especificado dia';
$l['no_cron_month'] = 'Não foi especificado mês';
$l['no_cron_weekday'] = 'Não foi especificado dia da semana';
$l['wrong_cron_min'] = 'Valor de minuto incorrecto. Valores válidos 0-59 ou <b>*</b>';
$l['wrong_cron_hour'] = 'Hora incorrecta. Valores válidos 0-23 ou <b>*</b>';
$l['wrong_cron_day'] = 'Dia incorrecto. Valores válidos 1-31 ou <b>*</b>';
$l['wrong_cron_month'] = 'Mês incorrecto. Valores válidos 1-12 ou <b>*</b>';
$l['wrong_cron_weekday'] = 'Dia da semana incorrecto. Valores válidos 0-7 ou <b>*</b>';
$l['mail_cron'] = 'Tarefa';
$l['no_datadir'] = 'Não foi especificado directório de dados';
$l['datadir_exists'] = 'O directório de dados especificado já existe. Especifique um nome de directório diferente.';
$l['no_decompress_data'] = 'Ocorreram alguns erros ao descomprimir os ficheiros de dados.';
$l['mail_datadir'] = 'Data Directory';
$l['some_files_exist'] = 'Installation cannot proceed because the following files already exist in the target folder : ';
$l['delete_files'] = 'Please delete these files or choose another folder.';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Select the checkbox to overwrite all files and continue</span></b>';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing Installation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['no_hostname'] = 'Please enter your Database Hostname';
$l['no_dbusername'] = 'Please enter your Database Username';
$l['no_dbuserpass'] = 'Please enter your Database Password';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['softdatadir_invalid'] = 'The data directory you typed is invalid.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">here</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['no_domain_verify'] = 'Could not access your domain. Please make sure your domain is pointing to this server and there is no .htaccess file restricing access to your domain';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';
$l['not_php_script'] = 'This script is not in PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalar';
$l['overview'] = 'Resumir';
$l['features'] = 'Caracteristicas';
$l['demo'] = 'Demo';
$l['ratings'] = 'Ranking';
$l['import'] = 'Importar';
$l['software_ver'] = 'Versão';
$l['space_req'] = 'Espaço Necessário';
$l['available_space'] = 'Espaço Disponivel';
$l['req_space'] = 'Espaço Necessário';
$l['mb'] = 'MB';
$l['software_support'] = 'Suporte a Software';
$l['support_link'] = 'Visitar Site de Suporte';
$l['support_note'] = 'Nota: O Softaculous não dá suporte a nenhum dos softwares listados.';
$l['setup'] = 'Configuração';
$l['choose_domain'] = 'Seleccione Dominio';
$l['choose_domain_exp'] = 'Seleccione o dominio onde pretende instalar o software.';
$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';
$l['in_directory'] = 'Directório';
$l['in_directory_exp'] = 'O directório é relativo ao seu dominio <b>e não deverá existir</b>. ex. Para instalar em http://dominio/directorio/ insira apenas <b>directorio</b>. Para instalar na raiz do dominio http://dominio/ deixe este campo em branco.';
$l['database_name'] = 'Base de Dados';
$l['database_name_exp'] = 'Insira o nome para a base de dados que será criada no processo de instalação';
$l['softcopy_note'] = '<b>NOTA</b>: Este software necessita de ser instalado usando os seus próprios meios. Deverá visitar o endereço mostrado assim que os ficheiros sejam copiados para o directório de instalação.';
$l['softsubmit'] = 'Instalar';
$l['congrats'] = 'Software instalado com sucesso';
$l['succesful'] = 'foi instalado com sucesso em';
$l['admin_url'] = 'Endereço de Administração';
$l['setup_continue'] = 'Contudo, a configuração será concluida pelo próprio software. Para concluir a instalação, visite o seguinte endereço';
$l['enjoy'] = 'Esperemos que o processo de instalação tenha sido facil.';
$l['install_notes'] = 'Abaixo encontram-se algumas notas importantes. Recomenda-mos que as leia cuidadosamente ';
$l['please_note'] = '<b>NOTA</b>: O '.APP.' é apenas um instalador automático de software, caso necessite de suporte deverá obter o mesmo junto do fabricante do respectivo software!';
$l['regards'] = 'Cumprimentos';
$l['softinstaller'] = APP;
$l['return'] = 'Voltar ao Inicio';
$l['current_ins'] = 'Instalações Actuais';
$l['link'] = 'Link';
$l['ins_time'] = 'Data';
$l['version'] = 'Versão';
$l['upd_to'] = 'Actualizar para';
$l['remove'] = 'Remover';
$l['no_info'] = 'Sem Detalhes';
$l['randpass'] = 'Gerar Passowrd Aleatória';
$l['ratesoft'] = 'Votar Neste Script';
$l['reviews'] = 'Análises';
$l['reviewsoft'] = 'Escrever uma análise';
$l['readreviews'] = 'Ler análises';
$l['reviews_exp'] = 'Ler análises públicadas por outros utilizadores e';
$l['cron_job'] = 'Tarefas Agendadas';
$l['cron_job_exp'] = 'Para um correcto funcionamento este script necessita de uma tarefa agendada. Especifique os parâmetros da mesma, caso os desconheça deixe este campo em branco!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hora';
$l['cron_day'] = 'Dia';
$l['cron_month'] = 'Mês';
$l['cron_weekday'] = 'Dia Semana';
$l['datadir'] = 'Directório Dados';
$l['datadir_exp'] = 'Este script necessita de guardar os seus daods em um directório não acessivel via web. Será criado no seu directório de utilizador. ex. se especificou <b>directorio</b> o mesmo será criado em - /home/sua_conta/<b>directorio</b>';
$l['db_alpha_num'] = 'Only alpha numeric characters are allowed for the Database name.';
$l['overwrite'] = 'Overwrite Files';
$l['ins_emailto'] = 'Email installation details to';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['clone'] = 'Clone';
$l['backup'] = 'Backup';
$l['options'] = 'Options';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Thank you for informing about the new version. We will look into it as soon as possible';
$l['del_insid'] = 'Are you sure you wish to remove the selected installations ? The action will be irreversible. \nNo further confirmations will be asked.';
$l['rem_inst_id'] = 'Removing Installation - ';
$l['no_sel_inst'] = 'No installation(s) selected to remove.';
$l['inst_remvd'] = 'The selected installation(s) have been removed. The page will now be reloaded !';
$l['remove'] = 'Remove';
$l['go'] = 'Go';
$l['screenshots'] = 'Screenshots';
$l['downloading'] = 'Downloading Package';
$l['installing'] = 'Installing Script';
$l['editdetail'] = 'Edit Details';
$l['publish'] = 'Publish on the Web';
$l['hostname'] = 'Database Hostname';
$l['hostname_exp'] = 'The MySQL hostname (mainly <b>localhost</b>)';
$l['dbusername'] = 'Database Username';
$l['dbusername_exp'] = 'The MySQL username';
$l['dbuserpass'] = 'Database Password';
$l['dbuserpass_exp'] = 'The password of the MySQL user';
$l['database_name_exp_aefer'] = 'Type the name of the database to be used for the installation';
$l['sel_version'] = 'Select Version';
$l['choose_version_exp'] = 'Please select the version to install.';
$l['choose_version'] = 'Choose the version you want to install';
$l['select'] = 'Select';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notification Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_enabled'] = 'Auto Upgrade Enabled';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';
$l['auto_backup'] = 'Automated backups';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'If the backup rotation limit is reached '.APP.' will delete the oldest backup for this installation and create a new backup. The backups will utilize your space so choose the backup rotation as per the space available on your server';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['unlimited'] = 'Unlimited';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Recently Upgraded';
$l['act_clone'] = 'Recently Cloned';
$l['act_backup'] = 'Recently Backed up';
$l['act_install'] = 'Recently Installed';
$l['act_edit'] = 'Recently Edited';
$l['act_import'] = 'Recently Imported';
$l['act_restore'] = 'Recently Restored';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Tell your friends about your new site';

$l['choose_theme'] = 'Select Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. If not selected, the default theme will be installed';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = 'instale agora';
$l['my_apps'] = 'Meus aplicativos';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['custom_autobackup'] = 'Custom';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['quick_install'] = 'Quick Install';
$l['custom_install'] = 'Custom Install';

$l['outdated_script'] = '<b>&soft-1;</b> has not been updated for more than two years and may no longer be maintained or supported by the script vendor';

$l['pushtolive'] = 'Push to Live';
$l['staging'] = 'Create Staging';

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)'; 

$l['err_fetch_key'] = 'Could not fetch the PFX API key at the moment';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'List Items in Set';
$l['ok'] = 'OK';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Themes';
$l['empty_set'] = 'There are currently no items in the set!!';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';
$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';
$l['error_max_staging_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Staging allowed per script';

$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;
$l['manage_sets'] = 'Gerenciar conjuntos de plugins / temas';
$l['manage_plugin_sets'] = 'Manage Plugin Sets';
$l['manage_theme_sets'] = 'Manage Theme Sets';