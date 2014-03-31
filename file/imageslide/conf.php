<?php
mb_internal_encoding('UTF-8');

define('SELECTED_MENU_COLOR', '#FF0000');
define('IMAGE_DIR_NAME', 'img');
define('IMAGE_DIR_NAME2', 'image');

define('IMAGE_DIR_SLASH', '/'.IMAGE_DIR_NAME.'/');
define('IMAGE_DIR_SLASH2', '/'.IMAGE_DIR_NAME2.'/');

define('IMAGE_DIR', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . IMAGE_DIR_NAME);
define('IMAGE_DIR2', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . IMAGE_DIR_NAME2);
define('IMAGE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'servers');

//日付のフォーマット
define('SFORMAT_YM', '%Y/%m');	//smarty
define('SFORMAT_YMD', '%Y/%m/%d');	//smarty
define('SFORMAT_YMDHM', '%Y/%m/%d %H:%M');	//smarty
define('SFORMAT_MDHM', '%m/%d %H:%M');	//smarty
define('SFORMAT_MDHMS', '%m/%d %H:%M:%S');	//smarty
define('SFORMAT_YMDHMS', '%Y/%m/%d %H:%M:%S');	//smarty

//管理者レベル
define('ADMIN_REFERRAL', 5);
define('ADMIN_AGENT', 10);
define('ADMIN_SALES', 20);
define('ADMIN_AGENT_SALES', 25);
define('ADMIN_SALES_A', 30);
define('ADMIN_EDITOR', 40);
define('ADMIN_EDITOR_A', 50);
define('ADMIN_CUSTOMER', 90);
define('ADMIN_SUPER', 99);

//プラン
define('PLAN_AGENT', 0);
define('PLAN_STANDARD', 1);
define('PLAN_SPECIAL', 2);
define('PLAN_PREMIUM', 10);
define('PLAN_TRIAL1', 3);
define('PLAN_TRIAL2', 4);
// add 20130508
define('PLAN_PLATINUM', 20);
define('PLAN_SPECIAL_SALON', 5);
define('PLAN_PREMIUM_SALON', 11);
define('PLAN_PLATINUM_SALON', 21);

//求人広告作成代行
define('OPTION_INSTEAD1', 1);	//求人広告作成代行

//価格
define('PRICE_STANDARD', 49000);
define('PRICE_SPECIAL', 79000);
define('PRICE_PREMIUM', 119000);
define('PRICE_TRIAL1', 59000);
//define('PRICE_TRIAL1', 0);	//オープン当初の無料期間のみ
define('PRICE_TRIAL2', 80000);
define('PRICE_LOGO', 99000);	//企業ロゴTOP表示
define('PRICE_ATTENTION', 9800);	//特集上位
define('PRICE_EXPRESS', 9800);	//急募
define('PRICE_ARRIVAL', 9800);	//新着再表示
define('PRICE_REWRITE', 11980);	//原稿修正
define('PRICE_PERFECT', 99000);	//完全求人広告作成代行
define('DISCOUNTS_EXT', 20);	//延長時値引率
define('DISCOUNTS_APP', 50);	//応募ゼロ時値引率

//明細種別
define('BILL_JOB', 0);	//求人広告
//define('BILL_BANNER', 1);	//企業ロゴTOP表示
//define('BILL_INSTEAD', 2);	//求人広告作成代行
//define('BILL_EXPRESS', 3);	//急募
//define('BILL_ARRIVAL', 4);	//新着再表示
//define('BILL_ATTENTION', 5);	//特集上位
//define('BILL_EXT', 6);	//延長
define('BILL_BRAND', 7);	//ブランドTOP表示
define('BILL_DIRECT', 8);	//ダイレクトメール
define('BILL_OTHER', 9);	//その他
define('BILL_WORD', 10);	//注目ワード
define('BILL_JOB_PICKUP', 11);	//おすすめ求人
define('BILL_MOBILE_BANNER', 12);	//モバイルバナー
define('BILL_ANJOB',13);	//an広告掲載料

//求人広告設定
define('SPAN', 14);	//求人期間
define('SPAN_EXPRESS', 14);	//急募期間
define('SPAN_ARRIVAL', 7);	//新着再表示期間
define('SPAN_LIMIT', 7);	//締切間近期間
define('OPTION_MARGIN', 2);	//オプション購入時可能な掲載終了までの日数
define('RANGE_NUMBER', 10);	//表示する日付の数
define('LIMIT_TIME', 60*60*15);	//購入締切時間
define('DELIVERY_TIME', 60*60*18);	//原稿締切時間
define('MAX_BANNER_COUNT', 4);	//企業ロゴTOP表示枠
define('MAX_SPECIAL_COUNT', 20);	//特集枠

define('APPLI_VIEW_LIMIT', 30*30);	//企業　応募者一覧参照期間（日数）
define('APPLI_U_VIEW_LIMIT', 30*6);	//会員　応募者一覧参照期間（日数）
//define('JOB_VIEW_LIMIT', 30*2);	//応募した求人広告の掲載終了後参照可能期間（日数）
define('JOB_VIEW_LIMIT', 7*48);	//求人広告の掲載終了後参照可能期間（日数）

//画像
define('PICT_NUMS', 7);	//画像枚数
define('PICT_MAX_SIZE', 3000*1024);			//画像最大サイズ

define('MAX_OFFER_WIDTH',50);			//募集情報画像の最大幅
define('MAX_OFFER_HEIGHT',50);		//募集情報画像の最大高

define('MAX_MTOP_BANNER_HEIGHT',80);		//携帯TOPバナー画像の最大高
define('MAX_MTOP_BANNER_WIDTH', 200);		//携帯TOPバナー画像の最大幅
define('MAX_TOP_BANNER_HEIGHT',158);		//TOPバナー画像の最大高
define('MAX_TOP_BANNER_WIDTH', 339);		//TOPバナー画像の最大幅
define('MAX_TOP_SIDE_HEIGHT',  70);		//サイド1画像の最大高
define('MAX_TOP_SIDE_WIDTH',  200);			//サイド1画像の最大幅
define('MAX_TOP_SIDE1_HEIGHT',  70);		//サイド1画像の最大高
define('MAX_TOP_SIDE1_WIDTH',  200);			//サイド1画像の最大幅
define('MAX_TOP_SIDE2_HEIGHT',  70);		//サイド2画像の最大高
define('MAX_TOP_SIDE2_WIDTH',  200);			//サイド2画像の最大幅
define('MAX_TOP_SIDE3_HEIGHT',  70);		//サイド3画像の最大高
define('MAX_TOP_SIDE3_WIDTH',  200);			//サイド3画像の最大幅
define('MAX_TOP_SIDE4_HEIGHT', 100);		//サイド4画像の最大高
define('MAX_TOP_SIDE4_WIDTH',  200);			//サイド4画像の最大幅
define('MAX_TOP_SIDE5_HEIGHT', 100);		//サイド5画像の最大高
define('MAX_TOP_SIDE5_WIDTH',  200);			//サイド5画像の最大幅
define('MAX_SPECIAL_BANNER_HEIGHT',  78);		//サイド1画像の最大高
define('MAX_SPECIAL_BANNER_WIDTH',  560);			//サイド1画像の最大幅
define('MAX_TOP_SBANNER_HEIGHT',110);	//スクールバナー画像の最大高
define('MAX_TOP_SBANNER_WIDTH', 180);		//スクールバナー画像の最大幅

define('MAX_MEMBER_WIDTH', 300);			//登録者画像の最大幅
define('MAX_MEMBER_HEIGHT', 300);			//登録者画像の最大高
define('MAX_BANNER_WIDTH', 1000);			//企業ロゴの最大幅
define('MAX_BANNER_HEIGHT', 1000);			//企業ロゴの最大幅
define('MAX_BRAND_WIDTH', 1000);			//ブランドロゴの最大幅
define('MAX_BRAND_HEIGHT', 1000);			//ブランドロゴの最大幅
define('MAX_PICT_WIDTH', 240);				//画像の最大幅
define('MAX_THUMBNAIL_WIDTH', 168);			//サムネイルの最大幅
define('MAX_THUMBNAIL2_WIDTH', 204);		//サムネイルの最大幅
define('MAX_AGENTPICT_WIDTH', 360);			//派遣画像の最大幅
define('MAX_AGENTTHUMBNAIL_WIDTH', 180);	//派遣サムネイルの最大幅
define('MAX_MLAND_BANNER_HEIGHT',  70);		//サイド1画像の最大高
define('MAX_MLAND_BANNER_WIDTH',  200);			//サイド1画像の最大幅
$pict_max_width = array(
	1=>MAX_PICT_WIDTH,
	2=>MAX_PICT_WIDTH,
	3=>MAX_PICT_WIDTH,
	4=>MAX_PICT_WIDTH,
	5=>MAX_PICT_WIDTH,
	7=>MAX_PICT_WIDTH,
);
$thumb_max_width = array(
	1=>MAX_THUMBNAIL_WIDTH,
	2=>MAX_THUMBNAIL_WIDTH,
	3=>MAX_THUMBNAIL2_WIDTH,
	4=>MAX_THUMBNAIL2_WIDTH,
	5=>MAX_THUMBNAIL2_WIDTH,
	7=>MAX_THUMBNAIL_WIDTH,
);

//グロナビアイコン画像の拡張子
define('POINT_CAMPAIGN_ICON_EXTENSION',  '.png');

// ↓2008/10/16　02:56:53　鎌田修正
if(($_SERVER["SERVER_ADDR"] == '127.0.0.1') || strrpos(__FILE__, "/cosme_career/") > 0){
	// LOG出力不要なIPアドレス
	define("NOLOG_IP","192.168.1.27");
// 開発サーバ
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
ini_set('error_reporting','0');
$servers[] = $_SERVER['DOCUMENT_ROOT'];
// 共通クッキーのキー
define("COOKIE_KEY", "ISSSO");
define("COOKIE_KEY2", "%40COSME%5FMAIN");
define("COOKIE_KEY3", "ISAL");
define("COOKIE_KEY4", "ISORG");
define("COOKIE_KEY5", "COSME_SESSION");
//define("COOKIE_KEY", "DEV_ISSSO");
define("COOKIE_DOMAIN",".staging-cosme.net");

//データベースサーバ
define('DB_ID1', '');
define('DB_SERVER1', 'localhost');
define('DB_NAME1', 'career11_j');
define('DB_USER1', 'root');
define('DB_PASS1', '');

define('DB_ID2', 'db2');
define('DB_SERVER2', 'localhost');
define('DB_NAME2', 'career11_u');
define('DB_USER2', 'root');
define('DB_PASS2', '');

//セッション、ページキャッシュサーバ
define('SS_COUNT', 1);
define('SS_ID1', 'session1');
define('SS_SERVER1', 'localhost');
define('SS_NAME1', 'career11_s');
define('SS_USER1', 'root');
define('SS_PASS1', '');

//本番DB（ブランド用）
define('DB_ID3', 'db3');
define('DB_SERVER3', '192.168.1.131');
define('DB_NAME3', 'cosmeDB');
define('DB_USER3', 'career');
define('DB_PASS3', 'car=carcar');

//共通DB（共通会員用）
define('DB_ID4', 'db4');
define('DB_SERVER4', '192.168.1.77');
define('DB_NAME4', 'is_member');
define('DB_USER4', 'cosme');
define('DB_PASS4', 'cosme');
//アイスタイル　キャリア事業部
define('AGENT_CORP_ID', "26");

//SQL SERVER（ブランド用）
define('DB_ID5', 'db5');
define('DB_SERVER5', '192.168.1.69');
define('DB_NAME5', 'cosme');
define('DB_USER5', 'cosme_reader');
define('DB_PASS5', 'cosme_reader');
define('BRAND_TABLE5', 'brand');

//qa環境 SQL SERVER（Cosme用）
define('DB_SERVER_COSME', '192.168.1.69');
define('DB_NAME_COSME', 'cosme');
define('DB_USER_COSME', 'cosme_reader');
define('DB_PASS_COSME', 'cosme_reader');

//qa環境 SQL SERVER（ポイント用）
define('DB_SERVER_POINT', '192.168.1.69');
define('DB_NAME_POINT', 'point_program');
define('DB_USER_POINT', 'cosme_reader');
define('DB_PASS_POINT', 'cosme_reader');

//電話番号
define('FROM_PHONE', '03-5785-8884');				//お問い合わせ電話番号
define('CORP_PHONE', '03-6824-9155');				//お問い合わせ電話番号(企業用)

//メール
define('D_CAREER_MAIL', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
define('FROM_MAIL', "career-support_c@cosme.net");
define('FROM_MAILU', "career-support_u@cosme.net");			//お問い合わせメールアドレス
define('TO_MAIL', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
define('TO_MAILU', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
//define('DOMAIN', "http://career-dev01.cosme.net/");
define('DOMAIN', "http://acc.localhost/");
//20081218申請メール用
define('TO_MAILI',"career-edit@ispot.co.jp");

//systemエラー通知用
define('FROM_SYSMAIL', "system@cosme.net");
define('TO_SYSMAIL', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
define('TO_SYS_ERROR_MAIL', "er@istyle.co.jp");

// httpとhttpsのポート設定
define('HTTP_PORT', 80);
define('HTTPS_PORT', 80);

// HTTP_HOST
//define('HTTP_HOST',  'http://career-dev01.cosme.net');
//define('HTTPS_HOST', 'https://career-dev01.cosme.net');
define('HTTP_HOST',  'http://acc.localhost');
define('HTTPS_HOST', 'http://acc.localhost');

define('LOG_LEVEL', GW_LOG_TRACE);


//cosmeAPI URL
define('API_ROOT_HTTPS', 'https://192.168.5.15/member_f/');
define('API_ROOT_HTTP', 'http://192.168.5.15/member_f/');

//cosmeAPI URL
define('API_URL_MAILMAGAZINES_REGIST', API_ROOT_HTTPS.'mailmagazines/regist/');
define('API_URL_MAILMAGAZINES_SHOW', API_ROOT_HTTPS.'mailmagazines/show/');
define('API_URL_MAILMAGAZINES_UPDATE', API_ROOT_HTTPS.'mailmagazines/update/');
define('API_URL_MAILMAGAZINES_CANCEL', API_ROOT_HTTPS.'mailmagazines/cancel/');
define('API_URL_MEMBERS_REGIST', API_ROOT_HTTPS.'members/regist/');
define('API_URL_MEMBERS_LOGIN', API_ROOT_HTTPS.'members/login/');
define('API_URL_MEMBERS_CANCEL', API_ROOT_HTTPS.'members/cancel/');
define('API_URL_SERVICES_CHECK', API_ROOT_HTTPS.'services/check/');
define('API_URL_SERVICES_SHOW', API_ROOT_HTTPS.'services/show/');
define('API_URL_MAILADDRESSES_CHECK', API_ROOT_HTTPS.'mailaddresses/check/');
define('API_URL_MAILADDRESSES_UPDATE', API_ROOT_HTTPS.'mailaddresses/update/');
define('API_URL_MAILADDRESSES_SHOW', API_ROOT_HTTPS.'mailaddresses/show/');
define('API_URL_BASE_INFO_SHOW', API_ROOT_HTTPS.'base_info/show/');
define('API_URL_BASE_INFO_UPDATE', API_ROOT_HTTPS.'base_info/update/');
define('API_URL_PASSWORDS_UPDATE', API_ROOT_HTTPS.'passwords/update/');
define('API_URL_PASSWORDS_CHECK', API_ROOT_HTTPS.'passwords/check/');

//cosmeAPI URL
define('API_URL2_MAILMAGAZINES_REGIST', API_ROOT_HTTP.'mailmagazines/regist/');
define('API_URL2_MAILMAGAZINES_SHOW', API_ROOT_HTTP.'mailmagazines/show/');
define('API_URL2_MAILMAGAZINES_UPDATE', API_ROOT_HTTP.'mailmagazines/update/');
define('API_URL2_MAILMAGAZINES_CANCEL', API_ROOT_HTTP.'mailmagazines/cancel/');
define('API_URL2_MEMBERS_REGIST', API_ROOT_HTTP.'members/regist/');
define('API_URL2_MEMBERS_LOGIN', API_ROOT_HTTP.'members/login/');
define('API_URL2_MEMBERS_CANCEL', API_ROOT_HTTP.'members/cancel/');
define('API_URL2_SERVICES_CHECK', API_ROOT_HTTP.'services/check/');
define('API_URL2_SERVICES_SHOW', API_ROOT_HTTP.'services/show/');
define('API_URL2_MAILADDRESSES_CHECK', API_ROOT_HTTP.'mailaddresses/check/');
define('API_URL2_MAILADDRESSES_UPDATE', API_ROOT_HTTP.'mailaddresses/update/');
define('API_URL2_MAILADDRESSES_SHOW', API_ROOT_HTTP.'mailaddresses/show/');
define('API_URL2_BASE_INFO_SHOW', API_ROOT_HTTP.'base_info/show/');
define('API_URL2_BASE_INFO_UPDATE', API_ROOT_HTTP.'base_info/update/');
define('API_URL2_PASSWORDS_UPDATE', API_ROOT_HTTP.'passwords/update/');
define('API_URL2_PASSWORDS_CHECK', API_ROOT_HTTP.'passwords/check/');

// ログインチェックURL
define("API_URL_MEMBERS_CHECK_LOGIN",  API_ROOT_HTTPS."members/check_login");
define("API_URL2_MEMBERS_CHECK_LOGIN", API_ROOT_HTTP."members/check_login");

//qa環境 PointAPI URL
define('POINT_API_ROOT_HTTP',  'http://192.168.1.9/point_api-snapshot/');

//qa環境 cosmeサイト URL
define('COSME_ROOT_HTTP',  'http://{0}.staging-cosme.net');
define('COSME_ROOT_HTTPS', 'https://{0}.staging-cosme.net');

//qa環境 cosme.com URL
define('COSME_COM_ROOT_HTTP',  'http://staging.cosme.com/');

//qa環境 グロナビアイコン画像パス
define('POINT_CAMPAIGN_ICON_URL',  'https://staging.cdn-cosme.net/media/point_campaign-frames/');

//career-qa, career.staging-cosme.netの開発者用設定ファイルを読み込み
}elseif(preg_match('/career-qa.istyle.local/', $_SERVER['HTTP_HOST']) ||
        preg_match('/[a-zA-Z]+\.career.staging-cosme.net/', $_SERVER['HTTP_HOST'])
){

  require_once (dirname(__FILE__)."/../../config/develop/dev_conf.php");

}elseif(strrpos(__FILE__, "/career-stage01.cosme.net/")>0 ){
	// LOG出力不要なIPアドレス
	define("NOLOG_IP","192.168.1.27");

// 確認サーバ

$servers[] = $_SERVER['DOCUMENT_ROOT'];

// 共通クッキーのキー
define("COOKIE_KEY", "ISSSO");
define("COOKIE_KEY2", "%40COSME%5FMAIN");
define("COOKIE_KEY3", "ISAL");
define("COOKIE_KEY4", "ISORG");
define("COOKIE_KEY5", "COSME_SESSION");
define("COOKIE_DOMAIN",".cosme.net");

//データベースサーバ
define('DB_ID1', '');
define('DB_SERVER1', 'localhost');
define('DB_NAME1', 'career11_j');
define('DB_USER1', 'root');
define('DB_PASS1', '');


define('DB_ID2', 'db2');
define('DB_SERVER2', 'localhost');
define('DB_NAME2', 'career11_u');
define('DB_USER2', 'root');
define('DB_PASS2', '');

//セッション、ページキャッシュサーバ
define('SS_COUNT', 1);
define('SS_ID1', 'session1');
define('SS_SERVER1', 'localhost');
//define('SS_NAME1', 'career04_s');
define('SS_NAME1', 'career11_s');
define('SS_USER1', 'root');
define('SS_PASS1', '');
//本番DB（ブランド用）
define('DB_ID3', 'db3');
define('DB_SERVER3', '192.168.1.131');
define('DB_NAME3', 'cosmeDB');
define('DB_USER3', 'career');
define('DB_PASS3', 'car=carcar');

//共通DB（共通会員用）
define('DB_ID4', 'db4');
define('DB_SERVER4', '192.168.1.77');
define('DB_NAME4', 'is_member');
define('DB_USER4', 'cosme');
define('DB_PASS4', 'cosme');

//SQL SERVER（ブランド用）
define('DB_ID5', 'db5');
define('DB_SERVER5', '192.168.1.69');
define('DB_NAME5', 'cosme');
define('DB_USER5', 'cosme_reader');
define('DB_PASS5', 'cosme_reader');
define('BRAND_TABLE5', 'brand');

//ステージング環境 SQL SERVER（Cosme用）
define('DB_SERVER_COSME', '192.168.1.69');
define('DB_NAME_COSME', 'cosme');
define('DB_USER_COSME', 'cosme_reader');
define('DB_PASS_COSME', 'cosme_reader');

//ステージング環境 SQL SERVER（ポイント用）
define('DB_SERVER_POINT', '192.168.1.69');
define('DB_NAME_POINT', 'point_program');
define('DB_USER_POINT', 'cosme_reader');
define('DB_PASS_POINT', 'cosme_reader');

//アイスタイル　キャリア事業部
define('AGENT_CORP_ID', "26");

//電話番号
define('FROM_PHONE', '03-5785-8884');				//お問い合わせ電話番号
define('CORP_PHONE', '03-6824-9155');				//お問い合わせ電話番号(企業用)

//メール
define('D_CAREER_MAIL', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
define('FROM_MAIL', "career-support_c@cosme.net");
define('FROM_MAILU', "career-support_u@cosme.net");			//お問い合わせメールアドレス
define('TO_MAIL', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
define('TO_MAILU', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
define('DOMAIN', "http://career-stage01.cosme.net/");
//20081218申請メール用
define('TO_MAILI',"career-edit@ispot.co.jp");

//systemエラー通知用
define('FROM_SYSMAIL', "system@cosme.net");
define('TO_SYSMAIL', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");

// httpとhttpsのポート設定
define('HTTP_PORT', 80);
define('HTTPS_PORT', 80);

// HTTP_HOST
define('HTTP_HOST',  'http://career-stage01.cosme.net');
define('HTTPS_HOST', 'http://career-stage01.cosme.net');
define('LOG_LEVEL', GW_LOG_TRACE);

//cosmeAPI URL
define('API_ROOT_HTTPS', 'https://192.168.5.15/member_f/');
define('API_ROOT_HTTP', 'http://192.168.5.15/member_f/');

//cosmeAPI URL
define('API_URL_MAILMAGAZINES_REGIST', API_ROOT_HTTPS.'mailmagazines/regist/');
define('API_URL_MAILMAGAZINES_SHOW', API_ROOT_HTTPS.'mailmagazines/show/');
define('API_URL_MAILMAGAZINES_UPDATE', API_ROOT_HTTPS.'mailmagazines/update/');
define('API_URL_MAILMAGAZINES_CANCEL', API_ROOT_HTTPS.'mailmagazines/cancel/');
define('API_URL_MEMBERS_REGIST', API_ROOT_HTTPS.'members/regist/');
define('API_URL_MEMBERS_LOGIN', API_ROOT_HTTPS.'members/login/');
define('API_URL_MEMBERS_CANCEL', API_ROOT_HTTPS.'members/cancel/');
define('API_URL_SERVICES_CHECK', API_ROOT_HTTPS.'services/check/');
define('API_URL_SERVICES_SHOW', API_ROOT_HTTPS.'services/show/');
define('API_URL_MAILADDRESSES_CHECK', API_ROOT_HTTPS.'mailaddresses/check/');
define('API_URL_MAILADDRESSES_UPDATE', API_ROOT_HTTPS.'mailaddresses/update/');
define('API_URL_MAILADDRESSES_SHOW', API_ROOT_HTTPS.'mailaddresses/show/');
define('API_URL_BASE_INFO_SHOW', API_ROOT_HTTPS.'base_info/show/');
define('API_URL_BASE_INFO_UPDATE', API_ROOT_HTTPS.'base_info/update/');
define('API_URL_PASSWORDS_UPDATE', API_ROOT_HTTPS.'passwords/update/');
define('API_URL_PASSWORDS_CHECK', API_ROOT_HTTPS.'passwords/check/');

//cosmeAPI URL
define('API_URL2_MAILMAGAZINES_REGIST', API_ROOT_HTTP.'mailmagazines/regist/');
define('API_URL2_MAILMAGAZINES_SHOW', API_ROOT_HTTP.'mailmagazines/show/');
define('API_URL2_MAILMAGAZINES_UPDATE', API_ROOT_HTTP.'mailmagazines/update/');
define('API_URL2_MAILMAGAZINES_CANCEL', API_ROOT_HTTP.'mailmagazines/cancel/');
define('API_URL2_MEMBERS_REGIST', API_ROOT_HTTP.'members/regist/');
define('API_URL2_MEMBERS_LOGIN', API_ROOT_HTTP.'members/login/');
define('API_URL2_MEMBERS_CANCEL', API_ROOT_HTTP.'members/cancel/');
define('API_URL2_SERVICES_CHECK', API_ROOT_HTTP.'services/check/');
define('API_URL2_SERVICES_SHOW', API_ROOT_HTTP.'services/show/');
define('API_URL2_MAILADDRESSES_CHECK', API_ROOT_HTTP.'mailaddresses/check/');
define('API_URL2_MAILADDRESSES_UPDATE', API_ROOT_HTTP.'mailaddresses/update/');
define('API_URL2_MAILADDRESSES_SHOW', API_ROOT_HTTP.'mailaddresses/show/');
define('API_URL2_BASE_INFO_SHOW', API_ROOT_HTTP.'base_info/show/');
define('API_URL2_BASE_INFO_UPDATE', API_ROOT_HTTP.'base_info/update/');
define('API_URL2_PASSWORDS_UPDATE', API_ROOT_HTTP.'passwords/update/');
define('API_URL2_PASSWORDS_CHECK', API_ROOT_HTTP.'passwords/check/');

// ログインチェックURL
define("API_URL_MEMBERS_CHECK_LOGIN",  API_ROOT_HTTPS."members/check_login");
define("API_URL2_MEMBERS_CHECK_LOGIN", API_ROOT_HTTP."members/check_login");

//ステージング環境 PointAPI URL
define('POINT_API_ROOT_HTTP',  'http://192.168.1.9/point_api-snapshot/');

//ステージング環境 cosmeサイト URL
define('COSME_ROOT_HTTP',  'http://{0}.staging-cosme.net');
define('COSME_ROOT_HTTPS', 'https://{0}.staging-cosme.net');

//ステージング環境 cosme.com URL
define('COSME_COM_ROOT_HTTP',  'http://staging.cosme.com/');

//ステージング環境 グロナビアイコン画像パス
define('POINT_CAMPAIGN_ICON_URL',  'https://staging.cdn-cosme.net/media/point_campaign-frames/');

}elseif(strrpos(__FILE__, "/career.staging-cosme.net/")>0 ){
	// LOG出力不要なIPアドレス
	define("NOLOG_IP","192.168.1.27");

// 確認サーバ

$servers[] = $_SERVER['DOCUMENT_ROOT'];

// 共通クッキーのキー
define("COOKIE_KEY", "ISSSO");
define("COOKIE_KEY2", "%40COSME%5FMAIN");
define("COOKIE_KEY3", "ISAL");
define("COOKIE_KEY4", "ISORG");
define("COOKIE_KEY5", "COSME_SESSION");
//define("COOKIE_KEY", "STAGE_ISSSO");
define("COOKIE_DOMAIN",".staging-cosme.net");

//データベースサーバ
define('DB_ID1', '');
define('DB_SERVER1', 'localhost');
//define('DB_NAME1', 'career04_j');
//define('DB_NAME1', 'career11_j');
define('DB_NAME1', 'career11_j');
define('DB_USER1', 'root');
define('DB_PASS1', '');
/*
define('DB_SERVER1', 'careerdb02');
define('DB_NAME1', 'career01_j');
define('DB_USER1', 'careertest01');
define('DB_PASS1', 'careertest');
*/


define('DB_ID2', 'db2');
define('DB_SERVER2', 'localhost');
//define('DB_NAME2', 'career04_u');
//define('DB_NAME2', 'career11_u');
define('DB_NAME2', 'career11_u');
define('DB_USER2', 'root');
define('DB_PASS2', '');
/*
define('DB_SERVER2', 'careerdb02');
define('DB_NAME2', 'career01_u');
define('DB_USER2', 'careertest01');
define('DB_PASS2', 'careertest');
*/

//セッション、ページキャッシュサーバ
define('SS_COUNT', 1);
define('SS_ID1', 'session1');
define('SS_SERVER1', 'localhost');
//define('SS_NAME1', 'career04_s');
//define('SS_NAME1', 'career11_s');
define('SS_NAME1', 'career11_s');
define('SS_USER1', 'root');
define('SS_PASS1', '');
/*
define('SS_SERVER1', 'careerdb02');
define('SS_NAME1', 'career01_s');
define('SS_USER1', 'careertest01');
define('SS_PASS1', 'careertest');
*/

//本番DB（ブランド用）
define('DB_ID3', 'db3');
define('DB_SERVER3', '192.168.1.131');
define('DB_NAME3', 'cosmeDB');
define('DB_USER3', 'career');
define('DB_PASS3', 'car=carcar');

//共通DB（共通会員用）
define('DB_ID4', 'db4');
define('DB_SERVER4', '192.168.1.77');
define('DB_NAME4', 'is_member');
define('DB_USER4', 'cosme');
define('DB_PASS4', 'cosme');

//SQL SERVER（ブランド用）
define('DB_ID5', 'db5');
define('DB_SERVER5', '192.168.1.69');
define('DB_NAME5', 'cosme');
define('DB_USER5', 'cosme_reader');
define('DB_PASS5', 'cosme_reader');
define('BRAND_TABLE5', 'brand');

//ステージング環境 SQL SERVER（Cosme用）
define('DB_SERVER_COSME', '192.168.1.69');
define('DB_NAME_COSME', 'cosme');
define('DB_USER_COSME', 'cosme_reader');
define('DB_PASS_COSME', 'cosme_reader');

//ステージング環境 SQL SERVER（ポイント用）
define('DB_SERVER_POINT', '192.168.1.69');
define('DB_NAME_POINT', 'point_program');
define('DB_USER_POINT', 'cosme_reader');
define('DB_PASS_POINT', 'cosme_reader');

//アイスタイル　キャリア事業部
define('AGENT_CORP_ID', "26");

//電話番号
define('FROM_PHONE', '03-5785-8884');				//お問い合わせ電話番号
define('CORP_PHONE', '03-6824-9155');				//お問い合わせ電話番号(企業用)

//メール
define('D_CAREER_MAIL', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
define('FROM_MAIL', "career-support_c@cosme.net");
define('FROM_MAILU', "career-support_u@cosme.net");			//お問い合わせメールアドレス
define('TO_MAIL', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
define('TO_MAILU', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
define('DOMAIN', "http://career.staging-cosme.net/");
//define('DOMAIN', "http://career-stage01.cosme.net/");
//20081218申請メール用
//define('TO_MAILI',"career-edit@ispot.co.jp");
//20130218 for checking

define('TO_MAILI',"kato@neta.jp,tuanbido@gmail.com");
define('SENDTEST_EMAIL',"caophamtruongson@gmail.com");
define('TESTLOCAL_HOST',"acc.localhost");

//systemエラー通知用
define('FROM_SYSMAIL', "system@cosme.net");
define('TO_SYSMAIL', "nakanoa@istyle.co.jp,tomidokoror@istyle.co.jp");
define('TO_SYS_ERROR_MAIL', "er@istyle.co.jp");

// httpとhttpsのポート設定
define('HTTP_PORT', 80);
define('HTTPS_PORT', 80);

// HTTP_HOST
define('HTTP_HOST',  'http://career.staging-cosme.net');
//define('HTTP_HOST',  'http://career-stage01.cosme.net');
//define('HTTPS_HOST', 'https://career-stage01.cosme.net');
//define('HTTPS_HOST', 'http://career-stage01.cosme.net');
define('HTTPS_HOST', 'https://career.staging-cosme.net');

define('LOG_LEVEL', GW_LOG_TRACE);

//cosmeAPI URL
define('API_ROOT_HTTPS', 'https://192.168.5.15/member_f/');
define('API_ROOT_HTTP', 'http://192.168.5.15/member_f/');
//define('API_ROOT_HTTPS', 'https://192.168.5.15/member_c/');
//define('API_ROOT_HTTP', 'http://192.168.5.15/member_c/');


//cosmeAPI URL
define('API_URL_MAILMAGAZINES_REGIST', API_ROOT_HTTPS.'mailmagazines/regist/');
define('API_URL_MAILMAGAZINES_SHOW', API_ROOT_HTTPS.'mailmagazines/show/');
define('API_URL_MAILMAGAZINES_UPDATE', API_ROOT_HTTPS.'mailmagazines/update/');
define('API_URL_MAILMAGAZINES_CANCEL', API_ROOT_HTTPS.'mailmagazines/cancel/');
define('API_URL_MEMBERS_REGIST', API_ROOT_HTTPS.'members/regist/');
define('API_URL_MEMBERS_LOGIN', API_ROOT_HTTPS.'members/login/');
define('API_URL_MEMBERS_CANCEL', API_ROOT_HTTPS.'members/cancel/');
define('API_URL_SERVICES_CHECK', API_ROOT_HTTPS.'services/check/');
define('API_URL_SERVICES_SHOW', API_ROOT_HTTPS.'services/show/');
define('API_URL_MAILADDRESSES_CHECK', API_ROOT_HTTPS.'mailaddresses/check/');
define('API_URL_MAILADDRESSES_UPDATE', API_ROOT_HTTPS.'mailaddresses/update/');
define('API_URL_MAILADDRESSES_SHOW', API_ROOT_HTTPS.'mailaddresses/show/');
define('API_URL_BASE_INFO_SHOW', API_ROOT_HTTPS.'base_info/show/');
define('API_URL_BASE_INFO_UPDATE', API_ROOT_HTTPS.'base_info/update/');
define('API_URL_PASSWORDS_UPDATE', API_ROOT_HTTPS.'passwords/update/');
define('API_URL_PASSWORDS_CHECK', API_ROOT_HTTPS.'passwords/check/');

//cosmeAPI URL
define('API_URL2_MAILMAGAZINES_REGIST', API_ROOT_HTTP.'mailmagazines/regist/');
define('API_URL2_MAILMAGAZINES_SHOW', API_ROOT_HTTP.'mailmagazines/show/');
define('API_URL2_MAILMAGAZINES_UPDATE', API_ROOT_HTTP.'mailmagazines/update/');
define('API_URL2_MAILMAGAZINES_CANCEL', API_ROOT_HTTP.'mailmagazines/cancel/');
define('API_URL2_MEMBERS_REGIST', API_ROOT_HTTP.'members/regist/');
define('API_URL2_MEMBERS_LOGIN', API_ROOT_HTTP.'members/login/');
define('API_URL2_MEMBERS_CANCEL', API_ROOT_HTTP.'members/cancel/');
define('API_URL2_SERVICES_CHECK', API_ROOT_HTTP.'services/check/');
define('API_URL2_SERVICES_SHOW', API_ROOT_HTTP.'services/show/');
define('API_URL2_MAILADDRESSES_CHECK', API_ROOT_HTTP.'mailaddresses/check/');
define('API_URL2_MAILADDRESSES_UPDATE', API_ROOT_HTTP.'mailaddresses/update/');
define('API_URL2_MAILADDRESSES_SHOW', API_ROOT_HTTP.'mailaddresses/show/');
define('API_URL2_BASE_INFO_SHOW', API_ROOT_HTTP.'base_info/show/');
define('API_URL2_BASE_INFO_UPDATE', API_ROOT_HTTP.'base_info/update/');
define('API_URL2_PASSWORDS_UPDATE', API_ROOT_HTTP.'passwords/update/');
define('API_URL2_PASSWORDS_CHECK', API_ROOT_HTTP.'passwords/check/');

// ログインチェックURL
define("API_URL_MEMBERS_CHECK_LOGIN",  API_ROOT_HTTPS."members/check_login");
define("API_URL2_MEMBERS_CHECK_LOGIN", API_ROOT_HTTP."members/check_login");

//ステージング環境 PointAPI URL
define('POINT_API_ROOT_HTTP',  'http://192.168.1.9/point_api-snapshot/');

//ステージング環境 cosmeサイト URL
define('COSME_ROOT_HTTP',  'http://{0}.staging-cosme.net');
define('COSME_ROOT_HTTPS', 'https://{0}.staging-cosme.net');

//ステージング環境 cosme.com URL
define('COSME_COM_ROOT_HTTP',  'http://staging.cosme.com/');

//ステージング環境 グロナビアイコン画像パス
define('POINT_CAMPAIGN_ICON_URL',  'https://staging.cdn-cosme.net/media/point_campaign-frames/');

}else{
// 本番サーバ

//$servers[] = IMAGE_ROOT . DIRECTORY_SEPARATOR . 'careerWeb01b';
//$servers[] = IMAGE_ROOT . DIRECTORY_SEPARATOR . 'careerWeb02b';
$servers[] = $_SERVER['DOCUMENT_ROOT'];

// 共通クッキーのキー
define("COOKIE_KEY", "ISSSO");
define("COOKIE_KEY2", "%40COSME%5FMAIN");
define("COOKIE_KEY3", "ISAL");
define("COOKIE_KEY4", "ISORG");
define("COOKIE_KEY5", "COSME_SESSION");
define("COOKIE_DOMAIN",".cosme.net");

//データベースサーバ
define('DB_ID1', '');
define('DB_SERVER1', '192.168.1.12');
define('DB_NAME1', 'career01_j');
define('DB_USER1', 'career01');
define('DB_PASS1', '5jaWuxGbuFT3bTqJ');

define('DB_ID2', 'db2');
define('DB_SERVER2', '192.168.1.12');
define('DB_NAME2', 'career01_u');
define('DB_USER2', 'career01');
define('DB_PASS2', '5jaWuxGbuFT3bTqJ');

//セッション、ページキャッシュサーバ
define('SS_COUNT', 1);
define('SS_ID1', 'session1');
define('SS_SERVER1', '192.168.1.12');
define('SS_NAME1', 'career01_s');
define('SS_USER1', 'career01');
define('SS_PASS1', '5jaWuxGbuFT3bTqJ');

//本番DB（ブランド用）
define('DB_ID3', 'db3');
define('DB_SERVER3', '192.168.1.131');
define('DB_NAME3', 'cosmeDB');
define('DB_USER3', 'career');
define('DB_PASS3', 'car=carcar');

//共通DB（共通会員用）
define('DB_ID4', 'db4');
define('DB_SERVER4', '192.168.1.78');
define('DB_NAME4', 'is_member');
define('DB_USER4', 'cosme_reader');
define('DB_PASS4', 'cosme_reader');

//SQL SERVER（ブランド用）
define('DB_ID5', 'db5');
define('DB_SERVER5', '192.168.1.25');
define('DB_NAME5', 'cosme');
define('DB_USER5', 'cosme_reader');
define('DB_PASS5', 'cosme_reader');
define('BRAND_TABLE5', 'brand');

//本番環境 SQL SERVER（Cosme用）
define('DB_SERVER_COSME', '192.168.1.25');
define('DB_NAME_COSME', 'cosme');
define('DB_USER_COSME', 'cosme_reader');
define('DB_PASS_COSME', 'cosme_reader');

//本番環境 SQL SERVER（ポイント用）
define('DB_SERVER_POINT', '192.168.1.25');
define('DB_NAME_POINT', 'point_program');
define('DB_USER_POINT', 'cosme_reader');
define('DB_PASS_POINT', 'cosme_reader');

//アイスタイル　キャリア事業部
define('AGENT_CORP_ID', "1");

//電話番号
define('FROM_PHONE', '03-5785-8884');				//お問い合わせ電話番号
define('CORP_PHONE', '03-6824-9155');				//お問い合わせ電話番号(企業用)

//メール
define('D_CAREER_MAIL', "career-edit@ispot.co.jp");
define('FROM_MAIL', "career-support_c@cosme.net");
define('FROM_MAILU', "career-support_u@cosme.net");			//お問い合わせメールアドレス
define('TO_MAIL', "career-support_c@cosme.net");
define('TO_MAILU', "career-support_u@cosme.net");
define('DOMAIN', "http://career.cosme.net/");
//20081218申請メール用
define('TO_MAILI',"career-edit@ispot.co.jp");

//systemエラー通知用
define('FROM_SYSMAIL', "system@cosme.net");
define('TO_SYSMAIL', "tomidokoror@istyle.co.jp,nakanoa@istyle.co.jp");
define('TO_SYS_ERROR_MAIL', "er@istyle.co.jp");

// httpとhttpsのポート設定
define('HTTP_PORT', 80);
define('HTTPS_PORT', 443);

// HTTP_HOST
define('HTTP_HOST',  'http://career.cosme.net');
define('HTTPS_HOST', 'https://career.cosme.net');

define('LOG_LEVEL', GW_LOG_INFO);

/*ローカルIP
//cosmeAPI URL
define('API_ROOT_HTTPS', 'https://192.168.5.84/member/');
define('API_ROOT_HTTP', 'http://192.168.5.84/member/');

define('API_URL_MAILMAGAZINES_REGIST', API_ROOT_HTTP.'mailmagazines/regist/');
define('API_URL_MAILMAGAZINES_SHOW', API_ROOT_HTTP.'mailmagazines/show/');
define('API_URL_MAILMAGAZINES_UPDATE', API_ROOT_HTTP.'mailmagazines/update/');
define('API_URL_MAILMAGAZINES_CANCEL', API_ROOT_HTTP.'mailmagazines/cancel/');
define('API_URL_MEMBERS_REGIST', API_ROOT_HTTP.'members/regist/');
define('API_URL_MEMBERS_LOGIN', API_ROOT_HTTP.'members/login/');
define('API_URL_MEMBERS_CANCEL', API_ROOT_HTTP.'members/cancel/');
define('API_URL_SERVICES_CHECK', API_ROOT_HTTP.'services/check/');
define('API_URL_SERVICES_SHOW', API_ROOT_HTTP.'services/show/');
define('API_URL_MAILADDRESSES_CHECK', API_ROOT_HTTP.'mailaddresses/check/');
define('API_URL_MAILADDRESSES_UPDATE', API_ROOT_HTTP.'mailaddresses/update/');
define('API_URL_MAILADDRESSES_SHOW', API_ROOT_HTTP.'mailaddresses/show/');
define('API_URL_BASE_INFO_SHOW', API_ROOT_HTTP.'base_info/show/');
define('API_URL_BASE_INFO_UPDATE', API_ROOT_HTTP.'base_info/update/');
define('API_URL_PASSWORDS_UPDATE', API_ROOT_HTTP.'passwords/update/');
define('API_URL_PASSWORDS_CHECK', API_ROOT_HTTP.'passwords/check/');

// ログインチェックURL
define("API_URL_MEMBERS_CHECK_LOGIN",  API_ROOT_HTTP."members/check_login");
*/

/*グローバルIP
*/
//cosmeAPI URL
define('API_ROOT_HTTPS', 'https://192.168.5.8/member_v2/');
define('API_ROOT_HTTP', 'http://192.168.5.8/member_v2/');
//define('API_ROOT_HTTPS', 'https://211.13.207.3/member/');
//define('API_ROOT_HTTP', 'http://211.13.207.3/member/');


define('API_URL_MAILMAGAZINES_REGIST', API_ROOT_HTTP.'mailmagazines/regist/');
define('API_URL_MAILMAGAZINES_SHOW', API_ROOT_HTTP.'mailmagazines/show/');
define('API_URL_MAILMAGAZINES_UPDATE', API_ROOT_HTTP.'mailmagazines/update/');
define('API_URL_MAILMAGAZINES_CANCEL', API_ROOT_HTTP.'mailmagazines/cancel/');
define('API_URL_MEMBERS_REGIST', API_ROOT_HTTP.'members/regist/');
define('API_URL_MEMBERS_LOGIN', API_ROOT_HTTP.'members/login/');
define('API_URL_MEMBERS_CANCEL', API_ROOT_HTTP.'members/cancel/');
define('API_URL_SERVICES_CHECK', API_ROOT_HTTP.'services/check/');
define('API_URL_SERVICES_SHOW', API_ROOT_HTTP.'services/show/');
define('API_URL_MAILADDRESSES_CHECK', API_ROOT_HTTP.'mailaddresses/check/');
define('API_URL_MAILADDRESSES_UPDATE', API_ROOT_HTTP.'mailaddresses/update/');
define('API_URL_MAILADDRESSES_SHOW', API_ROOT_HTTP.'mailaddresses/show/');
define('API_URL_BASE_INFO_SHOW', API_ROOT_HTTP.'base_info/show/');
define('API_URL_BASE_INFO_UPDATE', API_ROOT_HTTP.'base_info/update/');
define('API_URL_PASSWORDS_UPDATE', API_ROOT_HTTP.'passwords/update/');
define('API_URL_PASSWORDS_CHECK', API_ROOT_HTTP.'passwords/check/');

// ログインチェックURL
define("API_URL_MEMBERS_CHECK_LOGIN",  API_ROOT_HTTP."members/check_login");

//本番環境 PointAPI URL
define('POINT_API_ROOT_HTTP',  'http://192.168.5.6/point_api/');

//cosmeサイト URL
define('COSME_ROOT_HTTP',  'http://{0}.cosme.net');
define('COSME_ROOT_HTTPS', 'https://{0}.cosme.net');

//cosme.com URL
define('COSME_COM_ROOT_HTTP',  'http://www.cosme.com/');

//本番環境 グロナビアイコン画像パス
define('POINT_CAMPAIGN_ICON_URL',  'https://cdn-cosme.net/media/point_campaign-frames/');

}

//TESTDATA DEFINE
define('SENDTEST_EMAIL',"caophamtruongson@gmail.com");
define('TESTLOCAL_HOST',"acc.localhost");

//ページキャッシュ
if ($_SERVER['HTTP_HOST'] != TESTLOCAL_HOST) {
	define('CACHE_LIFETIME', 60);
}else {
	define('CACHE_LIFETIME', 1);
}

//一覧表示
define('MTOP_TEXT_LIST_NUM', 20);		//モバイルテキスト枠一覧の件数
define('MTOP_BANNER_LIST_NUM', 20);	//携帯TOP一覧の件数
define('MTOP_NEW_LIST_NUM', 20);		//携帯TOP一覧の件数

define('TOP_BANNER_LIST_NUM', 20);	//TOP一覧の件数
define('TOP_NEW_LIST_NUM', 20);	//TOP一覧の件数
define('TOP_SIDE_LIST_NUM', 20);	//TOP一覧の件数
define('TOP_SIDE1_LIST_NUM', 20);	//TOP一覧の件数
define('TOP_SIDE2_LIST_NUM', 20);	//TOP一覧の件数
define('TOP_SIDE3_LIST_NUM', 20);	//TOP一覧の件数
define('TOP_SIDE4_LIST_NUM', 20);	//TOP一覧の件数
define('TOP_SIDE5_LIST_NUM', 20);	//TOP一覧の件数
define('SPECIAL_BANNER_LIST_NUM', 20);	//TOP一覧の件数
define('TOP_STEXT_LIST_NUM', 20);	//TOP一覧の件数
define('TOP_SBANNER_LIST_NUM', 20);	//TOP一覧の件数
define('WORD_LIST_NUM', 20);	//注目ワード一覧の件数
define('STATUS_LIST_NUM', 20);	//求人広告一覧の件数
define('JOB_LIST_NUM', 20);	//求人広告一覧の件数
define('SPECIAL_LIST_NUM', 20);	//特集求人一覧の件数
//define('SPECIAL_LIST_NUM', 5);	//特集求人一覧の件数
define('DEAD_LIST_NUM', 20);//号一覧の件数
define('JOBS_COUNT', 5);	//TOP新着一覧の件数
define('SPECIAL_COUNT', 5);	//TOP特集一覧の件数
define('CORP_LIST_NUM', 20);	//企業一覧の件数
define('CLIP_LIST_NUM', 20);		//会員画面＿クリップした求人・検索条件一覧表示件数

define('APPLI_LIST_NUM', 20);		//会員画面＿応募履歴一覧表示件数
define('MAILU_LIST_NUM', 20);		//会員画面＿受信箱表示件数
define('RELEASE_LIST_NUM', 20);		//一般画面＿ユーザへのお知らせ表示件数＆管理画面＿ユーザーお知らせ一覧表示件数
define('BANNER_LIST_NUM', 20);		//管理画面＿企業ロゴTOP一覧表示件数
define('ACORP_LIST_NUM', 20);		//管理画面＿企業一覧表示件数
define('INQUIRYC_LIST_NUM', 20);		//管理画面＿企業会員企業問い合わせ一覧表示件数
define('INQUIRYJ_LIST_NUM', 20);		//管理画面＿求人情報変更依頼一覧表示件数
define('INQUIRYM_LIST_NUM', 20);		//管理画面＿企業情報変更依頼一覧表示件数
define('INQUIRYR_LIST_NUM', 20);		//管理画面＿出稿検討企業　お問い合わせ一覧　一覧表示件数
define('INQUIRYU_LIST_NUM', 20);		//管理画面＿ユーザー問い合せ一覧表示件数
define('AJOB_LIST_NUM', 20);		//管理画面＿求人広告一覧表示件数
define('JOBSPECIAL_LIST_NUM', 20);		//管理画面＿特集一覧表示件数
define('NEWS_LIST_NUM', 20);		//管理画面＿企業お知らせ一覧表示件数＆企業画面＿企業へのお知らせ一覧表示件数
define('ENQ_LIST_NUM', 30);		//管理画面＿アンケート一覧表示件数
define('USER_LIST_NUM', 20);		//管理画面＿会員一覧表示件数
define('MAILC_LIST_NUM', 20);		//企業画面＿メール一覧表示件数
define('MAILTEMP_LIST_NUM', 20);		//企業画面＿テンプレート一覧表示件数
define('BUY_LIST_NUM', 20);		//管理画面＿求人広告購入依頼一覧表示件数
define('BRAND_LIST_NUM', 100);		//管理画面＿ブランド一覧表示件数
define('BRANDPICKUP_LIST_NUM', 50);		//管理画面＿ブランドTOP表示一覧表示件数
define('DIRECTMAIL_LIST_NUM', 50);		//管理画面＿ダイレクトメール一覧表示件数
define('DIRECTSEND_LIST_NUM', 50);		//管理画面＿ダイレクトメール送信一覧表示件数
define('CONDITION_LIST_NUM', 50);		//管理画面＿ダイレクトメール送信先一覧表示件数
define('SCOUTMAIL_LIST_NUM', 50);		//＿スカウトメール一覧表示件数
define('MLAND_BANNER_LIST_NUM', 50);	//TOP一覧の件数

//求人広告状態
define('JOB_STATUS_NEW', 0);		//作成中
define('JOB_STATUS_WAIT', 1);		//申請中
define('JOB_STATUS_CHECK', 2);		//審査中
define('JOB_STATUS_CREATE_END', 9);	//作成中末端

define('JOB_STATUS_OK', 10);		//承認済
define('JOB_STATUS_OK_END', 19);	//承認末端

define('JOB_STATUS_CLOSE', 20);		//終了
define('JOB_STATUS_CLOSE_END', 20);	//終了末端





// フォルダ構成
define('GW_TEMPLATE_CLASS', SYSTEM_DIRECTORY . '/lib/Smarty/Smarty.class.php');	//Smarty

define('GW_USER_SESSION_LIFETIME', 3600*24*30);
define('GW_CORP_SESSION_LIFETIME', 3600*2);
define('GW_ADMIN_SESSION_LIFETIME', 1800);
define('GW_MOBILE_SESSION_LIFETIME', 3600);
define('GW_SMARTPHONE_SESSION_LIFETIME', 3600);

if(substr($_SERVER["SCRIPT_NAME"] , 1 , 5) == 'admin'){
	define('GW_SESSION_NAME', 'Session_ID_Admin');
	define('GW_SESSION_LIFETIME', GW_ADMIN_SESSION_LIFETIME);
	define('GW_TEMPLATE_TEMPLATES_DIR', SYSTEM_DIRECTORY . '/smarty/admin_templates');	//テンプレート
	define('GW_TEMPLATE_COMPILE_DIR', SYSTEM_DIRECTORY . '/smarty/admin_templates_c');	//コンパイル済みテンプレート
	ini_set('session.cookie_lifetime', 0);
}elseif(substr($_SERVER["SCRIPT_NAME"] , 1 , 4) == 'corp'){
	define('GW_SESSION_NAME', 'Session_ID_Corp');
	define('GW_SESSION_LIFETIME', GW_CORP_SESSION_LIFETIME);
	define('GW_TEMPLATE_TEMPLATES_DIR', SYSTEM_DIRECTORY . '/smarty/corp_templates');	//テンプレート
	define('GW_TEMPLATE_COMPILE_DIR', SYSTEM_DIRECTORY . '/smarty/corp_templates_c');	//コンパイル済みテンプレート
	ini_set('session.cookie_lifetime', GW_SESSION_LIFETIME);
}elseif(substr($_SERVER["SCRIPT_NAME"] , 1 , 2) == 'm/'){
	define('GW_SESSION_NAME', 'Session_ID_Mobile');
	define('GW_SESSION_LIFETIME', GW_MOBILE_SESSION_LIFETIME);
	define('GW_TEMPLATE_TEMPLATES_DIR', SYSTEM_DIRECTORY . '/smarty/mobile_templates');	//テンプレート
	define('GW_TEMPLATE_COMPILE_DIR', SYSTEM_DIRECTORY . '/smarty/mobile_templates_c');	//コンパイル済みテンプレート
	ini_set('session.cookie_lifetime', GW_SESSION_LIFETIME);
}elseif(substr($_SERVER["SCRIPT_NAME"] , 1 , 2) == 's/'){
	define('GW_SESSION_NAME', 'Session_ID_Smartphone');
	define('GW_SESSION_LIFETIME', GW_SMARTPHONE_SESSION_LIFETIME);
	define('GW_TEMPLATE_TEMPLATES_DIR', SYSTEM_DIRECTORY . '/smarty/s_templates');	//テンプレート
	define('GW_TEMPLATE_COMPILE_DIR', SYSTEM_DIRECTORY . '/smarty/s_templates_c');	//コンパイル済みテンプレート
	ini_set('session.cookie_lifetime', GW_SESSION_LIFETIME);
}elseif(substr($_SERVER["SCRIPT_NAME"] , 1 , 5) == 'salon'){
	define('GW_SESSION_NAME', 'Session_ID_SALON');
	define('GW_SESSION_LIFETIME', GW_MOBILE_SESSION_LIFETIME);
	define('GW_TEMPLATE_TEMPLATES_DIR', SYSTEM_DIRECTORY . '/smarty/salon_templates');	//テンプレート
	define('GW_TEMPLATE_COMPILE_DIR', SYSTEM_DIRECTORY . '/smarty/salon_templates_c');	//コンパイル済みテンプレート
	ini_set('session.cookie_lifetime', GW_SESSION_LIFETIME);
}else{
	define('GW_SESSION_NAME', 'Session_ID_User');
	define('GW_SESSION_LIFETIME', GW_USER_SESSION_LIFETIME);
	define('GW_TEMPLATE_TEMPLATES_DIR', SYSTEM_DIRECTORY . '/smarty/templates');	//テンプレート
	define('GW_TEMPLATE_COMPILE_DIR', SYSTEM_DIRECTORY . '/smarty/templates_c');	//コンパイル済みテンプレート
	ini_set('session.cookie_lifetime', 0);
}
ini_set('session.gc_maxlifetime', max(GW_USER_SESSION_LIFETIME, GW_CORP_SESSION_LIFETIME, GW_ADMIN_SESSION_LIFETIME,GW_SMARTPHONE_SESSION_LIFETIME));
ini_set('session.use_trans_sid', 0);

if(BAT_LOG=='YES'){
	define('GW_LOG_FILE', SYSTEM_DIRECTORY . '/logs/b');	//batログ
}else{
	define('GW_LOG_FILE', SYSTEM_DIRECTORY . '/logs');	//ログ
}
define('GW_MODEL_DIR', SYSTEM_DIRECTORY . '/inc/model');	//モデル

define('API_SERVICE_ID', 3);	//モデル

define('LAND_JOB_LIST_NUM', 8);	//ランディングページ　求人表示件数
define('LAND_JOB_LIST_NUM_M', 8);	//ランディングページ　求人表示件数
define('S_PAR','/s');
define('S_PAR_NON','s');
define('HTSITE','http://');
