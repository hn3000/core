<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/ja/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['ERR']['general'] = 'エラーが発生しました。';
$GLOBALS['TL_LANG']['ERR']['unique'] = '"%s"の欄の内容は既に使用していますので、変更してください。';
$GLOBALS['TL_LANG']['ERR']['mandatory'] = '"%s"の欄に入力してください。';
$GLOBALS['TL_LANG']['ERR']['mdtryNoLabel'] = 'この欄に入力してください。';
$GLOBALS['TL_LANG']['ERR']['minlength'] = '"%s"の欄は少なくとも%d文字以上を入力してください。';
$GLOBALS['TL_LANG']['ERR']['maxlength'] = '"%s"の欄は%d文字以下で入力してください。';
$GLOBALS['TL_LANG']['ERR']['digit'] = '数値を入力してください。';
$GLOBALS['TL_LANG']['ERR']['prcnt'] = '0から100の間のパーセントで入力してください。';
$GLOBALS['TL_LANG']['ERR']['alpha'] = '半角の英文字、マイナス(-)、ドット(.)、スペース( )で入力してください。';
$GLOBALS['TL_LANG']['ERR']['alnum'] = '半角の英数字、マイナス(-)、ドット(.)、スペース( )で入力してください。';
$GLOBALS['TL_LANG']['ERR']['phone'] = '半角の数字、プラス(+)、マイナス(-)、丸括弧で電話番号を入力してください。';
$GLOBALS['TL_LANG']['ERR']['extnd'] = 'セキュリティ上の理由のため、ここでは以下の文字は使用できせん: =<>&/()#';
$GLOBALS['TL_LANG']['ERR']['email'] = '正しい電子メールアドレスを入力してください。';
$GLOBALS['TL_LANG']['ERR']['emails'] = '少なくとも1つ、正しくない電子メールアドレスがあります。';
$GLOBALS['TL_LANG']['ERR']['url'] = '有効なURLの書式で、特殊文字はエンコードして入力してください。';
$GLOBALS['TL_LANG']['ERR']['alias'] = '英数字の文字と次の特殊な文字だけ入力してください: .-_';
$GLOBALS['TL_LANG']['ERR']['folderalias'] = '英数字の文字と次の特殊文字だけ入力してください: .-/_';
$GLOBALS['TL_LANG']['ERR']['date'] = '日付を"%s"の書式で入力してください。';
$GLOBALS['TL_LANG']['ERR']['time'] = '時刻を"%s"の書式で入力してください。';
$GLOBALS['TL_LANG']['ERR']['dateTime'] = '日付と時刻を"%s"の書式で入力してください。';
$GLOBALS['TL_LANG']['ERR']['noSpace'] = '"%s"の欄に空白文字を含めてないでください。';
$GLOBALS['TL_LANG']['ERR']['filesize'] = 'アップロードできるファイルは(Contaoまたはphp.iniの設定により)最大%sまでの大きさです。';
$GLOBALS['TL_LANG']['ERR']['filetype'] = 'ファイル形式"%s"はアップロードを許可していない形式です。';
$GLOBALS['TL_LANG']['ERR']['filepartial'] = '%sというファイルは一部だけがアップロードできました。';
$GLOBALS['TL_LANG']['ERR']['filewidth'] = '%sという画像ファイルは最大の幅の%dピクセルを超えています。';
$GLOBALS['TL_LANG']['ERR']['fileheight'] = '%sという画像ファイルは最大の高さの%dピクセルを超えています。';
$GLOBALS['TL_LANG']['ERR']['invalidReferer'] = 'アクセスを拒否しました。現在のホストのアドレス(%s)がリファラーのホストのアドレス(%s)と一致していません。';
$GLOBALS['TL_LANG']['ERR']['invalidPass'] = 'パスワードが正しくありません。';
$GLOBALS['TL_LANG']['ERR']['passwordLength'] = 'パスワードは少なくとも%d文字以上を入力してください。';
$GLOBALS['TL_LANG']['ERR']['passwordName'] = 'ユーザー名とパスワードは同一にはできません。';
$GLOBALS['TL_LANG']['ERR']['passwordMatch'] = 'パスワードが一致しませんでした。';
$GLOBALS['TL_LANG']['ERR']['accountLocked'] = 'このアカウントはロックされています。%d分後に再びログインできるようになります。';
$GLOBALS['TL_LANG']['ERR']['invalidLogin'] = 'ログインできませんでした。';
$GLOBALS['TL_LANG']['ERR']['invalidColor'] = '色の書式が誤っています。';
$GLOBALS['TL_LANG']['ERR']['all_fields'] = '少なくとも一つの項目を選択してください。';
$GLOBALS['TL_LANG']['ERR']['aliasExists'] = '"%s"というエイリアスは既に存在します。';
$GLOBALS['TL_LANG']['ERR']['importFolder'] = '"%s"はフォルダーなのでインポートできません。';
$GLOBALS['TL_LANG']['ERR']['notWriteable'] = '"%s"というファイルに書き込みできないため、更新できません。';
$GLOBALS['TL_LANG']['ERR']['invalidName'] = 'このファイルまたはフォルダーの名前が正しくありません。';
$GLOBALS['TL_LANG']['ERR']['invalidFile'] = '"%s"というファイルまたはフォルダーは無効です。';
$GLOBALS['TL_LANG']['ERR']['fileExists'] = '"%s"というファイルは既に存在します。';
$GLOBALS['TL_LANG']['ERR']['circularReference'] = 'リダイレクト先が誤って(循環参照して)います。';
$GLOBALS['TL_LANG']['ERR']['ie6warning'] = '<strong>ご注意ください</strong>: ご使用しているウェブブラウザーは%sサポートの期限を過ぎたバージョン%sです。<strong>このウェブサイトのすべての機能を利用できないかもしれません</strong>。';
$GLOBALS['TL_LANG']['ERR']['noFallbackEmpty'] = '明示的にDNSの設定をしていない、有効なウェブサイトのルートのページのどれにも言語の代替の選択を設定がありません。結果として、これらのウェブサイトはページの設定で指定した、1つの言語だけで利用可能なことを意味します! その言語を提示してこないサイトの利用者と検索エンジンはサイトを閲覧できません。';
$GLOBALS['TL_LANG']['ERR']['noFallbackDns'] = '<strong>%s</strong>用ウェブサイトの、有効なルートのページに言語の代替の選択を設定がありません。結果として、これらのウェブサイトはページの設定で指定した、1つの言語だけで利用可能なことを意味します! その言語を提示してこないサイトの利用者と検索エンジンはサイトを閲覧できません。';
$GLOBALS['TL_LANG']['ERR']['multipleFallback'] = '言語の代替とするウェブサイトのルートのページは1つだけ設定できます。';
$GLOBALS['TL_LANG']['ERR']['topLevelRoot'] = '最上位のページはウェブサイトのルートでなければなりません。';
$GLOBALS['TL_LANG']['ERR']['topLevelRegular'] = 'ウェブサイトのルートでない最上位のページがあります。ウェブサイトのルートのページを作成しない、ウェブサイトの作成はサポートしなくなりましたので、すべてのページはウェブサイトのルートのページ以下にまとめているか確認してください。';
$GLOBALS['TL_LANG']['ERR']['invalidTokenUrl'] = '開こうとしているURLを検証できません。あなた自身でクリックしたか、信頼に値する人から受け取ったリンクでしたら、以下を承認して処理を進めて良いでしょう。';
$GLOBALS['TL_LANG']['ERR']['version2format'] = 'この要素は古いContao 2 SRC形式を、まだ使用しています。データベースを更新しましたか?';
$GLOBALS['TL_LANG']['ERR']['form'] = 'フォームを送信できませんでした。';
$GLOBALS['TL_LANG']['ERR']['captcha'] = '回答を入力してください。';
$GLOBALS['TL_LANG']['ERR']['download'] = '"%s"というファイルはダウンロードできません。';
$GLOBALS['TL_LANG']['ERR']['invalid'] = '正しくない入力: %s';
$GLOBALS['TL_LANG']['ERR']['fileNotFoundSync'] = '%sに対応するデータベースの項目がありません。ファイルシステムと同期してください。';
$GLOBALS['TL_LANG']['SEC']['question1'] = '%dと%dを加算してください。';
$GLOBALS['TL_LANG']['SEC']['question2'] = '%dと%dの合計は何ですか?';
$GLOBALS['TL_LANG']['SEC']['question3'] = '%dプラス%dを計算してください。';
$GLOBALS['TL_LANG']['CTE']['texts'] = 'テキストの要素';
$GLOBALS['TL_LANG']['CTE']['headline'][0] = '見出し';
$GLOBALS['TL_LANG']['CTE']['headline'][1] = '見出し(h1からh6)を生成します。';
$GLOBALS['TL_LANG']['CTE']['text'][0] = 'テキスト';
$GLOBALS['TL_LANG']['CTE']['text'][1] = 'リッチテキスト要素を生成します。';
$GLOBALS['TL_LANG']['CTE']['html'][0] = 'HTML';
$GLOBALS['TL_LANG']['CTE']['html'][1] = '独自のHTMLコードを追加します。';
$GLOBALS['TL_LANG']['CTE']['list'][0] = '箇条書き';
$GLOBALS['TL_LANG']['CTE']['list'][1] = '順序付きや順序なしの箇条書きを生成します。';
$GLOBALS['TL_LANG']['CTE']['table'][0] = '表';
$GLOBALS['TL_LANG']['CTE']['table'][1] = '並べ替えも可能な表を生成します。';
$GLOBALS['TL_LANG']['CTE']['accordion'][0] = 'アコーディオン';
$GLOBALS['TL_LANG']['CTE']['accordion'][1] = 'MooToolsのアコーディオンの枠を生成します。';
$GLOBALS['TL_LANG']['CTE']['code'][0] = 'コード';
$GLOBALS['TL_LANG']['CTE']['code'][1] = 'コードの抜粋を強調して画面に表示します。';
$GLOBALS['TL_LANG']['CTE']['links'] = 'リンクの要素';
$GLOBALS['TL_LANG']['CTE']['hyperlink'][0] = 'ハイパーリンク';
$GLOBALS['TL_LANG']['CTE']['hyperlink'][1] = '他のウェブサイトへのリンクを生成します。';
$GLOBALS['TL_LANG']['CTE']['toplink'][0] = 'トップリンク';
$GLOBALS['TL_LANG']['CTE']['toplink'][1] = 'ページの先頭に移動するリンクを生成します。';
$GLOBALS['TL_LANG']['CTE']['media'] = 'メディアの要素';
$GLOBALS['TL_LANG']['CTE']['image'][0] = '画像';
$GLOBALS['TL_LANG']['CTE']['image'][1] = '単独の画像を生成します。';
$GLOBALS['TL_LANG']['CTE']['gallery'][0] = '画像ギャラリー';
$GLOBALS['TL_LANG']['CTE']['gallery'][1] = 'ライトボックスによる画像のギャラリーを生成します。';
$GLOBALS['TL_LANG']['CTE']['player'][0] = '映像や音声';
$GLOBALS['TL_LANG']['CTE']['player'][1] = '映像や音声のプレーヤーを生成します。';
$GLOBALS['TL_LANG']['CTE']['youtube'][0] = 'YouTube';
$GLOBALS['TL_LANG']['CTE']['youtube'][1] = 'YouTubeの映像を追加します。';
$GLOBALS['TL_LANG']['CTE']['files'] = 'ファイルの要素';
$GLOBALS['TL_LANG']['CTE']['download'][0] = 'ダウンロード';
$GLOBALS['TL_LANG']['CTE']['download'][1] = 'ファイルをダウンロードする単一のリンクを生成します。';
$GLOBALS['TL_LANG']['CTE']['downloads'][0] = '複数ダウンロード';
$GLOBALS['TL_LANG']['CTE']['downloads'][1] = 'ファイルをダウンロードする複数のリンクを生成します。';
$GLOBALS['TL_LANG']['CTE']['includes'] = '要素の取り込み';
$GLOBALS['TL_LANG']['CTE']['article'][0] = 'アーティクル';
$GLOBALS['TL_LANG']['CTE']['article'][1] = '他のアーティクルを取り込みます。';
$GLOBALS['TL_LANG']['CTE']['alias'][0] = 'コンテンツ要素';
$GLOBALS['TL_LANG']['CTE']['alias'][1] = '他のコンテンツ要素を取り込みます。';
$GLOBALS['TL_LANG']['CTE']['form'][0] = 'フォーム';
$GLOBALS['TL_LANG']['CTE']['form'][1] = 'フォームを含めます。';
$GLOBALS['TL_LANG']['CTE']['module'][0] = 'モジュール';
$GLOBALS['TL_LANG']['CTE']['module'][1] = 'フロントエンドモジュールを含めます。';
$GLOBALS['TL_LANG']['CTE']['teaser'][0] = 'アーティクルのティーザー';
$GLOBALS['TL_LANG']['CTE']['teaser'][1] = 'アーティクルのティーザーのテキストを表示します。';
$GLOBALS['TL_LANG']['PTY']['regular'][0] = '通常ページ';
$GLOBALS['TL_LANG']['PTY']['regular'][1] = '通常ページは、アーティクルとコンテンツ要素を含みます。これはページの種類の初期値です。';
$GLOBALS['TL_LANG']['PTY']['redirect'][0] = '外部リダイレクト';
$GLOBALS['TL_LANG']['PTY']['redirect'][1] = '外部リダイレクトのページは、ページをアクセスすると外部のウェブサイトに自動的にリダイレクトします。ハイパーリンクのように機能します。';
$GLOBALS['TL_LANG']['PTY']['forward'][0] = '内部リダイレクト';
$GLOBALS['TL_LANG']['PTY']['forward'][1] = '内部リダイレクトのページは、ページをアクセスするとサイト構造内の別のページに自動的に移動します。';
$GLOBALS['TL_LANG']['PTY']['root'][0] = 'ウェブサイトのルート';
$GLOBALS['TL_LANG']['PTY']['root'][1] = 'ウェブサイトのルートのページは、サイト構造内で新しいウェブサイトの開始点を示します。';
$GLOBALS['TL_LANG']['PTY']['error_403'][0] = '403 アクセス拒否';
$GLOBALS['TL_LANG']['PTY']['error_403'][1] = 'アクセス権のない保護されたページをユーザーが要求すると、代わりに403のエラーページが読み込まれます。';
$GLOBALS['TL_LANG']['PTY']['error_404'][0] = '404 存在しないページ';
$GLOBALS['TL_LANG']['PTY']['error_404'][1] = '存在しないページをユーザーが要求すると、代わりに404のエラーページが読み込まれます。';
$GLOBALS['TL_LANG']['FOP']['fop'][0] = 'ファイル操作の権限';
$GLOBALS['TL_LANG']['FOP']['fop'][1] = '許可するファイル操作を選択します。';
$GLOBALS['TL_LANG']['FOP']['f1'] = 'サーバーにファイルをアップロード';
$GLOBALS['TL_LANG']['FOP']['f2'] = 'ファイルとフォルダーの編集、コピー、移動';
$GLOBALS['TL_LANG']['FOP']['f3'] = 'ファイルや空のフォルダーを1つ削除';
$GLOBALS['TL_LANG']['FOP']['f4'] = '中のファイルや下位のフォルダーを含めたフォルダーの削除(注意!)';
$GLOBALS['TL_LANG']['FOP']['f5'] = 'ソースエディターでファイルを編集';
$GLOBALS['TL_LANG']['CHMOD']['editpage'] = 'ページの変更';
$GLOBALS['TL_LANG']['CHMOD']['editnavigation'] = 'ページ階層の変更';
$GLOBALS['TL_LANG']['CHMOD']['deletepage'] = 'ページの削除';
$GLOBALS['TL_LANG']['CHMOD']['editarticles'] = 'アーティクルの変更';
$GLOBALS['TL_LANG']['CHMOD']['movearticles'] = 'アーティクル階層の変更';
$GLOBALS['TL_LANG']['CHMOD']['deletearticles'] = 'アーティクルの削除';
$GLOBALS['TL_LANG']['CHMOD']['cuser'] = '所有者';
$GLOBALS['TL_LANG']['CHMOD']['cgroup'] = 'グループ';
$GLOBALS['TL_LANG']['CHMOD']['cworld'] = 'その他';
$GLOBALS['TL_LANG']['DAYS'][0] = '日曜日';
$GLOBALS['TL_LANG']['DAYS'][1] = '月曜日';
$GLOBALS['TL_LANG']['DAYS'][2] = '火曜日';
$GLOBALS['TL_LANG']['DAYS'][3] = '水曜日';
$GLOBALS['TL_LANG']['DAYS'][4] = '木曜日';
$GLOBALS['TL_LANG']['DAYS'][5] = '金曜日';
$GLOBALS['TL_LANG']['DAYS'][6] = '土曜日';
$GLOBALS['TL_LANG']['DAYS_SHORT'][0] = '日';
$GLOBALS['TL_LANG']['DAYS_SHORT'][1] = '月';
$GLOBALS['TL_LANG']['DAYS_SHORT'][2] = '火';
$GLOBALS['TL_LANG']['DAYS_SHORT'][3] = '水';
$GLOBALS['TL_LANG']['DAYS_SHORT'][4] = '木';
$GLOBALS['TL_LANG']['DAYS_SHORT'][5] = '金';
$GLOBALS['TL_LANG']['DAYS_SHORT'][6] = '土';
$GLOBALS['TL_LANG']['MONTHS'][0] = '1月';
$GLOBALS['TL_LANG']['MONTHS'][1] = '2月';
$GLOBALS['TL_LANG']['MONTHS'][2] = '3月';
$GLOBALS['TL_LANG']['MONTHS'][3] = '4月';
$GLOBALS['TL_LANG']['MONTHS'][4] = '5月';
$GLOBALS['TL_LANG']['MONTHS'][5] = '6月';
$GLOBALS['TL_LANG']['MONTHS'][6] = '7月';
$GLOBALS['TL_LANG']['MONTHS'][7] = '8月';
$GLOBALS['TL_LANG']['MONTHS'][8] = '9月';
$GLOBALS['TL_LANG']['MONTHS'][9] = '10月';
$GLOBALS['TL_LANG']['MONTHS'][10] = '11月';
$GLOBALS['TL_LANG']['MONTHS'][11] = '12月';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][0] = '1';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][1] = '2';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][2] = '3';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][3] = '4';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][4] = '5';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][5] = '6';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][6] = '7';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][7] = '8';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][8] = '9';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][9] = '10';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][10] = '11';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][11] = '12';
$GLOBALS['TL_LANG']['MSC']['dayShortLength'] = '1';
$GLOBALS['TL_LANG']['MSC']['monthShortLength'] = '1';
$GLOBALS['TL_LANG']['MSC']['weekOffset'] = '1';
$GLOBALS['TL_LANG']['MSC']['titleFormat'] = '%Y年%d月%d日';
$GLOBALS['TL_LANG']['MSC']['url'][0] = 'リンク先';
$GLOBALS['TL_LANG']['MSC']['url'][1] = 'ウェブアドレス(http://...)、電子メールアドレス(mailto:...)、挿入タグを入力してください。';
$GLOBALS['TL_LANG']['MSC']['target'][0] = '新しいウィンドウで開く';
$GLOBALS['TL_LANG']['MSC']['target'][1] = 'ブラウザーの新しいウィンドウでリンクを開きます。';
$GLOBALS['TL_LANG']['MSC']['decimalSeparator'] = '.';
$GLOBALS['TL_LANG']['MSC']['thousandsSeparator'] = ',';
$GLOBALS['TL_LANG']['MSC']['separator'][0] = '区切り';
$GLOBALS['TL_LANG']['MSC']['separator'][1] = '項目の区切り文字を選択してください。';
$GLOBALS['TL_LANG']['MSC']['source'][0] = 'ソースファイル';
$GLOBALS['TL_LANG']['MSC']['source'][1] = 'インポートsuするCSVファイルをアップロードしてください。';
$GLOBALS['TL_LANG']['MSC']['comma'] = 'コンマ';
$GLOBALS['TL_LANG']['MSC']['semicolon'] = 'セミコロン';
$GLOBALS['TL_LANG']['MSC']['tabulator'] = 'タブ';
$GLOBALS['TL_LANG']['MSC']['linebreak'] = '改行';
$GLOBALS['TL_LANG']['MSC']['lw_import'][0] = 'CSVのインポート';
$GLOBALS['TL_LANG']['MSC']['lw_import'][1] = 'CSVファイルから箇条書きの項目をインポート';
$GLOBALS['TL_LANG']['MSC']['lw_copy'] = '要素を複製';
$GLOBALS['TL_LANG']['MSC']['lw_up'] = '要素を1つ上の位置に移動';
$GLOBALS['TL_LANG']['MSC']['lw_down'] = '要素を1つ下の位置に移動';
$GLOBALS['TL_LANG']['MSC']['lw_delete'] = '要素を削除';
$GLOBALS['TL_LANG']['MSC']['tw_import'][0] = 'CSVのインポート';
$GLOBALS['TL_LANG']['MSC']['tw_import'][1] = 'CSVファイルから表の項目をインポート';
$GLOBALS['TL_LANG']['MSC']['tw_expand'] = '入力欄の大きさを拡大';
$GLOBALS['TL_LANG']['MSC']['tw_shrink'] = '入力欄の大きさを縮小';
$GLOBALS['TL_LANG']['MSC']['tw_rcopy'] = '行を複製';
$GLOBALS['TL_LANG']['MSC']['tw_rup'] = '行を1つ上の位置に移動';
$GLOBALS['TL_LANG']['MSC']['tw_rdown'] = '行を1つ下の位置に移動';
$GLOBALS['TL_LANG']['MSC']['tw_rdelete'] = '行を削除';
$GLOBALS['TL_LANG']['MSC']['tw_ccopy'] = '列を複製';
$GLOBALS['TL_LANG']['MSC']['tw_cmovel'] = '列を1つ左の位置に移動';
$GLOBALS['TL_LANG']['MSC']['tw_cmover'] = '列を1つ右の位置に移動';
$GLOBALS['TL_LANG']['MSC']['tw_cdelete'] = '列を削除';
$GLOBALS['TL_LANG']['MSC']['ow_copy'] = '行を複製';
$GLOBALS['TL_LANG']['MSC']['ow_up'] = '行を1つ上の位置に移動';
$GLOBALS['TL_LANG']['MSC']['ow_down'] = '行を1つ下の位置に移動';
$GLOBALS['TL_LANG']['MSC']['ow_delete'] = '行を削除';
$GLOBALS['TL_LANG']['MSC']['ow_value'] = '値';
$GLOBALS['TL_LANG']['MSC']['ow_label'] = 'ラベル';
$GLOBALS['TL_LANG']['MSC']['ow_key'] = 'キー';
$GLOBALS['TL_LANG']['MSC']['ow_default'] = '初期値';
$GLOBALS['TL_LANG']['MSC']['ow_group'] = 'グループ';
$GLOBALS['TL_LANG']['MSC']['mw_copy'] = '行を複製';
$GLOBALS['TL_LANG']['MSC']['mw_up'] = '行を1つ上に移動';
$GLOBALS['TL_LANG']['MSC']['mw_down'] = '行を1つ下に移動';
$GLOBALS['TL_LANG']['MSC']['mw_delete'] = '行を削除';
$GLOBALS['TL_LANG']['MSC']['mw_module'] = 'モジュール';
$GLOBALS['TL_LANG']['MSC']['mw_column'] = '列';
$GLOBALS['TL_LANG']['MSC']['aw_title'] = '題名';
$GLOBALS['TL_LANG']['MSC']['aw_link'] = 'リンク';
$GLOBALS['TL_LANG']['MSC']['aw_caption'] = 'キャプション';
$GLOBALS['TL_LANG']['MSC']['aw_delete'] = '言語を削除';
$GLOBALS['TL_LANG']['MSC']['aw_new'] = '言語を追加';
$GLOBALS['TL_LANG']['MSC']['relative'] = '相対的な寸法';
$GLOBALS['TL_LANG']['MSC']['proportional'][0] = '縦横比を保持';
$GLOBALS['TL_LANG']['MSC']['proportional'][1] = '画像の長い側を指定した寸法に調整して、画像の縦横比を保持して大きさを変更します。';
$GLOBALS['TL_LANG']['MSC']['box'][0] = 'ボックスに一致';
$GLOBALS['TL_LANG']['MSC']['box'][1] = '画像の短い側を指定した寸法に調整して、画像の縦横比を保持して大きさを変更します。';
$GLOBALS['TL_LANG']['MSC']['crop'] = '正確な寸法';
$GLOBALS['TL_LANG']['MSC']['left_top'][0] = '左 | 上';
$GLOBALS['TL_LANG']['MSC']['left_top'][1] = '画像の横方向の左側と縦方向の上の部分を保存します。';
$GLOBALS['TL_LANG']['MSC']['center_top'][0] = '中央 | 上';
$GLOBALS['TL_LANG']['MSC']['center_top'][1] = '画像の横方向の中央と縦方向の上の部分を保存します。';
$GLOBALS['TL_LANG']['MSC']['right_top'][0] = '右 | 上';
$GLOBALS['TL_LANG']['MSC']['right_top'][1] = '画像の横方向の右側と縦方向の上の部分を保存します。';
$GLOBALS['TL_LANG']['MSC']['left_center'][0] = '左 | 中央';
$GLOBALS['TL_LANG']['MSC']['left_center'][1] = '画像の横方向の左側と縦方向の中央の部分を保存します。';
$GLOBALS['TL_LANG']['MSC']['center_center'][0] = '中央 | 中央';
$GLOBALS['TL_LANG']['MSC']['center_center'][1] = '画像の横方向の中央とと縦方向の中央の部分を保存します。';
$GLOBALS['TL_LANG']['MSC']['right_center'][0] = '右 | 中央';
$GLOBALS['TL_LANG']['MSC']['right_center'][1] = '画像の横方向の右側と縦方向の中央の部分を保存します。';
$GLOBALS['TL_LANG']['MSC']['left_bottom'][0] = '左 | 下';
$GLOBALS['TL_LANG']['MSC']['left_bottom'][1] = '画像の横方向の左側と縦方向の下の部分を保存します。';
$GLOBALS['TL_LANG']['MSC']['center_bottom'][0] = '中央 | 下';
$GLOBALS['TL_LANG']['MSC']['center_bottom'][1] = '画像の横方向の中央と縦方向の下の部分を保存します。';
$GLOBALS['TL_LANG']['MSC']['right_bottom'][0] = '右 | 下';
$GLOBALS['TL_LANG']['MSC']['right_bottom'][1] = '画像の横方向の右側と縦方向の下の部分を保存します。';
$GLOBALS['TL_LANG']['MSC']['id'][0] = 'ID';
$GLOBALS['TL_LANG']['MSC']['id'][1] = 'IDを変更するとデータの完全性を損なう恐れがあるので注意してください。';
$GLOBALS['TL_LANG']['MSC']['pid'][0] = '親のID';
$GLOBALS['TL_LANG']['MSC']['pid'][1] = '親のIDを変更するとデータの完全性を損なう恐れがあるので注意してください。';
$GLOBALS['TL_LANG']['MSC']['sorting'][0] = '並べ替えの値';
$GLOBALS['TL_LANG']['MSC']['sorting'][1] = '並べ替えの値は通常自動的に割り当てられます。';
$GLOBALS['TL_LANG']['MSC']['all'][0] = '複数を変更';
$GLOBALS['TL_LANG']['MSC']['all'][1] = '複数の項目を一度に変更';
$GLOBALS['TL_LANG']['MSC']['all_override'][0] = '複数を上書き';
$GLOBALS['TL_LANG']['MSC']['all_override'][1] = '複数の項目を一度に上書き';
$GLOBALS['TL_LANG']['MSC']['all_fields'][0] = '利用できる項目';
$GLOBALS['TL_LANG']['MSC']['all_fields'][1] = '変更したい項目を選択してください。';
$GLOBALS['TL_LANG']['MSC']['password'][0] = 'パスワード';
$GLOBALS['TL_LANG']['MSC']['password'][1] = 'パスワードを入力してください。';
$GLOBALS['TL_LANG']['MSC']['confirm'][0] = 'パスワードの再入力';
$GLOBALS['TL_LANG']['MSC']['confirm'][1] = '確認のためにパスワードを再度入力してください。';
$GLOBALS['TL_LANG']['MSC']['dateAdded'][0] = '追加した日付';
$GLOBALS['TL_LANG']['MSC']['dateAdded'][1] = '追加した日付: %s';
$GLOBALS['TL_LANG']['MSC']['lastLogin'][0] = '最後のログイン';
$GLOBALS['TL_LANG']['MSC']['lastLogin'][1] = '最後のログイン: %s';
$GLOBALS['TL_LANG']['MSC']['move_up'][0] = '上に移動';
$GLOBALS['TL_LANG']['MSC']['move_up'][1] = '項目を1つ上の位置に移動';
$GLOBALS['TL_LANG']['MSC']['move_down'][0] = '下に移動';
$GLOBALS['TL_LANG']['MSC']['move_down'][1] = '項目を1つ下の位置に移動';
$GLOBALS['TL_LANG']['MSC']['staticFiles'][0] = 'ファイルのURL';
$GLOBALS['TL_LANG']['MSC']['staticFiles'][1] = 'ファイルのURLは<em>files</em>のディレクトリとすべての画像のサムネイルに適用します。(Page Speed最適化)';
$GLOBALS['TL_LANG']['MSC']['staticPlugins'][0] = 'assetsのURL';
$GLOBALS['TL_LANG']['MSC']['staticPlugins'][1] = 'asstesのURLは<em>assets</em>のディレクトリに適用します。(Page Speed最適化)';
$GLOBALS['TL_LANG']['MSC']['shortcuts'][0] = 'バックエンドのキーボードのショートカット';
$GLOBALS['TL_LANG']['MSC']['shortcuts'][1] = '<a href="http://contao.org/ja/keyboard-shortcuts.html" target="_blank">キーボードのショートカット</a>の使用を学んで、作業の流れを速くしましょう。';
$GLOBALS['TL_LANG']['MSC']['toggleAll'][0] = 'すべてを切り替え';
$GLOBALS['TL_LANG']['MSC']['toggleAll'][1] = 'すべてのノードの展開または折り畳み';
$GLOBALS['TL_LANG']['MSC']['lockedAccount'][0] = 'Contaoのアカウントはロック中';
$GLOBALS['TL_LANG']['MSC']['lockedAccount'][1] = "以下のContaoのアカウントはセキュリティ上の理由のためロックしました。\n\nユーザー名: %s\n氏名: %s\nウェブサイト: %s\n\nアカウントのロックは、あと%d分続き、ユーザーが正しくないパスワードを連続して3回入力したためです。この期間の後で、アカウントのロックは自動的に解除となります。\n\nこの電子メールはContaoが作成しました。直接返信はできません。\n";
$GLOBALS['TL_LANG']['MSC']['toggleMobile'][0] = '移動端末版';
$GLOBALS['TL_LANG']['MSC']['toggleMobile'][1] = '移動端末版に移動';
$GLOBALS['TL_LANG']['MSC']['toggleDesktop'][0] = 'デスクトップ版';
$GLOBALS['TL_LANG']['MSC']['toggleDesktop'][1] = 'デスクトップ版に移動';
$GLOBALS['TL_LANG']['MSC']['feLink'] = 'フロントエンドに移動';
$GLOBALS['TL_LANG']['MSC']['fePreview'] = 'フロントエンドのプレビュー';
$GLOBALS['TL_LANG']['MSC']['fePreviewTitle'] = '新しいウィンドウでウェブサイトをプレビュー';
$GLOBALS['TL_LANG']['MSC']['feUser'] = 'フロントエンドのユーザー';
$GLOBALS['TL_LANG']['MSC']['backToTop'] = '先頭に戻る';
$GLOBALS['TL_LANG']['MSC']['backToTopTitle'] = 'ページの先頭に移動';
$GLOBALS['TL_LANG']['MSC']['home'] = 'ホーム';
$GLOBALS['TL_LANG']['MSC']['homeTitle'] = 'バックエンドの開始ページに戻る';
$GLOBALS['TL_LANG']['MSC']['user'] = 'ユーザー';
$GLOBALS['TL_LANG']['MSC']['loginTo'] = '%sにログイン';
$GLOBALS['TL_LANG']['MSC']['loginBT'] = 'ログイン';
$GLOBALS['TL_LANG']['MSC']['logoutBT'] = 'ログアウト';
$GLOBALS['TL_LANG']['MSC']['logoutBTTitle'] = '現在のセッションを終了';
$GLOBALS['TL_LANG']['MSC']['backBT'] = '戻る';
$GLOBALS['TL_LANG']['MSC']['backBTTitle'] = '前のページに戻る';
$GLOBALS['TL_LANG']['MSC']['cancelBT'] = '取り止め';
$GLOBALS['TL_LANG']['MSC']['deleteConfirm'] = 'IDが%sの項目を本当に削除しますか?';
$GLOBALS['TL_LANG']['MSC']['delAllConfirm'] = '選択したレコードを本当に削除しますか?';
$GLOBALS['TL_LANG']['MSC']['filterRecords'] = 'レコード';
$GLOBALS['TL_LANG']['MSC']['filterAll'] = 'すべて';
$GLOBALS['TL_LANG']['MSC']['showRecord'] = '%sのレコードの詳細を表示';
$GLOBALS['TL_LANG']['MSC']['editRecord'] = '%sのレコードを変更';
$GLOBALS['TL_LANG']['MSC']['all_info'] = 'テーブル%sの選択したレコードを変更';
$GLOBALS['TL_LANG']['MSC']['showOnly'] = '表示';
$GLOBALS['TL_LANG']['MSC']['sortBy'] = '並べ替え';
$GLOBALS['TL_LANG']['MSC']['filter'] = 'フィルター';
$GLOBALS['TL_LANG']['MSC']['search'] = '検索';
$GLOBALS['TL_LANG']['MSC']['noResult'] = 'レコードがありません。';
$GLOBALS['TL_LANG']['MSC']['save'] = '保存';
$GLOBALS['TL_LANG']['MSC']['saveNclose'] = '保存して閉じる';
$GLOBALS['TL_LANG']['MSC']['saveNedit'] = '保存して編集';
$GLOBALS['TL_LANG']['MSC']['saveNback'] = '保存して戻る';
$GLOBALS['TL_LANG']['MSC']['saveNcreate'] = '保存して新しく作成';
$GLOBALS['TL_LANG']['MSC']['continue'] = '続ける';
$GLOBALS['TL_LANG']['MSC']['close'] = '閉じる';
$GLOBALS['TL_LANG']['MSC']['skipNavigation'] = 'ナビゲーションを飛ばす';
$GLOBALS['TL_LANG']['MSC']['selectAll'] = 'すべて選択';
$GLOBALS['TL_LANG']['MSC']['pw_new'] = 'パスワードの変更';
$GLOBALS['TL_LANG']['MSC']['pw_change'] = '新しいパスワードを入力してください。';
$GLOBALS['TL_LANG']['MSC']['pw_changed'] = 'パスワードを更新しました。';
$GLOBALS['TL_LANG']['MSC']['fallback'] = '初期値';
$GLOBALS['TL_LANG']['MSC']['view'] = '新しいウィンドウで見る';
$GLOBALS['TL_LANG']['MSC']['fullsize'] = '新しいウィンドウにフルサイズの画像を開く';
$GLOBALS['TL_LANG']['MSC']['datepicker'] = '日付選択';
$GLOBALS['TL_LANG']['MSC']['colorpicker'] = '色選択';
$GLOBALS['TL_LANG']['MSC']['pagepicker'] = 'ページ選択';
$GLOBALS['TL_LANG']['MSC']['filepicker'] = 'ファイル選択';
$GLOBALS['TL_LANG']['MSC']['ppHeadline'] = 'Contaoのページ';
$GLOBALS['TL_LANG']['MSC']['fpHeadline'] = 'Contaoのファイル';
$GLOBALS['TL_LANG']['MSC']['yes'] = 'はい';
$GLOBALS['TL_LANG']['MSC']['no'] = 'いいえ';
$GLOBALS['TL_LANG']['MSC']['goBack'] = '戻る';
$GLOBALS['TL_LANG']['MSC']['reload'] = '再読み込み';
$GLOBALS['TL_LANG']['MSC']['above'] = '上';
$GLOBALS['TL_LANG']['MSC']['below'] = '下';
$GLOBALS['TL_LANG']['MSC']['date'] = '日付';
$GLOBALS['TL_LANG']['MSC']['tstamp'] = '改訂日';
$GLOBALS['TL_LANG']['MSC']['entry'] = '%s項目';
$GLOBALS['TL_LANG']['MSC']['entries'] = '%s項目';
$GLOBALS['TL_LANG']['MSC']['files'] = '%s個のファイル';
$GLOBALS['TL_LANG']['MSC']['left'] = '左';
$GLOBALS['TL_LANG']['MSC']['center'] = '中央';
$GLOBALS['TL_LANG']['MSC']['right'] = '右';
$GLOBALS['TL_LANG']['MSC']['justify'] = '両端揃え';
$GLOBALS['TL_LANG']['MSC']['filetree'] = 'ファイルシステム';
$GLOBALS['TL_LANG']['MSC']['male'] = '男性';
$GLOBALS['TL_LANG']['MSC']['female'] = '女性';
$GLOBALS['TL_LANG']['MSC']['fileSize'] = 'ファイルの大きさ';
$GLOBALS['TL_LANG']['MSC']['fileCreated'] = '作成日時';
$GLOBALS['TL_LANG']['MSC']['fileModified'] = '最終修正日時';
$GLOBALS['TL_LANG']['MSC']['fileAccessed'] = '最終アクセス日時';
$GLOBALS['TL_LANG']['MSC']['fileDownload'] = 'ダウンロード';
$GLOBALS['TL_LANG']['MSC']['fileDownloadTitle'] = 'このファイルをダウンロード';
$GLOBALS['TL_LANG']['MSC']['fileImageSize'] = 'ピクセル単位の幅と高さ';
$GLOBALS['TL_LANG']['MSC']['filePath'] = '相対パス';
$GLOBALS['TL_LANG']['MSC']['version'] = 'バージョン';
$GLOBALS['TL_LANG']['MSC']['restore'] = '復元';
$GLOBALS['TL_LANG']['MSC']['backendModules'] = 'バックエンドモジュール';
$GLOBALS['TL_LANG']['MSC']['welcomeTo'] = '%sのバックエンド';
$GLOBALS['TL_LANG']['MSC']['updateVersion'] = 'Contaoバージョン%sを利用可能';
$GLOBALS['TL_LANG']['MSC']['wordWrap'] = 'ワードラップ';
$GLOBALS['TL_LANG']['MSC']['saveAlert'] = '注意! 保存していない変更は失われます。続けますか?';
$GLOBALS['TL_LANG']['MSC']['toggleNodes'] = 'すべてのノードを切り替え';
$GLOBALS['TL_LANG']['MSC']['expandNode'] = 'ノードを展開';
$GLOBALS['TL_LANG']['MSC']['collapseNode'] = 'ノードを折り畳み';
$GLOBALS['TL_LANG']['MSC']['loadingData'] = 'データを読み込み中';
$GLOBALS['TL_LANG']['MSC']['deleteSelected'] = '削除';
$GLOBALS['TL_LANG']['MSC']['editSelected'] = '編集';
$GLOBALS['TL_LANG']['MSC']['overrideSelected'] = '上書き';
$GLOBALS['TL_LANG']['MSC']['moveSelected'] = '移動';
$GLOBALS['TL_LANG']['MSC']['copySelected'] = 'コピー';
$GLOBALS['TL_LANG']['MSC']['aliasSelected'] = 'エイリアスを生成';
$GLOBALS['TL_LANG']['MSC']['changeSelected'] = '選択を変更';
$GLOBALS['TL_LANG']['MSC']['resetSelected'] = '選択を解除';
$GLOBALS['TL_LANG']['MSC']['fileManager'] = 'ファイル管理をポップアップウィンドウで開く';
$GLOBALS['TL_LANG']['MSC']['systemMessages'] = 'システムのメッセージ';
$GLOBALS['TL_LANG']['MSC']['clearClipboard'] = 'クリップボードを消去';
$GLOBALS['TL_LANG']['MSC']['hiddenElements'] = '非公開の要素';
$GLOBALS['TL_LANG']['MSC']['hiddenHide'] = '表示しない';
$GLOBALS['TL_LANG']['MSC']['hiddenShow'] = '表示する';
$GLOBALS['TL_LANG']['MSC']['apply'] = '適用';
$GLOBALS['TL_LANG']['MSC']['applyTitle'] = '変更を摘要';
$GLOBALS['TL_LANG']['MSC']['mandatory'] = '必須の欄';
$GLOBALS['TL_LANG']['MSC']['create'] = '作成';
$GLOBALS['TL_LANG']['MSC']['delete'] = '削除';
$GLOBALS['TL_LANG']['MSC']['protected'] = '保護した状態';
$GLOBALS['TL_LANG']['MSC']['guests'] = 'ゲストだけに表示';
$GLOBALS['TL_LANG']['MSC']['updateMode'] = '更新の方法';
$GLOBALS['TL_LANG']['MSC']['updateAdd'] = '選択した値を追加';
$GLOBALS['TL_LANG']['MSC']['updateRemove'] = '選択した値を削除';
$GLOBALS['TL_LANG']['MSC']['updateReplace'] = '既存の項目を置き換え';
$GLOBALS['TL_LANG']['MSC']['ascending'] = '昇順';
$GLOBALS['TL_LANG']['MSC']['descending'] = '降順';
$GLOBALS['TL_LANG']['MSC']['default'] = '初期値';
$GLOBALS['TL_LANG']['MSC']['helpWizard'] = 'ヘルプウィザードを開く';
$GLOBALS['TL_LANG']['MSC']['helpWizardTitle'] = 'ヘルプウィザード';
$GLOBALS['TL_LANG']['MSC']['noCookies'] = 'Contaoを使用するにはクッキーを許可しなければなりません。';
$GLOBALS['TL_LANG']['MSC']['copyOf'] = '%s (複製)';
$GLOBALS['TL_LANG']['MSC']['coreOnlyMode'] = '現在Contaoはコアのモジュールだけ読み込んだ<strong>セーフモード</strong>で動作しています。これは(例えば、ライブアップデートの後の)第三者の機能拡張の非互換性による問題を防ぐためです。インストールしてある第三者の機能拡張を確認した後で、バックエンドの設定で通常の動作モードに戻せます。';
$GLOBALS['TL_LANG']['MSC']['name'] = '名前';
$GLOBALS['TL_LANG']['MSC']['emailAddress'] = '電子メールアドレス';
$GLOBALS['TL_LANG']['MSC']['register'] = '登録';
$GLOBALS['TL_LANG']['MSC']['accountActivated'] = 'あなたのアカウントは有効になりました。';
$GLOBALS['TL_LANG']['MSC']['accountError'] = '現在の要求を処理できません。';
$GLOBALS['TL_LANG']['MSC']['emailSubject'] = '%sに登録';
$GLOBALS['TL_LANG']['MSC']['adminSubject'] = '%sで新しい登録';
$GLOBALS['TL_LANG']['MSC']['adminText'] = 'ウェブサイトに新しいメンバー(ID %s)を登録しました。%sアクティベーションの電子メールの送信をしていない場合は、バックエンドでアカウントを手作業で有効にしなければなりません。';
$GLOBALS['TL_LANG']['MSC']['requestPassword'] = 'パスワードを要求';
$GLOBALS['TL_LANG']['MSC']['setNewPassword'] = '新しいパスワードを設定';
$GLOBALS['TL_LANG']['MSC']['newPasswordSet'] = 'パスワードを更新しました。';
$GLOBALS['TL_LANG']['MSC']['passwordSubject'] = '%sのパスワードのリクエスト';
$GLOBALS['TL_LANG']['MSC']['accountNotFound'] = '一致するアカウントがありません。';
$GLOBALS['TL_LANG']['MSC']['securityQuestion'] = 'セキュリティ質問';
$GLOBALS['TL_LANG']['MSC']['closeAccount'] = 'アカウントを廃止';
$GLOBALS['TL_LANG']['MSC']['changeSelection'] = '選択を変更';
$GLOBALS['TL_LANG']['MSC']['currentlySelected'] = '選択中';
$GLOBALS['TL_LANG']['MSC']['selectNode'] = 'このノードだけを表示';
$GLOBALS['TL_LANG']['MSC']['selectAllNodes'] = 'すべてのノードを表示';
$GLOBALS['TL_LANG']['MSC']['showDifferences'] = '違いの表示';
$GLOBALS['TL_LANG']['MSC']['editElement'] = 'コンテンツ要素を編集';
$GLOBALS['TL_LANG']['MSC']['table'] = '表';
$GLOBALS['TL_LANG']['MSC']['description'] = '説明';
$GLOBALS['TL_LANG']['MSC']['noVersions'] = '現在、他のバージョンはありません。';
$GLOBALS['TL_LANG']['MSC']['latestChanges'] = '最近の変更';
$GLOBALS['TL_LANG']['MSC']['identicalVersions'] = '選択した2つのバージョンは同一です。';
$GLOBALS['TL_LANG']['MSC']['selectNewPosition'] = '次に、要素の(新しい)位置を選択してください';
$GLOBALS['TL_LANG']['MSC']['go'] = '移動';
$GLOBALS['TL_LANG']['MSC']['quicknav'] = 'クイックナビゲーション';
$GLOBALS['TL_LANG']['MSC']['quicklink'] = 'クイックリンク';
$GLOBALS['TL_LANG']['MSC']['username'] = 'ユーザー名';
$GLOBALS['TL_LANG']['MSC']['login'] = 'ログイン';
$GLOBALS['TL_LANG']['MSC']['logout'] = 'ログアウト';
$GLOBALS['TL_LANG']['MSC']['loggedInAs'] = '%sとしてログイン中です。';
$GLOBALS['TL_LANG']['MSC']['emptyField'] = 'ユーザー名とパスワードを入力しください。';
$GLOBALS['TL_LANG']['MSC']['confirmation'] = 'パスワードの再入力';
$GLOBALS['TL_LANG']['MSC']['sMatches'] = '%s件が%sに一致しました。';
$GLOBALS['TL_LANG']['MSC']['sEmpty'] = '何も<strong>%s</strong>に一致しません。';
$GLOBALS['TL_LANG']['MSC']['sResults'] = '結果: %s から %s (全%s件): 検索文字列: <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sNoResult'] = '<strong>%s</strong>の検索の結果はありませんでした。';
$GLOBALS['TL_LANG']['MSC']['seconds'] = '秒';
$GLOBALS['TL_LANG']['MSC']['up'] = '上';
$GLOBALS['TL_LANG']['MSC']['first'] = '≪先頭';
$GLOBALS['TL_LANG']['MSC']['previous'] = '前';
$GLOBALS['TL_LANG']['MSC']['next'] = '次';
$GLOBALS['TL_LANG']['MSC']['last'] = '最後≫';
$GLOBALS['TL_LANG']['MSC']['goToPage'] = 'ページ%sに移動';
$GLOBALS['TL_LANG']['MSC']['totalPages'] = '%sページ、全%sページ';
$GLOBALS['TL_LANG']['MSC']['fileUploaded'] = 'ファイル%sをアップロードできました。';
$GLOBALS['TL_LANG']['MSC']['fileExceeds'] = '画像%sをアップロードできましたが、自動的に大きさを変更するには大きすぎました。';
$GLOBALS['TL_LANG']['MSC']['fileResized'] = '画像%sをアップロードできて、最大の寸法に合うように縮小されました。';
$GLOBALS['TL_LANG']['MSC']['searchLabel'] = '検索';
$GLOBALS['TL_LANG']['MSC']['keywords'] = 'キーワード';
$GLOBALS['TL_LANG']['MSC']['options'] = 'オプション';
$GLOBALS['TL_LANG']['MSC']['matchAll'] = 'すべての単語に一致';
$GLOBALS['TL_LANG']['MSC']['matchAny'] = 'いずれかの単語に一致';
$GLOBALS['TL_LANG']['MSC']['saveData'] = '登録情報を保存';
$GLOBALS['TL_LANG']['MSC']['printPage'] = 'このページを印刷';
$GLOBALS['TL_LANG']['MSC']['printAsPdf'] = 'アーティクルをPDFとして印刷';
$GLOBALS['TL_LANG']['MSC']['facebookShare'] = 'Facebookで共有';
$GLOBALS['TL_LANG']['MSC']['twitterShare'] = 'Twitterで共有';
$GLOBALS['TL_LANG']['MSC']['gplusShare'] = 'Google+で共有';
$GLOBALS['TL_LANG']['MSC']['pleaseWait'] = 'お待ちください';
$GLOBALS['TL_LANG']['MSC']['loading'] = '読み込み中...';
$GLOBALS['TL_LANG']['MSC']['more'] = '続きを読む...';
$GLOBALS['TL_LANG']['MSC']['readMore'] = 'アーティクルを読む: %s';
$GLOBALS['TL_LANG']['MSC']['targetPage'] = 'リンク先ページ';
$GLOBALS['TL_LANG']['MSC']['invalidPage'] = '申し訳ありません、"%s"という項目は存在しません。';
$GLOBALS['TL_LANG']['MSC']['list_orderBy'] = '%sの順序';
$GLOBALS['TL_LANG']['MSC']['list_perPage'] = '1ページの結果の数';
$GLOBALS['TL_LANG']['MSC']['published'] = '公開';
$GLOBALS['TL_LANG']['MSC']['unpublished'] = '非公開';
$GLOBALS['TL_LANG']['MSC']['addComment'] = 'コメントを追加';
$GLOBALS['TL_LANG']['MSC']['autologin'] = 'ログイン状態を保持';
$GLOBALS['TL_LANG']['MSC']['relevance'] = '%sの関連性';
$GLOBALS['TL_LANG']['MSC']['invalidTokenUrl'] = '不正なトークン';
$GLOBALS['TL_LANG']['MSC']['changelog'] = '変更履歴';
$GLOBALS['TL_LANG']['MSC']['coreOnlyOff'] = '解除';
$GLOBALS['TL_LANG']['UNITS'][0] = 'byte';
$GLOBALS['TL_LANG']['UNITS'][1] = 'kB';
$GLOBALS['TL_LANG']['UNITS'][2] = 'MB';
$GLOBALS['TL_LANG']['UNITS'][3] = 'GB';
$GLOBALS['TL_LANG']['UNITS'][4] = 'TB';
$GLOBALS['TL_LANG']['UNITS'][5] = 'PB';
$GLOBALS['TL_LANG']['UNITS'][6] = 'EB';
$GLOBALS['TL_LANG']['UNITS'][7] = 'ZB';
$GLOBALS['TL_LANG']['UNITS'][8] = 'YB';
$GLOBALS['TL_LANG']['CONFIRM']['do'] = 'モジュール';
$GLOBALS['TL_LANG']['CONFIRM']['table'] = '影響を受けたテーブル';
$GLOBALS['TL_LANG']['CONFIRM']['act'] = '操作';
$GLOBALS['TL_LANG']['CONFIRM']['id'] = '影響を受けたレコード';
$GLOBALS['TL_LANG']['DP']['select_a_time'] = '時刻を選択';
$GLOBALS['TL_LANG']['DP']['use_mouse_wheel'] = '迅速に値を変更するにはマウスのホイールを使用してください';
$GLOBALS['TL_LANG']['DP']['time_confirm_button'] = '確認';
$GLOBALS['TL_LANG']['DP']['apply_range'] = '適用';
$GLOBALS['TL_LANG']['DP']['cancel'] = '取り消し';
$GLOBALS['TL_LANG']['DP']['week'] = '週';
$GLOBALS['TL_LANG']['MSC']['dragItemsHint'] = '項目をドラッグして並べ替え';
