/*                                                                -*- C -*-
   +----------------------------------------------------------------------+
   | PHP Version 5                                                        |
   +----------------------------------------------------------------------+
   | Copyright (c) 1997-2016 The PHP Group                                |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
   | Author: Stig Sæther Bakken <ssb@php.net>                             |
   +----------------------------------------------------------------------+
*/

/* $Id$ */

#define CONFIGURE_COMMAND " './configure'  '--prefix=/Applications/AMPPS/php-5.6' '--with-config-file-path=/Applications/AMPPS/php-5.6/etc' '--with-config-file-scan-dir=/Applications/AMPPS/php-5.6/etc/php.d' '--includedir=/Applications/AMPPS/php-5.6/include' '--libdir=/Applications/AMPPS/php-5.6/lib' '--enable-opcache' '--with-jpeg-dir=/Applications/AMPPS/extra' '--with-png-dir=/Applications/AMPPS/extra' '--with-freetype-dir=/Applications/AMPPS/extra' '--enable-inline-optimization' '--disable-debug' '--enable-cli' '--enable-cgi' '--with-apxs2=/Applications/AMPPS/apache/bin/apxs' '--enable-fpm' '--enable-ipv6' '--with-pgsql=shared,/Applications/AMPPS/extra' '--without-gdbm' '--with-xsl=shared,/Applications/AMPPS/extra' '--with-tidy=shared,/Applications/AMPPS/extra' '--with-pear=/Applications/AMPPS/php-5.6/lib/php/' '--enable-sockets=shared,/Applications/AMPPS/extra' '--with-mime-magic' '--enable-fileinfo' '--with-zlib-dir=/Applications/AMPPS/extra' '--with-zlib=shared,/Applications/AMPPS/extra' '--enable-zlib=shared,/Applications/AMPPS/extra' '--enable-zip=shared,/Applications/AMPPS/extra' '--with-libxml-dir=/Applications/AMPPS/extra' '--with-xml' '--enable-xmlreader' '--enable-xmlwriter' '--with-simplexml' '--with-ncurses=shared,/Applications/AMPPS/extra/bin/ncurses5-config' '--with-gd=shared' '--with-gettext=shared,/Applications/AMPPS/extra' '--with-bz2=shared,/Applications/AMPPS/extra' '--enable-bcmath=shared' '--enable-calendar=shared' '--enable-ctype=shared' '--enable-filter' '--enable-exif=shared' '--enable-ftp=shared' '--enable-hash' '--enable-json' '--enable-shmop=shared' '--disable-sigchild' '--enable-sysvsem=shared' '--enable-sysvshm=shared' '--enable-session' '--enable-tokenizer=shared' '--enable-wddx=shared' '--enable-mysqlnd' '--with-mysql=shared,mysqlnd' '--with-mysqli=shared,mysqlnd' '--with-openssl=shared,/Applications/AMPPS/extra' '--with-ldap=shared,/Applications/AMPPS/extra' '--with-mhash=shared,/Applications/AMPPS/extra' '--enable-mbstring=shared' '--enable-mbstr-enc-trans' '--enable-mbregex' '--enable-mbregex-backtrack' '--with-curl=shared,/Applications/AMPPS/extra' '--enable-dba=shared' '--enable-dbase=shared' '--enable-pdo' '--with-pdo-mysql=shared,mysqlnd' '--with-pdo-mssql=shared,/Applications/AMPPS/extra' '--with-gmp=shared,/Applications/AMPPS/extra' '--with-pdo-dblib=shared,/Applications/AMPPS/extra' '--with-pdo-pgsql=shared,/Applications/AMPPS/extra' '--enable-soap=shared' '--enable-pcntl=shared' '--enable-dbx=shared' '--with-iconv=shared,/Applications/AMPPS/extra' '--with-imap=shared,/Applications/AMPPS/extra/lib/imap-2007f' '--with-imap-ssl=shared,/Applications/AMPPS/extra' '--with-kerberos' '--enable-phar' '--enable-intl=shared' '--with-icu-dir=/Applications/AMPPS/extra' '--with-ssh2=shared,/Applications/AMPPS/extra' 'LDFLAGS=-L/Applications/AMPPS/extra/lib' 'CPPFLAGS=-I/Applications/AMPPS/extra/include'"
#define PHP_ADA_INCLUDE		""
#define PHP_ADA_LFLAGS		""
#define PHP_ADA_LIBS		""
#define PHP_APACHE_INCLUDE	""
#define PHP_APACHE_TARGET	""
#define PHP_FHTTPD_INCLUDE      ""
#define PHP_FHTTPD_LIB          ""
#define PHP_FHTTPD_TARGET       ""
#define PHP_CFLAGS		"$(CFLAGS_CLEAN) -prefer-non-pic -static"
#define PHP_DBASE_LIB		""
#define PHP_BUILD_DEBUG		""
#define PHP_GDBM_INCLUDE	""
#define PHP_IBASE_INCLUDE	""
#define PHP_IBASE_LFLAGS	""
#define PHP_IBASE_LIBS		""
#define PHP_IFX_INCLUDE		""
#define PHP_IFX_LFLAGS		""
#define PHP_IFX_LIBS		""
#define PHP_INSTALL_IT		"$(mkinstalldirs) '$(INSTALL_ROOT)/Applications/AMPPS/apache/modules' &&                 $(mkinstalldirs) '$(INSTALL_ROOT)/Applications/AMPPS/apache/conf' &&                  /Applications/AMPPS/apache/bin/apxs -S LIBEXECDIR='$(INSTALL_ROOT)/Applications/AMPPS/apache/modules'                        -S SYSCONFDIR='$(INSTALL_ROOT)/Applications/AMPPS/apache/conf'                        -i -a -n php5 libs/libphp5.so"
#define PHP_IODBC_INCLUDE	""
#define PHP_IODBC_LFLAGS	""
#define PHP_IODBC_LIBS		""
#define PHP_MSQL_INCLUDE	""
#define PHP_MSQL_LFLAGS		""
#define PHP_MSQL_LIBS		""
#define PHP_MYSQL_INCLUDE	""
#define PHP_MYSQL_LIBS		""
#define PHP_MYSQL_TYPE		""
#define PHP_ODBC_INCLUDE	""
#define PHP_ODBC_LFLAGS		""
#define PHP_ODBC_LIBS		""
#define PHP_ODBC_TYPE		""
#define PHP_OCI8_SHARED_LIBADD 	""
#define PHP_OCI8_DIR			""
#define PHP_OCI8_ORACLE_VERSION		""
#define PHP_ORACLE_SHARED_LIBADD 	"@ORACLE_SHARED_LIBADD@"
#define PHP_ORACLE_DIR				"@ORACLE_DIR@"
#define PHP_ORACLE_VERSION			"@ORACLE_VERSION@"
#define PHP_PGSQL_INCLUDE	""
#define PHP_PGSQL_LFLAGS	""
#define PHP_PGSQL_LIBS		""
#define PHP_PROG_SENDMAIL	"/usr/sbin/sendmail"
#define PHP_SOLID_INCLUDE	""
#define PHP_SOLID_LIBS		""
#define PHP_EMPRESS_INCLUDE	""
#define PHP_EMPRESS_LIBS	""
#define PHP_SYBASE_INCLUDE	""
#define PHP_SYBASE_LFLAGS	""
#define PHP_SYBASE_LIBS		""
#define PHP_DBM_TYPE		""
#define PHP_DBM_LIB		""
#define PHP_LDAP_LFLAGS		""
#define PHP_LDAP_INCLUDE	""
#define PHP_LDAP_LIBS		""
#define PHP_BIRDSTEP_INCLUDE     ""
#define PHP_BIRDSTEP_LIBS        ""
#define PEAR_INSTALLDIR         "/Applications/AMPPS/php-5.6/lib/php/"
#define PHP_INCLUDE_PATH	".:/Applications/AMPPS/php-5.6/lib/php/"
#define PHP_EXTENSION_DIR       "/Applications/AMPPS/php-5.6/lib/extensions/no-debug-non-zts-20131226"
#define PHP_PREFIX              "/Applications/AMPPS/php-5.6"
#define PHP_BINDIR              "/Applications/AMPPS/php-5.6/bin"
#define PHP_SBINDIR             "/Applications/AMPPS/php-5.6/sbin"
#define PHP_MANDIR              "/Applications/AMPPS/php-5.6/php/man"
#define PHP_LIBDIR              "/Applications/AMPPS/php-5.6/lib"
#define PHP_DATADIR             "/Applications/AMPPS/php-5.6/share/php"
#define PHP_SYSCONFDIR          "/Applications/AMPPS/php-5.6/etc"
#define PHP_LOCALSTATEDIR       "/Applications/AMPPS/php-5.6/var"
#define PHP_CONFIG_FILE_PATH    "/Applications/AMPPS/php-5.6/etc"
#define PHP_CONFIG_FILE_SCAN_DIR    "/Applications/AMPPS/php-5.6/etc/php.d"
#define PHP_SHLIB_SUFFIX        "so"
