<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test task' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b}#w*SE`k?|D<N+ZKrj(eCOA]LLJ8[- K-z]hHvJ]2l:l]hP*`3,nvox?yy:&kf/' );
define( 'SECURE_AUTH_KEY',  '!!+Vr^CT5vd`<P4p*8|yNN,AnWlq{CCQCbi~z?] ~+ym_EMjYPVEd[>&B66i> 57' );
define( 'LOGGED_IN_KEY',    '6In9c$m<@hW)32Y/d8P&}]P~]sBkvse_Uc0/~9g$Ell|Mx-gr@n=^J|xNib#Brcj' );
define( 'NONCE_KEY',        '`YX.j_{0;fP)Tw5n a:cWI?{?`;~|J$`f#GS,|2+M@K52m{{3&{Y+CPYr PjSCr{' );
define( 'AUTH_SALT',        'c<.;>i%Lb>VpP_p,If${lxZ:s4}.k(xcOnQHl-fW&+Ru_E}$]Yt#=&p-w4EDFZ6a' );
define( 'SECURE_AUTH_SALT', 'EHtZ@,;F<JILNgY=IeIQZ@rMyRuHB,aIIVVD[E{z(go-dZ~9}MTzokDO,t+kxFn=' );
define( 'LOGGED_IN_SALT',   'r ENz`??3CuV$=G+}z4/s9Qxhd 3Cnr~8;gZYi+eF~c;,F8t_UuXmN_:ov#{2[DC' );
define( 'NONCE_SALT',       '~L~B`s|WBONYX|,PaNLu^0.#9}]7N#[5%cNHPT0>|7tj?o/rgkL8UPqMPZIN/%to' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
