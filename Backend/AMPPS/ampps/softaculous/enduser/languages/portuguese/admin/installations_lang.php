<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.XX
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Tradução por: Infotech Brazil (http://infotech-brasil.com.br)
// Data:       Feb 2012
// Horário:    21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Leia os Termos de uso em http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['no_submit'] = 'Nenhuma instalação foi selecionado para o e-mail.';
$l['no_ins_selected'] = 'No installation(s) selected for Upgrade.';
$l['user_soft_upd_sub'] = 'Atualizações de script(s) disponível';
$l['posix_error'] = 'POSIX function is disabled. Please enable POSIX function to perform Upgrade for Installations.';
$l['shellexec_error'] = 'exec function is disabled. Please enable exec function to perform Upgrade for Installations.';
$l['user_soft_upd'] = 'Este e-mail está desatualizado em relação à instalação de scripts PHP certos que você instalou. Por motivos de segurança você deve atualizar essas instalações ultrapassadas o mais rapidamente possível.
As atualizações de script a seguir estão disponíveis:

&soft-1;
Para atualizar esses scripts vá até o Painel de Controle -> '.APP.' -> Instalações.
Lá você vai ser capaz de atualizar os scripts.

Atenciosamente
Administrador do Sistema '.APP.'';
$l['no_reseller_upgrade_ins'] = 'Resellers are not allowed to auto upgrade installations';

//Theme Strings
$l['<title>'] = APP.' - Lista das Instalações';
$l['searchinstallations'] = 'Pesquisar Instalações';
$l['search_scripts'] = 'Scripts';
$l['search_scripts_exp'] = 'Deixe em branco para todos. Para usar vários scripts separe com \'<b>;</b>\'';
$l['search_users'] = 'Usuário';
$l['search_users_exp'] = 'Deixe em branco para todos. Para usar vários usuários separe com \'<b>;</b>\'';
$l['group_by_scripts'] = 'Agrupar por Scripts';
$l['group_by_scripts_exp'] = 'Agrupamento base por Usuário';
$l['only_outdated'] = 'Mostrar apenas instalações obsoletas';
$l['only_outdated_exp'] = 'Por padrão, ele irá mostrar todas as instalações';
$l['li_user'] = 'Usuário';
$l['li_scripts'] = 'Scripts';
$l['li_domains'] = 'Domains';
$l['li_url'] = 'URL';
$l['li_insver'] = 'Versão Instalada';// Installed Ver
$l['li_ver'] = 'Versão Recente';
$l['li_realver'] = 'Real Ver';
$l['no_results'] = 'Nenhum resultado foi encontrado';
$l['search_ins'] = 'Pesquisar';
$l['with_selected'] = 'Com as Selecionadas';
$l['sub_email_users'] = 'Enviar um e-mail de versões mais recentes';
$l['emailed_users'] = 'Os usuários das instalações selecionadas foram notificados sobre as atualizações disponíveis.';
$l['sub_upgrade_ins'] = 'Upgrade';
$l['upgrading_ins'] = 'Upgrading Installations...';
$l['upgraded_ins'] = 'The Auto upgrade process has finished and the details have been sent via email.';
$l['upgraded'] = 'Upgraded';
$l['failed'] = 'Failed';
$l['go_to_autoupgrade'] = 'Go to List';
$l['upgrading_completed'] = 'Upgrade Finished';
$l['beta_note'] = '<b>Note</b> : This feature is in <b>BETA VERSION</b>. <a href="http://softaculous.com/docs/Auto_Upgrade" target="_blank">Read More..</a>';
$l['wait_note'] = '<b>Note</b> : Please don\'t leave this page until all the installations are upgraded.';
$l['tasklist_button'] = 'Task List';
$l['auto_upgrade_enabled'] = 'Auto Upgrade Enabled';
$l['real_ver_notice'] = 'The real version does not match with '.APP.' records. It seems that the user has upgraded installation(s) manually.';
$l['latest_ver_notice'] = 'Latest version is available for the installation(s).';
$l['update_records'] = 'Update '.APP.' records';
$l['no_submit_rec'] = 'No installation(s) were selected for updating '.APP.' records';
$l['err_update_record'] = 'Error occured while updating version in '.APP.' records';
$l['succ_update_record'] = 'Successfully updated version for selected installation(s) in '.APP.' record';
$l['only_realversion'] = 'Show Real Version';
$l['only_realversion_exp'] = 'If checked '.APP.' will try to detect the real version of the installations.<br /><b>Note</b>: This might take time as it will find the real version by scanning the files of the installations';
$l['no_info'] = 'No Info';
$l['search_domains'] = 'Domains';
$l['search_domains_exp'] = 'Leave blank for all. For multiple domains seperate with \'<b>;</b>\'';

$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';