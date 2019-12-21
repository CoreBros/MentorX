<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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

$l['no_info_file'] = 'Não foi possivel encontrar o ficheiro INFO.XML! Informe o administrador desta mensagem.';
$l['incompatible'] = 'Este software necessita que uma versão mais recente do '.APP.' esteja instalada! Informe o administrador desta mensagem.';
$l['no_upgrade'] = 'Não foi possivel encontrar o ficheiro UPGRADE.XML ! Informe o administrador desta mensagem.';
$l['no_functions'] = 'O ficheiro UPGRADE FUNCTIONS não foi encontrado! Informe o administrador desta mensagem.';
$l['no_field'] = 'O campo <b>&soft-1;</b> é obrigatório e deverá ser preenchido.';
$l['no_package'] = 'Não foi possivel encontrar o ficheiro de actualização!';
$l['no_decompress'] = 'Ocorreram alguns erros ao descomprimir o ficheiro de actualização.';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Updating the database';
$l['finishing_process'] = 'Finishing Upgradation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['cver_greater'] = 'The current version is greater than or equal to the version you are upgrading to. This is possible if you manually upgraded the installation. If this is not the case please check the following checkbox';
$l['force_upgrade'] = 'Forcefully Upgrade';
$l['backup_finish'] = 'Backup Finished';
$l['backup_fail_proceed'] = 'Some error occured during the Backup process. Proceed to upgradation ?';
$l['backing_up'] = 'Backing up the installation';
$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Actualização de Software';
$l['softins_url'] = 'Endereço';
$l['softins_path'] = 'Directório';
$l['softcopy_note'] = '<b>NOTA</b>: Este software irá executar uma actualização usando as suas próprias ferramentas. Para completar o processo de actualização deverá visitar o endereço que será mostrado assim que a descompressão se ficheiros se encontrar concluida.';
$l['softsubmit'] = 'Actualizar';
$l['congrats'] = 'Software actualizado com sucesso';
$l['succesful'] = 'actualizado com sucesso em';
$l['admin_url'] = 'Endereço de Admin';
$l['setup_continue'] = 'Contúdo, a actualização será executada pelo próprio software, para tal deverá visitar o seguinte endereço';
$l['enjoy'] = 'Esperemos que o processo de actualização tenha sido fácil.';
$l['upgrade_notes'] = 'Seguem-se algumas notas importantes. Recomenda-mos que leia as mesmas. ';
$l['please_note'] = '<b>NOTA</b>:O '.APP.' é apenas um auto-instalador de scripts e não dá suporte aos scripts que incorpora. Para tal deverá visitar a página do fabricante do respectivo software!';
$l['regards'] = 'Cumprimentos';
$l['softinstaller'] = APP;
$l['return'] = 'Voltar';
$l['note_backup'] = 'Its recommended that you take a <a href="'.$globals['index'].'act=backup&insid=&soft-1;">backup</a> of the installation before upgrading.';
$l['alreadyupdated'] = 'Hmm ... it looks like the actual version of the installation is <b>&soft-1;</b> and not <b>&soft-2;</b>. <br />Click here to update '.APP.' records.';
$l['no_update_required'] = 'It looks like you don\'t need to update your installation as it is already uptodate';
$l['auto_backup'] = 'Would you like to take a Backup before Upgrading ?';
$l['select_version'] = 'Select a version to upgrade to';
$l['upgrading'] = 'Upgrading...';
$l['setup_partial'] = 'You are one more step away from completing the upgrade process';
$l['finish_update'] = 'Please visit below link to complete the upgrade process.';
$l['finish_up_sucess'] = 'After completing the upgrade process, you can access the &soft-1; installation here';
$l['upgrading_to'] = 'You will be Upgrading to : ';
$l['version'] = 'Version ';
$l['create_backup'] = 'Create Backup';
$l['create_backup_exp'] = 'Create a Backup before upgrading';
$l['prog_upgrading'] = 'Upgrading ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Upgrade Completed.';

$l['upgrade_tweet_sub'] = 'Tell your friends';

$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

$l['backup_type'] = 'Backup Options';
$l['backup_type_exp'] = 'Choose full backup or advanced options';
$l['standard_backup'] = 'Full Backup (Default)';
$l['advanced_backup'] = 'Advanced Options';

$l['backup_dir'] = 'Backup Directory';
$l['backup_db'] = 'Backup Database';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_datadir'] = 'Backup Data Directory';
$l['no_dir'] = 'The installation files are missing hence cannot proceed with the upgrade';
$l['wpc_return'] = 'Return to Installations';