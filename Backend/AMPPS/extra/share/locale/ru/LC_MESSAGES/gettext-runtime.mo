��    0      �  C         (  8   )  B   b  A   �  6   �  H     I   g  F   �  9   �  7   2  6   j  M   �  L   �  O   <  H   �  {   �     Q  ,   m     �  .   �  '   �  (   	     :	     Z	  �   g	  e   `
  :   �
      �    �  �     �     �  *   �  1   �  &        7     F  "   [  9   ~  I   �  �        �     �     �     �     �     �           [   (  f   �  j   �  J   V  v   �  v     �   �  W   E  W   �  j   �  y   `  �   �  �   �  v   i  �   �  9   �  ^   �  9   4  ^   n  K   �  M     ;   g  $   �  f  �  �   /  M   �  �  9     �!  �  %  )   �'     (  T   ,(  Q   �(  q   �(  ,   E)  6   r)  R   �)  ]   �)  }   Z*  (  �*  &   ,      (,     I,  4   i,     �,  .   �,     �,                                                            !      "   0                
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
 error while reading "%s" memory exhausted missing arguments standard input too many arguments write error Project-Id-Version: gettext-runtime 0.20-rc1
Report-Msgid-Bugs-To: bug-gnu-gettext@gnu.org
PO-Revision-Date: 2019-04-18 05:26+0300
Last-Translator: Yuri Kozlov <yuray@komyakino.ru>
Language-Team: Russian <gnu@d07.ru>
Language: ru
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Bugs: Report translation errors to the Language-Team address.
Plural-Forms: nplurals=3; plural=n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2;
X-Generator: Lokalize 2.0
   -E                          (игнорируется для совместимости)
   -V, --version               напечатать информацию о версии и выйти
   -V, --version               показать номер версии и завершить работу
   -c, --context=КОНТЕКСТ      задать контекст MSGID
   -d, --domain=ДОМЕН          возвращает переведённое сообщение из ДОМЕНА
   -d, --domain=ДОМЕН          возвращает переведённые сообщения из ДОМЕНА
   -e                        включить раскрытие некоторых экранированных
                              последовательностей
   -h, --help                  напечатать эту справку и выйти
   -h, --help                  напечатать эту справку и выйти
   -n                          не выводить конечный символ новой строки
   -v, --variables             вывести переменные, найденные в ФОРМАТЕ-ОБОЛОЧКИ
   КОЛИЧЕСТВО                  выбирать форму единственного/множественного
                              числа основываясь на этом значении
   MSGID MSGID-PLURAL          переводит MSGID (единственное число) /
                              MSGID-PLURAL (множественное число)
   [ДОМЕН]                     возвращает переведённое сообщение из ДОМЕНА
   [ДОМЕН] MSGID               возвращает переведённое сообщение,
                              соответствующее MSGID из ДОМЕНА
 %s: недопустимый параметр — «%c»
 %s: для параметра «%s%s» нельзя использовать аргумент
 %s: двусмысленный параметр «%s%s»
 %s: двусмысленный параметр «%s%s»; возможные варианты: %s: для параметра «%s%s» требуется аргумент
 %s: для параметра требуется аргумент — «%c»
 %s: нераспознанный параметр «%s%s»
 Бруно Хайбл (Bruno Haible) Copyright (C) %s Free Software Foundation, Inc.
Лицензия GPLv3+: GNU GPL версии 3 или новее <https://gnu.org/licenses/gpl.html>
Это свободное ПО: вы можете продавать и распространять его.
Нет НИКАКИХ ГАРАНТИЙ до степени, разрешённой законом.
 Отображает перевод текстового сообщения, грамматическая форма которого
зависит от некоторого числа.
 Отображает перевод текстового сообщения.
 Если не задан параметр ДОМЕН, то домен определяется из
переменной окружения TEXTDOMAIN. Если каталог сообщений не
найден в стандартном каталоге, можно указать другой каталог с помощью
переменной окружения TEXTDOMAINDIR.
Стандартный каталог поиска: %s
 Если не задан параметр ДОМЕН, то домен определяется из
переменной окружения TEXTDOMAIN. Если каталог сообщений не
найден в стандартном каталоге, можно указать другой каталог с помощью
переменной окружения TEXTDOMAINDIR.
При использовании с параметром -s, поведение программы похоже на поведение
команды «echo». Но вместо простого копирования аргументов в
стандартный вывод, выводятся их переводы из указанного домена.
Стандартный каталог поиска: %s
 В обычном режиме работы стандартный ввод копируется на стандартный
вывод, а ссылки на переменные окружения вида $ПЕРЕМЕННАЯ или ${ПЕРЕМЕННАЯ}
заменяются на соответствующие значения. Если задан ФОРМАТ-ОБОЛОЧКИ,
подставляются только те переменные, на которые есть ссылки в
ФОРМАТЕ-ОБОЛОЧКИ; в противном случае подставляются все ссылки на
переменные окружения, встречающиеся на стандартном вводе.
 Информационный вывод:
 Режим работы:
 Об ошибках сообщайте по адресу <bug-gnu-gettext@gnu.org>.
 Подставляет значения переменных окружения.
 По команде «%s --help» можно получить дополнительную информацию.
 Ульрих Дреппер (Ulrich Drepper) Неизвестная системная ошибка Использование: %s [ПАРАМЕТР] [ФОРМАТ-ОБОЛОЧКИ]
 Использование: %s [ПАРАМЕТР] [ДОМЕН] MSGID MSGID-PLURAL ЧИСЛО
 Использование: %s [ПАРАМЕТР] [[ДОМЕН] MSGID]
      или:     %s [ПАРАМЕТР] -s [MSGID]…
 Если задан параметр --variables, стандартный ввод игнорируется, и вывод
состоит из переменных окружения, на которые есть ссылки в
ФОРМАТЕ-ОБОЛОЧКИ, по одной на строку.
 Автор программы — %s.
 ошибка чтения «%s» память исчерпана необходимо задать аргументы стандартный ввод слишком много аргументов ошибка записи 