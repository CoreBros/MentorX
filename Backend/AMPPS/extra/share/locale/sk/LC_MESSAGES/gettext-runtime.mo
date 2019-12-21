��    0      �  C         (  8   )  B   b  A   �  6   �  H     I   g  F   �  9   �  7   2  6   j  M   �  L   �  O   <  H   �  {   �     Q  ,   m     �  .   �  '   �  (   	     :	     Z	  �   g	  e   `
  :   �
      �    �  �     �     �  *   �  1   �  &        7     F  "   [  9   ~  I   �  �        �     �     �     �     �     �       �    J   �  I   :  G   �  :   �  C     C   K  u   �  @     >   F  @   �  S   �  Z     �   u  C      z   D     �  (   �  '     2   .  &   a  '   �     �     �    �  g   �  9   _  )  �  
  �  �  �     b      z   �   �   )   2!  5   \!     �!     �!  &   �!  C   �!  W   '"  �   "     >#     L#     e#     |#     �#     �#     �#                                                            !      "   0                
             	      +         '          /       ,   #             -   %                 (   )         .                      *          &          $      -E                        (ignored for compatibility)
   -V, --version               output version information and exit
   -V, --version             display version information and exit
   -c, --context=CONTEXT     specify context for MSGID
   -d, --domain=TEXTDOMAIN   retrieve translated message from TEXTDOMAIN
   -d, --domain=TEXTDOMAIN   retrieve translated messages from TEXTDOMAIN
   -e                        enable expansion of some escape sequences
   -h, --help                  display this help and exit
   -h, --help                display this help and exit
   -n                        suppress trailing newline
   -v, --variables             output the variables occurring in SHELL-FORMAT
   COUNT                     choose singular/plural form based on this value
   MSGID MSGID-PLURAL        translate MSGID (singular) / MSGID-PLURAL (plural)
   [TEXTDOMAIN]              retrieve translated message from TEXTDOMAIN
   [TEXTDOMAIN] MSGID        retrieve translated message corresponding
                            to MSGID from TEXTDOMAIN
 %s: invalid option -- '%c'
 %s: option '%s%s' doesn't allow an argument
 %s: option '%s%s' is ambiguous
 %s: option '%s%s' is ambiguous; possibilities: %s: option '%s%s' requires an argument
 %s: option requires an argument -- '%c'
 %s: unrecognized option '%s%s'
 Bruno Haible Copyright (C) %s Free Software Foundation, Inc.
License GPLv3+: GNU GPL version 3 or later <https://gnu.org/licenses/gpl.html>
This is free software: you are free to change and redistribute it.
There is NO WARRANTY, to the extent permitted by law.
 Display native language translation of a textual message whose grammatical
form depends on a number.
 Display native language translation of a textual message.
 If the TEXTDOMAIN parameter is not given, the domain is determined from the
environment variable TEXTDOMAIN.  If the message catalog is not found in the
regular directory, another location can be specified with the environment
variable TEXTDOMAINDIR.
Standard search directory: %s
 If the TEXTDOMAIN parameter is not given, the domain is determined from the
environment variable TEXTDOMAIN.  If the message catalog is not found in the
regular directory, another location can be specified with the environment
variable TEXTDOMAINDIR.
When used with the -s option the program behaves like the 'echo' command.
But it does not simply copy its arguments to stdout.  Instead those messages
found in the selected catalog are translated.
Standard search directory: %s
 In normal operation mode, standard input is copied to standard output,
with references to environment variables of the form $VARIABLE or ${VARIABLE}
being replaced with the corresponding values.  If a SHELL-FORMAT is given,
only those environment variables that are referenced in SHELL-FORMAT are
substituted; otherwise all environment variables references occurring in
standard input are substituted.
 Informative output:
 Operation mode:
 Report bugs to <bug-gnu-gettext@gnu.org>.
 Substitutes the values of environment variables.
 Try '%s --help' for more information.
 Ulrich Drepper Unknown system error Usage: %s [OPTION] [SHELL-FORMAT]
 Usage: %s [OPTION] [TEXTDOMAIN] MSGID MSGID-PLURAL COUNT
 Usage: %s [OPTION] [[TEXTDOMAIN] MSGID]
or:    %s [OPTION] -s [MSGID]...
 When --variables is used, standard input is ignored, and the output consists
of the environment variables that are referenced in SHELL-FORMAT, one per line.
 Written by %s.
 error while reading "%s" memory exhausted missing arguments standard input too many arguments write error Project-Id-Version: GNU gettext-runtime 0.20-rc1
