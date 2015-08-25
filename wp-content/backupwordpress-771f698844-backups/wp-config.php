<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'dmitry_ur5fot');

/** Имя пользователя MySQL */
define('DB_USER', 'ur5fot');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'yme4e9y6a');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

define('WP_HOME', 'ur5fot.dev-s.com.ua/lp/4/');
define('WP_SITEURL', 'ur5fot.dev-s.com.ua/lp/4/');




/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EEdf)r{?Z8+vO|?k.+b`3JH+s*^/^*UCpB}#0GS#<8X;G^Xpeb`~){g|=Fty$~r7');
define('SECURE_AUTH_KEY',  'hnLZ-e `E-t6zzJaC>g9[YO lAXEXcap#T~D,3ld`_YsHg-2P/Vq0CC[_f~}+yW(');
define('LOGGED_IN_KEY',    'k,*R7PjiqYe_:P >`[2B@wbmhhZ^w^huR6KJAkV|/9#!W`^ehE;!Mqj0-)TFF)3^');
define('NONCE_KEY',        'C!%at23H6*{c.)U+iT* 1(Q-9_sl:AeIcKnJZ)0<gu_Rx/$ak,p+~)hJoF,B.AOU');
define('AUTH_SALT',        ':U~pDX!Yn}eeW HHA+u~jdR5uK_CM-35.WbFc6xBWj</)@WEpSK7`855,,/M@T3#');
define('SECURE_AUTH_SALT', 'T 5Hx7s[ajFA/xjjW:]2lsEv:6s~A(BaA1+3gXfn6wU8@8`*KCFu&]RR.J|oM`.q');
define('LOGGED_IN_SALT',   'g_i]||7.Y}ha|t{C$e8R@D~GuY8(q,1uB6(+fc:b4?[3bBM@72|j&NY|fE+&gY[+');
define('NONCE_SALT',       '8i=0exOmT<r0$]&V-0s@-9T$+2-->Gm4+EtfE]F}Cz$o4_h0ITF|w45C??!z>tz$');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_lp_3_123478_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
	
if (is_admin()) {
add_filter ( 'filesystem_method', create_function('$a', 'return "direct";' ) );
define ('FS_CHMOD_DIR', 0751);
}