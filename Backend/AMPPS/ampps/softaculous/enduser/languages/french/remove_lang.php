<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
//===========================================================
// SOFTACULOUS FRENCH PACK
// Version 4
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Edited by:  Romain Fluttaz
// Date:       1 July 2009
// Time:       15:00 hrs
// Site:       http://botux.fr/
// ----------------------------------------------------------
// Edited by:  Michel LAURENT
// Date:       25th Augustus 2009
// Time:       18:00 hrs
// Site:       http://www.equipc.net
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

$l['no_ins'] = 'Aucune installation n\'a été lancé';
$l['wrong_ins_title'] = 'Mauvais ID d\'installation';
$l['wrong_ins'] = 'L\'ID d\'installation que vous avez soumis n\'existe pas';
$l['cant_remove_dir'] = 'Le répertoire ne peut pas être supprimé car il est le répertoire home. Veuillez décochez la case <b>Supprimer le dossier </b> pour continuer sans la suppression du répertoire.';
$l['cant_remove_wwwdir'] = 'The WEB directory cannot be removed as it is the home directory. Please uncheck the <b>Remove Web Directory</b> option to continue without removing the web directory.';
$l['mail_rem_ins'] = 'Une installation de &soft-1; a été supprimée. \n Details :';
$l['mail_path'] = 'Chemin';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Base de données MySQL';
$l['mail_dbuser'] = 'Utilisateur de la base de donnée';
$l['mail_dbhost'] = 'Hôte de la base de donnée';
$l['mail_dbpass'] = 'Mot de passe de la base de donnée';
$l['mail_time'] = 'Temps d\'installation';
$l['mail_rem_time'] = 'Temps de la suppression';
$l['mail_subject'] = 'Supprimer l\'installation de &soft-1;';
$l['mail_cron_command'] = 'Tâche CRON';
$l['mail_datadir'] = 'Répertoire des données.';
$l['mail_wwwdir'] = 'Web Directory';
$l['checking_data'] = 'Checking the submitted data';
$l['rem_db'] = 'Removing the Database/Database User';
$l['rem_dir'] = 'Removing the Directory';
$l['rem_datadir'] = 'Removing the Data Directory';
$l['rem_cron'] = 'Removing the Cron Jobs';
$l['finishing_process'] = 'Removed Successfully';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';

//Theme Strings
$l['<title>'] = APP.' - Supprimer';
$l['info'] = 'Info';
$l['ins_softname'] = 'Logiciels';
$l['ins_num'] = 'Nombre d\'installation';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Temps d\'installation';
$l['ins_path'] = 'Chemin';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nom de la base de donnée';
$l['ins_dbuser'] = 'Utilisateur de la base de donnée';
$l['ins_dbpass'] = 'Mot de passe de la base de données';
$l['ins_dbhost'] = 'Hôte de la base de donnée';
$l['remove_ins'] = 'Suppression d\'une installation';
$l['remove_dir'] = 'Suppression du répertoire';
$l['remove_dir_exp'] = 'Si vous cochez cette option l\'ensemble de ce dossier sera supprimé';
$l['remove_db'] = 'Suppression de la base de données';
$l['remove_db_exp'] = 'Si coché, la base de données sera supprimée';
$l['remove_dbuser'] = 'Suppression de la base de données utilisateur';
$l['remove_dbuser_exp'] = 'Si coché, la base de données utilisateur sera également supprimée';
$l['remove_conf'] = 'Ces actions sont irreversibles ! \n Voulez vous vraiment supprimer cette installation ?';
$l['uninstalled'] = 'L\'installation a été supprimé avec succès';
$l['removeins'] = 'Suppression de l\'installation';
$l['ins_cron_command'] = 'Commande CRON';
$l['remove_datadir'] = 'Supprimer le répertoire des données.';
$l['remove_datadir_exp'] = 'Si sélectionné, le répertoire des données sera supprimé.';
$l['ins_datadir'] = 'Répertoire des données';
$l['remove_wwwdir'] = 'Remove Web Directory';
$l['remove_wwwdir_exp'] = 'If checked the web directory will be removed.';
$l['ins_wwwdir'] = 'Web Directory';
$l['return'] = 'Retour au sommaire';
$l['prog_removing'] = 'Suppression ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation Supprimée.';
$l['disabled_script_info'] = 'No information available as this script has been disabled.';

$l['wpc_return'] = 'Return to Installations';