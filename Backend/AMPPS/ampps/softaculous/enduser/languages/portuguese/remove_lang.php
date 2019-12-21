<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
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

$l['no_ins'] = 'Não foram submetidas instalações';
$l['wrong_ins_title'] = 'ID de Instalação Incorrecto';
$l['wrong_ins'] = 'O ID de instalação especificado não existe';
$l['cant_remove_dir'] = 'Não é possivel remover o directório uma vez que o mesmo é o directório base do site. Desmarque a opção <b>Remover Directório</b> para que possa continuar.';
$l['cant_remove_wwwdir'] = 'The WEB directory cannot be removed as it is the home directory. Please uncheck the <b>Remove Web Directory</b> option to continue without removing the web directory.';
$l['mail_rem_ins'] = 'A instalação do software &soft-1; foi removida. Abaixo estão os detalhes da instalação : ';
$l['mail_path'] = 'Directório';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Base de Dados';
$l['mail_dbuser'] = 'Utilizador';
$l['mail_dbhost'] = 'Servidor';
$l['mail_dbpass'] = 'Password';
$l['mail_time'] = 'Data de Instalação';
$l['mail_rem_time'] = 'Data de Remoção';
$l['mail_subject'] = 'Removida a instalação de &soft-1;';
$l['mail_cron_command'] = 'Tarefa Agendada';
$l['mail_datadir'] = 'Directório de Dados';
$l['mail_wwwdir'] = 'Web Directory';
$l['checking_data'] = 'Checking the submitted data';
$l['rem_db'] = 'Removing the Database/Database User';
$l['rem_dir'] = 'Removing the Directory';
$l['rem_datadir'] = 'Removing the Data Directory';
$l['rem_cron'] = 'Removing the Cron Jobs';
$l['finishing_process'] = 'Removed Successfully';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';

//Theme Strings
$l['<title>'] = APP.' - Remover';
$l['info'] = 'Detalhes';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Instalação Numero';
$l['ins_ver'] = 'Versão';
$l['ins_time'] = 'Data';
$l['ins_path'] = 'Directório';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Base de Dados';
$l['ins_dbuser'] = 'Utilizador';
$l['ins_dbpass'] = 'Password';
$l['ins_dbhost'] = 'Servidor';
$l['remove_ins'] = 'Remover Instalação';
$l['remove_dir'] = 'Remover Directório';
$l['remove_dir_exp'] = 'Caso marque esta opção todo o directório será apagado';
$l['remove_db'] = 'Remover Base de Dados';
$l['remove_db_exp'] = 'Caso marque esta opção a base de dados será apagada';
$l['remove_dbuser'] = 'Remover Utilizador';
$l['remove_dbuser_exp'] = 'Caso marque esta opção o utilizador de acesso a base de dados será removido';
$l['remove_conf'] = 'Estas acções são irreversiveis! \n Tem a certeza que pretende continuar ?';
$l['uninstalled'] = 'Instalação removida com sucesso';
$l['removeins'] = 'Remover Instalação';
$l['ins_cron_command'] = 'Comando a Executar';
$l['remove_datadir'] = 'Remover Directório de Dados';
$l['remove_datadir_exp'] = 'Caso marque esta opção o directório de dados será removido.';
$l['ins_datadir'] = 'Directório de Dados';
$l['remove_wwwdir'] = 'Remove Web Directory';
$l['remove_wwwdir_exp'] = 'If checked the web directory will be removed.';
$l['ins_wwwdir'] = 'Web Directory';
$l['return'] = 'Return to Overview';
$l['prog_removing'] = 'Removing ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation Removed.';
$l['disabled_script_info'] = 'No information available as this script has been disabled.';

$l['wpc_return'] = 'Return to Installations';