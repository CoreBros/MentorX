<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_lang.php
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

$l['no_submit'] = 'Geen script installatie is geselecteerd voor e-mail notificatie';
$l['no_ins_selected'] = 'U heeft geen sript geselecteerd dat u wilt updaten';
$l['posix_error'] = 'De functie POSIX is niet actif. Activeer POSIX om het updaten van scripts mogelijk te maken';
$l['shellexec_error'] = 'De functie exec is niet actief. Activeer exec om het updaten van scripts mogelijk te maken';
$l['user_soft_upd_sub'] = 'Er zijn updates voor geïnstalleerde  scripts beschikbaar';
$l['user_soft_upd'] = 'Er zijn updates beschikbaar voor scripts die u heeft geïnstalleerd op uw hosting account. Wegens veiligheids redenen adviseren wij u om altijd de laatste versie van een script te gebruiken.
De onderstaande updates zijn beschikbaar:

&soft-1;
U kunt de updata automatisch installeren via het control panel bij -> '.APP.'.

Heeft u vragen neem dan contact op met uw hosting bedrijf.';
$l['no_reseller_upgrade_ins'] = 'Resellers are not allowed to auto upgrade installations';

//Theme Strings
$l['<title>'] = APP.' - Overzicht geïnstalleerde scripts';
$l['searchinstallations'] = 'Zoeken geïnstalleerde scripts';
$l['search_scripts'] = 'Scripts';
$l['search_scripts_exp'] = 'Laat deze optie leeg om te zoeken naar alle scripts. U kunt meerdere script namen opgeven, gescheiden door \'<b>;</b>\'.';
$l['search_users'] = 'Gebruikers';
$l['search_users_exp'] = 'Laat deze optie leeg om te zoeken naar alle gebruikers. U kunt meerdere gebruikersnamen opgeven, gescheiden door \'<b>;</b>\'.';
$l['group_by_scripts'] = 'Overzicht op script naam';
$l['group_by_scripts_exp'] = 'Standaard wordt het overzicht weergegeven op gebruikersnaam';
$l['only_outdated'] = 'Geef alleen overzicht van scripts waarvoor updates beschikbaar zijn.';
$l['only_outdated_exp'] = 'Standaard worden alle scripts weergegeven.';
$l['li_user'] = 'Gebruiker';
$l['li_scripts'] = 'Scripts';
$l['li_domains'] = 'Domains';
$l['li_url'] = 'URL';
$l['li_insver'] = 'Geïnstalleerde versie';// Installed Ver
$l['li_ver'] = 'Versie';
$l['li_realver'] = 'Werkelijke versie';
$l['no_results'] = 'Geen resultaten gevonden';
$l['search_ins'] = 'Zoeken';
$l['with_selected'] = 'met de geselecteerde';
$l['sub_email_users'] = 'Stuur e-mail notificatie naar gebruikers over beschikbare updates';
$l['emailed_users'] = 'E-mail notificatie succesvol verzonden';
$l['sub_upgrade_ins'] = 'Update';
$l['upgrading_ins'] = 'Scripts worden geupdate ...';
$l['upgraded_ins'] = 'Het auto update proces is voltooid en e-mail notificaties zijn verzonden naar de gebruikers';
$l['upgraded'] = 'Updated';
$l['failed'] = 'Mislukt';
$l['go_to_autoupgrade'] = 'Ga naar het overzicht';
$l['upgrading_completed'] = 'Update voltooid';
$l['beta_note'] = '<b>Let op</b>: Deze optie is een <b>BETA VERSIE</b>. <a href="http://softaculous.com/docs/Auto_Upgrade" target="_blank">Meer informatie ..</a>';
$l['wait_note'] = '<b>Let op </b> : sluit deze pagina niet voordat alle scripts zijn geupdate.';
$l['tasklist_button'] = 'Taak beheer';
$l['auto_upgrade_enabled'] = 'Auto update geactiveerd';
$l['real_ver_notice'] = 'The werkelijke versie komt niet overeen met de '.APP.' records. Wellicht dat de gebruiker het script handmatig heeft geupdate.';
$l['latest_ver_notice'] = 'Laatste versies beschikbaar voor de scripts.';
$l['update_records'] = 'Update '.APP.' records';
$l['no_submit_rec'] = 'Geen scripts geselecteerd voor de update van de '.APP.' records';
$l['err_update_record'] = 'Er is een fout opgetreden tijdens het updaten van de versie in '.APP.' records';
$l['succ_update_record'] = 'De vesie voor de geselecteerde scripts zijn succesvol geupdate in '.APP.' record';
$l['only_realversion'] = 'Laat werkelijke versie zien';
$l['only_realversion_exp'] = 'Via deze optie zal '.APP.' proberen de werkelijke versie van een script te achterhalen.<br /><b>Let op</b>: dit kan enige tijd duren omdat de bestanden gescand moeten worden.';
$l['no_info'] = 'Geen informatie';
$l['search_domains'] = 'Domains';
$l['search_domains_exp'] = 'Leave blank for all. For multiple domains seperate with \'<b>;</b>\'';

$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';