Report-Msgid-Bugs-To: bug-gnu-gettext@gnu.org
PO-Revision-Date: 2019-04-15 15:15+0200
Last-Translator: Marcel Telka <marcel@telka.sk>
Language-Team: Slovak <sk-i18n@lists.linux.sk>
Language: sk
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Bugs: Report translation errors to the Language-Team address.
Plural-Forms: nplurals=3; plural= (n==1) ? 1 : (n>=2 && n<=4) ? 2 : 0;
   -E                        (bez významu; kvôli spätnej kompatibilite)
   -V, --version               vypísať informácie o verzii a skončiť
   -V, --version             zobraziť informáciu o verzii a skončiť
   -c, --context=KONTEXT     zadať kontext pre ID_SPRÁVY
   -d, --domain=DOMÉNA       vybrať preložené správy z DOMÉNY
   -d, --domain=DOMÉNA       vybrať preložené správy z DOMÉNY
   -e                        povoliť rozvinutie niektorých riadiacich
                            sekvencií znakov
   -h, --help                  zobraziť túto pomoc a skončiť
   -h, --help                zobraziť túto pomoc a skončiť
   -n                        potlačiť prázdny riadok na konci
   -v, --variables             vypísať premenné nachádzajúce sa v SHELL-FORMAT
   POČET                     vybrať jednotné/množné číslo na základe tejto hodnoty
   ID_SPRÁVY ID_SPRÁVY-MNČ   preložiť ID_SPRÁVY (jednotné číslo) / ID_SPRÁVY-MNČ
                            (množné číslo)
   [DOMÉNA]                  vybrať preloženú správu z DOMÉNY
   [DOMÉNA] ID_SPRÁVY        vybrať preloženú správu zodpovedajúcu ID_SPRÁVY
                            z DOMÉNY
 %s: neplatná voľba -- '%c'
 %s: voľba '%s%s' nepovoľuje parameter
 %s: voľba '%s%s' nie je jednoznačná
 %s: voľba '%s%s' nie je jednoznačná; možnosti: %s: voľba '%s%s' vyžaduje parameter
 %s: voľba vyžaduje parameter -- '%c'
 %s: neznáma voľba '%s%s'
 Bruno Haible Autorské práva (C) %s Free Software Foundation, Inc.
Licencia GPLv3+: GNU GPL verzia 3 alebo novšia <https://gnu.org/licenses/gpl.html>
Toto je voľne šíriteľný softvér: môžete ho voľne meniť a ďalej šíriť.
Neposkytuje sa ŽIADNA ZÁRUKA, v rozsahu povolenom zákonmi.
 Zobraziť preklad textovej správy, ktorej gramatický tvar závisí od čísla,
do natívneho jazyka.
 Zobraziť preklad textovej správy do natívneho jazyka.
 Ak nie je zadaný parameter DOMÉNA, doména bude prevzatá z premennej prostredia
TEXTDOMAIN. Ak sa katalóg správ nenachádza v obvyklom adresári, iné umiestnenie
môže byť určené obsahom premennej prostredia TEXTDOMAINDIR.
Štandardný adresár, v ktorom sa budú hľadať katalógy: %s
 Ak nie je zadaný parameter DOMÉNA, doména bude prevzatá z premennej prostredia
TEXTDOMAIN. Ak sa katalóg správ nenachádza v obvyklom adresári, iný adresár
môže byť určený obsahom premennej prostredia TEXTDOMAINDIR.
Ak je program použitý s voľbou -s, bude sa správať ako príkaz 'echo'.
Nevypíše však svoje parametre na štandardný výstup. Namiesto toho správy,
ktoré sa nachádzajú vo vybranom katalógu správ budú preložené.
Štandardný adresár, v ktorom sa budú hľadať katalógy: %s
 V normálnom režime operácie je štandardný vstup kopírovaný na štandardný výstup
s odkazmi na premenné prostredia v tvare $PREMENNÁ alebo ${PREMENNÁ}
nahradené odpovedajúcou hodnotou. Ak je zadaný SHELL-FORMAT sú nahradené
len tie premenné prostredia, ktoré sú uvedené v SHELL-FORMAT. V opačnom prípade
sú nahradené všetky odkazy na premenné prostredia v štandardnom vstupe.
 Informatívny výstup:
 Režim operácie:
 Správy o chybách zasielajte na adresu <bug-gnu-gettext@gnu.org> (iba anglicky).
Komentáre k slovenskému prekladu zasielajte na adresu <sk-i18n@lists.linux.sk>.
 Nahradí hodnoty premenných prostredia.
 Skúste '%s --help' a dozviete sa viac informácií.
 Ulrich Drepper Neznáma systémová chyba Použitie: %s [VOĽBA] [SHELL-FORMAT]
 Použitie: %s [VOĽBA] [DOMÉNA] ID_SPRÁVY ID_SPRÁVY-MNČ POČET
 Použitie: %s [VOĽBA] [[DOMÉNA] ID_SPRÁVY]
alebo:    %s [VOĽBA] -s [ID_SPRÁVY]...
 Ak je použité --variables, štandardný vstup je ignorovaný a výstup pozostáva
z premenných prostredia, ktoré sú uvedené v SHELL-FORMAT, každá premenná je
na samostatnom riadku.
 Napísal %s.
 chyba pri čítaní "%s" pamäť je vyčerpaná chýbajúce parametre štandardný vstup príliš veľa parametrov chyba zápisu 