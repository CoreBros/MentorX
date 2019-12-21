<?php die(); /* DO NOT REMOVE THIS LINE! SERIOUS SECURITY RISK IF REMOVED! */ ?>
==========================================================
Welcome to the poMMo Configuration File! From here you setup your database and
  other preferences.
  
IMPORTANT: This file must be named "config.php" and saved in the "root"
  directory of your poMMo installation (where bootstrap.php is).
  
See config.sample.php for descriptions of settings
==========================================================

[db_hostname] = [[softdbhost]]
[db_username] = [[softdbuser]]
[db_password] = [[softdbpass]]
[db_database] = [[softdb]]
[db_prefix] = [[dbprefix]]

[lang] = [[language]]
[debug] = off
[verbosity] = 3
[date_format] = 1

The following are auto-detected, and are best left commented out.
** [workDir] = "[[softpath]]/cache"
** [baseURL] = "[[relativeurl]]/";
** [hostname] = [[domhost]]
** [hostport] = 80
** [subscriber_default_sort] = [[admin_email]]
