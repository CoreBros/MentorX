<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = '特定のIDが定まっていません。';
$l['incompatible'] = 'このソフトウェアは新しいバージョンのAPPを要求しています。サーバー管理者へご報告下さい。';
$l['no_install'] = 'INSTALL.XMLファイルを発見できませんでした。サーバー管理者へご報告下さい。';
$l['no_functions'] = ' INSTALL FUNCTIONSファイルを発見できませんでした。サーバー管理者へご報告下さい。';
$l['no_softdomain'] = 'ソフトウェアをインストールするためのドメインが選択されていません。';
$l['wrong_softdomain'] = 'あなたが選択したドメインのパスを発見できませんでした。';
$l['no_space'] = 'このソフトウェアをインストールするのに十分な容量がありません。';
$l['no_field'] = '入力欄<b>&soft-1;</b>の入力が必要です。';
$l['no_package'] = 'インスタレーション・パッケージを発見できませんでした。';
$l['no_decompress'] = 'パッケージファイルの展開中にエラーが発生しました。';
$l['mail_new_ins'] = '&soft-1の新規インストールが完了しました。インストール詳細は下記をご参照下さい。';
$l['mail_path'] = 'パス';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'インストール時間';
$l['mail_subject'] = ' &soft-1の新規インストール';
$l['some_files_exist'] = '目的のフォルダ内に、次のファイルが既に存在しているため、インストールを開始できません。';
$l['delete_files'] = 'これらのファイルを削除するか、別のフォルダを選択して下さい。';
$l['checking_data'] = '送信データの確認';
$l['unzipping_files'] = 'フォルダとファイルのコピー';
$l['unzipping_datadir'] = 'データファイルの解凍';
$l['prop_db'] = 'データベースの伝播';
$l['finishing_process'] = 'インストールの終了';
$l['wait_note'] = 'この作業には3～4分ほどかかります。プログレスバーが100％になるまで、このページから移動しないで下さい。';
$l['cant_download'] = 'ZIPファイルのダウンロードができません。';
$l['softdirectory_invalid'] = 'あなたが入力したディレクトリは無効です。';
$l['softdirectory_exists'] = 'あなたが入力したディレクトリは既に存在しています。別のディレクトリ名を入力して下さい。';
$l['ins_emailto'] = 'インストール内容のＥメール送信先';
$l['disable_classes'] = 'PHP Classes are disabled by admin or you are using '.APP.' Free version';
$l['invalid_class_id'] = 'Invalid Class ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'インストール';
$l['overview'] = 'リードミー';
$l['features'] = '特徴機能';
$l['demo'] = 'デモ';
$l['file'] = 'ファイル';
$l['ratings'] = '評価';
$l['import'] = 'インポート';
$l['software_ver'] = 'バージョン';
$l['space_req'] = '必要な空き容量';
$l['available_space'] = '空き容量';
$l['req_space'] = '必要な空き容量';
$l['mb'] = 'MB';
$l['software_support'] = 'ソフトウェアサポート';
$l['support_link'] = 'サポートサイト';
$l['support_note'] = '※Softaculousでは、いかなるソフトウェアのサポートも行っておりません。';
$l['setup'] = 'ソフトウェアセットアップ';
$l['choose_domain'] = 'ドメインの選択';
$l['choose_domain_exp'] = 'ソフトウェアインストールのために、ドメインを選択して下さい。';
$l['in_directory'] = 'ディレクトリ';
$l['in_directory_exp'] = 'ディレクトリはあなたのホーム・パスと関連しており、存在していない場合に作成されます（例： &soft-1;/dirでインストールする場合は <b>dir</b>と入力して下さい。 &soft-1;/ でインストールする場合は空欄のままとして下さい）。';
$l['aef_in_directory_exp'] = 'ディレクトリはあなたのホーム・パスと関連しており、存在していない場合に作成されます（例： <span id="aef_span_lang">&soft-1;</span>/dirでインストールする場合は <b>dir</b>と入力して下さい。 <span id="aef_span_lang_a">&soft-1;</span>/でインストールする場合は空欄のままとして下さい）。';
$l['softsubmit'] = 'インストール';
$l['congrats'] = 'おめでとうございます。ソフトウェアは正常にインストールされました。';
$l['succesful'] = '正常にインストールされました。';
$l['enjoy'] = 'We hope the installation process was easy.';
$l['install_notes'] = '下記事項は重要なものとなりますので、ご一読下さい。 ';
$l['please_note'] = '※'.APP.' は自動ソフトウェアインストーラーのため、個々のソフトウェア・パッケージについて、いかなるサポートの提供も行っておりません。サポートに関しては、ソフトウェア販売元のサイトをご参照下さい。';
$l['regards'] = '注意';
$l['softinstaller'] = ' Softaculous 自動インストーラー';
$l['return'] = '概要へ戻る';
$l['current_ins'] = '最新インスタレーション';
$l['link'] = 'リンク';
$l['ins_time'] = 'インストール時間';
$l['version'] = 'バージョン';
$l['upd_to'] = 'バージョンのアップグレード';
$l['remove'] = '削除';
$l['no_info'] = '情報はありません。';
$l['ratesoft'] = 'スクリプトの評価';
$l['reviews'] = 'レビュー';
$l['reviewsoft'] = 'レビューを書く';
$l['readreviews'] = 'レビューを読む';
$l['reviews_exp'] = '他のユーザーのレビューを読む';
$l['ins_type'] = 'インストールタイプ';
$l['ins_type_exp'] = '<b>オリジナルパッケージ</b> - パッケージはスクリプトのウェブサイトから利用可能です。<br /> <b>ライブラリファイル</b> -  Javascripライブラリファイル';
$l['ori_pack'] = 'オリジナルパッケージ';
$l['just_lib'] = 'ライブラリファイル';
$l['overwrite_exist'] = '<input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">全てのファイル上書のため、チェックボックスを選択し、次へ進んで下さい。</span></b>';
$l['overwrite'] = 'ファイルの上書き';
$l['choose_protocol'] = 'プロトコルの選択';
$l['choose_protocol_exp'] = 'あなたのサイトがSSLの場合、HTTPSプロトコルを選択して下さい。';
$l['downloading'] = 'パッケージのダウンロード';
$l['installing'] = 'スクリプトのインストール';
$l['files'] = 'ファイル＆フォルダ';
$l['modified_time'] = '最終更新日';
$l['size'] = 'サイズ';
$l['classes_ins_error'] = 'インスタレーションの保存中にエラーが発生しました。';
$l['del_insid'] = '選択されたインスタレーションを削除してもよろしいですか？削除は取り消すことができません。また、これ以上の確認も求められません。';
$l['rem_inst_id'] = '–インスタレーションの削除';
$l['no_sel_inst'] = '削除するインスタレーションが選択されていません。';
$l['inst_remvd'] = '選択されたインスタレーションは削除されました。このページは
リロードされます
。';
$l['go'] = 'Go';
$l['download_zip'] = ' 全てのファイルをダウンロードする。';
$l['software_category'] = 'カテゴリー';
$l['adv_option'] = 'アドバンスド・オプション';
$l['disable_notify_update'] = 'アップデート通知を無効にする。';
$l['exp_disable_notify_update'] = 'チェックした場合、本インスタレーションのアップデートは、Ｅメール通知されません。';
$l['prog_installing'] = 'インストール中 ';// Dont remove the trailing space
$l['prog_install_complete'] = 'インストール完了';
$l['with_selected'] = '選択した状態で';
$l['download'] = 'Download';

